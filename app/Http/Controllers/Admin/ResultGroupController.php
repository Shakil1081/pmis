<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyResultGroupRequest;
use App\Http\Requests\StoreResultGroupRequest;
use App\Http\Requests\UpdateResultGroupRequest;
use App\Models\ResultGroup;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class ResultGroupController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('result_group_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = ResultGroup::query()->select(sprintf('%s.*', (new ResultGroup)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'result_group_show';
                $editGate      = 'result_group_edit';
                $deleteGate    = 'result_group_delete';
                $crudRoutePart = 'result-groups';

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

        return view('admin.resultGroups.index');
    }

    public function create()
    {
        abort_if(Gate::denies('result_group_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.resultGroups.create');
    }

    public function store(StoreResultGroupRequest $request)
    {
        $resultGroup = ResultGroup::create($request->all());

        return redirect()->route('admin.result-groups.index');
    }

    public function edit(ResultGroup $resultGroup)
    {
        abort_if(Gate::denies('result_group_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.resultGroups.edit', compact('resultGroup'));
    }

    public function update(UpdateResultGroupRequest $request, ResultGroup $resultGroup)
    {
        $resultGroup->update($request->all());

        return redirect()->route('admin.result-groups.index');
    }

    public function show(ResultGroup $resultGroup)
    {
        abort_if(Gate::denies('result_group_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.resultGroups.show', compact('resultGroup'));
    }

    public function destroy(ResultGroup $resultGroup)
    {
        abort_if(Gate::denies('result_group_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $resultGroup->delete();

        return back();
    }

    public function massDestroy(MassDestroyResultGroupRequest $request)
    {
        $resultGroups = ResultGroup::find(request('ids'));

        foreach ($resultGroups as $resultGroup) {
            $resultGroup->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
