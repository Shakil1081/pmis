<?php

namespace App\Http\Requests;

use App\Models\Upazila;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateUpazilaRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('upazila_edit');
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
                'unique:upazilas,name_bn,' . request()->route('upazila')->id,
            ],
            'name_en' => [
                'string',
                'required',
                'unique:upazilas,name_en,' . request()->route('upazila')->id,
            ],
            'grocode' => [
                'string',
                'nullable',
            ],
        ];
    }
}
