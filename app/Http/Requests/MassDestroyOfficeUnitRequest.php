<?php

namespace App\Http\Requests;

use App\Models\OfficeUnit;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyOfficeUnitRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('office_unit_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:office_units,id',
        ];
    }
}
