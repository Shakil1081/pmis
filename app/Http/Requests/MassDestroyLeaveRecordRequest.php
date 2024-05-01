<?php

namespace App\Http\Requests;

use App\Models\LeaveRecord;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyLeaveRecordRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('leave_record_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:leave_records,id',
        ];
    }
}
