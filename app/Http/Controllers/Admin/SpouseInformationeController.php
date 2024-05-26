<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroySpouseInformationeRequest;
use App\Http\Requests\StoreSpouseInformationeRequest;
use App\Http\Requests\UpdateSpouseInformationeRequest;
use App\Models\EmployeeList;
use App\Models\SpouseInformatione;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class SpouseInformationeController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('spouse_informatione_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = SpouseInformatione::with(['employee'])->select(sprintf('%s.*', (new SpouseInformatione)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'spouse_informatione_show';
                $editGate      = 'spouse_informatione_edit';
                $deleteGate    = 'spouse_informatione_delete';
                $crudRoutePart = 'spouse-informationes';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('name_bn', function ($row) {
                return $row->name_bn ? $row->name_bn : '';
            });
            $table->editColumn('name_en', function ($row) {
                return $row->name_en ? $row->name_en : '';
            });
            $table->editColumn('nid_number', function ($row) {
                return $row->nid_number ? $row->nid_number : '';
            });
            $table->editColumn('nid_upload', function ($row) {
                return $row->nid_upload ? '<a href="' . $row->nid_upload->getUrl() . '" target="_blank">' . trans('global.downloadFile') . '</a>' : '';
            });
            $table->editColumn('occupation', function ($row) {
                return $row->occupation ? $row->occupation : '';
            });
            $table->editColumn('office_address', function ($row) {
                return $row->office_address ? $row->office_address : '';
            });
            $table->editColumn('phone_number', function ($row) {
                return $row->phone_number ? $row->phone_number : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'nid_upload']);

            return $table->make(true);
        }

        return view('admin.spouseInformationes.index');
    }

    public function create()
    {
        abort_if(Gate::denies('spouse_informatione_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = EmployeeList::pluck('employeeid', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.spouseInformationes.create', compact('employees'));
    }

    public function store(StoreSpouseInformationeRequest $request)
    {
        $spouseInformatione = SpouseInformatione::create($request->all());

        if ($request->input('nid_upload', false)) {
            $spouseInformatione->addMedia(storage_path('tmp/uploads/' . basename($request->input('nid_upload'))))->toMediaCollection('nid_upload');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $spouseInformatione->id]);
        }

        return redirect()->route('admin.spouse-informationes.index');
    }

    public function edit(SpouseInformatione $spouseInformatione)
    {
        abort_if(Gate::denies('spouse_informatione_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = EmployeeList::pluck('employeeid', 'id')->prepend(trans('global.pleaseSelect'), '');

        $spouseInformatione->load('employee');

        return view('admin.spouseInformationes.edit', compact('employees', 'spouseInformatione'));
    }

    public function update(UpdateSpouseInformationeRequest $request, SpouseInformatione $spouseInformatione)
    {
        $spouseInformatione->update($request->all());

        if ($request->input('nid_upload', false)) {
            if (! $spouseInformatione->nid_upload || $request->input('nid_upload') !== $spouseInformatione->nid_upload->file_name) {
                if ($spouseInformatione->nid_upload) {
                    $spouseInformatione->nid_upload->delete();
                }
                $spouseInformatione->addMedia(storage_path('tmp/uploads/' . basename($request->input('nid_upload'))))->toMediaCollection('nid_upload');
            }
        } elseif ($spouseInformatione->nid_upload) {
            $spouseInformatione->nid_upload->delete();
        }

        return redirect()->route('admin.spouse-informationes.index');
    }

    public function show(SpouseInformatione $spouseInformatione)
    {
        abort_if(Gate::denies('spouse_informatione_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $spouseInformatione->load('employee');

        return view('admin.spouseInformationes.show', compact('spouseInformatione'));
    }

    public function destroy(SpouseInformatione $spouseInformatione)
    {
        abort_if(Gate::denies('spouse_informatione_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $spouseInformatione->delete();

        return back();
    }

    public function massDestroy(MassDestroySpouseInformationeRequest $request)
    {
        $spouseInformationes = SpouseInformatione::find(request('ids'));

        foreach ($spouseInformationes as $spouseInformatione) {
            $spouseInformatione->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('spouse_informatione_create') && Gate::denies('spouse_informatione_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new SpouseInformatione();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
