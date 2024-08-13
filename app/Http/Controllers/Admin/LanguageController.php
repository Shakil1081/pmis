<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyLanguageRequest;
use App\Http\Requests\StoreLanguageRequest;
use App\Http\Requests\UpdateLanguageRequest;
use App\Models\EmployeeList;
use App\Models\Language;
use App\Models\LanguageList;
use App\Models\LanguageProficiency;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class LanguageController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('language_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Language::with(['employee', 'read', 'write', 'speak', 'language'])->select(sprintf('%s.*', (new Language)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'language_show';
                $editGate      = 'language_edit';
                $deleteGate    = 'language_delete';
                $crudRoutePart = 'languages';

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

            $table->addColumn('read_name', function ($row) {
                return $row->read ? $row->read->name : '';
            });

            $table->addColumn('write_name', function ($row) {
                return $row->write ? $row->write->name : '';
            });

            $table->addColumn('speak_name', function ($row) {
                return $row->speak ? $row->speak->name : '';
            });

            $table->addColumn('language_name', function ($row) {
                return $row->language ? $row->language->name : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'employee', 'read', 'write', 'speak', 'language']);

            return $table->make(true);
        }

        return view('admin.languages.index');
    }

    public function create(Request $request)
    {
        abort_if(Gate::denies('language_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employeeId = $request->query('id');
        $employee = EmployeeList::find($employeeId);

        $locale = App::getLocale();
        $columname = $locale === 'bn' ? 'name' : 'name_en';
        $list = $locale === 'bn' ? 'name' : 'nmae_en';

        $reads = LanguageProficiency::pluck( $columname, 'id')->prepend(trans('global.pleaseSelect'), '');
        $writes = LanguageProficiency::pluck( $columname, 'id')->prepend(trans('global.pleaseSelect'), '');
        $speaks = LanguageProficiency::pluck( $columname, 'id')->prepend(trans('global.pleaseSelect'), '');
        $languages = LanguageList::pluck( $list, 'id')->prepend(trans('global.pleaseSelect'), '');
        

        return view('admin.languages.create', compact( 'languages', 'reads', 'speaks', 'writes','employee'));
    }

    public function store(StoreLanguageRequest $request)
    {
        $language = Language::create($request->all());

         return redirect()->back()->with('status', __('global.saveactions'));
    }

    public function edit(Language $language)
    {
        abort_if(Gate::denies('language_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = EmployeeList::pluck('employeeid', 'id')->prepend(trans('global.pleaseSelect'), '');

        $reads = LanguageProficiency::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $writes = LanguageProficiency::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $speaks = LanguageProficiency::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $languages = LanguageList::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $language->load('employee', 'read', 'write', 'speak', 'language');

        return view('admin.languages.edit', compact('employees', 'language', 'languages', 'reads', 'speaks', 'writes'));
    }

    public function update(UpdateLanguageRequest $request, Language $language)
    {
        $language->update($request->all());

        return redirect()->route('admin.languages.index');
    }

    public function show(Language $language)
    {
        abort_if(Gate::denies('language_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $language->load('employee', 'read', 'write', 'speak', 'language');

        return view('admin.languages.show', compact('language'));
    }

    public function destroy(Language $language)
    {
        abort_if(Gate::denies('language_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $language->delete();

        return back();
    }

    public function massDestroy(MassDestroyLanguageRequest $request)
    {
        $languages = Language::find(request('ids'));

        foreach ($languages as $language) {
            $language->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
