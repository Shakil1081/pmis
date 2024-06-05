@extends('layouts.admin')
@section('content')
    <div class="card p-2">
        <div class="container">
            <div class="row">
                @include('admin.commonemployee.commonmenu')
                <div class="col-md-8">
                    <div class="tab-content my-1 border p-2" id="v-pills-tabContent">
                        <h4> {{ trans('global.create') }} {{ trans('cruds.criminalproDisciplinary.title_singular') }}</h4>
                        <form method="POST"
                            action="{{ route('admin.criminalpro-disciplinaries.store', ['employee_id' => request()->query('id')]) }}"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="row row-cols-2">
                                <div class="form-group">
                                    <label class="required"
                                        for="criminalprosecutione_id">{{ trans('cruds.criminalproDisciplinary.fields.criminalprosecutione') }}</label>
                                    <select
                                        class="form-control select2 {{ $errors->has('criminalprosecutione') ? 'is-invalid' : '' }}"
                                        name="criminalprosecutione_id" id="criminalprosecutione_id" required>
                                        @foreach ($criminalprosecutiones as $id => $entry)
                                            <option value="{{ $id }}"
                                                {{ old('criminalprosecutione_id') == $id ? 'selected' : '' }}>
                                                {{ $entry }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('criminalprosecutione'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('criminalprosecutione') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.criminalproDisciplinary.fields.criminalprosecutione_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label
                                        for="judgement_type">{{ trans('cruds.criminalproDisciplinary.fields.judgement_type') }}</label>
                                    <input class="form-control {{ $errors->has('judgement_type') ? 'is-invalid' : '' }}"
                                        type="text" name="judgement_type" id="judgement_type"
                                        value="{{ old('judgement_type', '') }}">
                                    @if ($errors->has('judgement_type'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('judgement_type') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.criminalproDisciplinary.fields.judgement_type_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label
                                        for="government_order_no">{{ trans('cruds.criminalproDisciplinary.fields.government_order_no') }}</label>
                                    <input
                                        class="form-control {{ $errors->has('government_order_no') ? 'is-invalid' : '' }}"
                                        type="text" name="government_order_no" id="government_order_no"
                                        value="{{ old('government_order_no', '') }}">
                                    @if ($errors->has('government_order_no'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('government_order_no') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.criminalproDisciplinary.fields.government_order_no_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label
                                        for="order_upload_file">{{ trans('cruds.criminalproDisciplinary.fields.order_upload_file') }}</label>
                                    <div class="needsclick dropzone {{ $errors->has('order_upload_file') ? 'is-invalid' : '' }}"
                                        id="order_upload_file-dropzone">
                                    </div>
                                    @if ($errors->has('order_upload_file'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('order_upload_file') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.criminalproDisciplinary.fields.order_upload_file_helper') }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="remarks">{{ trans('cruds.criminalproDisciplinary.fields.remarks') }}</label>
                                <textarea class="form-control {{ $errors->has('remarks') ? 'is-invalid' : '' }}" name="remarks" id="remarks">{{ old('remarks') }}</textarea>
                                @if ($errors->has('remarks'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('remarks') }}
                                    </div>
                                @endif
                                <span
                                    class="help-block">{{ trans('cruds.criminalproDisciplinary.fields.remarks_helper') }}</span>
                            </div>

  
                            <div id="action-fields  d-none">
            <div class="action-field">
            <div class="row row-cols-3">
                <div class="form-group">
                    <label class="required" for="govt_order_no_0">{{ trans('cruds.diciplinaryAction.fields.govt_order_no') }}</label>
                    <input class="form-control {{ $errors->has('govt_order_no.0') ? 'is-invalid' : '' }}" type="text" name="govt_order_no[]" id="govt_order_no_0" value="{{ old('govt_order_no.0', '') }}" required>
                    @if($errors->has('govt_order_no.0'))
                        <div class="invalid-feedback">
                            {{ $errors->first('govt_order_no.0') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.diciplinaryAction.fields.govt_order_no_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="govt_order_date_0">{{ trans('cruds.diciplinaryAction.fields.govt_order_date') }}</label>
                    <input class="form-control  {{ $errors->has('govt_order_date.0') ? 'is-invalid' : '' }}" type="date" name="govt_order_date[]" id="govt_order_date_0" value="{{ old('govt_order_date.0') }}" required>
                    @if($errors->has('govt_order_date.0'))
                        <div class="invalid-feedback">
                            {{ $errors->first('govt_order_date.0') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.diciplinaryAction.fields.govt_order_date_helper') }}</span>
                    </div>
                    <div class="form-group">
                    <label class="w-100">&nbsp;</label>
                <button type="button" class="btn btn-danger remove-field">Remove</button>
                </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-3">
       

                            <div class="form-group">
                                <button class="btn btn-danger" type="submit">
                                    {{ trans('global.save') }}
                                </button>
                            </div>

                            <div class="form-group  d-none">
            
            <button type="button" id="add-field" class="btn btn-primary">Add More</button>
    
            </div>
            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        let fieldCount = 1;

        document.getElementById('add-field').addEventListener('click', function () {
            let container = document.getElementById('action-fields');
            let newField = document.querySelector('.action-field').cloneNode(true);

            newField.querySelectorAll('input').forEach(input => {
                input.value = '';
                input.id = input.id.replace(/\d+/, fieldCount);
            });

            newField.querySelectorAll('label').forEach(label => {
                label.setAttribute('for', label.getAttribute('for').replace(/\d+/, fieldCount));
            });

            newField.querySelectorAll('.invalid-feedback').forEach(div => div.remove());
            newField.querySelectorAll('.is-invalid').forEach(input => input.classList.remove('is-invalid'));

            container.appendChild(newField);
            fieldCount++;
        });

        document.getElementById('action-fields').addEventListener('click', function (e) {
            if (e.target && e.target.matches('button.remove-field')) {
                if (document.querySelectorAll('.action-field').length > 1) {
                    e.target.closest('.action-field').remove();
                } else {
                    alert('At least one set of fields must be present.');
                }
            }
        });
    });
</script>

@endsection

@section('scripts')
    <script>
        Dropzone.options.orderUploadFileDropzone = {
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
            success: function(file, response) {
                $('form').find('input[name="order_upload_file"]').remove()
                $('form').append('<input type="hidden" name="order_upload_file" value="' + response.name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="order_upload_file"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                @if (isset($criminalproDisciplinary) && $criminalproDisciplinary->order_upload_file)
                    var file = {!! json_encode($criminalproDisciplinary->order_upload_file) !!}
                    this.options.addedfile.call(this, file)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="order_upload_file" value="' + file.file_name +
                        '">')
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
