@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.grade.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.grades.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name_bn">{{ trans('cruds.grade.fields.name_bn') }}</label>
                <input class="form-control {{ $errors->has('name_bn') ? 'is-invalid' : '' }}" type="text" name="name_bn" id="name_bn" value="{{ old('name_bn', '') }}" required>
                @if($errors->has('name_bn'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name_bn') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.grade.fields.name_bn_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name_en">{{ trans('cruds.grade.fields.name_en') }}</label>
                <input class="form-control {{ $errors->has('name_en') ? 'is-invalid' : '' }}" type="text" name="name_en" id="name_en" value="{{ old('name_en', '') }}">
                @if($errors->has('name_en'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name_en') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.grade.fields.name_en_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="salary_range">{{ trans('cruds.grade.fields.salary_range') }}</label>
                <input class="form-control {{ $errors->has('salary_range') ? 'is-invalid' : '' }}" type="text" name="salary_range" id="salary_range" value="{{ old('salary_range', '') }}">
                @if($errors->has('salary_range'))
                    <div class="invalid-feedback">
                        {{ $errors->first('salary_range') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.grade.fields.salary_range_helper') }}</span>
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