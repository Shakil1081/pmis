@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.acrMonitoring.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.acr-monitorings.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.acrMonitoring.fields.employee') }}
                        </th>
                        <td>
                            {{ $acrMonitoring->employee->employeeid ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.acrMonitoring.fields.year') }}
                        </th>
                        <td>
                            {{ $acrMonitoring->year }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.acrMonitoring.fields.reviewer') }}
                        </th>
                        <td>
                            {{ $acrMonitoring->reviewer }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.acrMonitoring.fields.review_date') }}
                        </th>
                        <td>
                            {{ $acrMonitoring->review_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.acrMonitoring.fields.remarks') }}
                        </th>
                        <td>
                            {!! $acrMonitoring->remarks !!}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.acr-monitorings.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection