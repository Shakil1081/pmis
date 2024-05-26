<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAchievementschoolsUniversityRequest;
use App\Http\Requests\UpdateAchievementschoolsUniversityRequest;
use App\Http\Resources\Admin\AchievementschoolsUniversityResource;
use App\Models\AchievementschoolsUniversity;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AchievementschoolsUniversitiesApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('achievementschools_university_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AchievementschoolsUniversityResource(AchievementschoolsUniversity::all());
    }

    public function store(StoreAchievementschoolsUniversityRequest $request)
    {
        $achievementschoolsUniversity = AchievementschoolsUniversity::create($request->all());

        return (new AchievementschoolsUniversityResource($achievementschoolsUniversity))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(AchievementschoolsUniversity $achievementschoolsUniversity)
    {
        abort_if(Gate::denies('achievementschools_university_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AchievementschoolsUniversityResource($achievementschoolsUniversity);
    }

    public function update(UpdateAchievementschoolsUniversityRequest $request, AchievementschoolsUniversity $achievementschoolsUniversity)
    {
        $achievementschoolsUniversity->update($request->all());

        return (new AchievementschoolsUniversityResource($achievementschoolsUniversity))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(AchievementschoolsUniversity $achievementschoolsUniversity)
    {
        abort_if(Gate::denies('achievementschools_university_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $achievementschoolsUniversity->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
