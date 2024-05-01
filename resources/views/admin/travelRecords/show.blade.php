@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.travelRecord.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.travel-records.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.travelRecord.fields.employee') }}
                        </th>
                        <td>
                            {{ $travelRecord->employee->employeeid ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.travelRecord.fields.country') }}
                        </th>
                        <td>
                            {{ $travelRecord->country->name_bn ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.travelRecord.fields.start_date') }}
                        </th>
                        <td>
                            {{ $travelRecord->start_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.travelRecord.fields.end_date') }}
                        </th>
                        <td>
                            {{ $travelRecord->end_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.travelRecord.fields.purpose') }}
                        </th>
                        <td>
                            {{ $travelRecord->purpose->name_bn ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.travelRecord.fields.travel_type') }}
                        </th>
                        <td>
                            {{ App\Models\TravelRecord::TRAVEL_TYPE_SELECT[$travelRecord->travel_type] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.travelRecord.fields.remark') }}
                        </th>
                        <td>
                            {{ $travelRecord->remark }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.travel-records.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection