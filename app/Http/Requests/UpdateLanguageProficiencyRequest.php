<?php

namespace App\Http\Requests;

use App\Models\LanguageProficiency;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateLanguageProficiencyRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('language_proficiency_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
                'unique:language_proficiencies,name,' . request()->route('language_proficiency')->id,
            ],
            'name_en' => [
                'string',
                'required',
                'unique:language_proficiencies,name_en,' . request()->route('language_proficiency')->id,
            ],
        ];
    }
}
