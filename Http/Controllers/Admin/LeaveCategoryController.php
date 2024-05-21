<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyLeaveCategoryRequest;
use App\Http\Requests\StoreLeaveCategoryRequest;
use App\Http\Requests\UpdateLeaveCategoryRequest;
use App\Models\LeaveCategory;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class LeaveCategoryController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('leave_category_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = LeaveCategory::query()->select(sprintf('%s.*', (new LeaveCategory)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'leave_category_show';
                $editGate      = 'leave_category_edit';
                $deleteGate    = 'leave_category_delete';
                $crudRoutePart = 'leave-categories';

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
            $table->editColumn('value', function ($row) {
                return $row->value ? $row->value : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.leaveCategories.index');
    }

    public function create()
    {
        abort_if(Gate::denies('leave_category_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.leaveCategories.create');
    }

    public function store(StoreLeaveCategoryRequest $request)
    {
        $leaveCategory = LeaveCategory::create($request->all());

        return redirect()->route('admin.leave-categories.index');
    }

    public function edit(LeaveCategory $leaveCategory)
    {
        abort_if(Gate::denies('leave_category_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.leaveCategories.edit', compact('leaveCategory'));
    }

    public function update(UpdateLeaveCategoryRequest $request, LeaveCategory $leaveCategory)
    {
        $leaveCategory->update($request->all());

        return redirect()->route('admin.leave-categories.index');
    }

    public function show(LeaveCategory $leaveCategory)
    {
        abort_if(Gate::denies('leave_category_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.leaveCategories.show', compact('leaveCategory'));
    }

    public function destroy(LeaveCategory $leaveCategory)
    {
        abort_if(Gate::denies('leave_category_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $leaveCategory->delete();

        return back();
    }

    public function massDestroy(MassDestroyLeaveCategoryRequest $request)
    {
        $leaveCategories = LeaveCategory::find(request('ids'));

        foreach ($leaveCategories as $leaveCategory) {
            $leaveCategory->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
