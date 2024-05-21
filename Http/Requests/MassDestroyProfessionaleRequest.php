<?php

namespace App\Http\Requests;

use App\Models\Professionale;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyProfessionaleRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('professionale_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:professionales,id',
        ];
    }
}
