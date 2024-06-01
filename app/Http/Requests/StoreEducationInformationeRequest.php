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
            'exam_board_id' => [
                'integer',
                'nullable',
            ],
            'concentration_major_group' => [
                'string',
                'nullable',
            ],
            'school_university_name' => [
                'string',
                'required',
            ],
            'passing_year' => [
                'nullable',
                'integer',
            ],
            'achivement' => [
                'string',
                'nullable',
            ],
            'employee_id' => [
                'required',
                'integer',
            ],
            'exam_degree' => [
                'string',
                'nullable',
            ],
            'cgpa' => [
                'string',
                'nullable',
            ],
        ];
    }
}
