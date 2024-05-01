<?php

namespace App\Http\Requests;

use App\Models\AcrMonitoring;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreAcrMonitoringRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('acr_monitoring_create');
    }

    public function rules()
    {
        return [
            'employee_id' => [
                'required',
                'integer',
            ],
            'year' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'reviewer' => [
                'string',
                'nullable',
            ],
            'review_date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
        ];
    }
}
