<?php

namespace App\Http\Requests;

use App\Models\Child;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreChildRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('child_create');
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
            'gender_id' => [
                'required',
                'integer',
            ],
            'nid_number' => [
                'string',
                'nullable',
            ],
            'passport_number' => [
                'string',
                'nullable',
            ],
            'date_of_birth' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
        ];
    }
}
