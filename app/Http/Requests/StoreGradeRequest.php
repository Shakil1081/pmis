<?php

namespace App\Http\Requests;

use App\Models\Grade;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreGradeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('grade_create');
    }

    public function rules()
    {
        return [
            'name_bn' => [
                'string',
                'required',
                'unique:grades',
            ],
            'name_en' => [
                'string',
                'required',
            ],
            'salary_range' => [
                'string',
                'nullable',
            ],
            'current_basic_pay' => [
                'string',
                'nullable',
            ],
            'basic_pay_scale' => [
                'string',
                'required',
            ],
        ];
    }
}