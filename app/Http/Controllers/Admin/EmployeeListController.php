<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyEmployeeListRequest;
use App\Http\Requests\StoreEmployeeListRequest;
use App\Http\Requests\UpdateEmployeeListRequest;
use App\Models\Batch;
use App\Models\BloodGroup;
use App\Models\Designation;
use App\Models\District;
use App\Models\EmployeeList;
use App\Models\ExamBoard;
use App\Models\Examination;
use App\Models\Gender;
use App\Models\Grade;
use App\Models\JobType;
use App\Models\Joininginfo;
use App\Models\LicenseType;
use App\Models\Maritalstatus;
use App\Models\Project;
use App\Models\ProjectRevenueExam;
use App\Models\ProjectRevenuelone;
use App\Models\Quotum;
use App\Models\Religion;
use App\Models\Upazila;
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
        $data['allresult'] = EmployeeList::with('jobhistories.designation')->paginate(10);
        $data['total'] = EmployeeList::count();

        // You can specify the number of items per page, for example, 10
    return view('admin.employeeLists.index', compact('data'));
    
        // if ($request->ajax()) {
        //     $query = EmployeeList::with(['batch', 'home_district', 'marital_statu', 'gender', 'religion', 'blood_group', 'license_type', 'joiningexaminfo', 'grade', 'quota'])->select(sprintf('%s.*', (new EmployeeList)->table));
          
        //     $table = Datatables::of($query);

        //     $table->addColumn('placeholder', '&nbsp;');
        //     $table->addColumn('actions', '&nbsp;');

        //     $table->editColumn('actions', function ($row) {
        //         $viewGate      = 'employee_list_show';
        //         $editGate      = 'employee_list_edit';
        //         $deleteGate    = 'employee_list_delete';
        //         $crudRoutePart = 'employee-lists';

        //         return view('partials.datatablesActions', compact(
        //             'viewGate',
        //             'editGate',
        //             'deleteGate',
        //             'crudRoutePart',
        //             'row'
        //         ));
        //     });

        //     $table->editColumn('employeeid', function ($row) {
        //         return $row->employeeid ? $row->employeeid : '';
        //     });
        //     $table->addColumn('batch_batch_bn', function ($row) {
        //         return $row->batch ? $row->batch->batch_bn : '';
        //     });

        //     $table->addColumn('home_district_name_bn', function ($row) {
        //         return $row->home_district ? $row->home_district->name_bn : '';
        //     });

        //     $table->addColumn('marital_statu_name', function ($row) {
        //         return $row->marital_statu ? $row->marital_statu->name : '';
        //     });

        //     $table->addColumn('gender_name_bn', function ($row) {
        //         return $row->gender ? $row->gender->name_bn : '';
        //     });

        //     $table->addColumn('religion_name_bn', function ($row) {
        //         return $row->religion ? $row->religion->name_bn : '';
        //     });

        //     $table->addColumn('blood_group_name_bn', function ($row) {
        //         return $row->blood_group ? $row->blood_group->name_bn : '';
        //     });

        //     $table->editColumn('nid', function ($row) {
        //         return $row->nid ? $row->nid : '';
        //     });
        //     $table->addColumn('license_type_name_bn', function ($row) {
        //         return $row->license_type ? $row->license_type->name_bn : '';
        //     });

        //     $table->editColumn('email', function ($row) {
        //         return $row->email ? $row->email : '';
        //     });
        //     $table->editColumn('mobile_number', function ($row) {
        //         return $row->mobile_number ? $row->mobile_number : '';
        //     });
        //     $table->addColumn('joiningexaminfo_exam_name_bn', function ($row) {
        //         return $row->joiningexaminfo ? $row->joiningexaminfo->exam_name_bn : '';
        //     });

        //     $table->addColumn('grade_name_bn', function ($row) {
        //         return $row->grade ? $row->grade->name_bn : '';
        //     });

        //     $table->editColumn('first_joining_office_name', function ($row) {
        //         return $row->first_joining_office_name ? $row->first_joining_office_name : '';
        //     });

        //     $table->editColumn('first_joining_memo_no', function ($row) {
        //         return $row->first_joining_memo_no ? $row->first_joining_memo_no : '';
        //     });
        //     $table->editColumn('first_joining_order', function ($row) {
        //         return $row->first_joining_order ? '<a href="' . $row->first_joining_order->getUrl() . '" target="_blank">' . trans('global.downloadFile') . '</a>' : '';
        //     });
        //     $table->editColumn('fjoining_letter', function ($row) {
        //         return $row->fjoining_letter ? '<a href="' . $row->fjoining_letter->getUrl() . '" target="_blank">' . trans('global.downloadFile') . '</a>' : '';
        //     });

        //     $table->editColumn('date_of_gazette_if_any', function ($row) {
        //         return $row->date_of_gazette_if_any ? '<a href="' . $row->date_of_gazette_if_any->getUrl() . '" target="_blank">' . trans('global.downloadFile') . '</a>' : '';
        //     });

        //     $table->editColumn('regularization_office_orde_go', function ($row) {
        //         return $row->regularization_office_orde_go ? '<a href="' . $row->regularization_office_orde_go->getUrl() . '" target="_blank">' . trans('global.downloadFile') . '</a>' : '';
        //     });

        //     $table->editColumn('confirmation_in_service', function ($row) {
        //         return $row->confirmation_in_service ? '<a href="' . $row->confirmation_in_service->getUrl() . '" target="_blank">' . trans('global.downloadFile') . '</a>' : '';
        //     });
        //     $table->addColumn('quota_name_bn', function ($row) {
        //         return $row->quota ? $row->quota->name_bn : '';
        //     });

        //     $table->rawColumns(['actions', 'placeholder', 'batch', 'home_district', 'marital_statu', 'gender', 'religion', 'blood_group', 'license_type', 'joiningexaminfo', 'grade', 'first_joining_order', 'fjoining_letter', 'date_of_gazette_if_any', 'regularization_office_orde_go', 'confirmation_in_service', 'quota']);

        //     return $table->make(true);
        // }

    }

    public function create()
    {
        abort_if(Gate::denies('employee_list_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');


        if (app()->getLocale() === 'bn'){
            $batches = Batch::pluck('batch_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $home_districts = District::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $marital_status = Maritalstatus::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $genders = Gender::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $religions = Religion::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $blood_groups = BloodGroup::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $license_types = LicenseType::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $projectrevenues = Joininginfo::pluck('project_revenue_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $joiningexaminfos = ProjectRevenueExam::pluck('exam_name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $departmental_exams = ProjectRevenuelone::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $projects = Project::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $grades = Grade::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $quotas = Quotum::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        }else{
            $batches = Batch::pluck('batch_en as name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $home_districts = District::pluck('name_en as name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $marital_status = Maritalstatus::pluck('name_en as name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $genders = Gender::pluck('name_en as name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $religions = Religion::pluck('name_en as name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $blood_groups = BloodGroup::pluck('name_en as name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $license_types = LicenseType::pluck('name_en as name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $projectrevenues = Joininginfo::pluck('project_revenue_en as name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $joiningexaminfos = ProjectRevenueExam::pluck('exam_name_en as name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $departmental_exams = ProjectRevenuelone::pluck('name_en as name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $projects = Project::pluck('name_en as name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $grades = Grade::pluck('name_en as name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $quotas = Quotum::pluck('name_en as name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        } 
        return view('admin.employeeLists.create', compact('batches', 'blood_groups', 'departmental_exams', 'genders', 'grades', 'home_districts', 'joiningexaminfos', 'license_types', 'marital_status', 'projectrevenues', 'projects', 'quotas', 'religions'));
    }


    public function Commonemployeecreate()
    {
        abort_if(Gate::denies('employee_list_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $batches = Batch::pluck('batch_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $home_districts = District::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $marital_status = Maritalstatus::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $genders = Gender::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $religions = Religion::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $blood_groups = BloodGroup::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $license_types = LicenseType::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $joiningexaminfos = ProjectRevenueExam::pluck('exam_name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $name_of_exams = Examination::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $exam_boards = ExamBoard::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $employees = EmployeeList::pluck('employeeid', 'id')->prepend(trans('global.pleaseSelect'), '');


        $job_types = JobType::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');
        $new_designations = Designation::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');
        $designations = Designation::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');
        $grades = Grade::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $quotas = Quotum::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');
        $thana_upazilas = Upazila::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');


        return view('admin.commonemployee.create', compact('new_designations','designations','job_types','thana_upazilas','batches', 'blood_groups', 'genders', 'grades', 'home_districts', 'joiningexaminfos', 'license_types', 'marital_status', 'quotas', 'religions','employees', 'exam_boards', 'name_of_exams'));
    }
    public function store(StoreEmployeeListRequest $request)
    {
        $employeeList = EmployeeList::create($request->all());
        $employeeListDetail = $employeeList->detail()->create([
              'general_information_id' => $employeeList->id,
        ]);
        if ($request->input('birth_certificate_upload', false)) {
            $employeeList->addMedia(storage_path('tmp/uploads/' . basename($request->input('birth_certificate_upload'))))->toMediaCollection('birth_certificate_upload');
        }

        if ($request->input('nid_upload', false)) {
            $employeeList->addMedia(storage_path('tmp/uploads/' . basename($request->input('nid_upload'))))->toMediaCollection('nid_upload');
        }

        if ($request->input('passport_upload', false)) {
            $employeeList->addMedia(storage_path('tmp/uploads/' . basename($request->input('passport_upload'))))->toMediaCollection('passport_upload');
        }

        if ($request->input('license_upload', false)) {
            $employeeList->addMedia(storage_path('tmp/uploads/' . basename($request->input('license_upload'))))->toMediaCollection('license_upload');
        }

        if ($request->input('first_joining_order', false)) {
            $employeeList->addMedia(storage_path('tmp/uploads/' . basename($request->input('first_joining_order'))))->toMediaCollection('first_joining_order');
        }

        if ($request->input('fjoining_letter', false)) {
            $employeeList->addMedia(storage_path('tmp/uploads/' . basename($request->input('fjoining_letter'))))->toMediaCollection('fjoining_letter');
        }

        if ($request->input('date_of_gazette_if_any', false)) {
            $employeeList->addMedia(storage_path('tmp/uploads/' . basename($request->input('date_of_gazette_if_any'))))->toMediaCollection('date_of_gazette_if_any');
        }

        if ($request->input('regularization_office_orde_go', false)) {
            $employeeList->addMedia(storage_path('tmp/uploads/' . basename($request->input('regularization_office_orde_go'))))->toMediaCollection('regularization_office_orde_go');
        }

        if ($request->input('confirmation_in_service', false)) {
            $employeeList->addMedia(storage_path('tmp/uploads/' . basename($request->input('confirmation_in_service'))))->toMediaCollection('confirmation_in_service');
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

        $batches = Batch::pluck('batch_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $home_districts = District::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $marital_status = Maritalstatus::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $genders = Gender::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $religions = Religion::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $blood_groups = BloodGroup::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $license_types = LicenseType::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $joiningexaminfos = ProjectRevenueExam::pluck('exam_name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $grades = Grade::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $quotas = Quotum::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $employeeList->load('batch', 'home_district', 'marital_statu', 'gender', 'religion', 'blood_group', 'license_type', 'joiningexaminfo', 'grade', 'quota');

        return view('admin.employeeLists.edit', compact('batches', 'blood_groups', 'employeeList', 'genders', 'grades', 'home_districts', 'joiningexaminfos', 'license_types', 'marital_status', 'quotas', 'religions'));
    }

    public function update(UpdateEmployeeListRequest $request, EmployeeList $employeeList)
    {
        $employeeList->update($request->all());

        if ($request->input('birth_certificate_upload', false)) {
            if (! $employeeList->birth_certificate_upload || $request->input('birth_certificate_upload') !== $employeeList->birth_certificate_upload->file_name) {
                if ($employeeList->birth_certificate_upload) {
                    $employeeList->birth_certificate_upload->delete();
                }
                $employeeList->addMedia(storage_path('tmp/uploads/' . basename($request->input('birth_certificate_upload'))))->toMediaCollection('birth_certificate_upload');
            }
        } elseif ($employeeList->birth_certificate_upload) {
            $employeeList->birth_certificate_upload->delete();
        }

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

        if ($request->input('first_joining_order', false)) {
            if (! $employeeList->first_joining_order || $request->input('first_joining_order') !== $employeeList->first_joining_order->file_name) {
                if ($employeeList->first_joining_order) {
                    $employeeList->first_joining_order->delete();
                }
                $employeeList->addMedia(storage_path('tmp/uploads/' . basename($request->input('first_joining_order'))))->toMediaCollection('first_joining_order');
            }
        } elseif ($employeeList->first_joining_order) {
            $employeeList->first_joining_order->delete();
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

        if ($request->input('date_of_gazette_if_any', false)) {
            if (! $employeeList->date_of_gazette_if_any || $request->input('date_of_gazette_if_any') !== $employeeList->date_of_gazette_if_any->file_name) {
                if ($employeeList->date_of_gazette_if_any) {
                    $employeeList->date_of_gazette_if_any->delete();
                }
                $employeeList->addMedia(storage_path('tmp/uploads/' . basename($request->input('date_of_gazette_if_any'))))->toMediaCollection('date_of_gazette_if_any');
            }
        } elseif ($employeeList->date_of_gazette_if_any) {
            $employeeList->date_of_gazette_if_any->delete();
        }

        if ($request->input('regularization_office_orde_go', false)) {
            if (! $employeeList->regularization_office_orde_go || $request->input('regularization_office_orde_go') !== $employeeList->regularization_office_orde_go->file_name) {
                if ($employeeList->regularization_office_orde_go) {
                    $employeeList->regularization_office_orde_go->delete();
                }
                $employeeList->addMedia(storage_path('tmp/uploads/' . basename($request->input('regularization_office_orde_go'))))->toMediaCollection('regularization_office_orde_go');
            }
        } elseif ($employeeList->regularization_office_orde_go) {
            $employeeList->regularization_office_orde_go->delete();
        }

        if ($request->input('confirmation_in_service', false)) {
            if (! $employeeList->confirmation_in_service || $request->input('confirmation_in_service') !== $employeeList->confirmation_in_service->file_name) {
                if ($employeeList->confirmation_in_service) {
                    $employeeList->confirmation_in_service->delete();
                }
                $employeeList->addMedia(storage_path('tmp/uploads/' . basename($request->input('confirmation_in_service'))))->toMediaCollection('confirmation_in_service');
            }
        } elseif ($employeeList->confirmation_in_service) {
            $employeeList->confirmation_in_service->delete();
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

        $employeeList->load('batch', 'home_district', 'marital_statu', 'gender', 'religion', 'blood_group', 'license_type', 'joiningexaminfo', 'grade', 'quota');

        return view('admin.employeeLists.show', compact('employeeList'));
    }
    public function commonemployeeshow(Request $request)
    {


        //EmployeeList $employeeList

        abort_if(Gate::denies('employee_list_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $employeeList = EmployeeList::findOrFail($request->id);

        $employeeList->load('batch', 'home_district', 'marital_statu', 'gender', 'religion', 'blood_group', 'license_type', 'joiningexaminfo', 'grade', 'quota');

        return view('admin.employeeLists.showcommonenployee', compact('employeeList'));
    }
    public function employeedata(Request $request)
    {     
        
       
        abort_if(Gate::denies('employee_list_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employeeList = EmployeeList::with('batch', 'home_district', 'marital_statu', 'gender', 'religion', 'blood_group', 'license_type', 'joiningexaminfo', 'grade', 'quota')
        ->find($request->id);

        return view('admin.employeeLists.employeedata', compact('employeeList'));
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
