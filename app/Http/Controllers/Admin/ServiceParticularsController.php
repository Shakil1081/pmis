<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyServiceParticularRequest;
use App\Http\Requests\StoreServiceParticularRequest;
use App\Http\Requests\UpdateServiceParticularRequest;
use App\Models\Designation;
use App\Models\EmployeeList;
use App\Models\ServiceParticular;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ServiceParticularsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('service_particular_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $serviceParticulars = ServiceParticular::with(['designation', 'employee'])->get();

        return view('admin.serviceParticulars.index', compact('serviceParticulars'));
    }

    public function create()
    {
        abort_if(Gate::denies('service_particular_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $designations = Designation::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $employees = EmployeeList::pluck('employeeid', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.serviceParticulars.create', compact('designations', 'employees'));
    }

    public function store(StoreServiceParticularRequest $request)
    {
        $serviceParticular = ServiceParticular::create($request->all());
        return redirect()->back()->with('status', 'Action successful!');
        //return redirect()->route('admin.service-particulars.index');
    }

    public function edit(ServiceParticular $serviceParticular)
    {
        abort_if(Gate::denies('service_particular_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $designations = Designation::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $employees = EmployeeList::pluck('employeeid', 'id')->prepend(trans('global.pleaseSelect'), '');

        $serviceParticular->load('designation', 'employee');

        return view('admin.serviceParticulars.edit', compact('designations', 'employees', 'serviceParticular'));
    }

    public function update(UpdateServiceParticularRequest $request, ServiceParticular $serviceParticular)
    {
        $serviceParticular->update($request->all());

        return redirect()->route('admin.service-particulars.index');
    }

    public function show(ServiceParticular $serviceParticular)
    {
        abort_if(Gate::denies('service_particular_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $serviceParticular->load('designation', 'employee');

        return view('admin.serviceParticulars.show', compact('serviceParticular'));
    }

    public function destroy(ServiceParticular $serviceParticular)
    {
        abort_if(Gate::denies('service_particular_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $serviceParticular->delete();

        return back();
    }

    public function massDestroy(MassDestroyServiceParticularRequest $request)
    {
        $serviceParticulars = ServiceParticular::find(request('ids'));

        foreach ($serviceParticulars as $serviceParticular) {
            $serviceParticular->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}