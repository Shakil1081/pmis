<?php

namespace App\Http\Requests;

use App\Models\ProjectRevenuelone;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreProjectRevenueloneRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('project_revenuelone_create');
    }

    public function rules()
    {
        return [
            'project_revenue_id' => [
                'required',
                'integer',
            ],
            'name_bn' => [
                'string',
                'required',
                'unique:project_revenuelones',
            ],
            'name_en' => [
                'string',
                'required',
                'unique:project_revenuelones',
            ],
        ];
    }
}
