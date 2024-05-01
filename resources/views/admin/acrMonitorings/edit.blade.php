@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.acrMonitoring.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.acr-monitorings.update", [$acrMonitoring->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="employee_id">{{ trans('cruds.acrMonitoring.fields.employee') }}</label>
                <select class="form-control select2 {{ $errors->has('employee') ? 'is-invalid' : '' }}" name="employee_id" id="employee_id" required>
                    @foreach($employees as $id => $entry)
                        <option value="{{ $id }}" {{ (old('employee_id') ? old('employee_id') : $acrMonitoring->employee->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('employee'))
                    <div class="invalid-feedback">
                        {{ $errors->first('employee') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.acrMonitoring.fields.employee_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="year">{{ trans('cruds.acrMonitoring.fields.year') }}</label>
                <input class="form-control {{ $errors->has('year') ? 'is-invalid' : '' }}" type="number" name="year" id="year" value="{{ old('year', $acrMonitoring->year) }}" step="1" required>
                @if($errors->has('year'))
                    <div class="invalid-feedback">
                        {{ $errors->first('year') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.acrMonitoring.fields.year_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="reviewer">{{ trans('cruds.acrMonitoring.fields.reviewer') }}</label>
                <input class="form-control {{ $errors->has('reviewer') ? 'is-invalid' : '' }}" type="text" name="reviewer" id="reviewer" value="{{ old('reviewer', $acrMonitoring->reviewer) }}">
                @if($errors->has('reviewer'))
                    <div class="invalid-feedback">
                        {{ $errors->first('reviewer') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.acrMonitoring.fields.reviewer_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="review_date">{{ trans('cruds.acrMonitoring.fields.review_date') }}</label>
                <input class="form-control date {{ $errors->has('review_date') ? 'is-invalid' : '' }}" type="text" name="review_date" id="review_date" value="{{ old('review_date', $acrMonitoring->review_date) }}">
                @if($errors->has('review_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('review_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.acrMonitoring.fields.review_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="remarks">{{ trans('cruds.acrMonitoring.fields.remarks') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('remarks') ? 'is-invalid' : '' }}" name="remarks" id="remarks">{!! old('remarks', $acrMonitoring->remarks) !!}</textarea>
                @if($errors->has('remarks'))
                    <div class="invalid-feedback">
                        {{ $errors->first('remarks') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.acrMonitoring.fields.remarks_helper') }}</span>
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
                xhr.open('POST', '{{ route('admin.acr-monitorings.storeCKEditorImages') }}', true);
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
                data.append('crud_id', '{{ $acrMonitoring->id ?? 0 }}');
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