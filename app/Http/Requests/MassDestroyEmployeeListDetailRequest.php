<?php

namespace App\Http\Requests;

use App\Models\EmployeeListDetail;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyEmployeeListDetailRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('employee_list_detail_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:employee_list_details,id',
        ];
    }
}
