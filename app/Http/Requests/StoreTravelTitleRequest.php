<?php

namespace App\Http\Requests;

use App\Models\TravelTitle;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreTravelTitleRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('travel_title_create');
    }

    public function rules()
    {
        return [
            'name_bn' => [
                'string',
                'required',
                'unique:travel_titles',
            ],
            'name_en' => [
                'string',
                'required',
                'unique:travel_titles',
            ],
        ];
    }
}
