@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.criminalProsecutionDerail.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.criminal-prosecution-derails.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.criminalProsecutionDerail.fields.id') }}
                        </th>
                        <td>
                            {{ $criminalProsecutionDerail->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.criminalProsecutionDerail.fields.criminal_prosecution') }}
                        </th>
                        <td>
                            {{ $criminalProsecutionDerail->criminal_prosecution->natureof_offence ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.criminalProsecutionDerail.fields.govt_order_no') }}
                        </th>
                        <td>
                            {{ $criminalProsecutionDerail->govt_order_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.criminalProsecutionDerail.fields.govt_order_date') }}
                        </th>
                        <td>
                            {{ $criminalProsecutionDerail->govt_order_date }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.criminal-prosecution-derails.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection