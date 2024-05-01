<?php

namespace App\Http\Requests;

use App\Models\LicenseType;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreLicenseTypeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('license_type_create');
    }

    public function rules()
    {
        return [
            'name_bn' => [
                'string',
                'required',
                'unique:license_types',
            ],
            'name_en' => [
                'string',
                'nullable',
            ],
        ];
    }
}
