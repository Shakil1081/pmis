@extends('layouts.admin')
@section('content')
    <div class="card p-2">
        <div class="container">
            <div class="row">
                @include('admin.commonemployee.commonmenu')
                <div class="col-md-8">
                    <div class="tab-content my-1 border p-2" id="v-pills-tabContent">
                        <h4>{{ trans('global.create') }} {{ trans('cruds.travelRecord.title_singular') }}</h4>
                        <form method="POST"
                            action="{{ route('admin.travel-records.store', ['employee_id' => request()->query('id')]) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row row-cols-2">

                                <div class="form-group">
                                    <label for="country_id">{{ trans('cruds.travelRecord.fields.country') }}</label>
                                    <select class="form-select select2 {{ $errors->has('country') ? 'is-invalid' : '' }}"
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
                                    <span class="help-block">{{ trans('cruds.travelRecord.fields.country_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="title">{{ trans('cruds.travelRecord.fields.title') }}</label>
                                    <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}"
                                        type="text" name="title" id="title" value="{{ old('title', '') }}">
                                    @if ($errors->has('title'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('title') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.travelRecord.fields.title_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="purpose_id">{{ trans('cruds.travelRecord.fields.purpose') }}</label>
                                    <input type="text" class="form-control" name="purpose_id" id="purpose_id" required>

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
                                        type="text" name="start_date" id="start_date" value="{{ old('start_date') }}"
                                        required>
                                    @if ($errors->has('start_date'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('start_date') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.travelRecord.fields.start_date_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label class="required"
                                        for="end_date">{{ trans('cruds.travelRecord.fields.end_date') }}</label>
                                    <input class="form-control date {{ $errors->has('end_date') ? 'is-invalid' : '' }}"
                                        type="text" name="end_date" id="end_date" value="{{ old('end_date') }}"
                                        required>
                                    @if ($errors->has('end_date'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('end_date') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.travelRecord.fields.end_date_helper') }}</span>

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
