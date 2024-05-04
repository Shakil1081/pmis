@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.batch.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.batches.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="batch_bn">{{ trans('cruds.batch.fields.batch_bn') }}</label>
                <input class="form-control {{ $errors->has('batch_bn') ? 'is-invalid' : '' }}" type="text" name="batch_bn" id="batch_bn" value="{{ old('batch_bn', '') }}" required>
                @if($errors->has('batch_bn'))
                    <div class="invalid-feedback">
                        {{ $errors->first('batch_bn') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.batch.fields.batch_bn_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="batch_en">{{ trans('cruds.batch.fields.batch_en') }}</label>
                <input class="form-control {{ $errors->has('batch_en') ? 'is-invalid' : '' }}" type="text" name="batch_en" id="batch_en" value="{{ old('batch_en', '') }}" required>
                @if($errors->has('batch_en'))
                    <div class="invalid-feedback">
                        {{ $errors->first('batch_en') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.batch.fields.batch_en_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection