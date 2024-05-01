<?php

namespace App\Http\Requests;

use App\Models\LeaveCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreLeaveCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('leave_category_create');
    }

    public function rules()
    {
        return [
            'name_bn' => [
                'string',
                'required',
                'unique:leave_categories',
            ],
            'name_en' => [
                'string',
                'nullable',
            ],
            'value' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
