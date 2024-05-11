<?php

namespace App\Http\Requests;

use App\Models\EmployeeListDetail;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateEmployeeListDetailRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('employee_list_detail_edit');
    }

    public function rules()
    {
        return [
            'general_information_id' => [
                'required',
                'integer',
            ],
            'education_informatione' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'professionale' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'addressdetailes' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'emergence_contactes' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'spouse_informatione' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'children' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'job_historie' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'employee_promotion' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'leave_records' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'service_particular' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'trainings' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'travel_records' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'foreign_travel_personals' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'social_ass_pr_attachments' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'publications' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'awards' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'other_service_jobs' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'languages' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'criminal_prosecutiones' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'criminalpro_disciplinaries' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'acr_monitorings' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
