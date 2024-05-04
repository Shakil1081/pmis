<?php

namespace App\Http\Requests;

use App\Models\Joininginfo;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyJoininginfoRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('joininginfo_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:joininginfos,id',
        ];
    }
}
