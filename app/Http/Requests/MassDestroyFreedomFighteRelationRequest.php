<?php

namespace App\Http\Requests;

use App\Models\FreedomFighteRelation;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyFreedomFighteRelationRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('freedom_fighte_relation_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:freedom_fighte_relations,id',
        ];
    }
}
