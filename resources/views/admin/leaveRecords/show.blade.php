@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.leaveRecord.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.leave-records.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.leaveRecord.fields.employee') }}
                        </th>
                        <td>
                            {{ $leaveRecord->employee->employeeid ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.leaveRecord.fields.start_date') }}
                        </th>
                        <td>
                            {{ $leaveRecord->start_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.leaveRecord.fields.end_date') }}
                        </th>
                        <td>
                            {{ $leaveRecord->end_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.leaveRecord.fields.reason') }}
                        </th>
                        <td>
                            {!! $leaveRecord->reason !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.leaveRecord.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\LeaveRecord::STATUS_SELECT[$leaveRecord->status] ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.leave-records.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection