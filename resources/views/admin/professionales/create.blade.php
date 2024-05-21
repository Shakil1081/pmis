@extends('layouts.admin')
@section('content')
    <div class="card p-2">
        <div class="container">
            <div class="row">
                @include('admin.commonemployee.commonmenu')
                <div class="col-md-8">
                    <div class="tab-content my-1 border p-2" id="v-pills-tabContent">
                        <h4> {{ trans('global.create') }} {{ trans('cruds.professionale.title_singular') }}</h4>

                        <form method="POST"
                            action="{{ route('admin.professionales.store', ['employee_id' => request()->query('id')]) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row row-cols-2">
                                <div class="form-group">
                                    <label class="required"
                                        for="qualification_title">{{ trans('cruds.professionale.fields.qualification_title') }}</label>
                                    <input
                                        class="form-control {{ $errors->has('qualification_title') ? 'is-invalid' : '' }}"
                                        type="text" name="qualification_title" id="qualification_title"
                                        value="{{ old('qualification_title', '') }}" required>
                                    @if ($errors->has('qualification_title'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('qualification_title') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.professionale.fields.qualification_title_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label class="required"
                                        for="institution">{{ trans('cruds.professionale.fields.institution') }}</label>
                                    <input class="form-control {{ $errors->has('institution') ? 'is-invalid' : '' }}"
                                        type="text" name="institution" id="institution"
                                        value="{{ old('institution', '') }}" required>
                                    @if ($errors->has('institution'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('institution') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.professionale.fields.institution_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label class="required"
                                        for="from_date">{{ trans('cruds.professionale.fields.from_date') }}</label>
                                    <input class="form-control date {{ $errors->has('from_date') ? 'is-invalid' : '' }}"
                                        type="text" name="from_date" id="from_date" value="{{ old('from_date') }}"
                                        required>
                                    @if ($errors->has('from_date'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('from_date') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.professionale.fields.from_date_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="to_date">{{ trans('cruds.professionale.fields.to_date') }}</label>
                                    <input class="form-control date {{ $errors->has('to_date') ? 'is-invalid' : '' }}"
                                        type="text" name="to_date" id="to_date" value="{{ old('to_date') }}">
                                    @if ($errors->has('to_date'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('to_date') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.professionale.fields.to_date_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label class="required"
                                        for="passing_year">{{ trans('cruds.professionale.fields.passing_year') }}</label>
                                    <input class="form-control {{ $errors->has('passing_year') ? 'is-invalid' : '' }}"
                                        type="number" name="passing_year" id="passing_year"
                                        value="{{ old('passing_year', '') }}" step="1" required>
                                    @if ($errors->has('passing_year'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('passing_year') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.professionale.fields.passing_year_helper') }}</span>
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
