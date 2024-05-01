<?php

namespace App\Http\Requests;

use App\Models\JobType;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateJobTypeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('job_type_edit');
    }

    public function rules()
    {
        return [
            'name_bn' => [
                'string',
                'required',
                'unique:job_types,name_bn,' . request()->route('job_type')->id,
            ],
            'name_en' => [
                'string',
                'nullable',
            ],
        ];
    }
}
