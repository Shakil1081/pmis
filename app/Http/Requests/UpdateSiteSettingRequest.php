<?php

namespace App\Http\Requests;

use App\Models\SiteSetting;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateSiteSettingRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('site_setting_edit');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
                'unique:site_settings,title,' . request()->route('site_setting')->id,
            ],
            'site_logo' => [
                'required',
            ],
            'copyright' => [
                'string',
                'required',
            ],
            'helpline' => [
                'string',
                'nullable',
            ],
            'title_en' => [
                'string',
                'required',
            ],
            'favicon' => [
                'required',
            ],
        ];
    }
}
