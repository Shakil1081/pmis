<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyLanguageRequest;
use App\Http\Requests\StoreLanguageRequest;
use App\Http\Requests\UpdateLanguageRequest;
use App\Models\EmployeeList;
use App\Models\Language;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LanguageController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('language_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $languages = Language::with(['employee'])->get();

        return view('admin.languages.index', compact('languages'));
    }

    public function create()
    {
        abort_if(Gate::denies('language_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = EmployeeList::pluck('employeeid', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.languages.create', compact('employees'));
    }

    public function store(StoreLanguageRequest $request)
    {
        $language = Language::create($request->all());

        return redirect()->route('admin.languages.index');
    }

    public function edit(Language $language)
    {
        abort_if(Gate::denies('language_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = EmployeeList::pluck('employeeid', 'id')->prepend(trans('global.pleaseSelect'), '');

        $language->load('employee');

        return view('admin.languages.edit', compact('employees', 'language'));
    }

    public function update(UpdateLanguageRequest $request, Language $language)
    {
        $language->update($request->all());

        return redirect()->route('admin.languages.index');
    }

    public function show(Language $language)
    {
        abort_if(Gate::denies('language_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $language->load('employee');

        return view('admin.languages.show', compact('language'));
    }

    public function destroy(Language $language)
    {
        abort_if(Gate::denies('language_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $language->delete();

        return back();
    }

    public function massDestroy(MassDestroyLanguageRequest $request)
    {
        $languages = Language::find(request('ids'));

        foreach ($languages as $language) {
            $language->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
