@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.foreignTravelPersonal.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.foreign-travel-personals.update", [$foreignTravelPersonal->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="title">{{ trans('cruds.foreignTravelPersonal.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', $foreignTravelPersonal->title) }}">
                @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.foreignTravelPersonal.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="country_id">{{ trans('cruds.foreignTravelPersonal.fields.country') }}</label>
                <select class="form-control select2 {{ $errors->has('country') ? 'is-invalid' : '' }}" name="country_id" id="country_id">
                    @foreach($countries as $id => $entry)
                        <option value="{{ $id }}" {{ (old('country_id') ? old('country_id') : $foreignTravelPersonal->country->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('country'))
                    <div class="invalid-feedback">
                        {{ $errors->first('country') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.foreignTravelPersonal.fields.country_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="purpose_id">{{ trans('cruds.foreignTravelPersonal.fields.purpose') }}</label>
                <select class="form-control select2 {{ $errors->has('purpose') ? 'is-invalid' : '' }}" name="purpose_id" id="purpose_id" required>
                    @foreach($purposes as $id => $entry)
                        <option value="{{ $id }}" {{ (old('purpose_id') ? old('purpose_id') : $foreignTravelPersonal->purpose->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('purpose'))
                    <div class="invalid-feedback">
                        {{ $errors->first('purpose') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.foreignTravelPersonal.fields.purpose_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="from_date">{{ trans('cruds.foreignTravelPersonal.fields.from_date') }}</label>
                <input class="form-control date {{ $errors->has('from_date') ? 'is-invalid' : '' }}" type="text" name="from_date" id="from_date" value="{{ old('from_date', $foreignTravelPersonal->from_date) }}">
                @if($errors->has('from_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('from_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.foreignTravelPersonal.fields.from_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="to_date">{{ trans('cruds.foreignTravelPersonal.fields.to_date') }}</label>
                <input class="form-control date {{ $errors->has('to_date') ? 'is-invalid' : '' }}" type="text" name="to_date" id="to_date" value="{{ old('to_date', $foreignTravelPersonal->to_date) }}">
                @if($errors->has('to_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('to_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.foreignTravelPersonal.fields.to_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="employee_id">{{ trans('cruds.foreignTravelPersonal.fields.employee') }}</label>
                <select class="form-control select2 {{ $errors->has('employee') ? 'is-invalid' : '' }}" name="employee_id" id="employee_id" required>
                    @foreach($employees as $id => $entry)
                        <option value="{{ $id }}" {{ (old('employee_id') ? old('employee_id') : $foreignTravelPersonal->employee->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('employee'))
                    <div class="invalid-feedback">
                        {{ $errors->first('employee') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.foreignTravelPersonal.fields.employee_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="leave_permission">{{ trans('cruds.foreignTravelPersonal.fields.leave_permission') }}</label>
                <div class="needsclick dropzone {{ $errors->has('leave_permission') ? 'is-invalid' : '' }}" id="leave_permission-dropzone">
                </div>
                @if($errors->has('leave_permission'))
                    <div class="invalid-feedback">
                        {{ $errors->first('leave_permission') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.foreignTravelPersonal.fields.leave_permission_helper') }}</span>
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
@if(isset($foreignTravelPersonal) && $foreignTravelPersonal->leave_permission)
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
@endsection