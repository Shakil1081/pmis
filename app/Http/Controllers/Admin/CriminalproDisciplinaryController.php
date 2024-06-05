<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyCriminalproDisciplinaryRequest;
use App\Http\Requests\StoreCriminalproDisciplinaryRequest;
use App\Http\Requests\UpdateCriminalproDisciplinaryRequest;
use App\Models\CriminalproDisciplinary;
use App\Models\CriminalProsecutione;
use App\Models\DiciplinaryAction;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class CriminalproDisciplinaryController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('criminalpro_disciplinary_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = CriminalproDisciplinary::with(['criminalprosecutione'])->select(sprintf('%s.*', (new CriminalproDisciplinary)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'criminalpro_disciplinary_show';
                $editGate      = 'criminalpro_disciplinary_edit';
                $deleteGate    = 'criminalpro_disciplinary_delete';
                $crudRoutePart = 'criminalpro-disciplinaries';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->addColumn('criminalprosecutione_natureof_offence', function ($row) {
                return $row->criminalprosecutione ? $row->criminalprosecutione->natureof_offence : '';
            });

            $table->editColumn('judgement_type', function ($row) {
                return $row->judgement_type ? $row->judgement_type : '';
            });
            $table->editColumn('government_order_no', function ($row) {
                return $row->government_order_no ? $row->government_order_no : '';
            });
            $table->editColumn('order_upload_file', function ($row) {
                return $row->order_upload_file ? '<a href="' . $row->order_upload_file->getUrl() . '" target="_blank">' . trans('global.downloadFile') . '</a>' : '';
            });
            $table->editColumn('remarks', function ($row) {
                return $row->remarks ? $row->remarks : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'criminalprosecutione', 'order_upload_file']);

            return $table->make(true);
        }

        return view('admin.criminalproDisciplinaries.index');
    }

    public function create()
    {
        abort_if(Gate::denies('criminalpro_disciplinary_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $criminalprosecutiones = CriminalProsecutione::pluck('natureof_offence', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.criminalproDisciplinaries.create', compact('criminalprosecutiones'));
    }

    // public function store(StoreCriminalproDisciplinaryRequest $request)
    // {
    //     $criminalproDisciplinary = CriminalproDisciplinary::create($request->all());

    //     if ($request->input('order_upload_file', false)) {
    //         $criminalproDisciplinary->addMedia(storage_path('tmp/uploads/' . basename($request->input('order_upload_file'))))->toMediaCollection('order_upload_file');
    //     }

    //     if ($media = $request->input('ck-media', false)) {
    //         Media::whereIn('id', $media)->update(['model_id' => $criminalproDisciplinary->id]);
    //     }
    //     return redirect()->back()->with('status', __('global.saveactions'));
    //     //return redirect()->route('admin.criminalpro-disciplinaries.index');
    // }

//     public function store(StoreCriminalproDisciplinaryRequest $request)
// {
 
//     $criminalproDisciplinary = CriminalproDisciplinary::create($request->all());
//     if ($request->hasFile('order_upload_file')) {
//         $orderUploadFile = $request->file('order_upload_file');
//         $criminalproDisciplinary->addMedia($orderUploadFile)->toMediaCollection('order_upload_file');
//     }

//     // Handle any other media files attached via CKEditor (if any)
//     if ($media = $request->input('ck-media', false)) {
//         Media::whereIn('id', $media)->update(['model_id' => $criminalproDisciplinary->id]);
//     }

//     // Redirect back with a success message
//     return redirect()->back()->with('status', __('global.saveactions'));
// }



public function store(StoreCriminalproDisciplinaryRequest $request)
{
    // Validate the request data using the StoreCriminalProsecutioneRequest class
    $validatedData = $request->validated();

  // dd($request->all());

    $diciplinaryAction = CriminalproDisciplinary::create($validatedData);

    if ($request->hasFile('court_order')) {
        $courtOrderFiles = $request->file('court_order');
        foreach ($courtOrderFiles as $courtOrderFile) {
            $diciplinaryAction->addMedia($courtOrderFile)->toMediaCollection('court_order');
        }
    }


    $govtOrderNos = $request->input('govt_order_no', []);
    $govtOrderFiles = $request->file('govt_order_file', []);


    foreach ($govtOrderNos as $index => $govtOrderNo) {
        
        if (isset($govtOrderFiles[$index])) {
            $govtOrderFile = $govtOrderFiles[$index];

           
            $govtOrderPath = $govtOrderFile->store('govt_orders', 'public'); 

         
            $diciplinaryActionData = [
                'govt_order_no' => $govtOrderNo,
                'govt_order' => $govtOrderPath,  
                'diciplinary_action_id' => $diciplinaryAction->id,
            ];

            //dd( $diciplinaryActionData);
            DiciplinaryAction::create($diciplinaryActionData);
        }
    }

    // Handle any other media files attached via CKEditor (if any)
    if ($media = $request->input('ck-media', false)) {
        Media::whereIn('id', $media)->update(['model_id' => $diciplinaryAction->id]);
    }

    // Redirect back with a success message
    return redirect()->back()->with('status', __('global.saveactions'));
}




    public function edit(CriminalproDisciplinary $criminalproDisciplinary)
    {
        abort_if(Gate::denies('criminalpro_disciplinary_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $criminalprosecutiones = CriminalProsecutione::pluck('natureof_offence', 'id')->prepend(trans('global.pleaseSelect'), '');

        $criminalproDisciplinary->load('criminalprosecutione');

        return view('admin.criminalproDisciplinaries.edit', compact('criminalproDisciplinary', 'criminalprosecutiones'));
    }

    public function update(UpdateCriminalproDisciplinaryRequest $request, CriminalproDisciplinary $criminalproDisciplinary)
    {
        $criminalproDisciplinary->update($request->all());

        if ($request->input('order_upload_file', false)) {
            if (! $criminalproDisciplinary->order_upload_file || $request->input('order_upload_file') !== $criminalproDisciplinary->order_upload_file->file_name) {
                if ($criminalproDisciplinary->order_upload_file) {
                    $criminalproDisciplinary->order_upload_file->delete();
                }
                $criminalproDisciplinary->addMedia(storage_path('tmp/uploads/' . basename($request->input('order_upload_file'))))->toMediaCollection('order_upload_file');
            }
        } elseif ($criminalproDisciplinary->order_upload_file) {
            $criminalproDisciplinary->order_upload_file->delete();
        }

        return redirect()->route('admin.criminalpro-disciplinaries.index');
    }

    public function show(CriminalproDisciplinary $criminalproDisciplinary)
    {
        abort_if(Gate::denies('criminalpro_disciplinary_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $criminalproDisciplinary->load('criminalprosecutione');

        return view('admin.criminalproDisciplinaries.show', compact('criminalproDisciplinary'));
    }

    public function destroy(CriminalproDisciplinary $criminalproDisciplinary)
    {
        abort_if(Gate::denies('criminalpro_disciplinary_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $criminalproDisciplinary->delete();

        return back();
    }

    public function massDestroy(MassDestroyCriminalproDisciplinaryRequest $request)
    {
        $criminalproDisciplinaries = CriminalproDisciplinary::find(request('ids'));

        foreach ($criminalproDisciplinaries as $criminalproDisciplinary) {
            $criminalproDisciplinary->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('criminalpro_disciplinary_create') && Gate::denies('criminalpro_disciplinary_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new CriminalproDisciplinary();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
