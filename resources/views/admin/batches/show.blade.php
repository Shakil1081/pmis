@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.batch.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.batches.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.batch.fields.id') }}
                        </th>
                        <td>
                            {{ $batch->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.batch.fields.batch_bn') }}
                        </th>
                        <td>
                            {{ $batch->batch_bn }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.batch.fields.batch_en') }}
                        </th>
                        <td>
                            {{ $batch->batch_en }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.batches.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection