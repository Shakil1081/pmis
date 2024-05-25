@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            {{ trans('global.edit') }} {{ trans('cruds.projectRevenuelone.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('admin.project-revenuelones.update', [$projectRevenuelone->id]) }}"
                enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label class="required"
                        for="project_revenue_id">{{ trans('cruds.projectRevenuelone.fields.project_revenue') }}</label>
                    <select class="form-select select2 {{ $errors->has('project_revenue') ? 'is-invalid' : '' }}"
                        name="project_revenue_id" id="project_revenue_id" required>
                        @foreach ($project_revenues as $id => $entry)
                            <option value="{{ $id }}"
                                {{ (old('project_revenue_id') ? old('project_revenue_id') : $projectRevenuelone->project_revenue->id ?? '') == $id ? 'selected' : '' }}>
                                {{ $entry }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('project_revenue'))
                        <div class="invalid-feedback">
                            {{ $errors->first('project_revenue') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.projectRevenuelone.fields.project_revenue_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="name_bn">{{ trans('cruds.projectRevenuelone.fields.name_bn') }}</label>
                    <input class="form-control {{ $errors->has('name_bn') ? 'is-invalid' : '' }}" type="text"
                        name="name_bn" id="name_bn" value="{{ old('name_bn', $projectRevenuelone->name_bn) }}" required>
                    @if ($errors->has('name_bn'))
                        <div class="invalid-feedback">
                            {{ $errors->first('name_bn') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.projectRevenuelone.fields.name_bn_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="name_en">{{ trans('cruds.projectRevenuelone.fields.name_en') }}</label>
                    <input class="form-control {{ $errors->has('name_en') ? 'is-invalid' : '' }}" type="text"
                        name="name_en" id="name_en" value="{{ old('name_en', $projectRevenuelone->name_en) }}" required>
                    @if ($errors->has('name_en'))
                        <div class="invalid-feedback">
                            {{ $errors->first('name_en') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.projectRevenuelone.fields.name_en_helper') }}</span>
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
