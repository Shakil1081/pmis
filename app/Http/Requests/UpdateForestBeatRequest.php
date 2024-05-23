<?php

namespace App\Http\Requests;

use App\Models\ForestBeat;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateForestBeatRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('forest_beat_edit');
    }

    public function rules()
    {
        return [
            'forest_range_id' => [
                'required',
                'integer',
            ],
            'name_bn' => [
                'string',
                'required',
                'unique:forest_beats,name_bn,' . request()->route('forest_beat')->id,
            ],
            'name_en' => [
                'string',
                'required',
                'unique:forest_beats,name_en,' . request()->route('forest_beat')->id,
            ],
        ];
    }
}
