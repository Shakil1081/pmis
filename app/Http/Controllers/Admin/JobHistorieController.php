<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyJobHistoryRequest;
use App\Http\Requests\StoreJobHistoryRequest;
use App\Http\Requests\UpdateJobHistoryRequest;
use App\Models\Designation;
use App\Models\EmployeeList;
use App\Models\JobHistory;
use App\Models\JobType;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class JobHistorieController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('job_history_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = JobHistory::with(['job_type', 'designation', 'employee'])->select(sprintf('%s.*', (new JobHistory)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'job_history_show';
                $editGate      = 'job_history_edit';
                $deleteGate    = 'job_history_delete';
                $crudRoutePart = 'job-histories';

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
            $table->editColumn('institute_name', function ($row) {
                return $row->institute_name ? $row->institute_name : '';
            });
            $table->addColumn('job_type_name_bn', function ($row) {
                return $row->job_type ? $row->job_type->name_bn : '';
            });

            $table->addColumn('designation_name_bn', function ($row) {
                return $row->designation ? $row->designation->name_bn : '';
            });

            $table->editColumn('level_1', function ($row) {
                return $row->level_1 ? $row->level_1 : '';
            });
            $table->editColumn('level_2', function ($row) {
                return $row->level_2 ? $row->level_2 : '';
            });
            $table->editColumn('level_3', function ($row) {
                return $row->level_3 ? $row->level_3 : '';
            });
            $table->editColumn('level_4', function ($row) {
                return $row->level_4 ? $row->level_4 : '';
            });
            $table->editColumn('level_5', function ($row) {
                return $row->level_5 ? $row->level_5 : '';
            });
            $table->addColumn('employee_employeeid', function ($row) {
                return $row->employee ? $row->employee->employeeid : '';
            });

            $table->editColumn('employee.fullname_bn', function ($row) {
                return $row->employee ? (is_string($row->employee) ? $row->employee : $row->employee->fullname_bn) : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'job_type', 'designation', 'employee']);

            return $table->make(true);
        }

        return view('admin.jobHistories.index');
    }

    public function create()
    {
        abort_if(Gate::denies('job_history_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $job_types = JobType::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $designations = Designation::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $employees = EmployeeList::pluck('employeeid', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.jobHistories.create', compact('designations', 'employees', 'job_types'));
    }

    public function store(StoreJobHistoryRequest $request)
    {
        $jobHistory = JobHistory::create($request->all());
        return redirect()->back()->with('status', 'Action successful!');
       // return redirect()->route('admin.job-histories.index');
    }

    public function edit(JobHistory $jobHistory)
    {
        abort_if(Gate::denies('job_history_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $job_types = JobType::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $designations = Designation::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $employees = EmployeeList::pluck('employeeid', 'id')->prepend(trans('global.pleaseSelect'), '');

        $jobHistory->load('job_type', 'designation', 'employee');

        return view('admin.jobHistories.edit', compact('designations', 'employees', 'jobHistory', 'job_types'));
    }

    public function update(UpdateJobHistoryRequest $request, JobHistory $jobHistory)
    {
        $jobHistory->update($request->all());

        return redirect()->route('admin.job-histories.index');
    }

    public function show(JobHistory $jobHistory)
    {
        abort_if(Gate::denies('job_history_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $jobHistory->load('job_type', 'designation', 'employee');

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
}
