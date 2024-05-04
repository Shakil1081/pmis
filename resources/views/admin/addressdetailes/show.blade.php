@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.addressdetaile.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.addressdetailes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.addressdetaile.fields.employee') }}
                        </th>
                        <td>
                            {{ $addressdetaile->employee->employeeid ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.addressdetaile.fields.address_type') }}
                        </th>
                        <td>
                            {{ App\Models\Addressdetaile::ADDRESS_TYPE_SELECT[$addressdetaile->address_type] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.addressdetaile.fields.flat_house') }}
                        </th>
                        <td>
                            {{ $addressdetaile->flat_house }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.addressdetaile.fields.post_office') }}
                        </th>
                        <td>
                            {{ $addressdetaile->post_office }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.addressdetaile.fields.post_code') }}
                        </th>
                        <td>
                            {{ $addressdetaile->post_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.addressdetaile.fields.thana_upazila') }}
                        </th>
                        <td>
                            {{ $addressdetaile->thana_upazila->name_bn ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.addressdetaile.fields.phone_number') }}
                        </th>
                        <td>
                            {{ $addressdetaile->phone_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.addressdetaile.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\Addressdetaile::STATUS_SELECT[$addressdetaile->status] ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.addressdetailes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection