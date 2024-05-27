@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            {{ trans('global.create') }} {{ trans('cruds.division.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('admin.divisions.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="required" for="country_id">{{ trans('cruds.division.fields.country') }}</label>
                    <select class="form-select select2 {{ $errors->has('country') ? 'is-invalid' : '' }}" name="country_id"
                        id="country_id" required>
                        @foreach ($countries as $id => $entry)
                            <option value="{{ $id }}" {{ old('country_id') == $id ? 'selected' : '' }}>
                                {{ $entry }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('country'))
                        <div class="invalid-feedback">
                            {{ $errors->first('country') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.division.fields.country_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="name_bn">{{ trans('cruds.division.fields.name_bn') }}</label>
                    <input class="form-control {{ $errors->has('name_bn') ? 'is-invalid' : '' }}" type="text"
                        name="name_bn" id="name_bn" value="{{ old('name_bn', '') }}" required>
                    @if ($errors->has('name_bn'))
                        <div class="invalid-feedback">
                            {{ $errors->first('name_bn') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.division.fields.name_bn_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="name_en">{{ trans('cruds.division.fields.name_en') }}</label>
                    <input class="form-control {{ $errors->has('name_en') ? 'is-invalid' : '' }}" type="text"
                        name="name_en" id="name_en" value="{{ old('name_en', '') }}" required>
                    @if ($errors->has('name_en'))
                        <div class="invalid-feedback">
                            {{ $errors->first('name_en') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.division.fields.name_en_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="grocode">{{ trans('cruds.division.fields.grocode') }}</label>
                    <input class="form-control {{ $errors->has('grocode') ? 'is-invalid' : '' }}" type="text"
                        name="grocode" id="grocode" value="{{ old('grocode', '') }}">
                    @if ($errors->has('grocode'))
                        <div class="invalid-feedback">
                            {{ $errors->first('grocode') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.division.fields.grocode_helper') }}</span>
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
