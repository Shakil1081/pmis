<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyForeignTravelPersonalRequest;
use App\Http\Requests\StoreForeignTravelPersonalRequest;
use App\Http\Requests\UpdateForeignTravelPersonalRequest;
use App\Models\Country;
use App\Models\EmployeeList;
use App\Models\ForeignTravelPersonal;
use App\Models\TravelPurpose;
use App\Models\TravelRecord;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class ForeignTravelPersonalController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('foreign_travel_personal_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = ForeignTravelPersonal::with(['country', 'purpose', 'leave', 'employee'])->select(sprintf('%s.*', (new ForeignTravelPersonal)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'foreign_travel_personal_show';
                $editGate      = 'foreign_travel_personal_edit';
                $deleteGate    = 'foreign_travel_personal_delete';
                $crudRoutePart = 'foreign-travel-personals';

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
            $table->editColumn('title', function ($row) {
                return $row->title ? $row->title : '';
            });
            $table->addColumn('country_name_bn', function ($row) {
                return $row->country ? $row->country->name_bn : '';
            });

            $table->addColumn('purpose_name_bn', function ($row) {
                return $row->purpose ? $row->purpose->name_bn : '';
            });

            $table->addColumn('leave_start_date', function ($row) {
                return $row->leave ? $row->leave->start_date : '';
            });

            $table->editColumn('leave.title', function ($row) {
                return $row->leave ? (is_string($row->leave) ? $row->leave : $row->leave->title) : '';
            });
            $table->addColumn('employee_employeeid', function ($row) {
                return $row->employee ? $row->employee->employeeid : '';
            });
            $table->addColumn('name', function ($row) {
                return $row->employee ? $row->employee->fullname_en : '';
            });

            $table->editColumn('employee.fullname_bn', function ($row) {
                return $row->employee ? (is_string($row->employee) ? $row->employee : $row->employee->fullname_bn) : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'country', 'purpose', 'leave', 'employee']);

            return $table->make(true);
        }

        return view('admin.foreignTravelPersonals.index');
    }

    public function create()
    {
        abort_if(Gate::denies('foreign_travel_personal_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $countries = Country::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $purposes = TravelPurpose::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $leaves = TravelRecord::pluck('start_date', 'id')->prepend(trans('global.pleaseSelect'), '');

        $employees = EmployeeList::pluck('employeeid', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.foreignTravelPersonals.create', compact('countries', 'employees', 'leaves', 'purposes'));
    }

    public function store(StoreForeignTravelPersonalRequest $request)
    {
        $foreignTravelPersonal = ForeignTravelPersonal::create($request->all());
         return redirect()->back()->with('status', __('global.saveactions'));
        //return redirect()->route('admin.foreign-travel-personals.index');
    }

    public function edit(ForeignTravelPersonal $foreignTravelPersonal)
    {
        abort_if(Gate::denies('foreign_travel_personal_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $countries = Country::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $purposes = TravelPurpose::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $leaves = TravelRecord::pluck('start_date', 'id')->prepend(trans('global.pleaseSelect'), '');

        $employees = EmployeeList::pluck('employeeid', 'id')->prepend(trans('global.pleaseSelect'), '');

        $foreignTravelPersonal->load('country', 'purpose', 'leave', 'employee');

        return view('admin.foreignTravelPersonals.edit', compact('countries', 'employees', 'foreignTravelPersonal', 'leaves', 'purposes'));
    }

    public function update(UpdateForeignTravelPersonalRequest $request, ForeignTravelPersonal $foreignTravelPersonal)
    {
        $foreignTravelPersonal->update($request->all());

        return redirect()->route('admin.foreign-travel-personals.index');
    }

    public function show(ForeignTravelPersonal $foreignTravelPersonal)
    {
        abort_if(Gate::denies('foreign_travel_personal_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $foreignTravelPersonal->load('country', 'purpose', 'leave', 'employee');

        return view('admin.foreignTravelPersonals.show', compact('foreignTravelPersonal'));
    }

    public function destroy(ForeignTravelPersonal $foreignTravelPersonal)
    {
        abort_if(Gate::denies('foreign_travel_personal_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $foreignTravelPersonal->delete();

        return back();
    }

    public function massDestroy(MassDestroyForeignTravelPersonalRequest $request)
    {
        $foreignTravelPersonals = ForeignTravelPersonal::find(request('ids'));

        foreach ($foreignTravelPersonals as $foreignTravelPersonal) {
            $foreignTravelPersonal->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}