<?php

namespace App\Http\Requests;

use App\Models\CriminalproDisciplinary;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyCriminalproDisciplinaryRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('criminalpro_disciplinary_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:criminalpro_disciplinaries,id',
        ];
    }
}
