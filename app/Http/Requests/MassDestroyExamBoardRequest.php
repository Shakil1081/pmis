<?php

namespace App\Http\Requests;

use App\Models\ExamBoard;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyExamBoardRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('exam_board_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:exam_boards,id',
        ];
    }
}
