@extends('layouts.admin')
@section('content')
    <div class="card p-2">
        <div class="container">
            <div class="row">
                @include('admin.commonemployee.commonmenu')
                <div class="col-md-8">
                    <div class="tab-content my-1 border p-2" id="v-pills-tabContent">
                        <h4> {{ trans('global.create') }} {{ trans('cruds.training.title_singular') }}</h4>
                        <form method="POST"
                            action="{{ route('admin.trainings.store', ['employee_id' => request()->query('id')]) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row row-cols-2">

                                <div class="form-group">
                                    <label class="required"
                                        for="training_type_id">{{ trans('cruds.training.fields.training_type') }}</label>
                                    <select
                                        class="form-control select2 {{ $errors->has('training_type') ? 'is-invalid' : '' }}"
                                        name="training_type_id" id="training_type_id" required>
                                        @foreach ($training_types as $id => $entry)
                                            <option value="{{ $id }}"
                                                {{ old('training_type_id') == $id ? 'selected' : '' }}>{{ $entry }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('training_type'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('training_type') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.training.fields.training_type_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="training_name">{{ trans('cruds.training.fields.training_name') }}</label>
                                    <input class="form-control {{ $errors->has('training_name') ? 'is-invalid' : '' }}"
                                        type="text" name="training_name" id="training_name"
                                        value="{{ old('training_name', '') }}">
                                    @if ($errors->has('training_name'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('training_name') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.training.fields.training_name_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="institute_name">{{ trans('cruds.training.fields.institute_name') }}</label>
                                    <input class="form-control {{ $errors->has('institute_name') ? 'is-invalid' : '' }}"
                                        type="text" name="institute_name" id="institute_name"
                                        value="{{ old('institute_name', '') }}">
                                    @if ($errors->has('institute_name'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('institute_name') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.training.fields.institute_name_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="country_id">{{ trans('cruds.training.fields.country') }}</label>
                                    <select class="form-control select2 {{ $errors->has('country') ? 'is-invalid' : '' }}"
                                        name="country_id" id="country_id">
                                        @foreach ($countries as $id => $entry)
                                            <option value="{{ $id }}"
                                                {{ old('country_id') == $id ? 'selected' : '' }}>{{ $entry }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('country'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('country') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.training.fields.country_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label class="required"
                                        for="start_date">{{ trans('cruds.training.fields.start_date') }}</label>
                                    <input class="form-control date {{ $errors->has('start_date') ? 'is-invalid' : '' }}"
                                        type="text" name="start_date" id="start_date" value="{{ old('start_date') }}"
                                        required>
                                    @if ($errors->has('start_date'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('start_date') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.training.fields.start_date_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="end_date">{{ trans('cruds.training.fields.end_date') }}</label>
                                    <input class="form-control date {{ $errors->has('end_date') ? 'is-invalid' : '' }}"
                                        type="text" name="end_date" id="end_date" value="{{ old('end_date') }}">
                                    @if ($errors->has('end_date'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('end_date') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.training.fields.end_date_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="grade">{{ trans('cruds.training.fields.grade') }}</label>
                                    <input class="form-control {{ $errors->has('grade') ? 'is-invalid' : '' }}"
                                        type="text" name="grade" id="grade" value="{{ old('grade', '') }}">
                                    @if ($errors->has('grade'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('grade') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.training.fields.grade_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="position">{{ trans('cruds.training.fields.position') }}</label>
                                    <input class="form-control {{ $errors->has('position') ? 'is-invalid' : '' }}"
                                        type="text" name="position" id="position" value="{{ old('position', '') }}">
                                    @if ($errors->has('position'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('position') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.training.fields.position_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="location">{{ trans('cruds.training.fields.location') }}</label>
                                    <input class="form-control {{ $errors->has('location') ? 'is-invalid' : '' }}"
                                        type="text" name="location" id="location" value="{{ old('location', '') }}">
                                    @if ($errors->has('location'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('location') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.training.fields.location_helper') }}</span>
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
            </div>
        </div>
    </div>
@endsection
