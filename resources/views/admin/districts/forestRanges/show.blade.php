@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.forestRange.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.forest-ranges.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.forestRange.fields.id') }}
                        </th>
                        <td>
                            {{ $forestRange->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.forestRange.fields.forest_state') }}
                        </th>
                        <td>
                            {{ $forestRange->forest_state->name_bn ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.forestRange.fields.status') }}
                        </th>
                        <td>
                            {{ $forestRange->status->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.forestRange.fields.forest_division') }}
                        </th>
                        <td>
                            {{ $forestRange->forest_division->name_bn ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.forestRange.fields.name_bn') }}
                        </th>
                        <td>
                            {{ $forestRange->name_bn }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.forestRange.fields.name_en') }}
                        </th>
                        <td>
                            {{ $forestRange->name_en }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.forestRange.fields.forest_division_bbs_code') }}
                        </th>
                        <td>
                            {{ $forestRange->forest_division_bbs_code }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.forest-ranges.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection