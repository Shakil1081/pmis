<?php

namespace App\Http\Requests;

use App\Models\LeaveType;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreLeaveTypeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('leave_type_create');
    }

    public function rules()
    {
        return [
            'name_bn' => [
                'string',
                'required',
                'unique:leave_types',
            ],
            'name_en' => [
                'string',
                'required',
            ],
            'value' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
