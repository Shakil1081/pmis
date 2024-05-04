<?php

namespace App\Http\Requests;

use App\Models\SocialAssPrAttachment;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroySocialAssPrAttachmentRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('social_ass_pr_attachment_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:social_ass_pr_attachments,id',
        ];
    }
}
