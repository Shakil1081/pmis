<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRevenueExamRequest;
use App\Http\Requests\UpdateProjectRevenueExamRequest;
use App\Http\Resources\Admin\ProjectRevenueExamResource;
use App\Models\ProjectRevenueExam;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProjectRevenueExamApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('project_revenue_exam_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ProjectRevenueExamResource(ProjectRevenueExam::with(['exam'])->get());
    }

    public function store(StoreProjectRevenueExamRequest $request)
    {
        $projectRevenueExam = ProjectRevenueExam::create($request->all());

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

        return (new ProjectRevenueExamResource($projectRevenueExam))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }
}
