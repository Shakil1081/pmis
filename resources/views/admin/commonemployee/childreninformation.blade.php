<form method="POST" action="{{ route('admin.children.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="employee_id">{{ trans('cruds.child.fields.employee') }}</label>
        <select class="form-select select2 {{ $errors->has('employee') ? 'is-invalid' : '' }}" name="employee_id"
            id="employee_id">
            @foreach ($employees as $id => $entry)
                <option value="{{ $id }}" {{ old('employee_id') == $id ? 'selected' : '' }}>{{ $entry }}
                </option>
            @endforeach
        </select>
        @if ($errors->has('employee'))
            <div class="invalid-feedback">
                {{ $errors->first('employee') }}
            </div>
        @endif
        <span class="help-block">{{ trans('cruds.child.fields.employee_helper') }}</span>
    </div>
    <div class="form-group">
        <label class="required" for="name_bn">{{ trans('cruds.child.fields.name_bn') }}</label>
        <input class="form-control {{ $errors->has('name_bn') ? 'is-invalid' : '' }}" type="text" name="name_bn"
            id="name_bn" value="{{ old('name_bn', '') }}" required>
        @if ($errors->has('name_bn'))
            <div class="invalid-feedback">
                {{ $errors->first('name_bn') }}
            </div>
        @endif
        <span class="help-block">{{ trans('cruds.child.fields.name_bn_helper') }}</span>
    </div>
    <div class="form-group">
        <label class="required" for="name_en">{{ trans('cruds.child.fields.name_en') }}</label>
        <input class="form-control {{ $errors->has('name_en') ? 'is-invalid' : '' }}" type="text" name="name_en"
            id="name_en" value="{{ old('name_en', '') }}" required>
        @if ($errors->has('name_en'))
            <div class="invalid-feedback">
                {{ $errors->first('name_en') }}
            </div>
        @endif
        <span class="help-block">{{ trans('cruds.child.fields.name_en_helper') }}</span>
    </div>
    <div class="form-group">
        <label for="date_of_birth">{{ trans('cruds.child.fields.date_of_birth') }}</label>
        <input class="form-control date {{ $errors->has('date_of_birth') ? 'is-invalid' : '' }}" type="text"
            name="date_of_birth" id="date_of_birth" value="{{ old('date_of_birth') }}">
        @if ($errors->has('date_of_birth'))
            <div class="invalid-feedback">
                {{ $errors->first('date_of_birth') }}
            </div>
        @endif
        <span class="help-block">{{ trans('cruds.child.fields.date_of_birth_helper') }}</span>
    </div>
    <div class="form-group">
        <label for="birth_certificate">{{ trans('cruds.child.fields.birth_certificate') }}</label>
        <div class="needsclick dropzone {{ $errors->has('birth_certificate') ? 'is-invalid' : '' }}"
            id="birth_certificate-dropzone">
        </div>
        @if ($errors->has('birth_certificate'))
            <div class="invalid-feedback">
                {{ $errors->first('birth_certificate') }}
            </div>
        @endif
        <span class="help-block">{{ trans('cruds.child.fields.birth_certificate_helper') }}</span>
    </div>
    <div class="form-group">
        <label class="required" for="complite_21">{{ trans('cruds.child.fields.complite_21') }}</label>
        <input class="form-control {{ $errors->has('complite_21') ? 'is-invalid' : '' }}" type="text"
            name="complite_21" id="complite_21" value="{{ old('complite_21', '') }}" required>
        @if ($errors->has('complite_21'))
            <div class="invalid-feedback">
                {{ $errors->first('complite_21') }}
            </div>
        @endif
        <span class="help-block">{{ trans('cruds.child.fields.complite_21_helper') }}</span>
    </div>
    <div class="form-group">
        <label class="required" for="gender_id">{{ trans('cruds.child.fields.gender') }}</label>
        <select class="form-select select2 {{ $errors->has('gender') ? 'is-invalid' : '' }}" name="gender_id"
            id="gender_id" required>
            @foreach ($genders as $id => $entry)
                <option value="{{ $id }}" {{ old('gender_id') == $id ? 'selected' : '' }}>
                    {{ $entry }}</option>
            @endforeach
        </select>
        @if ($errors->has('gender'))
            <div class="invalid-feedback">
                {{ $errors->first('gender') }}
            </div>
        @endif
        <span class="help-block">{{ trans('cruds.child.fields.gender_helper') }}</span>
    </div>
    <div class="form-group">
        <label for="nid_number">{{ trans('cruds.child.fields.nid_number') }}</label>
        <input class="form-control {{ $errors->has('nid_number') ? 'is-invalid' : '' }}" type="text"
            name="nid_number" id="nid_number" value="{{ old('nid_number', '') }}">
        @if ($errors->has('nid_number'))
            <div class="invalid-feedback">
                {{ $errors->first('nid_number') }}
            </div>
        @endif
        <span class="help-block">{{ trans('cruds.child.fields.nid_number_helper') }}</span>
    </div>
    <div class="form-group">
        <label for="passport_number">{{ trans('cruds.child.fields.passport_number') }}</label>
        <input class="form-control {{ $errors->has('passport_number') ? 'is-invalid' : '' }}" type="text"
            name="passport_number" id="passport_number" value="{{ old('passport_number', '') }}">
        @if ($errors->has('passport_number'))
            <div class="invalid-feedback">
                {{ $errors->first('passport_number') }}
            </div>
        @endif
        <span class="help-block">{{ trans('cruds.child.fields.passport_number_helper') }}</span>
    </div>
    <div class="form-group">
        <button class="btn btn-danger" type="submit">
            {{ trans('global.save') }}
        </button>
    </div>
</form>
