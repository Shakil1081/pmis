<?php

namespace App\Http\Requests;

use App\Models\CriminalProsecutione;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCriminalProsecutioneRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('criminal_prosecutione_edit');
    }

    public function rules()
    {
        return [
            'natureof_offence' => [
                'string',
                'nullable',
            ],
            'government_order_no' => [
                'string',
                'nullable',
            ],
            'government_order_date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'court_name' => [
                'string',
                'nullable',
            ],
        ];
    }
}
