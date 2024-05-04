<?php

namespace App\Http\Requests;

use App\Models\OtherServiceJob;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateOtherServiceJobRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('other_service_job_edit');
    }

    public function rules()
    {
        return [
            'employer' => [
                'string',
                'nullable',
            ],
            'service_type' => [
                'string',
                'nullable',
            ],
            'position' => [
                'string',
                'nullable',
            ],
            'from' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'to' => [
                'string',
                'nullable',
            ],
            'employee_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
