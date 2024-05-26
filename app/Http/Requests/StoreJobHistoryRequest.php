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
            'level_1' => [
                'string',
                'nullable',
            ],
            'joining_date' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'release_date' => [
                'required',
                'date_format:' . config('panel.date_format'),
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
            'institutename' => [
                'string',
                'nullable',
            ],
            'academy_type' => [
                'string',
                'nullable',
            ],
            'acadaylocation' => [
                'string',
                'nullable',
            ],
            'posting_in_circle' => [
                'string',
                'nullable',
            ],
            'postingindivision' => [
                'string',
                'nullable',
            ],
            'posting_in_range' => [
                'string',
                'nullable',
            ],
            'office_unit_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
