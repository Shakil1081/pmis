<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyTrainingTypeRequest;
use App\Http\Requests\StoreTrainingTypeRequest;
use App\Http\Requests\UpdateTrainingTypeRequest;
use App\Models\TrainingType;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class TrainingTypeController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('training_type_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = TrainingType::query()->select(sprintf('%s.*', (new TrainingType)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'training_type_show';
                $editGate      = 'training_type_edit';
                $deleteGate    = 'training_type_delete';
                $crudRoutePart = 'training-types';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('name_bn', function ($row) {
                return $row->name_bn ? $row->name_bn : '';
            });
            $table->editColumn('name_en', function ($row) {
                return $row->name_en ? $row->name_en : '';
            });
            $table->editColumn('value', function ($row) {
                return $row->value ? $row->value : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.trainingTypes.index');
    }

    public function create()
    {
        abort_if(Gate::denies('training_type_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.trainingTypes.create');
    }

    public function store(StoreTrainingTypeRequest $request)
    {
        $trainingType = TrainingType::create($request->all());

        return redirect()->route('admin.training-types.index');
    }

    public function edit(TrainingType $trainingType)
    {
        abort_if(Gate::denies('training_type_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.trainingTypes.edit', compact('trainingType'));
    }

    public function update(UpdateTrainingTypeRequest $request, TrainingType $trainingType)
    {
        $trainingType->update($request->all());

        return redirect()->route('admin.training-types.index');
    }

    public function show(TrainingType $trainingType)
    {
        abort_if(Gate::denies('training_type_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.trainingTypes.show', compact('trainingType'));
    }

    public function destroy(TrainingType $trainingType)
    {
        abort_if(Gate::denies('training_type_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $trainingType->delete();

        return back();
    }

    public function massDestroy(MassDestroyTrainingTypeRequest $request)
    {
        $trainingTypes = TrainingType::find(request('ids'));

        foreach ($trainingTypes as $trainingType) {
            $trainingType->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
