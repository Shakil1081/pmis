@extends('layouts.admin')
@section('content')
    <div class="card p-2">
        <div class="container">
            <div class="row">
                @include('admin.commonemployee.commonmenu')
                <div class="col-md-8">
                    <div class="tab-content my-1 border p-2" id="v-pills-tabContent">
                        <h4> {{ trans('global.create') }} {{ trans('cruds.extracurriculam.title_singular') }}</h4>
                        <form method="POST"
                            action="{{ route('admin.extracurriculams.store', ['employee_id' => request()->query('id')]) }}"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="row row-cols-2">

                                <div class="form-group">
                                    <label class="required"
                                        for="activity_name">{{ trans('cruds.extracurriculam.fields.activity_name') }}</label>
                                    <input class="form-control {{ $errors->has('activity_name') ? 'is-invalid' : '' }}"
                                        type="text" name="activity_name" id="activity_name"
                                        value="{{ old('activity_name', '') }}" required>
                                    @if ($errors->has('activity_name'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('activity_name') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.extracurriculam.fields.activity_name_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label
                                        for="organization">{{ trans('cruds.extracurriculam.fields.organization') }}</label>
                                    <input class="form-control {{ $errors->has('organization') ? 'is-invalid' : '' }}"
                                        type="text" name="organization" id="organization"
                                        value="{{ old('organization', '') }}">
                                    @if ($errors->has('organization'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('organization') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.extracurriculam.fields.organization_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="position">{{ trans('cruds.extracurriculam.fields.position') }}</label>
                                    <input class="form-control {{ $errors->has('position') ? 'is-invalid' : '' }}"
                                        type="text" name="position" id="position" value="{{ old('position', '') }}">
                                    @if ($errors->has('position'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('position') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.extracurriculam.fields.position_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="start_date">{{ trans('cruds.extracurriculam.fields.start_date') }}</label>
                                    <input class="form-control date {{ $errors->has('start_date') ? 'is-invalid' : '' }}"
                                        type="text" name="start_date" id="start_date" value="{{ old('start_date') }}">
                                    @if ($errors->has('start_date'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('start_date') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.extracurriculam.fields.start_date_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="end_date">{{ trans('cruds.extracurriculam.fields.end_date') }}</label>
                                    <input class="form-control date {{ $errors->has('end_date') ? 'is-invalid' : '' }}"
                                        type="text" name="end_date" id="end_date" value="{{ old('end_date') }}">
                                    @if ($errors->has('end_date'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('end_date') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.extracurriculam.fields.end_date_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label
                                        for="attatchment">{{ trans('cruds.extracurriculam.fields.attatchment') }}</label>
                                    <div class="needsclick dropzone {{ $errors->has('attatchment') ? 'is-invalid' : '' }}"
                                        id="attatchment-dropzone">
                                    </div>
                                    @if ($errors->has('attatchment'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('attatchment') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.extracurriculam.fields.attatchment_helper') }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description">{{ trans('cruds.extracurriculam.fields.description') }}</label>
                                <textarea class="form-control ckeditor {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description"
                                    id="description">{!! old('description') !!}</textarea>
                                @if ($errors->has('description'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('description') }}
                                    </div>
                                @endif
                                <span
                                    class="help-block">{{ trans('cruds.extracurriculam.fields.description_helper') }}</span>
                            </div>


                            <div class="form-group">
                                <button class="btn btn-danger" type="submit">
                                    {{ trans('global.save') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
                                            '{{ route('admin.extracurriculams.storeCKEditorImages') }}',
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
                                            '{{ $extracurriculam->id ?? 0 }}');
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

    <script>
        Dropzone.options.attatchmentDropzone = {
            url: '{{ route('admin.extracurriculams.storeMedia') }}',
            maxFilesize: 2, // MB
            maxFiles: 1,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            params: {
                size: 2
            },
            success: function(file, response) {
                $('form').find('input[name="attatchment"]').remove()
                $('form').append('<input type="hidden" name="attatchment" value="' + response.name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="attatchment"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                @if (isset($extracurriculam) && $extracurriculam->attatchment)
                    var file = {!! json_encode($extracurriculam->attatchment) !!}
                    this.options.addedfile.call(this, file)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="attatchment" value="' + file.file_name + '">')
                    this.options.maxFiles = this.options.maxFiles - 1
                @endif
            },
            error: function(file, response) {
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
