@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.forestRange.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.forest-ranges.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="forest_state_id">{{ trans('cruds.forestRange.fields.forest_state') }}</label>
                <select class="form-control select2 {{ $errors->has('forest_state') ? 'is-invalid' : '' }}" name="forest_state_id" id="forest_state_id" required>
                    @foreach($forest_states as $id => $entry)
                        <option value="{{ $id }}" {{ old('forest_state_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('forest_state'))
                    <div class="invalid-feedback">
                        {{ $errors->first('forest_state') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.forestRange.fields.forest_state_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="forest_division_bbs_code">{{ trans('cruds.forestRange.fields.forest_division_bbs_code') }}</label>
                <input class="form-control {{ $errors->has('forest_division_bbs_code') ? 'is-invalid' : '' }}" type="text" name="forest_division_bbs_code" id="forest_division_bbs_code" value="{{ old('forest_division_bbs_code', '') }}">
                @if($errors->has('forest_division_bbs_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('forest_division_bbs_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.forestRange.fields.forest_division_bbs_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="status_id">{{ trans('cruds.forestRange.fields.status') }}</label>
                <select class="form-control select2 {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status_id" id="status_id" required>
                    @foreach($statuses as $id => $entry)
                        <option value="{{ $id }}" {{ old('status_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.forestRange.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="forest_division_id">{{ trans('cruds.forestRange.fields.forest_division') }}</label>
                <select class="form-control select2 {{ $errors->has('forest_division') ? 'is-invalid' : '' }}" name="forest_division_id" id="forest_division_id" required>
                    @foreach($forest_divisions as $id => $entry)
                        <option value="{{ $id }}" {{ old('forest_division_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('forest_division'))
                    <div class="invalid-feedback">
                        {{ $errors->first('forest_division') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.forestRange.fields.forest_division_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="name_bn">{{ trans('cruds.forestRange.fields.name_bn') }}</label>
                <input class="form-control {{ $errors->has('name_bn') ? 'is-invalid' : '' }}" type="text" name="name_bn" id="name_bn" value="{{ old('name_bn', '') }}" required>
                @if($errors->has('name_bn'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name_bn') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.forestRange.fields.name_bn_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="name_en">{{ trans('cruds.forestRange.fields.name_en') }}</label>
                <input class="form-control {{ $errors->has('name_en') ? 'is-invalid' : '' }}" type="text" name="name_en" id="name_en" value="{{ old('name_en', '') }}" required>
                @if($errors->has('name_en'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name_en') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.forestRange.fields.name_en_helper') }}</span>
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