@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.jobHistory.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.job-histories.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.jobHistory.fields.id') }}
                        </th>
                        <td>
                            {{ $jobHistory->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.jobHistory.fields.institute_name') }}
                        </th>
                        <td>
                            {{ $jobHistory->institute_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.jobHistory.fields.job_type') }}
                        </th>
                        <td>
                            {{ $jobHistory->job_type->name_bn ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.jobHistory.fields.designation') }}
                        </th>
                        <td>
                            {{ $jobHistory->designation->name_bn ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.jobHistory.fields.joining_date') }}
                        </th>
                        <td>
                            {{ $jobHistory->joining_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.jobHistory.fields.release_date') }}
                        </th>
                        <td>
                            {{ $jobHistory->release_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.jobHistory.fields.level_1') }}
                        </th>
                        <td>
                            {{ $jobHistory->level_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.jobHistory.fields.level_2') }}
                        </th>
                        <td>
                            {{ $jobHistory->level_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.jobHistory.fields.level_3') }}
                        </th>
                        <td>
                            {{ $jobHistory->level_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.jobHistory.fields.level_4') }}
                        </th>
                        <td>
                            {{ $jobHistory->level_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.jobHistory.fields.level_5') }}
                        </th>
                        <td>
                            {{ $jobHistory->level_5 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.jobHistory.fields.employee') }}
                        </th>
                        <td>
                            {{ $jobHistory->employee->employeeid ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.jobHistory.fields.grade') }}
                        </th>
                        <td>
                            {{ $jobHistory->grade->name_bn ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.job-histories.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection