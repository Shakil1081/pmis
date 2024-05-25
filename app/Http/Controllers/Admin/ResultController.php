<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyResultRequest;
use App\Http\Requests\StoreResultRequest;
use App\Http\Requests\UpdateResultRequest;
use App\Models\Result;
use App\Models\ResultGroup;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class ResultController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('result_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Result::with(['resultgroup'])->select(sprintf('%s.*', (new Result)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'result_show';
                $editGate      = 'result_edit';
                $deleteGate    = 'result_delete';
                $crudRoutePart = 'results';

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
            $table->addColumn('resultgroup_name_bn', function ($row) {
                return $row->resultgroup ? $row->resultgroup->name_bn : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'resultgroup']);

            return $table->make(true);
        }

        return view('admin.results.index');
    }

    public function create()
    {
        abort_if(Gate::denies('result_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $resultgroups = ResultGroup::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.results.create', compact('resultgroups'));
    }

    public function store(StoreResultRequest $request)
    {
        $result = Result::create($request->all());

        return redirect()->route('admin.results.index');
    }

    public function edit(Result $result)
    {
        abort_if(Gate::denies('result_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $resultgroups = ResultGroup::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $result->load('resultgroup');

        return view('admin.results.edit', compact('result', 'resultgroups'));
    }

    public function update(UpdateResultRequest $request, Result $result)
    {
        $result->update($request->all());

        return redirect()->route('admin.results.index');
    }

    public function show(Result $result)
    {
        abort_if(Gate::denies('result_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $result->load('resultgroup');

        return view('admin.results.show', compact('result'));
    }

    public function destroy(Result $result)
    {
        abort_if(Gate::denies('result_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $result->delete();

        return back();
    }

    public function massDestroy(MassDestroyResultRequest $request)
    {
        $results = Result::find(request('ids'));

        foreach ($results as $result) {
            $result->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
