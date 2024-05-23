<?php

namespace App\Http\Requests;

use App\Models\ForestRange;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateForestRangeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('forest_range_edit');
    }

    public function rules()
    {
        return [
            'forest_state_id' => [
                'required',
                'integer',
            ],
            'forest_division_bbs_code' => [
                'string',
                'nullable',
            ],
            'status_id' => [
                'required',
                'integer',
            ],
            'forest_division_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
