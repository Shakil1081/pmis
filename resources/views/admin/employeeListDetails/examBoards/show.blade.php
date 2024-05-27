@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.examBoard.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.exam-boards.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.examBoard.fields.id') }}
                        </th>
                        <td>
                            {{ $examBoard->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.examBoard.fields.examination') }}
                        </th>
                        <td>
                            {{ $examBoard->examination->name_bn ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.examBoard.fields.name_bn') }}
                        </th>
                        <td>
                            {{ $examBoard->name_bn }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.examBoard.fields.name_en') }}
                        </th>
                        <td>
                            {{ $examBoard->name_en }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.examBoard.fields.description') }}
                        </th>
                        <td>
                            {{ $examBoard->description }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.exam-boards.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection