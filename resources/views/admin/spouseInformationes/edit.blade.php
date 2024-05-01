@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.spouseInformatione.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.spouse-informationes.update", [$spouseInformatione->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="employee_id">{{ trans('cruds.spouseInformatione.fields.employee') }}</label>
                <select class="form-control select2 {{ $errors->has('employee') ? 'is-invalid' : '' }}" name="employee_id" id="employee_id" required>
                    @foreach($employees as $id => $entry)
                        <option value="{{ $id }}" {{ (old('employee_id') ? old('employee_id') : $spouseInformatione->employee->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('employee'))
                    <div class="invalid-feedback">
                        {{ $errors->first('employee') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.spouseInformatione.fields.employee_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="name_bn">{{ trans('cruds.spouseInformatione.fields.name_bn') }}</label>
                <input class="form-control {{ $errors->has('name_bn') ? 'is-invalid' : '' }}" type="text" name="name_bn" id="name_bn" value="{{ old('name_bn', $spouseInformatione->name_bn) }}" required>
                @if($errors->has('name_bn'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name_bn') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.spouseInformatione.fields.name_bn_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name_en">{{ trans('cruds.spouseInformatione.fields.name_en') }}</label>
                <input class="form-control {{ $errors->has('name_en') ? 'is-invalid' : '' }}" type="text" name="name_en" id="name_en" value="{{ old('name_en', $spouseInformatione->name_en) }}">
                @if($errors->has('name_en'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name_en') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.spouseInformatione.fields.name_en_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="nid_upload">{{ trans('cruds.spouseInformatione.fields.nid_upload') }}</label>
                <div class="needsclick dropzone {{ $errors->has('nid_upload') ? 'is-invalid' : '' }}" id="nid_upload-dropzone">
                </div>
                @if($errors->has('nid_upload'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nid_upload') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.spouseInformatione.fields.nid_upload_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="date_of_birth">{{ trans('cruds.spouseInformatione.fields.date_of_birth') }}</label>
                <input class="form-control date {{ $errors->has('date_of_birth') ? 'is-invalid' : '' }}" type="text" name="date_of_birth" id="date_of_birth" value="{{ old('date_of_birth', $spouseInformatione->date_of_birth) }}">
                @if($errors->has('date_of_birth'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date_of_birth') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.spouseInformatione.fields.date_of_birth_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="occupation">{{ trans('cruds.spouseInformatione.fields.occupation') }}</label>
                <input class="form-control {{ $errors->has('occupation') ? 'is-invalid' : '' }}" type="text" name="occupation" id="occupation" value="{{ old('occupation', $spouseInformatione->occupation) }}">
                @if($errors->has('occupation'))
                    <div class="invalid-feedback">
                        {{ $errors->first('occupation') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.spouseInformatione.fields.occupation_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="office_address">{{ trans('cruds.spouseInformatione.fields.office_address') }}</label>
                <input class="form-control {{ $errors->has('office_address') ? 'is-invalid' : '' }}" type="text" name="office_address" id="office_address" value="{{ old('office_address', $spouseInformatione->office_address) }}">
                @if($errors->has('office_address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('office_address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.spouseInformatione.fields.office_address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="phone_number">{{ trans('cruds.spouseInformatione.fields.phone_number') }}</label>
                <input class="form-control {{ $errors->has('phone_number') ? 'is-invalid' : '' }}" type="text" name="phone_number" id="phone_number" value="{{ old('phone_number', $spouseInformatione->phone_number) }}">
                @if($errors->has('phone_number'))
                    <div class="invalid-feedback">
                        {{ $errors->first('phone_number') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.spouseInformatione.fields.phone_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="present_addess">{{ trans('cruds.spouseInformatione.fields.present_addess') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('present_addess') ? 'is-invalid' : '' }}" name="present_addess" id="present_addess">{!! old('present_addess', $spouseInformatione->present_addess) !!}</textarea>
                @if($errors->has('present_addess'))
                    <div class="invalid-feedback">
                        {{ $errors->first('present_addess') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.spouseInformatione.fields.present_addess_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="permanent_addess">{{ trans('cruds.spouseInformatione.fields.permanent_addess') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('permanent_addess') ? 'is-invalid' : '' }}" name="permanent_addess" id="permanent_addess">{!! old('permanent_addess', $spouseInformatione->permanent_addess) !!}</textarea>
                @if($errors->has('permanent_addess'))
                    <div class="invalid-feedback">
                        {{ $errors->first('permanent_addess') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.spouseInformatione.fields.permanent_addess_helper') }}</span>
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
    url: '{{ route('admin.spouse-informationes.storeMedia') }}',
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
@if(isset($spouseInformatione) && $spouseInformatione->nid_upload)
      var file = {!! json_encode($spouseInformatione->nid_upload) !!}
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
    $(document).ready(function () {
  function SimpleUploadAdapter(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
      return {
        upload: function() {
          return loader.file
            .then(function (file) {
              return new Promise(function(resolve, reject) {
                // Init request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '{{ route('admin.spouse-informationes.storeCKEditorImages') }}', true);
                xhr.setRequestHeader('x-csrf-token', window._token);
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.responseType = 'json';

                // Init listeners
                var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                xhr.addEventListener('error', function() { reject(genericErrorText) });
                xhr.addEventListener('abort', function() { reject() });
                xhr.addEventListener('load', function() {
                  var response = xhr.response;

                  if (!response || xhr.status !== 201) {
                    return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                  }

                  $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                  resolve({ default: response.url });
                });

                if (xhr.upload) {
                  xhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                      loader.uploadTotal = e.total;
                      loader.uploaded = e.loaded;
                    }
                  });
                }

                // Send request
                var data = new FormData();
                data.append('upload', file);
                data.append('crud_id', '{{ $spouseInformatione->id ?? 0 }}');
                xhr.send(data);
              });
            })
        }
      };
    }
  }

  var allEditors = document.querySelectorAll('.ckeditor');
  for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(
      allEditors[i], {
        extraPlugins: [SimpleUploadAdapter]
      }
    );
  }
});
</script>

@endsection