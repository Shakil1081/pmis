@extends('layouts.admin')
@section('content')
    <div class="card p-2">
        <div class="container">
            <div class="row">
                @include('admin.commonemployee.commonmenu')
                <div class="col-md-8">
                    <div class="tab-content my-1 border p-2" id="v-pills-tabContent">
                        <div>

                            <h3> {{ trans('global.create') }} {{ trans('cruds.educationInformatione.title_singular') }}</h3>
                            <form method="POST" action="{{ route('admin.education-informationes.store') }}"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="row row-cols-3">
                                    <x-hidden-input name="employee_id" value="{{ request()->input('id') }}" />

                                    @livewire('education-form')
                                    {{-- <div class="form-group">
                                        <label class="required"
                                            for="name_of_exam_id">{{ trans('cruds.educationInformatione.fields.name_of_exam') }}</label>
                                        <select
                                            class="form-control select2 {{ $errors->has('name_of_exam') ? 'is-invalid' : '' }}"
                                            name="name_of_exam_id" id="name_of_exam_id" required>
                                            @foreach ($name_of_exams as $id => $entry)
                                                <option value="{{ $id }}"
                                                    {{ old('name_of_exam_id') == $id ? 'selected' : '' }}>
                                                    {{ $entry }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('name_of_exam'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('name_of_exam') }}
                                            </div>
                                        @endif
                                        <span
                                            class="help-block">{{ trans('cruds.educationInformatione.fields.name_of_exam_helper') }}</span>
                                    </div>
                                    <div class="form-group">
                                        <label class="required"
                                            for="exam_board_id">{{ trans('cruds.educationInformatione.fields.exam_board') }}</label>
                                        <select
                                            class="form-control select2 {{ $errors->has('exam_board') ? 'is-invalid' : '' }}"
                                            name="exam_board_id" id="exam_board_id" required>
                                            @foreach ($exam_boards as $id => $entry)
                                                <option value="{{ $id }}"
                                                    {{ old('exam_board_id') == $id ? 'selected' : '' }}>
                                                    {{ $entry }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('exam_board'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('exam_board') }}
                                            </div>
                                        @endif
                                        <span
                                            class="help-block">{{ trans('cruds.educationInformatione.fields.exam_board_helper') }}</span>
                                    </div> --}}
                                    <div class="row row-cols-2">


                                        {{-- <div class="form-group">
                                        <label
                                            for="passing_year">{{ trans('cruds.educationInformatione.fields.passing_year') }}</label>
                                        <input class="form-control {{ $errors->has('passing_year') ? 'is-invalid' : '' }}"
                                            type="number" name="passing_year" id="passing_year"
                                            value="{{ old('passing_year', '') }}" step="1">
                                        @if ($errors->has('passing_year'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('passing_year') }}
                                            </div>
                                        @endif
                                        <span
                                            class="help-block">{{ trans('cruds.educationInformatione.fields.passing_year_helper') }}</span>
                                    </div> --}}

                                        {{-- <div class="form-group">
                                        <label
                                            for="achievement_types_id">{{ trans('cruds.educationInformatione.fields.achievement_types') }}</label>
                                        <select
                                            class="form-control select2 {{ $errors->has('achievement_types') ? 'is-invalid' : '' }}"
                                            name="achievement_types_id" id="achievement_types_id">
                                            @foreach ($achievement_types as $id => $entry)
                                                <option value="{{ $id }}"
                                                    {{ old('achievement_types_id') == $id ? 'selected' : '' }}>
                                                    {{ $entry }}</option>
                                            @endforeach
                                            
                                        </select>
                                        @if ($errors->has('achievement_types'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('achievement_types') }}
                                            </div>
                                        @endif
                                        <span
                                            class="help-block">{{ trans('cruds.educationInformatione.fields.achievement_types_helper') }}</span>
                                    </div> --}}
                                        {{-- <div class="form-group">
                                        <label
                                            for="achivement">{{ trans('cruds.educationInformatione.fields.achivement') }}</label>
                                        <input class="form-control {{ $errors->has('achivement') ? 'is-invalid' : '' }}"
                                            type="text" name="achivement" id="achivement"
                                            value="{{ old('achivement', '') }}">
                                        @if ($errors->has('achivement'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('achivement') }}
                                            </div>
                                        @endif
                                        <span
                                            class="help-block">{{ trans('cruds.educationInformatione.fields.achivement_helper') }}</span>
                                    </div> --}}
                                        <div class="form-group">
                                            <label class="required"
                                                for="passing_year">{{ trans('cruds.educationInformatione.fields.passing_year') }}</label>
                                            <select required="required" class="form-control" name="passing_year"
                                                id="passing_year" onchange="getEduTitle(this,'','','');">
                                                <option value="">Select Year</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label
                                                for="catificarte">{{ trans('cruds.educationInformatione.fields.catificarte') }}</label>
                                            <div class="needsclick dropzone {{ $errors->has('catificarte') ? 'is-invalid' : '' }}"
                                                id="catificarte-dropzone">
                                            </div>
                                            @if ($errors->has('catificarte'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('catificarte') }}
                                                </div>
                                            @endif
                                            <span
                                                class="help-block">{{ trans('cruds.educationInformatione.fields.catificarte_helper') }}</span>
                                        </div>
                                    </div>
                                    {{-- <div class="form-group">
                                        <label class="required"
                                            for="employee_id">{{ trans('cruds.educationInformatione.fields.employee') }}</label>
                                        <select
                                            class="form-control select2 {{ $errors->has('employee') ? 'is-invalid' : '' }}"
                                            name="employee_id" id="employee_id" required>
                                            @foreach ($employees as $id => $entry)
                                                <option value="{{ $id }}"
                                                    {{ old('employee_id') == $id ? 'selected' : '' }}>
                                                    {{ $entry }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('employee'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('employee') }}
                                            </div>
                                        @endif
                                        <span
                                            class="help-block">{{ trans('cruds.educationInformatione.fields.employee_helper') }}</span>
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
                </div>
            </div>
        @endsection

        @section('scripts')
            <script>
                Dropzone.options.catificarteDropzone = {
                    url: '{{ route('admin.education-informationes.storeMedia') }}',
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
                        $('form').find('input[name="catificarte"]').remove()
                        $('form').append('<input type="hidden" name="catificarte" value="' + response.name + '">')
                    },
                    removedfile: function(file) {
                        file.previewElement.remove()
                        if (file.status !== 'error') {
                            $('form').find('input[name="catificarte"]').remove()
                            this.options.maxFiles = this.options.maxFiles + 1
                        }
                    },
                    init: function() {
                        @if (isset($educationInformatione) && $educationInformatione->catificarte)
                            var file = {!! json_encode($educationInformatione->catificarte) !!}
                            this.options.addedfile.call(this, file)
                            file.previewElement.classList.add('dz-complete')
                            $('form').append('<input type="hidden" name="catificarte" value="' + file.file_name + '">')
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
                // Get the select element
                var selectElement = document.getElementById("passing_year");

                // Generate options from 2029 to 2050
                for (var year = 1960; year <= 2024; year++) {
                    var option = document.createElement("option");
                    option.text = year;
                    option.value = year;
                    selectElement.add(option);
                }
            </script>
        @endsection
