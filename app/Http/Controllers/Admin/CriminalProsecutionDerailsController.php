<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCriminalProsecutionDerailRequest;
use App\Http\Requests\StoreCriminalProsecutionDerailRequest;
use App\Http\Requests\UpdateCriminalProsecutionDerailRequest;
use App\Models\CriminalProsecutionDerail;
use App\Models\CriminalProsecutione;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class CriminalProsecutionDerailsController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('criminal_prosecution_derail_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = CriminalProsecutionDerail::with(['criminal_prosecution'])->select(sprintf('%s.*', (new CriminalProsecutionDerail)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'criminal_prosecution_derail_show';
                $editGate      = 'criminal_prosecution_derail_edit';
                $deleteGate    = 'criminal_prosecution_derail_delete';
                $crudRoutePart = 'criminal-prosecution-derails';

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
            $table->addColumn('criminal_prosecution_natureof_offence', function ($row) {
                return $row->criminal_prosecution ? $row->criminal_prosecution->natureof_offence : '';
            });

            $table->editColumn('govt_order_no', function ($row) {
                return $row->govt_order_no ? $row->govt_order_no : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'criminal_prosecution']);

            return $table->make(true);
        }

        return view('admin.criminalProsecutionDerails.index');
    }

    public function create()
    {
        abort_if(Gate::denies('criminal_prosecution_derail_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $criminal_prosecutions = CriminalProsecutione::pluck('natureof_offence', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.criminalProsecutionDerails.create', compact('criminal_prosecutions'));
    }

    // public function store(StoreCriminalProsecutionDerailRequest $request)
    // {
    //     $criminalProsecutionDerail = CriminalProsecutionDerail::create($request->all());

    //     return redirect()->route('admin.criminal-prosecution-derails.index');
    // }


    public function store(StoreCriminalProsecutioneRequest $request)
{
    // Validate the request data using the StoreCriminalProsecutioneRequest class
    $validatedData = $request->validated();

    // Create a new CriminalProsecutione instance using the validated data
    $criminalProsecutione = CriminalProsecutione::create($validatedData);

    // Handle file uploads for court_order (if any)
    if ($request->hasFile('court_order')) {
        $courtOrderFile = $request->file('court_order');
        $criminalProsecutione->addMedia($courtOrderFile)->toMediaCollection('court_order');
    }

    // Now, create the CriminalProsecutionDerail instance
    $criminalProsecutionDerailData = $request->only(['govt_order_no', 'govt_order_file']);
    $criminalProsecutionDerailData['criminalprosecutione_id'] = $criminalProsecutione->id;

    // Handle file uploads for govt_order_file (if any)
    if ($request->hasFile('govt_order_file')) {
        $govtOrderFile = $request->file('govt_order_file');
        // Handle file uploads for govt_order_file
        // Assuming you have a method to store this file and get its path
        $govtOrderFilePath = $this->storeFileAndGetPath($govtOrderFile);
        $criminalProsecutionDerailData['govt_order'] = $govtOrderFilePath;
    }

    // Create the CriminalProsecutionDerail instance
    CriminalProsecutionDerail::create($criminalProsecutionDerailData);

    // Handle any other media files attached via CKEditor (if any)
    if ($media = $request->input('ck-media', false)) {
        Media::whereIn('id', $media)->update(['model_id' => $criminalProsecutione->id]);
    }

    // Redirect back with a success message
    return redirect()->back()->with('status', __('global.saveactions'));
}



    public function edit(CriminalProsecutionDerail $criminalProsecutionDerail)
    {
        abort_if(Gate::denies('criminal_prosecution_derail_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $criminal_prosecutions = CriminalProsecutione::pluck('natureof_offence', 'id')->prepend(trans('global.pleaseSelect'), '');

        $criminalProsecutionDerail->load('criminal_prosecution');

        return view('admin.criminalProsecutionDerails.edit', compact('criminalProsecutionDerail', 'criminal_prosecutions'));
    }

    public function update(UpdateCriminalProsecutionDerailRequest $request, CriminalProsecutionDerail $criminalProsecutionDerail)
    {
        $criminalProsecutionDerail->update($request->all());

        return redirect()->route('admin.criminal-prosecution-derails.index');
    }

    public function show(CriminalProsecutionDerail $criminalProsecutionDerail)
    {
        abort_if(Gate::denies('criminal_prosecution_derail_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $criminalProsecutionDerail->load('criminal_prosecution');

        return view('admin.criminalProsecutionDerails.show', compact('criminalProsecutionDerail'));
    }

    public function destroy(CriminalProsecutionDerail $criminalProsecutionDerail)
    {
        abort_if(Gate::denies('criminal_prosecution_derail_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $criminalProsecutionDerail->delete();

        return back();
    }

    public function massDestroy(MassDestroyCriminalProsecutionDerailRequest $request)
    {
        $criminalProsecutionDerails = CriminalProsecutionDerail::find(request('ids'));

        foreach ($criminalProsecutionDerails as $criminalProsecutionDerail) {
            $criminalProsecutionDerail->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
