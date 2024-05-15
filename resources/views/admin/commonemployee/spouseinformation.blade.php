<form method="POST" action="{{ route('admin.spouse-informationes.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label class="required" for="employee_id">{{ trans('cruds.spouseInformatione.fields.employee') }}</label>
        <select class="form-control select2 {{ $errors->has('employee') ? 'is-invalid' : '' }}" name="employee_id"
            id="employee_id" required>
            @foreach ($employees as $id => $entry)
                <option value="{{ $id }}" {{ old('employee_id') == $id ? 'selected' : '' }}>
                    {{ $entry }}</option>
            @endforeach
        </select>
        @if ($errors->has('employee'))
            <div class="invalid-feedback">
                {{ $errors->first('employee') }}
            </div>
        @endif
        <span class="help-block">{{ trans('cruds.spouseInformatione.fields.employee_helper') }}</span>
    </div>
    <div class="form-group">
        <label class="required" for="name_bn">{{ trans('cruds.spouseInformatione.fields.name_bn') }}</label>
        <input class="form-control {{ $errors->has('name_bn') ? 'is-invalid' : '' }}" type="text" name="name_bn"
            id="name_bn" value="{{ old('name_bn', '') }}" required>
        @if ($errors->has('name_bn'))
            <div class="invalid-feedback">
                {{ $errors->first('name_bn') }}
            </div>
        @endif
        <span class="help-block">{{ trans('cruds.spouseInformatione.fields.name_bn_helper') }}</span>
    </div>
    <div class="form-group">
        <label for="name_en">{{ trans('cruds.spouseInformatione.fields.name_en') }}</label>
        <input class="form-control {{ $errors->has('name_en') ? 'is-invalid' : '' }}" type="text" name="name_en"
            id="name_en" value="{{ old('name_en', '') }}">
        @if ($errors->has('name_en'))
            <div class="invalid-feedback">
                {{ $errors->first('name_en') }}
            </div>
        @endif
        <span class="help-block">{{ trans('cruds.spouseInformatione.fields.name_en_helper') }}</span>
    </div>
    <div class="form-group">
        <label for="nid_upload">{{ trans('cruds.spouseInformatione.fields.nid_upload') }}</label>
        <div class="needsclick dropzone {{ $errors->has('nid_upload') ? 'is-invalid' : '' }}" id="nid_upload-dropzone">
        </div>
        @if ($errors->has('nid_upload'))
            <div class="invalid-feedback">
                {{ $errors->first('nid_upload') }}
            </div>
        @endif
        <span class="help-block">{{ trans('cruds.spouseInformatione.fields.nid_upload_helper') }}</span>
    </div>
    <div class="form-group">
        <label for="occupation">{{ trans('cruds.spouseInformatione.fields.occupation') }}</label>
        <input class="form-control {{ $errors->has('occupation') ? 'is-invalid' : '' }}" type="text"
            name="occupation" id="occupation" value="{{ old('occupation', '') }}">
        @if ($errors->has('occupation'))
            <div class="invalid-feedback">
                {{ $errors->first('occupation') }}
            </div>
        @endif
        <span class="help-block">{{ trans('cruds.spouseInformatione.fields.occupation_helper') }}</span>
    </div>
    <div class="form-group">
        <label for="office_address">{{ trans('cruds.spouseInformatione.fields.office_address') }}</label>
        <input class="form-control {{ $errors->has('office_address') ? 'is-invalid' : '' }}" type="text"
            name="office_address" id="office_address" value="{{ old('office_address', '') }}">
        @if ($errors->has('office_address'))
            <div class="invalid-feedback">
                {{ $errors->first('office_address') }}
            </div>
        @endif
        <span class="help-block">{{ trans('cruds.spouseInformatione.fields.office_address_helper') }}</span>
    </div>
    <div class="form-group">
        <label for="phone_number">{{ trans('cruds.spouseInformatione.fields.phone_number') }}</label>
        <input class="form-control {{ $errors->has('phone_number') ? 'is-invalid' : '' }}" type="text"
            name="phone_number" id="phone_number" value="{{ old('phone_number', '') }}">
        @if ($errors->has('phone_number'))
            <div class="invalid-feedback">
                {{ $errors->first('phone_number') }}
            </div>
        @endif
        <span class="help-block">{{ trans('cruds.spouseInformatione.fields.phone_number_helper') }}</span>
    </div>
    <div class="form-group">
        <label for="present_addess">{{ trans('cruds.spouseInformatione.fields.present_addess') }}</label>
        <textarea class="form-control {{ $errors->has('present_addess') ? 'is-invalid' : '' }}" name="present_addess"
            id="present_addess">{!! old('present_addess') !!}</textarea>
        @if ($errors->has('present_addess'))
            <div class="invalid-feedback">
                {{ $errors->first('present_addess') }}
            </div>
        @endif
        <span class="help-block">{{ trans('cruds.spouseInformatione.fields.present_addess_helper') }}</span>
    </div>
    <div class="form-group">
        <label for="permanent_addess">{{ trans('cruds.spouseInformatione.fields.permanent_addess') }}</label>
        <textarea class="form-control {{ $errors->has('permanent_addess') ? 'is-invalid' : '' }}" name="permanent_addess"
            id="permanent_addess">{!! old('permanent_addess') !!}</textarea>
        @if ($errors->has('permanent_addess'))
            <div class="invalid-feedback">
                {{ $errors->first('permanent_addess') }}
            </div>
        @endif
        <span class="help-block">{{ trans('cruds.spouseInformatione.fields.permanent_addess_helper') }}</span>
    </div>
    <div class="form-group">
        <button class="btn btn-danger" type="submit">
            {{ trans('global.save') }}
        </button>
    </div>
</form>
