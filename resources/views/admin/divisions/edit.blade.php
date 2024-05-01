@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.division.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.divisions.update", [$division->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="name_bn">{{ trans('cruds.division.fields.name_bn') }}</label>
                <input class="form-control {{ $errors->has('name_bn') ? 'is-invalid' : '' }}" type="text" name="name_bn" id="name_bn" value="{{ old('name_bn', $division->name_bn) }}" required>
                @if($errors->has('name_bn'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name_bn') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.division.fields.name_bn_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="name_en">{{ trans('cruds.division.fields.name_en') }}</label>
                <input class="form-control {{ $errors->has('name_en') ? 'is-invalid' : '' }}" type="text" name="name_en" id="name_en" value="{{ old('name_en', $division->name_en) }}" required>
                @if($errors->has('name_en'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name_en') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.division.fields.name_en_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="geocode">{{ trans('cruds.division.fields.geocode') }}</label>
                <input class="form-control {{ $errors->has('geocode') ? 'is-invalid' : '' }}" type="text" name="geocode" id="geocode" value="{{ old('geocode', $division->geocode) }}">
                @if($errors->has('geocode'))
                    <div class="invalid-feedback">
                        {{ $errors->first('geocode') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.division.fields.geocode_helper') }}</span>
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