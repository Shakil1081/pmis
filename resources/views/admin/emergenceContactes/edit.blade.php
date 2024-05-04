@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.emergenceContacte.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.emergence-contactes.update", [$emergenceContacte->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="contact_person_name">{{ trans('cruds.emergenceContacte.fields.contact_person_name') }}</label>
                <input class="form-control {{ $errors->has('contact_person_name') ? 'is-invalid' : '' }}" type="text" name="contact_person_name" id="contact_person_name" value="{{ old('contact_person_name', $emergenceContacte->contact_person_name) }}" required>
                @if($errors->has('contact_person_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contact_person_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.emergenceContacte.fields.contact_person_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="contact_person_relation">{{ trans('cruds.emergenceContacte.fields.contact_person_relation') }}</label>
                <input class="form-control {{ $errors->has('contact_person_relation') ? 'is-invalid' : '' }}" type="text" name="contact_person_relation" id="contact_person_relation" value="{{ old('contact_person_relation', $emergenceContacte->contact_person_relation) }}" required>
                @if($errors->has('contact_person_relation'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contact_person_relation') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.emergenceContacte.fields.contact_person_relation_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="address">{{ trans('cruds.emergenceContacte.fields.address') }}</label>
                <textarea class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" name="address" id="address">{{ old('address', $emergenceContacte->address) }}</textarea>
                @if($errors->has('address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.emergenceContacte.fields.address_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="contact_person_number">{{ trans('cruds.emergenceContacte.fields.contact_person_number') }}</label>
                <input class="form-control {{ $errors->has('contact_person_number') ? 'is-invalid' : '' }}" type="text" name="contact_person_number" id="contact_person_number" value="{{ old('contact_person_number', $emergenceContacte->contact_person_number) }}" required>
                @if($errors->has('contact_person_number'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contact_person_number') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.emergenceContacte.fields.contact_person_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="employee_id">{{ trans('cruds.emergenceContacte.fields.employee') }}</label>
                <select class="form-control select2 {{ $errors->has('employee') ? 'is-invalid' : '' }}" name="employee_id" id="employee_id">
                    @foreach($employees as $id => $entry)
                        <option value="{{ $id }}" {{ (old('employee_id') ? old('employee_id') : $emergenceContacte->employee->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('employee'))
                    <div class="invalid-feedback">
                        {{ $errors->first('employee') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.emergenceContacte.fields.employee_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection