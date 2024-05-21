<?php

namespace App\Http\Requests;

use App\Models\FreedomFighteRelation;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateFreedomFighteRelationRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('freedom_fighte_relation_edit');
    }

    public function rules()
    {
        return [
            'name_bn' => [
                'string',
                'required',
                'unique:freedom_fighte_relations,name_bn,' . request()->route('freedom_fighte_relation')->id,
            ],
            'name_en' => [
                'string',
                'required',
                'unique:freedom_fighte_relations,name_en,' . request()->route('freedom_fighte_relation')->id,
            ],
        ];
    }
}
