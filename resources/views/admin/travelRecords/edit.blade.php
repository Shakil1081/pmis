@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            {{ trans('global.edit') }} {{ trans('cruds.travelRecord.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('admin.travel-records.update', [$travelRecord->id]) }}"
                enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label class="required" for="employee_id">{{ trans('cruds.travelRecord.fields.employee') }}</label>
                    <select class="form-select select2 {{ $errors->has('employee') ? 'is-invalid' : '' }}" name="employee_id"
                        id="employee_id" required>
                        @foreach ($employees as $id => $entry)
                            <option value="{{ $id }}"
                                {{ (old('employee_id') ? old('employee_id') : $travelRecord->employee->id ?? '') == $id ? 'selected' : '' }}>
                                {{ $entry }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('employee'))
                        <div class="invalid-feedback">
                            {{ $errors->first('employee') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.travelRecord.fields.employee_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="country_id">{{ trans('cruds.travelRecord.fields.country') }}</label>
                    <select class="form-select select2 {{ $errors->has('country') ? 'is-invalid' : '' }}" name="country_id"
                        id="country_id">
                        @foreach ($countries as $id => $entry)
                            <option value="{{ $id }}"
                                {{ (old('country_id') ? old('country_id') : $travelRecord->country->id ?? '') == $id ? 'selected' : '' }}>
                                {{ $entry }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('country'))
                        <div class="invalid-feedback">
                            {{ $errors->first('country') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.travelRecord.fields.country_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="title">{{ trans('cruds.travelRecord.fields.title') }}</label>
                    <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text"
                        name="title" id="title" value="{{ old('title', $travelRecord->title) }}">
                    @if ($errors->has('title'))
                        <div class="invalid-feedback">
                            {{ $errors->first('title') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.travelRecord.fields.title_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="purpose_id">{{ trans('cruds.travelRecord.fields.purpose') }}</label>
                    <select class="form-select select2 {{ $errors->has('purpose') ? 'is-invalid' : '' }}" name="purpose_id"
                        id="purpose_id">
                        @foreach ($purposes as $id => $entry)
                            <option value="{{ $id }}"
                                {{ (old('purpose_id') ? old('purpose_id') : $travelRecord->purpose->id ?? '') == $id ? 'selected' : '' }}>
                                {{ $entry }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('purpose'))
                        <div class="invalid-feedback">
                            {{ $errors->first('purpose') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.travelRecord.fields.purpose_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="start_date">{{ trans('cruds.travelRecord.fields.start_date') }}</label>
                    <input class="form-control date {{ $errors->has('start_date') ? 'is-invalid' : '' }}" type="text"
                        name="start_date" id="start_date" value="{{ old('start_date', $travelRecord->start_date) }}"
                        required>
                    @if ($errors->has('start_date'))
                        <div class="invalid-feedback">
                            {{ $errors->first('start_date') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.travelRecord.fields.start_date_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="end_date">{{ trans('cruds.travelRecord.fields.end_date') }}</label>
                    <input class="form-control date {{ $errors->has('end_date') ? 'is-invalid' : '' }}" type="text"
                        name="end_date" id="end_date" value="{{ old('end_date', $travelRecord->end_date) }}" required>
                    @if ($errors->has('end_date'))
                        <div class="invalid-feedback">
                            {{ $errors->first('end_date') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.travelRecord.fields.end_date_helper') }}</span>
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
