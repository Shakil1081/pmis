<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyJobHistoryRequest;
use App\Http\Requests\StoreJobHistoryRequest;
use App\Http\Requests\UpdateJobHistoryRequest;
use App\Models\Designation;
use App\Models\EmployeeList;
use App\Models\ForestBeat;
use App\Models\ForestDivision;
use App\Models\ForestRange;
use App\Models\ForestState;
use App\Models\Grade;
use App\Models\JobHistory;
use App\Models\JobType;
use App\Models\OfficeUnit;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class JobHistorieController extends Controller
{
    use MediaUploadingTrait, CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('job_history_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = JobHistory::with(['designation', 'employee', 'grade', 'circle_list', 'division_list', 'range_list', 'beat_list', 'office_unit'])->select(sprintf('%s.*', (new JobHistory)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'job_history_show';
                $editGate = 'job_history_edit';
                $deleteGate = 'job_history_delete';
                $crudRoutePart = 'job-histories';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                )
                );
            });

            $table->addColumn('designation_name_bn', function ($row) {
                $locale = App::getLocale();
                $columname = $locale === 'bn' ? 'name_bn' : 'name_en';
                return $row->designation ? $row->designation->{$columname} : 'N/A';
            });

            $table->addColumn('employee_employeeid', function ($row) {
                return $row->employee ? englishToBanglaNumber($row->employee->employeeid) : 'N/A';
            });

            $table->addColumn('name', function ($row) {
                return $row->employee ? $row->employee->fullname_bn : 'N/A';
            });

            $table->editColumn('employee.fullname_bn', function ($row) {
                return $row->employee ? (is_string($row->employee) ? $row->employee : $row->employee->fullname_bn) : 'N/A';
            });
            $table->addColumn('grade_name_bn', function ($row) {
                return $row->grade ? $row->grade->name_bn : 'N/A';
            });

            $table->editColumn('grade.salary_range', function ($row) {
                return $row->grade ? (is_string($row->grade) ? $row->grade : englishToBanglaNumber($row->grade->salary_range)) : 'N/A';
            });
            $table->editColumn('institutename', function ($row) {
                return $row->institutename ? $row->institutename : 'N/A';
            });
            $table->addColumn('circle_list_name_bn', function ($row) {
                return $row->circle_list ? $row->circle_list->name_bn : 'N/A';
            });
            $table->addColumn('forest_division', function ($row) {
                return ($row->beat_list ? $row->beat_list->forest_state:'');
            });
            
            $table->editColumn('division_list_name_bn', function ($row) {
                return $row->beat_list->forest_range->forest_division->name_bn ?? 'N/A';
            });            

            $table->addColumn('posting_in_range', function ($row) {
                return  $row->beat_list->forest_range->name_bn ?? 'N/A';
            });
            $table->addColumn('beat_list', function ($row) {
                return $row->beat_list->name_bn ?? 'N/A';
            }); 
            $table->addColumn('office_unit', function ($row) {
                return $row->office_unit->name_en ??'N/A';
            }); 
            $table->rawColumns(['actions', 'placeholder', 'designation', 'employee', 'grade', 'circle_list', 'division_list']);

            return $table->make(true);
        }

        return view('admin.jobHistories.index');
    }

    public function create(Request $request)
    {
        abort_if(Gate::denies('job_history_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employeeId = $request->query('id');
        $employee = EmployeeList::find($employeeId);


        $locale = App::getLocale();
        $columname = $locale === 'bn' ? 'name_bn' : 'name_en';

        $designations = Designation::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        $employees = EmployeeList::pluck('employeeid', 'id')->prepend(trans('global.pleaseSelect'), '');

        $grades = Grade::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        $circle_lists = ForestState::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        $division_lists = ForestDivision::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        $range_lists = ForestRange::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        $beat_lists = ForestBeat::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        $office_units = OfficeUnit::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.jobHistories.create', compact('employee','beat_lists', 'circle_lists', 'designations', 'division_lists', 'employees', 'grades', 'office_units', 'range_lists'));
    }

    public function store(StoreJobHistoryRequest $request)
    {

        // dd($request->all());
        $jobHistory = JobHistory::create($request->all());

        if ($request->input('go_upload', false)) {
            $jobHistory->addMedia(storage_path('tmp/uploads/' . basename($request->input('go_upload'))))->toMediaCollection('go_upload');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $jobHistory->id]);
        }
        return redirect()->back()->with('status', __('global.saveactions'));
        //return redirect()->route('admin.job-histories.index');
    }

    public function edit(JobHistory $jobHistory)
    {
        abort_if(Gate::denies('job_history_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $locale = App::getLocale();
        $columname = $locale === 'bn' ? 'name_bn' : 'name_en';
        $designations = Designation::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        $employees = EmployeeList::pluck('employeeid', 'id')->prepend(trans('global.pleaseSelect'), '');

        $grades = Grade::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        $circle_lists = ForestState::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        $division_lists = ForestDivision::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        $range_lists = ForestRange::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        $beat_lists = ForestBeat::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        $office_units = OfficeUnit::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        $job_types = JobType::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        $jobHistory->load('designation', 'employee', 'grade', 'circle_list', 'division_list', 'range_list', 'beat_list', 'office_unit');

        return view('admin.jobHistories.edit', compact('beat_lists', 'job_types', 'circle_lists', 'designations', 'division_lists', 'employees', 'grades', 'jobHistory', 'office_units', 'range_lists'));
    }

    public function update(UpdateJobHistoryRequest $request, JobHistory $jobHistory)
    {
        $jobHistory->update($request->all());

        if ($request->input('go_upload', false)) {
            if (!$jobHistory->go_upload || $request->input('go_upload') !== $jobHistory->go_upload->file_name) {
                if ($jobHistory->go_upload) {
                    $jobHistory->go_upload->delete();
                }
                $jobHistory->addMedia(storage_path('tmp/uploads/' . basename($request->input('go_upload'))))->toMediaCollection('go_upload');
            }
        } elseif ($jobHistory->go_upload) {
            $jobHistory->go_upload->delete();
        }
        return redirect()->back()->with('status', __('global.saveactions'));
        //return redirect()->route('admin.job-histories.index');
    }

    public function show(JobHistory $jobHistory)
    {
        abort_if(Gate::denies('job_history_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $jobHistory->load('designation', 'employee', 'grade', 'circle_list', 'division_list', 'range_list', 'beat_list', 'office_unit');

        return view('admin.jobHistories.show', compact('jobHistory'));
    }

    public function destroy(JobHistory $jobHistory)
    {
        abort_if(Gate::denies('job_history_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $jobHistory->delete();

        return back();
    }

    public function massDestroy(MassDestroyJobHistoryRequest $request)
    {
        $jobHistories = JobHistory::find(request('ids'));

        foreach ($jobHistories as $jobHistory) {
            $jobHistory->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('job_history_create') && Gate::denies('job_history_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model = new JobHistory();
        $model->id = $request->input('crud_id', 0);
        $model->exists = true;
        $media = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
