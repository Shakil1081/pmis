<?php

namespace App\Http\Requests;

use App\Models\OtherServiceJob;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyOtherServiceJobRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('other_service_job_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:other_service_jobs,id',
        ];
    }
}
