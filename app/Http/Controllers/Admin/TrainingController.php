<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyTrainingRequest;
use App\Http\Requests\StoreTrainingRequest;
use App\Http\Requests\UpdateTrainingRequest;
use App\Models\Country;
use App\Models\EmployeeList;
use App\Models\Training;
use App\Models\TrainingType;
use App\Models\TravelPurpose;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class TrainingController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('training_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Training::with(['employee', 'foreign_travel', 'training_type', 'country'])->select(sprintf('%s.*', (new Training)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'training_show';
                $editGate      = 'training_edit';
                $deleteGate    = 'training_delete';
                $crudRoutePart = 'trainings';

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

            $table->addColumn('foreign_travel_name_bn', function ($row) {
                return $row->foreign_travel ? $row->foreign_travel->name_bn : '';
            });

            $table->editColumn('foreign_travel.name_en', function ($row) {
                return $row->foreign_travel ? (is_string($row->foreign_travel) ? $row->foreign_travel : $row->foreign_travel->name_en) : '';
            });
            $table->addColumn('training_type_name_bn', function ($row) {
                return $row->training_type ? $row->training_type->name_bn : '';
            });

            $table->editColumn('training_name', function ($row) {
                return $row->training_name ? $row->training_name : '';
            });
            $table->editColumn('institute_name', function ($row) {
                return $row->institute_name ? $row->institute_name : '';
            });
            $table->addColumn('country_name_bn', function ($row) {
                return $row->country ? $row->country->name_bn : '';
            });

            $table->editColumn('grade', function ($row) {
                return $row->grade ? $row->grade : '';
            });
            $table->editColumn('position', function ($row) {
                return $row->position ? $row->position : '';
            });
            $table->editColumn('location', function ($row) {
                return $row->location ? $row->location : '';
            });
            $table->editColumn('upload_certificate', function ($row) {
                return $row->upload_certificate ? '<a href="' . $row->upload_certificate->getUrl() . '" target="_blank">' . trans('global.downloadFile') . '</a>' : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'employee', 'foreign_travel', 'training_type', 'country', 'upload_certificate']);

            return $table->make(true);
        }

        return view('admin.trainings.index');
    }

    public function create(Request $request)
    {
        abort_if(Gate::denies('training_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employeeId = $request->query('id');
        $employee = EmployeeList::find($employeeId);

        $locale = App::getLocale();
        $columname = $locale === 'bn' ? 'name_bn' : 'name_en';

        $employees = EmployeeList::pluck('employeeid', 'id')->prepend(trans('global.pleaseSelect'), '');

        $foreign_travels = TravelPurpose::pluck( $columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        $training_types = TrainingType::pluck( $columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        $countries = Country::pluck( $columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.trainings.create', compact('countries','employee', 'employees', 'foreign_travels', 'training_types'));
    }

    public function store(StoreTrainingRequest $request)
    {
        $training = Training::create($request->all());

        if ($request->input('upload_certificate', false)) {
            $training->addMedia(storage_path('tmp/uploads/' . basename($request->input('upload_certificate'))))->toMediaCollection('upload_certificate');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $training->id]);
        }

        return redirect()->back()->with('status', __('global.saveactions'));
    }

    public function edit(Training $training)
    {
        abort_if(Gate::denies('training_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $locale = App::getLocale();
        $columname = $locale === 'bn' ? 'name_bn' : 'name_en';
        $employees = EmployeeList::pluck('employeeid', 'id')->prepend(trans('global.pleaseSelect'), '');

        $foreign_travels = TravelPurpose::pluck( $columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        $training_types = TrainingType::pluck( $columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        $countries = Country::pluck( $columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        $training->load('employee', 'foreign_travel', 'training_type', 'country');

        return view('admin.trainings.edit', compact('countries', 'employees', 'foreign_travels', 'training', 'training_types'));
    }

    public function update(UpdateTrainingRequest $request, Training $training)
    {
        $training->update($request->all());

        if ($request->input('upload_certificate', false)) {
            if (! $training->upload_certificate || $request->input('upload_certificate') !== $training->upload_certificate->file_name) {
                if ($training->upload_certificate) {
                    $training->upload_certificate->delete();
                }
                $training->addMedia(storage_path('tmp/uploads/' . basename($request->input('upload_certificate'))))->toMediaCollection('upload_certificate');
            }
        } elseif ($training->upload_certificate) {
            $training->upload_certificate->delete();
        }

        return redirect()->route('admin.trainings.index');
    }

    public function show(Training $training)
    {
        abort_if(Gate::denies('training_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $training->load('employee', 'foreign_travel', 'training_type', 'country');

        return view('admin.trainings.show', compact('training'));
    }

    public function destroy(Training $training)
    {
        abort_if(Gate::denies('training_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $training->delete();

        return back();
    }

    public function massDestroy(MassDestroyTrainingRequest $request)
    {
        $trainings = Training::find(request('ids'));

        foreach ($trainings as $training) {
            $training->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('training_create') && Gate::denies('training_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Training();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
