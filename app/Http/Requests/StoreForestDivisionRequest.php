<?php

namespace App\Http\Requests;

use App\Models\ForestDivision;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreForestDivisionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('forest_division_create');
    }

    public function rules()
    {
        return [
            'name_bn' => [
                'string',
                'required',
                'unique:forest_divisions',
            ],
            'name_en' => [
                'string',
                'required',
                'unique:forest_divisions',
            ],
        ];
    }
}
