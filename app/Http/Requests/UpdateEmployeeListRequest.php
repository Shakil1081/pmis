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
            // 'employeeid' => [
            //     'string',
            //     'required',
            //     'unique:employee_lists,employeeid,' . request()->route('employee_list')->id,
            // ],
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
                'min:5',
                'max:50',
                'required',
            ],
            'mname_bn' => [
                'string',
                'min:2',
                'max:50',
                'required',
            ],
            'mname_en' => [
                'string',
                'required',
            ],
            'date_of_birth' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'prl_date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'height' => [
                'string',
                'nullable',
            ],
            'special_identity' => [
                'string',
                'nullable',
            ],
            'home_district_id' => [
                'required',
                'integer',
            ],
            'marital_statu_id' => [
                'required',
                'integer',
            ],
            'gender_id' => [
                'required',
                'integer',
            ],
            'religion_id' => [
                'required',
                'integer',
            ],
            'blood_group_id' => [
                'required',
                'integer',
            ],
            'passport' => [
                'string',
                'nullable',
            ],
            'mobile_number' => [
                'string',
                'min:11',
                'max:15',
                'required',
            ],
            'fjoining_date' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'first_joining_office_name' => [
                'string',
                'nullable',
            ],
            'first_joining_g_o_date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'first_joining_memo_no' => [
                'string',
                'nullable',
            ],
            'date_of_gazette' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'date_of_regularization' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'regularization_issue_date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'date_of_con_serviec' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'license_number' => [
                'string',
                'nullable',
            ],
            'approve' => [
                'string',
                'nullable',
            ],
            'approveby' => [
                'string',
                'nullable',
            ],
            'nid' => [
                'numeric',
            ],
            'class' => [
                'required',
            'in:1st,2nd,3rd,4th']
        ];
    }
}
