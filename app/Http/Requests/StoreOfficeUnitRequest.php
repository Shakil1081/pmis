<?php

namespace App\Http\Requests;

use App\Models\OfficeUnit;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreOfficeUnitRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('office_unit_create');
    }

    public function rules()
    {
        return [
            'name_bn' => [
                'string',
                'required',
                'unique:office_units',
            ],
            'name_en' => [
                'string',
                'nullable',
            ],
            'code' => [
                'string',
                'nullable',
            ],
        ];
    }
}
