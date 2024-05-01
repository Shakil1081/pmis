<?php

namespace App\Http\Requests;

use App\Models\CriminalProsecutione;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyCriminalProsecutioneRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('criminal_prosecutione_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:criminal_prosecutiones,id',
        ];
    }
}
