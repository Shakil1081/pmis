@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.freedomFighteRelation.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.freedom-fighte-relations.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.freedomFighteRelation.fields.id') }}
                        </th>
                        <td>
                            {{ $freedomFighteRelation->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.freedomFighteRelation.fields.name_bn') }}
                        </th>
                        <td>
                            {{ $freedomFighteRelation->name_bn }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.freedomFighteRelation.fields.name_en') }}
                        </th>
                        <td>
                            {{ $freedomFighteRelation->name_en }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.freedom-fighte-relations.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection