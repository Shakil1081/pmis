@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.serviceParticular.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.service-particulars.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.serviceParticular.fields.id') }}
                        </th>
                        <td>
                            {{ $serviceParticular->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.serviceParticular.fields.designation') }}
                        </th>
                        <td>
                            {{ $serviceParticular->designation->name_bn ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.serviceParticular.fields.designation_status') }}
                        </th>
                        <td>
                            {{ $serviceParticular->designation_status }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.serviceParticular.fields.office_organization_institute') }}
                        </th>
                        <td>
                            {{ $serviceParticular->office_organization_institute }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.serviceParticular.fields.joining_date') }}
                        </th>
                        <td>
                            {{ $serviceParticular->joining_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.serviceParticular.fields.release_date') }}
                        </th>
                        <td>
                            {{ $serviceParticular->release_date }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.service-particulars.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection