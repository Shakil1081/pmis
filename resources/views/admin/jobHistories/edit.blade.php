@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            {{ trans('global.edit') }} {{ trans('cruds.jobHistory.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('admin.job-histories.update', [$jobHistory->id]) }}"
                enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label class="required" for="institute_name">{{ trans('cruds.jobHistory.fields.institute_name') }}</label>
                    <input class="form-control {{ $errors->has('institute_name') ? 'is-invalid' : '' }}" type="text"
                        name="institute_name" id="institute_name"
                        value="{{ old('institute_name', $jobHistory->institute_name) }}" required>
                    @if ($errors->has('institute_name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('institute_name') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.jobHistory.fields.institute_name_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="job_type_id">{{ trans('cruds.jobHistory.fields.job_type') }}</label>
                    <select class="form-select select2 {{ $errors->has('job_type') ? 'is-invalid' : '' }}"
                        name="job_type_id" id="job_type_id">
                        @foreach ($job_types as $id => $entry)
                            <option value="{{ $id }}"
                                {{ (old('job_type_id') ? old('job_type_id') : $jobHistory->job_type->id ?? '') == $id ? 'selected' : '' }}>
                                {{ $entry }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('job_type'))
                        <div class="invalid-feedback">
                            {{ $errors->first('job_type') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.jobHistory.fields.job_type_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="designation_id">{{ trans('cruds.jobHistory.fields.designation') }}</label>
                    <select class="form-select select2 {{ $errors->has('designation') ? 'is-invalid' : '' }}"
                        name="designation_id" id="designation_id">
                        @foreach ($designations as $id => $entry)
                            <option value="{{ $id }}"
                                {{ (old('designation_id') ? old('designation_id') : $jobHistory->designation->id ?? '') == $id ? 'selected' : '' }}>
                                {{ $entry }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('designation'))
                        <div class="invalid-feedback">
                            {{ $errors->first('designation') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.jobHistory.fields.designation_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="joining_date">{{ trans('cruds.jobHistory.fields.joining_date') }}</label>
                    <input class="form-control date {{ $errors->has('joining_date') ? 'is-invalid' : '' }}" type="text"
                        name="joining_date" id="joining_date" value="{{ old('joining_date', $jobHistory->joining_date) }}"
                        required>
                    @if ($errors->has('joining_date'))
                        <div class="invalid-feedback">
                            {{ $errors->first('joining_date') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.jobHistory.fields.joining_date_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="release_date">{{ trans('cruds.jobHistory.fields.release_date') }}</label>
                    <input class="form-control date {{ $errors->has('release_date') ? 'is-invalid' : '' }}" type="text"
                        name="release_date" id="release_date" value="{{ old('release_date', $jobHistory->release_date) }}">
                    @if ($errors->has('release_date'))
                        <div class="invalid-feedback">
                            {{ $errors->first('release_date') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.jobHistory.fields.release_date_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="level_1">{{ trans('cruds.jobHistory.fields.level_1') }}</label>
                    <input class="form-control {{ $errors->has('level_1') ? 'is-invalid' : '' }}" type="text"
                        name="level_1" id="level_1" value="{{ old('level_1', $jobHistory->level_1) }}">
                    @if ($errors->has('level_1'))
                        <div class="invalid-feedback">
                            {{ $errors->first('level_1') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.jobHistory.fields.level_1_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="level_2">{{ trans('cruds.jobHistory.fields.level_2') }}</label>
                    <input class="form-control {{ $errors->has('level_2') ? 'is-invalid' : '' }}" type="text"
                        name="level_2" id="level_2" value="{{ old('level_2', $jobHistory->level_2) }}">
                    @if ($errors->has('level_2'))
                        <div class="invalid-feedback">
                            {{ $errors->first('level_2') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.jobHistory.fields.level_2_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="level_3">{{ trans('cruds.jobHistory.fields.level_3') }}</label>
                    <input class="form-control {{ $errors->has('level_3') ? 'is-invalid' : '' }}" type="text"
                        name="level_3" id="level_3" value="{{ old('level_3', $jobHistory->level_3) }}">
                    @if ($errors->has('level_3'))
                        <div class="invalid-feedback">
                            {{ $errors->first('level_3') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.jobHistory.fields.level_3_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="level_4">{{ trans('cruds.jobHistory.fields.level_4') }}</label>
                    <input class="form-control {{ $errors->has('level_4') ? 'is-invalid' : '' }}" type="text"
                        name="level_4" id="level_4" value="{{ old('level_4', $jobHistory->level_4) }}">
                    @if ($errors->has('level_4'))
                        <div class="invalid-feedback">
                            {{ $errors->first('level_4') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.jobHistory.fields.level_4_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="level_5">{{ trans('cruds.jobHistory.fields.level_5') }}</label>
                    <input class="form-control {{ $errors->has('level_5') ? 'is-invalid' : '' }}" type="text"
                        name="level_5" id="level_5" value="{{ old('level_5', $jobHistory->level_5) }}">
                    @if ($errors->has('level_5'))
                        <div class="invalid-feedback">
                            {{ $errors->first('level_5') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.jobHistory.fields.level_5_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="employee_id">{{ trans('cruds.jobHistory.fields.employee') }}</label>
                    <select class="form-select select2 {{ $errors->has('employee') ? 'is-invalid' : '' }}"
                        name="employee_id" id="employee_id">
                        @foreach ($employees as $id => $entry)
                            <option value="{{ $id }}"
                                {{ (old('employee_id') ? old('employee_id') : $jobHistory->employee->id ?? '') == $id ? 'selected' : '' }}>
                                {{ $entry }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('employee'))
                        <div class="invalid-feedback">
                            {{ $errors->first('employee') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.jobHistory.fields.employee_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="grade_id">{{ trans('cruds.jobHistory.fields.grade') }}</label>
                    <select class="form-select select2 {{ $errors->has('grade') ? 'is-invalid' : '' }}" name="grade_id"
                        id="grade_id" required>
                        @foreach ($grades as $id => $entry)
                            <option value="{{ $id }}"
                                {{ (old('grade_id') ? old('grade_id') : $jobHistory->grade->id ?? '') == $id ? 'selected' : '' }}>
                                {{ $entry }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('grade'))
                        <div class="invalid-feedback">
                            {{ $errors->first('grade') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.jobHistory.fields.grade_helper') }}</span>
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
