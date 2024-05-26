<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreForestRangeRequest;
use App\Http\Requests\UpdateForestRangeRequest;
use App\Http\Resources\Admin\ForestRangeResource;
use App\Models\ForestRange;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ForestRangesApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('forest_range_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ForestRangeResource(ForestRange::with(['forest_state', 'forest_division'])->get());
    }

    public function store(StoreForestRangeRequest $request)
    {
        $forestRange = ForestRange::create($request->all());

        return (new ForestRangeResource($forestRange))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(ForestRange $forestRange)
    {
        abort_if(Gate::denies('forest_range_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ForestRangeResource($forestRange->load(['forest_state', 'forest_division']));
    }

    public function update(UpdateForestRangeRequest $request, ForestRange $forestRange)
    {
        $forestRange->update($request->all());

        return (new ForestRangeResource($forestRange))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(ForestRange $forestRange)
    {
        abort_if(Gate::denies('forest_range_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $forestRange->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
