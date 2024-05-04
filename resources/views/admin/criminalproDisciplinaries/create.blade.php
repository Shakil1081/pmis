@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.criminalproDisciplinary.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.criminalpro-disciplinaries.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="criminalprosecutione_id">{{ trans('cruds.criminalproDisciplinary.fields.criminalprosecutione') }}</label>
                <select class="form-control select2 {{ $errors->has('criminalprosecutione') ? 'is-invalid' : '' }}" name="criminalprosecutione_id" id="criminalprosecutione_id" required>
                    @foreach($criminalprosecutiones as $id => $entry)
                        <option value="{{ $id }}" {{ old('criminalprosecutione_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('criminalprosecutione'))
                    <div class="invalid-feedback">
                        {{ $errors->first('criminalprosecutione') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.criminalproDisciplinary.fields.criminalprosecutione_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="judgement_type">{{ trans('cruds.criminalproDisciplinary.fields.judgement_type') }}</label>
                <input class="form-control {{ $errors->has('judgement_type') ? 'is-invalid' : '' }}" type="text" name="judgement_type" id="judgement_type" value="{{ old('judgement_type', '') }}">
                @if($errors->has('judgement_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('judgement_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.criminalproDisciplinary.fields.judgement_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="government_order_no">{{ trans('cruds.criminalproDisciplinary.fields.government_order_no') }}</label>
                <input class="form-control {{ $errors->has('government_order_no') ? 'is-invalid' : '' }}" type="text" name="government_order_no" id="government_order_no" value="{{ old('government_order_no', '') }}">
                @if($errors->has('government_order_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('government_order_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.criminalproDisciplinary.fields.government_order_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="order_upload_file">{{ trans('cruds.criminalproDisciplinary.fields.order_upload_file') }}</label>
                <div class="needsclick dropzone {{ $errors->has('order_upload_file') ? 'is-invalid' : '' }}" id="order_upload_file-dropzone">
                </div>
                @if($errors->has('order_upload_file'))
                    <div class="invalid-feedback">
                        {{ $errors->first('order_upload_file') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.criminalproDisciplinary.fields.order_upload_file_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="remarks">{{ trans('cruds.criminalproDisciplinary.fields.remarks') }}</label>
                <textarea class="form-control {{ $errors->has('remarks') ? 'is-invalid' : '' }}" name="remarks" id="remarks">{{ old('remarks') }}</textarea>
                @if($errors->has('remarks'))
                    <div class="invalid-feedback">
                        {{ $errors->first('remarks') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.criminalproDisciplinary.fields.remarks_helper') }}</span>
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
    Dropzone.options.orderUploadFileDropzone = {
    url: '{{ route('admin.criminalpro-disciplinaries.storeMedia') }}',
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
      $('form').find('input[name="order_upload_file"]').remove()
      $('form').append('<input type="hidden" name="order_upload_file" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="order_upload_file"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($criminalproDisciplinary) && $criminalproDisciplinary->order_upload_file)
      var file = {!! json_encode($criminalproDisciplinary->order_upload_file) !!}
          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="order_upload_file" value="' + file.file_name + '">')
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