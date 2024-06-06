<?php

namespace App\Http\Requests;

use App\Models\CriminalProsecutione;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCriminalProsecutioneRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('criminal_prosecutione_create');
    }

    public function rules()
    {
        return [
            'judgement_type' => [
                'string',
                'required',
            ],
            'natureof_offence' => [
                'string',
                'nullable',
            ],
            'government_order_no' => [
                'string',
                'nullable',
            ],
            'employee_id' => [
                'required',
                'integer',
            ],
            // 'criminalprosecutione_id' => [
            //     'required',
            //     'integer',
            // ],
        ];
    }
}
