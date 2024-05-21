<?php

namespace App\Http\Requests;

use App\Models\LicenseType;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyLicenseTypeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('license_type_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:license_types,id',
        ];
    }
}
