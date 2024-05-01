<?php

namespace App\Http\Requests;

use App\Models\Designation;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateDesignationRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('designation_edit');
    }

    public function rules()
    {
        return [
            'name_bn' => [
                'string',
                'required',
                'unique:designations,name_bn,' . request()->route('designation')->id,
            ],
            'name_en' => [
                'string',
                'nullable',
            ],
            'value' => [
                'string',
                'required',
                'unique:designations,value,' . request()->route('designation')->id,
            ],
        ];
    }
}
