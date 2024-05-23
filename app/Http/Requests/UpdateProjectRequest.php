<?php

namespace App\Http\Requests;

use App\Models\Project;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateProjectRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('project_edit');
    }

    public function rules()
    {
        return [
            'name_bn' => [
                'string',
                'required',
                'unique:projects,name_bn,' . request()->route('project')->id,
            ],
            'name_en' => [
                'string',
                'required',
                'unique:projects,name_en,' . request()->route('project')->id,
            ],
        ];
    }
}
