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
                            {{ trans('cruds.criminalproDisciplinary.fields.government_order_no') }}
                        </th>
                        <td>
                            {{ $criminalproDisciplinary->government_order_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.criminalproDisciplinary.fields.court_name') }}
                        </th>
                        <td>
                            {{ $criminalproDisciplinary->court_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.criminalproDisciplinary.fields.court_orader') }}
                        </th>
                        <td>
                            @if($criminalproDisciplinary->court_orader)
                                <a href="{{ $criminalproDisciplinary->court_orader->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.criminalproDisciplinary.fields.date_of_prosecution') }}
                        </th>
                        <td>
                            {{ $criminalproDisciplinary->date_of_prosecution }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.criminalproDisciplinary.fields.description') }}
                        </th>
                        <td>
                            {!! $criminalproDisciplinary->description !!}
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