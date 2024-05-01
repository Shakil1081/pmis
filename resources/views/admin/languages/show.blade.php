@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.language.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.languages.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.language.fields.employee') }}
                        </th>
                        <td>
                            {{ $language->employee->employeeid ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.language.fields.language') }}
                        </th>
                        <td>
                            {{ $language->language }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.language.fields.read') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $language->read ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.language.fields.write') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $language->write ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.language.fields.speak') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $language->speak ? 'checked' : '' }}>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.languages.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection