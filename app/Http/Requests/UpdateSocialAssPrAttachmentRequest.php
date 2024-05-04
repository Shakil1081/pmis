<?php

namespace App\Http\Requests;

use App\Models\SocialAssPrAttachment;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateSocialAssPrAttachmentRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('social_ass_pr_attachment_edit');
    }

    public function rules()
    {
        return [
            'degree_membership_organization' => [
                'string',
                'required',
            ],
            'description' => [
                'string',
                'nullable',
            ],
            'certificate_achievement' => [
                'string',
                'nullable',
            ],
        ];
    }
}
