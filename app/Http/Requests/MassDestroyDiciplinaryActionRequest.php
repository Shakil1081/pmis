<?php

namespace App\Http\Requests;

use App\Models\DiciplinaryAction;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyDiciplinaryActionRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('diciplinary_action_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:diciplinary_actions,id',
        ];
    }
}
