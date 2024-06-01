<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyChildRequest;
use App\Http\Requests\StoreChildRequest;
use App\Http\Requests\UpdateChildRequest;
use App\Models\Child;
use App\Models\EmployeeList;
use App\Models\Gender;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class ChildController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('child_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Child::with(['employee', 'gender'])->select(sprintf('%s.*', (new Child)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'child_show';
                $editGate      = 'child_edit';
                $deleteGate    = 'child_delete';
                $crudRoutePart = 'children';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });
            $table->addColumn('employeeid', function ($row) {
                return $row->employee ? $row->employee->employeeid : '';
            });
            $table->addColumn('name', function ($row) {
                return $row->employee ? $row->employee->fullname_bn : '';
            });

            $table->editColumn('name_bn', function ($row) {
                return $row->name_bn ? $row->name_bn : '';
            });
            $table->editColumn('name_en', function ($row) {
                return $row->name_en ? $row->name_en : '';
            });

            $table->editColumn('complite_21', function ($row) {
                return $row->complite_21 ? $row->complite_21 : '';
            });
            $table->addColumn('gender_name_bn', function ($row) {
                return $row->gender ? $row->gender->name_bn : '';
            });

            $table->editColumn('nid_number', function ($row) {
                return $row->nid_number ? $row->nid_number : '';
            });
            $table->editColumn('passport_number', function ($row) {
                return $row->passport_number ? $row->passport_number : '';
            });
            $table->editColumn('childdren_nid', function ($row) {
                return $row->childdren_nid ? '<a href="' . $row->childdren_nid->getUrl() . '" target="_blank">' . trans('global.downloadFile') . '</a>' : '';
            });
            $table->editColumn('childdren_passporft', function ($row) {
                return $row->childdren_passporft ? '<a href="' . $row->childdren_passporft->getUrl() . '" target="_blank">' . trans('global.downloadFile') . '</a>' : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'gender', 'childdren_nid', 'childdren_passporft']);

            return $table->make(true);
        }

        return view('admin.children.index');
    }

    public function create()
    {
        $locale = App::getLocale();
        $columname = $locale === 'bn' ? 'name_bn' : 'name_en';
        abort_if(Gate::denies('child_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = EmployeeList::pluck('employeeid', 'id')->prepend(trans('global.pleaseSelect'), '');

        $genders = Gender::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.children.create', compact('employees', 'genders'));
    }

    public function store(StoreChildRequest $request)
    {
        $child = Child::create($request->all());

        if ($request->input('birth_certificate', false)) {
            $child->addMedia(storage_path('tmp/uploads/' . basename($request->input('birth_certificate'))))->toMediaCollection('birth_certificate');
        }

        if ($request->input('childdren_nid', false)) {
            $child->addMedia(storage_path('tmp/uploads/' . basename($request->input('childdren_nid'))))->toMediaCollection('childdren_nid');
        }

        if ($request->input('childdren_passporft', false)) {
            $child->addMedia(storage_path('tmp/uploads/' . basename($request->input('childdren_passporft'))))->toMediaCollection('childdren_passporft');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $child->id]);
        }
        return redirect()->back()->with('status', 'Action successful!');
        //return redirect()->route('admin.children.index');
    }

    public function edit(Child $child)
    {
        abort_if(Gate::denies('child_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = EmployeeList::pluck('employeeid', 'id')->prepend(trans('global.pleaseSelect'), '');

        $genders = Gender::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $child->load('employee', 'gender');

        return view('admin.children.edit', compact('child', 'employees', 'genders'));
    }

    public function update(UpdateChildRequest $request, Child $child)
    {
        $child->update($request->all());

        if ($request->input('birth_certificate', false)) {
            if (! $child->birth_certificate || $request->input('birth_certificate') !== $child->birth_certificate->file_name) {
                if ($child->birth_certificate) {
                    $child->birth_certificate->delete();
                }
                $child->addMedia(storage_path('tmp/uploads/' . basename($request->input('birth_certificate'))))->toMediaCollection('birth_certificate');
            }
        } elseif ($child->birth_certificate) {
            $child->birth_certificate->delete();
        }

        if ($request->input('childdren_nid', false)) {
            if (! $child->childdren_nid || $request->input('childdren_nid') !== $child->childdren_nid->file_name) {
                if ($child->childdren_nid) {
                    $child->childdren_nid->delete();
                }
                $child->addMedia(storage_path('tmp/uploads/' . basename($request->input('childdren_nid'))))->toMediaCollection('childdren_nid');
            }
        } elseif ($child->childdren_nid) {
            $child->childdren_nid->delete();
        }

        if ($request->input('childdren_passporft', false)) {
            if (! $child->childdren_passporft || $request->input('childdren_passporft') !== $child->childdren_passporft->file_name) {
                if ($child->childdren_passporft) {
                    $child->childdren_passporft->delete();
                }
                $child->addMedia(storage_path('tmp/uploads/' . basename($request->input('childdren_passporft'))))->toMediaCollection('childdren_passporft');
            }
        } elseif ($child->childdren_passporft) {
            $child->childdren_passporft->delete();
        }

        return redirect()->route('admin.children.index');
    }

    public function show(Child $child)
    {
        abort_if(Gate::denies('child_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $child->load('employee', 'gender');

        return view('admin.children.show', compact('child'));
    }

    public function destroy(Child $child)
    {
        abort_if(Gate::denies('child_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $child->delete();

        return back();
    }

    public function massDestroy(MassDestroyChildRequest $request)
    {
        $children = Child::find(request('ids'));

        foreach ($children as $child) {
            $child->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('child_create') && Gate::denies('child_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Child();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
