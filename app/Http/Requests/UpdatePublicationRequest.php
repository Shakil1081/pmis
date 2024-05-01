<?php

namespace App\Http\Requests;

use App\Models\Publication;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdatePublicationRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('publication_edit');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
            ],
            'publication_type' => [
                'required',
            ],
            'publication_media' => [
                'string',
                'nullable',
            ],
            'publication_date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'publication_link' => [
                'string',
                'nullable',
            ],
        ];
    }
}
