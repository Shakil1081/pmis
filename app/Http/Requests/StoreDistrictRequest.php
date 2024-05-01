<?php

namespace App\Http\Requests;

use App\Models\District;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreDistrictRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('district_create');
    }

    public function rules()
    {
        return [
            'name_bn' => [
                'string',
                'min:5',
                'max:50',
                'required',
                'unique:districts',
            ],
            'name_en' => [
                'string',
                'min:5',
                'max:10',
                'required',
                'unique:districts',
            ],
            'grocode' => [
                'string',
                'min:1',
                'max:10',
                'nullable',
            ],
        ];
    }
}
