<?php

namespace App\Http\Requests;

use App\Models\Joininginfo;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreJoininginfoRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('joininginfo_create');
    }

    public function rules()
    {
        return [
            'project_revenue_bn' => [
                'string',
                'required',
                'unique:joininginfos',
            ],
            'project_revenue_en' => [
                'string',
                'nullable',
            ],
        ];
    }
}
