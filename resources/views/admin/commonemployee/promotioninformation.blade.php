<form method="POST" action="{{ route('admin.employee-promotions.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="employee_id">{{ trans('cruds.employeePromotion.fields.employee') }}</label>
        <select class="form-control select2 {{ $errors->has('employee') ? 'is-invalid' : '' }}" name="employee_id"
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
        <span class="help-block">{{ trans('cruds.employeePromotion.fields.employee_helper') }}</span>
    </div>
    <div class="form-group">
        <label class="required"
            for="new_designation_id">{{ trans('cruds.employeePromotion.fields.new_designation') }}</label>
        <select class="form-control select2 {{ $errors->has('new_designation') ? 'is-invalid' : '' }}"
            name="new_designation_id" id="new_designation_id" required>
            @foreach ($new_designations as $id => $entry)
                <option value="{{ $id }}" {{ old('new_designation_id') == $id ? 'selected' : '' }}>
                    {{ $entry }}</option>
            @endforeach
        </select>
        @if ($errors->has('new_designation'))
            <div class="invalid-feedback">
                {{ $errors->first('new_designation') }}
            </div>
        @endif
        <span class="help-block">{{ trans('cruds.employeePromotion.fields.new_designation_helper') }}</span>
    </div>
    <div class="form-group">
        <label for="go_issue_date">{{ trans('cruds.employeePromotion.fields.go_issue_date') }}</label>
        <input class="form-control date {{ $errors->has('go_issue_date') ? 'is-invalid' : '' }}" type="text"
            name="go_issue_date" id="go_issue_date" value="{{ old('go_issue_date') }}">
        @if ($errors->has('go_issue_date'))
            <div class="invalid-feedback">
                {{ $errors->first('go_issue_date') }}
            </div>
        @endif
        <span class="help-block">{{ trans('cruds.employeePromotion.fields.go_issue_date_helper') }}</span>
    </div>
    <div class="form-group">
        <label class="required"
            for="office_order_date">{{ trans('cruds.employeePromotion.fields.office_order_date') }}</label>
        <input class="form-control date {{ $errors->has('office_order_date') ? 'is-invalid' : '' }}" type="text"
            name="office_order_date" id="office_order_date" value="{{ old('office_order_date') }}" required>
        @if ($errors->has('office_order_date'))
            <div class="invalid-feedback">
                {{ $errors->first('office_order_date') }}
            </div>
        @endif
        <span class="help-block">{{ trans('cruds.employeePromotion.fields.office_order_date_helper') }}</span>
    </div>
    <div class="form-group">
        <label class="required" for="office_order">{{ trans('cruds.employeePromotion.fields.office_order') }}</label>
        <div class="needsclick dropzone {{ $errors->has('office_order') ? 'is-invalid' : '' }}"
            id="office_order-dropzone">
        </div>
        @if ($errors->has('office_order'))
            <div class="invalid-feedback">
                {{ $errors->first('office_order') }}
            </div>
        @endif
        <span class="help-block">{{ trans('cruds.employeePromotion.fields.office_order_helper') }}</span>
    </div>
    <div class="form-group">
        <button class="btn btn-danger" type="submit">
            {{ trans('global.save') }}
        </button>
    </div>
</form>
