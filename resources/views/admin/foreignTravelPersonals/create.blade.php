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
                    <h4>{{ trans('cruds.foreignTravelPersonal.title_singular') }}</h4>
                    <br>

                    <form method="POST" action="{{ route('admin.foreign-travel-personals.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <x-hidden-input name="employee_id" value="{{ request()->input('id') }}" />
                        <div class="row row-cols-2">



                            <div class="form-group">
                                <label class="required"
                                    for="title_id">{{ trans('cruds.foreignTravelPersonal.fields.title') }}</label>
                                <select class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}"
                                    name="title_id" id="title_id" required>
                                    @foreach ($titles as $id => $entry)
                                        <option value="{{ $id }}" {{ old('title_id') == $id ? 'selected' : '' }}>{{ $entry }}
                                        </option>
                                    @endforeach

                                    @if (app()->getLocale() === 'bn')
                                        <option value="Other" {{ old('title_id') == 'Other' ? 'selected' : '' }}>
                                            অন্যান্য
                                        </option>
                                    @else
                                        <option value="Other" {{ old('title_id') == 'Other' ? 'selected' : '' }}>
                                            Other
                                        </option>

                                <div class="form-group">
                                    <label
                                        for="country_id">{{ trans('cruds.foreignTravelPersonal.fields.country') }}</label>
                                    <select class="form-control select2 {{ $errors->has('country') ? 'is-invalid' : '' }}"
                                        name="country_id" id="country_id">
                                        @foreach ($countries as $id => $entry)
                                            <option value="{{ $id }}"
                                                {{ old('country_id') == $id ? 'selected' : '' }}>{{ $entry }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('country'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('country') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.foreignTravelPersonal.fields.country_helper') }}</span>
                                </div>
                                {{-- <div class="form-group">
                                    <label class="required"
                                        for="purpose_id">{{ trans('cruds.foreignTravelPersonal.fields.purpose') }}</label>
                                    <select class="form-control select2 {{ $errors->has('purpose') ? 'is-invalid' : '' }}"
                                        name="purpose_id" id="purpose_id" required>
                                        @foreach ($purposes as $id => $entry)
                                            <option value="{{ $id }}"
                                                {{ old('purpose_id') == $id ? 'selected' : '' }}>{{ $entry }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('purpose'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('purpose') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.foreignTravelPersonal.fields.purpose_helper') }}</span>
                                </div> --}}
                                <div class="form-group">
                                    <label
                                        for="from_date">{{ trans('cruds.foreignTravelPersonal.fields.from_date') }}</label>
                                    <input class="form-control date {{ $errors->has('from_date') ? 'is-invalid' : '' }}"
                                        type="text" name="from_date" id="from_date" value="{{ old('from_date') }}">
                                    @if ($errors->has('from_date'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('from_date') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.foreignTravelPersonal.fields.from_date_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="to_date">{{ trans('cruds.foreignTravelPersonal.fields.to_date') }}</label>
                                    <input class="form-control date {{ $errors->has('to_date') ? 'is-invalid' : '' }}"
                                        type="text" name="to_date" id="to_date" value="{{ old('to_date') }}">
                                    @if ($errors->has('to_date'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('to_date') }}
                                        </div>

                                    @endif



                                </select>
                                @if ($errors->has('title'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('title') }}
                                    </div>
                                @endif
                                <span
                                    class="help-block">{{ trans('cruds.foreignTravelPersonal.fields.title_helper') }}</span>
                            </div>

                            <div class="form-group otherDiv d-none">
                                <label for="name_bn">{{ trans('cruds.foreignTravelPersonal.fields.name_bn') }}</label>
                                <input class="form-control {{ $errors->has('name_bn') ? 'is-invalid' : '' }}"
                                    type="text" name="name_bn" id="name_bn" value="{{ old('name_bn', '') }}">
                                @if ($errors->has('name_bn'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('name_bn') }}
                                    </div>
                                @endif
                                <span
                                    class="help-block">{{ trans('cruds.foreignTravelPersonal.fields.title_helper') }}</span>
                            </div>

                            <div class="form-group otherDiv d-none">
                                <label for="name_en">{{ trans('cruds.foreignTravelPersonal.fields.name_en') }}</label>
                                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text"
                                    name="name_en" id="name_en" value="{{ old('name_en', '') }}">
                                @if ($errors->has('name_en'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('name_en') }}
                                    </div>
                                @endif
                                <span
                                    class="help-block">{{ trans('cruds.foreignTravelPersonal.fields.title_helper') }}</span>
                            </div>



                            <div class="form-group">
                                <label
                                    for="country_id">{{ trans('cruds.foreignTravelPersonal.fields.country') }}</label>
                                <select class="form-control select2 {{ $errors->has('country') ? 'is-invalid' : '' }}"
                                    name="country_id" id="country_id">
                                    @foreach ($countries as $id => $entry)
                                        <option value="{{ $id }}" {{ old('country_id') == $id ? 'selected' : '' }}>
                                            {{ $entry }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('country'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('country') }}
                                    </div>
                                @endif
                                <span
                                    class="help-block">{{ trans('cruds.foreignTravelPersonal.fields.country_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label class="required"
                                    for="purpose_id">{{ trans('cruds.foreignTravelPersonal.fields.purpose') }}</label>
                                <select class="form-control select2 {{ $errors->has('purpose') ? 'is-invalid' : '' }}"
                                    name="purpose_id" id="purpose_id" required>
                                    @foreach ($purposes as $id => $entry)
                                        <option value="{{ $id }}" {{ old('purpose_id') == $id ? 'selected' : '' }}>
                                            {{ $entry }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('purpose'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('purpose') }}
                                    </div>
                                @endif
                                <span
                                    class="help-block">{{ trans('cruds.foreignTravelPersonal.fields.purpose_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label
                                    for="from_date">{{ trans('cruds.foreignTravelPersonal.fields.from_date') }}</label>
                                <input class="form-control date {{ $errors->has('from_date') ? 'is-invalid' : '' }}"
                                    type="text" name="from_date" id="from_date" value="{{ old('from_date') }}">
                                @if ($errors->has('from_date'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('from_date') }}
                                    </div>
                                @endif
                                <span
                                    class="help-block">{{ trans('cruds.foreignTravelPersonal.fields.from_date_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="to_date">{{ trans('cruds.foreignTravelPersonal.fields.to_date') }}</label>
                                <input class="form-control date {{ $errors->has('to_date') ? 'is-invalid' : '' }}"
                                    type="text" name="to_date" id="to_date" value="{{ old('to_date') }}">
                                @if ($errors->has('to_date'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('to_date') }}
                                    </div>
                                @endif
                                <span
                                    class="help-block">{{ trans('cruds.foreignTravelPersonal.fields.to_date_helper') }}</span>
                            </div>

                            <div class="form-group">
                                <label class="required"
                                    for="leave_permission">{{ trans('cruds.foreignTravelPersonal.fields.leave_permission') }}</label>
                                <div class="needsclick dropzone {{ $errors->has('leave_permission') ? 'is-invalid' : '' }}"
                                    id="leave_permission-dropzone">
                                </div>
                                @if ($errors->has('leave_permission'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('leave_permission') }}
                                    </div>
                                @endif
                                <span
                                    class="help-block">{{ trans('cruds.foreignTravelPersonal.fields.leave_permission_helper') }}</span>
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
    Dropzone.options.leavePermissionDropzone = {
        url: '{{ route('admin.foreign-travel-personals.storeMedia') }}',
        maxFilesize: 4, // MB
        maxFiles: 1,
        addRemoveLinks: true,
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        },
        params: {
            size: 4
        },
        success: function (file, response) {
            $('form').find('input[name="leave_permission"]').remove()
            $('form').append('<input type="hidden" name="leave_permission" value="' + response.name + '">')
        },
        removedfile: function (file) {
            file.previewElement.remove()
            if (file.status !== 'error') {
                $('form').find('input[name="leave_permission"]').remove()
                this.options.maxFiles = this.options.maxFiles + 1
            }
        },
        init: function () {
            @if (isset($foreignTravelPersonal) && $foreignTravelPersonal->leave_permission)
                var file = {!! json_encode($foreignTravelPersonal->leave_permission) !!}
                this.options.addedfile.call(this, file)
                file.previewElement.classList.add('dz-complete')
                $('form').append('<input type="hidden" name="leave_permission" value="' + file.file_name + '">')
                this.options.maxFiles = this.options.maxFiles - 1
            @endif
        },
        error: function (file, response) {
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
    $(document).ready(function () {
        document.getElementById('title_id').addEventListener('change', function () {
            var otherDivs = document.querySelectorAll(
                '.otherDiv'); // Get all elements with class 'otherDiv'

            if (this.value === 'Other') {
                otherDivs.forEach(function (div) {
                    div.classList.remove('d-none'); // Show all elements with class 'otherDiv'
                });
            } else {
                otherDivs.forEach(function (div) {
                    div.classList.add('d-none'); // Hide all elements with class 'otherDiv'
                });
            }
        })
    });
</script>
@endsection