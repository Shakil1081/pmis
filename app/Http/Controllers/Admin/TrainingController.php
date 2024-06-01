<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyTrainingRequest;
use App\Http\Requests\StoreTrainingRequest;
use App\Http\Requests\UpdateTrainingRequest;
use App\Models\Country;
use App\Models\EmployeeList;
use App\Models\Training;
use App\Models\TrainingType;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class TrainingController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('training_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Training::with(['employee', 'training_type', 'country'])->select(sprintf('%s.*', (new Training)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'training_show';
                $editGate      = 'training_edit';
                $deleteGate    = 'training_delete';
                $crudRoutePart = 'trainings';

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
            
            $table->addColumn('name', function ($row) {
                return $row->employee ? $row->employee->fullname_en : '';
            });

            $table->addColumn('training_type_name_bn', function ($row) {
                return $row->training_type ? $row->training_type->name_bn : '';
            });

            $table->editColumn('training_name', function ($row) {
                return $row->training_name ? $row->training_name : '';
            });
            $table->editColumn('institute_name', function ($row) {
                return $row->institute_name ? $row->institute_name : '';
            });
            $table->addColumn('country_name_bn', function ($row) {
                return $row->country ? $row->country->name_bn : '';
            });

            $table->editColumn('grade', function ($row) {
                return $row->grade ? $row->grade : '';
            });
            $table->editColumn('position', function ($row) {
                return $row->position ? $row->position : '';
            });
            $table->editColumn('location', function ($row) {
                return $row->location ? $row->location : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'employee', 'training_type', 'country']);

            return $table->make(true);
        }

        return view('admin.trainings.index');
    }

    public function create()
    {
        abort_if(Gate::denies('training_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = EmployeeList::pluck('employeeid', 'id')->prepend(trans('global.pleaseSelect'), '');

        $training_types = TrainingType::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $countries = Country::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.trainings.create', compact('countries', 'employees', 'training_types'));
    }

    public function store(StoreTrainingRequest $request)
    {
        $training = Training::create($request->all());
        return redirect()->back()->with('status', 'Action successful!');
        //return redirect()->route('admin.trainings.index');
    }

    public function edit(Training $training)
    {
        abort_if(Gate::denies('training_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = EmployeeList::pluck('employeeid', 'id')->prepend(trans('global.pleaseSelect'), '');

        $training_types = TrainingType::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $countries = Country::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $training->load('employee', 'training_type', 'country');

        return view('admin.trainings.edit', compact('countries', 'employees', 'training', 'training_types'));
    }

    public function update(UpdateTrainingRequest $request, Training $training)
    {
        $training->update($request->all());

        return redirect()->route('admin.trainings.index');
    }

    public function show(Training $training)
    {
        abort_if(Gate::denies('training_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $training->load('employee', 'training_type', 'country');

        return view('admin.trainings.show', compact('training'));
    }

    public function destroy(Training $training)
    {
        abort_if(Gate::denies('training_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $training->delete();

        return back();
    }

    public function massDestroy(MassDestroyTrainingRequest $request)
    {
        $trainings = Training::find(request('ids'));

        foreach ($trainings as $training) {
            $training->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
