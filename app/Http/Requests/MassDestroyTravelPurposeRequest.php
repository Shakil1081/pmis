<?php

namespace App\Http\Requests;

use App\Models\TravelPurpose;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyTravelPurposeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('travel_purpose_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:travel_purposes,id',
        ];
    }
}
