<?php

namespace App\Http\Requests;

use App\Models\ProjectRevenueExam;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyProjectRevenueExamRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('project_revenue_exam_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:project_revenue_exams,id',
        ];
    }
}
