<?php

namespace App\Http\Requests;

use App\Models\Country;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCountryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('country_edit');
    }

    public function rules()
    {
        return [
            'name_bn' => [
                'string',
                'required',
                'unique:countries,name_bn,' . request()->route('country')->id,
            ],
            'name_en' => [
                'string',
                'required',
            ],
            'grocode' => [
                'string',
                'nullable',
            ],
        ];
    }
}
