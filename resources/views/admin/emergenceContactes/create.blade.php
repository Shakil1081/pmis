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

                    <h4>{{ trans('cruds.emergenceContacte.title_singular') }}</h4>
                    <br>

                    <form id="emergencyContactForm" method="POST"
                        action="{{ route('admin.emergence-contactes.store', ['employee_id' => request()->query('id')]) }}"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="row row-cols-3">
                            <div class="form-group">
                                <label class="required"
                                    for="contact_person_name">{{ trans('cruds.emergenceContacte.fields.contact_person_name') }}</label>
                                <input
                                    class="form-control {{ $errors->has('contact_person_name') ? 'is-invalid' : '' }}"
                                    type="text" name="contact_person_name" id="contact_person_name"
                                    value="{{ old('contact_person_name', '') }}" required>
                                @if ($errors->has('contact_person_name'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('contact_person_name') }}
                                    </div>
                                @endif
                                <span
                                    class="help-block">{{ trans('cruds.emergenceContacte.fields.contact_person_name_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label class="required"
                                    for="contact_person_relation">{{ trans('cruds.emergenceContacte.fields.contact_person_relation') }}</label>
                                <input
                                    class="form-control {{ $errors->has('contact_person_relation') ? 'is-invalid' : '' }}"
                                    type="text" name="contact_person_relation" id="contact_person_relation"
                                    value="{{ old('contact_person_relation', '') }}" required>
                                @if ($errors->has('contact_person_relation'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('contact_person_relation') }}
                                    </div>
                                @endif
                                <span
                                    class="help-block">{{ trans('cruds.emergenceContacte.fields.contact_person_relation_helper') }}</span>
                            </div>

                            <div class="form-group">
                                <label class="required"
                                    for="contact_person_number">{{ trans('cruds.emergenceContacte.fields.contact_person_number') }}</label>
                                <input
                                    class="form-control {{ $errors->has('contact_person_number') ? 'is-invalid' : '' }}"
                                    type="text" name="contact_person_number" id="contact_person_number"
                                    value="{{ old('contact_person_number', '') }}" required>
                                @if ($errors->has('contact_person_number'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('contact_person_number') }}
                                    </div>
                                @endif
                                <span
                                    class="help-block">{{ trans('cruds.emergenceContacte.fields.contact_person_number_helper') }}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">{{ trans('cruds.emergenceContacte.fields.address') }}</label>
                            <textarea class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}"
                                name="address" id="address">{{ old('address') }}</textarea>
                            @if ($errors->has('address'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('address') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.emergenceContacte.fields.address_helper') }}</span>
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
<!-- Inline JavaScript -->

@endsection