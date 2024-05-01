<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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

class JobHistorieController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('job_history_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $jobHistories = JobHistory::with(['job_type', 'designation', 'employee'])->get();

        return view('admin.jobHistories.index', compact('jobHistories'));
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

        return redirect()->route('admin.job-histories.index');
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
