<?php

namespace App\Http\Requests;

use App\Models\EducationInformatione;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateEducationInformationeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('education_informatione_edit');
    }

    public function rules()
    {
        return [
            'name_of_exam_id' => [
                'required',
                'integer',
            ],
            'school_university_name' => [
                'string',
                'required',
                'unique:education_informationes,school_university_name,' . request()->route('education_informatione')->id,
            ],
            'passing_year' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'catificarte' => [
                'required',
            ],
            'employee_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
