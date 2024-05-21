<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyLeaveRecordRequest;
use App\Http\Requests\StoreLeaveRecordRequest;
use App\Http\Requests\UpdateLeaveRecordRequest;
use App\Models\EmployeeList;
use App\Models\LeaveCategory;
use App\Models\LeaveRecord;
use App\Models\LeaveType;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class LeaveRecordController extends Controller
{
    use MediaUploadingTrait, CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('leave_record_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = LeaveRecord::with(['employee', 'type_of_leave', 'leave_category'])->select(sprintf('%s.*', (new LeaveRecord)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'leave_record_show';
                $editGate      = 'leave_record_edit';
                $deleteGate    = 'leave_record_delete';
                $crudRoutePart = 'leave-records';

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

            $table->addColumn('type_of_leave_name_bn', function ($row) {
                return $row->type_of_leave ? $row->type_of_leave->name_bn : '';
            });

            $table->addColumn('leave_category_name_bn', function ($row) {
                return $row->leave_category ? $row->leave_category->name_bn : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'employee', 'type_of_leave', 'leave_category']);

            return $table->make(true);
        }

        return view('admin.leaveRecords.index');
    }

    public function create()
    {
        abort_if(Gate::denies('leave_record_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = EmployeeList::pluck('employeeid', 'id')->prepend(trans('global.pleaseSelect'), '');

        $type_of_leaves = LeaveType::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $leave_categories = LeaveCategory::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.leaveRecords.create', compact('employees', 'leave_categories', 'type_of_leaves'));
    }

    public function store(StoreLeaveRecordRequest $request)
    {
        $leaveRecord = LeaveRecord::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $leaveRecord->id]);
        }
        return redirect()->back()->with('status', 'Action successful!');
       // return redirect()->route('admin.leave-records.index');
    }

    public function edit(LeaveRecord $leaveRecord)
    {
        abort_if(Gate::denies('leave_record_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = EmployeeList::pluck('employeeid', 'id')->prepend(trans('global.pleaseSelect'), '');

        $type_of_leaves = LeaveType::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $leave_categories = LeaveCategory::pluck('name_bn', 'id')->prepend(trans('global.pleaseSelect'), '');

        $leaveRecord->load('employee', 'type_of_leave', 'leave_category');

        return view('admin.leaveRecords.edit', compact('employees', 'leaveRecord', 'leave_categories', 'type_of_leaves'));
    }

    public function update(UpdateLeaveRecordRequest $request, LeaveRecord $leaveRecord)
    {
        $leaveRecord->update($request->all());

        return redirect()->route('admin.leave-records.index');
    }

    public function show(LeaveRecord $leaveRecord)
    {
        abort_if(Gate::denies('leave_record_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $leaveRecord->load('employee', 'type_of_leave', 'leave_category');

        return view('admin.leaveRecords.show', compact('leaveRecord'));
    }

    public function destroy(LeaveRecord $leaveRecord)
    {
        abort_if(Gate::denies('leave_record_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $leaveRecord->delete();

        return back();
    }

    public function massDestroy(MassDestroyLeaveRecordRequest $request)
    {
        $leaveRecords = LeaveRecord::find(request('ids'));

        foreach ($leaveRecords as $leaveRecord) {
            $leaveRecord->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('leave_record_create') && Gate::denies('leave_record_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new LeaveRecord();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
