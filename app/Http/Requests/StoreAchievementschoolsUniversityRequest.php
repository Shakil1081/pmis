<?php

namespace App\Http\Requests;

use App\Models\AchievementschoolsUniversity;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreAchievementschoolsUniversityRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('achievementschools_university_create');
    }

    public function rules()
    {
        return [
            'name_bn' => [
                'string',
                'required',
                'unique:achievementschools_universities',
            ],
            'name_en' => [
                'string',
                'required',
                'unique:achievementschools_universities',
            ],
        ];
    }
}
