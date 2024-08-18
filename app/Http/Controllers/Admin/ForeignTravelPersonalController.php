<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyForeignTravelPersonalRequest;
use App\Http\Requests\StoreForeignTravelPersonalRequest;
use App\Http\Requests\UpdateForeignTravelPersonalRequest;
use App\Models\Country;
use App\Models\EmployeeList;
use App\Models\ForeignTravelPersonal;
use App\Models\TravelPurpose;
use App\Models\TravelTitle;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class ForeignTravelPersonalController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('foreign_travel_personal_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = ForeignTravelPersonal::with(['country', 'purpose', 'employee', 'title'])->select(sprintf('%s.*', (new ForeignTravelPersonal)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'foreign_travel_personal_show';
                $editGate      = 'foreign_travel_personal_edit';
                $deleteGate    = 'foreign_travel_personal_delete';
                $crudRoutePart = 'foreign-travel-personals';

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
            $table->addColumn('country_name_bn', function ($row) {
                return $row->country ? $row->country->name_bn : '';
            });

            $table->addColumn('purpose_name_bn', function ($row) {
                return $row->purpose ? $row->purpose->name_bn : '';
            });

            $table->addColumn('employee_employeeid', function ($row) {
                return $row->employee ? $row->employee->employeeid : '';
            });

            $table->editColumn('employee.fullname_bn', function ($row) {
                return $row->employee ? (is_string($row->employee) ? $row->employee : $row->employee->fullname_bn) : '';
            });
            $table->addColumn('title_name_bn', function ($row) {
                return $row->title ? $row->title->name_bn : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'country', 'purpose', 'employee', 'title']);

            return $table->make(true);
        }

        return view('admin.foreignTravelPersonals.index');
    }

    public function create(Request $request)
    {
        abort_if(Gate::denies('foreign_travel_personal_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $employeeId = $request->query('id');
        $employee = EmployeeList::find($employeeId);
        $locale = App::getLocale();
        $columname = $locale === 'bn' ? 'name_bn' : 'name_en';
        $countries = Country::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        $purposes = TravelPurpose::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        $employees = EmployeeList::pluck('employeeid', 'id')->prepend(trans('global.pleaseSelect'), '');

        $titles = TravelTitle::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.foreignTravelPersonals.create', compact('countries', 'employee', 'employees', 'purposes', 'titles'));
    }

    public function store(StoreForeignTravelPersonalRequest $request)
    {
        $data = $request->all(); 
        if ($data['title_id'] == 'Other') {
            $travelTitle = new TravelTitle();
            $travelTitle->name_bn = $data['name_bn'];
            $travelTitle->name_en = $data['name_en'];
            $travelTitle->save();
            $data['title_id'] = $travelTitle->id;
        }
    
        $foreignTravelPersonal = ForeignTravelPersonal::create($data);
    
        if ($request->input('leave_permission', false)) {
            $foreignTravelPersonal->addMedia(storage_path('tmp/uploads/' . basename($request->input('leave_permission'))))->toMediaCollection('leave_permission');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $foreignTravelPersonal->id]);
        }
        return redirect()->back()->with('status', __('global.saveactions'));
    }
    

    public function edit(ForeignTravelPersonal $foreignTravelPersonal)
    {
        abort_if(Gate::denies('foreign_travel_personal_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $locale = App::getLocale();
        $columname = $locale === 'bn' ? 'name_bn' : 'name_en';
        $countries = Country::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        $purposes = TravelPurpose::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        $employees = EmployeeList::pluck('employeeid', 'id')->prepend(trans('global.pleaseSelect'), '');

        $titles = TravelTitle::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        $foreignTravelPersonal->load('country', 'purpose', 'employee', 'title');

        return view('admin.foreignTravelPersonals.edit', compact('countries', 'employees', 'foreignTravelPersonal', 'purposes', 'titles'));
    }

    public function update(UpdateForeignTravelPersonalRequest $request, ForeignTravelPersonal $foreignTravelPersonal)
    {
        $foreignTravelPersonal->update($request->all());

        if ($request->input('leave_permission', false)) {
            if (! $foreignTravelPersonal->leave_permission || $request->input('leave_permission') !== $foreignTravelPersonal->leave_permission->file_name) {
                if ($foreignTravelPersonal->leave_permission) {
                    $foreignTravelPersonal->leave_permission->delete();
                }
                $foreignTravelPersonal->addMedia(storage_path('tmp/uploads/' . basename($request->input('leave_permission'))))->toMediaCollection('leave_permission');
            }
        } elseif ($foreignTravelPersonal->leave_permission) {
            $foreignTravelPersonal->leave_permission->delete();
        }

        return redirect()->route('admin.foreign-travel-personals.index');
    }

    public function show(ForeignTravelPersonal $foreignTravelPersonal)
    {
        abort_if(Gate::denies('foreign_travel_personal_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $foreignTravelPersonal->load('country', 'purpose', 'employee', 'title');

        return view('admin.foreignTravelPersonals.show', compact('foreignTravelPersonal'));
    }

    public function destroy(ForeignTravelPersonal $foreignTravelPersonal)
    {
        abort_if(Gate::denies('foreign_travel_personal_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $foreignTravelPersonal->delete();

        return back();
    }

    public function massDestroy(MassDestroyForeignTravelPersonalRequest $request)
    {
        $foreignTravelPersonals = ForeignTravelPersonal::find(request('ids'));

        foreach ($foreignTravelPersonals as $foreignTravelPersonal) {
            $foreignTravelPersonal->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('foreign_travel_personal_create') && Gate::denies('foreign_travel_personal_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new ForeignTravelPersonal();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
