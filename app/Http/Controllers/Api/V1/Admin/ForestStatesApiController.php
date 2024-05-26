<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreForestStateRequest;
use App\Http\Requests\UpdateForestStateRequest;
use App\Http\Resources\Admin\ForestStateResource;
use App\Models\ForestState;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ForestStatesApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('forest_state_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ForestStateResource(ForestState::with(['status'])->get());
    }

    public function store(StoreForestStateRequest $request)
    {
        $forestState = ForestState::create($request->all());

        return (new ForestStateResource($forestState))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(ForestState $forestState)
    {
        abort_if(Gate::denies('forest_state_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ForestStateResource($forestState->load(['status']));
    }

    public function update(UpdateForestStateRequest $request, ForestState $forestState)
    {
        $forestState->update($request->all());

        return (new ForestStateResource($forestState))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(ForestState $forestState)
    {
        abort_if(Gate::denies('forest_state_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $forestState->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
