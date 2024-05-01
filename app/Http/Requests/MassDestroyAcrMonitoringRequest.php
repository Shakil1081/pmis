<?php

namespace App\Http\Requests;

use App\Models\AcrMonitoring;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyAcrMonitoringRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('acr_monitoring_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:acr_monitorings,id',
        ];
    }
}
