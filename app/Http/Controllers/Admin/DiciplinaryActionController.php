<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyDiciplinaryActionRequest;
use App\Http\Requests\StoreDiciplinaryActionRequest;
use App\Http\Requests\UpdateDiciplinaryActionRequest;
use App\Models\CriminalproDisciplinary;
use App\Models\DiciplinaryAction;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DiciplinaryActionController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('diciplinary_action_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $diciplinaryActions = DiciplinaryAction::with(['diciplinary_action'])->get();

        return view('admin.diciplinaryActions.index', compact('diciplinaryActions'));
    }

    public function create()
    {
        abort_if(Gate::denies('diciplinary_action_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $diciplinary_actions = CriminalproDisciplinary::pluck('judgement_type', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.diciplinaryActions.create', compact('diciplinary_actions'));
    }

    public function store(StoreDiciplinaryActionRequest $request)
    {
        $diciplinaryAction = DiciplinaryAction::create($request->all());

        return redirect()->route('admin.diciplinary-actions.index');
    }

    public function edit(DiciplinaryAction $diciplinaryAction)
    {
        abort_if(Gate::denies('diciplinary_action_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $diciplinary_actions = CriminalproDisciplinary::pluck('judgement_type', 'id')->prepend(trans('global.pleaseSelect'), '');

        $diciplinaryAction->load('diciplinary_action');

        return view('admin.diciplinaryActions.edit', compact('diciplinaryAction', 'diciplinary_actions'));
    }

    public function update(UpdateDiciplinaryActionRequest $request, DiciplinaryAction $diciplinaryAction)
    {
        $diciplinaryAction->update($request->all());

        return redirect()->route('admin.diciplinary-actions.index');
    }

    public function show(DiciplinaryAction $diciplinaryAction)
    {
        abort_if(Gate::denies('diciplinary_action_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $diciplinaryAction->load('diciplinary_action');

        return view('admin.diciplinaryActions.show', compact('diciplinaryAction'));
    }

    public function destroy(DiciplinaryAction $diciplinaryAction)
    {
        abort_if(Gate::denies('diciplinary_action_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $diciplinaryAction->delete();

        return back();
    }

    public function massDestroy(MassDestroyDiciplinaryActionRequest $request)
    {
        $diciplinaryActions = DiciplinaryAction::find(request('ids'));

        foreach ($diciplinaryActions as $diciplinaryAction) {
            $diciplinaryAction->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
