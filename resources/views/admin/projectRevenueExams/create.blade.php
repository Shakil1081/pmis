@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.projectRevenueExam.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.project-revenue-exams.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="exam_id">{{ trans('cruds.projectRevenueExam.fields.exam') }}</label>
                <select class="form-control select2 {{ $errors->has('exam') ? 'is-invalid' : '' }}" name="exam_id" id="exam_id" required>
                    @foreach($exams as $id => $entry)
                        <option value="{{ $id }}" {{ old('exam_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('exam'))
                    <div class="invalid-feedback">
                        {{ $errors->first('exam') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.projectRevenueExam.fields.exam_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="exam_name_bn">{{ trans('cruds.projectRevenueExam.fields.exam_name_bn') }}</label>
                <input class="form-control {{ $errors->has('exam_name_bn') ? 'is-invalid' : '' }}" type="text" name="exam_name_bn" id="exam_name_bn" value="{{ old('exam_name_bn', '') }}" required>
                @if($errors->has('exam_name_bn'))
                    <div class="invalid-feedback">
                        {{ $errors->first('exam_name_bn') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.projectRevenueExam.fields.exam_name_bn_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="exam_name_en">{{ trans('cruds.projectRevenueExam.fields.exam_name_en') }}</label>
                <input class="form-control {{ $errors->has('exam_name_en') ? 'is-invalid' : '' }}" type="text" name="exam_name_en" id="exam_name_en" value="{{ old('exam_name_en', '') }}" required>
                @if($errors->has('exam_name_en'))
                    <div class="invalid-feedback">
                        {{ $errors->first('exam_name_en') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.projectRevenueExam.fields.exam_name_en_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="upload">{{ trans('cruds.projectRevenueExam.fields.upload') }}</label>
                <div class="needsclick dropzone {{ $errors->has('upload') ? 'is-invalid' : '' }}" id="upload-dropzone">
                </div>
                @if($errors->has('upload'))
                    <div class="invalid-feedback">
                        {{ $errors->first('upload') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.projectRevenueExam.fields.upload_helper') }}</span>
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
    Dropzone.options.uploadDropzone = {
    url: '{{ route('admin.project-revenue-exams.storeMedia') }}',
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
      $('form').find('input[name="upload"]').remove()
      $('form').append('<input type="hidden" name="upload" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="upload"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($projectRevenueExam) && $projectRevenueExam->upload)
      var file = {!! json_encode($projectRevenueExam->upload) !!}
          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="upload" value="' + file.file_name + '">')
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