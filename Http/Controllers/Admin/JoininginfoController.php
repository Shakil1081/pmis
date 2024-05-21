<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyJoininginfoRequest;
use App\Http\Requests\StoreJoininginfoRequest;
use App\Http\Requests\UpdateJoininginfoRequest;
use App\Models\Joininginfo;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class JoininginfoController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('joininginfo_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Joininginfo::query()->select(sprintf('%s.*', (new Joininginfo)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'joininginfo_show';
                $editGate      = 'joininginfo_edit';
                $deleteGate    = 'joininginfo_delete';
                $crudRoutePart = 'joininginfos';

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
            $table->editColumn('project_revenue_bn', function ($row) {
                return $row->project_revenue_bn ? $row->project_revenue_bn : '';
            });
            $table->editColumn('project_revenue_en', function ($row) {
                return $row->project_revenue_en ? $row->project_revenue_en : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.joininginfos.index');
    }

    public function create()
    {
        abort_if(Gate::denies('joininginfo_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.joininginfos.create');
    }

    public function store(StoreJoininginfoRequest $request)
    {
        $joininginfo = Joininginfo::create($request->all());

        return redirect()->route('admin.joininginfos.index');
    }

    public function edit(Joininginfo $joininginfo)
    {
        abort_if(Gate::denies('joininginfo_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.joininginfos.edit', compact('joininginfo'));
    }

    public function update(UpdateJoininginfoRequest $request, Joininginfo $joininginfo)
    {
        $joininginfo->update($request->all());

        return redirect()->route('admin.joininginfos.index');
    }

    public function show(Joininginfo $joininginfo)
    {
        abort_if(Gate::denies('joininginfo_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.joininginfos.show', compact('joininginfo'));
    }

    public function destroy(Joininginfo $joininginfo)
    {
        abort_if(Gate::denies('joininginfo_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $joininginfo->delete();

        return back();
    }

    public function massDestroy(MassDestroyJoininginfoRequest $request)
    {
        $joininginfos = Joininginfo::find(request('ids'));

        foreach ($joininginfos as $joininginfo) {
            $joininginfo->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
