<?php

namespace App\Http\Requests;

use App\Models\AchievementschoolsUniversity;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyAchievementschoolsUniversityRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('achievementschools_university_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:achievementschools_universities,id',
        ];
    }
}
