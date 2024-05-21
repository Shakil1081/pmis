<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyEmergenceContacteRequest;
use App\Http\Requests\StoreEmergenceContacteRequest;
use App\Http\Requests\UpdateEmergenceContacteRequest;
use App\Models\EmergenceContacte;
use App\Models\EmployeeList;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class EmergenceContacteController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('emergence_contacte_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = EmergenceContacte::with(['employee'])->select(sprintf('%s.*', (new EmergenceContacte)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'emergence_contacte_show';
                $editGate      = 'emergence_contacte_edit';
                $deleteGate    = 'emergence_contacte_delete';
                $crudRoutePart = 'emergence-contactes';

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
            $table->editColumn('contact_person_name', function ($row) {
                return $row->contact_person_name ? $row->contact_person_name : '';
            });
            $table->editColumn('contact_person_relation', function ($row) {
                return $row->contact_person_relation ? $row->contact_person_relation : '';
            });
            $table->editColumn('address', function ($row) {
                return $row->address ? $row->address : '';
            });
            $table->editColumn('contact_person_number', function ($row) {
                return $row->contact_person_number ? $row->contact_person_number : '';
            });
            $table->addColumn('employee_employeeid', function ($row) {
                return $row->employee ? $row->employee->employeeid : '';
            });

            $table->editColumn('employee.fullname_bn', function ($row) {
                return $row->employee ? (is_string($row->employee) ? $row->employee : $row->employee->fullname_bn) : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'employee']);

            return $table->make(true);
        }

        return view('admin.emergenceContactes.index');
    }

    public function create()
    {
        abort_if(Gate::denies('emergence_contacte_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = EmployeeList::pluck('employeeid', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.emergenceContactes.create', compact('employees'));
    }

    public function store(StoreEmergenceContacteRequest $request)
    {
        $emergenceContacte = EmergenceContacte::create($request->all());
        return redirect()->back()->with('status', 'Action successful!');
        //return redirect()->route('admin.emergence-contactes.index');
    }

    public function edit(EmergenceContacte $emergenceContacte)
    {
        abort_if(Gate::denies('emergence_contacte_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = EmployeeList::pluck('employeeid', 'id')->prepend(trans('global.pleaseSelect'), '');

        $emergenceContacte->load('employee');

        return view('admin.emergenceContactes.edit', compact('emergenceContacte', 'employees'));
    }

    public function update(UpdateEmergenceContacteRequest $request, EmergenceContacte $emergenceContacte)
    {
        $emergenceContacte->update($request->all());

        return redirect()->route('admin.emergence-contactes.index');
    }

    public function show(EmergenceContacte $emergenceContacte)
    {
        abort_if(Gate::denies('emergence_contacte_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $emergenceContacte->load('employee');

        return view('admin.emergenceContactes.show', compact('emergenceContacte'));
    }

    public function destroy(EmergenceContacte $emergenceContacte)
    {
        abort_if(Gate::denies('emergence_contacte_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $emergenceContacte->delete();

        return back();
    }

    public function massDestroy(MassDestroyEmergenceContacteRequest $request)
    {
        $emergenceContactes = EmergenceContacte::find(request('ids'));

        foreach ($emergenceContactes as $emergenceContacte) {
            $emergenceContacte->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
