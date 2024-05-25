<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyEducationInformationeRequest;
use App\Http\Requests\StoreEducationInformationeRequest;
use App\Http\Requests\UpdateEducationInformationeRequest;
use App\Models\AchievementschoolsUniversity;
use App\Models\EducationInformatione;
use App\Models\EmployeeList;
use App\Models\ExamBoard;
use App\Models\Examination;
use App\Models\Result;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class EducationInformationeController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('education_informatione_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = EducationInformatione::with(['name_of_exam', 'exam_board', 'result', 'achievement_types', 'employee'])->select(sprintf('%s.*', (new EducationInformatione)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'education_informatione_show';
                $editGate      = 'education_informatione_edit';
                $deleteGate    = 'education_informatione_delete';
                $crudRoutePart = 'education-informationes';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->addColumn('name_of_exam_name_bn', function ($row) {
                return $row->name_of_exam ? $row->name_of_exam->name_bn : '';
            });

            $table->addColumn('exam_board_name_bn', function ($row) {
                return $row->exam_board ? $row->exam_board->name_bn : '';
            });

            $table->editColumn('concentration_major_group', function ($row) {
                return $row->concentration_major_group ? $row->concentration_major_group : '';
            });
            $table->editColumn('school_university_name', function ($row) {
                return $row->school_university_name ? $row->school_university_name : '';
            });
            $table->addColumn('result_name_bn', function ($row) {
                return $row->result ? $row->result->name_bn : '';
            });

            $table->editColumn('passing_year', function ($row) {
                return $row->passing_year ? $row->passing_year : '';
            });
            $table->addColumn('achievement_types_name_bn', function ($row) {
                return $row->achievement_types ? $row->achievement_types->name_bn : '';
            });

            $table->editColumn('achievement_types.name_en', function ($row) {
                return $row->achievement_types ? (is_string($row->achievement_types) ? $row->achievement_types : $row->achievement_types->name_en) : '';
            });
            $table->editColumn('achivement', function ($row) {
                return $row->achivement ? $row->achivement : '';
            });
            $table->editColumn('catificarte', function ($row) {
                return $row->catificarte ? '<a href="' . $row->catificarte->getUrl() . '" target="_blank">' . trans('global.downloadFile') . '</a>' : '';
            });
            $table->addColumn('employee_employeeid', function ($row) {
                return $row->employee ? $row->employee->employeeid : '';
            });

            $table->editColumn('employee.fullname_bn', function ($row) {
                return $row->employee ? (is_string($row->employee) ? $row->employee : $row->employee->fullname_bn) : '';
            });
            $table->editColumn('exam_degree', function ($row) {
                return $row->exam_degree ? $row->exam_degree : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'name_of_exam', 'exam_board', 'result', 'achievement_types', 'catificarte', 'employee']);

            return $table->make(true);
        }

        return view('admin.educationInformationes.index');
    }

    public function create()
    {
        abort_if(Gate::denies('education_informatione_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $name_of_exams = Examination::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $exam_boards = ExamBoard::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $results = Result::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $achievement_types = AchievementschoolsUniversity::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $employees = EmployeeList::pluck('employeeid', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.educationInformationes.create', compact('achievement_types', 'employees', 'exam_boards', 'name_of_exams', 'results'));
    }

    public function store(StoreEducationInformationeRequest $request)
    {
        $educationInformatione = EducationInformatione::create($request->all());

        if ($request->input('catificarte', false)) {
            $educationInformatione->addMedia(storage_path('tmp/uploads/' . basename($request->input('catificarte'))))->toMediaCollection('catificarte');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $educationInformatione->id]);
        }

        return redirect()->route('admin.education-informationes.index');
    }

    public function edit(EducationInformatione $educationInformatione)
    {
        abort_if(Gate::denies('education_informatione_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $name_of_exams = Examination::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $exam_boards = ExamBoard::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $results = Result::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $achievement_types = AchievementschoolsUniversity::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $employees = EmployeeList::pluck('employeeid', 'id')->prepend(trans('global.pleaseSelect'), '');

        $educationInformatione->load('name_of_exam', 'exam_board', 'result', 'achievement_types', 'employee');

        return view('admin.educationInformationes.edit', compact('achievement_types', 'educationInformatione', 'employees', 'exam_boards', 'name_of_exams', 'results'));
    }

    public function update(UpdateEducationInformationeRequest $request, EducationInformatione $educationInformatione)
    {
        $educationInformatione->update($request->all());

        if ($request->input('catificarte', false)) {
            if (! $educationInformatione->catificarte || $request->input('catificarte') !== $educationInformatione->catificarte->file_name) {
                if ($educationInformatione->catificarte) {
                    $educationInformatione->catificarte->delete();
                }
                $educationInformatione->addMedia(storage_path('tmp/uploads/' . basename($request->input('catificarte'))))->toMediaCollection('catificarte');
            }
        } elseif ($educationInformatione->catificarte) {
            $educationInformatione->catificarte->delete();
        }

        return redirect()->route('admin.education-informationes.index');
    }

    public function show(EducationInformatione $educationInformatione)
    {
        abort_if(Gate::denies('education_informatione_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $educationInformatione->load('name_of_exam', 'exam_board', 'result', 'achievement_types', 'employee');

        return view('admin.educationInformationes.show', compact('educationInformatione'));
    }

    public function destroy(EducationInformatione $educationInformatione)
    {
        abort_if(Gate::denies('education_informatione_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $educationInformatione->delete();

        return back();
    }

    public function massDestroy(MassDestroyEducationInformationeRequest $request)
    {
        $educationInformationes = EducationInformatione::find(request('ids'));

        foreach ($educationInformationes as $educationInformatione) {
            $educationInformatione->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('education_informatione_create') && Gate::denies('education_informatione_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new EducationInformatione();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
