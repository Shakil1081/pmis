<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyProjectRevenueloneRequest;
use App\Http\Requests\StoreProjectRevenueloneRequest;
use App\Http\Requests\UpdateProjectRevenueloneRequest;
use App\Models\Joininginfo;
use App\Models\ProjectRevenuelone;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class ProjectRevenueloneController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('project_revenuelone_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = ProjectRevenuelone::with(['project_revenue'])->select(sprintf('%s.*', (new ProjectRevenuelone)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'project_revenuelone_show';
                $editGate      = 'project_revenuelone_edit';
                $deleteGate    = 'project_revenuelone_delete';
                $crudRoutePart = 'project-revenuelones';

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
            $table->addColumn('project_revenue_project_revenue_bn', function ($row) {
                return $row->project_revenue ? $row->project_revenue->project_revenue_bn : '';
            });

            $table->editColumn('name_bn', function ($row) {
                return $row->name_bn ? $row->name_bn : '';
            });
            $table->editColumn('name_en', function ($row) {
                return $row->name_en ? $row->name_en : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'project_revenue']);

            return $table->make(true);
        }

        return view('admin.projectRevenuelones.index');
    }

    public function create()
    {
        abort_if(Gate::denies('project_revenuelone_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $project_revenues = Joininginfo::pluck('project_revenue_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.projectRevenuelones.create', compact('project_revenues'));
    }

    public function store(StoreProjectRevenueloneRequest $request)
    {
        $projectRevenuelone = ProjectRevenuelone::create($request->all());

        return redirect()->route('admin.project-revenuelones.index');
    }

    public function edit(ProjectRevenuelone $projectRevenuelone)
    {
        abort_if(Gate::denies('project_revenuelone_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $project_revenues = Joininginfo::pluck('project_revenue_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $projectRevenuelone->load('project_revenue');

        return view('admin.projectRevenuelones.edit', compact('projectRevenuelone', 'project_revenues'));
    }

    public function update(UpdateProjectRevenueloneRequest $request, ProjectRevenuelone $projectRevenuelone)
    {
        $projectRevenuelone->update($request->all());

        return redirect()->route('admin.project-revenuelones.index');
    }

    public function show(ProjectRevenuelone $projectRevenuelone)
    {
        abort_if(Gate::denies('project_revenuelone_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $projectRevenuelone->load('project_revenue');

        return view('admin.projectRevenuelones.show', compact('projectRevenuelone'));
    }

    public function destroy(ProjectRevenuelone $projectRevenuelone)
    {
        abort_if(Gate::denies('project_revenuelone_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $projectRevenuelone->delete();

        return back();
    }

    public function massDestroy(MassDestroyProjectRevenueloneRequest $request)
    {
        $projectRevenuelones = ProjectRevenuelone::find(request('ids'));

        foreach ($projectRevenuelones as $projectRevenuelone) {
            $projectRevenuelone->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
