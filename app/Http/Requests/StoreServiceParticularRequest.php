<?php

namespace App\Http\Requests;

use App\Models\ServiceParticular;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreServiceParticularRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('service_particular_create');
    }

    public function rules()
    {
        return [
            'designation_id' => [
                'required',
                'integer',
            ],
            'designation_status' => [
                'string',
                'nullable',
            ],
            'office_organization_institute' => [
                'string',
                'nullable',
            ],
            'joining_date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'release_date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
        ];
    }
}
