@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.professionale.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.professionales.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.professionale.fields.employee') }}
                        </th>
                        <td>
                            {{ $professionale->employee->employeeid ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.professionale.fields.qualification_title') }}
                        </th>
                        <td>
                            {{ $professionale->qualification_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.professionale.fields.institution') }}
                        </th>
                        <td>
                            {{ $professionale->institution }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.professionale.fields.from_date') }}
                        </th>
                        <td>
                            {{ $professionale->from_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.professionale.fields.to_date') }}
                        </th>
                        <td>
                            {{ $professionale->to_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.professionale.fields.passing_year') }}
                        </th>
                        <td>
                            {{ $professionale->passing_year }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.professionales.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection