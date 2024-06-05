@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.diciplinaryAction.title_singular') }}
    </div>

    <div class="card-body">
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
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection