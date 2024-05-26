@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.languageList.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.language-lists.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.languageList.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.languageList.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="nmae_en">{{ trans('cruds.languageList.fields.nmae_en') }}</label>
                <input class="form-control {{ $errors->has('nmae_en') ? 'is-invalid' : '' }}" type="text" name="nmae_en" id="nmae_en" value="{{ old('nmae_en', '') }}" required>
                @if($errors->has('nmae_en'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nmae_en') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.languageList.fields.nmae_en_helper') }}</span>
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