@extends('layouts.admin')
@section('content')
    <div class="card p-2">
        <div class="container">
            <div class="row">
                @include('admin.commonemployee.commonmenu')
                <div class="col-md-8">
                    <div class="tab-content my-1 border p-2" id="v-pills-tabContent">
                    <div class="text-center">
                        @if (app()->getLocale() === 'bn')
                            কর্মকর্তা/কর্মচারী আইডি : <b>{{ englishToBanglaNumber($employee['employeeid'] ?? 0) }}</b>
                        @else
                            Employee ID : <b>{{ $employee->employeeid }}</b>
                        @endif

                        <br>

                        @if (app()->getLocale() === 'bn')
                            কর্মকর্তা/কর্মচারী নাম : <b>{{ $employee->fullname_bn }}</b>
                        @else
                            Employee Name: <b>{{ $employee->fullname_en }}</b>
                        @endif
                    </div>
                    <hr>
                        <h4>{{ trans('cruds.acrMonitoring.title_singular') }}
                        <br>
                        </h4>
                        <form method="POST"
                            action="{{ route('admin.acr-monitorings.store', ['employee_id' => request()->query('id')]) }}"
                            enctype="multipart/form-data">
                            @csrf


                            <div class="row row-cols-3">

                                <div class="form-group">
                                    <label class="required"
                                        for="year">{{ trans('cruds.acrMonitoring.fields.year') }}</label>
                                    <input class="form-control {{ $errors->has('year') ? 'is-invalid' : '' }}"
                                        type="number" name="year" id="year" value="{{ old('year', '') }}"
                                        step="1" min="1" required>
                                    @if ($errors->has('year'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('year') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.acrMonitoring.fields.year_helper') }}</span>
                                </div>
                                {{-- <div class="form-group">
                                    <label for="reviewer">{{ trans('cruds.acrMonitoring.fields.reviewer') }}</label>
                                    <input class="form-control {{ $errors->has('reviewer') ? 'is-invalid' : '' }}"
                                        type="text" name="reviewer" id="reviewer" value="{{ old('reviewer', '') }}">
                                    @if ($errors->has('reviewer'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('reviewer') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.acrMonitoring.fields.reviewer_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="review_date">{{ trans('cruds.acrMonitoring.fields.review_date') }}</label>
                                    <input class="form-control date {{ $errors->has('review_date') ? 'is-invalid' : '' }}"
                                        type="text" name="review_date" id="review_date"
                                        value="{{ old('review_date') }}">
                                    @if ($errors->has('review_date'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('review_date') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.acrMonitoring.fields.review_date_helper') }}</span>
                                </div> --}}
                            </div>
                            <div class="form-group">
                                <label for="remarks">{{ trans('cruds.acrMonitoring.fields.remarks') }}</label>
                                <textarea class="form-control ckeditor {{ $errors->has('remarks') ? 'is-invalid' : '' }}" name="remarks" id="remarks">{!! old('remarks') !!}</textarea>
                                @if ($errors->has('remarks'))
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
                                                '{{ route('admin.acr-monitorings.storeCKEditorImages') }}',
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
                                                '{{ $acrMonitoring->id ?? 0 }}');
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
