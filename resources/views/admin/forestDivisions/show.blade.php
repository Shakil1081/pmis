@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.forestDivision.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.forest-divisions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.forestDivision.fields.id') }}
                        </th>
                        <td>
                            {{ $forestDivision->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.forestDivision.fields.forest_state') }}
                        </th>
                        <td>
                            {{ $forestDivision->forest_state->name_bn ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.forestDivision.fields.name_bn') }}
                        </th>
                        <td>
                            {{ $forestDivision->name_bn }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.forestDivision.fields.name_en') }}
                        </th>
                        <td>
                            {{ $forestDivision->name_en }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.forest-divisions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection