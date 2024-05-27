@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.grade.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.grades.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.grade.fields.name_bn') }}
                        </th>
                        <td>
                            {{ $grade->name_bn }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.grade.fields.name_en') }}
                        </th>
                        <td>
                            {{ $grade->name_en }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.grade.fields.salary_range') }}
                        </th>
                        <td>
                            {{ $grade->salary_range }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.grade.fields.current_basic_pay') }}
                        </th>
                        <td>
                            {{ $grade->current_basic_pay }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.grade.fields.basic_pay_scale') }}
                        </th>
                        <td>
                            {{ $grade->basic_pay_scale }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.grades.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection