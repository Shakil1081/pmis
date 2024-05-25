@extends('layouts.admin')
@section('content')
    <div class="card p-2">
        <div class="container">
            <div class="row">
                @include('admin.commonemployee.commonmenu')
                <div class="col-md-8">
                    <div class="tab-content my-1 border p-2" id="v-pills-tabContent">
                        <h4> {{ trans('global.create') }} {{ trans('cruds.socialAssPrAttachment.title_singular') }}</h4>

                        <form method="POST"
                            action="{{ route('admin.social-ass-pr-attachments.store', ['employee_id' => request()->query('id')]) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row row-cols-2">
                                <div class="form-group">
                                    <label class="required"
                                        for="degree_membership_organization">{{ trans('cruds.socialAssPrAttachment.fields.degree_membership_organization') }}</label>
                                    <input
                                        class="form-control {{ $errors->has('degree_membership_organization') ? 'is-invalid' : '' }}"
                                        type="text" name="degree_membership_organization"
                                        id="degree_membership_organization"
                                        value="{{ old('degree_membership_organization', '') }}" required>
                                    @if ($errors->has('degree_membership_organization'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('degree_membership_organization') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.socialAssPrAttachment.fields.degree_membership_organization_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label
                                        for="description">{{ trans('cruds.socialAssPrAttachment.fields.description') }}</label>
                                    <input class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}"
                                        type="text" name="description" id="description"
                                        value="{{ old('description', '') }}">
                                    @if ($errors->has('description'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('description') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.socialAssPrAttachment.fields.description_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label
                                        for="certificate_achievement">{{ trans('cruds.socialAssPrAttachment.fields.certificate_achievement') }}</label>
                                    <input
                                        class="form-control {{ $errors->has('certificate_achievement') ? 'is-invalid' : '' }}"
                                        type="text" name="certificate_achievement" id="certificate_achievement"
                                        value="{{ old('certificate_achievement', '') }}">
                                    @if ($errors->has('certificate_achievement'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('certificate_achievement') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.socialAssPrAttachment.fields.certificate_achievement_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label class="required"
                                        for="employee_id">{{ trans('cruds.socialAssPrAttachment.fields.employee') }}</label>
                                    <select class="form-select select2 {{ $errors->has('employee') ? 'is-invalid' : '' }}"
                                        name="employee_id" id="employee_id" required>
                                        @foreach ($employees as $id => $entry)
                                            <option value="{{ $id }}"
                                                {{ old('employee_id') == $id ? 'selected' : '' }}>{{ $entry }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('employee'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('employee') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.socialAssPrAttachment.fields.employee_helper') }}</span>
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
