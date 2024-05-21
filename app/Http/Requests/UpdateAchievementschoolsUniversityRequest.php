<?php

namespace App\Http\Requests;

use App\Models\AchievementschoolsUniversity;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateAchievementschoolsUniversityRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('achievementschools_university_edit');
    }

    public function rules()
    {
        return [
            'name_bn' => [
                'string',
                'required',
                'unique:achievementschools_universities,name_bn,' . request()->route('achievementschools_university')->id,
            ],
            'name_en' => [
                'string',
                'required',
                'unique:achievementschools_universities,name_en,' . request()->route('achievementschools_university')->id,
            ],
        ];
    }
}
