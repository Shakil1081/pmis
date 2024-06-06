<?php

namespace App\Http\Requests;

use App\Models\CriminalProsecutionDerail;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyCriminalProsecutionDerailRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('criminal_prosecution_derail_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:criminal_prosecution_derails,id',
        ];
    }
}
