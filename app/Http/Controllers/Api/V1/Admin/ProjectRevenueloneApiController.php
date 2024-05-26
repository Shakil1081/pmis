<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRevenueloneRequest;
use App\Http\Requests\UpdateProjectRevenueloneRequest;
use App\Http\Resources\Admin\ProjectRevenueloneResource;
use App\Models\ProjectRevenuelone;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProjectRevenueloneApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('project_revenuelone_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ProjectRevenueloneResource(ProjectRevenuelone::with(['project_revenue'])->get());
    }

    public function store(StoreProjectRevenueloneRequest $request)
    {
        $projectRevenuelone = ProjectRevenuelone::create($request->all());

        return (new ProjectRevenueloneResource($projectRevenuelone))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(ProjectRevenuelone $projectRevenuelone)
    {
        abort_if(Gate::denies('project_revenuelone_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ProjectRevenueloneResource($projectRevenuelone->load(['project_revenue']));
    }

    public function update(UpdateProjectRevenueloneRequest $request, ProjectRevenuelone $projectRevenuelone)
    {
        $projectRevenuelone->update($request->all());

        return (new ProjectRevenueloneResource($projectRevenuelone))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(ProjectRevenuelone $projectRevenuelone)
    {
        abort_if(Gate::denies('project_revenuelone_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $projectRevenuelone->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
