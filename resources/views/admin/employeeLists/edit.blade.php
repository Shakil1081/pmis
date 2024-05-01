@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.employeeList.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.employee-lists.update", [$employeeList->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="employeeid">{{ trans('cruds.employeeList.fields.employeeid') }}</label>
                <input class="form-control {{ $errors->has('employeeid') ? 'is-invalid' : '' }}" type="text" name="employeeid" id="employeeid" value="{{ old('employeeid', $employeeList->employeeid) }}" required>
                @if($errors->has('employeeid'))
                    <div class="invalid-feedback">
                        {{ $errors->first('employeeid') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.employeeid_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="cadreid">{{ trans('cruds.employeeList.fields.cadreid') }}</label>
                <input class="form-control {{ $errors->has('cadreid') ? 'is-invalid' : '' }}" type="text" name="cadreid" id="cadreid" value="{{ old('cadreid', $employeeList->cadreid) }}">
                @if($errors->has('cadreid'))
                    <div class="invalid-feedback">
                        {{ $errors->first('cadreid') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.cadreid_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="fullname_bn">{{ trans('cruds.employeeList.fields.fullname_bn') }}</label>
                <input class="form-control {{ $errors->has('fullname_bn') ? 'is-invalid' : '' }}" type="text" name="fullname_bn" id="fullname_bn" value="{{ old('fullname_bn', $employeeList->fullname_bn) }}" required>
                @if($errors->has('fullname_bn'))
                    <div class="invalid-feedback">
                        {{ $errors->first('fullname_bn') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.fullname_bn_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="fullname_en">{{ trans('cruds.employeeList.fields.fullname_en') }}</label>
                <input class="form-control {{ $errors->has('fullname_en') ? 'is-invalid' : '' }}" type="text" name="fullname_en" id="fullname_en" value="{{ old('fullname_en', $employeeList->fullname_en) }}" required>
                @if($errors->has('fullname_en'))
                    <div class="invalid-feedback">
                        {{ $errors->first('fullname_en') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.fullname_en_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="fname_bn">{{ trans('cruds.employeeList.fields.fname_bn') }}</label>
                <input class="form-control {{ $errors->has('fname_bn') ? 'is-invalid' : '' }}" type="text" name="fname_bn" id="fname_bn" value="{{ old('fname_bn', $employeeList->fname_bn) }}" required>
                @if($errors->has('fname_bn'))
                    <div class="invalid-feedback">
                        {{ $errors->first('fname_bn') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.fname_bn_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="fname_en">{{ trans('cruds.employeeList.fields.fname_en') }}</label>
                <input class="form-control {{ $errors->has('fname_en') ? 'is-invalid' : '' }}" type="text" name="fname_en" id="fname_en" value="{{ old('fname_en', $employeeList->fname_en) }}">
                @if($errors->has('fname_en'))
                    <div class="invalid-feedback">
                        {{ $errors->first('fname_en') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.fname_en_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="mname_bn">{{ trans('cruds.employeeList.fields.mname_bn') }}</label>
                <input class="form-control {{ $errors->has('mname_bn') ? 'is-invalid' : '' }}" type="text" name="mname_bn" id="mname_bn" value="{{ old('mname_bn', $employeeList->mname_bn) }}">
                @if($errors->has('mname_bn'))
                    <div class="invalid-feedback">
                        {{ $errors->first('mname_bn') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.mname_bn_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="mname_en">{{ trans('cruds.employeeList.fields.mname_en') }}</label>
                <input class="form-control {{ $errors->has('mname_en') ? 'is-invalid' : '' }}" type="text" name="mname_en" id="mname_en" value="{{ old('mname_en', $employeeList->mname_en) }}">
                @if($errors->has('mname_en'))
                    <div class="invalid-feedback">
                        {{ $errors->first('mname_en') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.mname_en_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="date_of_birth">{{ trans('cruds.employeeList.fields.date_of_birth') }}</label>
                <input class="form-control date {{ $errors->has('date_of_birth') ? 'is-invalid' : '' }}" type="text" name="date_of_birth" id="date_of_birth" value="{{ old('date_of_birth', $employeeList->date_of_birth) }}" required>
                @if($errors->has('date_of_birth'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date_of_birth') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.date_of_birth_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="height">{{ trans('cruds.employeeList.fields.height') }}</label>
                <input class="form-control {{ $errors->has('height') ? 'is-invalid' : '' }}" type="text" name="height" id="height" value="{{ old('height', $employeeList->height) }}" required>
                @if($errors->has('height'))
                    <div class="invalid-feedback">
                        {{ $errors->first('height') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.height_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="special_identity">{{ trans('cruds.employeeList.fields.special_identity') }}</label>
                <input class="form-control {{ $errors->has('special_identity') ? 'is-invalid' : '' }}" type="text" name="special_identity" id="special_identity" value="{{ old('special_identity', $employeeList->special_identity) }}">
                @if($errors->has('special_identity'))
                    <div class="invalid-feedback">
                        {{ $errors->first('special_identity') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.special_identity_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="home_district_id">{{ trans('cruds.employeeList.fields.home_district') }}</label>
                <select class="form-control select2 {{ $errors->has('home_district') ? 'is-invalid' : '' }}" name="home_district_id" id="home_district_id">
                    @foreach($home_districts as $id => $entry)
                        <option value="{{ $id }}" {{ (old('home_district_id') ? old('home_district_id') : $employeeList->home_district->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
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
                <label for="marital_statu_id">{{ trans('cruds.employeeList.fields.marital_statu') }}</label>
                <select class="form-control select2 {{ $errors->has('marital_statu') ? 'is-invalid' : '' }}" name="marital_statu_id" id="marital_statu_id">
                    @foreach($marital_status as $id => $entry)
                        <option value="{{ $id }}" {{ (old('marital_statu_id') ? old('marital_statu_id') : $employeeList->marital_statu->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
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
                <label for="gender_id">{{ trans('cruds.employeeList.fields.gender') }}</label>
                <select class="form-control select2 {{ $errors->has('gender') ? 'is-invalid' : '' }}" name="gender_id" id="gender_id">
                    @foreach($genders as $id => $entry)
                        <option value="{{ $id }}" {{ (old('gender_id') ? old('gender_id') : $employeeList->gender->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
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
                <label for="religion_id">{{ trans('cruds.employeeList.fields.religion') }}</label>
                <select class="form-control select2 {{ $errors->has('religion') ? 'is-invalid' : '' }}" name="religion_id" id="religion_id">
                    @foreach($religions as $id => $entry)
                        <option value="{{ $id }}" {{ (old('religion_id') ? old('religion_id') : $employeeList->religion->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
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
                <label for="blood_group_id">{{ trans('cruds.employeeList.fields.blood_group') }}</label>
                <select class="form-control select2 {{ $errors->has('blood_group') ? 'is-invalid' : '' }}" name="blood_group_id" id="blood_group_id">
                    @foreach($blood_groups as $id => $entry)
                        <option value="{{ $id }}" {{ (old('blood_group_id') ? old('blood_group_id') : $employeeList->blood_group->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
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
                <input class="form-control {{ $errors->has('nid') ? 'is-invalid' : '' }}" type="number" name="nid" id="nid" value="{{ old('nid', $employeeList->nid) }}" step="1" required>
                @if($errors->has('nid'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nid') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.nid_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="nid_upload">{{ trans('cruds.employeeList.fields.nid_upload') }}</label>
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
                <input class="form-control {{ $errors->has('passport') ? 'is-invalid' : '' }}" type="number" name="passport" id="passport" value="{{ old('passport', $employeeList->passport) }}" step="1">
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
                <label for="license_type_id">{{ trans('cruds.employeeList.fields.license_type') }}</label>
                <select class="form-control select2 {{ $errors->has('license_type') ? 'is-invalid' : '' }}" name="license_type_id" id="license_type_id">
                    @foreach($license_types as $id => $entry)
                        <option value="{{ $id }}" {{ (old('license_type_id') ? old('license_type_id') : $employeeList->license_type->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
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
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email', $employeeList->email) }}">
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="mobile_number">{{ trans('cruds.employeeList.fields.mobile_number') }}</label>
                <input class="form-control {{ $errors->has('mobile_number') ? 'is-invalid' : '' }}" type="text" name="mobile_number" id="mobile_number" value="{{ old('mobile_number', $employeeList->mobile_number) }}">
                @if($errors->has('mobile_number'))
                    <div class="invalid-feedback">
                        {{ $errors->first('mobile_number') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.mobile_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="fjoining_date">{{ trans('cruds.employeeList.fields.fjoining_date') }}</label>
                <input class="form-control date {{ $errors->has('fjoining_date') ? 'is-invalid' : '' }}" type="text" name="fjoining_date" id="fjoining_date" value="{{ old('fjoining_date', $employeeList->fjoining_date) }}" required>
                @if($errors->has('fjoining_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('fjoining_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.fjoining_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="project_name">{{ trans('cruds.employeeList.fields.project_name') }}</label>
                <input class="form-control {{ $errors->has('project_name') ? 'is-invalid' : '' }}" type="text" name="project_name" id="project_name" value="{{ old('project_name', $employeeList->project_name) }}">
                @if($errors->has('project_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('project_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.project_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="job_type_id">{{ trans('cruds.employeeList.fields.job_type') }}</label>
                <select class="form-control select2 {{ $errors->has('job_type') ? 'is-invalid' : '' }}" name="job_type_id" id="job_type_id">
                    @foreach($job_types as $id => $entry)
                        <option value="{{ $id }}" {{ (old('job_type_id') ? old('job_type_id') : $employeeList->job_type->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('job_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('job_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.job_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="fjoiningofficename">{{ trans('cruds.employeeList.fields.fjoiningofficename') }}</label>
                <input class="form-control {{ $errors->has('fjoiningofficename') ? 'is-invalid' : '' }}" type="text" name="fjoiningofficename" id="fjoiningofficename" value="{{ old('fjoiningofficename', $employeeList->fjoiningofficename) }}">
                @if($errors->has('fjoiningofficename'))
                    <div class="invalid-feedback">
                        {{ $errors->first('fjoiningofficename') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.fjoiningofficename_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="office_orderno">{{ trans('cruds.employeeList.fields.office_orderno') }}</label>
                <div class="needsclick dropzone {{ $errors->has('office_orderno') ? 'is-invalid' : '' }}" id="office_orderno-dropzone">
                </div>
                @if($errors->has('office_orderno'))
                    <div class="invalid-feedback">
                        {{ $errors->first('office_orderno') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.office_orderno_helper') }}</span>
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
                <label for="office_order">{{ trans('cruds.employeeList.fields.office_order') }}</label>
                <div class="needsclick dropzone {{ $errors->has('office_order') ? 'is-invalid' : '' }}" id="office_order-dropzone">
                </div>
                @if($errors->has('office_order'))
                    <div class="invalid-feedback">
                        {{ $errors->first('office_order') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.office_order_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="date_of_con_serviec">{{ trans('cruds.employeeList.fields.date_of_con_serviec') }}</label>
                <input class="form-control date {{ $errors->has('date_of_con_serviec') ? 'is-invalid' : '' }}" type="text" name="date_of_con_serviec" id="date_of_con_serviec" value="{{ old('date_of_con_serviec', $employeeList->date_of_con_serviec) }}">
                @if($errors->has('date_of_con_serviec'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date_of_con_serviec') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.date_of_con_serviec_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="quota_id">{{ trans('cruds.employeeList.fields.quota') }}</label>
                <select class="form-control select2 {{ $errors->has('quota') ? 'is-invalid' : '' }}" name="quota_id" id="quota_id">
                    @foreach($quotas as $id => $entry)
                        <option value="{{ $id }}" {{ (old('quota_id') ? old('quota_id') : $employeeList->quota->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
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
                <label class="required" for="electric_signature">{{ trans('cruds.employeeList.fields.electric_signature') }}</label>
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
    Dropzone.options.nidUploadDropzone = {
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
    Dropzone.options.officeOrdernoDropzone = {
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
      $('form').find('input[name="office_orderno"]').remove()
      $('form').append('<input type="hidden" name="office_orderno" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="office_orderno"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($employeeList) && $employeeList->office_orderno)
      var file = {!! json_encode($employeeList->office_orderno) !!}
          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="office_orderno" value="' + file.file_name + '">')
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
    Dropzone.options.officeOrderDropzone = {
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
      $('form').find('input[name="office_order"]').remove()
      $('form').append('<input type="hidden" name="office_order" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="office_order"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($employeeList) && $employeeList->office_order)
      var file = {!! json_encode($employeeList->office_order) !!}
          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="office_order" value="' + file.file_name + '">')
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
    maxFilesize: 1, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 1,
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