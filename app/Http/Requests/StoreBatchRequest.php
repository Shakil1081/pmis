<?php

namespace App\Http\Requests;

use App\Models\Batch;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreBatchRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('batch_create');
    }

    public function rules()
    {
        return [
            'batch_bn' => [
                'string',
                'required',
                'unique:batches',
            ],
            'batch_en' => [
                'string',
                'required',
                'unique:batches',
            ],
        ];
    }
}
