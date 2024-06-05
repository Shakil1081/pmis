<?php

namespace App\Http\Requests;

use App\Models\TravelTitle;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateTravelTitleRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('travel_title_edit');
    }

    public function rules()
    {
        return [
            'name_bn' => [
                'string',
                'required',
                'unique:travel_titles,name_bn,' . request()->route('travel_title')->id,
            ],
            'name_en' => [
                'string',
                'required',
                'unique:travel_titles,name_en,' . request()->route('travel_title')->id,
            ],
        ];
    }
}
