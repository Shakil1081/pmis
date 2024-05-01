@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.siteSetting.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.site-settings.update", [$siteSetting->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="title">{{ trans('cruds.siteSetting.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', $siteSetting->title) }}" required>
                @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.siteSetting.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="site_logo">{{ trans('cruds.siteSetting.fields.site_logo') }}</label>
                <div class="needsclick dropzone {{ $errors->has('site_logo') ? 'is-invalid' : '' }}" id="site_logo-dropzone">
                </div>
                @if($errors->has('site_logo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('site_logo') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.siteSetting.fields.site_logo_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="copyright">{{ trans('cruds.siteSetting.fields.copyright') }}</label>
                <input class="form-control {{ $errors->has('copyright') ? 'is-invalid' : '' }}" type="text" name="copyright" id="copyright" value="{{ old('copyright', $siteSetting->copyright) }}" required>
                @if($errors->has('copyright'))
                    <div class="invalid-feedback">
                        {{ $errors->first('copyright') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.siteSetting.fields.copyright_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="helpline">{{ trans('cruds.siteSetting.fields.helpline') }}</label>
                <input class="form-control {{ $errors->has('helpline') ? 'is-invalid' : '' }}" type="text" name="helpline" id="helpline" value="{{ old('helpline', $siteSetting->helpline) }}">
                @if($errors->has('helpline'))
                    <div class="invalid-feedback">
                        {{ $errors->first('helpline') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.siteSetting.fields.helpline_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="title_en">{{ trans('cruds.siteSetting.fields.title_en') }}</label>
                <input class="form-control {{ $errors->has('title_en') ? 'is-invalid' : '' }}" type="text" name="title_en" id="title_en" value="{{ old('title_en', $siteSetting->title_en) }}" required>
                @if($errors->has('title_en'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title_en') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.siteSetting.fields.title_en_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="favicon">{{ trans('cruds.siteSetting.fields.favicon') }}</label>
                <div class="needsclick dropzone {{ $errors->has('favicon') ? 'is-invalid' : '' }}" id="favicon-dropzone">
                </div>
                @if($errors->has('favicon'))
                    <div class="invalid-feedback">
                        {{ $errors->first('favicon') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.siteSetting.fields.favicon_helper') }}</span>
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
    Dropzone.options.siteLogoDropzone = {
    url: '{{ route('admin.site-settings.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 500,
      height: 500
    },
    success: function (file, response) {
      $('form').find('input[name="site_logo"]').remove()
      $('form').append('<input type="hidden" name="site_logo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="site_logo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($siteSetting) && $siteSetting->site_logo)
      var file = {!! json_encode($siteSetting->site_logo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="site_logo" value="' + file.file_name + '">')
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
    Dropzone.options.faviconDropzone = {
    url: '{{ route('admin.site-settings.storeMedia') }}',
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
      $('form').find('input[name="favicon"]').remove()
      $('form').append('<input type="hidden" name="favicon" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="favicon"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($siteSetting) && $siteSetting->favicon)
      var file = {!! json_encode($siteSetting->favicon) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="favicon" value="' + file.file_name + '">')
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