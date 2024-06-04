<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyOtherServiceJobRequest;
use App\Http\Requests\StoreOtherServiceJobRequest;
use App\Http\Requests\UpdateOtherServiceJobRequest;
use App\Models\EmployeeList;
use App\Models\OtherServiceJob;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OtherServiceJobController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('other_service_job_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $otherServiceJobs = OtherServiceJob::with(['employee'])->get();

        return view('admin.otherServiceJobs.index', compact('otherServiceJobs'));
    }

    public function create()
    {
        abort_if(Gate::denies('other_service_job_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = EmployeeList::pluck('employeeid', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.otherServiceJobs.create', compact('employees'));
    }

    public function store(StoreOtherServiceJobRequest $request)
    {
        $otherServiceJob = OtherServiceJob::create($request->all());
         return redirect()->back()->with('status', __('global.saveactions'));
       /// return redirect()->route('admin.other-service-jobs.index');
    }

    public function edit(OtherServiceJob $otherServiceJob)
    {
        abort_if(Gate::denies('other_service_job_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = EmployeeList::pluck('employeeid', 'id')->prepend(trans('global.pleaseSelect'), '');

        $otherServiceJob->load('employee');

        return view('admin.otherServiceJobs.edit', compact('employees', 'otherServiceJob'));
    }

    public function update(UpdateOtherServiceJobRequest $request, OtherServiceJob $otherServiceJob)
    {
        $otherServiceJob->update($request->all());

        return redirect()->route('admin.other-service-jobs.index');
    }

    public function show(OtherServiceJob $otherServiceJob)
    {
        abort_if(Gate::denies('other_service_job_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $otherServiceJob->load('employee');

        return view('admin.otherServiceJobs.show', compact('otherServiceJob'));
    }

    public function destroy(OtherServiceJob $otherServiceJob)
    {
        abort_if(Gate::denies('other_service_job_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $otherServiceJob->delete();

        return back();
    }

    public function massDestroy(MassDestroyOtherServiceJobRequest $request)
    {
        $otherServiceJobs = OtherServiceJob::find(request('ids'));

        foreach ($otherServiceJobs as $otherServiceJob) {
            $otherServiceJob->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
