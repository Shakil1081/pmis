<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyEmployeePromotionRequest;
use App\Http\Requests\StoreEmployeePromotionRequest;
use App\Http\Requests\UpdateEmployeePromotionRequest;
use App\Models\Designation;
use App\Models\EmployeeList;
use App\Models\EmployeePromotion;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class EmployeePromotionController extends Controller
{
    use MediaUploadingTrait, CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('employee_promotion_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = EmployeePromotion::with(['employee', 'new_designation'])->select(sprintf('%s.*', (new EmployeePromotion)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'employee_promotion_show';
                $editGate = 'employee_promotion_edit';
                $deleteGate = 'employee_promotion_delete';
                $crudRoutePart = 'employee-promotions';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                )
                );
            });

            $table->addColumn('employee_employeeid', function ($row) {
                return $row->employee ? $row->employee->employeeid : '';
            });

            $table->addColumn('name', function ($row) {
                return $row->employee ? $row->employee->fullname_bn : '';
            });

            $table->addColumn('new_designation_name_bn', function ($row) {
                return $row->new_designation ? $row->new_designation->name_bn : '';
            });

            $table->editColumn('office_order', function ($row) {
                return $row->office_order ? '<a href="' . $row->office_order->getUrl() . '" target="_blank">' . trans('global.downloadFile') . '</a>' : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'employee', 'new_designation', 'office_order']);

            return $table->make(true);
        }

        return view('admin.employeePromotions.index');
    }

    public function create(Request $request)
    {
        abort_if(Gate::denies('employee_promotion_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employeeId = $request->query('id');
        $employee = EmployeeList::find($employeeId);

        $locale = App::getLocale();
        $columname = $locale === 'bn' ? 'name_bn' : 'name_en';

        $employees = EmployeeList::pluck('employeeid', 'id')->prepend(trans('global.pleaseSelect'), '');

        $new_designations = Designation::pluck($columname, 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.employeePromotions.create', compact('employees', 'new_designations', 'employee'));
    }

    public function store(StoreEmployeePromotionRequest $request)
    {
        $employeePromotion = EmployeePromotion::create($request->all());

        if ($request->input('office_order', false)) {
            $employeePromotion->addMedia(storage_path('tmp/uploads/' . basename($request->input('office_order'))))->toMediaCollection('office_order');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $employeePromotion->id]);
        }
        return redirect()->back()->with('status', __('global.saveactions'));
        // return redirect()->route('admin.employee-promotions.index');
    }

    public function edit(EmployeePromotion $employeePromotion)
    {
        abort_if(Gate::denies('employee_promotion_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = EmployeeList::pluck('employeeid', 'id')->prepend(trans('global.pleaseSelect'), '');

        $new_designations = Designation::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $employeePromotion->load('employee', 'new_designation');

        return view('admin.employeePromotions.edit', compact('employeePromotion', 'employees', 'new_designations'));
    }

    public function update(UpdateEmployeePromotionRequest $request, EmployeePromotion $employeePromotion)
    {
        $employeePromotion->update($request->all());

        if ($request->input('office_order', false)) {
            if (!$employeePromotion->office_order || $request->input('office_order') !== $employeePromotion->office_order->file_name) {
                if ($employeePromotion->office_order) {
                    $employeePromotion->office_order->delete();
                }
                $employeePromotion->addMedia(storage_path('tmp/uploads/' . basename($request->input('office_order'))))->toMediaCollection('office_order');
            }
        } elseif ($employeePromotion->office_order) {
            $employeePromotion->office_order->delete();
        }

        return redirect()->route('admin.employee-promotions.index');
    }

    public function show(EmployeePromotion $employeePromotion)
    {
        abort_if(Gate::denies('employee_promotion_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employeePromotion->load('employee', 'new_designation');

        return view('admin.employeePromotions.show', compact('employeePromotion'));
    }

    public function destroy(EmployeePromotion $employeePromotion)
    {
        abort_if(Gate::denies('employee_promotion_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employeePromotion->delete();

        return back();
    }

    public function massDestroy(MassDestroyEmployeePromotionRequest $request)
    {
        $employeePromotions = EmployeePromotion::find(request('ids'));

        foreach ($employeePromotions as $employeePromotion) {
            $employeePromotion->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('employee_promotion_create') && Gate::denies('employee_promotion_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model = new EmployeePromotion();
        $model->id = $request->input('crud_id', 0);
        $model->exists = true;
        $media = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
