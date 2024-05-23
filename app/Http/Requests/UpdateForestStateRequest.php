<?php

namespace App\Http\Requests;

use App\Models\ForestState;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateForestStateRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('forest_state_edit');
    }

    public function rules()
    {
        return [
            'name_bn' => [
                'string',
                'required',
            ],
            'name_en' => [
                'string',
                'required',
                'unique:forest_states,name_en,' . request()->route('forest_state')->id,
            ],
            'bbs_code' => [
                'string',
                'nullable',
            ],
            'status_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
