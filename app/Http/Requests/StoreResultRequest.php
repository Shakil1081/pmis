<?php

namespace App\Http\Requests;

use App\Models\Result;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreResultRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('result_create');
    }

    public function rules()
    {
        return [
            'name_bn' => [
                'string',
                'required',
                'unique:results',
            ],
            'name_en' => [
                'string',
                'required',
                'unique:results',
            ],
        ];
    }
}
