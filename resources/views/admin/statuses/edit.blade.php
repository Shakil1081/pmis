@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            {{ trans('global.edit') }} {{ trans('cruds.status.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('admin.statuses.update', [$status->id]) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row row-cols-2">
                    <div class="form-group">
                        <label class="required" for="name">{{ trans('cruds.status.fields.name') }}</label>
                        <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text"
                            name="name" id="name" value="{{ old('name', $status->name) }}" required>
                        @if ($errors->has('name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.status.fields.name_helper') }}</span>
                    </div>

                    <div class="form-group">
                        <label class="required" for="name_en">{{ trans('cruds.status.fields.name_en') }}</label>
                        <input class="form-control {{ $errors->has('name_en') ? 'is-invalid' : '' }}" type="text"
                            name="name_en" id="name_en" value="{{ old('name_en', $status->name_en) }}" required>
                        @if ($errors->has('name_en'))
                            <div class="invalid-feedback">
                                {{ $errors->first('name_en') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.status.fields.name_en_helper') }}</span>
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
@endsection
