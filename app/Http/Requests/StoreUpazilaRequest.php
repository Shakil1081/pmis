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
        ];
    }
}
