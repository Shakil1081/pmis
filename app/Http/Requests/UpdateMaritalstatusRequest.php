<?php

namespace App\Http\Requests;

use App\Models\Maritalstatus;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateMaritalstatusRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('maritalstatus_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'value' => [
                'string',
                'nullable',
            ],
            'name_en' => [
                'string',
                'nullable',
            ],
        ];
    }
}
