<?php

namespace App\Http\Requests;

use App\Models\TravelPurpose;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateTravelPurposeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('travel_purpose_edit');
    }

    public function rules()
    {
        return [
            'name_bn' => [
                'string',
                'required',
                'unique:travel_purposes,name_bn,' . request()->route('travel_purpose')->id,
            ],
            'name_en' => [
                'string',
                'required',
            ],
        ];
    }
}
