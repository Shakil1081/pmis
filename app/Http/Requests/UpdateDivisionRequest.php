<?php

namespace App\Http\Requests;

use App\Models\Division;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateDivisionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('division_edit');
    }

    public function rules()
    {
        return [
            'name_bn' => [
                'string',
                'min:5',
                'max:50',
                'required',
                'unique:divisions,name_bn,' . request()->route('division')->id,
            ],
            'name_en' => [
                'string',
                'min:5',
                'max:50',
                'required',
                'unique:divisions,name_en,' . request()->route('division')->id,
            ],
            'geocode' => [
                'string',
                'min:1',
                'max:10',
                'nullable',
            ],
        ];
    }
}
