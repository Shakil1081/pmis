<?php

namespace App\Http\Requests;

use App\Models\ProjectRevenueExam;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreProjectRevenueExamRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('project_revenue_exam_create');
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
                'unique:project_revenue_exams',
            ],
            'exam_name_en' => [
                'string',
                'required',
                'unique:project_revenue_exams',
            ],
        ];
    }
}
