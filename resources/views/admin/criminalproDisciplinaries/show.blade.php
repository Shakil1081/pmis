@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.criminalproDisciplinary.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.criminalpro-disciplinaries.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.criminalproDisciplinary.fields.criminalprosecutione') }}
                        </th>
                        <td>
                            {{ $criminalproDisciplinary->criminalprosecutione->natureof_offence ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.criminalproDisciplinary.fields.judgement_type') }}
                        </th>
                        <td>
                            {{ $criminalproDisciplinary->judgement_type }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.criminalproDisciplinary.fields.government_order_no') }}
                        </th>
                        <td>
                            {{ $criminalproDisciplinary->government_order_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.criminalproDisciplinary.fields.order_upload_file') }}
                        </th>
                        <td>
                            @if($criminalproDisciplinary->order_upload_file)
                                <a href="{{ $criminalproDisciplinary->order_upload_file->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.criminalproDisciplinary.fields.remarks') }}
                        </th>
                        <td>
                            {{ $criminalproDisciplinary->remarks }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.criminalpro-disciplinaries.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection