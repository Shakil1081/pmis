<?php

namespace App\Http\Requests;

use App\Models\EmergenceContacte;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyEmergenceContacteRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('emergence_contacte_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:emergence_contactes,id',
        ];
    }
}
