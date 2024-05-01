<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyProfessionaleRequest;
use App\Http\Requests\StoreProfessionaleRequest;
use App\Http\Requests\UpdateProfessionaleRequest;
use App\Models\EmployeeList;
use App\Models\Professionale;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProfessionaleController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('professionale_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $professionales = Professionale::with(['employee'])->get();

        return view('admin.professionales.index', compact('professionales'));
    }

    public function create()
    {
        abort_if(Gate::denies('professionale_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = EmployeeList::pluck('employeeid', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.professionales.create', compact('employees'));
    }

    public function store(StoreProfessionaleRequest $request)
    {
        $professionale = Professionale::create($request->all());

        return redirect()->route('admin.professionales.index');
    }

    public function edit(Professionale $professionale)
    {
        abort_if(Gate::denies('professionale_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = EmployeeList::pluck('employeeid', 'id')->prepend(trans('global.pleaseSelect'), '');

        $professionale->load('employee');

        return view('admin.professionales.edit', compact('employees', 'professionale'));
    }

    public function update(UpdateProfessionaleRequest $request, Professionale $professionale)
    {
        $professionale->update($request->all());

        return redirect()->route('admin.professionales.index');
    }

    public function show(Professionale $professionale)
    {
        abort_if(Gate::denies('professionale_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $professionale->load('employee');

        return view('admin.professionales.show', compact('professionale'));
    }

    public function destroy(Professionale $professionale)
    {
        abort_if(Gate::denies('professionale_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $professionale->delete();

        return back();
    }

    public function massDestroy(MassDestroyProfessionaleRequest $request)
    {
        $professionales = Professionale::find(request('ids'));

        foreach ($professionales as $professionale) {
            $professionale->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
