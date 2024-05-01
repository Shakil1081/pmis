<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyEmployeeListRequest;
use App\Http\Requests\StoreEmployeeListRequest;
use App\Http\Requests\UpdateEmployeeListRequest;
use App\Models\BloodGroup;
use App\Models\District;
use App\Models\EmployeeList;
use App\Models\Gender;
use App\Models\JobType;
use App\Models\LicenseType;
use App\Models\Maritalstatus;
use App\Models\Quotum;
use App\Models\Religion;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class EmployeeListController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('employee_list_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = EmployeeList::with(['home_district', 'marital_statu', 'gender', 'religion', 'blood_group', 'license_type', 'job_type', 'quota'])->select(sprintf('%s.*', (new EmployeeList)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'employee_list_show';
                $editGate      = 'employee_list_edit';
                $deleteGate    = 'employee_list_delete';
                $crudRoutePart = 'employee-lists';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : '';
            });
            $table->editColumn('employeeid', function ($row) {
                return $row->employeeid ? $row->employeeid : '';
            });
            $table->editColumn('height', function ($row) {
                return $row->height ? $row->height : '';
            });
            $table->editColumn('special_identity', function ($row) {
                return $row->special_identity ? $row->special_identity : '';
            });
            $table->addColumn('home_district_name_bn', function ($row) {
                return $row->home_district ? $row->home_district->name_bn : '';
            });

            $table->addColumn('marital_statu_name', function ($row) {
                return $row->marital_statu ? $row->marital_statu->name : '';
            });

            $table->addColumn('gender_name_bn', function ($row) {
                return $row->gender ? $row->gender->name_bn : '';
            });

            $table->addColumn('religion_name_bn', function ($row) {
                return $row->religion ? $row->religion->name_bn : '';
            });

            $table->addColumn('blood_group_name_bn', function ($row) {
                return $row->blood_group ? $row->blood_group->name_bn : '';
            });

            $table->editColumn('nid', function ($row) {
                return $row->nid ? $row->nid : '';
            });
            $table->editColumn('nid_upload', function ($row) {
                return $row->nid_upload ? '<a href="' . $row->nid_upload->getUrl() . '" target="_blank">' . trans('global.downloadFile') . '</a>' : '';
            });
            $table->editColumn('passport', function ($row) {
                return $row->passport ? $row->passport : '';
            });
            $table->editColumn('passport_upload', function ($row) {
                return $row->passport_upload ? '<a href="' . $row->passport_upload->getUrl() . '" target="_blank">' . trans('global.downloadFile') . '</a>' : '';
            });
            $table->addColumn('license_type_name_bn', function ($row) {
                return $row->license_type ? $row->license_type->name_bn : '';
            });

            $table->editColumn('license_upload', function ($row) {
                return $row->license_upload ? '<a href="' . $row->license_upload->getUrl() . '" target="_blank">' . trans('global.downloadFile') . '</a>' : '';
            });
            $table->editColumn('email', function ($row) {
                return $row->email ? $row->email : '';
            });
            $table->editColumn('mobile_number', function ($row) {
                return $row->mobile_number ? $row->mobile_number : '';
            });

            $table->editColumn('project_name', function ($row) {
                return $row->project_name ? $row->project_name : '';
            });
            $table->editColumn('fjoiningofficename', function ($row) {
                return $row->fjoiningofficename ? $row->fjoiningofficename : '';
            });
            $table->editColumn('office_orderno', function ($row) {
                return $row->office_orderno ? '<a href="' . $row->office_orderno->getUrl() . '" target="_blank">' . trans('global.downloadFile') . '</a>' : '';
            });
            $table->editColumn('fjoining_letter', function ($row) {
                return $row->fjoining_letter ? '<a href="' . $row->fjoining_letter->getUrl() . '" target="_blank">' . trans('global.downloadFile') . '</a>' : '';
            });
            $table->editColumn('office_order', function ($row) {
                return $row->office_order ? '<a href="' . $row->office_order->getUrl() . '" target="_blank">' . trans('global.downloadFile') . '</a>' : '';
            });

            $table->addColumn('quota_name_bn', function ($row) {
                return $row->quota ? $row->quota->name_bn : '';
            });

            $table->editColumn('employee_photo', function ($row) {
                if ($photo = $row->employee_photo) {
                    return sprintf(
                        '<a href="%s" target="_blank"><img src="%s" width="50px" height="50px"></a>',
                        $photo->url,
                        $photo->thumbnail
                    );
                }

                return '';
            });

            $table->rawColumns(['actions', 'placeholder', 'home_district', 'marital_statu', 'gender', 'religion', 'blood_group', 'nid_upload', 'passport_upload', 'license_type', 'license_upload', 'office_orderno', 'fjoining_letter', 'office_order', 'quota', 'employee_photo']);

            return $table->make(true);
        }

        return view('admin.employeeLists.index');
    }

    public function create()
    {
        abort_if(Gate::denies('employee_list_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $home_districts = District::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $marital_status = Maritalstatus::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $genders = Gender::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $religions = Religion::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $blood_groups = BloodGroup::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $license_types = LicenseType::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $job_types = JobType::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $quotas = Quotum::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.employeeLists.create', compact('blood_groups', 'genders', 'home_districts', 'job_types', 'license_types', 'marital_status', 'quotas', 'religions'));
    }

    public function store(StoreEmployeeListRequest $request)
    {
        $employeeList = EmployeeList::create($request->all());

        if ($request->input('nid_upload', false)) {
            $employeeList->addMedia(storage_path('tmp/uploads/' . basename($request->input('nid_upload'))))->toMediaCollection('nid_upload');
        }

        if ($request->input('passport_upload', false)) {
            $employeeList->addMedia(storage_path('tmp/uploads/' . basename($request->input('passport_upload'))))->toMediaCollection('passport_upload');
        }

        if ($request->input('license_upload', false)) {
            $employeeList->addMedia(storage_path('tmp/uploads/' . basename($request->input('license_upload'))))->toMediaCollection('license_upload');
        }

        if ($request->input('office_orderno', false)) {
            $employeeList->addMedia(storage_path('tmp/uploads/' . basename($request->input('office_orderno'))))->toMediaCollection('office_orderno');
        }

        if ($request->input('fjoining_letter', false)) {
            $employeeList->addMedia(storage_path('tmp/uploads/' . basename($request->input('fjoining_letter'))))->toMediaCollection('fjoining_letter');
        }

        if ($request->input('office_order', false)) {
            $employeeList->addMedia(storage_path('tmp/uploads/' . basename($request->input('office_order'))))->toMediaCollection('office_order');
        }

        if ($request->input('electric_signature', false)) {
            $employeeList->addMedia(storage_path('tmp/uploads/' . basename($request->input('electric_signature'))))->toMediaCollection('electric_signature');
        }

        if ($request->input('employee_photo', false)) {
            $employeeList->addMedia(storage_path('tmp/uploads/' . basename($request->input('employee_photo'))))->toMediaCollection('employee_photo');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $employeeList->id]);
        }

        return redirect()->route('admin.employee-lists.index');
    }

    public function edit(EmployeeList $employeeList)
    {
        abort_if(Gate::denies('employee_list_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $home_districts = District::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $marital_status = Maritalstatus::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $genders = Gender::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $religions = Religion::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $blood_groups = BloodGroup::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $license_types = LicenseType::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $job_types = JobType::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $quotas = Quotum::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $employeeList->load('home_district', 'marital_statu', 'gender', 'religion', 'blood_group', 'license_type', 'job_type', 'quota');

        return view('admin.employeeLists.edit', compact('blood_groups', 'employeeList', 'genders', 'home_districts', 'job_types', 'license_types', 'marital_status', 'quotas', 'religions'));
    }

    public function update(UpdateEmployeeListRequest $request, EmployeeList $employeeList)
    {
        $employeeList->update($request->all());

        if ($request->input('nid_upload', false)) {
            if (! $employeeList->nid_upload || $request->input('nid_upload') !== $employeeList->nid_upload->file_name) {
                if ($employeeList->nid_upload) {
                    $employeeList->nid_upload->delete();
                }
                $employeeList->addMedia(storage_path('tmp/uploads/' . basename($request->input('nid_upload'))))->toMediaCollection('nid_upload');
            }
        } elseif ($employeeList->nid_upload) {
            $employeeList->nid_upload->delete();
        }

        if ($request->input('passport_upload', false)) {
            if (! $employeeList->passport_upload || $request->input('passport_upload') !== $employeeList->passport_upload->file_name) {
                if ($employeeList->passport_upload) {
                    $employeeList->passport_upload->delete();
                }
                $employeeList->addMedia(storage_path('tmp/uploads/' . basename($request->input('passport_upload'))))->toMediaCollection('passport_upload');
            }
        } elseif ($employeeList->passport_upload) {
            $employeeList->passport_upload->delete();
        }

        if ($request->input('license_upload', false)) {
            if (! $employeeList->license_upload || $request->input('license_upload') !== $employeeList->license_upload->file_name) {
                if ($employeeList->license_upload) {
                    $employeeList->license_upload->delete();
                }
                $employeeList->addMedia(storage_path('tmp/uploads/' . basename($request->input('license_upload'))))->toMediaCollection('license_upload');
            }
        } elseif ($employeeList->license_upload) {
            $employeeList->license_upload->delete();
        }

        if ($request->input('office_orderno', false)) {
            if (! $employeeList->office_orderno || $request->input('office_orderno') !== $employeeList->office_orderno->file_name) {
                if ($employeeList->office_orderno) {
                    $employeeList->office_orderno->delete();
                }
                $employeeList->addMedia(storage_path('tmp/uploads/' . basename($request->input('office_orderno'))))->toMediaCollection('office_orderno');
            }
        } elseif ($employeeList->office_orderno) {
            $employeeList->office_orderno->delete();
        }

        if ($request->input('fjoining_letter', false)) {
            if (! $employeeList->fjoining_letter || $request->input('fjoining_letter') !== $employeeList->fjoining_letter->file_name) {
                if ($employeeList->fjoining_letter) {
                    $employeeList->fjoining_letter->delete();
                }
                $employeeList->addMedia(storage_path('tmp/uploads/' . basename($request->input('fjoining_letter'))))->toMediaCollection('fjoining_letter');
            }
        } elseif ($employeeList->fjoining_letter) {
            $employeeList->fjoining_letter->delete();
        }

        if ($request->input('office_order', false)) {
            if (! $employeeList->office_order || $request->input('office_order') !== $employeeList->office_order->file_name) {
                if ($employeeList->office_order) {
                    $employeeList->office_order->delete();
                }
                $employeeList->addMedia(storage_path('tmp/uploads/' . basename($request->input('office_order'))))->toMediaCollection('office_order');
            }
        } elseif ($employeeList->office_order) {
            $employeeList->office_order->delete();
        }

        if ($request->input('electric_signature', false)) {
            if (! $employeeList->electric_signature || $request->input('electric_signature') !== $employeeList->electric_signature->file_name) {
                if ($employeeList->electric_signature) {
                    $employeeList->electric_signature->delete();
                }
                $employeeList->addMedia(storage_path('tmp/uploads/' . basename($request->input('electric_signature'))))->toMediaCollection('electric_signature');
            }
        } elseif ($employeeList->electric_signature) {
            $employeeList->electric_signature->delete();
        }

        if ($request->input('employee_photo', false)) {
            if (! $employeeList->employee_photo || $request->input('employee_photo') !== $employeeList->employee_photo->file_name) {
                if ($employeeList->employee_photo) {
                    $employeeList->employee_photo->delete();
                }
                $employeeList->addMedia(storage_path('tmp/uploads/' . basename($request->input('employee_photo'))))->toMediaCollection('employee_photo');
            }
        } elseif ($employeeList->employee_photo) {
            $employeeList->employee_photo->delete();
        }

        return redirect()->route('admin.employee-lists.index');
    }

    public function show(EmployeeList $employeeList)
    {
        abort_if(Gate::denies('employee_list_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employeeList->load('home_district', 'marital_statu', 'gender', 'religion', 'blood_group', 'license_type', 'job_type', 'quota');

        return view('admin.employeeLists.show', compact('employeeList'));
    }

    public function destroy(EmployeeList $employeeList)
    {
        abort_if(Gate::denies('employee_list_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employeeList->delete();

        return back();
    }

    public function massDestroy(MassDestroyEmployeeListRequest $request)
    {
        $employeeLists = EmployeeList::find(request('ids'));

        foreach ($employeeLists as $employeeList) {
            $employeeList->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('employee_list_create') && Gate::denies('employee_list_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new EmployeeList();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
