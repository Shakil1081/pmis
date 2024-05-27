<?php

namespace App\Http\Requests;

use App\Models\LanguageList;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateLanguageListRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('language_list_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
                'unique:language_lists,name,' . request()->route('language_list')->id,
            ],
            'nmae_en' => [
                'string',
                'required',
                'unique:language_lists,nmae_en,' . request()->route('language_list')->id,
            ],
        ];
    }
}
