@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            {{ trans('global.edit') }} {{ trans('cruds.award.title_singular') }}
            <br><strong class="text-dark classname">
                @if (app()->getLocale() === 'bn')
                    {{ trans('cruds.employeeList.fields.fullname_bn') }}:{{ $award->employee->fullname_bn }}
                    &nbsp;
                    {{ trans('cruds.employeeList.fields.employeeid') }}:{{ $award->employee->employeeid }}
                @else
                    {{ trans('cruds.employeeList.fields.fullname_en') }}:{{ $award->employee->fullname_en }}
                    &nbsp;
                    {{ trans('cruds.employeeList.fields.employeeid') }}:{{ $award->employee->employeeid }}
                @endif
            </strong>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('admin.awards.update', [$award->id]) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row row-cols-3">
                    <div class="form-group">
                        <label for="title">{{ trans('cruds.award.fields.title') }}</label>
                        <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text"
                            name="title" id="title" value="{{ old('title', $award->title) }}">
                        @if ($errors->has('title'))
                            <div class="invalid-feedback">
                                {{ $errors->first('title') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.award.fields.title_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="ground_area">{{ trans('cruds.award.fields.ground_area') }}</label>
                        <input class="form-control {{ $errors->has('ground_area') ? 'is-invalid' : '' }}" type="text"
                            name="ground_area" id="ground_area" value="{{ old('ground_area', $award->ground_area) }}">
                        @if ($errors->has('ground_area'))
                            <div class="invalid-feedback">
                                {{ $errors->first('ground_area') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.award.fields.ground_area_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="date">{{ trans('cruds.award.fields.date') }}</label>
                        <input class="form-control date {{ $errors->has('date') ? 'is-invalid' : '' }}" type="text"
                            name="date" id="date" value="{{ old('date', $award->date) }}">
                        @if ($errors->has('date'))
                            <div class="invalid-feedback">
                                {{ $errors->first('date') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.award.fields.date_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="certificate">{{ trans('cruds.award.fields.certificate') }}</label>
                        <div class="needsclick dropzone {{ $errors->has('certificate') ? 'is-invalid' : '' }}"
                            id="certificate-dropzone">
                        </div>
                        @if ($errors->has('certificate'))
                            <div class="invalid-feedback">
                                {{ $errors->first('certificate') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.award.fields.certificate_helper') }}</span>
                    </div>

                    <x-hidden-input name="employee_id" value="{{ $award->employee->id }}" />
                    {{-- <div class="form-group">
                    <label for="employee_id">{{ trans('cruds.award.fields.employee') }}</label>
                    <select class="form-select select2 {{ $errors->has('employee') ? 'is-invalid' : '' }}"
                        name="employee_id" id="employee_id">
                        @foreach ($employees as $id => $entry)
                            <option value="{{ $id }}"
                                {{ (old('employee_id') ? old('employee_id') : $award->employee->id ?? '') == $id ? 'selected' : '' }}>
                                {{ $entry }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('employee'))
                        <div class="invalid-feedback">
                            {{ $errors->first('employee') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.award.fields.employee_helper') }}</span>
                </div> --}}
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

@section('scripts')
    <script>
        Dropzone.options.certificateDropzone = {
            url: '{{ route('admin.awards.storeMedia') }}',
            maxFilesize: 2, // MB
            maxFiles: 1,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            params: {
                size: 2
            },
            success: function(file, response) {
                $('form').find('input[name="certificate"]').remove()
                $('form').append('<input type="hidden" name="certificate" value="' + response.name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="certificate"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                @if (isset($award) && $award->certificate)
                    var file = {!! json_encode($award->certificate) !!}
                    this.options.addedfile.call(this, file)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="certificate" value="' + file.file_name + '">')
                    this.options.maxFiles = this.options.maxFiles - 1
                @endif
            },
            error: function(file, response) {
                if ($.type(response) === 'string') {
                    var message = response //dropzone sends it's own error messages in string
                } else {
                    var message = response.errors.file
                }
                file.previewElement.classList.add('dz-error')
                _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
                _results = []
                for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                    node = _ref[_i]
                    _results.push(node.textContent = message)
                }

                return _results
            }
        }
    </script>
@endsection
