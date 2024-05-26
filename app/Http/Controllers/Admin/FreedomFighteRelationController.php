<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyFreedomFighteRelationRequest;
use App\Http\Requests\StoreFreedomFighteRelationRequest;
use App\Http\Requests\UpdateFreedomFighteRelationRequest;
use App\Models\FreedomFighteRelation;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FreedomFighteRelationController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('freedom_fighte_relation_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $freedomFighteRelations = FreedomFighteRelation::all();

        return view('admin.freedomFighteRelations.index', compact('freedomFighteRelations'));
    }

    public function create()
    {
        abort_if(Gate::denies('freedom_fighte_relation_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.freedomFighteRelations.create');
    }

    public function store(StoreFreedomFighteRelationRequest $request)
    {
        $freedomFighteRelation = FreedomFighteRelation::create($request->all());

        return redirect()->route('admin.freedom-fighte-relations.index');
    }

    public function edit(FreedomFighteRelation $freedomFighteRelation)
    {
        abort_if(Gate::denies('freedom_fighte_relation_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.freedomFighteRelations.edit', compact('freedomFighteRelation'));
    }

    public function update(UpdateFreedomFighteRelationRequest $request, FreedomFighteRelation $freedomFighteRelation)
    {
        $freedomFighteRelation->update($request->all());

        return redirect()->route('admin.freedom-fighte-relations.index');
    }

    public function show(FreedomFighteRelation $freedomFighteRelation)
    {
        abort_if(Gate::denies('freedom_fighte_relation_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.freedomFighteRelations.show', compact('freedomFighteRelation'));
    }

    public function destroy(FreedomFighteRelation $freedomFighteRelation)
    {
        abort_if(Gate::denies('freedom_fighte_relation_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $freedomFighteRelation->delete();

        return back();
    }

    public function massDestroy(MassDestroyFreedomFighteRelationRequest $request)
    {
        $freedomFighteRelations = FreedomFighteRelation::find(request('ids'));

        foreach ($freedomFighteRelations as $freedomFighteRelation) {
            $freedomFighteRelation->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
