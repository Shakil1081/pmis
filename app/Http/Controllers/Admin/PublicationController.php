<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyPublicationRequest;
use App\Http\Requests\StorePublicationRequest;
use App\Http\Requests\UpdatePublicationRequest;
use App\Models\EmployeeList;
use App\Models\Publication;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class PublicationController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('publication_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Publication::with(['employee'])->select(sprintf('%s.*', (new Publication)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'publication_show';
                $editGate      = 'publication_edit';
                $deleteGate    = 'publication_delete';
                $crudRoutePart = 'publications';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('title', function ($row) {
                return $row->title ? $row->title : '';
            });
            $table->editColumn('publication_type', function ($row) {
                return $row->publication_type ? Publication::PUBLICATION_TYPE_SELECT[$row->publication_type] : '';
            });
            $table->editColumn('publication_media', function ($row) {
                return $row->publication_media ? $row->publication_media : '';
            });

            $table->editColumn('publication_link', function ($row) {
                return $row->publication_link ? $row->publication_link : '';
            });
            $table->addColumn('employee_employeeid', function ($row) {
                return $row->employee ? $row->employee->employeeid : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'employee']);

            return $table->make(true);
        }

        return view('admin.publications.index');
    }

    public function create()
    {
        abort_if(Gate::denies('publication_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = EmployeeList::pluck('employeeid', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.publications.create', compact('employees'));
    }

    public function store(StorePublicationRequest $request)
    {
        $publication = Publication::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $publication->id]);
        }
        return redirect()->back()->with('status', 'Action successful!');
       // return redirect()->route('admin.publications.index');
    }

    public function edit(Publication $publication)
    {
        abort_if(Gate::denies('publication_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = EmployeeList::pluck('employeeid', 'id')->prepend(trans('global.pleaseSelect'), '');

        $publication->load('employee');

        return view('admin.publications.edit', compact('employees', 'publication'));
    }

    public function update(UpdatePublicationRequest $request, Publication $publication)
    {
        $publication->update($request->all());

        return redirect()->route('admin.publications.index');
    }

    public function show(Publication $publication)
    {
        abort_if(Gate::denies('publication_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $publication->load('employee');

        return view('admin.publications.show', compact('publication'));
    }

    public function destroy(Publication $publication)
    {
        abort_if(Gate::denies('publication_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $publication->delete();

        return back();
    }

    public function massDestroy(MassDestroyPublicationRequest $request)
    {
        $publications = Publication::find(request('ids'));

        foreach ($publications as $publication) {
            $publication->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('publication_create') && Gate::denies('publication_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Publication();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
