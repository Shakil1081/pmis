<?php

namespace App\Http\Requests;

use App\Models\ForestDivision;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateForestDivisionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('forest_division_edit');
    }

    public function rules()
    {
        return [
            'name_bn' => [
                'string',
                'required',
                'unique:forest_divisions,name_bn,' . request()->route('forest_division')->id,
            ],
            'name_en' => [
                'string',
                'required',
                'unique:forest_divisions,name_en,' . request()->route('forest_division')->id,
            ],
        ];
    }
}
