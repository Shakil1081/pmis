<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyForestRangeRequest;
use App\Http\Requests\StoreForestRangeRequest;
use App\Http\Requests\UpdateForestRangeRequest;
use App\Models\Division;
use App\Models\ForestRange;
use App\Models\ForestState;
use App\Models\Status;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class ForestRangesController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('forest_range_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = ForestRange::with(['forest_state', 'status', 'forest_division'])->select(sprintf('%s.*', (new ForestRange)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'forest_range_show';
                $editGate      = 'forest_range_edit';
                $deleteGate    = 'forest_range_delete';
                $crudRoutePart = 'forest-ranges';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : '';
            });
            $table->addColumn('forest_state_name_bn', function ($row) {
                return $row->forest_state ? $row->forest_state->name_bn : '';
            });

            $table->editColumn('forest_division_bbs_code', function ($row) {
                return $row->forest_division_bbs_code ? $row->forest_division_bbs_code : '';
            });
            $table->addColumn('status_name', function ($row) {
                return $row->status ? $row->status->name : '';
            });

            $table->addColumn('forest_division_name_bn', function ($row) {
                return $row->forest_division ? $row->forest_division->name_bn : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'forest_state', 'status', 'forest_division']);

            return $table->make(true);
        }

        return view('admin.forestRanges.index');
    }

    public function create()
    {
        abort_if(Gate::denies('forest_range_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $forest_states = ForestState::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $statuses = Status::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $forest_divisions = Division::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.forestRanges.create', compact('forest_divisions', 'forest_states', 'statuses'));
    }

    public function store(StoreForestRangeRequest $request)
    {
        $forestRange = ForestRange::create($request->all());

        return redirect()->route('admin.forest-ranges.index');
    }

    public function edit(ForestRange $forestRange)
    {
        abort_if(Gate::denies('forest_range_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $forest_states = ForestState::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $statuses = Status::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $forest_divisions = Division::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $forestRange->load('forest_state', 'status', 'forest_division');

        return view('admin.forestRanges.edit', compact('forestRange', 'forest_divisions', 'forest_states', 'statuses'));
    }

    public function update(UpdateForestRangeRequest $request, ForestRange $forestRange)
    {
        $forestRange->update($request->all());

        return redirect()->route('admin.forest-ranges.index');
    }

    public function show(ForestRange $forestRange)
    {
        abort_if(Gate::denies('forest_range_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $forestRange->load('forest_state', 'status', 'forest_division');

        return view('admin.forestRanges.show', compact('forestRange'));
    }

    public function destroy(ForestRange $forestRange)
    {
        abort_if(Gate::denies('forest_range_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $forestRange->delete();

        return back();
    }

    public function massDestroy(MassDestroyForestRangeRequest $request)
    {
        $forestRanges = ForestRange::find(request('ids'));

        foreach ($forestRanges as $forestRange) {
            $forestRange->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
