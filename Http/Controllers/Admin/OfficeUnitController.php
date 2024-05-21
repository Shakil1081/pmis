<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyOfficeUnitRequest;
use App\Http\Requests\StoreOfficeUnitRequest;
use App\Http\Requests\UpdateOfficeUnitRequest;
use App\Models\OfficeUnit;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class OfficeUnitController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('office_unit_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = OfficeUnit::query()->select(sprintf('%s.*', (new OfficeUnit)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'office_unit_show';
                $editGate      = 'office_unit_edit';
                $deleteGate    = 'office_unit_delete';
                $crudRoutePart = 'office-units';

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
            $table->editColumn('code', function ($row) {
                return $row->code ? $row->code : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.officeUnits.index');
    }

    public function create()
    {
        abort_if(Gate::denies('office_unit_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.officeUnits.create');
    }

    public function store(StoreOfficeUnitRequest $request)
    {
        $officeUnit = OfficeUnit::create($request->all());

        return redirect()->route('admin.office-units.index');
    }

    public function edit(OfficeUnit $officeUnit)
    {
        abort_if(Gate::denies('office_unit_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.officeUnits.edit', compact('officeUnit'));
    }

    public function update(UpdateOfficeUnitRequest $request, OfficeUnit $officeUnit)
    {
        $officeUnit->update($request->all());

        return redirect()->route('admin.office-units.index');
    }

    public function show(OfficeUnit $officeUnit)
    {
        abort_if(Gate::denies('office_unit_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.officeUnits.show', compact('officeUnit'));
    }

    public function destroy(OfficeUnit $officeUnit)
    {
        abort_if(Gate::denies('office_unit_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $officeUnit->delete();

        return back();
    }

    public function massDestroy(MassDestroyOfficeUnitRequest $request)
    {
        $officeUnits = OfficeUnit::find(request('ids'));

        foreach ($officeUnits as $officeUnit) {
            $officeUnit->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
