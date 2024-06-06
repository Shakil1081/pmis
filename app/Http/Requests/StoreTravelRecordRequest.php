<?php

namespace App\Http\Requests;

use App\Models\TravelRecord;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreTravelRecordRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('travel_record_create');
    }

    public function rules()
    {
        return [
            'employee_id' => [
                'required',
                'integer',
            ],
            'start_date' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'end_date' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'title_id' => [
                'required',
            ],
        ];
    }
}
