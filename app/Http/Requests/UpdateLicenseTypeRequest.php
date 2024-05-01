<?php

namespace App\Http\Requests;

use App\Models\LicenseType;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateLicenseTypeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('license_type_edit');
    }

    public function rules()
    {
        return [
            'name_bn' => [
                'string',
                'required',
                'unique:license_types,name_bn,' . request()->route('license_type')->id,
            ],
            'name_en' => [
                'string',
                'nullable',
            ],
        ];
    }
}
