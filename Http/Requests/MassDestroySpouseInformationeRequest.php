<?php

namespace App\Http\Requests;

use App\Models\SpouseInformatione;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroySpouseInformationeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('spouse_informatione_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:spouse_informationes,id',
        ];
    }
}
