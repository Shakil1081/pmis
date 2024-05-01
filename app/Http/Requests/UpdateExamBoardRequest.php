<?php

namespace App\Http\Requests;

use App\Models\ExamBoard;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateExamBoardRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('exam_board_edit');
    }

    public function rules()
    {
        return [
            'name_bn' => [
                'string',
                'required',
                'unique:exam_boards,name_bn,' . request()->route('exam_board')->id,
            ],
            'name_en' => [
                'string',
                'nullable',
            ],
            'description' => [
                'string',
                'nullable',
            ],
        ];
    }
}
