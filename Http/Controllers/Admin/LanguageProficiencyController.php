<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyLanguageProficiencyRequest;
use App\Http\Requests\StoreLanguageProficiencyRequest;
use App\Http\Requests\UpdateLanguageProficiencyRequest;
use App\Models\LanguageProficiency;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LanguageProficiencyController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('language_proficiency_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $languageProficiencies = LanguageProficiency::all();

        return view('admin.languageProficiencies.index', compact('languageProficiencies'));
    }

    public function create()
    {
        abort_if(Gate::denies('language_proficiency_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.languageProficiencies.create');
    }

    public function store(StoreLanguageProficiencyRequest $request)
    {
        $languageProficiency = LanguageProficiency::create($request->all());

        return redirect()->route('admin.language-proficiencies.index');
    }

    public function edit(LanguageProficiency $languageProficiency)
    {
        abort_if(Gate::denies('language_proficiency_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.languageProficiencies.edit', compact('languageProficiency'));
    }

    public function update(UpdateLanguageProficiencyRequest $request, LanguageProficiency $languageProficiency)
    {
        $languageProficiency->update($request->all());

        return redirect()->route('admin.language-proficiencies.index');
    }

    public function show(LanguageProficiency $languageProficiency)
    {
        abort_if(Gate::denies('language_proficiency_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.languageProficiencies.show', compact('languageProficiency'));
    }

    public function destroy(LanguageProficiency $languageProficiency)
    {
        abort_if(Gate::denies('language_proficiency_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $languageProficiency->delete();

        return back();
    }

    public function massDestroy(MassDestroyLanguageProficiencyRequest $request)
    {
        $languageProficiencies = LanguageProficiency::find(request('ids'));

        foreach ($languageProficiencies as $languageProficiency) {
            $languageProficiency->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
