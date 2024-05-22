<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyAchievementschoolsUniversityRequest;
use App\Http\Requests\StoreAchievementschoolsUniversityRequest;
use App\Http\Requests\UpdateAchievementschoolsUniversityRequest;
use App\Models\AchievementschoolsUniversity;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class AchievementschoolsUniversitiesController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('achievementschools_university_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = AchievementschoolsUniversity::query()->select(sprintf('%s.*', (new AchievementschoolsUniversity)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'achievementschools_university_show';
                $editGate      = 'achievementschools_university_edit';
                $deleteGate    = 'achievementschools_university_delete';
                $crudRoutePart = 'achievementschools-universities';

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
            $table->editColumn('name_bn', function ($row) {
                return $row->name_bn ? $row->name_bn : '';
            });
            $table->editColumn('name_en', function ($row) {
                return $row->name_en ? $row->name_en : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.achievementschoolsUniversities.index');
    }

    public function create()
    {
        abort_if(Gate::denies('achievementschools_university_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.achievementschoolsUniversities.create');
    }

    public function store(StoreAchievementschoolsUniversityRequest $request)
    {
        $achievementschoolsUniversity = AchievementschoolsUniversity::create($request->all());

        return redirect()->route('admin.achievementschools-universities.index');
    }

    public function edit(AchievementschoolsUniversity $achievementschoolsUniversity)
    {
        abort_if(Gate::denies('achievementschools_university_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.achievementschoolsUniversities.edit', compact('achievementschoolsUniversity'));
    }

    public function update(UpdateAchievementschoolsUniversityRequest $request, AchievementschoolsUniversity $achievementschoolsUniversity)
    {
        $achievementschoolsUniversity->update($request->all());

        return redirect()->route('admin.achievementschools-universities.index');
    }

    public function show(AchievementschoolsUniversity $achievementschoolsUniversity)
    {
        abort_if(Gate::denies('achievementschools_university_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.achievementschoolsUniversities.show', compact('achievementschoolsUniversity'));
    }

    public function destroy(AchievementschoolsUniversity $achievementschoolsUniversity)
    {
        abort_if(Gate::denies('achievementschools_university_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $achievementschoolsUniversity->delete();

        return back();
    }

    public function massDestroy(MassDestroyAchievementschoolsUniversityRequest $request)
    {
        $achievementschoolsUniversities = AchievementschoolsUniversity::find(request('ids'));

        foreach ($achievementschoolsUniversities as $achievementschoolsUniversity) {
            $achievementschoolsUniversity->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
