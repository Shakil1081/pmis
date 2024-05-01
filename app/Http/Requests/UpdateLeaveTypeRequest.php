<?php

namespace App\Http\Requests;

use App\Models\LeaveType;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateLeaveTypeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('leave_type_edit');
    }

    public function rules()
    {
        return [
            'name_bn' => [
                'string',
                'required',
                'unique:leave_types,name_bn,' . request()->route('leave_type')->id,
            ],
            'name_en' => [
                'string',
                'nullable',
            ],
            'value' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'unique:leave_types,value,' . request()->route('leave_type')->id,
            ],
        ];
    }
}
