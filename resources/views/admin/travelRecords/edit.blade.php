@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            {{ trans('global.edit') }} {{ trans('cruds.travelRecord.title_singular') }}
            <br><strong class="text-dark classname">
                @if (app()->getLocale() === 'bn')
                    {{ trans('cruds.employeeList.fields.fullname_bn') }}:{{ $travelRecord->employee->fullname_bn }}
                    &nbsp;
                    {{ trans('cruds.employeeList.fields.employeeid') }}:{{ $travelRecord->employee->employeeid }}
                @else
                    {{ trans('cruds.employeeList.fields.fullname_en') }}:{{ $travelRecord->employee->fullname_en }}
                    &nbsp;
                    {{ trans('cruds.employeeList.fields.employeeid') }}:{{ $travelRecord->employee->employeeid }}
                @endif
            </strong>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('admin.travel-records.update', [$travelRecord->id]) }}"
                enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row row-cols-3">
                    <x-hidden-input name="employee_id" value="{{ $travelRecord->employee->id }}" />
                    <div class="form-group">
                        <label for="country_id">{{ trans('cruds.travelRecord.fields.country') }}</label>
                        <select class="form-control select2 {{ $errors->has('country') ? 'is-invalid' : '' }}"
                            name="country_id" id="country_id">
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
                        <label for="purpose_id">{{ trans('cruds.travelRecord.fields.purpose') }}</label>
                        <select class="form-control select2 {{ $errors->has('purpose') ? 'is-invalid' : '' }}"
                            name="purpose_id" id="purpose_id">
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
                        <label class="required"
                            for="start_date">{{ trans('cruds.travelRecord.fields.start_date') }}</label>
                        <input class="form-control date {{ $errors->has('start_date') ? 'is-invalid' : '' }}"
                            type="text" name="start_date" id="start_date"
                            value="{{ old('start_date', $travelRecord->start_date) }}" required>
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
                        <label class="required" for="title_id">{{ trans('cruds.travelRecord.fields.title') }}</label>
                        <select class="form-control select2 {{ $errors->has('title') ? 'is-invalid' : '' }}"
                            name="title_id" id="title_id" required>
                            @foreach ($titles as $id => $entry)
                                <option value="{{ $id }}"
                                    {{ (old('title_id') ? old('title_id') : $travelRecord->title->id ?? '') == $id ? 'selected' : '' }}>
                                    {{ $entry }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('title'))
                            <div class="invalid-feedback">
                                {{ $errors->first('title') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.travelRecord.fields.title_helper') }}</span>
                    </div>
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
