@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            {{ trans('global.edit') }} {{ trans('cruds.projectRevenueExam.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('admin.project-revenue-exams.update', [$projectRevenueExam->id]) }}"
                enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label class="required" for="exam_id">{{ trans('cruds.projectRevenueExam.fields.exam') }}</label>
                    <select class="form-select select2 {{ $errors->has('exam') ? 'is-invalid' : '' }}" name="exam_id"
                        id="exam_id" required>
                        @foreach ($exams as $id => $entry)
                            <option value="{{ $id }}"
                                {{ (old('exam_id') ? old('exam_id') : $projectRevenueExam->exam->id ?? '') == $id ? 'selected' : '' }}>
                                {{ $entry }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('exam'))
                        <div class="invalid-feedback">
                            {{ $errors->first('exam') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.projectRevenueExam.fields.exam_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required"
                        for="exam_name_bn">{{ trans('cruds.projectRevenueExam.fields.exam_name_bn') }}</label>
                    <input class="form-control {{ $errors->has('exam_name_bn') ? 'is-invalid' : '' }}" type="text"
                        name="exam_name_bn" id="exam_name_bn"
                        value="{{ old('exam_name_bn', $projectRevenueExam->exam_name_bn) }}" required>
                    @if ($errors->has('exam_name_bn'))
                        <div class="invalid-feedback">
                            {{ $errors->first('exam_name_bn') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.projectRevenueExam.fields.exam_name_bn_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required"
                        for="exam_name_en">{{ trans('cruds.projectRevenueExam.fields.exam_name_en') }}</label>
                    <input class="form-control {{ $errors->has('exam_name_en') ? 'is-invalid' : '' }}" type="text"
                        name="exam_name_en" id="exam_name_en"
                        value="{{ old('exam_name_en', $projectRevenueExam->exam_name_en) }}" required>
                    @if ($errors->has('exam_name_en'))
                        <div class="invalid-feedback">
                            {{ $errors->first('exam_name_en') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.projectRevenueExam.fields.exam_name_en_helper') }}</span>
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
