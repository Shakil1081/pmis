<form method="POST" action="{{ route('admin.education-informationes.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label class="required"
            for="name_of_exam_id">{{ trans('cruds.educationInformatione.fields.name_of_exam') }}</label>
        <select class="form-control select2 {{ $errors->has('name_of_exam') ? 'is-invalid' : '' }}" name="name_of_exam_id"
            id="name_of_exam_id" required>
            @foreach ($name_of_exams as $id => $entry)
                <option value="{{ $id }}" {{ old('name_of_exam_id') == $id ? 'selected' : '' }}>
                    {{ $entry }}</option>
            @endforeach
        </select>
        @if ($errors->has('name_of_exam'))
            <div class="invalid-feedback">
                {{ $errors->first('name_of_exam') }}
            </div>
        @endif
        <span class="help-block">{{ trans('cruds.educationInformatione.fields.name_of_exam_helper') }}</span>
    </div>
    <div class="form-group">
        <label for="exam_board_id">{{ trans('cruds.educationInformatione.fields.exam_board') }}</label>
        <select class="form-control select2 {{ $errors->has('exam_board') ? 'is-invalid' : '' }}" name="exam_board_id"
            id="exam_board_id">
            @foreach ($exam_boards as $id => $entry)
                <option value="{{ $id }}" {{ old('exam_board_id') == $id ? 'selected' : '' }}>
                    {{ $entry }}</option>
            @endforeach
        </select>
        @if ($errors->has('exam_board'))
            <div class="invalid-feedback">
                {{ $errors->first('exam_board') }}
            </div>
        @endif
        <span class="help-block">{{ trans('cruds.educationInformatione.fields.exam_board_helper') }}</span>
    </div>
    <div class="form-group">
        <label class="required"
            for="school_university_name">{{ trans('cruds.educationInformatione.fields.school_university_name') }}</label>
        <input class="form-control {{ $errors->has('school_university_name') ? 'is-invalid' : '' }}" type="text"
            name="school_university_name" id="school_university_name" value="{{ old('school_university_name', '') }}"
            required>
        @if ($errors->has('school_university_name'))
            <div class="invalid-feedback">
                {{ $errors->first('school_university_name') }}
            </div>
        @endif
        <span class="help-block">{{ trans('cruds.educationInformatione.fields.school_university_name_helper') }}</span>
    </div>
    <div class="form-group">
        <label for="achivement">{{ trans('cruds.educationInformatione.fields.achivement') }}</label>
        <input class="form-control {{ $errors->has('achivement') ? 'is-invalid' : '' }}" type="text"
            name="achivement" id="achivement" value="{{ old('achivement', '') }}">
        @if ($errors->has('achivement'))
            <div class="invalid-feedback">
                {{ $errors->first('achivement') }}
            </div>
        @endif
        <span class="help-block">{{ trans('cruds.educationInformatione.fields.achivement_helper') }}</span>
    </div>
    <div class="form-group">
        <label for="passing_year">{{ trans('cruds.educationInformatione.fields.passing_year') }}</label>
        <input class="form-control {{ $errors->has('passing_year') ? 'is-invalid' : '' }}" type="number"
            name="passing_year" id="passing_year" value="{{ old('passing_year', '') }}" step="1">
        @if ($errors->has('passing_year'))
            <div class="invalid-feedback">
                {{ $errors->first('passing_year') }}
            </div>
        @endif
        <span class="help-block">{{ trans('cruds.educationInformatione.fields.passing_year_helper') }}</span>
    </div>
    <div class="form-group">
        <label class="required" for="catificarte">{{ trans('cruds.educationInformatione.fields.catificarte') }}</label>
        <div class="needsclick dropzone {{ $errors->has('catificarte') ? 'is-invalid' : '' }}"
            id="catificarte-dropzone">
        </div>
        @if ($errors->has('catificarte'))
            <div class="invalid-feedback">
                {{ $errors->first('catificarte') }}
            </div>
        @endif
        <span class="help-block">{{ trans('cruds.educationInformatione.fields.catificarte_helper') }}</span>
    </div>
    <div class="form-group">
        <label class="required" for="employee_id">{{ trans('cruds.educationInformatione.fields.employee') }}</label>
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
        <span class="help-block">{{ trans('cruds.educationInformatione.fields.employee_helper') }}</span>
    </div>
    <div class="form-group">
        <button class="btn btn-danger" type="submit">
            {{ trans('global.save') }}
        </button>
    </div>
</form>
