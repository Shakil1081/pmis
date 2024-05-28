<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\App;
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
use App\Models\FreedomFighteRelation;
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

       // $data['allresult'] = EmployeeList::with('jobhistories.designation')->whereNotNull('approve')->paginate(10);
     $data['allresult'] = EmployeeList::with('jobhistories.designation')->paginate(10);
        $data['total'] = EmployeeList::count();

        // You can specify the number of items per page, for example, 10
    return view('admin.employeeLists.index', compact('data'));

    }

    public function create()
    {
        // $dd= EmployeeList::generateEmployeeid('3rd'); 
        // dd($dd); 
$locale = App::getLocale();
$batchColumn = $locale === 'bn' ? 'batch_bn' : 'batch_en';
$columname = $locale === 'bn' ? 'name_bn' : 'name_en';
$project_revenue_bn = $locale === 'bn' ? 'project_revenue_bn' : 'project_revenue_en';
$exam_name_bn = $locale === 'bn' ? 'exam_name_bn' : 'exam_name_en';

        abort_if(Gate::denies('employee_list_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $batches = Batch::pluck($batchColumn, 'id')->prepend(trans('global.pleaseSelect'), '');
        $home_districts = District::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        $marital_status = Maritalstatus::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $genders = Gender::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        $religions = Religion::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        $blood_groups = BloodGroup::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        $license_types = LicenseType::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        $projectrevenues = Joininginfo::pluck($project_revenue_bn, 'id')->prepend(trans('global.pleaseSelect'), '');

        $joiningexaminfos = ProjectRevenueExam::pluck($exam_name_bn, 'id')->prepend(trans('global.pleaseSelect'), '');

        $departmental_exams = ProjectRevenuelone::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        $projects = Project::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        $grades = Grade::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        $quotas = Quotum::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        $freedomfighters = FreedomFighteRelation::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.employeeLists.create', compact('batches', 'blood_groups', 'departmental_exams', 'freedomfighters', 'genders', 'grades', 'home_districts', 'joiningexaminfos', 'license_types', 'marital_status', 'projectrevenues', 'projects', 'quotas', 'religions'));
    }

    public function store(StoreEmployeeListRequest $request)
    {
   
    //$employeeList = EmployeeList::create($request->all());

    $class = $request->input('class');

        // Generate the employee ID
        $employeeId = EmployeeList::generateEmployeeId($class);

        // Create the employee with the generated ID
        $employeeData = $request->all();
        $employeeData['employeeid'] = $employeeId;

        $employeeList = EmployeeList::create($employeeData);

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

        if ($request->input('certificate_upload', false)) {
            $employeeList->addMedia(storage_path('tmp/uploads/' . basename($request->input('certificate_upload'))))->toMediaCollection('certificate_upload');
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

        $locale = App::getLocale();
        $batchColumn = $locale === 'bn' ? 'batch_bn' : 'batch_en';
        $columname = $locale === 'bn' ? 'name_bn' : 'name_en';
        $project_revenue_bn = $locale === 'bn' ? 'project_revenue_bn' : 'project_revenue_en';
        $exam_name_bn = $locale === 'bn' ? 'exam_name_bn' : 'exam_name_en';

        abort_if(Gate::denies('employee_list_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $batches = Batch::pluck($batchColumn, 'id')->prepend(trans('global.pleaseSelect'), '');

        $home_districts = District::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        $marital_status = Maritalstatus::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $genders = Gender::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        $religions = Religion::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        $blood_groups = BloodGroup::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        $license_types = LicenseType::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        $projectrevenues = Joininginfo::pluck($project_revenue_bn, 'id')->prepend(trans('global.pleaseSelect'), '');

        $joiningexaminfos = ProjectRevenueExam::pluck( $exam_name_bn, 'id')->prepend(trans('global.pleaseSelect'), '');

        $departmental_exams = ProjectRevenuelone::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        $projects = Project::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        $grades = Grade::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        $quotas = Quotum::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        $freedomfighters = FreedomFighteRelation::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        $employeeList->load('batch', 'home_district', 'marital_statu', 'gender', 'religion', 'blood_group', 'license_type', 'projectrevenue', 'joiningexaminfo', 'departmental_exam', 'project', 'grade', 'quota', 'freedomfighter');

        return view('admin.employeeLists.edit', compact('batches', 'blood_groups', 'departmental_exams', 'employeeList', 'freedomfighters', 'genders', 'grades', 'home_districts', 'joiningexaminfos', 'license_types', 'marital_status', 'projectrevenues', 'projects', 'quotas', 'religions'));
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

        if ($request->input('certificate_upload', false)) {
            if (! $employeeList->certificate_upload || $request->input('certificate_upload') !== $employeeList->certificate_upload->file_name) {
                if ($employeeList->certificate_upload) {
                    $employeeList->certificate_upload->delete();
                }
                $employeeList->addMedia(storage_path('tmp/uploads/' . basename($request->input('certificate_upload'))))->toMediaCollection('certificate_upload');
            }
        } elseif ($employeeList->certificate_upload) {
            $employeeList->certificate_upload->delete();
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

        $employeeList->load('batch', 'home_district', 'marital_statu', 'gender', 'religion', 'blood_group', 'license_type', 'projectrevenue', 'joiningexaminfo', 'departmental_exam', 'project', 'grade', 'quota', 'freedomfighter');

        return view('admin.employeeLists.show', compact('employeeList'));
    }

    public function destroy(EmployeeList $employeeList)
    {
        abort_if(Gate::denies('employee_list_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employeeList->delete();

        return back();
    }
    public function dfo()
    {
        abort_if(Gate::denies('employee_list_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $data['allresult'] = EmployeeList::with('jobhistories.designation')->where('approve',Null)->paginate(10);
        $data['total'] = EmployeeList::count();

        // You can specify the number of items per page, for example, 10
    return view('admin.employeeLists.dfo-review-list', compact('data'));
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


    public function Commonemployeecreate()
    {

        $locale = App::getLocale();
        $batchColumn = $locale === 'bn' ? 'batch_bn' : 'batch_en';
        $columname = $locale === 'bn' ? 'name_bn' : 'name_en';
        $project_revenue_bn = $locale === 'bn' ? 'project_revenue_bn' : 'project_revenue_en';
        $exam_name_bn = $locale === 'bn' ? 'exam_name_bn' : 'exam_name_en';

        abort_if(Gate::denies('employee_list_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $batches = Batch::pluck( $batchColumn, 'id')->prepend(trans('global.pleaseSelect'), '');

        $home_districts = District::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        $marital_status = Maritalstatus::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $genders = Gender::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        $religions = Religion::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        $blood_groups = BloodGroup::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        $license_types = LicenseType::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        $joiningexaminfos = ProjectRevenueExam::pluck($exam_name_bn, 'id')->prepend(trans('global.pleaseSelect'), '');

        $name_of_exams = Examination::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        $exam_boards = ExamBoard::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        $employees = EmployeeList::pluck('employeeid', 'id')->prepend(trans('global.pleaseSelect'), '');


        $job_types = JobType::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');
        $new_designations = Designation::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');
        $designations = Designation::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');
        $grades = Grade::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        $quotas = Quotum::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');
        $thana_upazilas = Upazila::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');


        return view('admin.commonemployee.create', compact('new_designations','designations','job_types','thana_upazilas','batches', 'blood_groups', 'genders', 'grades', 'home_districts', 'joiningexaminfos', 'license_types', 'marital_status', 'quotas', 'religions','employees', 'exam_boards', 'name_of_exams'));
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
}
