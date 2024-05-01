<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyMaritalstatusRequest;
use App\Http\Requests\StoreMaritalstatusRequest;
use App\Http\Requests\UpdateMaritalstatusRequest;
use App\Models\Maritalstatus;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MaritalstatuController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('maritalstatus_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $maritalstatuses = Maritalstatus::all();

        return view('admin.maritalstatuses.index', compact('maritalstatuses'));
    }

    public function create()
    {
        abort_if(Gate::denies('maritalstatus_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.maritalstatuses.create');
    }

    public function store(StoreMaritalstatusRequest $request)
    {
        $maritalstatus = Maritalstatus::create($request->all());

        return redirect()->route('admin.maritalstatuses.index');
    }

    public function edit(Maritalstatus $maritalstatus)
    {
        abort_if(Gate::denies('maritalstatus_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.maritalstatuses.edit', compact('maritalstatus'));
    }

    public function update(UpdateMaritalstatusRequest $request, Maritalstatus $maritalstatus)
    {
        $maritalstatus->update($request->all());

        return redirect()->route('admin.maritalstatuses.index');
    }

    public function show(Maritalstatus $maritalstatus)
    {
        abort_if(Gate::denies('maritalstatus_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.maritalstatuses.show', compact('maritalstatus'));
    }

    public function destroy(Maritalstatus $maritalstatus)
    {
        abort_if(Gate::denies('maritalstatus_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $maritalstatus->delete();

        return back();
    }

    public function massDestroy(MassDestroyMaritalstatusRequest $request)
    {
        $maritalstatuses = Maritalstatus::find(request('ids'));

        foreach ($maritalstatuses as $maritalstatus) {
            $maritalstatus->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
