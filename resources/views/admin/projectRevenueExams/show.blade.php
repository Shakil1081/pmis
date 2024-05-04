@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.projectRevenueExam.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.project-revenue-exams.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.projectRevenueExam.fields.id') }}
                        </th>
                        <td>
                            {{ $projectRevenueExam->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.projectRevenueExam.fields.exam') }}
                        </th>
                        <td>
                            {{ $projectRevenueExam->exam->name_bn ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.projectRevenueExam.fields.exam_name_bn') }}
                        </th>
                        <td>
                            {{ $projectRevenueExam->exam_name_bn }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.projectRevenueExam.fields.exam_name_en') }}
                        </th>
                        <td>
                            {{ $projectRevenueExam->exam_name_en }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.projectRevenueExam.fields.upload') }}
                        </th>
                        <td>
                            @if($projectRevenueExam->upload)
                                <a href="{{ $projectRevenueExam->upload->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.project-revenue-exams.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection