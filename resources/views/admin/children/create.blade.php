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

                        <h4>{{ trans('cruds.child.title_singular') }}</h4>
                        <br>
                        <form method="POST"
                            action="{{ route('admin.children.store', ['employee_id' => request()->query('id')]) }}"
                            enctype="multipart/form-data">
                            @csrf


                            <div class="row row-cols-2">
                                <div class="form-group">
                                    <label class="required" for="name_bn">{{ trans('cruds.child.fields.name_bn') }}</label>
                                    <input class="form-control {{ $errors->has('name_bn') ? 'is-invalid' : '' }}"
                                        type="text" name="name_bn" id="name_bn" value="{{ old('name_bn', '') }}"
                                        required>
                                    @if ($errors->has('name_bn'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('name_bn') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.child.fields.name_bn_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label class="required" for="name_en">{{ trans('cruds.child.fields.name_en') }}</label>
                                    <input class="form-control {{ $errors->has('name_en') ? 'is-invalid' : '' }}"
                                        type="text" name="name_en" id="name_en" value="{{ old('name_en', '') }}"
                                        required>
                                    @if ($errors->has('name_en'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('name_en') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.child.fields.name_en_helper') }}</span>
                                </div>

                                <div class="form-group">
                                    <label
                                        for="birth_certificate">{{ trans('cruds.child.fields.birth_certificate') }}</label>
                                    <div class="needsclick dropzone {{ $errors->has('birth_certificate') ? 'is-invalid' : '' }}"
                                        id="birth_certificate-dropzone">
                                    </div>
                                    @if ($errors->has('birth_certificate'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('birth_certificate') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.child.fields.birth_certificate_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label class="required" for="date_of_birth">{{ trans('cruds.child.fields.date_of_birth') }}</label>
                                    <input class="form-select date {{ $errors->has('date_of_birth') ? 'is-invalid' : '' }}"
                                        type="text" name="date_of_birth" id="date_of_birth"
                                        value="{{ old('date_of_birth') }}">
                                    @if ($errors->has('date_of_birth'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('date_of_birth') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.child.fields.date_of_birth_helper') }}</span>
                                </div>

                                <div class="form-group">
                                    <label class="required"
                                        for="complite_21">{{ trans('cruds.child.fields.complite_21') }}</label>
                                    <input class="form-control {{ $errors->has('complite_21') ? 'is-invalid' : '' }}"
                                        type="text" name="complite_21" id="complite_21"
                                        value="{{ old('complite_21', '') }}" readonly>
                                    @if ($errors->has('complite_21'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('complite_21') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.child.fields.complite_21_helper') }}</span>
                                </div>

                                <div class="form-group">
                                    <label class="required"
                                        for="gender_id">{{ trans('cruds.child.fields.gender') }}</label>
                                    <select class="form-select select2 {{ $errors->has('gender') ? 'is-invalid' : '' }}"
                                        name="gender_id" id="gender_id" required>
                                        @foreach ($genders as $id => $entry)
                                            <option value="{{ $id }}"
                                                {{ old('gender_id') == $id ? 'selected' : '' }}>{{ $entry }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('gender'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('gender') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.child.fields.gender_helper') }}</span>
                                </div>
                                <!-- NID Yes/No -->
                                <div class="form-group">
                                    <label for="nid_option">
                                        @if (app()->getLocale() === 'bn')
                                            এনআইডি
                                        @else
                                            NID
                                        @endif
                                    </label>
                                    <select class="form-select" id="nid_option" name="nid_option">
                                        <option value="">
                                            @if (app()->getLocale() === 'bn')
                                                অনুগ্রহ করে নির্বাচন করুন
                                            @else
                                                Please Select
                                            @endif
                                        </option>
                                        <option value="no">
                                            @if (app()->getLocale() === 'bn')
                                                না
                                            @else
                                                No
                                            @endif
                                        </option>
                                        <option value="Yes">
                                            @if (app()->getLocale() === 'bn')
                                                হ্যাঁ
                                            @else
                                                Yes
                                            @endif
                                        </option>
                                    </select>
                                </div>

                                <!-- NID Number Field -->
                                <div class="form-group" id="nid_number_field" style="display: none;">
                                    <label for="nid_number">{{ trans('cruds.child.fields.nid_number') }}</label>
                                    <input class="form-control {{ $errors->has('nid_number') ? 'is-invalid' : '' }}"
                                        type="text" name="nid_number" id="nid_number"
                                        value="{{ old('nid_number', '') }}">
                                    @if ($errors->has('nid_number'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('nid_number') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.child.fields.nid_number_helper') }}</span>
                                </div>



                                <!-- NID Upload Field -->
                                <div class="form-group" id="childdren_nid_field" style="display: none;">
                                    <label for="childdren_nid">{{ trans('cruds.child.fields.childdren_nid') }}</label>
                                    <div class="needsclick dropzone {{ $errors->has('childdren_nid') ? 'is-invalid' : '' }}"
                                        id="childdren_nid-dropzone">
                                    </div>
                                    @if ($errors->has('childdren_nid'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('childdren_nid') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.child.fields.childdren_nid_helper') }}</span>
                                </div>


                                <!-- Passport Yes/No -->
                                <div class="form-group">
                                    <label for="passport_option">
                                        @if (app()->getLocale() === 'bn')
                                            পাসপোর্ট
                                        @else
                                            Passport
                                        @endif
                                    </label>
                                    <select class="form-select" id="passport_option" name="passport_option">
                                        <option value="">
                                            @if (app()->getLocale() === 'bn')
                                                অনুগ্রহ করে নির্বাচন করুন
                                            @else
                                                Please Select
                                            @endif
                                        </option>
                                        <option value="no">
                                            @if (app()->getLocale() === 'bn')
                                                না
                                            @else
                                                No
                                            @endif
                                        </option>
                                        <option value="Yes">
                                            @if (app()->getLocale() === 'bn')
                                                হ্যাঁ
                                            @else
                                                Yes
                                            @endif
                                        </option>
                                    </select>
                                </div>

                                <!-- Passport Number Field -->
                                <div class="form-group" id="passport_number_field" style="display: none;">
                                    <label for="passport_number">{{ trans('cruds.child.fields.passport_number') }}</label>
                                    <input class="form-control {{ $errors->has('passport_number') ? 'is-invalid' : '' }}"
                                        type="text" name="passport_number" id="passport_number"
                                        value="{{ old('passport_number', '') }}">
                                    @if ($errors->has('passport_number'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('passport_number') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.child.fields.passport_number_helper') }}</span>
                                </div>
                                <!-- Passport Upload Field -->
                                <div class="form-group" id="childdren_passporft_field" style="display: none;">
                                    <label
                                        for="childdren_passporft">{{ trans('cruds.child.fields.childdren_passporft') }}</label>
                                    <div class="needsclick dropzone {{ $errors->has('childdren_passporft') ? 'is-invalid' : '' }}"
                                        id="childdren_passporft-dropzone">
                                    </div>
                                    @if ($errors->has('childdren_passporft'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('childdren_passporft') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.child.fields.childdren_passporft_helper') }}</span>
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
    </div>
@endsection

@section('scripts')
    <script>
        Dropzone.options.birthCertificateDropzone = {
            url: '{{ route('admin.children.storeMedia') }}',
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
                $('form').find('input[name="birth_certificate"]').remove()
                $('form').append('<input type="hidden" name="birth_certificate" value="' + response.name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="birth_certificate"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                @if (isset($child) && $child->birth_certificate)
                    var file = {!! json_encode($child->birth_certificate) !!}
                    this.options.addedfile.call(this, file)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="birth_certificate" value="' + file.file_name +
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
        Dropzone.options.childdrenNidDropzone = {
            url: '{{ route('admin.children.storeMedia') }}',
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
                $('form').find('input[name="childdren_nid"]').remove()
                $('form').append('<input type="hidden" name="childdren_nid" value="' + response.name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="childdren_nid"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                @if (isset($child) && $child->childdren_nid)
                    var file = {!! json_encode($child->childdren_nid) !!}
                    this.options.addedfile.call(this, file)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="childdren_nid" value="' + file.file_name + '">')
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
        Dropzone.options.childdrenPassporftDropzone = {
            url: '{{ route('admin.children.storeMedia') }}',
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
                $('form').find('input[name="childdren_passporft"]').remove()
                $('form').append('<input type="hidden" name="childdren_passporft" value="' + response.name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="childdren_passporft"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                @if (isset($child) && $child->childdren_passporft)
                    var file = {!! json_encode($child->childdren_passporft) !!}
                    this.options.addedfile.call(this, file)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="childdren_passporft" value="' + file.file_name +
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
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            flatpickr("#date_of_birth", {
                dateFormat: "d/m/Y",
                onChange: function(selectedDates, dateStr, instance) {
                    const dateOfBirth = selectedDates[0];

                    if (dateOfBirth) {
                        const complete21Date = new Date(dateOfBirth);
                        complete21Date.setFullYear(complete21Date.getFullYear() + 23);

                        const formattedComplete21Date = flatpickr.formatDate(complete21Date, "d/m/Y");
                        document.getElementById('complite_21').value = formattedComplete21Date;
                    } else {
                        document.getElementById('complite_21').value =
                            ''; // Clear complete_21 if date_of_birth is invalid
                    }
                }
            });

            // Toggle NID and Passport fields based on Yes/No selection
            document.getElementById('nid_option').addEventListener('change', function() {
                const nidField = document.getElementById('nid_number_field');
                const nidUploadField = document.getElementById('childdren_nid_field');
                if (this.value === 'Yes') {
                    nidField.style.display = '';
                    nidUploadField.style.display = '';
                } else {
                    nidField.style.display = 'none';
                    nidUploadField.style.display = 'none';
                }
            });

            document.getElementById('passport_option').addEventListener('change', function() {
                const passportField = document.getElementById('passport_number_field');
                const passportUploadField = document.getElementById('childdren_passporft_field');
                if (this.value === 'Yes') {
                    passportField.style.display = '';
                    passportUploadField.style.display = '';
                } else {
                    passportField.style.display = 'none';
                    passportUploadField.style.display = 'none';
                }
            });

            // Form submission handler
            document.getElementById('employee-form').addEventListener('submit', function(event) {
                const dateOfBirthInput = document.getElementById('date_of_birth');
                const complite21Input = document.getElementById('complite_21');

                if (dateOfBirthInput.value) {
                    const dateParts = dateOfBirthInput.value.split('/');
                    dateOfBirthInput.value = `${dateParts[2]}-${dateParts[1]}-${dateParts[0]}`;
                }

                if (complite21Input.value) {
                    const dateParts = complite21Input.value.split('/');
                    complite21Input.value = `${dateParts[2]}-${dateParts[1]}-${dateParts[0]}`;
                }
            });
        });
    </script>
    <link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet">
@endsection
