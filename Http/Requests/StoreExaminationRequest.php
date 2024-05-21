<?php

namespace App\Http\Requests;

use App\Models\Examination;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreExaminationRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('examination_create');
    }

    public function rules()
    {
        return [
            'name_bn' => [
                'string',
                'required',
                'unique:examinations',
            ],
            'name_en' => [
                'string',
                'nullable',
            ],
        ];
    }
}
