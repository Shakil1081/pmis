@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            {{ trans('global.edit') }} {{ trans('cruds.language.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('admin.languages.update', [$language->id]) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label class="required" for="employee_id">{{ trans('cruds.language.fields.employee') }}</label>
                    <select class="form-select select2 {{ $errors->has('employee') ? 'is-invalid' : '' }}" name="employee_id"
                        id="employee_id" required>
                        @foreach ($employees as $id => $entry)
                            <option value="{{ $id }}"
                                {{ (old('employee_id') ? old('employee_id') : $language->employee->id ?? '') == $id ? 'selected' : '' }}>
                                {{ $entry }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('employee'))
                        <div class="invalid-feedback">
                            {{ $errors->first('employee') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.language.fields.employee_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="language">{{ trans('cruds.language.fields.language') }}</label>
                    <input class="form-control {{ $errors->has('language') ? 'is-invalid' : '' }}" type="text"
                        name="language" id="language" value="{{ old('language', $language->language) }}">
                    @if ($errors->has('language'))
                        <div class="invalid-feedback">
                            {{ $errors->first('language') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.language.fields.language_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="read_id">{{ trans('cruds.language.fields.read') }}</label>
                    <select class="form-select select2 {{ $errors->has('read') ? 'is-invalid' : '' }}" name="read_id"
                        id="read_id">
                        @foreach ($reads as $id => $entry)
                            <option value="{{ $id }}"
                                {{ (old('read_id') ? old('read_id') : $language->read->id ?? '') == $id ? 'selected' : '' }}>
                                {{ $entry }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('read'))
                        <div class="invalid-feedback">
                            {{ $errors->first('read') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.language.fields.read_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="write_id">{{ trans('cruds.language.fields.write') }}</label>
                    <select class="form-select select2 {{ $errors->has('write') ? 'is-invalid' : '' }}" name="write_id"
                        id="write_id">
                        @foreach ($writes as $id => $entry)
                            <option value="{{ $id }}"
                                {{ (old('write_id') ? old('write_id') : $language->write->id ?? '') == $id ? 'selected' : '' }}>
                                {{ $entry }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('write'))
                        <div class="invalid-feedback">
                            {{ $errors->first('write') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.language.fields.write_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="speak_id">{{ trans('cruds.language.fields.speak') }}</label>
                    <select class="form-select select2 {{ $errors->has('speak') ? 'is-invalid' : '' }}" name="speak_id"
                        id="speak_id">
                        @foreach ($speaks as $id => $entry)
                            <option value="{{ $id }}"
                                {{ (old('speak_id') ? old('speak_id') : $language->speak->id ?? '') == $id ? 'selected' : '' }}>
                                {{ $entry }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('speak'))
                        <div class="invalid-feedback">
                            {{ $errors->first('speak') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.language.fields.speak_helper') }}</span>
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
