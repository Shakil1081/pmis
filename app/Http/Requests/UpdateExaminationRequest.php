<?php

namespace App\Http\Requests;

use App\Models\Examination;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateExaminationRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('examination_edit');
    }

    public function rules()
    {
        return [
            'name_bn' => [
                'string',
                'required',
                'unique:examinations,name_bn,' . request()->route('examination')->id,
            ],
            'name_en' => [
                'string',
                'nullable',
            ],
        ];
    }
}
