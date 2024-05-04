<?php

namespace App\Http\Requests;

use App\Models\ProjectRevenuelone;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateProjectRevenueloneRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('project_revenuelone_edit');
    }

    public function rules()
    {
        return [
            'project_revenue_id' => [
                'required',
                'integer',
            ],
            'name_bn' => [
                'string',
                'required',
                'unique:project_revenuelones,name_bn,' . request()->route('project_revenuelone')->id,
            ],
            'name_en' => [
                'string',
                'required',
                'unique:project_revenuelones,name_en,' . request()->route('project_revenuelone')->id,
            ],
        ];
    }
}
