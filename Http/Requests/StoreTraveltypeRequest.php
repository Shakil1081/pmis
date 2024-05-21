<?php

namespace App\Http\Requests;

use App\Models\Traveltype;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreTraveltypeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('traveltype_create');
    }

    public function rules()
    {
        return [
            'name_bn' => [
                'string',
                'required',
            ],
            'name_en' => [
                'string',
                'required',
            ],
        ];
    }
}
