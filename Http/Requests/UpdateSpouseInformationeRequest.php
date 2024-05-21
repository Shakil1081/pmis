<?php

namespace App\Http\Requests;

use App\Models\SpouseInformatione;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateSpouseInformationeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('spouse_informatione_edit');
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
