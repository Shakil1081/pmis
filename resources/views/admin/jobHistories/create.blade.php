@extends('layouts.admin')
@section('content')
    <div class="card p-2">
        <div class="container">
            <div class="row">
                @include('admin.commonemployee.commonmenu')
                <div class="col-md-8">
                    <div class="tab-content my-1 border p-2" id="v-pills-tabContent">

                        <h4> {{ trans('global.create') }} {{ trans('cruds.jobHistory.title_singular') }} </h4>
                        <form method="POST" action="{{ route('admin.job-histories.store') }}" enctype="multipart/form-data">
                            @csrf
                            @livewire('multi-level-dropdown')
                            <div class="row row-cols-2 mt-3">

                                <div class="form-group">
                                    <label class="required"
                                        for="designation_id">{{ trans('cruds.jobHistory.fields.designation') }}</label>
                                    <select
                                        class="form-control select2 {{ $errors->has('designation') ? 'is-invalid' : '' }}"
                                        name="designation_id" id="designation_id">
                                        @foreach ($designations as $id => $entry)
                                            <option value="{{ $id }}"
                                                {{ old('designation_id') == $id ? 'selected' : '' }}>{{ $entry }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('designation'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('designation') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.jobHistory.fields.designation_helper') }}</span>
                                </div>
                                {{-- <div class="form-group">
                                <label for="level_1">{{ trans('cruds.jobHistory.fields.level_1') }}</label>
                                <input class="form-control {{ $errors->has('level_1') ? 'is-invalid' : '' }}" type="text"
                                    name="level_1" id="level_1" value="{{ old('level_1', '') }}">
                                @if ($errors->has('level_1'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('level_1') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.jobHistory.fields.level_1_helper') }}</span>
                            </div>
                            --}}
                                <div class="form-group">
                                    <label class="required"
                                        for="joining_date">{{ trans('cruds.jobHistory.fields.joining_date') }}</label>
                                    <input class="form-control date {{ $errors->has('joining_date') ? 'is-invalid' : '' }}"
                                        type="text" name="joining_date" id="joining_date"
                                        value="{{ old('joining_date') }}" required>
                                    @if ($errors->has('joining_date'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('joining_date') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.jobHistory.fields.joining_date_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label class="required"
                                        for="release_date">{{ trans('cruds.jobHistory.fields.release_date') }}</label>
                                    <input class="form-control date {{ $errors->has('release_date') ? 'is-invalid' : '' }}"
                                        type="text" name="release_date" id="release_date"
                                        value="{{ old('release_date') }}" required>
                                    @if ($errors->has('release_date'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('release_date') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.jobHistory.fields.release_date_helper') }}</span>
                                </div>
                                {{-- <div class="form-group">
                                <label for="level_2">{{ trans('cruds.jobHistory.fields.level_2') }}</label>
                                <input class="form-control {{ $errors->has('level_2') ? 'is-invalid' : '' }}"
                                    type="text" name="level_2" id="level_2" value="{{ old('level_2', '') }}">
                                @if ($errors->has('level_2'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('level_2') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.jobHistory.fields.level_2_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="level_3">{{ trans('cruds.jobHistory.fields.level_3') }}</label>
                                <input class="form-control {{ $errors->has('level_3') ? 'is-invalid' : '' }}"
                                    type="text" name="level_3" id="level_3" value="{{ old('level_3', '') }}">
                                @if ($errors->has('level_3'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('level_3') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.jobHistory.fields.level_3_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="level_4">{{ trans('cruds.jobHistory.fields.level_4') }}</label>
                                <input class="form-control {{ $errors->has('level_4') ? 'is-invalid' : '' }}"
                                    type="text" name="level_4" id="level_4" value="{{ old('level_4', '') }}">
                                @if ($errors->has('level_4'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('level_4') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.jobHistory.fields.level_4_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="level_5">{{ trans('cruds.jobHistory.fields.level_5') }}</label>
                                <input class="form-control {{ $errors->has('level_5') ? 'is-invalid' : '' }}"
                                    type="text" name="level_5" id="level_5" value="{{ old('level_5', '') }}">
                                @if ($errors->has('level_5'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('level_5') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.jobHistory.fields.level_5_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="employee_id">{{ trans('cruds.jobHistory.fields.employee') }}</label>
                                <select class="form-select select2 {{ $errors->has('employee') ? 'is-invalid' : '' }}"
                                    name="employee_id" id="employee_id">
                                    @foreach ($employees as $id => $entry)
                                        <option value="{{ $id }}"
                                            {{ old('employee_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('employee'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('employee') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.jobHistory.fields.employee_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label class="required" for="grade_id">{{ trans('cruds.jobHistory.fields.grade') }}</label>
                                <select class="form-select select2 {{ $errors->has('grade') ? 'is-invalid' : '' }}"
                                    name="grade_id" id="grade_id" required>
                                    @foreach ($grades as $id => $entry)
                                        <option value="{{ $id }}"
                                            {{ old('grade_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('grade'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('grade') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.jobHistory.fields.grade_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="institutename">{{ trans('cruds.jobHistory.fields.institutename') }}</label>
                                <input class="form-control {{ $errors->has('institutename') ? 'is-invalid' : '' }}"
                                    type="text" name="institutename" id="institutename"
                                    value="{{ old('institutename', '') }}">
                                @if ($errors->has('institutename'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('institutename') }}
                                    </div>
                                @endif
                                <span
                                    class="help-block">{{ trans('cruds.jobHistory.fields.institutename_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="academy_type">{{ trans('cruds.jobHistory.fields.academy_type') }}</label>
                                <input class="form-control {{ $errors->has('academy_type') ? 'is-invalid' : '' }}"
                                    type="text" name="academy_type" id="academy_type"
                                    value="{{ old('academy_type', '') }}">
                                @if ($errors->has('academy_type'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('academy_type') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.jobHistory.fields.academy_type_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="acadaylocation">{{ trans('cruds.jobHistory.fields.acadaylocation') }}</label>
                                <input class="form-control {{ $errors->has('acadaylocation') ? 'is-invalid' : '' }}"
                                    type="text" name="acadaylocation" id="acadaylocation"
                                    value="{{ old('acadaylocation', '') }}">
                                @if ($errors->has('acadaylocation'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('acadaylocation') }}
                                    </div>
                                @endif
                                <span
                                    class="help-block">{{ trans('cruds.jobHistory.fields.acadaylocation_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label
                                    for="posting_in_circle">{{ trans('cruds.jobHistory.fields.posting_in_circle') }}</label>
                                <input class="form-control {{ $errors->has('posting_in_circle') ? 'is-invalid' : '' }}"
                                    type="text" name="posting_in_circle" id="posting_in_circle"
                                    value="{{ old('posting_in_circle', '') }}">
                                @if ($errors->has('posting_in_circle'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('posting_in_circle') }}
                                    </div>
                                @endif
                                <span
                                    class="help-block">{{ trans('cruds.jobHistory.fields.posting_in_circle_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label
                                    for="postingindivision">{{ trans('cruds.jobHistory.fields.postingindivision') }}</label>
                                <input class="form-control {{ $errors->has('postingindivision') ? 'is-invalid' : '' }}"
                                    type="text" name="postingindivision" id="postingindivision"
                                    value="{{ old('postingindivision', '') }}">
                                @if ($errors->has('postingindivision'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('postingindivision') }}
                                    </div>
                                @endif
                                <span
                                    class="help-block">{{ trans('cruds.jobHistory.fields.postingindivision_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label
                                    for="posting_in_range">{{ trans('cruds.jobHistory.fields.posting_in_range') }}</label>
                                <input class="form-control {{ $errors->has('posting_in_range') ? 'is-invalid' : '' }}"
                                    type="text" name="posting_in_range" id="posting_in_range"
                                    value="{{ old('posting_in_range', '') }}">
                                @if ($errors->has('posting_in_range'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('posting_in_range') }}
                                    </div>
                                @endif
                                <span
                                    class="help-block">{{ trans('cruds.jobHistory.fields.posting_in_range_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="circle_list_id">{{ trans('cruds.jobHistory.fields.circle_list') }}</label>
                                <select class="form-select select2 {{ $errors->has('circle_list') ? 'is-invalid' : '' }}"
                                    name="circle_list_id" id="circle_list_id">
                                    @foreach ($circle_lists as $id => $entry)
                                        <option value="{{ $id }}"
                                            {{ old('circle_list_id') == $id ? 'selected' : '' }}>{{ $entry }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('circle_list'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('circle_list') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.jobHistory.fields.circle_list_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="division_list_id">{{ trans('cruds.jobHistory.fields.division_list') }}</label>
                                <select
                                    class="form-control select2 {{ $errors->has('division_list') ? 'is-invalid' : '' }}"
                                    name="division_list_id" id="division_list_id">
                                    @foreach ($division_lists as $id => $entry)
                                        <option value="{{ $id }}"
                                            {{ old('division_list_id') == $id ? 'selected' : '' }}>{{ $entry }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('division_list'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('division_list') }}
                                    </div>
                                @endif
                                <span
                                    class="help-block">{{ trans('cruds.jobHistory.fields.division_list_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="range_list_id">{{ trans('cruds.jobHistory.fields.range_list') }}</label>
                                <select class="form-select select2 {{ $errors->has('range_list') ? 'is-invalid' : '' }}"
                                    name="range_list_id" id="range_list_id">
                                    @foreach ($range_lists as $id => $entry)
                                        <option value="{{ $id }}"
                                            {{ old('range_list_id') == $id ? 'selected' : '' }}>{{ $entry }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('range_list'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('range_list') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.jobHistory.fields.range_list_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="beat_list_id">{{ trans('cruds.jobHistory.fields.beat_list') }}</label>
                                <select class="form-select select2 {{ $errors->has('beat_list') ? 'is-invalid' : '' }}"
                                    name="beat_list_id" id="beat_list_id">
                                    @foreach ($beat_lists as $id => $entry)
                                        <option value="{{ $id }}"
                                            {{ old('beat_list_id') == $id ? 'selected' : '' }}>{{ $entry }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('beat_list'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('beat_list') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.jobHistory.fields.beat_list_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label class="required"
                                    for="office_unit_id">{{ trans('cruds.jobHistory.fields.office_unit') }}</label>
                                <select
                                    class="form-control select2 {{ $errors->has('office_unit') ? 'is-invalid' : '' }}"
                                    name="office_unit_id" id="office_unit_id" required>
                                    @foreach ($office_units as $id => $entry)
                                        <option value="{{ $id }}"
                                            {{ old('office_unit_id') == $id ? 'selected' : '' }}>{{ $entry }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('office_unit'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('office_unit') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.jobHistory.fields.office_unit_helper') }}</span>
                            </div> --}}
                                <div class="form-group">
                                    <label class="required"
                                        for="go_upload">{{ trans('cruds.jobHistory.fields.go_upload') }}</label>
                                    <div class="needsclick dropzone {{ $errors->has('go_upload') ? 'is-invalid' : '' }}"
                                        id="go_upload-dropzone">
                                    </div>
                                    @if ($errors->has('go_upload'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('go_upload') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.jobHistory.fields.go_upload_helper') }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-danger" type="submit">
                                    {{ trans('global.save') }}
                                </button>
                            </div>
                        </form>
                        {{-- <div class="row">

                            <div class="col-4">
                                <div class="form-group">
                                    <label for="level_3">Ofice Unit</label>
                                    <select class="form-select" name="level_3" id="level_3" disabled>
                                        <option value="">Select Subunit</option>
                                        <option value="">Select Subunit</option>
                                        <option value="">Select Subunit</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="level_3">{{ trans('cruds.jobHistory.fields.office_unit') }}</label>
                                    <select class="form-select" name="level_3" id="level_3" disabled>
                                        <option value="">Select Subunit</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="level_3">{{ trans('cruds.jobHistory.fields.office_unit') }}</label>
                                    <select class="form-select" name="level_3" id="level_3" disabled>
                                        <option value="">Select Subunit</option>
                                    </select>
                                </div>

                            </div>

                        </div> --}}
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        Dropzone.options.goUploadDropzone = {
            url: '{{ route('admin.job-histories.storeMedia') }}',
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
                $('form').find('input[name="go_upload"]').remove()
                $('form').append('<input type="hidden" name="go_upload" value="' + response.name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="go_upload"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                @if (isset($jobHistory) && $jobHistory->go_upload)
                    var file = {!! json_encode($jobHistory->go_upload) !!}
                    this.options.addedfile.call(this, file)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="go_upload" value="' + file.file_name + '">')
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
