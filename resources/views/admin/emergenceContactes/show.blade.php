@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.emergenceContacte.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.emergence-contactes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.emergenceContacte.fields.id') }}
                        </th>
                        <td>
                            {{ $emergenceContacte->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.emergenceContacte.fields.contact_person_name') }}
                        </th>
                        <td>
                            {{ $emergenceContacte->contact_person_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.emergenceContacte.fields.contact_person_relation') }}
                        </th>
                        <td>
                            {{ $emergenceContacte->contact_person_relation }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.emergenceContacte.fields.contact_person_number') }}
                        </th>
                        <td>
                            {{ $emergenceContacte->contact_person_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.emergenceContacte.fields.employee') }}
                        </th>
                        <td>
                            {{ $emergenceContacte->employee->employeeid ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.emergence-contactes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection