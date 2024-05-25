@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            {{ trans('global.create') }} {{ trans('cruds.forestDivision.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('admin.forest-divisions.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="forest_state_id">{{ trans('cruds.forestDivision.fields.forest_state') }}</label>
                    <select class="form-select select2 {{ $errors->has('forest_state') ? 'is-invalid' : '' }}"
                        name="forest_state_id" id="forest_state_id">
                        @foreach ($forest_states as $id => $entry)
                            <option value="{{ $id }}" {{ old('forest_state_id') == $id ? 'selected' : '' }}>
                                {{ $entry }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('forest_state'))
                        <div class="invalid-feedback">
                            {{ $errors->first('forest_state') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.forestDivision.fields.forest_state_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="name_bn">{{ trans('cruds.forestDivision.fields.name_bn') }}</label>
                    <input class="form-control {{ $errors->has('name_bn') ? 'is-invalid' : '' }}" type="text"
                        name="name_bn" id="name_bn" value="{{ old('name_bn', '') }}" required>
                    @if ($errors->has('name_bn'))
                        <div class="invalid-feedback">
                            {{ $errors->first('name_bn') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.forestDivision.fields.name_bn_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="name_en">{{ trans('cruds.forestDivision.fields.name_en') }}</label>
                    <input class="form-control {{ $errors->has('name_en') ? 'is-invalid' : '' }}" type="text"
                        name="name_en" id="name_en" value="{{ old('name_en', '') }}" required>
                    @if ($errors->has('name_en'))
                        <div class="invalid-feedback">
                            {{ $errors->first('name_en') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.forestDivision.fields.name_en_helper') }}</span>
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