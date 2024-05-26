<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreResultGroupRequest;
use App\Http\Requests\UpdateResultGroupRequest;
use App\Http\Resources\Admin\ResultGroupResource;
use App\Models\ResultGroup;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ResultGroupApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('result_group_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ResultGroupResource(ResultGroup::all());
    }

    public function store(StoreResultGroupRequest $request)
    {
        $resultGroup = ResultGroup::create($request->all());

        return (new ResultGroupResource($resultGroup))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(ResultGroup $resultGroup)
    {
        abort_if(Gate::denies('result_group_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ResultGroupResource($resultGroup);
    }

    public function update(UpdateResultGroupRequest $request, ResultGroup $resultGroup)
    {
        $resultGroup->update($request->all());

        return (new ResultGroupResource($resultGroup))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(ResultGroup $resultGroup)
    {
        abort_if(Gate::denies('result_group_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $resultGroup->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
