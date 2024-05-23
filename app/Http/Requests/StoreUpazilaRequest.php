<?php

namespace App\Http\Requests;

use App\Models\Upazila;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreUpazilaRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('upazila_create');
    }

    public function rules()
    {
        return [
            'district_id' => [
                'required',
                'integer',
            ],
            'name_bn' => [
                'string',
                'required',
                'unique:upazilas',
            ],
            'name_en' => [
                'string',
                'required',
                'unique:upazilas',
            ],
            'grocode' => [
                'string',
                'nullable',
            ],
            'forest_state_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
