<?php

namespace App\Http\Requests;

use App\Models\LanguageProficiency;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreLanguageProficiencyRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('language_proficiency_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
                'unique:language_proficiencies',
            ],
            'name_en' => [
                'string',
                'required',
                'unique:language_proficiencies',
            ],
        ];
    }
}
