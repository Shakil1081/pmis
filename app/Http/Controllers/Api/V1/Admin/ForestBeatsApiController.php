<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreForestBeatRequest;
use App\Http\Requests\UpdateForestBeatRequest;
use App\Http\Resources\Admin\ForestBeatResource;
use App\Models\ForestBeat;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ForestBeatsApiController extends Controller
{
    public function index()
    { 

        return new ForestBeatResource(ForestBeat::with(['forest_range'])->get());
    }

    public function store(StoreForestBeatRequest $request)
    {
        $forestBeat = ForestBeat::create($request->all());

        return (new ForestBeatResource($forestBeat))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(ForestBeat $forestBeat)
    {
        abort_if(Gate::denies('forest_beat_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ForestBeatResource($forestBeat->load(['forest_range']));
    }

    public function update(UpdateForestBeatRequest $request, ForestBeat $forestBeat)
    {
        $forestBeat->update($request->all());

        return (new ForestBeatResource($forestBeat))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(ForestBeat $forestBeat)
    {
        abort_if(Gate::denies('forest_beat_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $forestBeat->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
