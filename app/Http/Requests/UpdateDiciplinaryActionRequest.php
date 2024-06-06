<?php

namespace App\Http\Requests;

use App\Models\DiciplinaryAction;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateDiciplinaryActionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('diciplinary_action_edit');
    }

    public function rules()
    {
        return [
            'govt_order_no' => [
                'string',
                'required',
                'unique:diciplinary_actions,govt_order_no,' . request()->route('diciplinary_action')->id,
            ],
            'govt_order_date' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'diciplinary_action_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
