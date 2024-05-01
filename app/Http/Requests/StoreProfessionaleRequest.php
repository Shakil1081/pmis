<?php

namespace App\Http\Requests;

use App\Models\Professionale;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreProfessionaleRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('professionale_create');
    }

    public function rules()
    {
        return [
            'employee_id' => [
                'required',
                'integer',
            ],
            'qualification_title' => [
                'string',
                'required',
            ],
            'institution' => [
                'string',
                'required',
            ],
            'from_date' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'to_date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'passing_year' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
