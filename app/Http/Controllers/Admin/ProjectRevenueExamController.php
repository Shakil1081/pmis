<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRevenueExamRequest;
use App\Http\Requests\UpdateProjectRevenueExamRequest;
use App\Models\ProjectRevenueExam;
use App\Models\ProjectRevenuelone;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class ProjectRevenueExamController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('project_revenue_exam_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = ProjectRevenueExam::with(['exam'])->select(sprintf('%s.*', (new ProjectRevenueExam)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'project_revenue_exam_show';
                $editGate      = 'project_revenue_exam_edit';
                $deleteGate    = 'project_revenue_exam_delete';
                $crudRoutePart = 'project-revenue-exams';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->addColumn('exam_name_bn', function ($row) {
                return $row->exam ? $row->exam->name_bn : '';
            });

            $table->editColumn('exam.name_en', function ($row) {
                return $row->exam ? (is_string($row->exam) ? $row->exam : $row->exam->name_en) : '';
            });
            $table->editColumn('exam_name_bn', function ($row) {
                return $row->exam_name_bn ? $row->exam_name_bn : '';
            });
            $table->editColumn('exam_name_en', function ($row) {
                return $row->exam_name_en ? $row->exam_name_en : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'exam']);

            return $table->make(true);
        }

        return view('admin.projectRevenueExams.index');
    }

    public function create()
    {
        abort_if(Gate::denies('project_revenue_exam_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $exams = ProjectRevenuelone::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.projectRevenueExams.create', compact('exams'));
    }

    public function store(StoreProjectRevenueExamRequest $request)
    {
        $projectRevenueExam = ProjectRevenueExam::create($request->all());

        return redirect()->route('admin.project-revenue-exams.index');
    }

    public function edit(ProjectRevenueExam $projectRevenueExam)
    {
        abort_if(Gate::denies('project_revenue_exam_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $exams = ProjectRevenuelone::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $projectRevenueExam->load('exam');

        return view('admin.projectRevenueExams.edit', compact('exams', 'projectRevenueExam'));
    }

    public function update(UpdateProjectRevenueExamRequest $request, ProjectRevenueExam $projectRevenueExam)
    {
        $projectRevenueExam->update($request->all());

        return redirect()->route('admin.project-revenue-exams.index');
    }

    public function show(ProjectRevenueExam $projectRevenueExam)
    {
        abort_if(Gate::denies('project_revenue_exam_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $projectRevenueExam->load('exam');

        return view('admin.projectRevenueExams.show', compact('projectRevenueExam'));
    }
}
