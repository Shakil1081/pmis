@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.otherServiceJob.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.other-service-jobs.update", [$otherServiceJob->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="employer">{{ trans('cruds.otherServiceJob.fields.employer') }}</label>
                <input class="form-control {{ $errors->has('employer') ? 'is-invalid' : '' }}" type="text" name="employer" id="employer" value="{{ old('employer', $otherServiceJob->employer) }}">
                @if($errors->has('employer'))
                    <div class="invalid-feedback">
                        {{ $errors->first('employer') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.otherServiceJob.fields.employer_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="address">{{ trans('cruds.otherServiceJob.fields.address') }}</label>
                <textarea class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" name="address" id="address">{{ old('address', $otherServiceJob->address) }}</textarea>
                @if($errors->has('address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.otherServiceJob.fields.address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="service_type">{{ trans('cruds.otherServiceJob.fields.service_type') }}</label>
                <input class="form-control {{ $errors->has('service_type') ? 'is-invalid' : '' }}" type="text" name="service_type" id="service_type" value="{{ old('service_type', $otherServiceJob->service_type) }}">
                @if($errors->has('service_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('service_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.otherServiceJob.fields.service_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="position">{{ trans('cruds.otherServiceJob.fields.position') }}</label>
                <input class="form-control {{ $errors->has('position') ? 'is-invalid' : '' }}" type="text" name="position" id="position" value="{{ old('position', $otherServiceJob->position) }}">
                @if($errors->has('position'))
                    <div class="invalid-feedback">
                        {{ $errors->first('position') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.otherServiceJob.fields.position_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="from">{{ trans('cruds.otherServiceJob.fields.from') }}</label>
                <input class="form-control date {{ $errors->has('from') ? 'is-invalid' : '' }}" type="text" name="from" id="from" value="{{ old('from', $otherServiceJob->from) }}">
                @if($errors->has('from'))
                    <div class="invalid-feedback">
                        {{ $errors->first('from') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.otherServiceJob.fields.from_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="to">{{ trans('cruds.otherServiceJob.fields.to') }}</label>
                <input class="form-control {{ $errors->has('to') ? 'is-invalid' : '' }}" type="text" name="to" id="to" value="{{ old('to', $otherServiceJob->to) }}">
                @if($errors->has('to'))
                    <div class="invalid-feedback">
                        {{ $errors->first('to') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.otherServiceJob.fields.to_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="employee_id">{{ trans('cruds.otherServiceJob.fields.employee') }}</label>
                <select class="form-control select2 {{ $errors->has('employee') ? 'is-invalid' : '' }}" name="employee_id" id="employee_id" required>
                    @foreach($employees as $id => $entry)
                        <option value="{{ $id }}" {{ (old('employee_id') ? old('employee_id') : $otherServiceJob->employee->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('employee'))
                    <div class="invalid-feedback">
                        {{ $errors->first('employee') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.otherServiceJob.fields.employee_helper') }}</span>
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