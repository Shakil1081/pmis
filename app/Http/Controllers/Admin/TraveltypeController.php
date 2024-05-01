<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyTraveltypeRequest;
use App\Http\Requests\StoreTraveltypeRequest;
use App\Http\Requests\UpdateTraveltypeRequest;
use App\Models\Traveltype;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class TraveltypeController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('traveltype_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Traveltype::query()->select(sprintf('%s.*', (new Traveltype)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'traveltype_show';
                $editGate      = 'traveltype_edit';
                $deleteGate    = 'traveltype_delete';
                $crudRoutePart = 'traveltypes';

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

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.traveltypes.index');
    }

    public function create()
    {
        abort_if(Gate::denies('traveltype_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.traveltypes.create');
    }

    public function store(StoreTraveltypeRequest $request)
    {
        $traveltype = Traveltype::create($request->all());

        return redirect()->route('admin.traveltypes.index');
    }

    public function edit(Traveltype $traveltype)
    {
        abort_if(Gate::denies('traveltype_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.traveltypes.edit', compact('traveltype'));
    }

    public function update(UpdateTraveltypeRequest $request, Traveltype $traveltype)
    {
        $traveltype->update($request->all());

        return redirect()->route('admin.traveltypes.index');
    }

    public function show(Traveltype $traveltype)
    {
        abort_if(Gate::denies('traveltype_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.traveltypes.show', compact('traveltype'));
    }

    public function destroy(Traveltype $traveltype)
    {
        abort_if(Gate::denies('traveltype_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $traveltype->delete();

        return back();
    }

    public function massDestroy(MassDestroyTraveltypeRequest $request)
    {
        $traveltypes = Traveltype::find(request('ids'));

        foreach ($traveltypes as $traveltype) {
            $traveltype->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
