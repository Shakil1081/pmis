<?php

namespace App\Http\Requests;

use App\Models\Year;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreYearRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('year_create');
    }

    public function rules()
    {
        return [
            'year' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'unique:years,year',
            ],
        ];
    }
}
