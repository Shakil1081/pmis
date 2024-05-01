<?php

namespace App\Http\Requests;

use App\Models\EmployeeList;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateEmployeeListRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('employee_list_edit');
    }

    public function rules()
    {
        return [
            'employeeid' => [
                'string',
                'required',
                'unique:employee_lists,employeeid,' . request()->route('employee_list')->id,
            ],
            'cadreid' => [
                'string',
                'nullable',
            ],
            'fullname_bn' => [
                'string',
                'min:2',
                'max:50',
                'required',
                'unique:employee_lists,fullname_bn,' . request()->route('employee_list')->id,
            ],
            'fullname_en' => [
                'string',
                'min:5',
                'max:50',
                'required',
            ],
            'fname_bn' => [
                'string',
                'min:1',
                'max:50',
                'required',
            ],
            'fname_en' => [
                'string',
                'nullable',
            ],
            'mname_bn' => [
                'string',
                'nullable',
            ],
            'mname_en' => [
                'string',
                'nullable',
            ],
            'date_of_birth' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'height' => [
                'string',
                'required',
            ],
            'special_identity' => [
                'string',
                'nullable',
            ],
            'nid' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'unique:employee_lists,nid,' . request()->route('employee_list')->id,
            ],
            'nid_upload' => [
                'required',
            ],
            'passport' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'mobile_number' => [
                'string',
                'min:11',
                'max:13',
                'nullable',
            ],
            'fjoining_date' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'project_name' => [
                'string',
                'nullable',
            ],
            'fjoiningofficename' => [
                'string',
                'nullable',
            ],
            'date_of_con_serviec' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'electric_signature' => [
                'required',
            ],
        ];
    }
}
