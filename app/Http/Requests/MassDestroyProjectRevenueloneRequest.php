<?php

namespace App\Http\Requests;

use App\Models\ProjectRevenuelone;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyProjectRevenueloneRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('project_revenuelone_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:project_revenuelones,id',
        ];
    }
}
