<?php

namespace App\Http\Requests;

use App\Models\TravelTitle;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyTravelTitleRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('travel_title_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:travel_titles,id',
        ];
    }
}
