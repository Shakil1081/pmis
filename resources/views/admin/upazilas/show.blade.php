@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.upazila.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.upazilas.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.upazila.fields.district') }}
                        </th>
                        <td>
                            {{ $upazila->district->name_bn ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.upazila.fields.name_bn') }}
                        </th>
                        <td>
                            {{ $upazila->name_bn }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.upazila.fields.name_en') }}
                        </th>
                        <td>
                            {{ $upazila->name_en }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.upazila.fields.grocode') }}
                        </th>
                        <td>
                            {{ $upazila->grocode }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.upazila.fields.forest_state') }}
                        </th>
                        <td>
                            {{ $upazila->forest_state->name_bn ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.upazilas.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection