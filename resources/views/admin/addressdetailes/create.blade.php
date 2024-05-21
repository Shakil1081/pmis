@extends('layouts.admin')
@section('content')
    <div class="card p-2">
        <div class="container">
            <div class="row">
                @include('admin.commonemployee.commonmenu')
                <div class="col-md-8">
                    <div class="tab-content my-1 border p-2" id="v-pills-tabContent">
                        <h4> {{ trans('global.create') }} {{ trans('cruds.addressdetaile.title_singular') }}</h4>
                        <form method="POST"
                            action="{{ route('admin.addressdetailes.store', ['employee_id' => request()->query('id')]) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row row-cols-2">

                                <div class="form-group">
                                    <label class="required">{{ trans('cruds.addressdetaile.fields.address_type') }}</label>
                                    <select class="form-control {{ $errors->has('address_type') ? 'is-invalid' : '' }}"
                                        name="address_type" id="address_type" required>
                                        <option value disabled {{ old('address_type', null) === null ? 'selected' : '' }}>
                                            {{ trans('global.pleaseSelect') }}</option>
                                        @foreach (App\Models\Addressdetaile::ADDRESS_TYPE_SELECT as $key => $label)
                                            <option value="{{ $key }}"
                                                {{ old('address_type', '') === (string) $key ? 'selected' : '' }}>
                                                {{ $label }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('address_type'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('address_type') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.addressdetaile.fields.address_type_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label class="required"
                                        for="flat_house">{{ trans('cruds.addressdetaile.fields.flat_house') }}</label>
                                    <input class="form-control {{ $errors->has('flat_house') ? 'is-invalid' : '' }}"
                                        type="text" name="flat_house" id="flat_house"
                                        value="{{ old('flat_house', '') }}" required>
                                    @if ($errors->has('flat_house'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('flat_house') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.addressdetaile.fields.flat_house_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="post_office">{{ trans('cruds.addressdetaile.fields.post_office') }}</label>
                                    <input class="form-control {{ $errors->has('post_office') ? 'is-invalid' : '' }}"
                                        type="text" name="post_office" id="post_office"
                                        value="{{ old('post_office', '') }}">
                                    @if ($errors->has('post_office'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('post_office') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.addressdetaile.fields.post_office_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label class="required"
                                        for="post_code">{{ trans('cruds.addressdetaile.fields.post_code') }}</label>
                                    <input class="form-control {{ $errors->has('post_code') ? 'is-invalid' : '' }}"
                                        type="text" name="post_code" id="post_code" value="{{ old('post_code', '') }}"
                                        required>
                                    @if ($errors->has('post_code'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('post_code') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.addressdetaile.fields.post_code_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label class="required"
                                        for="thana_upazila_id">{{ trans('cruds.addressdetaile.fields.thana_upazila') }}</label>
                                    <select
                                        class="form-control select2 {{ $errors->has('thana_upazila') ? 'is-invalid' : '' }}"
                                        name="thana_upazila_id" id="thana_upazila_id" required>
                                        @foreach ($thana_upazilas as $id => $entry)
                                            <option value="{{ $id }}"
                                                {{ old('thana_upazila_id') == $id ? 'selected' : '' }}>{{ $entry }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('thana_upazila'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('thana_upazila') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.addressdetaile.fields.thana_upazila_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label
                                        for="phone_number">{{ trans('cruds.addressdetaile.fields.phone_number') }}</label>
                                    <input class="form-control {{ $errors->has('phone_number') ? 'is-invalid' : '' }}"
                                        type="text" name="phone_number" id="phone_number"
                                        value="{{ old('phone_number', '') }}">
                                    @if ($errors->has('phone_number'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('phone_number') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.addressdetaile.fields.phone_number_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label>{{ trans('cruds.addressdetaile.fields.status') }}</label>
                                    <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}"
                                        name="status" id="status">
                                        <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>
                                            {{ trans('global.pleaseSelect') }}</option>
                                        @foreach (App\Models\Addressdetaile::STATUS_SELECT as $key => $label)
                                            <option value="{{ $key }}"
                                                {{ old('status', '') === (string) $key ? 'selected' : '' }}>
                                                {{ $label }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('status'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('status') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.addressdetaile.fields.status_helper') }}</span>
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
