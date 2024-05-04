@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.child.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.children.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.child.fields.employee') }}
                        </th>
                        <td>
                            {{ $child->employee->employeeid ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.child.fields.name_bn') }}
                        </th>
                        <td>
                            {{ $child->name_bn }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.child.fields.name_en') }}
                        </th>
                        <td>
                            {{ $child->name_en }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.child.fields.date_of_birth') }}
                        </th>
                        <td>
                            {{ $child->date_of_birth }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.child.fields.gender') }}
                        </th>
                        <td>
                            {{ $child->gender->name_bn ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.child.fields.nid_number') }}
                        </th>
                        <td>
                            {{ $child->nid_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.child.fields.passport_number') }}
                        </th>
                        <td>
                            {{ $child->passport_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.child.fields.complite_21') }}
                        </th>
                        <td>
                            {{ $child->complite_21 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.child.fields.birth_certificate') }}
                        </th>
                        <td>
                            @if($child->birth_certificate)
                                <a href="{{ $child->birth_certificate->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.children.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection