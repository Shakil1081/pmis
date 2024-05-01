<?php

namespace App\Http\Requests;

use App\Models\Division;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreDivisionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('division_create');
    }

    public function rules()
    {
        return [
            'country_id' => [
                'required',
                'integer',
            ],
            'name_bn' => [
                'string',
                'min:5',
                'max:50',
                'required',
                'unique:divisions',
            ],
            'name_en' => [
                'string',
                'min:5',
                'max:50',
                'required',
                'unique:divisions',
            ],
            'grocode' => [
                'string',
                'nullable',
            ],
        ];
    }
}
