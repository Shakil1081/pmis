@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.educationInformatione.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.education-informationes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.educationInformatione.fields.name_of_exam') }}
                        </th>
                        <td>
                            {{ $educationInformatione->name_of_exam->name_bn ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.educationInformatione.fields.exam_board') }}
                        </th>
                        <td>
                            {{ $educationInformatione->exam_board->name_bn ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.educationInformatione.fields.concentration_major_group') }}
                        </th>
                        <td>
                            {{ $educationInformatione->concentration_major_group }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.educationInformatione.fields.school_university_name') }}
                        </th>
                        <td>
                            {{ $educationInformatione->school_university_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.educationInformatione.fields.result') }}
                        </th>
                        <td>
                            {{ $educationInformatione->result->name_bn ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.educationInformatione.fields.passing_year') }}
                        </th>
                        <td>
                            {{ $educationInformatione->passing_year }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.educationInformatione.fields.achievement_types') }}
                        </th>
                        <td>
                            {{ $educationInformatione->achievement_types->name_bn ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.educationInformatione.fields.achivement') }}
                        </th>
                        <td>
                            {{ $educationInformatione->achivement }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.educationInformatione.fields.catificarte') }}
                        </th>
                        <td>
                            @if($educationInformatione->catificarte)
                                <a href="{{ $educationInformatione->catificarte->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.educationInformatione.fields.employee') }}
                        </th>
                        <td>
                            {{ $educationInformatione->employee->employeeid ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.educationInformatione.fields.exam_degree') }}
                        </th>
                        <td>
                            {{ $educationInformatione->exam_degree }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.educationInformatione.fields.cgpa') }}
                        </th>
                        <td>
                            {{ $educationInformatione->cgpa }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.education-informationes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection