<?php

namespace App\Http\Requests;

use App\Models\LeaveCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateLeaveCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('leave_category_edit');
    }

    public function rules()
    {
        return [
            'name_bn' => [
                'string',
                'required',
                'unique:leave_categories,name_bn,' . request()->route('leave_category')->id,
            ],
            'name_en' => [
                'string',
                'required',
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
