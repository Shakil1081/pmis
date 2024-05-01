<?php

namespace App\Http\Requests;

use App\Models\District;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateDistrictRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('district_edit');
    }

    public function rules()
    {
        return [
            'divisions_id' => [
                'required',
                'integer',
            ],
            'name_bn' => [
                'string',
                'min:5',
                'max:50',
                'required',
                'unique:districts,name_bn,' . request()->route('district')->id,
            ],
            'name_en' => [
                'string',
                'required',
                'unique:districts,name_en,' . request()->route('district')->id,
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
