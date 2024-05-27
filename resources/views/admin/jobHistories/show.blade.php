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
                            {{ trans('cruds.jobHistory.fields.level_1') }}
                        </th>
                        <td>
                            {{ $jobHistory->level_1 }}
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
                    <tr>
                        <th>
                            {{ trans('cruds.jobHistory.fields.institutename') }}
                        </th>
                        <td>
                            {{ $jobHistory->institutename }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.jobHistory.fields.academy_type') }}
                        </th>
                        <td>
                            {{ $jobHistory->academy_type }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.jobHistory.fields.acadaylocation') }}
                        </th>
                        <td>
                            {{ $jobHistory->acadaylocation }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.jobHistory.fields.posting_in_circle') }}
                        </th>
                        <td>
                            {{ $jobHistory->posting_in_circle }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.jobHistory.fields.postingindivision') }}
                        </th>
                        <td>
                            {{ $jobHistory->postingindivision }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.jobHistory.fields.posting_in_range') }}
                        </th>
                        <td>
                            {{ $jobHistory->posting_in_range }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.jobHistory.fields.circle_list') }}
                        </th>
                        <td>
                            {{ $jobHistory->circle_list->name_bn ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.jobHistory.fields.division_list') }}
                        </th>
                        <td>
                            {{ $jobHistory->division_list->name_bn ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.jobHistory.fields.range_list') }}
                        </th>
                        <td>
                            {{ $jobHistory->range_list->name_bn ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.jobHistory.fields.beat_list') }}
                        </th>
                        <td>
                            {{ $jobHistory->beat_list->name_bn ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.jobHistory.fields.office_unit') }}
                        </th>
                        <td>
                            {{ $jobHistory->office_unit->name_bn ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.jobHistory.fields.go_upload') }}
                        </th>
                        <td>
                            @if($jobHistory->go_upload)
                                <a href="{{ $jobHistory->go_upload->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
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