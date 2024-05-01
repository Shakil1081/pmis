@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.spouseInformatione.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.spouse-informationes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.spouseInformatione.fields.employee') }}
                        </th>
                        <td>
                            {{ $spouseInformatione->employee->employeeid ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.spouseInformatione.fields.name_bn') }}
                        </th>
                        <td>
                            {{ $spouseInformatione->name_bn }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.spouseInformatione.fields.name_en') }}
                        </th>
                        <td>
                            {{ $spouseInformatione->name_en }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.spouseInformatione.fields.nid_upload') }}
                        </th>
                        <td>
                            @if($spouseInformatione->nid_upload)
                                <a href="{{ $spouseInformatione->nid_upload->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.spouseInformatione.fields.date_of_birth') }}
                        </th>
                        <td>
                            {{ $spouseInformatione->date_of_birth }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.spouseInformatione.fields.occupation') }}
                        </th>
                        <td>
                            {{ $spouseInformatione->occupation }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.spouseInformatione.fields.office_address') }}
                        </th>
                        <td>
                            {{ $spouseInformatione->office_address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.spouseInformatione.fields.phone_number') }}
                        </th>
                        <td>
                            {{ $spouseInformatione->phone_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.spouseInformatione.fields.present_addess') }}
                        </th>
                        <td>
                            {!! $spouseInformatione->present_addess !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.spouseInformatione.fields.permanent_addess') }}
                        </th>
                        <td>
                            {!! $spouseInformatione->permanent_addess !!}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.spouse-informationes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection