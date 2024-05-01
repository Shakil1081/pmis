@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.quotum.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.quota.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name_bn">{{ trans('cruds.quotum.fields.name_bn') }}</label>
                <input class="form-control {{ $errors->has('name_bn') ? 'is-invalid' : '' }}" type="text" name="name_bn" id="name_bn" value="{{ old('name_bn', '') }}" required>
                @if($errors->has('name_bn'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name_bn') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.quotum.fields.name_bn_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="name_en">{{ trans('cruds.quotum.fields.name_en') }}</label>
                <input class="form-control {{ $errors->has('name_en') ? 'is-invalid' : '' }}" type="text" name="name_en" id="name_en" value="{{ old('name_en', '') }}" required>
                @if($errors->has('name_en'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name_en') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.quotum.fields.name_en_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="remark">{{ trans('cruds.quotum.fields.remark') }}</label>
                <input class="form-control {{ $errors->has('remark') ? 'is-invalid' : '' }}" type="text" name="remark" id="remark" value="{{ old('remark', '') }}">
                @if($errors->has('remark'))
                    <div class="invalid-feedback">
                        {{ $errors->first('remark') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.quotum.fields.remark_helper') }}</span>
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