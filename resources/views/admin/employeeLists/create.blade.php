@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.employeeList.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.employee-lists.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="employeeid">{{ trans('cruds.employeeList.fields.employeeid') }}</label>
                <input class="form-control {{ $errors->has('employeeid') ? 'is-invalid' : '' }}" type="text" name="employeeid" id="employeeid" value="{{ old('employeeid', '') }}" required>
                @if($errors->has('employeeid'))
                    <div class="invalid-feedback">
                        {{ $errors->first('employeeid') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.employeeid_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="cadreid">{{ trans('cruds.employeeList.fields.cadreid') }}</label>
                <input class="form-control {{ $errors->has('cadreid') ? 'is-invalid' : '' }}" type="text" name="cadreid" id="cadreid" value="{{ old('cadreid', '') }}">
                @if($errors->has('cadreid'))
                    <div class="invalid-feedback">
                        {{ $errors->first('cadreid') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.cadreid_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="batch_id">{{ trans('cruds.employeeList.fields.batch') }}</label>
                <select class="form-control select2 {{ $errors->has('batch') ? 'is-invalid' : '' }}" name="batch_id" id="batch_id">
                    @foreach($batches as $id => $entry)
                        <option value="{{ $id }}" {{ old('batch_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('batch'))
                    <div class="invalid-feedback">
                        {{ $errors->first('batch') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.batch_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="fullname_bn">{{ trans('cruds.employeeList.fields.fullname_bn') }}</label>
                <input class="form-control {{ $errors->has('fullname_bn') ? 'is-invalid' : '' }}" type="text" name="fullname_bn" id="fullname_bn" value="{{ old('fullname_bn', '') }}" required>
                @if($errors->has('fullname_bn'))
                    <div class="invalid-feedback">
                        {{ $errors->first('fullname_bn') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.fullname_bn_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="fullname_en">{{ trans('cruds.employeeList.fields.fullname_en') }}</label>
                <input class="form-control {{ $errors->has('fullname_en') ? 'is-invalid' : '' }}" type="text" name="fullname_en" id="fullname_en" value="{{ old('fullname_en', '') }}" required>
                @if($errors->has('fullname_en'))
                    <div class="invalid-feedback">
                        {{ $errors->first('fullname_en') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.fullname_en_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="fname_bn">{{ trans('cruds.employeeList.fields.fname_bn') }}</label>
                <input class="form-control {{ $errors->has('fname_bn') ? 'is-invalid' : '' }}" type="text" name="fname_bn" id="fname_bn" value="{{ old('fname_bn', '') }}" required>
                @if($errors->has('fname_bn'))
                    <div class="invalid-feedback">
                        {{ $errors->first('fname_bn') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.fname_bn_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="fname_en">{{ trans('cruds.employeeList.fields.fname_en') }}</label>
                <input class="form-control {{ $errors->has('fname_en') ? 'is-invalid' : '' }}" type="text" name="fname_en" id="fname_en" value="{{ old('fname_en', '') }}" required>
                @if($errors->has('fname_en'))
                    <div class="invalid-feedback">
                        {{ $errors->first('fname_en') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.fname_en_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="mname_bn">{{ trans('cruds.employeeList.fields.mname_bn') }}</label>
                <input class="form-control {{ $errors->has('mname_bn') ? 'is-invalid' : '' }}" type="text" name="mname_bn" id="mname_bn" value="{{ old('mname_bn', '') }}" required>
                @if($errors->has('mname_bn'))
                    <div class="invalid-feedback">
                        {{ $errors->first('mname_bn') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.mname_bn_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="mname_en">{{ trans('cruds.employeeList.fields.mname_en') }}</label>
                <input class="form-control {{ $errors->has('mname_en') ? 'is-invalid' : '' }}" type="text" name="mname_en" id="mname_en" value="{{ old('mname_en', '') }}" required>
                @if($errors->has('mname_en'))
                    <div class="invalid-feedback">
                        {{ $errors->first('mname_en') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.mname_en_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="date_of_birth">{{ trans('cruds.employeeList.fields.date_of_birth') }}</label>
                <input class="form-control date {{ $errors->has('date_of_birth') ? 'is-invalid' : '' }}" type="text" name="date_of_birth" id="date_of_birth" value="{{ old('date_of_birth') }}" required>
                @if($errors->has('date_of_birth'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date_of_birth') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.date_of_birth_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="birth_certificate_upload">{{ trans('cruds.employeeList.fields.birth_certificate_upload') }}</label>
                <div class="needsclick dropzone {{ $errors->has('birth_certificate_upload') ? 'is-invalid' : '' }}" id="birth_certificate_upload-dropzone">
                </div>
                @if($errors->has('birth_certificate_upload'))
                    <div class="invalid-feedback">
                        {{ $errors->first('birth_certificate_upload') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.birth_certificate_upload_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="prl_date">{{ trans('cruds.employeeList.fields.prl_date') }}</label>
                <input class="form-control date {{ $errors->has('prl_date') ? 'is-invalid' : '' }}" type="text" name="prl_date" id="prl_date" value="{{ old('prl_date') }}">
                @if($errors->has('prl_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('prl_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.prl_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="height">{{ trans('cruds.employeeList.fields.height') }}</label>
                <input class="form-control {{ $errors->has('height') ? 'is-invalid' : '' }}" type="text" name="height" id="height" value="{{ old('height', '') }}">
                @if($errors->has('height'))
                    <div class="invalid-feedback">
                        {{ $errors->first('height') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.height_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="special_identity">{{ trans('cruds.employeeList.fields.special_identity') }}</label>
                <input class="form-control {{ $errors->has('special_identity') ? 'is-invalid' : '' }}" type="text" name="special_identity" id="special_identity" value="{{ old('special_identity', '') }}">
                @if($errors->has('special_identity'))
                    <div class="invalid-feedback">
                        {{ $errors->first('special_identity') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.special_identity_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="home_district_id">{{ trans('cruds.employeeList.fields.home_district') }}</label>
                <select class="form-control select2 {{ $errors->has('home_district') ? 'is-invalid' : '' }}" name="home_district_id" id="home_district_id" required>
                    @foreach($home_districts as $id => $entry)
                        <option value="{{ $id }}" {{ old('home_district_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('home_district'))
                    <div class="invalid-feedback">
                        {{ $errors->first('home_district') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.home_district_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="marital_statu_id">{{ trans('cruds.employeeList.fields.marital_statu') }}</label>
                <select class="form-control select2 {{ $errors->has('marital_statu') ? 'is-invalid' : '' }}" name="marital_statu_id" id="marital_statu_id" required>
                    @foreach($marital_status as $id => $entry)
                        <option value="{{ $id }}" {{ old('marital_statu_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('marital_statu'))
                    <div class="invalid-feedback">
                        {{ $errors->first('marital_statu') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.marital_statu_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="gender_id">{{ trans('cruds.employeeList.fields.gender') }}</label>
                <select class="form-control select2 {{ $errors->has('gender') ? 'is-invalid' : '' }}" name="gender_id" id="gender_id" required>
                    @foreach($genders as $id => $entry)
                        <option value="{{ $id }}" {{ old('gender_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('gender'))
                    <div class="invalid-feedback">
                        {{ $errors->first('gender') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.gender_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="religion_id">{{ trans('cruds.employeeList.fields.religion') }}</label>
                <select class="form-control select2 {{ $errors->has('religion') ? 'is-invalid' : '' }}" name="religion_id" id="religion_id" required>
                    @foreach($religions as $id => $entry)
                        <option value="{{ $id }}" {{ old('religion_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('religion'))
                    <div class="invalid-feedback">
                        {{ $errors->first('religion') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.religion_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="blood_group_id">{{ trans('cruds.employeeList.fields.blood_group') }}</label>
                <select class="form-control select2 {{ $errors->has('blood_group') ? 'is-invalid' : '' }}" name="blood_group_id" id="blood_group_id" required>
                    @foreach($blood_groups as $id => $entry)
                        <option value="{{ $id }}" {{ old('blood_group_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('blood_group'))
                    <div class="invalid-feedback">
                        {{ $errors->first('blood_group') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.blood_group_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="nid">{{ trans('cruds.employeeList.fields.nid') }}</label>
                <input class="form-control {{ $errors->has('nid') ? 'is-invalid' : '' }}" type="number" name="nid" id="nid" value="{{ old('nid', '') }}" step="1" required>
                @if($errors->has('nid'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nid') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.nid_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="nid_upload">{{ trans('cruds.employeeList.fields.nid_upload') }}</label>
                <div class="needsclick dropzone {{ $errors->has('nid_upload') ? 'is-invalid' : '' }}" id="nid_upload-dropzone">
                </div>
                @if($errors->has('nid_upload'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nid_upload') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.nid_upload_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="passport">{{ trans('cruds.employeeList.fields.passport') }}</label>
                <input class="form-control {{ $errors->has('passport') ? 'is-invalid' : '' }}" type="text" name="passport" id="passport" value="{{ old('passport', '') }}">
                @if($errors->has('passport'))
                    <div class="invalid-feedback">
                        {{ $errors->first('passport') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.passport_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="passport_upload">{{ trans('cruds.employeeList.fields.passport_upload') }}</label>
                <div class="needsclick dropzone {{ $errors->has('passport_upload') ? 'is-invalid' : '' }}" id="passport_upload-dropzone">
                </div>
                @if($errors->has('passport_upload'))
                    <div class="invalid-feedback">
                        {{ $errors->first('passport_upload') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.passport_upload_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="license_type_id">{{ trans('cruds.employeeList.fields.license_type') }}</label>
                <select class="form-control select2 {{ $errors->has('license_type') ? 'is-invalid' : '' }}" name="license_type_id" id="license_type_id" required>
                    @foreach($license_types as $id => $entry)
                        <option value="{{ $id }}" {{ old('license_type_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('license_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('license_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.license_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="license_upload">{{ trans('cruds.employeeList.fields.license_upload') }}</label>
                <div class="needsclick dropzone {{ $errors->has('license_upload') ? 'is-invalid' : '' }}" id="license_upload-dropzone">
                </div>
                @if($errors->has('license_upload'))
                    <div class="invalid-feedback">
                        {{ $errors->first('license_upload') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.license_upload_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email">{{ trans('cruds.employeeList.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email') }}">
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="mobile_number">{{ trans('cruds.employeeList.fields.mobile_number') }}</label>
                <input class="form-control {{ $errors->has('mobile_number') ? 'is-invalid' : '' }}" type="text" name="mobile_number" id="mobile_number" value="{{ old('mobile_number', '') }}" required>
                @if($errors->has('mobile_number'))
                    <div class="invalid-feedback">
                        {{ $errors->first('mobile_number') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.mobile_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="joiningexaminfo_id">{{ trans('cruds.employeeList.fields.joiningexaminfo') }}</label>
                <select class="form-control select2 {{ $errors->has('joiningexaminfo') ? 'is-invalid' : '' }}" name="joiningexaminfo_id" id="joiningexaminfo_id" required>
                    @foreach($joiningexaminfos as $id => $entry)
                        <option value="{{ $id }}" {{ old('joiningexaminfo_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('joiningexaminfo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('joiningexaminfo') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.joiningexaminfo_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="grade_id">{{ trans('cruds.employeeList.fields.grade') }}</label>
                <select class="form-control select2 {{ $errors->has('grade') ? 'is-invalid' : '' }}" name="grade_id" id="grade_id">
                    @foreach($grades as $id => $entry)
                        <option value="{{ $id }}" {{ old('grade_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('grade'))
                    <div class="invalid-feedback">
                        {{ $errors->first('grade') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.grade_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="fjoining_date">{{ trans('cruds.employeeList.fields.fjoining_date') }}</label>
                <input class="form-control date {{ $errors->has('fjoining_date') ? 'is-invalid' : '' }}" type="text" name="fjoining_date" id="fjoining_date" value="{{ old('fjoining_date') }}" required>
                @if($errors->has('fjoining_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('fjoining_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.fjoining_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="first_joining_office_name">{{ trans('cruds.employeeList.fields.first_joining_office_name') }}</label>
                <input class="form-control {{ $errors->has('first_joining_office_name') ? 'is-invalid' : '' }}" type="text" name="first_joining_office_name" id="first_joining_office_name" value="{{ old('first_joining_office_name', '') }}">
                @if($errors->has('first_joining_office_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('first_joining_office_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.first_joining_office_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="first_joining_g_o_date">{{ trans('cruds.employeeList.fields.first_joining_g_o_date') }}</label>
                <input class="form-control date {{ $errors->has('first_joining_g_o_date') ? 'is-invalid' : '' }}" type="text" name="first_joining_g_o_date" id="first_joining_g_o_date" value="{{ old('first_joining_g_o_date') }}">
                @if($errors->has('first_joining_g_o_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('first_joining_g_o_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.first_joining_g_o_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="first_joining_memo_no">{{ trans('cruds.employeeList.fields.first_joining_memo_no') }}</label>
                <input class="form-control {{ $errors->has('first_joining_memo_no') ? 'is-invalid' : '' }}" type="text" name="first_joining_memo_no" id="first_joining_memo_no" value="{{ old('first_joining_memo_no', '') }}">
                @if($errors->has('first_joining_memo_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('first_joining_memo_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.first_joining_memo_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="first_joining_order">{{ trans('cruds.employeeList.fields.first_joining_order') }}</label>
                <div class="needsclick dropzone {{ $errors->has('first_joining_order') ? 'is-invalid' : '' }}" id="first_joining_order-dropzone">
                </div>
                @if($errors->has('first_joining_order'))
                    <div class="invalid-feedback">
                        {{ $errors->first('first_joining_order') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.first_joining_order_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="fjoining_letter">{{ trans('cruds.employeeList.fields.fjoining_letter') }}</label>
                <div class="needsclick dropzone {{ $errors->has('fjoining_letter') ? 'is-invalid' : '' }}" id="fjoining_letter-dropzone">
                </div>
                @if($errors->has('fjoining_letter'))
                    <div class="invalid-feedback">
                        {{ $errors->first('fjoining_letter') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.fjoining_letter_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="date_of_gazette">{{ trans('cruds.employeeList.fields.date_of_gazette') }}</label>
                <input class="form-control date {{ $errors->has('date_of_gazette') ? 'is-invalid' : '' }}" type="text" name="date_of_gazette" id="date_of_gazette" value="{{ old('date_of_gazette') }}">
                @if($errors->has('date_of_gazette'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date_of_gazette') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.date_of_gazette_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="date_of_gazette_if_any">{{ trans('cruds.employeeList.fields.date_of_gazette_if_any') }}</label>
                <div class="needsclick dropzone {{ $errors->has('date_of_gazette_if_any') ? 'is-invalid' : '' }}" id="date_of_gazette_if_any-dropzone">
                </div>
                @if($errors->has('date_of_gazette_if_any'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date_of_gazette_if_any') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.date_of_gazette_if_any_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="date_of_regularization">{{ trans('cruds.employeeList.fields.date_of_regularization') }}</label>
                <input class="form-control date {{ $errors->has('date_of_regularization') ? 'is-invalid' : '' }}" type="text" name="date_of_regularization" id="date_of_regularization" value="{{ old('date_of_regularization') }}">
                @if($errors->has('date_of_regularization'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date_of_regularization') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.date_of_regularization_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="regularization_issue_date">{{ trans('cruds.employeeList.fields.regularization_issue_date') }}</label>
                <input class="form-control date {{ $errors->has('regularization_issue_date') ? 'is-invalid' : '' }}" type="text" name="regularization_issue_date" id="regularization_issue_date" value="{{ old('regularization_issue_date') }}">
                @if($errors->has('regularization_issue_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('regularization_issue_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.regularization_issue_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="regularization_office_orde_go">{{ trans('cruds.employeeList.fields.regularization_office_orde_go') }}</label>
                <div class="needsclick dropzone {{ $errors->has('regularization_office_orde_go') ? 'is-invalid' : '' }}" id="regularization_office_orde_go-dropzone">
                </div>
                @if($errors->has('regularization_office_orde_go'))
                    <div class="invalid-feedback">
                        {{ $errors->first('regularization_office_orde_go') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.regularization_office_orde_go_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="date_of_con_serviec">{{ trans('cruds.employeeList.fields.date_of_con_serviec') }}</label>
                <input class="form-control date {{ $errors->has('date_of_con_serviec') ? 'is-invalid' : '' }}" type="text" name="date_of_con_serviec" id="date_of_con_serviec" value="{{ old('date_of_con_serviec') }}">
                @if($errors->has('date_of_con_serviec'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date_of_con_serviec') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.date_of_con_serviec_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="confirmation_in_service">{{ trans('cruds.employeeList.fields.confirmation_in_service') }}</label>
                <div class="needsclick dropzone {{ $errors->has('confirmation_in_service') ? 'is-invalid' : '' }}" id="confirmation_in_service-dropzone">
                </div>
                @if($errors->has('confirmation_in_service'))
                    <div class="invalid-feedback">
                        {{ $errors->first('confirmation_in_service') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.confirmation_in_service_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="quota_id">{{ trans('cruds.employeeList.fields.quota') }}</label>
                <select class="form-control select2 {{ $errors->has('quota') ? 'is-invalid' : '' }}" name="quota_id" id="quota_id">
                    @foreach($quotas as $id => $entry)
                        <option value="{{ $id }}" {{ old('quota_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('quota'))
                    <div class="invalid-feedback">
                        {{ $errors->first('quota') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.quota_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="electric_signature">{{ trans('cruds.employeeList.fields.electric_signature') }}</label>
                <div class="needsclick dropzone {{ $errors->has('electric_signature') ? 'is-invalid' : '' }}" id="electric_signature-dropzone">
                </div>
                @if($errors->has('electric_signature'))
                    <div class="invalid-feedback">
                        {{ $errors->first('electric_signature') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.electric_signature_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="employee_photo">{{ trans('cruds.employeeList.fields.employee_photo') }}</label>
                <div class="needsclick dropzone {{ $errors->has('employee_photo') ? 'is-invalid' : '' }}" id="employee_photo-dropzone">
                </div>
                @if($errors->has('employee_photo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('employee_photo') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.employee_photo_helper') }}</span>
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
    success: function (file, response) {
      $('form').find('input[name="birth_certificate_upload"]').remove()
      $('form').append('<input type="hidden" name="birth_certificate_upload" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="birth_certificate_upload"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($employeeList) && $employeeList->birth_certificate_upload)
      var file = {!! json_encode($employeeList->birth_certificate_upload) !!}
          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="birth_certificate_upload" value="' + file.file_name + '">')
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
    success: function (file, response) {
      $('form').find('input[name="nid_upload"]').remove()
      $('form').append('<input type="hidden" name="nid_upload" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="nid_upload"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($employeeList) && $employeeList->nid_upload)
      var file = {!! json_encode($employeeList->nid_upload) !!}
          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="nid_upload" value="' + file.file_name + '">')
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
    success: function (file, response) {
      $('form').find('input[name="passport_upload"]').remove()
      $('form').append('<input type="hidden" name="passport_upload" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="passport_upload"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($employeeList) && $employeeList->passport_upload)
      var file = {!! json_encode($employeeList->passport_upload) !!}
          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="passport_upload" value="' + file.file_name + '">')
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
    success: function (file, response) {
      $('form').find('input[name="license_upload"]').remove()
      $('form').append('<input type="hidden" name="license_upload" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="license_upload"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($employeeList) && $employeeList->license_upload)
      var file = {!! json_encode($employeeList->license_upload) !!}
          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="license_upload" value="' + file.file_name + '">')
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
    success: function (file, response) {
      $('form').find('input[name="first_joining_order"]').remove()
      $('form').append('<input type="hidden" name="first_joining_order" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="first_joining_order"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($employeeList) && $employeeList->first_joining_order)
      var file = {!! json_encode($employeeList->first_joining_order) !!}
          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="first_joining_order" value="' + file.file_name + '">')
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
    success: function (file, response) {
      $('form').find('input[name="fjoining_letter"]').remove()
      $('form').append('<input type="hidden" name="fjoining_letter" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="fjoining_letter"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($employeeList) && $employeeList->fjoining_letter)
      var file = {!! json_encode($employeeList->fjoining_letter) !!}
          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="fjoining_letter" value="' + file.file_name + '">')
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
    success: function (file, response) {
      $('form').find('input[name="date_of_gazette_if_any"]').remove()
      $('form').append('<input type="hidden" name="date_of_gazette_if_any" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="date_of_gazette_if_any"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($employeeList) && $employeeList->date_of_gazette_if_any)
      var file = {!! json_encode($employeeList->date_of_gazette_if_any) !!}
          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="date_of_gazette_if_any" value="' + file.file_name + '">')
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
    success: function (file, response) {
      $('form').find('input[name="regularization_office_orde_go"]').remove()
      $('form').append('<input type="hidden" name="regularization_office_orde_go" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="regularization_office_orde_go"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($employeeList) && $employeeList->regularization_office_orde_go)
      var file = {!! json_encode($employeeList->regularization_office_orde_go) !!}
          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="regularization_office_orde_go" value="' + file.file_name + '">')
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
    success: function (file, response) {
      $('form').find('input[name="confirmation_in_service"]').remove()
      $('form').append('<input type="hidden" name="confirmation_in_service" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="confirmation_in_service"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($employeeList) && $employeeList->confirmation_in_service)
      var file = {!! json_encode($employeeList->confirmation_in_service) !!}
          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="confirmation_in_service" value="' + file.file_name + '">')
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
    success: function (file, response) {
      $('form').find('input[name="electric_signature"]').remove()
      $('form').append('<input type="hidden" name="electric_signature" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="electric_signature"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($employeeList) && $employeeList->electric_signature)
      var file = {!! json_encode($employeeList->electric_signature) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="electric_signature" value="' + file.file_name + '">')
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
    success: function (file, response) {
      $('form').find('input[name="employee_photo"]').remove()
      $('form').append('<input type="hidden" name="employee_photo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="employee_photo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($employeeList) && $employeeList->employee_photo)
      var file = {!! json_encode($employeeList->employee_photo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="employee_photo" value="' + file.file_name + '">')
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
@endsection