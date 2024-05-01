<?php

namespace App\Http\Requests;

use App\Models\SpouseInformatione;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreSpouseInformationeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('spouse_informatione_create');
    }

    public function rules()
    {
        return [
            'employee_id' => [
                'required',
                'integer',
            ],
            'name_bn' => [
                'string',
                'required',
            ],
            'name_en' => [
                'string',
                'nullable',
            ],
            'date_of_birth' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'occupation' => [
                'string',
                'nullable',
            ],
            'office_address' => [
                'string',
                'nullable',
            ],
            'phone_number' => [
                'string',
                'nullable',
            ],
        ];
    }
}
