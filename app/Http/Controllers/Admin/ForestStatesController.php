<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyForestStateRequest;
use App\Http\Requests\StoreForestStateRequest;
use App\Http\Requests\UpdateForestStateRequest;
use App\Models\ForestState;
use App\Models\Status;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class ForestStatesController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('forest_state_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = ForestState::with(['status'])->select(sprintf('%s.*', (new ForestState)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'forest_state_show';
                $editGate      = 'forest_state_edit';
                $deleteGate    = 'forest_state_delete';
                $crudRoutePart = 'forest-states';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('name_bn', function ($row) {
                return $row->name_bn ? $row->name_bn : '';
            });
            $table->editColumn('name_en', function ($row) {
                return $row->name_en ? $row->name_en : '';
            });
            $table->addColumn('status_name', function ($row) {
                return $row->status ? $row->status->name : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'status']);

            return $table->make(true);
        }

        return view('admin.forestStates.index');
    }

    public function create()
    {
        abort_if(Gate::denies('forest_state_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $statuses = Status::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.forestStates.create', compact('statuses'));
    }

    public function store(StoreForestStateRequest $request)
    {
        $forestState = ForestState::create($request->all());

        return redirect()->route('admin.forest-states.index');
    }

    public function edit(ForestState $forestState)
    {
        abort_if(Gate::denies('forest_state_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $statuses = Status::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $forestState->load('status');

        return view('admin.forestStates.edit', compact('forestState', 'statuses'));
    }

    public function update(UpdateForestStateRequest $request, ForestState $forestState)
    {
        $forestState->update($request->all());

        return redirect()->route('admin.forest-states.index');
    }

    public function show(ForestState $forestState)
    {
        abort_if(Gate::denies('forest_state_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $forestState->load('status');

        return view('admin.forestStates.show', compact('forestState'));
    }

    public function destroy(ForestState $forestState)
    {
        abort_if(Gate::denies('forest_state_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $forestState->delete();

        return back();
    }

    public function massDestroy(MassDestroyForestStateRequest $request)
    {
        $forestStates = ForestState::find(request('ids'));

        foreach ($forestStates as $forestState) {
            $forestState->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
