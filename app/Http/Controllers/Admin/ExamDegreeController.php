<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyExamDegreeRequest;
use App\Http\Requests\StoreExamDegreeRequest;
use App\Http\Requests\UpdateExamDegreeRequest;
use App\Models\ExamDegree;
use App\Models\Examination;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class ExamDegreeController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('exam_degree_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = ExamDegree::with(['examination'])->select(sprintf('%s.*', (new ExamDegree)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'exam_degree_show';
                $editGate      = 'exam_degree_edit';
                $deleteGate    = 'exam_degree_delete';
                $crudRoutePart = 'exam-degrees';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->addColumn('examination_name_bn', function ($row) {
                return $row->examination ? $row->examination->name_bn : '';
            });

            $table->editColumn('name_bn', function ($row) {
                return $row->name_bn ? $row->name_bn : '';
            });
            $table->editColumn('name_en', function ($row) {
                return $row->name_en ? $row->name_en : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'examination']);

            return $table->make(true);
        }

        return view('admin.examDegrees.index');
    }

    public function create()
    {
        abort_if(Gate::denies('exam_degree_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $examinations = Examination::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.examDegrees.create', compact('examinations'));
    }

    public function store(StoreExamDegreeRequest $request)
    {
        $examDegree = ExamDegree::create($request->all());

        return redirect()->route('admin.exam-degrees.index');
    }

    public function edit(ExamDegree $examDegree)
    {
        abort_if(Gate::denies('exam_degree_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $examinations = Examination::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $examDegree->load('examination');

        return view('admin.examDegrees.edit', compact('examDegree', 'examinations'));
    }

    public function update(UpdateExamDegreeRequest $request, ExamDegree $examDegree)
    {
        $examDegree->update($request->all());

        return redirect()->route('admin.exam-degrees.index');
    }

    public function show(ExamDegree $examDegree)
    {
        abort_if(Gate::denies('exam_degree_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $examDegree->load('examination');

        return view('admin.examDegrees.show', compact('examDegree'));
    }

    public function destroy(ExamDegree $examDegree)
    {
        abort_if(Gate::denies('exam_degree_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $examDegree->delete();

        return back();
    }

    public function massDestroy(MassDestroyExamDegreeRequest $request)
    {
        $examDegrees = ExamDegree::find(request('ids'));

        foreach ($examDegrees as $examDegree) {
            $examDegree->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
