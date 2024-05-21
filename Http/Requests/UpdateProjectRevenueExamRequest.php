<?php

namespace App\Http\Requests;

use App\Models\ProjectRevenueExam;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateProjectRevenueExamRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('project_revenue_exam_edit');
    }

    public function rules()
    {
        return [
            'exam_id' => [
                'required',
                'integer',
            ],
            'exam_name_bn' => [
                'string',
                'required',
                'unique:project_revenue_exams,exam_name_bn,' . request()->route('project_revenue_exam')->id,
            ],
            'exam_name_en' => [
                'string',
                'required',
                'unique:project_revenue_exams,exam_name_en,' . request()->route('project_revenue_exam')->id,
            ],
        ];
    }
}
