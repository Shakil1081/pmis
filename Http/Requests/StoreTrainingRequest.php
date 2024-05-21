<?php

namespace App\Http\Requests;

use App\Models\Training;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreTrainingRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('training_create');
    }

    public function rules()
    {
        return [
            'employee_id' => [
                'required',
                'integer',
            ],
            'training_type_id' => [
                'required',
                'integer',
            ],
            'training_name' => [
                'string',
                'nullable',
            ],
            'institute_name' => [
                'string',
                'nullable',
            ],
            'start_date' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'end_date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'grade' => [
                'string',
                'nullable',
            ],
            'position' => [
                'string',
                'nullable',
            ],
            'location' => [
                'string',
                'nullable',
            ],
        ];
    }
}
