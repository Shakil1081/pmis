@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.criminalProsecutione.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.criminal-prosecutiones.update", [$criminalProsecutione->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="employee_id">{{ trans('cruds.criminalProsecutione.fields.employee') }}</label>
                <select class="form-control select2 {{ $errors->has('employee') ? 'is-invalid' : '' }}" name="employee_id" id="employee_id">
                    @foreach($employees as $id => $entry)
                        <option value="{{ $id }}" {{ (old('employee_id') ? old('employee_id') : $criminalProsecutione->employee->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('employee'))
                    <div class="invalid-feedback">
                        {{ $errors->first('employee') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.criminalProsecutione.fields.employee_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="judgement_type">{{ trans('cruds.criminalProsecutione.fields.judgement_type') }}</label>
                <input class="form-control {{ $errors->has('judgement_type') ? 'is-invalid' : '' }}" type="text" name="judgement_type" id="judgement_type" value="{{ old('judgement_type', $criminalProsecutione->judgement_type) }}">
                @if($errors->has('judgement_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('judgement_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.criminalProsecutione.fields.judgement_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="natureof_offence">{{ trans('cruds.criminalProsecutione.fields.natureof_offence') }}</label>
                <input class="form-control {{ $errors->has('natureof_offence') ? 'is-invalid' : '' }}" type="text" name="natureof_offence" id="natureof_offence" value="{{ old('natureof_offence', $criminalProsecutione->natureof_offence) }}">
                @if($errors->has('natureof_offence'))
                    <div class="invalid-feedback">
                        {{ $errors->first('natureof_offence') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.criminalProsecutione.fields.natureof_offence_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="government_order_no">{{ trans('cruds.criminalProsecutione.fields.government_order_no') }}</label>
                <input class="form-control {{ $errors->has('government_order_no') ? 'is-invalid' : '' }}" type="text" name="government_order_no" id="government_order_no" value="{{ old('government_order_no', $criminalProsecutione->government_order_no) }}">
                @if($errors->has('government_order_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('government_order_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.criminalProsecutione.fields.government_order_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="court_order">{{ trans('cruds.criminalProsecutione.fields.court_order') }}</label>
                <div class="needsclick dropzone {{ $errors->has('court_order') ? 'is-invalid' : '' }}" id="court_order-dropzone">
                </div>
                @if($errors->has('court_order'))
                    <div class="invalid-feedback">
                        {{ $errors->first('court_order') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.criminalProsecutione.fields.court_order_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="remzrk">{{ trans('cruds.criminalProsecutione.fields.remzrk') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('remzrk') ? 'is-invalid' : '' }}" name="remzrk" id="remzrk">{!! old('remzrk', $criminalProsecutione->remzrk) !!}</textarea>
                @if($errors->has('remzrk'))
                    <div class="invalid-feedback">
                        {{ $errors->first('remzrk') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.criminalProsecutione.fields.remzrk_helper') }}</span>
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
    Dropzone.options.courtOrderDropzone = {
    url: '{{ route('admin.criminal-prosecutiones.storeMedia') }}',
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
      $('form').find('input[name="court_order"]').remove()
      $('form').append('<input type="hidden" name="court_order" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="court_order"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($criminalProsecutione) && $criminalProsecutione->court_order)
      var file = {!! json_encode($criminalProsecutione->court_order) !!}
          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="court_order" value="' + file.file_name + '">')
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
                xhr.open('POST', '{{ route('admin.criminal-prosecutiones.storeCKEditorImages') }}', true);
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
                data.append('crud_id', '{{ $criminalProsecutione->id ?? 0 }}');
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