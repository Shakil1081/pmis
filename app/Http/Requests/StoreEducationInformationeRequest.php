<?php

namespace App\Http\Requests;

use App\Models\EducationInformatione;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreEducationInformationeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('education_informatione_create');
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
                'unique:education_informationes',
            ],
            'achievement_types_id' => [
                'required',
                'integer',
            ],
            'achivement' => [
                'string',
                'nullable',
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
