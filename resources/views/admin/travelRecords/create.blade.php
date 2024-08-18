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
                        <h4>
                            {{ trans('cruds.travelRecord.title_singular') }}
                        </h4>
                        <br>
                        <form method="POST" action="{{ route('admin.travel-records.store') }}" enctype="multipart/form-data">
                            @csrf
                            <x-hidden-input name="employee_id" value="{{ request()->input('id') }}" />
                            <div class="row row-cols-2">
                                <div class="form-group">
                                    <label class="required"
                                        for="title_id">{{ trans('cruds.travelRecord.fields.title') }}</label>
                                    <select class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}"
                                        name="title_id" id="title_id" required>
                                        @foreach ($titles as $id => $entry)
                                            <option value="{{ $id }}"
                                                {{ old('title_id') == $id ? 'selected' : '' }}>
                                                {{ $entry }}
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
                                        @endif

                                    </select>
                                    @if ($errors->has('title'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('title') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.travelRecord.fields.title_helper') }}</span>
                                </div>



                                <div class="form-group otherDiv d-none">
                                    <label class="required"
                                        for="name_bn">{{ trans('cruds.foreignTravelPersonal.fields.name_bn') }}</label>
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
                                    <label class="required"
                                        for="name_en">{{ trans('cruds.foreignTravelPersonal.fields.name_en') }}</label>
                                    <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}"
                                        type="text" name="name_en" id="name_en" value="{{ old('name_en', '') }}">
                                    @if ($errors->has('name_en'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('name_en') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.foreignTravelPersonal.fields.title_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="country_id">{{ trans('cruds.travelRecord.fields.country') }}</label>
                                    <select class="form-control select2 {{ $errors->has('country') ? 'is-invalid' : '' }}"
                                        name="country_id" id="country_id">
                                        @foreach ($countries as $id => $entry)
                                            <option value="{{ $id }}"
                                                {{ old('country_id') == $id ? 'selected' : '' }}>
                                                {{ $entry }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('country'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('country') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.travelRecord.fields.country_helper') }}</span>
                                </div>
                                {{-- <div class="form-group">
                                <label for="purpose_id">{{ trans('cruds.travelRecord.fields.purpose') }}</label>
                                <select class="form-control select2 {{ $errors->has('purpose') ? 'is-invalid' : '' }}"
                                    name="purpose_id" id="purpose_id">
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
                                <span class="help-block">{{ trans('cruds.travelRecord.fields.purpose_helper') }}</span>
                            </div> --}}
                                <div class="form-group">
                                    <label class="required"
                                        for="start_date">{{ trans('cruds.travelRecord.fields.start_date') }}</label>
                                    <input class="form-control date {{ $errors->has('start_date') ? 'is-invalid' : '' }}"
                                        type="text" name="start_date" id="start_date" value="{{ old('start_date') }}"
                                        required>
                                    @if ($errors->has('start_date'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('start_date') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.travelRecord.fields.start_date_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label class="required"
                                        for="end_date">{{ trans('cruds.travelRecord.fields.end_date') }}</label>
                                    <input class="form-control date {{ $errors->has('end_date') ? 'is-invalid' : '' }}"
                                        type="text" name="end_date" id="end_date" value="{{ old('end_date') }}"
                                        required>
                                    @if ($errors->has('end_date'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('end_date') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.travelRecord.fields.end_date_helper') }}</span>
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
        $(document).ready(function() {
            document.getElementById('title_id').addEventListener('change', function() {
                var otherDivs = document.querySelectorAll(
                    '.otherDiv'); // Get all elements with class 'otherDiv'

                if (this.value === 'Other') {
                    otherDivs.forEach(function(div) {
                        div.classList.remove('d-none'); // Show all elements with class 'otherDiv'
                    });
                } else {
                    otherDivs.forEach(function(div) {
                        div.classList.add('d-none'); // Hide all elements with class 'otherDiv'
                    });
                }
            })
        });
    </script>
@endsection
