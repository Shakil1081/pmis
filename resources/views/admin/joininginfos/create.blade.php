@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.joininginfo.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.joininginfos.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="project_revenue_bn">{{ trans('cruds.joininginfo.fields.project_revenue_bn') }}</label>
                <input class="form-control {{ $errors->has('project_revenue_bn') ? 'is-invalid' : '' }}" type="text" name="project_revenue_bn" id="project_revenue_bn" value="{{ old('project_revenue_bn', '') }}" required>
                @if($errors->has('project_revenue_bn'))
                    <div class="invalid-feedback">
                        {{ $errors->first('project_revenue_bn') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.joininginfo.fields.project_revenue_bn_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="project_revenue_en">{{ trans('cruds.joininginfo.fields.project_revenue_en') }}</label>
                <input class="form-control {{ $errors->has('project_revenue_en') ? 'is-invalid' : '' }}" type="text" name="project_revenue_en" id="project_revenue_en" value="{{ old('project_revenue_en', 'na') }}">
                @if($errors->has('project_revenue_en'))
                    <div class="invalid-feedback">
                        {{ $errors->first('project_revenue_en') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.joininginfo.fields.project_revenue_en_helper') }}</span>
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