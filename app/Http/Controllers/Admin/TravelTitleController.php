<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyTravelTitleRequest;
use App\Http\Requests\StoreTravelTitleRequest;
use App\Http\Requests\UpdateTravelTitleRequest;
use App\Models\TravelTitle;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class TravelTitleController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('travel_title_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = TravelTitle::query()->select(sprintf('%s.*', (new TravelTitle)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'travel_title_show';
                $editGate      = 'travel_title_edit';
                $deleteGate    = 'travel_title_delete';
                $crudRoutePart = 'travel-titles';

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
            $table->editColumn('name_bn', function ($row) {
                return $row->name_bn ? $row->name_bn : '';
            });
            $table->editColumn('name_en', function ($row) {
                return $row->name_en ? $row->name_en : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.travelTitles.index');
    }

    public function create()
    {
        abort_if(Gate::denies('travel_title_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.travelTitles.create');
    }

    public function store(StoreTravelTitleRequest $request)
    {
        $travelTitle = TravelTitle::create($request->all());

        return redirect()->route('admin.travel-titles.index');
    }

    public function edit(TravelTitle $travelTitle)
    {
        abort_if(Gate::denies('travel_title_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.travelTitles.edit', compact('travelTitle'));
    }

    public function update(UpdateTravelTitleRequest $request, TravelTitle $travelTitle)
    {
        $travelTitle->update($request->all());

        return redirect()->route('admin.travel-titles.index');
    }

    public function show(TravelTitle $travelTitle)
    {
        abort_if(Gate::denies('travel_title_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.travelTitles.show', compact('travelTitle'));
    }

    public function destroy(TravelTitle $travelTitle)
    {
        abort_if(Gate::denies('travel_title_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $travelTitle->delete();

        return back();
    }

    public function massDestroy(MassDestroyTravelTitleRequest $request)
    {
        $travelTitles = TravelTitle::find(request('ids'));

        foreach ($travelTitles as $travelTitle) {
            $travelTitle->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
