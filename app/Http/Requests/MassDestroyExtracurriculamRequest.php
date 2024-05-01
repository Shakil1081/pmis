<?php

namespace App\Http\Requests;

use App\Models\Extracurriculam;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyExtracurriculamRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('extracurriculam_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:extracurriculams,id',
        ];
    }
}
