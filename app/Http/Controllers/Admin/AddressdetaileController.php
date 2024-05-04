<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyAddressdetaileRequest;
use App\Http\Requests\StoreAddressdetaileRequest;
use App\Http\Requests\UpdateAddressdetaileRequest;
use App\Models\Addressdetaile;
use App\Models\EmployeeList;
use App\Models\Upazila;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class AddressdetaileController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('addressdetaile_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Addressdetaile::with(['employee', 'thana_upazila'])->select(sprintf('%s.*', (new Addressdetaile)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'addressdetaile_show';
                $editGate      = 'addressdetaile_edit';
                $deleteGate    = 'addressdetaile_delete';
                $crudRoutePart = 'addressdetailes';

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
            $table->editColumn('address_type', function ($row) {
                return $row->address_type ? Addressdetaile::ADDRESS_TYPE_SELECT[$row->address_type] : '';
            });
            $table->editColumn('flat_house', function ($row) {
                return $row->flat_house ? $row->flat_house : '';
            });
            $table->editColumn('post_office', function ($row) {
                return $row->post_office ? $row->post_office : '';
            });
            $table->editColumn('post_code', function ($row) {
                return $row->post_code ? $row->post_code : '';
            });
            $table->addColumn('thana_upazila_name_bn', function ($row) {
                return $row->thana_upazila ? $row->thana_upazila->name_bn : '';
            });

            $table->editColumn('phone_number', function ($row) {
                return $row->phone_number ? $row->phone_number : '';
            });
            $table->editColumn('status', function ($row) {
                return $row->status ? Addressdetaile::STATUS_SELECT[$row->status] : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'employee', 'thana_upazila']);

            return $table->make(true);
        }

        return view('admin.addressdetailes.index');
    }

    public function create()
    {
        abort_if(Gate::denies('addressdetaile_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = EmployeeList::pluck('employeeid', 'id')->prepend(trans('global.pleaseSelect'), '');

        $thana_upazilas = Upazila::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.addressdetailes.create', compact('employees', 'thana_upazilas'));
    }

    public function store(StoreAddressdetaileRequest $request)
    {
        $addressdetaile = Addressdetaile::create($request->all());

        return redirect()->route('admin.addressdetailes.index');
    }

    public function edit(Addressdetaile $addressdetaile)
    {
        abort_if(Gate::denies('addressdetaile_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = EmployeeList::pluck('employeeid', 'id')->prepend(trans('global.pleaseSelect'), '');

        $thana_upazilas = Upazila::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $addressdetaile->load('employee', 'thana_upazila');

        return view('admin.addressdetailes.edit', compact('addressdetaile', 'employees', 'thana_upazilas'));
    }

    public function update(UpdateAddressdetaileRequest $request, Addressdetaile $addressdetaile)
    {
        $addressdetaile->update($request->all());

        return redirect()->route('admin.addressdetailes.index');
    }

    public function show(Addressdetaile $addressdetaile)
    {
        abort_if(Gate::denies('addressdetaile_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $addressdetaile->load('employee', 'thana_upazila');

        return view('admin.addressdetailes.show', compact('addressdetaile'));
    }

    public function destroy(Addressdetaile $addressdetaile)
    {
        abort_if(Gate::denies('addressdetaile_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $addressdetaile->delete();

        return back();
    }

    public function massDestroy(MassDestroyAddressdetaileRequest $request)
    {
        $addressdetailes = Addressdetaile::find(request('ids'));

        foreach ($addressdetailes as $addressdetaile) {
            $addressdetaile->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
