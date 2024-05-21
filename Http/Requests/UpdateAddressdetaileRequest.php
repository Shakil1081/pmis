<?php

namespace App\Http\Requests;

use App\Models\Addressdetaile;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateAddressdetaileRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('addressdetaile_edit');
    }

    public function rules()
    {
        return [
            'employee_id' => [
                'required',
                'integer',
            ],
            'address_type' => [
                'required',
            ],
            'flat_house' => [
                'string',
                'required',
                'unique:addressdetailes,flat_house,' . request()->route('addressdetaile')->id,
            ],
            'post_office' => [
                'string',
                'nullable',
            ],
            'post_code' => [
                'string',
                'required',
            ],
            'thana_upazila_id' => [
                'required',
                'integer',
            ],
            'phone_number' => [
                'string',
                'nullable',
            ],
        ];
    }
}
