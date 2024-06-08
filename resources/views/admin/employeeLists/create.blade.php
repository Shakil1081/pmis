@extends('layouts.admin')
@section('content')
    <div class="">
        <div class="container my-3">
            <form method="POST" action="{{ route('admin.employee-lists.store', ['employee_id' => request()->query('id')]) }}"
                enctype="multipart/form-data">
                @csrf

                <h5 class="text-secondary">

                    @if (app()->getLocale() === 'bn')
                        ব্যক্তিগত তথ্য
                    @else
                        Personal information
                    @endif
                </h5>
                <div class="card border-secondary border p-4">

                    <div class="row row-cols-3">
                        <div class="form-group">
                            <label class="required"
                                for="fullname_bn">{{ trans('cruds.employeeList.fields.fullname_bn') }}</label>
                            <input class="form-control {{ $errors->has('fullname_bn') ? 'is-invalid' : '' }}" type="text"
                                name="fullname_bn" id="fullname_bn" value="{{ old('fullname_bn', '') }}" required>
                            @if ($errors->has('fullname_bn'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('fullname_bn') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.employeeList.fields.fullname_bn_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required"
                                for="fullname_en">{{ trans('cruds.employeeList.fields.fullname_en') }}</label>
                            <input class="form-control {{ $errors->has('fullname_en') ? 'is-invalid' : '' }}" type="text"
                                name="fullname_en" id="fullname_en" value="{{ old('fullname_en', '') }}" required>
                            @if ($errors->has('fullname_en'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('fullname_en') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.employeeList.fields.fullname_en_helper') }}</span>
                        </div>



                        <div class="form-group">
                            <label for="cadreid">{{ trans('cruds.employeeList.fields.cadreid') }}</label>
                            <input class="form-control {{ $errors->has('cadreid') ? 'is-invalid' : '' }}" type="text"
                                name="cadreid" id="cadreid" value="{{ old('cadreid', '') }}">
                            @if ($errors->has('cadreid'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('cadreid') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.employeeList.fields.cadreid_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="batch_id">{{ trans('cruds.employeeList.fields.batch') }}</label>
                            <select class="form-select select2 {{ $errors->has('batch') ? 'is-invalid' : '' }}"
                                name="batch_id" id="batch_id">
                                @foreach ($batches as $id => $entry)
                                    <option value="{{ $id }}" {{ old('batch_id') == $id ? 'selected' : '' }}>
                                        {{ $entry }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('batch'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('batch') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.employeeList.fields.batch_helper') }}</span>
                        </div>

                        <div class="form-group">
                            <label class="required"
                                for="fname_bn">{{ trans('cruds.employeeList.fields.fname_bn') }}</label>
                            <input class="form-control {{ $errors->has('fname_bn') ? 'is-invalid' : '' }}" type="text"
                                name="fname_bn" id="fname_bn" value="{{ old('fname_bn', '') }}" required>
                            @if ($errors->has('fname_bn'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('fname_bn') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.employeeList.fields.fname_bn_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required"
                                for="fname_en">{{ trans('cruds.employeeList.fields.fname_en') }}</label>
                            <input class="form-control {{ $errors->has('fname_en') ? 'is-invalid' : '' }}" type="text"
                                name="fname_en" id="fname_en" value="{{ old('fname_en', '') }}" required>
                            @if ($errors->has('fname_en'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('fname_en') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.employeeList.fields.fname_en_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required"
                                for="mname_bn">{{ trans('cruds.employeeList.fields.mname_bn') }}</label>
                            <input class="form-control {{ $errors->has('mname_bn') ? 'is-invalid' : '' }}" type="text"
                                name="mname_bn" id="mname_bn" value="{{ old('mname_bn', '') }}" required>
                            @if ($errors->has('mname_bn'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('mname_bn') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.employeeList.fields.mname_bn_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required"
                                for="mname_en">{{ trans('cruds.employeeList.fields.mname_en') }}</label>
                            <input class="form-control {{ $errors->has('mname_en') ? 'is-invalid' : '' }}" type="text"
                                name="mname_en" id="mname_en" value="{{ old('mname_en', '') }}" required>
                            @if ($errors->has('mname_en'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('mname_en') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.employeeList.fields.mname_en_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required"
                                for="date_of_birth">{{ trans('cruds.employeeList.fields.date_of_birth') }}</label>
                            <input
                                class="form-control date___remove {{ $errors->has('date_of_birth') ? 'is-invalid' : '' }}"
                                type="date" name="date_of_birth" id="date_of_birth" value="{{ old('date_of_birth') }}"
                                required>
                            @if ($errors->has('date_of_birth'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('date_of_birth') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.employeeList.fields.date_of_birth_helper') }}</span>
                        </div>

                        <div class="form-group">
                            <label for="prl_date">{{ trans('cruds.employeeList.fields.prl_date') }}</label>
                            <input class="form-control date {{ $errors->has('prl_date') ? 'is-invalid' : '' }}"
                                type="date" name="prl_date" id="prl_date" readonly>
                            @if ($errors->has('prl_date'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('prl_date') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.employeeList.fields.prl_date_helper') }}</span>
                        </div>
                        <div class="form-group" style="display: none">
                            <label
                                for="birth_certificate_upload">{{ trans('cruds.employeeList.fields.birth_certificate_upload') }}</label>
                            <div class="needsclick dropzone {{ $errors->has('birth_certificate_upload') ? 'is-invalid' : '' }}"
                                id="birth_certificate_upload-dropzone">
                            </div>
                            @if ($errors->has('birth_certificate_upload'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('birth_certificate_upload') }}
                                </div>
                            @endif
                            <span
                                class="help-block">{{ trans('cruds.employeeList.fields.birth_certificate_upload_helper') }}</span>
                        </div>

                        <div class="form-group">
                            <label class="required"
                                for="marital_statu_id">{{ trans('cruds.employeeList.fields.marital_statu') }}</label>
                            <select class="form-control select2 {{ $errors->has('marital_statu') ? 'is-invalid' : '' }}"
                                name="marital_statu_id" id="marital_statu_id" required>
                                @foreach ($marital_status as $id => $entry)
                                    <option value="{{ $id }}"
                                        {{ old('marital_statu_id') == $id ? 'selected' : '' }}>
                                        {{ $entry }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('marital_statu'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('marital_statu') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.employeeList.fields.marital_statu_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required"
                                for="gender_id">{{ trans('cruds.employeeList.fields.gender') }}</label>
                            <select class="form-control select2 {{ $errors->has('gender') ? 'is-invalid' : '' }}"
                                name="gender_id" id="gender_id" required>
                                @foreach ($genders as $id => $entry)
                                    <option value="{{ $id }}" {{ old('gender_id') == $id ? 'selected' : '' }}>
                                        {{ $entry }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('gender'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('gender') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.employeeList.fields.gender_helper') }}</span>
                        </div>
                    
                        @livewire('religion')
                    </div>

                </div>
                {{-- <h5 class="text-secondary mt-3"> Personel information</h5> --}}
                <div class="card border-secondary border p-4">
                    <div class="row row-cols-3">

                        <div class="form-group">
                            <label for="height">{{ trans('cruds.employeeList.fields.height') }}</label>
                            <input class="form-control {{ $errors->has('height') ? 'is-invalid' : '' }}" type="text"
                                name="height" id="height" value="{{ old('height', '') }}">
                            @if ($errors->has('height'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('height') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.employeeList.fields.height_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label
                                for="special_identity">{{ trans('cruds.employeeList.fields.special_identity') }}</label>
                            <input class="form-control {{ $errors->has('special_identity') ? 'is-invalid' : '' }}"
                                type="text" name="special_identity" id="special_identity"
                                value="{{ old('special_identity', '') }}">
                            @if ($errors->has('special_identity'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('special_identity') }}
                                </div>
                            @endif
                            <span
                                class="help-block">{{ trans('cruds.employeeList.fields.special_identity_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required"
                                for="home_district_id">{{ trans('cruds.employeeList.fields.home_district') }}</label>
                            <select class="form-control select2 {{ $errors->has('home_district') ? 'is-invalid' : '' }}"
                                name="home_district_id" id="home_district_id" required>
                                @foreach ($home_districts as $id => $entry)
                                    <option value="{{ $id }}"
                                        {{ old('home_district_id') == $id ? 'selected' : '' }}>
                                        {{ $entry }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('home_district'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('home_district') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.employeeList.fields.home_district_helper') }}</span>
                        </div>

                        <div class="form-group">
                            <label class="required"
                                for="blood_group_id">{{ trans('cruds.employeeList.fields.blood_group') }}</label>
                            <select class="form-control select2 {{ $errors->has('blood_group') ? 'is-invalid' : '' }}"
                                name="blood_group_id" id="blood_group_id" required>
                                @foreach ($blood_groups as $id => $entry)
                                    <option value="{{ $id }}"
                                        {{ old('blood_group_id') == $id ? 'selected' : '' }}>
                                        {{ $entry }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('blood_group'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('blood_group') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.employeeList.fields.blood_group_helper') }}</span>
                        </div>


                        <div class="form-group">
                            <label for="email">{{ trans('cruds.employeeList.fields.email') }}</label>
                            <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email"
                                name="email" id="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.employeeList.fields.email_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required"
                                for="mobile_number">{{ trans('cruds.employeeList.fields.mobile_number') }}</label>
                            <input class="form-control {{ $errors->has('mobile_number') ? 'is-invalid' : '' }}"
                                type="text" name="mobile_number" id="mobile_number"
                                value="{{ old('mobile_number', '') }}" minlength="11" maxlength="20" required>
                            @if ($errors->has('mobile_number'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('mobile_number') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.employeeList.fields.mobile_number_helper') }}</span>
                        </div>

                    </div>
                </div>

                {{-- <h5 class="text-secondary mt-3"> Personal</h5> --}}
                <div class="card border-secondary border p-4">
                    <div class="row row-cols-3">

                        <div class="form-group">
                            <label class="required" for="nid">{{ trans('cruds.employeeList.fields.nid') }}</label>
                            <input class="form-control {{ $errors->has('nid') ? 'is-invalid' : '' }}" type="number"
                                name="nid" id="nid" value="{{ old('nid', '') }}" step="1"
                                minlength="8" maxlength="20" required>
                            @if ($errors->has('nid'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('nid') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('validation.nid_number') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="nid_upload">{{ trans('cruds.employeeList.fields.nid_upload') }}</label>
                            <div class="needsclick dropzone {{ $errors->has('nid_upload') ? 'is-invalid' : '' }}"
                                id="nid_upload-dropzone">
                            </div>
                            @if ($errors->has('nid_upload'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('nid_upload') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.employeeList.fields.nid_upload_helper') }}</span>
                        </div>



                        <!-- <div class="form-group has_passport_group">
                                <label for="has_passport">{{ trans('cruds.employeeList.fields.has_passport') }}</label>

                                <select class="form-control" id="has_passport">
                                    <option>{{ trans('global.pleaseSelect') }}</option>

                                    @if (app()->getLocale() === 'bn')
    <option value="No">না</option>
                                        <option value="Yes">হ্যাঁ</option>
@else
    <option value="No">No</option>
                                        <option value="Yes">Yes</option>
    @endif
                                </select>
                            </div> -->

                        <div class="form-group passport_fields d-none">

                            <label for="has_passport">{{ trans('cruds.employeeList.fields.has_passport') }}</label>
                            <select class="form-control" id="has_passport" name="has_passport">
                                @if (app()->getLocale() === 'bn')
                                    <option>নির্বাচন করুন</option>
                                    <option value="No">না</option>
                                    <option value="Yes">হ্যাঁ</option>
                                @else
                                    <option>Select</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Yes</option>
                                @endif
                            </select>
                        </div>


                        <div class="form-group passport_fields d-none">
                            <label for="passport">{{ trans('cruds.employeeList.fields.passport') }}</label>
                            <input class="form-control {{ $errors->has('passport') ? 'is-invalid' : '' }}"
                                type="text" name="passport" id="passport" value="{{ old('passport', '') }}">
                            @if ($errors->has('passport'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('passport') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.employeeList.fields.passport_helper') }}</span>
                        </div>

                        <div class="form-group passport_upload d-none">
                            <label for="passport_upload">{{ trans('cruds.employeeList.fields.passport_upload') }}</label>
                            <div class="needsclick dropzone {{ $errors->has('passport_upload') ? 'is-invalid' : '' }}"
                                id="passport_upload-dropzone">
                            </div>
                            @if ($errors->has('passport_upload'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('passport_upload') }}
                                </div>
                            @endif
                            <span
                                class="help-block">{{ trans('cruds.employeeList.fields.passport_upload_helper') }}</span>
                        </div>


                        <div class="form-group has_license_group">
                            <label for="has_license">{{ trans('cruds.employeeList.fields.has_license') }}</label>
                            <select class="form-control" id="has_license">
                                <option>{{ trans('global.pleaseSelect') }}</option>
                                @if (app()->getLocale() === 'bn')
                                    <option value="No">না</option>
                                    <option value="Yes">হ্যাঁ</option>
                                @else
                                    <option value="No">No</option>
                                    <option value="Yes">Yes</option>
                                @endif
                            </select>
                        </div>


                        <div class="form-group license_fields" style="display: none;">
                            <label class="required"
                                for="license_type_id">{{ trans('cruds.employeeList.fields.license_type') }}</label>
                            <select class="form-control select2 {{ $errors->has('license_type') ? 'is-invalid' : '' }}"
                                name="license_type_id" id="license_type_id">
                                @foreach ($license_types as $id => $entry)
                                    <option value="{{ $id }}"
                                        {{ old('license_type_id') == $id ? 'selected' : '' }}>{{ $entry }}
                                    </option>
                                @endforeach
                            </select>
                            @if ($errors->has('license_type'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('license_type') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.employeeList.fields.license_type_helper') }}</span>
                        </div>

                        <div class="form-group license_number" style="display: none">
                            <label for="license_number">{{ trans('cruds.employeeList.fields.license_number') }}</label>
                            <input class="form-control {{ $errors->has('license_number') ? 'is-invalid' : '' }}"
                                type="text" name="license_number" id="license_number"
                                value="{{ old('license_number', '') }}">
                            @if ($errors->has('license_number'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('license_number') }}
                                </div>
                            @endif
                            <span
                                class="help-block">{{ trans('cruds.employeeList.fields.license_number_helper') }}</span>
                        </div>
                        <div class="form-group license_upload" style="display: none;">
                            <label for="license_upload">{{ trans('cruds.employeeList.fields.license_upload') }}</label>
                            <div class="needsclick dropzone {{ $errors->has('license_upload') ? 'is-invalid' : '' }}"
                                id="license_upload-dropzone">
                            </div>
                            @if ($errors->has('license_upload'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('license_upload') }}
                                </div>
                            @endif
                            <span
                                class="help-block">{{ trans('cruds.employeeList.fields.license_upload_helper') }}</span>
                        </div>

                    </div>
                </div>

                {{-- <h5 class="text-secondary mt-3"> First joining information</h5> --}}


                <div class="card border-secondary border p-4">



                    @livewire('project-revenue')

                    <div class="row row-cols-3">
                        {{-- <div class="form-group">
                            <label class="required"
                                for="projectrevenue_id">{{ trans('cruds.employeeList.fields.projectrevenue') }}</label>
                            <select class="form-select select2 {{ $errors->has('projectrevenue') ? 'is-invalid' : '' }}"
                                name="projectrevenue_id" id="projectrevenue_id" required>
                                @foreach ($projectrevenues as $id => $entry)
                                    <option value="{{ $id }}"
                                        {{ old('projectrevenue_id') == $id ? 'selected' : '' }}>{{ $entry }}
                                    </option>
                                @endforeach
                            </select>
                            @if ($errors->has('projectrevenue'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('projectrevenue') }}
                                </div>
                            @endif
                            <span
                                class="help-block">{{ trans('cruds.employeeList.fields.projectrevenue_helper') }}</span>
                        </div>


                        <div class="form-group projectlist" style="display:none">
                            <label for="project_id">{{ trans('cruds.employeeList.fields.project') }}</label>
                            <select class="form-control select2 {{ $errors->has('project') ? 'is-invalid' : '' }}"
                                name="project_id" id="project_id">
                                @foreach ($projects as $id => $entry)
                                    <option value="{{ $id }}"
                                        {{ old('project_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('project'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('project') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.employeeList.fields.project_helper') }}</span>
                        </div>


                        <div class="form-group notgotproject" style="display: none">
                            <label
                                for="departmental_exam_id">{{ trans('cruds.employeeList.fields.departmental_exam') }}</label>
                            <select
                                class="form-control select2 {{ $errors->has('departmental_exam') ? 'is-invalid' : '' }}"
                                name="departmental_exam_id" id="departmental_exam_id">
                                @foreach ($departmental_exams as $id => $entry)
                                    <option value="{{ $id }}"
                                        {{ old('departmental_exam_id') == $id ? 'selected' : '' }}>{{ $entry }}
                                    </option>
                                @endforeach
                            </select>
                            @if ($errors->has('departmental_exam'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('departmental_exam') }}
                                </div>
                            @endif
                            <span
                                class="help-block">{{ trans('cruds.employeeList.fields.departmental_exam_helper') }}</span>
                        </div>
                        <div class="form-group notgotproject" style="display: none">
                            <label
                                for="joiningexaminfo_id">{{ trans('cruds.employeeList.fields.joiningexaminfo') }}</label>
                            <select class="form-select {{ $errors->has('joiningexaminfo') ? 'is-invalid' : '' }}"
                                name="joiningexaminfo_id" id="joiningexaminfo_id">
                                @foreach ($joiningexaminfos as $id => $entry)
                                    <option value="{{ $id }}"
                                        {{ old('joiningexaminfo_id') == $id ? 'selected' : '' }}>{{ $entry }}
                                    </option>
                                @endforeach
                            </select>
                            @if ($errors->has('joiningexaminfo'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('joiningexaminfo') }}
                                </div>
                            @endif
                            <span
                                class="help-block">{{ trans('cruds.employeeList.fields.joiningexaminfo_helper') }}</span>
                        </div>


                        <div class="form-group notgotproject" style="display: none">
                            <label
                                for="certificateupload">{{ trans('cruds.employeeList.fields.departmental_exam') }}</label>
                            <select class="form-select" name="certificateupload" id="certificateupload">
                                <option value="NO" {{ old('certificateupload') == 'NO' ? 'selected' : '' }}>NO
                                </option>
                                <option value="Yes" {{ old('certificateupload') == 'Yes' ? 'selected' : '' }}>Yes
                                </option>
                            </select>
                        </div>

                        <div class="form-group certificate_upload" style="display: none;">
                            <label
                                for="certificate_upload">{{ trans('cruds.employeeList.fields.certificate_upload') }}</label>
                            <div class="needsclick dropzone {{ $errors->has('certificate_upload') ? 'is-invalid' : '' }}"
                                id="certificate_upload-dropzone">
                            </div>
                            @if ($errors->has('certificate_upload'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('certificate_upload') }}
                                </div>
                            @endif
                            <span
                                class="help-block">{{ trans('cruds.employeeList.fields.certificate_upload_helper') }}</span>
                        </div> --}}





                        {{-- only for project --}}


                        {{-- <div class="form-group project" style="display: none;">
                            <label
                                for="date_of_regularization">{{ trans('cruds.employeeList.fields.date_of_regularization') }}</label>
                            <input
                                class="form-control date {{ $errors->has('date_of_regularization') ? 'is-invalid' : '' }}"
                                type="text" name="date_of_regularization" id="date_of_regularization"
                                value="{{ old('date_of_regularization') }}">
                            @if ($errors->has('date_of_regularization'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('date_of_regularization') }}
                                </div>
                            @endif
                            <span
                                class="help-block">{{ trans('cruds.employeeList.fields.date_of_regularization_helper') }}</span>
                        </div>
                        <div class="form-group project" style="display: none;">
                            <label
                                for="regularization_issue_date">{{ trans('cruds.employeeList.fields.regularization_issue_date') }}</label>
                            <input
                                class="form-control date {{ $errors->has('regularization_issue_date') ? 'is-invalid' : '' }}"
                                type="text" name="regularization_issue_date" id="regularization_issue_date"
                                value="{{ old('regularization_issue_date') }}">
                            @if ($errors->has('regularization_issue_date'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('regularization_issue_date') }}
                                </div>
                            @endif
                            <span
                                class="help-block">{{ trans('cruds.employeeList.fields.regularization_issue_date_helper') }}</span>
                        </div> --}}
                    </div>
                </div>

                <div class="card border-secondary border p-4">
                    <div class="row row-cols-3">
                        <div class="form-group">
                            <label
                                for="first_joining_office_name">{{ trans('cruds.employeeList.fields.first_joining_office_name') }}</label>
                            <input
                                class="form-control {{ $errors->has('first_joining_office_name') ? 'is-invalid' : '' }}"
                                type="text" name="first_joining_office_name" id="first_joining_office_name"
                                value="{{ old('first_joining_office_name', '') }}">
                            @if ($errors->has('first_joining_office_name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('first_joining_office_name') }}
                                </div>
                            @endif
                            <span
                                class="help-block">{{ trans('cruds.employeeList.fields.first_joining_office_name_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label
                                for="first_joining_g_o_date">{{ trans('cruds.employeeList.fields.first_joining_g_o_date') }}</label>
                            <input
                                class="form-control date {{ $errors->has('first_joining_g_o_date') ? 'is-invalid' : '' }}"
                                type="text" name="first_joining_g_o_date" id="first_joining_g_o_date"
                                value="{{ old('first_joining_g_o_date') }}">
                            @if ($errors->has('first_joining_g_o_date'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('first_joining_g_o_date') }}
                                </div>
                            @endif
                            <span
                                class="help-block">{{ trans('cruds.employeeList.fields.first_joining_g_o_date_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="first_joining_memo_no">
                                {{ trans('cruds.employeeList.fields.first_joining_memo_no') }}</label>
                            <input class="form-control {{ $errors->has('first_joining_memo_no') ? 'is-invalid' : '' }}"
                                type="text" name="first_joining_memo_no" id="first_joining_memo_no"
                                value="{{ old('first_joining_memo_no', '') }}">
                            @if ($errors->has('first_joining_memo_no'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('first_joining_memo_no') }}
                                </div>
                            @endif
                            <span
                                class="help-block">{{ trans('cruds.employeeList.fields.first_joining_memo_no_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label
                                for="first_joining_order">{{ trans('cruds.employeeList.fields.first_joining_order') }}</label>
                            <div class="needsclick dropzone {{ $errors->has('first_joining_order') ? 'is-invalid' : '' }}"
                                id="first_joining_order-dropzone">
                            </div>
                            @if ($errors->has('first_joining_order'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('first_joining_order') }}
                                </div>
                            @endif
                            <span
                                class="help-block">{{ trans('cruds.employeeList.fields.first_joining_order_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="fjoining_letter">{{ trans('cruds.employeeList.fields.fjoining_letter') }}</label>
                            <div class="needsclick dropzone {{ $errors->has('fjoining_letter') ? 'is-invalid' : '' }}"
                                id="fjoining_letter-dropzone">
                            </div>
                            @if ($errors->has('fjoining_letter'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('fjoining_letter') }}
                                </div>
                            @endif
                            <span
                                class="help-block">{{ trans('cruds.employeeList.fields.fjoining_letter_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="date_of_gazette">{{ trans('cruds.employeeList.fields.date_of_gazette') }}</label>
                            <input class="form-control date {{ $errors->has('date_of_gazette') ? 'is-invalid' : '' }}"
                                type="text" name="date_of_gazette" id="date_of_gazette"
                                value="{{ old('date_of_gazette') }}">
                            @if ($errors->has('date_of_gazette'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('date_of_gazette') }}
                                </div>
                            @endif
                            <span
                                class="help-block">{{ trans('cruds.employeeList.fields.date_of_gazette_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label
                                for="date_of_gazette_if_any">{{ trans('cruds.employeeList.fields.date_of_gazette_if_any') }}</label>
                            <div class="needsclick dropzone {{ $errors->has('date_of_gazette_if_any') ? 'is-invalid' : '' }}"
                                id="date_of_gazette_if_any-dropzone">
                            </div>
                            @if ($errors->has('date_of_gazette_if_any'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('date_of_gazette_if_any') }}
                                </div>
                            @endif
                            <span
                                class="help-block">{{ trans('cruds.employeeList.fields.date_of_gazette_if_any_helper') }}</span>
                        </div>

                        <div class="form-group">
                            <label
                                for="regularization_office_orde_go">{{ trans('cruds.employeeList.fields.regularization_office_orde_go') }}</label>
                            <div class="needsclick dropzone {{ $errors->has('regularization_office_orde_go') ? 'is-invalid' : '' }}"
                                id="regularization_office_orde_go-dropzone">
                            </div>
                            @if ($errors->has('regularization_office_orde_go'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('regularization_office_orde_go') }}
                                </div>
                            @endif
                            <span
                                class="help-block">{{ trans('cruds.employeeList.fields.regularization_office_orde_go_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label
                                for="date_of_con_serviec">{{ trans('cruds.employeeList.fields.date_of_con_serviec') }}</label>
                            <input
                                class="form-control date {{ $errors->has('date_of_con_serviec') ? 'is-invalid' : '' }}"
                                type="text" name="date_of_con_serviec" id="date_of_con_serviec"
                                value="{{ old('date_of_con_serviec') }}">
                            @if ($errors->has('date_of_con_serviec'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('date_of_con_serviec') }}
                                </div>
                            @endif
                            <span
                                class="help-block">{{ trans('cruds.employeeList.fields.date_of_con_serviec_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label
                                for="confirmation_in_service">{{ trans('cruds.employeeList.fields.confirmation_in_service') }}</label>
                            <div class="needsclick dropzone {{ $errors->has('confirmation_in_service') ? 'is-invalid' : '' }}"
                                id="confirmation_in_service-dropzone">
                            </div>
                            @if ($errors->has('confirmation_in_service'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('confirmation_in_service') }}
                                </div>
                            @endif
                            <span
                                class="help-block">{{ trans('cruds.employeeList.fields.confirmation_in_service_helper') }}</span>
                        </div>


                        <div class="form-group">
                            <label class="required"
                                for="quota_id">{{ trans('cruds.employeeList.fields.quota') }}</label>
                            <select class="form-select {{ $errors->has('quota') ? 'is-invalid' : '' }}" name="quota_id"
                                id="quota_id">
                                @foreach ($quotas as $id => $entry)
                                    <option value="{{ $id }}" {{ old('quota_id') == $id ? 'selected' : '' }}>
                                        {{ $entry }}</option>
                                @endforeach

                            </select>
                            @if ($errors->has('quota'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('quota') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.employeeList.fields.quota_helper') }}</span>
                        </div>

                        <div id="freedomfighter_field" style="display: none;">
                            <div class="form-group">
                                <label
                                    for="freedomfighter_id">{{ trans('cruds.employeeList.fields.freedomfighter') }}</label>
                                <select
                                    class="form-control select2 {{ $errors->has('freedomfighter') ? 'is-invalid' : '' }}"
                                    name="freedomfighter_id" id="freedomfighter_id">
                                    @foreach ($freedomfighters as $id => $entry)
                                        <option value="{{ $id }}"
                                            {{ old('freedomfighter_id') == $id ? 'selected' : '' }}>{{ $entry }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('freedomfighter'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('freedomfighter') }}
                                    </div>
                                @endif
                                <span
                                    class="help-block">{{ trans('cruds.employeeList.fields.freedomfighter_helper') }}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label
                                for="electric_signature">{{ trans('cruds.employeeList.fields.electric_signature') }}</label>
                            <div class="needsclick dropzone {{ $errors->has('electric_signature') ? 'is-invalid' : '' }}"
                                id="electric_signature-dropzone">
                            </div>
                            @if ($errors->has('electric_signature'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('electric_signature') }}
                                </div>
                            @endif
                            <span
                                class="help-block">{{ trans('cruds.employeeList.fields.electric_signature_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="employee_photo">{{ trans('cruds.employeeList.fields.employee_photo') }}</label>
                            <div class="needsclick dropzone {{ $errors->has('employee_photo') ? 'is-invalid' : '' }}"
                                id="employee_photo-dropzone">
                            </div>
                            @if ($errors->has('employee_photo'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('employee_photo') }}
                                </div>
                            @endif
                            <span
                                class="help-block">{{ trans('cruds.employeeList.fields.employee_photo_helper') }}</span>
                        </div>
                    </div>
                </div>

                <div class="form-group my-2">
                    <button class="btn btn-lg btn-success w-100 px-5" type="submit">
                        {{ trans('global.save') }}
                    </button>
                </div>
            </form>
        </div>





    </div>
    </div>
@endsection

@section('scripts')
    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dateOfBirthInput = document.getElementById('date_of_birth');
            const prlDateInput = document.getElementById('prl_date');

            dateOfBirthInput.addEventListener('change', function() {
                const dateOfBirth = new Date(dateOfBirthInput.value);

                if (!isNaN(dateOfBirth)) {
                    const prlDate = new Date(dateOfBirth);
                    prlDate.setFullYear(prlDate.getFullYear() + 59);
                    prlDate.setDate(prlDate.getDate() - 1); // Last day before turning 59

                    const formattedPrlDate = prlDate.toISOString().split('T')[0]; // Format to YYYY-MM-DD
                    prlDateInput.value = formattedPrlDate;
                } else {
                    prlDateInput.value = ''; // Clear PRL date if date_of_birth is invalid
                }
            });
        });
    </script> --}}
    <!-- Include flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <!-- Include flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            flatpickr("#date_of_birth", {
                dateFormat: "d/m/Y",
                onChange: function(selectedDates, dateStr, instance) {
                    const dateOfBirth = selectedDates[0];

                    if (dateOfBirth) {
                        const prlDate = new Date(dateOfBirth);
                        prlDate.setFullYear(prlDate.getFullYear() + 59);
                        prlDate.setDate(prlDate.getDate() - 1); // Last day before turning 59

                        const formattedPrlDate = flatpickr.formatDate(prlDate, "d/m/Y");
                        document.getElementById('prl_date').value = formattedPrlDate;
                    } else {
                        document.getElementById('prl_date').value =
                            '{{ old('date_of_birth') }}'; // Clear PRL date if date_of_birth is invalid
                    }
                }
            });

            flatpickr("#prl_date", {
                dateFormat: "d/m/Y"
            });

            document.getElementById('employee-form').addEventListener('submit', function() {
                const dateOfBirthInput = document.getElementById('date_of_birth');
                const prlDateInput = document.getElementById('prl_date');

                if (dateOfBirthInput.value) {
                    const dateParts = dateOfBirthInput.value.split('/');
                    dateOfBirthInput.value = `${dateParts[2]}-${dateParts[1]}-${dateParts[0]}`;
                }

                if (prlDateInput.value) {
                    const dateParts = prlDateInput.value.split('/');
                    prlDateInput.value = `${dateParts[2]}-${dateParts[1]}-${dateParts[0]}`;
                }
            });
        });
    </script>


    <script>
        Dropzone.options.birthCertificateUploadDropzone = {
            url: '{{ route('admin.employee-lists.storeMedia') }}',
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
                $('form').find('input[name="birth_certificate_upload"]').remove()
                $('form').append('<input type="hidden" name="birth_certificate_upload" value="' + response.name +
                    '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="birth_certificate_upload"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                @if (isset($employeeList) && $employeeList->birth_certificate_upload)
                    var file = {!! json_encode($employeeList->birth_certificate_upload) !!}
                    this.options.addedfile.call(this, file)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="birth_certificate_upload" value="' + file
                        .file_name + '">')
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
        Dropzone.options.nidUploadDropzone = {
            url: '{{ route('admin.employee-lists.storeMedia') }}',
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
                $('form').find('input[name="nid_upload"]').remove()
                $('form').append('<input type="hidden" name="nid_upload" value="' + response.name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="nid_upload"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                @if (isset($employeeList) && $employeeList->nid_upload)
                    var file = {!! json_encode($employeeList->nid_upload) !!}
                    this.options.addedfile.call(this, file)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="nid_upload" value="' + file.file_name + '">')
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
        Dropzone.options.passportUploadDropzone = {
            url: '{{ route('admin.employee-lists.storeMedia') }}',
            maxFilesize: 1, // MB
            maxFiles: 1,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            params: {
                size: 1
            },
            success: function(file, response) {
                $('form').find('input[name="passport_upload"]').remove()
                $('form').append('<input type="hidden" name="passport_upload" value="' + response.name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="passport_upload"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                @if (isset($employeeList) && $employeeList->passport_upload)
                    var file = {!! json_encode($employeeList->passport_upload) !!}
                    this.options.addedfile.call(this, file)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="passport_upload" value="' + file.file_name + '">')
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
        Dropzone.options.licenseUploadDropzone = {
            url: '{{ route('admin.employee-lists.storeMedia') }}',
            maxFilesize: 1, // MB
            maxFiles: 1,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            params: {
                size: 1
            },
            success: function(file, response) {
                $('form').find('input[name="license_upload"]').remove()
                $('form').append('<input type="hidden" name="license_upload" value="' + response.name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="license_upload"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                @if (isset($employeeList) && $employeeList->license_upload)
                    var file = {!! json_encode($employeeList->license_upload) !!}
                    this.options.addedfile.call(this, file)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="license_upload" value="' + file.file_name + '">')
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
        Dropzone.options.firstJoiningOrderDropzone = {
            url: '{{ route('admin.employee-lists.storeMedia') }}',
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
                $('form').find('input[name="first_joining_order"]').remove()
                $('form').append('<input type="hidden" name="first_joining_order" value="' + response.name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="first_joining_order"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                @if (isset($employeeList) && $employeeList->first_joining_order)
                    var file = {!! json_encode($employeeList->first_joining_order) !!}
                    this.options.addedfile.call(this, file)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="first_joining_order" value="' + file.file_name +
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
        Dropzone.options.fjoiningLetterDropzone = {
            url: '{{ route('admin.employee-lists.storeMedia') }}',
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
                $('form').find('input[name="fjoining_letter"]').remove()
                $('form').append('<input type="hidden" name="fjoining_letter" value="' + response.name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="fjoining_letter"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                @if (isset($employeeList) && $employeeList->fjoining_letter)
                    var file = {!! json_encode($employeeList->fjoining_letter) !!}
                    this.options.addedfile.call(this, file)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="fjoining_letter" value="' + file.file_name + '">')
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
        Dropzone.options.dateOfGazetteIfAnyDropzone = {
            url: '{{ route('admin.employee-lists.storeMedia') }}',
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
                $('form').find('input[name="date_of_gazette_if_any"]').remove()
                $('form').append('<input type="hidden" name="date_of_gazette_if_any" value="' + response.name +
                    '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="date_of_gazette_if_any"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                @if (isset($employeeList) && $employeeList->date_of_gazette_if_any)
                    var file = {!! json_encode($employeeList->date_of_gazette_if_any) !!}
                    this.options.addedfile.call(this, file)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="date_of_gazette_if_any" value="' + file.file_name +
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
        Dropzone.options.regularizationOfficeOrdeGoDropzone = {
            url: '{{ route('admin.employee-lists.storeMedia') }}',
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
                $('form').find('input[name="regularization_office_orde_go"]').remove()
                $('form').append('<input type="hidden" name="regularization_office_orde_go" value="' + response
                    .name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="regularization_office_orde_go"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                @if (isset($employeeList) && $employeeList->regularization_office_orde_go)
                    var file = {!! json_encode($employeeList->regularization_office_orde_go) !!}
                    this.options.addedfile.call(this, file)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="regularization_office_orde_go" value="' + file
                        .file_name + '">')
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
        Dropzone.options.confirmationInServiceDropzone = {
            url: '{{ route('admin.employee-lists.storeMedia') }}',
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
                $('form').find('input[name="confirmation_in_service"]').remove()
                $('form').append('<input type="hidden" name="confirmation_in_service" value="' + response.name +
                    '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="confirmation_in_service"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                @if (isset($employeeList) && $employeeList->confirmation_in_service)
                    var file = {!! json_encode($employeeList->confirmation_in_service) !!}
                    this.options.addedfile.call(this, file)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="confirmation_in_service" value="' + file
                        .file_name + '">')
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
        Dropzone.options.electricSignatureDropzone = {
            url: '{{ route('admin.employee-lists.storeMedia') }}',
            maxFilesize: 2, // MB
            acceptedFiles: '.jpeg,.jpg,.png,.gif',
            maxFiles: 1,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            params: {
                size: 2,
                width: 4096,
                height: 4096
            },
            success: function(file, response) {
                $('form').find('input[name="electric_signature"]').remove()
                $('form').append('<input type="hidden" name="electric_signature" value="' + response.name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="electric_signature"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                @if (isset($employeeList) && $employeeList->electric_signature)
                    var file = {!! json_encode($employeeList->electric_signature) !!}
                    this.options.addedfile.call(this, file)
                    this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="electric_signature" value="' + file.file_name +
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
        Dropzone.options.employeePhotoDropzone = {
            url: '{{ route('admin.employee-lists.storeMedia') }}',
            maxFilesize: 2, // MB
            acceptedFiles: '.jpeg,.jpg,.png,.gif',
            maxFiles: 1,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            params: {
                size: 2,
                width: 4096,
                height: 4096
            },
            success: function(file, response) {
                $('form').find('input[name="employee_photo"]').remove()
                $('form').append('<input type="hidden" name="employee_photo" value="' + response.name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="employee_photo"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                @if (isset($employeeList) && $employeeList->employee_photo)
                    var file = {!! json_encode($employeeList->employee_photo) !!}
                    this.options.addedfile.call(this, file)
                    this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="employee_photo" value="' + file.file_name + '">')
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

    {{-- <script>
        document.getElementById('has_license').addEventListener('change', function() {
            var licenseFields = document.getElementById('license_fields');
            if (this.value === 'yes') {
                licenseFields.style.display = 'block';
            } else {
                licenseFields.style.display = 'none';
            }
        });
    </script> --}}

    <script>
        // document.getElementById('has_passport').addEventListener('change', function() {

        //     var passportFields = document.getElementById('passport_fields');


        //     var passportFields = document.getElementById('passport_fields');
        //     alert(passportFields);

        //     if (this.value === 'Yes') {
        //         passportFields.style.display = 'block';
        //     } else {
        //         passportFields.style.display = 'none';
        //     }
        // });
    </script>

    <script>
        document.getElementById('quota_id').addEventListener('change', function() {
            var freedomfighterField = document.getElementById('freedomfighter_field');
            if (this.value === '1') {
                freedomfighterField.style.display = 'block';
            } else {
                freedomfighterField.style.display = 'none';
            }
        });

        // Trigger change event on page load to handle pre-selected value
        document.getElementById('quota_id').dispatchEvent(new Event('change'));
    </script>
    <script>
        Dropzone.options.certificateUploadDropzone = {
            url: '{{ route('admin.employee-lists.storeMedia') }}',
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
                $('form').find('input[name="certificate_upload"]').remove()
                $('form').append('<input type="hidden" name="certificate_upload" value="' + response.name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="certificate_upload"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                @if (isset($employeeList) && $employeeList->certificate_upload)
                    var file = {!! json_encode($employeeList->certificate_upload) !!}
                    this.options.addedfile.call(this, file)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="certificate_upload" value="' + file.file_name +
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
        // $(document).ready(function() {
        //     function toggleFields() {
        //         var selectedValue = $('#projectrevenue_id').val();
        //         if (selectedValue ==
        //             '1') { // Replace '1' with the actual value that should trigger the fields to show
        //             $('.form-group.projectlist').show();
        //             $('.form-group.Project').show();
        //             $('.form-group.notgotproject').hide();
        //         } else {
        //             $('.form-group.projectlist').hide();
        //             $('.form-group.notgotproject').show();
        //             $('.form-group.project').hide();
        //         }
        //     }

        //     // Initialize select2
        //     //$('.select2').select2();

        //     // Attach change event listener
        //     $('#projectrevenue_id').change(function() {
        //         toggleFields();
        //     });

        //     // Initial check in case the dropdown has a preselected value
        //     // toggleFields();
        // });
    </script>


    <script>
        // document.getElementById('has_passport').addEventListener('change', function() {
        //     var passportFields = document.querySelector('.passport_fields');
        //     var passportUpload = document.querySelector('.passport_upload');
        //     if (this.value === 'yes') {
        //         passportFields.style.display = 'block';
        //         passportUpload.style.display = 'block';
        //     } else {
        //         passportFields.style.display = 'none';
        //         passportUpload.style.display = 'none';
        //     }
        // });


        document.getElementById('has_license').addEventListener('change', function() {


            var licenseFields = document.querySelector('.license_fields');
            var licenseUpload = document.querySelector('.license_upload');
            var licenseNumber = document.querySelector('.license_number');
            if (this.value === 'Yes') {
                licenseFields.style.display = 'block';
                licenseUpload.style.display = 'block';
                licenseNumber.style.display = 'block';
            } else {
                licenseFields.style.display = 'none';
                licenseUpload.style.display = 'none';
                licenseNumber.style.display = 'none';
            }
        });


        document.getElementById('certificateupload').addEventListener('change', function() {
            var certificateUploadFields = document.querySelector('.certificate_upload');
            if (this.value === 'Yes') {
                certificateUploadFields.style.display = 'block';
            } else {
                certificateUploadFields.style.display = 'none';
            }
        });

        // Initial check in case the dropdown has a preselected value
        document.addEventListener('DOMContentLoaded', function() {
            var certificateUploadFields = document.querySelector('.certificate_upload');
            var certificateUploadDropdown = document.getElementById('certificateupload');
            if (certificateUploadDropdown.value === 'Yes') {
                certificateUploadFields.style.display = 'block';
            } else {
                certificateUploadFields.style.display = 'none';
            }
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const nidInput = document.getElementById('nid');
            nidInput.addEventListener('input', function() {
                const value = nidInput.value;
                const length = value.length;
                if (length === 10 || length === 13 || length === 17) {
                    nidInput.setCustomValidity('');
                } else {
                    nidInput.setCustomValidity('{{ __('validation.nid_invalid') }}');
                }
            });


            document.getElementById('has_passport').addEventListener('change', function() {
                var passportFields = document.querySelector('.passport_fields');
                var passportUpload = document.querySelector('.passport_upload');

                // Check if passportFields and passportUpload are not null before accessing style properties
                if (passportFields !== null && passportUpload !== null) {
                    if (this.value === 'Yes') {
                        passportFields.classList.remove('d-none');
                        passportFields.classList.add('d-block');
                        passportUpload.classList.remove('d-none');
                        passportUpload.classList.add('d-block');
                    } else {
                        passportFields.classList.remove('d-block');
                        passportFields.classList.add('d-none');
                        passportUpload.classList.remove('d-block');
                        passportUpload.classList.add('d-none');
                    }
                } else {
                    console.error('Passport fields or upload elements not found.');
                }
            });


        });

        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('has_passport').addEventListener('change', function() {
                var passportFields = document.querySelector('.passport_fields');
                var passportUpload = document.querySelector('.passport_upload');

                // Check if passportFields and passportUpload are not null before accessing style properties
                if (passportFields !== null && passportUpload !== null) {
                    if (this.value === 'Yes') {
                        passportFields.classList.remove('d-none');
                        passportFields.classList.add('d-block');
                        passportUpload.classList.remove('d-none');
                        passportUpload.classList.add('d-block');
                    } else {
                        passportFields.classList.remove('d-block');
                        passportFields.classList.add('d-none');
                        passportUpload.classList.remove('d-block');
                        passportUpload.classList.add('d-none');
                    }
                } else {
                    console.error('Passport fields or upload elements not found.');
                }
            });
        });
    </script>
@endsection
