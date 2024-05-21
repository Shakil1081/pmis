<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyGenderRequest;
use App\Http\Requests\StoreGenderRequest;
use App\Http\Requests\UpdateGenderRequest;
use App\Models\Gender;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class GenderController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('gender_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Gender::query()->select(sprintf('%s.*', (new Gender)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'gender_show';
                $editGate      = 'gender_edit';
                $deleteGate    = 'gender_delete';
                $crudRoutePart = 'genders';

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

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.genders.index');
    }

    public function create()
    {
        abort_if(Gate::denies('gender_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.genders.create');
    }

    public function store(StoreGenderRequest $request)
    {
        $gender = Gender::create($request->all());

        return redirect()->route('admin.genders.index');
    }

    public function edit(Gender $gender)
    {
        abort_if(Gate::denies('gender_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.genders.edit', compact('gender'));
    }

    public function update(UpdateGenderRequest $request, Gender $gender)
    {
        $gender->update($request->all());

        return redirect()->route('admin.genders.index');
    }

    public function show(Gender $gender)
    {
        abort_if(Gate::denies('gender_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.genders.show', compact('gender'));
    }

    public function destroy(Gender $gender)
    {
        abort_if(Gate::denies('gender_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $gender->delete();

        return back();
    }

    public function massDestroy(MassDestroyGenderRequest $request)
    {
        $genders = Gender::find(request('ids'));

        foreach ($genders as $gender) {
            $gender->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
