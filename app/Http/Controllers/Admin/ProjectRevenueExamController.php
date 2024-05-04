<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreProjectRevenueExamRequest;
use App\Http\Requests\UpdateProjectRevenueExamRequest;
use App\Models\ProjectRevenueExam;
use App\Models\ProjectRevenuelone;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class ProjectRevenueExamController extends Controller
{
    use MediaUploadingTrait;

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

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : '';
            });
            $table->addColumn('exam_name_bn', function ($row) {
                return $row->exam ? $row->exam->name_bn : '';
            });

            $table->editColumn('exam_name_bn', function ($row) {
                return $row->exam_name_bn ? $row->exam_name_bn : '';
            });
            $table->editColumn('exam_name_en', function ($row) {
                return $row->exam_name_en ? $row->exam_name_en : '';
            });
            $table->editColumn('upload', function ($row) {
                return $row->upload ? '<a href="' . $row->upload->getUrl() . '" target="_blank">' . trans('global.downloadFile') . '</a>' : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'exam', 'upload']);

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

        if ($request->input('upload', false)) {
            $projectRevenueExam->addMedia(storage_path('tmp/uploads/' . basename($request->input('upload'))))->toMediaCollection('upload');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $projectRevenueExam->id]);
        }

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

        if ($request->input('upload', false)) {
            if (! $projectRevenueExam->upload || $request->input('upload') !== $projectRevenueExam->upload->file_name) {
                if ($projectRevenueExam->upload) {
                    $projectRevenueExam->upload->delete();
                }
                $projectRevenueExam->addMedia(storage_path('tmp/uploads/' . basename($request->input('upload'))))->toMediaCollection('upload');
            }
        } elseif ($projectRevenueExam->upload) {
            $projectRevenueExam->upload->delete();
        }

        return redirect()->route('admin.project-revenue-exams.index');
    }

    public function show(ProjectRevenueExam $projectRevenueExam)
    {
        abort_if(Gate::denies('project_revenue_exam_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $projectRevenueExam->load('exam');

        return view('admin.projectRevenueExams.show', compact('projectRevenueExam'));
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('project_revenue_exam_create') && Gate::denies('project_revenue_exam_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new ProjectRevenueExam();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
