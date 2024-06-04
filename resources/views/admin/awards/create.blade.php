@extends('layouts.admin')
@section('content')
    <div class="card p-2">
        <div class="container">
            <div class="row">
                @include('admin.commonemployee.commonmenu')
                <div class="col-md-8">
                    <div class="tab-content my-1 border p-2" id="v-pills-tabContent">
                        <strong> {{ trans('global.create') }} {{ trans('cruds.award.title_singular') }}</strong>

                        <form method="POST"
                            action="{{ route('admin.awards.store', ['employee_id' => request()->query('id')]) }}"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="row row-cols-2">
                                <div class="form-group">
                                    <label for="title">{{ trans('cruds.award.fields.title') }}</label>
                                    <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}"
                                        type="text" name="title" id="title" value="{{ old('title', '') }}">
                                    @if ($errors->has('title'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('title') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.award.fields.title_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="ground_area">{{ trans('cruds.award.fields.ground_area') }}</label>
                                    <input class="form-control {{ $errors->has('ground_area') ? 'is-invalid' : '' }}"
                                        type="text" name="ground_area" id="ground_area"
                                        value="{{ old('ground_area', '') }}">
                                    @if ($errors->has('ground_area'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('ground_area') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.award.fields.ground_area_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="date">{{ trans('cruds.award.fields.date') }}</label>
                                    <input class="form-control date {{ $errors->has('date') ? 'is-invalid' : '' }}"
                                        type="text" name="date" id="date" value="{{ old('date') }}">
                                    @if ($errors->has('date'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('date') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.award.fields.date_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="certificate">{{ trans('cruds.award.fields.certificate') }}</label>
                                    <div class="needsclick dropzone {{ $errors->has('certificate') ? 'is-invalid' : '' }}"
                                        id="certificate-dropzone">
                                    </div>
                                    @if ($errors->has('certificate'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('certificate') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.award.fields.certificate_helper') }}</span>
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
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        Dropzone.options.certificateDropzone = {
            url: '{{ route('admin.awards.storeMedia') }}',
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
                $('form').find('input[name="certificate"]').remove()
                $('form').append('<input type="hidden" name="certificate" value="' + response.name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="certificate"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                @if (isset($award) && $award->certificate)
                    var file = {!! json_encode($award->certificate) !!}
                    this.options.addedfile.call(this, file)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="certificate" value="' + file.file_name + '">')
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
