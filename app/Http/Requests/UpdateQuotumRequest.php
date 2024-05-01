<?php

namespace App\Http\Requests;

use App\Models\Quotum;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateQuotumRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('quotum_edit');
    }

    public function rules()
    {
        return [
            'name_bn' => [
                'string',
                'required',
                'unique:quota,name_bn,' . request()->route('quotum')->id,
            ],
            'name_en' => [
                'string',
                'required',
            ],
            'remark' => [
                'string',
                'nullable',
            ],
        ];
    }
}
