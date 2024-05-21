<?php

namespace App\Http\Requests;

use App\Models\TrainingType;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateTrainingTypeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('training_type_edit');
    }

    public function rules()
    {
        return [
            'name_bn' => [
                'string',
                'required',
                'unique:training_types,name_bn,' . request()->route('training_type')->id,
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
