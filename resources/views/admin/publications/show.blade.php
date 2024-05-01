@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.publication.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.publications.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.publication.fields.title') }}
                        </th>
                        <td>
                            {{ $publication->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.publication.fields.publication_type') }}
                        </th>
                        <td>
                            {{ App\Models\Publication::PUBLICATION_TYPE_SELECT[$publication->publication_type] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.publication.fields.publication_media') }}
                        </th>
                        <td>
                            {{ $publication->publication_media }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.publication.fields.publication_date') }}
                        </th>
                        <td>
                            {{ $publication->publication_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.publication.fields.publication_link') }}
                        </th>
                        <td>
                            {{ $publication->publication_link }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.publication.fields.description') }}
                        </th>
                        <td>
                            {!! $publication->description !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.publication.fields.employee') }}
                        </th>
                        <td>
                            {{ $publication->employee->employeeid ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.publications.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection