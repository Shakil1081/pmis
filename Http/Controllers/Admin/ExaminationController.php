<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\StoreExaminationRequest;
use App\Http\Requests\UpdateExaminationRequest;
use App\Models\Examination;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class ExaminationController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('examination_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Examination::query()->select(sprintf('%s.*', (new Examination)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'examination_show';
                $editGate      = 'examination_edit';
                $deleteGate    = 'examination_delete';
                $crudRoutePart = 'examinations';

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

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.examinations.index');
    }

    public function create()
    {
        abort_if(Gate::denies('examination_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.examinations.create');
    }

    public function store(StoreExaminationRequest $request)
    {
        $examination = Examination::create($request->all());

        return redirect()->route('admin.examinations.index');
    }

    public function edit(Examination $examination)
    {
        abort_if(Gate::denies('examination_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.examinations.edit', compact('examination'));
    }

    public function update(UpdateExaminationRequest $request, Examination $examination)
    {
        $examination->update($request->all());

        return redirect()->route('admin.examinations.index');
    }

    public function show(Examination $examination)
    {
        abort_if(Gate::denies('examination_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.examinations.show', compact('examination'));
    }
}
