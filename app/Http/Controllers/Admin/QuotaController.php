<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyQuotumRequest;
use App\Http\Requests\StoreQuotumRequest;
use App\Http\Requests\UpdateQuotumRequest;
use App\Models\Quotum;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class QuotaController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('quotum_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Quotum::query()->select(sprintf('%s.*', (new Quotum)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'quotum_show';
                $editGate      = 'quotum_edit';
                $deleteGate    = 'quotum_delete';
                $crudRoutePart = 'quota';

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
            $table->editColumn('remark', function ($row) {
                return $row->remark ? $row->remark : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.quota.index');
    }

    public function create()
    {
        abort_if(Gate::denies('quotum_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.quota.create');
    }

    public function store(StoreQuotumRequest $request)
    {
        $quotum = Quotum::create($request->all());

        return redirect()->route('admin.quota.index');
    }

    public function edit(Quotum $quotum)
    {
        abort_if(Gate::denies('quotum_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.quota.edit', compact('quotum'));
    }

    public function update(UpdateQuotumRequest $request, Quotum $quotum)
    {
        $quotum->update($request->all());

        return redirect()->route('admin.quota.index');
    }

    public function show(Quotum $quotum)
    {
        abort_if(Gate::denies('quotum_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.quota.show', compact('quotum'));
    }

    public function destroy(Quotum $quotum)
    {
        abort_if(Gate::denies('quotum_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $quotum->delete();

        return back();
    }

    public function massDestroy(MassDestroyQuotumRequest $request)
    {
        $quota = Quotum::find(request('ids'));

        foreach ($quota as $quotum) {
            $quotum->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
