<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyCriminalproDisciplinaryRequest;
use App\Http\Requests\StoreCriminalproDisciplinaryRequest;
use App\Http\Requests\UpdateCriminalproDisciplinaryRequest;
use App\Models\CriminalproDisciplinary;
use App\Models\CriminalProsecutione;
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

            $table->editColumn('government_order_no', function ($row) {
                return $row->government_order_no ? $row->government_order_no : '';
            });
            $table->editColumn('court_name', function ($row) {
                return $row->court_name ? $row->court_name : '';
            });
            $table->editColumn('court_orader', function ($row) {
                return $row->court_orader ? '<a href="' . $row->court_orader->getUrl() . '" target="_blank">' . trans('global.downloadFile') . '</a>' : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'criminalprosecutione', 'court_orader']);

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

    public function store(StoreCriminalproDisciplinaryRequest $request)
    {
        $criminalproDisciplinary = CriminalproDisciplinary::create($request->all());

        if ($request->input('court_orader', false)) {
            $criminalproDisciplinary->addMedia(storage_path('tmp/uploads/' . basename($request->input('court_orader'))))->toMediaCollection('court_orader');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $criminalproDisciplinary->id]);
        }

        return redirect()->route('admin.criminalpro-disciplinaries.index');
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

        if ($request->input('court_orader', false)) {
            if (! $criminalproDisciplinary->court_orader || $request->input('court_orader') !== $criminalproDisciplinary->court_orader->file_name) {
                if ($criminalproDisciplinary->court_orader) {
                    $criminalproDisciplinary->court_orader->delete();
                }
                $criminalproDisciplinary->addMedia(storage_path('tmp/uploads/' . basename($request->input('court_orader'))))->toMediaCollection('court_orader');
            }
        } elseif ($criminalproDisciplinary->court_orader) {
            $criminalproDisciplinary->court_orader->delete();
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
