<?php

namespace App\Http\Requests;

use App\Models\CriminalProsecutionDerail;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCriminalProsecutionDerailRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('criminal_prosecution_derail_create');
    }

    public function rules()
    {
        return [
            'criminal_prosecution_id' => [
                'required',
                'integer',
            ],
            'govt_order_no' => [
                'string',
                'nullable',
            ],
            'govt_order_date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
        ];
    }
}
