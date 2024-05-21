<?php

namespace App\Http\Requests;

use App\Models\LanguageList;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreLanguageListRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('language_list_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
                'unique:language_lists',
            ],
        ];
    }
}
