<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreJoininginfoRequest;
use App\Http\Requests\UpdateJoininginfoRequest;
use App\Http\Resources\Admin\JoininginfoResource;
use App\Models\Joininginfo;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class JoininginfoApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('joininginfo_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new JoininginfoResource(Joininginfo::all());
    }

    public function store(StoreJoininginfoRequest $request)
    {
        $joininginfo = Joininginfo::create($request->all());

        return (new JoininginfoResource($joininginfo))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Joininginfo $joininginfo)
    {
        abort_if(Gate::denies('joininginfo_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new JoininginfoResource($joininginfo);
    }

    public function update(UpdateJoininginfoRequest $request, Joininginfo $joininginfo)
    {
        $joininginfo->update($request->all());

        return (new JoininginfoResource($joininginfo))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Joininginfo $joininginfo)
    {
        abort_if(Gate::denies('joininginfo_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $joininginfo->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
