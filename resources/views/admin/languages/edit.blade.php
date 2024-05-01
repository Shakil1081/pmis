@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.language.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.languages.update", [$language->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="employee_id">{{ trans('cruds.language.fields.employee') }}</label>
                <select class="form-control select2 {{ $errors->has('employee') ? 'is-invalid' : '' }}" name="employee_id" id="employee_id" required>
                    @foreach($employees as $id => $entry)
                        <option value="{{ $id }}" {{ (old('employee_id') ? old('employee_id') : $language->employee->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('employee'))
                    <div class="invalid-feedback">
                        {{ $errors->first('employee') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.language.fields.employee_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="language">{{ trans('cruds.language.fields.language') }}</label>
                <input class="form-control {{ $errors->has('language') ? 'is-invalid' : '' }}" type="text" name="language" id="language" value="{{ old('language', $language->language) }}">
                @if($errors->has('language'))
                    <div class="invalid-feedback">
                        {{ $errors->first('language') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.language.fields.language_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('read') ? 'is-invalid' : '' }}">
                    <input class="form-check-input" type="checkbox" name="read" id="read" value="1" {{ $language->read || old('read', 0) === 1 ? 'checked' : '' }} required>
                    <label class="required form-check-label" for="read">{{ trans('cruds.language.fields.read') }}</label>
                </div>
                @if($errors->has('read'))
                    <div class="invalid-feedback">
                        {{ $errors->first('read') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.language.fields.read_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('write') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="write" value="0">
                    <input class="form-check-input" type="checkbox" name="write" id="write" value="1" {{ $language->write || old('write', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="write">{{ trans('cruds.language.fields.write') }}</label>
                </div>
                @if($errors->has('write'))
                    <div class="invalid-feedback">
                        {{ $errors->first('write') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.language.fields.write_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('speak') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="speak" value="0">
                    <input class="form-check-input" type="checkbox" name="speak" id="speak" value="1" {{ $language->speak || old('speak', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="speak">{{ trans('cruds.language.fields.speak') }}</label>
                </div>
                @if($errors->has('speak'))
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