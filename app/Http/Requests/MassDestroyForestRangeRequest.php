<?php

namespace App\Http\Requests;

use App\Models\ForestRange;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyForestRangeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('forest_range_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:forest_ranges,id',
        ];
    }
}
