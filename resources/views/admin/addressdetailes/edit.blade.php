@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.addressdetaile.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.addressdetailes.update", [$addressdetaile->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="employee_id">{{ trans('cruds.addressdetaile.fields.employee') }}</label>
                <select class="form-control select2 {{ $errors->has('employee') ? 'is-invalid' : '' }}" name="employee_id" id="employee_id" required>
                    @foreach($employees as $id => $entry)
                        <option value="{{ $id }}" {{ (old('employee_id') ? old('employee_id') : $addressdetaile->employee->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('employee'))
                    <div class="invalid-feedback">
                        {{ $errors->first('employee') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.addressdetaile.fields.employee_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.addressdetaile.fields.address_type') }}</label>
                <select class="form-control {{ $errors->has('address_type') ? 'is-invalid' : '' }}" name="address_type" id="address_type" required>
                    <option value disabled {{ old('address_type', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Addressdetaile::ADDRESS_TYPE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('address_type', $addressdetaile->address_type) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('address_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('address_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.addressdetaile.fields.address_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="flat_house">{{ trans('cruds.addressdetaile.fields.flat_house') }}</label>
                <input class="form-control {{ $errors->has('flat_house') ? 'is-invalid' : '' }}" type="text" name="flat_house" id="flat_house" value="{{ old('flat_house', $addressdetaile->flat_house) }}" required>
                @if($errors->has('flat_house'))
                    <div class="invalid-feedback">
                        {{ $errors->first('flat_house') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.addressdetaile.fields.flat_house_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="road_no">{{ trans('cruds.addressdetaile.fields.road_no') }}</label>
                <input class="form-control {{ $errors->has('road_no') ? 'is-invalid' : '' }}" type="text" name="road_no" id="road_no" value="{{ old('road_no', $addressdetaile->road_no) }}">
                @if($errors->has('road_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('road_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.addressdetaile.fields.road_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="village_town">{{ trans('cruds.addressdetaile.fields.village_town') }}</label>
                <input class="form-control {{ $errors->has('village_town') ? 'is-invalid' : '' }}" type="text" name="village_town" id="village_town" value="{{ old('village_town', $addressdetaile->village_town) }}">
                @if($errors->has('village_town'))
                    <div class="invalid-feedback">
                        {{ $errors->first('village_town') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.addressdetaile.fields.village_town_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="post_office">{{ trans('cruds.addressdetaile.fields.post_office') }}</label>
                <input class="form-control {{ $errors->has('post_office') ? 'is-invalid' : '' }}" type="text" name="post_office" id="post_office" value="{{ old('post_office', $addressdetaile->post_office) }}">
                @if($errors->has('post_office'))
                    <div class="invalid-feedback">
                        {{ $errors->first('post_office') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.addressdetaile.fields.post_office_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="post_code">{{ trans('cruds.addressdetaile.fields.post_code') }}</label>
                <input class="form-control {{ $errors->has('post_code') ? 'is-invalid' : '' }}" type="text" name="post_code" id="post_code" value="{{ old('post_code', $addressdetaile->post_code) }}" required>
                @if($errors->has('post_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('post_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.addressdetaile.fields.post_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="thana_upazila_id">{{ trans('cruds.addressdetaile.fields.thana_upazila') }}</label>
                <select class="form-control select2 {{ $errors->has('thana_upazila') ? 'is-invalid' : '' }}" name="thana_upazila_id" id="thana_upazila_id" required>
                    @foreach($thana_upazilas as $id => $entry)
                        <option value="{{ $id }}" {{ (old('thana_upazila_id') ? old('thana_upazila_id') : $addressdetaile->thana_upazila->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('thana_upazila'))
                    <div class="invalid-feedback">
                        {{ $errors->first('thana_upazila') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.addressdetaile.fields.thana_upazila_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="district_id">{{ trans('cruds.addressdetaile.fields.district') }}</label>
                <select class="form-control select2 {{ $errors->has('district') ? 'is-invalid' : '' }}" name="district_id" id="district_id">
                    @foreach($districts as $id => $entry)
                        <option value="{{ $id }}" {{ (old('district_id') ? old('district_id') : $addressdetaile->district->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('district'))
                    <div class="invalid-feedback">
                        {{ $errors->first('district') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.addressdetaile.fields.district_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="phone_number">{{ trans('cruds.addressdetaile.fields.phone_number') }}</label>
                <input class="form-control {{ $errors->has('phone_number') ? 'is-invalid' : '' }}" type="text" name="phone_number" id="phone_number" value="{{ old('phone_number', $addressdetaile->phone_number) }}">
                @if($errors->has('phone_number'))
                    <div class="invalid-feedback">
                        {{ $errors->first('phone_number') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.addressdetaile.fields.phone_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.addressdetaile.fields.status') }}</label>
                <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status">
                    <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Addressdetaile::STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('status', $addressdetaile->status) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.addressdetaile.fields.status_helper') }}</span>
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