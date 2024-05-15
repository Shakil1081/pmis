@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.foreignTravelPersonal.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.foreign-travel-personals.update", [$foreignTravelPersonal->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="title">{{ trans('cruds.foreignTravelPersonal.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', $foreignTravelPersonal->title) }}">
                @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.foreignTravelPersonal.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="country_id">{{ trans('cruds.foreignTravelPersonal.fields.country') }}</label>
                <select class="form-control select2 {{ $errors->has('country') ? 'is-invalid' : '' }}" name="country_id" id="country_id">
                    @foreach($countries as $id => $entry)
                        <option value="{{ $id }}" {{ (old('country_id') ? old('country_id') : $foreignTravelPersonal->country->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('country'))
                    <div class="invalid-feedback">
                        {{ $errors->first('country') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.foreignTravelPersonal.fields.country_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="purpose_id">{{ trans('cruds.foreignTravelPersonal.fields.purpose') }}</label>
                <select class="form-control select2 {{ $errors->has('purpose') ? 'is-invalid' : '' }}" name="purpose_id" id="purpose_id" required>
                    @foreach($purposes as $id => $entry)
                        <option value="{{ $id }}" {{ (old('purpose_id') ? old('purpose_id') : $foreignTravelPersonal->purpose->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('purpose'))
                    <div class="invalid-feedback">
                        {{ $errors->first('purpose') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.foreignTravelPersonal.fields.purpose_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="from_date">{{ trans('cruds.foreignTravelPersonal.fields.from_date') }}</label>
                <input class="form-control date {{ $errors->has('from_date') ? 'is-invalid' : '' }}" type="text" name="from_date" id="from_date" value="{{ old('from_date', $foreignTravelPersonal->from_date) }}">
                @if($errors->has('from_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('from_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.foreignTravelPersonal.fields.from_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="to_date">{{ trans('cruds.foreignTravelPersonal.fields.to_date') }}</label>
                <input class="form-control date {{ $errors->has('to_date') ? 'is-invalid' : '' }}" type="text" name="to_date" id="to_date" value="{{ old('to_date', $foreignTravelPersonal->to_date) }}">
                @if($errors->has('to_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('to_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.foreignTravelPersonal.fields.to_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="leave_id">{{ trans('cruds.foreignTravelPersonal.fields.leave') }}</label>
                <select class="form-control select2 {{ $errors->has('leave') ? 'is-invalid' : '' }}" name="leave_id" id="leave_id">
                    @foreach($leaves as $id => $entry)
                        <option value="{{ $id }}" {{ (old('leave_id') ? old('leave_id') : $foreignTravelPersonal->leave->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('leave'))
                    <div class="invalid-feedback">
                        {{ $errors->first('leave') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.foreignTravelPersonal.fields.leave_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="employee_id">{{ trans('cruds.foreignTravelPersonal.fields.employee') }}</label>
                <select class="form-control select2 {{ $errors->has('employee') ? 'is-invalid' : '' }}" name="employee_id" id="employee_id" required>
                    @foreach($employees as $id => $entry)
                        <option value="{{ $id }}" {{ (old('employee_id') ? old('employee_id') : $foreignTravelPersonal->employee->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('employee'))
                    <div class="invalid-feedback">
                        {{ $errors->first('employee') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.foreignTravelPersonal.fields.employee_helper') }}</span>
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