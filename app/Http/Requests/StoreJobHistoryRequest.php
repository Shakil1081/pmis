<?php

namespace App\Http\Requests;

use App\Models\JobHistory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreJobHistoryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('job_history_create');
    }

    public function rules()
    {
        return [
            'institute_name' => [
                'string',
                'required',
            ],
            'joining_date' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'release_date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'level_1' => [
                'string',
                'nullable',
            ],
            'level_2' => [
                'string',
                'nullable',
            ],
            'level_3' => [
                'string',
                'nullable',
            ],
            'level_4' => [
                'string',
                'nullable',
            ],
            'level_5' => [
                'string',
                'nullable',
            ],
            'grade_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
