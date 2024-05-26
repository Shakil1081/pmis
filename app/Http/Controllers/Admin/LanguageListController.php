<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyLanguageListRequest;
use App\Http\Requests\StoreLanguageListRequest;
use App\Http\Requests\UpdateLanguageListRequest;
use App\Models\LanguageList;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class LanguageListController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('language_list_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = LanguageList::query()->select(sprintf('%s.*', (new LanguageList)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'language_list_show';
                $editGate      = 'language_list_edit';
                $deleteGate    = 'language_list_delete';
                $crudRoutePart = 'language-lists';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : '';
            });
            $table->editColumn('nmae_en', function ($row) {
                return $row->nmae_en ? $row->nmae_en : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.languageLists.index');
    }

    public function create()
    {
        abort_if(Gate::denies('language_list_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.languageLists.create');
    }

    public function store(StoreLanguageListRequest $request)
    {
        $languageList = LanguageList::create($request->all());

        return redirect()->route('admin.language-lists.index');
    }

    public function edit(LanguageList $languageList)
    {
        abort_if(Gate::denies('language_list_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.languageLists.edit', compact('languageList'));
    }

    public function update(UpdateLanguageListRequest $request, LanguageList $languageList)
    {
        $languageList->update($request->all());

        return redirect()->route('admin.language-lists.index');
    }

    public function show(LanguageList $languageList)
    {
        abort_if(Gate::denies('language_list_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.languageLists.show', compact('languageList'));
    }

    public function destroy(LanguageList $languageList)
    {
        abort_if(Gate::denies('language_list_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $languageList->delete();

        return back();
    }

    public function massDestroy(MassDestroyLanguageListRequest $request)
    {
        $languageLists = LanguageList::find(request('ids'));

        foreach ($languageLists as $languageList) {
            $languageList->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
