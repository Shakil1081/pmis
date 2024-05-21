<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyProfessionaleRequest;
use App\Http\Requests\StoreProfessionaleRequest;
use App\Http\Requests\UpdateProfessionaleRequest;
use App\Models\EmployeeList;
use App\Models\Professionale;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class ProfessionaleController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('professionale_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Professionale::with(['employee'])->select(sprintf('%s.*', (new Professionale)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'professionale_show';
                $editGate      = 'professionale_edit';
                $deleteGate    = 'professionale_delete';
                $crudRoutePart = 'professionales';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->addColumn('employee_employeeid', function ($row) {
                return $row->employee ? $row->employee->employeeid : '';
            });

            $table->editColumn('employee.fullname_bn', function ($row) {
                return $row->employee ? (is_string($row->employee) ? $row->employee : $row->employee->fullname_bn) : '';
            });
            $table->editColumn('qualification_title', function ($row) {
                return $row->qualification_title ? $row->qualification_title : '';
            });
            $table->editColumn('institution', function ($row) {
                return $row->institution ? $row->institution : '';
            });

            $table->editColumn('passing_year', function ($row) {
                return $row->passing_year ? $row->passing_year : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'employee']);

            return $table->make(true);
        }

        return view('admin.professionales.index');
    }

    public function create()
    {
        abort_if(Gate::denies('professionale_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = EmployeeList::pluck('employeeid', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.professionales.create', compact('employees'));
    }

    public function store(StoreProfessionaleRequest $request)
    {
        $professionale = Professionale::create($request->all());
        return redirect()->back()->with('status', 'Action successful!');
        //return redirect()->route('admin.professionales.index');
    }

    public function edit(Professionale $professionale)
    {
        abort_if(Gate::denies('professionale_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = EmployeeList::pluck('employeeid', 'id')->prepend(trans('global.pleaseSelect'), '');

        $professionale->load('employee');

        return view('admin.professionales.edit', compact('employees', 'professionale'));
    }

    public function update(UpdateProfessionaleRequest $request, Professionale $professionale)
    {
        $professionale->update($request->all());

        return redirect()->route('admin.professionales.index');
    }

    public function show(Professionale $professionale)
    {
        abort_if(Gate::denies('professionale_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $professionale->load('employee');

        return view('admin.professionales.show', compact('professionale'));
    }

    public function destroy(Professionale $professionale)
    {
        abort_if(Gate::denies('professionale_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $professionale->delete();

        return back();
    }

    public function massDestroy(MassDestroyProfessionaleRequest $request)
    {
        $professionales = Professionale::find(request('ids'));

        foreach ($professionales as $professionale) {
            $professionale->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
