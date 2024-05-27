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
            'name_bn' => [
                'string',
                'required',
                'unique:forest_ranges,name_bn,' . request()->route('forest_range')->id,
            ],
            'forest_division_id' => [
                'required',
                'integer',
            ],
            'name_en' => [
                'string',
                'required',
                'unique:forest_ranges,name_en,' . request()->route('forest_range')->id,
            ],
        ];
    }
}
