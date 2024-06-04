<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyCriminalProsecutioneRequest;
use App\Http\Requests\StoreCriminalProsecutioneRequest;
use App\Http\Requests\UpdateCriminalProsecutioneRequest;
use App\Models\CriminalProsecutione;
use App\Models\EmployeeList;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class CriminalProsecutioneController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('criminal_prosecutione_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = CriminalProsecutione::with(['employee'])->select(sprintf('%s.*', (new CriminalProsecutione)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'criminal_prosecutione_show';
                $editGate      = 'criminal_prosecutione_edit';
                $deleteGate    = 'criminal_prosecutione_delete';
                $crudRoutePart = 'criminal-prosecutiones';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->addColumn('employee_employeeid', function ($row) {
                return $row->employee ? $row->employee->employeeid : '';
            });

            $table->addColumn('employee_fullname_en', function ($row) {
                return $row->employee ? $row->employee->fullname_en : '';
            });

            $table->editColumn('judgement_type', function ($row) {
                return $row->judgement_type ? $row->judgement_type : '';
            });
            $table->editColumn('natureof_offence', function ($row) {
                return $row->natureof_offence ? $row->natureof_offence : '';
            });
            $table->editColumn('government_order_no', function ($row) {
                return $row->government_order_no ? $row->government_order_no : '';
            });
            $table->editColumn('court_order', function ($row) {
                return $row->court_order ? '<a href="' . $row->court_order->getUrl() . '" target="_blank">' . trans('global.downloadFile') . '</a>' : '';
            });
            $table->editColumn('remarks', function ($row) {
                return $row->remarks ? $row->remarks : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'employee', 'court_order']);

            return $table->make(true);
        }

        return view('admin.criminalProsecutiones.index');
    }

    public function create()
    {
        abort_if(Gate::denies('criminal_prosecutione_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = EmployeeList::pluck('employeeid', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.criminalProsecutiones.create', compact('employees'));
    }

    public function store(StoreCriminalProsecutioneRequest $request)
    {
        $criminalProsecutione = CriminalProsecutione::create($request->all());

        if ($request->input('court_order', false)) {
            $criminalProsecutione->addMedia(storage_path('tmp/uploads/' . basename($request->input('court_order'))))->toMediaCollection('court_order');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $criminalProsecutione->id]);
        }
         return redirect()->back()->with('status', __('global.saveactions'));
        //return redirect()->route('admin.criminal-prosecutiones.index');
    }

    public function edit(CriminalProsecutione $criminalProsecutione)
    {
        abort_if(Gate::denies('criminal_prosecutione_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = EmployeeList::pluck('employeeid', 'id')->prepend(trans('global.pleaseSelect'), '');

        $criminalProsecutione->load('employee');

        return view('admin.criminalProsecutiones.edit', compact('criminalProsecutione', 'employees'));
    }

    public function update(UpdateCriminalProsecutioneRequest $request, CriminalProsecutione $criminalProsecutione)
    {
        $criminalProsecutione->update($request->all());

        if ($request->input('court_order', false)) {
            if (! $criminalProsecutione->court_order || $request->input('court_order') !== $criminalProsecutione->court_order->file_name) {
                if ($criminalProsecutione->court_order) {
                    $criminalProsecutione->court_order->delete();
                }
                $criminalProsecutione->addMedia(storage_path('tmp/uploads/' . basename($request->input('court_order'))))->toMediaCollection('court_order');
            }
        } elseif ($criminalProsecutione->court_order) {
            $criminalProsecutione->court_order->delete();
        }

        return redirect()->route('admin.criminal-prosecutiones.index');
    }

    public function show(CriminalProsecutione $criminalProsecutione)
    {
        abort_if(Gate::denies('criminal_prosecutione_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $criminalProsecutione->load('employee');

        return view('admin.criminalProsecutiones.show', compact('criminalProsecutione'));
    }

    public function destroy(CriminalProsecutione $criminalProsecutione)
    {
        abort_if(Gate::denies('criminal_prosecutione_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $criminalProsecutione->delete();

        return back();
    }

    public function massDestroy(MassDestroyCriminalProsecutioneRequest $request)
    {
        $criminalProsecutiones = CriminalProsecutione::find(request('ids'));

        foreach ($criminalProsecutiones as $criminalProsecutione) {
            $criminalProsecutione->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('criminal_prosecutione_create') && Gate::denies('criminal_prosecutione_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new CriminalProsecutione();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
