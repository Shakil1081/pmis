<?php

namespace App\Http\Requests;

use App\Models\Extracurriculam;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreExtracurriculamRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('extracurriculam_create');
    }

    public function rules()
    {
        return [
            'activity_name' => [
                'string',
                'required',
            ],
            'organization' => [
                'string',
                'nullable',
            ],
            'position' => [
                'string',
                'nullable',
            ],
            'start_date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'end_date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
        ];
    }
}
