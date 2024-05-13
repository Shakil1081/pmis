@extends('layouts.admin')
@section('content')
    <div class="card p-2">
        <div class="container">
            <div class="row">
                @include('admin.commonemployee.commonmenu')
                <div class="col-md-8">
                    <div class="tab-content my-1 border p-2" id="v-pills-tabContent">
                        <h4> {{ trans('global.create') }} {{ trans('cruds.publication.title_singular') }}</h4>
                        <form method="POST"
                            action="{{ route('admin.publications.store', ['employee_id' => request()->query('id')]) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row row-cols-2">
                                <div class="form-group">
                                    <label class="required"
                                        for="title">{{ trans('cruds.publication.fields.title') }}</label>
                                    <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}"
                                        type="text" name="title" id="title" value="{{ old('title', '') }}"
                                        required>
                                    @if ($errors->has('title'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('title') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.publication.fields.title_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label class="required">{{ trans('cruds.publication.fields.publication_type') }}</label>
                                    <select class="form-control {{ $errors->has('publication_type') ? 'is-invalid' : '' }}"
                                        name="publication_type" id="publication_type" required>
                                        <option value disabled
                                            {{ old('publication_type', null) === null ? 'selected' : '' }}>
                                            {{ trans('global.pleaseSelect') }}</option>
                                        @foreach (App\Models\Publication::PUBLICATION_TYPE_SELECT as $key => $label)
                                            <option value="{{ $key }}"
                                                {{ old('publication_type', '') === (string) $key ? 'selected' : '' }}>
                                                {{ $label }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('publication_type'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('publication_type') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.publication.fields.publication_type_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label
                                        for="publication_media">{{ trans('cruds.publication.fields.publication_media') }}</label>
                                    <input class="form-control {{ $errors->has('publication_media') ? 'is-invalid' : '' }}"
                                        type="text" name="publication_media" id="publication_media"
                                        value="{{ old('publication_media', '') }}">
                                    @if ($errors->has('publication_media'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('publication_media') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.publication.fields.publication_media_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label
                                        for="publication_date">{{ trans('cruds.publication.fields.publication_date') }}</label>
                                    <input
                                        class="form-control date {{ $errors->has('publication_date') ? 'is-invalid' : '' }}"
                                        type="text" name="publication_date" id="publication_date"
                                        value="{{ old('publication_date') }}">
                                    @if ($errors->has('publication_date'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('publication_date') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.publication.fields.publication_date_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label
                                        for="publication_link">{{ trans('cruds.publication.fields.publication_link') }}</label>
                                    <input class="form-control {{ $errors->has('publication_link') ? 'is-invalid' : '' }}"
                                        type="text" name="publication_link" id="publication_link"
                                        value="{{ old('publication_link', '') }}">
                                    @if ($errors->has('publication_link'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('publication_link') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.publication.fields.publication_link_helper') }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description">{{ trans('cruds.publication.fields.description') }}</label>
                                <textarea class="form-control ckeditor {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description"
                                    id="description">{!! old('description') !!}</textarea>
                                @if ($errors->has('description'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('description') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.publication.fields.description_helper') }}</span>
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
                                            '{{ route('admin.publications.storeCKEditorImages') }}',
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
                                        data.append('crud_id', '{{ $publication->id ?? 0 }}');
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
