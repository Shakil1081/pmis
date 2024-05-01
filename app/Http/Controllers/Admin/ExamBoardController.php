<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyExamBoardRequest;
use App\Http\Requests\StoreExamBoardRequest;
use App\Http\Requests\UpdateExamBoardRequest;
use App\Models\ExamBoard;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class ExamBoardController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('exam_board_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = ExamBoard::query()->select(sprintf('%s.*', (new ExamBoard)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'exam_board_show';
                $editGate      = 'exam_board_edit';
                $deleteGate    = 'exam_board_delete';
                $crudRoutePart = 'exam-boards';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : '';
            });
            $table->editColumn('name_bn', function ($row) {
                return $row->name_bn ? $row->name_bn : '';
            });
            $table->editColumn('name_en', function ($row) {
                return $row->name_en ? $row->name_en : '';
            });
            $table->editColumn('description', function ($row) {
                return $row->description ? $row->description : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.examBoards.index');
    }

    public function create()
    {
        abort_if(Gate::denies('exam_board_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.examBoards.create');
    }

    public function store(StoreExamBoardRequest $request)
    {
        $examBoard = ExamBoard::create($request->all());

        return redirect()->route('admin.exam-boards.index');
    }

    public function edit(ExamBoard $examBoard)
    {
        abort_if(Gate::denies('exam_board_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.examBoards.edit', compact('examBoard'));
    }

    public function update(UpdateExamBoardRequest $request, ExamBoard $examBoard)
    {
        $examBoard->update($request->all());

        return redirect()->route('admin.exam-boards.index');
    }

    public function show(ExamBoard $examBoard)
    {
        abort_if(Gate::denies('exam_board_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.examBoards.show', compact('examBoard'));
    }

    public function destroy(ExamBoard $examBoard)
    {
        abort_if(Gate::denies('exam_board_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $examBoard->delete();

        return back();
    }

    public function massDestroy(MassDestroyExamBoardRequest $request)
    {
        $examBoards = ExamBoard::find(request('ids'));

        foreach ($examBoards as $examBoard) {
            $examBoard->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
