@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.foreignTravelPersonal.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.foreign-travel-personals.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.foreignTravelPersonal.fields.id') }}
                        </th>
                        <td>
                            {{ $foreignTravelPersonal->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.foreignTravelPersonal.fields.country') }}
                        </th>
                        <td>
                            {{ $foreignTravelPersonal->country->name_bn ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.foreignTravelPersonal.fields.purpose') }}
                        </th>
                        <td>
                            {{ $foreignTravelPersonal->purpose->name_bn ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.foreignTravelPersonal.fields.from_date') }}
                        </th>
                        <td>
                            {{ $foreignTravelPersonal->from_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.foreignTravelPersonal.fields.to_date') }}
                        </th>
                        <td>
                            {{ $foreignTravelPersonal->to_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.foreignTravelPersonal.fields.employee') }}
                        </th>
                        <td>
                            {{ $foreignTravelPersonal->employee->employeeid ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.foreignTravelPersonal.fields.leave_permission') }}
                        </th>
                        <td>
                            @if($foreignTravelPersonal->leave_permission)
                                <a href="{{ $foreignTravelPersonal->leave_permission->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.foreignTravelPersonal.fields.title') }}
                        </th>
                        <td>
                            {{ $foreignTravelPersonal->title->name_bn ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.foreign-travel-personals.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection