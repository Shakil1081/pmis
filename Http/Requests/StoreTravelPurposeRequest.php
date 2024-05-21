<?php

namespace App\Http\Requests;

use App\Models\TravelPurpose;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreTravelPurposeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('travel_purpose_create');
    }

    public function rules()
    {
        return [
            'name_bn' => [
                'string',
                'required',
                'unique:travel_purposes',
            ],
            'name_en' => [
                'string',
                'required',
            ],
        ];
    }
}
