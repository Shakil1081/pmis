<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyTravelPurposeRequest;
use App\Http\Requests\StoreTravelPurposeRequest;
use App\Http\Requests\UpdateTravelPurposeRequest;
use App\Models\TravelPurpose;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class TravelPurposeController extends Controller
{
    use MediaUploadingTrait, CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('travel_purpose_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = TravelPurpose::query()->select(sprintf('%s.*', (new TravelPurpose)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'travel_purpose_show';
                $editGate      = 'travel_purpose_edit';
                $deleteGate    = 'travel_purpose_delete';
                $crudRoutePart = 'travel-purposes';

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

        return view('admin.travelPurposes.index');
    }

    public function create()
    {
        abort_if(Gate::denies('travel_purpose_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.travelPurposes.create');
    }

    public function store(StoreTravelPurposeRequest $request)
    {
        $travelPurpose = TravelPurpose::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $travelPurpose->id]);
        }

        return redirect()->route('admin.travel-purposes.index');
    }

    public function edit(TravelPurpose $travelPurpose)
    {
        abort_if(Gate::denies('travel_purpose_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.travelPurposes.edit', compact('travelPurpose'));
    }

    public function update(UpdateTravelPurposeRequest $request, TravelPurpose $travelPurpose)
    {
        $travelPurpose->update($request->all());

        return redirect()->route('admin.travel-purposes.index');
    }

    public function show(TravelPurpose $travelPurpose)
    {
        abort_if(Gate::denies('travel_purpose_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.travelPurposes.show', compact('travelPurpose'));
    }

    public function destroy(TravelPurpose $travelPurpose)
    {
        abort_if(Gate::denies('travel_purpose_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $travelPurpose->delete();

        return back();
    }

    public function massDestroy(MassDestroyTravelPurposeRequest $request)
    {
        $travelPurposes = TravelPurpose::find(request('ids'));

        foreach ($travelPurposes as $travelPurpose) {
            $travelPurpose->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('travel_purpose_create') && Gate::denies('travel_purpose_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new TravelPurpose();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
