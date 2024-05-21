<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyLicenseTypeRequest;
use App\Http\Requests\StoreLicenseTypeRequest;
use App\Http\Requests\UpdateLicenseTypeRequest;
use App\Models\LicenseType;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LicenseTypeController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('license_type_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $licenseTypes = LicenseType::all();

        return view('admin.licenseTypes.index', compact('licenseTypes'));
    }

    public function create()
    {
        abort_if(Gate::denies('license_type_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.licenseTypes.create');
    }

    public function store(StoreLicenseTypeRequest $request)
    {
        $licenseType = LicenseType::create($request->all());

        return redirect()->route('admin.license-types.index');
    }

    public function edit(LicenseType $licenseType)
    {
        abort_if(Gate::denies('license_type_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.licenseTypes.edit', compact('licenseType'));
    }

    public function update(UpdateLicenseTypeRequest $request, LicenseType $licenseType)
    {
        $licenseType->update($request->all());

        return redirect()->route('admin.license-types.index');
    }

    public function show(LicenseType $licenseType)
    {
        abort_if(Gate::denies('license_type_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.licenseTypes.show', compact('licenseType'));
    }

    public function destroy(LicenseType $licenseType)
    {
        abort_if(Gate::denies('license_type_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $licenseType->delete();

        return back();
    }

    public function massDestroy(MassDestroyLicenseTypeRequest $request)
    {
        $licenseTypes = LicenseType::find(request('ids'));

        foreach ($licenseTypes as $licenseType) {
            $licenseType->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
