<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyForestBeatRequest;
use App\Http\Requests\StoreForestBeatRequest;
use App\Http\Requests\UpdateForestBeatRequest;
use App\Models\ForestBeat;
use App\Models\ForestRange;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class ForestBeatsController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('forest_beat_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = ForestBeat::with(['forest_range'])->select(sprintf('%s.*', (new ForestBeat)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'forest_beat_show';
                $editGate      = 'forest_beat_edit';
                $deleteGate    = 'forest_beat_delete';
                $crudRoutePart = 'forest-beats';

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
            $table->addColumn('forest_range_forest_division_bbs_code', function ($row) {
                return $row->forest_range ? $row->forest_range->forest_division_bbs_code : '';
            });

            $table->editColumn('name_bn', function ($row) {
                return $row->name_bn ? $row->name_bn : '';
            });
            $table->editColumn('name_en', function ($row) {
                return $row->name_en ? $row->name_en : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'forest_range']);

            return $table->make(true);
        }

        return view('admin.forestBeats.index');
    }

    public function create()
    {
        abort_if(Gate::denies('forest_beat_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $forest_ranges = ForestRange::pluck('forest_division_bbs_code', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.forestBeats.create', compact('forest_ranges'));
    }

    public function store(StoreForestBeatRequest $request)
    {
        $forestBeat = ForestBeat::create($request->all());

        return redirect()->route('admin.forest-beats.index');
    }

    public function edit(ForestBeat $forestBeat)
    {
        abort_if(Gate::denies('forest_beat_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $forest_ranges = ForestRange::pluck('forest_division_bbs_code', 'id')->prepend(trans('global.pleaseSelect'), '');

        $forestBeat->load('forest_range');

        return view('admin.forestBeats.edit', compact('forestBeat', 'forest_ranges'));
    }

    public function update(UpdateForestBeatRequest $request, ForestBeat $forestBeat)
    {
        $forestBeat->update($request->all());

        return redirect()->route('admin.forest-beats.index');
    }

    public function show(ForestBeat $forestBeat)
    {
        abort_if(Gate::denies('forest_beat_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $forestBeat->load('forest_range');

        return view('admin.forestBeats.show', compact('forestBeat'));
    }

    public function destroy(ForestBeat $forestBeat)
    {
        abort_if(Gate::denies('forest_beat_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $forestBeat->delete();

        return back();
    }

    public function massDestroy(MassDestroyForestBeatRequest $request)
    {
        $forestBeats = ForestBeat::find(request('ids'));

        foreach ($forestBeats as $forestBeat) {
            $forestBeat->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
