<?php

namespace App\Http\Requests;

use App\Models\ResultGroup;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateResultGroupRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('result_group_edit');
    }

    public function rules()
    {
        return [
            'name_bn' => [
                'string',
                'required',
                'unique:result_groups,name_bn,' . request()->route('result_group')->id,
            ],
            'name_en' => [
                'string',
                'required',
                'unique:result_groups,name_en,' . request()->route('result_group')->id,
            ],
        ];
    }
}
