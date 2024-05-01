<?php

namespace App\Http\Requests;

use App\Models\CriminalproDisciplinary;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCriminalproDisciplinaryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('criminalpro_disciplinary_create');
    }

    public function rules()
    {
        return [
            'criminalprosecutione_id' => [
                'required',
                'integer',
            ],
            'government_order_no' => [
                'string',
                'nullable',
            ],
            'court_name' => [
                'string',
                'nullable',
            ],
            'date_of_prosecution' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
        ];
    }
}
