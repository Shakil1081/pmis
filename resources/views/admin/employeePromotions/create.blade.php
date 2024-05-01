@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.employeePromotion.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.employee-promotions.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="employee_id">{{ trans('cruds.employeePromotion.fields.employee') }}</label>
                <select class="form-control select2 {{ $errors->has('employee') ? 'is-invalid' : '' }}" name="employee_id" id="employee_id">
                    @foreach($employees as $id => $entry)
                        <option value="{{ $id }}" {{ old('employee_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('employee'))
                    <div class="invalid-feedback">
                        {{ $errors->first('employee') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeePromotion.fields.employee_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="new_designation_id">{{ trans('cruds.employeePromotion.fields.new_designation') }}</label>
                <select class="form-control select2 {{ $errors->has('new_designation') ? 'is-invalid' : '' }}" name="new_designation_id" id="new_designation_id" required>
                    @foreach($new_designations as $id => $entry)
                        <option value="{{ $id }}" {{ old('new_designation_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('new_designation'))
                    <div class="invalid-feedback">
                        {{ $errors->first('new_designation') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeePromotion.fields.new_designation_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="promotion_date">{{ trans('cruds.employeePromotion.fields.promotion_date') }}</label>
                <input class="form-control date {{ $errors->has('promotion_date') ? 'is-invalid' : '' }}" type="text" name="promotion_date" id="promotion_date" value="{{ old('promotion_date') }}" required>
                @if($errors->has('promotion_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('promotion_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeePromotion.fields.promotion_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="organization_name">{{ trans('cruds.employeePromotion.fields.organization_name') }}</label>
                <input class="form-control {{ $errors->has('organization_name') ? 'is-invalid' : '' }}" type="text" name="organization_name" id="organization_name" value="{{ old('organization_name', '') }}" required>
                @if($errors->has('organization_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('organization_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeePromotion.fields.organization_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="office_order_date">{{ trans('cruds.employeePromotion.fields.office_order_date') }}</label>
                <input class="form-control date {{ $errors->has('office_order_date') ? 'is-invalid' : '' }}" type="text" name="office_order_date" id="office_order_date" value="{{ old('office_order_date') }}" required>
                @if($errors->has('office_order_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('office_order_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeePromotion.fields.office_order_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="office_order">{{ trans('cruds.employeePromotion.fields.office_order') }}</label>
                <div class="needsclick dropzone {{ $errors->has('office_order') ? 'is-invalid' : '' }}" id="office_order-dropzone">
                </div>
                @if($errors->has('office_order'))
                    <div class="invalid-feedback">
                        {{ $errors->first('office_order') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeePromotion.fields.office_order_helper') }}</span>
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
    Dropzone.options.officeOrderDropzone = {
    url: '{{ route('admin.employee-promotions.storeMedia') }}',
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
@if(isset($employeePromotion) && $employeePromotion->office_order)
      var file = {!! json_encode($employeePromotion->office_order) !!}
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
@endsection