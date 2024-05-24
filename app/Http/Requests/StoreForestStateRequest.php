<?php

namespace App\Http\Requests;

use App\Models\ForestState;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreForestStateRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('forest_state_create');
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
                'unique:forest_states',
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
