<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyLeaveRecordRequest;
use App\Http\Requests\StoreLeaveRecordRequest;
use App\Http\Requests\UpdateLeaveRecordRequest;
use App\Models\EmployeeList;
use App\Models\LeaveRecord;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class LeaveRecordController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('leave_record_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $leaveRecords = LeaveRecord::with(['employee'])->get();

        return view('admin.leaveRecords.index', compact('leaveRecords'));
    }

    public function create()
    {
        abort_if(Gate::denies('leave_record_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = EmployeeList::pluck('employeeid', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.leaveRecords.create', compact('employees'));
    }

    public function store(StoreLeaveRecordRequest $request)
    {
        $leaveRecord = LeaveRecord::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $leaveRecord->id]);
        }

        return redirect()->route('admin.leave-records.index');
    }

    public function edit(LeaveRecord $leaveRecord)
    {
        abort_if(Gate::denies('leave_record_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = EmployeeList::pluck('employeeid', 'id')->prepend(trans('global.pleaseSelect'), '');

        $leaveRecord->load('employee');

        return view('admin.leaveRecords.edit', compact('employees', 'leaveRecord'));
    }

    public function update(UpdateLeaveRecordRequest $request, LeaveRecord $leaveRecord)
    {
        $leaveRecord->update($request->all());

        return redirect()->route('admin.leave-records.index');
    }

    public function show(LeaveRecord $leaveRecord)
    {
        abort_if(Gate::denies('leave_record_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $leaveRecord->load('employee');

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
