<?php

namespace App\Http\Requests;

use App\Models\ExamDegree;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateExamDegreeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('exam_degree_edit');
    }

    public function rules()
    {
        return [
            'examination_id' => [
                'required',
                'integer',
            ],
            'name_bn' => [
                'string',
                'required',
            ],
            'name_en' => [
                'string',
                'required',
            ],
        ];
    }
}
