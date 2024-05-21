<?php

namespace App\Http\Requests;

use App\Models\Joininginfo;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateJoininginfoRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('joininginfo_edit');
    }

    public function rules()
    {
        return [
            'project_revenue_bn' => [
                'string',
                'required',
                'unique:joininginfos,project_revenue_bn,' . request()->route('joininginfo')->id,
            ],
            'project_revenue_en' => [
                'string',
                'nullable',
            ],
        ];
    }
}
