<?php

namespace App\Http\Requests;

use App\Models\ForestBeat;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyForestBeatRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('forest_beat_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:forest_beats,id',
        ];
    }
}
