@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            {{ trans('global.create') }} {{ trans('cruds.travelPurpose.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('admin.travel-purposes.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row row-cols-2">
                    <div class="form-group">
                        <label class="required" for="name_bn">{{ trans('cruds.travelPurpose.fields.name_bn') }}</label>
                        <input class="form-control {{ $errors->has('name_bn') ? 'is-invalid' : '' }}" type="text"
                            name="name_bn" id="name_bn" value="{{ old('name_bn', '') }}" required>
                        @if ($errors->has('name_bn'))
                            <div class="invalid-feedback">
                                {{ $errors->first('name_bn') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.travelPurpose.fields.name_bn_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label class="required" for="name_en">{{ trans('cruds.travelPurpose.fields.name_en') }}</label>
                        <input class="form-control {{ $errors->has('name_en') ? 'is-invalid' : '' }}" type="text"
                            name="name_en" id="name_en" value="{{ old('name_en', '') }}" required>
                        @if ($errors->has('name_en'))
                            <div class="invalid-feedback">
                                {{ $errors->first('name_en') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.travelPurpose.fields.name_en_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="remark">{{ trans('cruds.travelPurpose.fields.remark') }}</label>
                        <textarea class="form-control ckeditor {{ $errors->has('remark') ? 'is-invalid' : '' }}" name="remark" id="remark">{!! old('remark') !!}</textarea>
                        @if ($errors->has('remark'))
                            <div class="invalid-feedback">
                                {{ $errors->first('remark') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.travelPurpose.fields.remark_helper') }}</span>
                    </div>
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
        $(document).ready(function() {
            function SimpleUploadAdapter(editor) {
                editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
                    return {
                        upload: function() {
                            return loader.file
                                .then(function(file) {
                                    return new Promise(function(resolve, reject) {
                                        // Init request
                                        var xhr = new XMLHttpRequest();
                                        xhr.open('POST',
                                            '{{ route('admin.travel-purposes.storeCKEditorImages') }}',
                                            true);
                                        xhr.setRequestHeader('x-csrf-token', window._token);
                                        xhr.setRequestHeader('Accept', 'application/json');
                                        xhr.responseType = 'json';

                                        // Init listeners
                                        var genericErrorText =
                                            `Couldn't upload file: ${ file.name }.`;
                                        xhr.addEventListener('error', function() {
                                            reject(genericErrorText)
                                        });
                                        xhr.addEventListener('abort', function() {
                                            reject()
                                        });
                                        xhr.addEventListener('load', function() {
                                            var response = xhr.response;

                                            if (!response || xhr.status !== 201) {
                                                return reject(response && response
                                                    .message ?
                                                    `${genericErrorText}\n${xhr.status} ${response.message}` :
                                                    `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`
                                                    );
                                            }

                                            $('form').append(
                                                '<input type="hidden" name="ck-media[]" value="' +
                                                response.id + '">');

                                            resolve({
                                                default: response.url
                                            });
                                        });

                                        if (xhr.upload) {
                                            xhr.upload.addEventListener('progress', function(
                                            e) {
                                                if (e.lengthComputable) {
                                                    loader.uploadTotal = e.total;
                                                    loader.uploaded = e.loaded;
                                                }
                                            });
                                        }

                                        // Send request
                                        var data = new FormData();
                                        data.append('upload', file);
                                        data.append('crud_id',
                                        '{{ $travelPurpose->id ?? 0 }}');
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
