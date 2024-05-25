<?php

namespace App\Http\Requests;

use App\Models\Result;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateResultRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('result_edit');
    }

    public function rules()
    {
        return [
            'name_bn' => [
                'string',
                'required',
                'unique:results,name_bn,' . request()->route('result')->id,
            ],
            'name_en' => [
                'string',
                'required',
                'unique:results,name_en,' . request()->route('result')->id,
            ],
        ];
    }
}
