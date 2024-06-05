@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.criminalProsecutionDerail.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.criminal-prosecution-derails.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="criminal_prosecution_id">{{ trans('cruds.criminalProsecutionDerail.fields.criminal_prosecution') }}</label>
                <select class="form-control select2 {{ $errors->has('criminal_prosecution') ? 'is-invalid' : '' }}" name="criminal_prosecution_id" id="criminal_prosecution_id" required>
                    @foreach($criminal_prosecutions as $id => $entry)
                        <option value="{{ $id }}" {{ old('criminal_prosecution_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('criminal_prosecution'))
                    <div class="invalid-feedback">
                        {{ $errors->first('criminal_prosecution') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.criminalProsecutionDerail.fields.criminal_prosecution_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="govt_order_no">{{ trans('cruds.criminalProsecutionDerail.fields.govt_order_no') }}</label>
                <input class="form-control {{ $errors->has('govt_order_no') ? 'is-invalid' : '' }}" type="text" name="govt_order_no" id="govt_order_no" value="{{ old('govt_order_no', '') }}">
                @if($errors->has('govt_order_no'))
                    <div class="invalid-feedback">
                        {{ $errors->first('govt_order_no') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.criminalProsecutionDerail.fields.govt_order_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="govt_order_date">{{ trans('cruds.criminalProsecutionDerail.fields.govt_order_date') }}</label>
                <input class="form-control date {{ $errors->has('govt_order_date') ? 'is-invalid' : '' }}" type="text" name="govt_order_date" id="govt_order_date" value="{{ old('govt_order_date') }}">
                @if($errors->has('govt_order_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('govt_order_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.criminalProsecutionDerail.fields.govt_order_date_helper') }}</span>
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