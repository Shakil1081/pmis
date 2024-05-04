@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.otherServiceJob.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.other-service-jobs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.otherServiceJob.fields.id') }}
                        </th>
                        <td>
                            {{ $otherServiceJob->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.otherServiceJob.fields.employer') }}
                        </th>
                        <td>
                            {{ $otherServiceJob->employer }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.otherServiceJob.fields.address') }}
                        </th>
                        <td>
                            {{ $otherServiceJob->address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.otherServiceJob.fields.service_type') }}
                        </th>
                        <td>
                            {{ $otherServiceJob->service_type }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.otherServiceJob.fields.position') }}
                        </th>
                        <td>
                            {{ $otherServiceJob->position }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.otherServiceJob.fields.from') }}
                        </th>
                        <td>
                            {{ $otherServiceJob->from }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.otherServiceJob.fields.to') }}
                        </th>
                        <td>
                            {{ $otherServiceJob->to }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.otherServiceJob.fields.employee') }}
                        </th>
                        <td>
                            {{ $otherServiceJob->employee->employeeid ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.other-service-jobs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection