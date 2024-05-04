@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.award.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.awards.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.award.fields.id') }}
                        </th>
                        <td>
                            {{ $award->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.award.fields.title') }}
                        </th>
                        <td>
                            {{ $award->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.award.fields.ground_area') }}
                        </th>
                        <td>
                            {{ $award->ground_area }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.award.fields.date') }}
                        </th>
                        <td>
                            {{ $award->date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.award.fields.certificate') }}
                        </th>
                        <td>
                            @if($award->certificate)
                                <a href="{{ $award->certificate->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.award.fields.employee') }}
                        </th>
                        <td>
                            {{ $award->employee->employeeid ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.awards.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection