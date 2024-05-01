@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.criminalProsecutione.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.criminal-prosecutiones.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.criminalProsecutione.fields.employee') }}
                        </th>
                        <td>
                            {{ $criminalProsecutione->employee->employeeid ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.criminalProsecutione.fields.natureof_offence') }}
                        </th>
                        <td>
                            {{ $criminalProsecutione->natureof_offence }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.criminalProsecutione.fields.government_order_no') }}
                        </th>
                        <td>
                            {{ $criminalProsecutione->government_order_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.criminalProsecutione.fields.government_order_date') }}
                        </th>
                        <td>
                            {{ $criminalProsecutione->government_order_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.criminalProsecutione.fields.court_name') }}
                        </th>
                        <td>
                            {{ $criminalProsecutione->court_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.criminalProsecutione.fields.court_order') }}
                        </th>
                        <td>
                            @if($criminalProsecutione->court_order)
                                <a href="{{ $criminalProsecutione->court_order->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.criminalProsecutione.fields.remzrk') }}
                        </th>
                        <td>
                            {!! $criminalProsecutione->remzrk !!}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.criminal-prosecutiones.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection