@extends('layouts.admin')
@section('content')
<div class="card p-2">
    <div class="container">
        <div class="row">
            @include('admin.commonemployee.commonmenu')
            <div class="col-md-8">
                <div class="tab-content my-1 border p-2" id="v-pills-tabContent">
                    <div class="text-center">
                        @if (app()->getLocale() === 'bn')
                            কর্মকর্তা/কর্মচারী আইডি : <b>{{ englishToBanglaNumber($employee['employeeid'] ?? 0) }}</b>
                        @else
                            Employee ID : <b>{{ $employee->employeeid }}</b>
                        @endif

 
                        <br>

                        @if (app()->getLocale() === 'bn')
                            কর্মকর্তা/কর্মচারী নাম : <b>{{ $employee->fullname_bn }}</b>
                        @else
                            Employee Name: <b>{{ $employee->fullname_en }}</b>
                        @endif
                    </div>
                    <hr>
                    <h4>{{ trans('cruds.training.title_singular') }}</h4>
                    <br>
                    <form method="POST"
                        action="{{ route('admin.trainings.store', ['employee_id' => request()->query('id')]) }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row row-cols-2">

                            <div class="form-group">
                                <label class="required"
                                    for="training_type_id">{{ trans('cruds.training.fields.training_type') }}</label>
                                <select
                                    class="form-control select2 {{ $errors->has('training_type') ? 'is-invalid' : '' }}"
                                    name="training_type_id" id="training_type_id" required onchange="showCounter()">
                                    @foreach ($training_types as $id => $entry)
                                        <option value="{{ $id }}" {{ old('training_type_id') == $id ? 'selected' : '' }}>
                                            {{ $entry }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('training_type'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('training_type') }}
                                    </div>
                                @endif
                                <span
                                    class="help-block">{{ trans('cruds.training.fields.training_type_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="training_name">{{ trans('cruds.training.fields.training_name') }}</label>
                                <input class="form-control {{ $errors->has('training_name') ? 'is-invalid' : '' }}"
                                    type="text" name="training_name" id="training_name"
                                    value="{{ old('training_name', '') }}">
                                @if ($errors->has('training_name'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('training_name') }}
                                    </div>
                                @endif
                                <span
                                    class="help-block">{{ trans('cruds.training.fields.training_name_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="institute_name">{{ trans('cruds.training.fields.institute_name') }}</label>
                                <input class="form-control {{ $errors->has('institute_name') ? 'is-invalid' : '' }}"
                                    type="text" name="institute_name" id="institute_name"
                                    value="{{ old('institute_name', '') }}">
                                @if ($errors->has('institute_name'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('institute_name') }}
                                    </div>
                                @endif
                                <span
                                    class="help-block">{{ trans('cruds.training.fields.institute_name_helper') }}</span>
                            </div>
                            <div class="form-group counter" style="display: none;">
                                <label for="country_id">{{ trans('cruds.training.fields.country') }}</label>
                                <select class="form-select select2 {{ $errors->has('country') ? 'is-invalid' : '' }}"
                                    name="country_id" id="country_id">
                                    @foreach ($countries as $id => $entry)
                                        <option value="{{ $id }}" {{ (old('country_id') ?? 14) == $id ? 'selected' : '' }}>
                                            {{ $entry }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('country'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('country') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.training.fields.country_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label class="required"
                                    for="start_date">{{ trans('cruds.training.fields.start_date') }}</label>
                                <input class="form-control date {{ $errors->has('start_date') ? 'is-invalid' : '' }}"
                                    type="text" name="start_date" id="start_date" value="{{ old('start_date') }}"
                                    required>
                                @if ($errors->has('start_date'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('start_date') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.training.fields.start_date_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="end_date">{{ trans('cruds.training.fields.end_date') }}</label>
                                <input class="form-control date {{ $errors->has('end_date') ? 'is-invalid' : '' }}"
                                    type="text" name="end_date" id="end_date" value="{{ old('end_date') }}">
                                @if ($errors->has('end_date'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('end_date') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.training.fields.end_date_helper') }}</span>
                            </div>
                            {{-- <div class="form-group">
                                <label for="grade">{{ trans('cruds.training.fields.grade') }}</label>
                                <input class="form-control {{ $errors->has('grade') ? 'is-invalid' : '' }}" type="text"
                                    name="grade" id="grade" value="{{ old('grade', '') }}">
                                @if ($errors->has('grade'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('grade') }}

                                </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.training.fields.grade_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="position">{{ trans('cruds.training.fields.position') }}</label>
                                <input class="form-control {{ $errors->has('position') ? 'is-invalid' : '' }}"
                                    type="text" name="position" id="position" value="{{ old('position', '') }}">
                                @if ($errors->has('position'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('position') }}
                                </div>
 
                                @endif
                                <span class="help-block">{{ trans('cruds.training.fields.position_helper') }}</span>
                            </div> --}}
                            <div class="form-group">
                                <label for="location">{{ trans('cruds.training.fields.location') }}</label>
                                <input class="form-control {{ $errors->has('location') ? 'is-invalid' : '' }}"
                                    type="text" name="location" id="location" value="{{ old('location', '') }}">
                                @if ($errors->has('location'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('location') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.training.fields.location_helper') }}</span>
                            </div>


                            <div class="form-group">
                                <label
                                    for="upload_certificate">{{ trans('cruds.training.fields.upload_certificate') }}</label>
                                <div class="needsclick dropzone {{ $errors->has('upload_certificate') ? 'is-invalid' : '' }}"
                                    id="upload_certificate-dropzone">
                                </div>
                                @if($errors->has('upload_certificate'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('upload_certificate') }}
                                    </div>
                                @endif
                                <span
                                    class="help-block">{{ trans('cruds.training.fields.upload_certificate_helper') }}</span>
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
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        Dropzone.options.uploadCertificateDropzone = {
            url: '{{ route('admin.trainings.storeMedia') }}',
            maxFilesize: 4, // MB
            maxFiles: 1,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            params: {
                size: 4
            },
            success: function(file, response) {
                $('form').find('input[name="upload_certificate"]').remove()
                $('form').append('<input type="hidden" name="upload_certificate" value="' + response.name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="upload_certificate"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                @if (isset($training) && $training->upload_certificate)
                    var file = {!! json_encode($training->upload_certificate) !!}
                    this.options.addedfile.call(this, file)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="upload_certificate" value="' + file.file_name +
                        '">')
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
    <script>
        function showCounter() {
            var selectedValue = document.getElementById("training_type_id").value;
            if (selectedValue == 2) {
                document.querySelector('.counter').style.display = 'block'; // Show the counter
            } else {
                document.querySelector('.counter').style.display = 'none'; // Hide the counter
            }
        }
    </script>
@endsection
 
