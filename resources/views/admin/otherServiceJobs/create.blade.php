@extends('layouts.admin')
@section('content')
    <div class="card p-2">
        <div class="container">
            <div class="row">
                @include('admin.commonemployee.commonmenu')
                <div class="col-md-8">
                    <div class="tab-content my-1 border p-2" id="v-pills-tabContent">
                        <h4> {{ trans('global.create') }} {{ trans('cruds.otherServiceJob.title_singular') }}</h4>

                        <form method="POST"
                            action="{{ route('admin.other-service-jobs.store', ['employee_id' => request()->query('id')]) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row row-cols-2">
                                <div class="form-group">
                                    <label for="employer">{{ trans('cruds.otherServiceJob.fields.employer') }}</label>
                                    <input class="form-control {{ $errors->has('employer') ? 'is-invalid' : '' }}"
                                        type="text" name="employer" id="employer" value="{{ old('employer', '') }}">
                                    @if ($errors->has('employer'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('employer') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.otherServiceJob.fields.employer_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="address">{{ trans('cruds.otherServiceJob.fields.address') }}</label>
                                    <textarea class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" name="address" id="address">{{ old('address') }}</textarea>
                                    @if ($errors->has('address'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('address') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.otherServiceJob.fields.address_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label
                                        for="service_type">{{ trans('cruds.otherServiceJob.fields.service_type') }}</label>
                                    <input class="form-control {{ $errors->has('service_type') ? 'is-invalid' : '' }}"
                                        type="text" name="service_type" id="service_type"
                                        value="{{ old('service_type', '') }}">
                                    @if ($errors->has('service_type'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('service_type') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.otherServiceJob.fields.service_type_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="position">{{ trans('cruds.otherServiceJob.fields.position') }}</label>
                                    <input class="form-control {{ $errors->has('position') ? 'is-invalid' : '' }}"
                                        type="text" name="position" id="position" value="{{ old('position', '') }}">
                                    @if ($errors->has('position'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('position') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.otherServiceJob.fields.position_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="from">{{ trans('cruds.otherServiceJob.fields.from') }}</label>
                                    <input class="form-control date {{ $errors->has('from') ? 'is-invalid' : '' }}"
                                        type="text" name="from" id="from" value="{{ old('from') }}">
                                    @if ($errors->has('from'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('from') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.otherServiceJob.fields.from_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="to">{{ trans('cruds.otherServiceJob.fields.to') }}</label>
                                    <input class="form-control date{{ $errors->has('to') ? 'is-invalid' : '' }}"
                                        type="text" name="to" id="to" value="{{ old('to', '') }}">
                                    @if ($errors->has('to'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('to') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.otherServiceJob.fields.to_helper') }}</span>
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
