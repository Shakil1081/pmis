<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreProjectRevenueExamRequest;
use App\Http\Requests\UpdateProjectRevenueExamRequest;
use App\Http\Resources\Admin\ProjectRevenueExamResource;
use App\Models\ProjectRevenueExam;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProjectRevenueExamApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
       

        return new ProjectRevenueExamResource(ProjectRevenueExam::with(['exam'])->get());
    }

    public function store(StoreProjectRevenueExamRequest $request)
    {
        $projectRevenueExam = ProjectRevenueExam::create($request->all());

        if ($request->input('upload', false)) {
            $projectRevenueExam->addMedia(storage_path('tmp/uploads/' . basename($request->input('upload'))))->toMediaCollection('upload');
        }

        return (new ProjectRevenueExamResource($projectRevenueExam))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(ProjectRevenueExam $projectRevenueExam)
    {
        abort_if(Gate::denies('project_revenue_exam_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ProjectRevenueExamResource($projectRevenueExam->load(['exam']));
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

        return (new ProjectRevenueExamResource($projectRevenueExam))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }
}
