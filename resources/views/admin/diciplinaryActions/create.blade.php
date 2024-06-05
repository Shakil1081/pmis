@extends('layouts.admin')
@section('content')
    <div class="card p-2">
        <div class="container">
            <div class="row">
                @include('admin.commonemployee.commonmenu')
                <div class="col-md-8">
                    <div class="tab-content my-1 border p-2" id="v-pills-tabContent">
        {{ trans('global.create') }} {{ trans('cruds.diciplinaryAction.title_singular') }}
   
        <form method="POST" action="{{ route("admin.diciplinary-actions.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="govt_order_no">{{ trans('cruds.diciplinaryAction.fields.govt_order_no') }}</label>
                <input class="form-control {{ $errors->has('govt_order_no') ? 'is-invalid' : '' }}" type="text" name="govt_order_no" id="govt_order_no" value="{{ old('govt_order_no', '') }}" required>
                @if($errors->has('govt_order_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('govt_order_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.diciplinaryAction.fields.govt_order_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="govt_order_date">{{ trans('cruds.diciplinaryAction.fields.govt_order_date') }}</label>
                <input class="form-control date {{ $errors->has('govt_order_date') ? 'is-invalid' : '' }}" type="text" name="govt_order_date" id="govt_order_date" value="{{ old('govt_order_date') }}" required>
                @if($errors->has('govt_order_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('govt_order_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.diciplinaryAction.fields.govt_order_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="diciplinary_action_id">{{ trans('cruds.diciplinaryAction.fields.diciplinary_action') }}</label>
                <select class="form-control select2 {{ $errors->has('diciplinary_action') ? 'is-invalid' : '' }}" name="diciplinary_action_id" id="diciplinary_action_id" required>
                    @foreach($diciplinary_actions as $id => $entry)
                        <option value="{{ $id }}" {{ old('diciplinary_action_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('diciplinary_action'))
                    <div class="invalid-feedback">
                        {{ $errors->first('diciplinary_action') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.diciplinaryAction.fields.diciplinary_action_helper') }}</span>
            </div>

            <div id="action-fields">
            <div class="action-field">
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
                    <input class="form-control date {{ $errors->has('govt_order_date.0') ? 'is-invalid' : '' }}" type="text" name="govt_order_date[]" id="govt_order_date_0" value="{{ old('govt_order_date.0') }}" required>
                    @if($errors->has('govt_order_date.0'))
                        <div class="invalid-feedback">
                            {{ $errors->first('govt_order_date.0') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.diciplinaryAction.fields.govt_order_date_helper') }}</span>
                </div>
                <button type="button" class="btn btn-danger remove-field">Remove</button>
            </div>
        </div>
        <button type="button" id="add-field" class="btn btn-primary">Add More</button>


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