<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\StoreMaritalstatusRequest;
use App\Http\Requests\UpdateMaritalstatusRequest;
use App\Models\Maritalstatus;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class MaritalstatuController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('maritalstatus_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Maritalstatus::query()->select(sprintf('%s.*', (new Maritalstatus)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'maritalstatus_show';
                $editGate      = 'maritalstatus_edit';
                $deleteGate    = 'maritalstatus_delete';
                $crudRoutePart = 'maritalstatuses';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : '';
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

        return view('admin.maritalstatuses.index');
    }

    public function create()
    {
        abort_if(Gate::denies('maritalstatus_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.maritalstatuses.create');
    }

    public function store(StoreMaritalstatusRequest $request)
    {
        $maritalstatus = Maritalstatus::create($request->all());

        return redirect()->route('admin.maritalstatuses.index');
    }

    public function edit(Maritalstatus $maritalstatus)
    {
        abort_if(Gate::denies('maritalstatus_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.maritalstatuses.edit', compact('maritalstatus'));
    }

    public function update(UpdateMaritalstatusRequest $request, Maritalstatus $maritalstatus)
    {
        $maritalstatus->update($request->all());

        return redirect()->route('admin.maritalstatuses.index');
    }

    public function show(Maritalstatus $maritalstatus)
    {
        abort_if(Gate::denies('maritalstatus_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.maritalstatuses.show', compact('maritalstatus'));
    }
}
