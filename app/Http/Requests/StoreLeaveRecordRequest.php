<?php

namespace App\Http\Requests;

use App\Models\LeaveRecord;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreLeaveRecordRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('leave_record_create');
    }

    public function rules()
    {
        return [
            'start_date' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'end_date' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
        ];
    }
}
