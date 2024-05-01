@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.criminalproDisciplinary.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.criminalpro-disciplinaries.update", [$criminalproDisciplinary->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="criminalprosecutione_id">{{ trans('cruds.criminalproDisciplinary.fields.criminalprosecutione') }}</label>
                <select class="form-control select2 {{ $errors->has('criminalprosecutione') ? 'is-invalid' : '' }}" name="criminalprosecutione_id" id="criminalprosecutione_id" required>
                    @foreach($criminalprosecutiones as $id => $entry)
                        <option value="{{ $id }}" {{ (old('criminalprosecutione_id') ? old('criminalprosecutione_id') : $criminalproDisciplinary->criminalprosecutione->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
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
                <label for="government_order_no">{{ trans('cruds.criminalproDisciplinary.fields.government_order_no') }}</label>
                <input class="form-control {{ $errors->has('government_order_no') ? 'is-invalid' : '' }}" type="text" name="government_order_no" id="government_order_no" value="{{ old('government_order_no', $criminalproDisciplinary->government_order_no) }}">
                @if($errors->has('government_order_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('government_order_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.criminalproDisciplinary.fields.government_order_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="court_name">{{ trans('cruds.criminalproDisciplinary.fields.court_name') }}</label>
                <input class="form-control {{ $errors->has('court_name') ? 'is-invalid' : '' }}" type="text" name="court_name" id="court_name" value="{{ old('court_name', $criminalproDisciplinary->court_name) }}">
                @if($errors->has('court_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('court_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.criminalproDisciplinary.fields.court_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="court_orader">{{ trans('cruds.criminalproDisciplinary.fields.court_orader') }}</label>
                <div class="needsclick dropzone {{ $errors->has('court_orader') ? 'is-invalid' : '' }}" id="court_orader-dropzone">
                </div>
                @if($errors->has('court_orader'))
                    <div class="invalid-feedback">
                        {{ $errors->first('court_orader') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.criminalproDisciplinary.fields.court_orader_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="date_of_prosecution">{{ trans('cruds.criminalproDisciplinary.fields.date_of_prosecution') }}</label>
                <input class="form-control date {{ $errors->has('date_of_prosecution') ? 'is-invalid' : '' }}" type="text" name="date_of_prosecution" id="date_of_prosecution" value="{{ old('date_of_prosecution', $criminalproDisciplinary->date_of_prosecution) }}">
                @if($errors->has('date_of_prosecution'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date_of_prosecution') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.criminalproDisciplinary.fields.date_of_prosecution_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.criminalproDisciplinary.fields.description') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{!! old('description', $criminalproDisciplinary->description) !!}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.criminalproDisciplinary.fields.description_helper') }}</span>
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
    Dropzone.options.courtOraderDropzone = {
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
      $('form').find('input[name="court_orader"]').remove()
      $('form').append('<input type="hidden" name="court_orader" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="court_orader"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($criminalproDisciplinary) && $criminalproDisciplinary->court_orader)
      var file = {!! json_encode($criminalproDisciplinary->court_orader) !!}
          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="court_orader" value="' + file.file_name + '">')
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
                xhr.open('POST', '{{ route('admin.criminalpro-disciplinaries.storeCKEditorImages') }}', true);
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
                data.append('crud_id', '{{ $criminalproDisciplinary->id ?? 0 }}');
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