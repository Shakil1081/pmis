<?php

namespace App\Http\Requests;

use App\Models\ForestState;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyForestStateRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('forest_state_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:forest_states,id',
        ];
    }
}
