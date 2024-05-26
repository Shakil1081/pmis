<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyForestDivisionRequest;
use App\Http\Requests\StoreForestDivisionRequest;
use App\Http\Requests\UpdateForestDivisionRequest;
use App\Models\ForestDivision;
use App\Models\ForestState;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class ForestDivisionsController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('forest_division_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = ForestDivision::with(['forest_state'])->select(sprintf('%s.*', (new ForestDivision)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'forest_division_show';
                $editGate      = 'forest_division_edit';
                $deleteGate    = 'forest_division_delete';
                $crudRoutePart = 'forest-divisions';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->addColumn('forest_state_name_bn', function ($row) {
                return $row->forest_state ? $row->forest_state->name_bn : '';
            });

            $table->editColumn('name_bn', function ($row) {
                return $row->name_bn ? $row->name_bn : '';
            });
            $table->editColumn('name_en', function ($row) {
                return $row->name_en ? $row->name_en : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'forest_state']);

            return $table->make(true);
        }

        return view('admin.forestDivisions.index');
    }

    public function create()
    {
        abort_if(Gate::denies('forest_division_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $forest_states = ForestState::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.forestDivisions.create', compact('forest_states'));
    }

    public function store(StoreForestDivisionRequest $request)
    {
        $forestDivision = ForestDivision::create($request->all());

        return redirect()->route('admin.forest-divisions.index');
    }

    public function edit(ForestDivision $forestDivision)
    {
        abort_if(Gate::denies('forest_division_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $forest_states = ForestState::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $forestDivision->load('forest_state');

        return view('admin.forestDivisions.edit', compact('forestDivision', 'forest_states'));
    }

    public function update(UpdateForestDivisionRequest $request, ForestDivision $forestDivision)
    {
        $forestDivision->update($request->all());

        return redirect()->route('admin.forest-divisions.index');
    }

    public function show(ForestDivision $forestDivision)
    {
        abort_if(Gate::denies('forest_division_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $forestDivision->load('forest_state');

        return view('admin.forestDivisions.show', compact('forestDivision'));
    }

    public function destroy(ForestDivision $forestDivision)
    {
        abort_if(Gate::denies('forest_division_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $forestDivision->delete();

        return back();
    }

    public function massDestroy(MassDestroyForestDivisionRequest $request)
    {
        $forestDivisions = ForestDivision::find(request('ids'));

        foreach ($forestDivisions as $forestDivision) {
            $forestDivision->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
