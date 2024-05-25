@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            {{ trans('global.edit') }} {{ trans('cruds.employeeListDetail.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('admin.employee-list-details.update', [$employeeListDetail->id]) }}"
                enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label class="required"
                        for="general_information_id">{{ trans('cruds.employeeListDetail.fields.general_information') }}</label>
                    <select class="form-select select2 {{ $errors->has('general_information') ? 'is-invalid' : '' }}"
                        name="general_information_id" id="general_information_id" required>
                        @foreach ($general_informations as $id => $entry)
                            <option value="{{ $id }}"
                                {{ (old('general_information_id') ? old('general_information_id') : $employeeListDetail->general_information->id ?? '') == $id ? 'selected' : '' }}>
                                {{ $entry }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('general_information'))
                        <div class="invalid-feedback">
                            {{ $errors->first('general_information') }}
                        </div>
                    @endif
                    <span
                        class="help-block">{{ trans('cruds.employeeListDetail.fields.general_information_helper') }}</span>
                </div>
                <div class="form-group">
                    <label
                        for="education_informatione">{{ trans('cruds.employeeListDetail.fields.education_informatione') }}</label>
                    <input class="form-control {{ $errors->has('education_informatione') ? 'is-invalid' : '' }}"
                        type="number" name="education_informatione" id="education_informatione"
                        value="{{ old('education_informatione', $employeeListDetail->education_informatione) }}"
                        step="1">
                    @if ($errors->has('education_informatione'))
                        <div class="invalid-feedback">
                            {{ $errors->first('education_informatione') }}
                        </div>
                    @endif
                    <span
                        class="help-block">{{ trans('cruds.employeeListDetail.fields.education_informatione_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="professionale">{{ trans('cruds.employeeListDetail.fields.professionale') }}</label>
                    <input class="form-control {{ $errors->has('professionale') ? 'is-invalid' : '' }}" type="number"
                        name="professionale" id="professionale"
                        value="{{ old('professionale', $employeeListDetail->professionale) }}" step="1">
                    @if ($errors->has('professionale'))
                        <div class="invalid-feedback">
                            {{ $errors->first('professionale') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.employeeListDetail.fields.professionale_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="addressdetailes">{{ trans('cruds.employeeListDetail.fields.addressdetailes') }}</label>
                    <input class="form-control {{ $errors->has('addressdetailes') ? 'is-invalid' : '' }}" type="number"
                        name="addressdetailes" id="addressdetailes"
                        value="{{ old('addressdetailes', $employeeListDetail->addressdetailes) }}" step="1">
                    @if ($errors->has('addressdetailes'))
                        <div class="invalid-feedback">
                            {{ $errors->first('addressdetailes') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.employeeListDetail.fields.addressdetailes_helper') }}</span>
                </div>
                <div class="form-group">
                    <label
                        for="emergence_contactes">{{ trans('cruds.employeeListDetail.fields.emergence_contactes') }}</label>
                    <input class="form-control {{ $errors->has('emergence_contactes') ? 'is-invalid' : '' }}"
                        type="number" name="emergence_contactes" id="emergence_contactes"
                        value="{{ old('emergence_contactes', $employeeListDetail->emergence_contactes) }}" step="1">
                    @if ($errors->has('emergence_contactes'))
                        <div class="invalid-feedback">
                            {{ $errors->first('emergence_contactes') }}
                        </div>
                    @endif
                    <span
                        class="help-block">{{ trans('cruds.employeeListDetail.fields.emergence_contactes_helper') }}</span>
                </div>
                <div class="form-group">
                    <label
                        for="spouse_informatione">{{ trans('cruds.employeeListDetail.fields.spouse_informatione') }}</label>
                    <input class="form-control {{ $errors->has('spouse_informatione') ? 'is-invalid' : '' }}"
                        type="number" name="spouse_informatione" id="spouse_informatione"
                        value="{{ old('spouse_informatione', $employeeListDetail->spouse_informatione) }}" step="1">
                    @if ($errors->has('spouse_informatione'))
                        <div class="invalid-feedback">
                            {{ $errors->first('spouse_informatione') }}
                        </div>
                    @endif
                    <span
                        class="help-block">{{ trans('cruds.employeeListDetail.fields.spouse_informatione_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="children">{{ trans('cruds.employeeListDetail.fields.children') }}</label>
                    <input class="form-control {{ $errors->has('children') ? 'is-invalid' : '' }}" type="number"
                        name="children" id="children" value="{{ old('children', $employeeListDetail->children) }}"
                        step="1">
                    @if ($errors->has('children'))
                        <div class="invalid-feedback">
                            {{ $errors->first('children') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.employeeListDetail.fields.children_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="job_historie">{{ trans('cruds.employeeListDetail.fields.job_historie') }}</label>
                    <input class="form-control {{ $errors->has('job_historie') ? 'is-invalid' : '' }}" type="number"
                        name="job_historie" id="job_historie"
                        value="{{ old('job_historie', $employeeListDetail->job_historie) }}" step="1">
                    @if ($errors->has('job_historie'))
                        <div class="invalid-feedback">
                            {{ $errors->first('job_historie') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.employeeListDetail.fields.job_historie_helper') }}</span>
                </div>
                <div class="form-group">
                    <label
                        for="employee_promotion">{{ trans('cruds.employeeListDetail.fields.employee_promotion') }}</label>
                    <input class="form-control {{ $errors->has('employee_promotion') ? 'is-invalid' : '' }}" type="number"
                        name="employee_promotion" id="employee_promotion"
                        value="{{ old('employee_promotion', $employeeListDetail->employee_promotion) }}" step="1">
                    @if ($errors->has('employee_promotion'))
                        <div class="invalid-feedback">
                            {{ $errors->first('employee_promotion') }}
                        </div>
                    @endif
                    <span
                        class="help-block">{{ trans('cruds.employeeListDetail.fields.employee_promotion_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="leave_records">{{ trans('cruds.employeeListDetail.fields.leave_records') }}</label>
                    <input class="form-control {{ $errors->has('leave_records') ? 'is-invalid' : '' }}" type="number"
                        name="leave_records" id="leave_records"
                        value="{{ old('leave_records', $employeeListDetail->leave_records) }}" step="1">
                    @if ($errors->has('leave_records'))
                        <div class="invalid-feedback">
                            {{ $errors->first('leave_records') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.employeeListDetail.fields.leave_records_helper') }}</span>
                </div>
                <div class="form-group">
                    <label
                        for="service_particular">{{ trans('cruds.employeeListDetail.fields.service_particular') }}</label>
                    <input class="form-control {{ $errors->has('service_particular') ? 'is-invalid' : '' }}"
                        type="number" name="service_particular" id="service_particular"
                        value="{{ old('service_particular', $employeeListDetail->service_particular) }}" step="1">
                    @if ($errors->has('service_particular'))
                        <div class="invalid-feedback">
                            {{ $errors->first('service_particular') }}
                        </div>
                    @endif
                    <span
                        class="help-block">{{ trans('cruds.employeeListDetail.fields.service_particular_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="trainings">{{ trans('cruds.employeeListDetail.fields.trainings') }}</label>
                    <input class="form-control {{ $errors->has('trainings') ? 'is-invalid' : '' }}" type="number"
                        name="trainings" id="trainings" value="{{ old('trainings', $employeeListDetail->trainings) }}"
                        step="1">
                    @if ($errors->has('trainings'))
                        <div class="invalid-feedback">
                            {{ $errors->first('trainings') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.employeeListDetail.fields.trainings_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="travel_records">{{ trans('cruds.employeeListDetail.fields.travel_records') }}</label>
                    <input class="form-control {{ $errors->has('travel_records') ? 'is-invalid' : '' }}" type="number"
                        name="travel_records" id="travel_records"
                        value="{{ old('travel_records', $employeeListDetail->travel_records) }}" step="1">
                    @if ($errors->has('travel_records'))
                        <div class="invalid-feedback">
                            {{ $errors->first('travel_records') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.employeeListDetail.fields.travel_records_helper') }}</span>
                </div>
                <div class="form-group">
                    <label
                        for="foreign_travel_personals">{{ trans('cruds.employeeListDetail.fields.foreign_travel_personals') }}</label>
                    <input class="form-control {{ $errors->has('foreign_travel_personals') ? 'is-invalid' : '' }}"
                        type="number" name="foreign_travel_personals" id="foreign_travel_personals"
                        value="{{ old('foreign_travel_personals', $employeeListDetail->foreign_travel_personals) }}"
                        step="1">
                    @if ($errors->has('foreign_travel_personals'))
                        <div class="invalid-feedback">
                            {{ $errors->first('foreign_travel_personals') }}
                        </div>
                    @endif
                    <span
                        class="help-block">{{ trans('cruds.employeeListDetail.fields.foreign_travel_personals_helper') }}</span>
                </div>
                <div class="form-group">
                    <label
                        for="social_ass_pr_attachments">{{ trans('cruds.employeeListDetail.fields.social_ass_pr_attachments') }}</label>
                    <input class="form-control {{ $errors->has('social_ass_pr_attachments') ? 'is-invalid' : '' }}"
                        type="number" name="social_ass_pr_attachments" id="social_ass_pr_attachments"
                        value="{{ old('social_ass_pr_attachments', $employeeListDetail->social_ass_pr_attachments) }}"
                        step="1">
                    @if ($errors->has('social_ass_pr_attachments'))
                        <div class="invalid-feedback">
                            {{ $errors->first('social_ass_pr_attachments') }}
                        </div>
                    @endif
                    <span
                        class="help-block">{{ trans('cruds.employeeListDetail.fields.social_ass_pr_attachments_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="publications">{{ trans('cruds.employeeListDetail.fields.publications') }}</label>
                    <input class="form-control {{ $errors->has('publications') ? 'is-invalid' : '' }}" type="number"
                        name="publications" id="publications"
                        value="{{ old('publications', $employeeListDetail->publications) }}" step="1">
                    @if ($errors->has('publications'))
                        <div class="invalid-feedback">
                            {{ $errors->first('publications') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.employeeListDetail.fields.publications_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="awards">{{ trans('cruds.employeeListDetail.fields.awards') }}</label>
                    <input class="form-control {{ $errors->has('awards') ? 'is-invalid' : '' }}" type="number"
                        name="awards" id="awards" value="{{ old('awards', $employeeListDetail->awards) }}"
                        step="1">
                    @if ($errors->has('awards'))
                        <div class="invalid-feedback">
                            {{ $errors->first('awards') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.employeeListDetail.fields.awards_helper') }}</span>
                </div>
                <div class="form-group">
                    <label
                        for="other_service_jobs">{{ trans('cruds.employeeListDetail.fields.other_service_jobs') }}</label>
                    <input class="form-control {{ $errors->has('other_service_jobs') ? 'is-invalid' : '' }}"
                        type="number" name="other_service_jobs" id="other_service_jobs"
                        value="{{ old('other_service_jobs', $employeeListDetail->other_service_jobs) }}" step="1">
                    @if ($errors->has('other_service_jobs'))
                        <div class="invalid-feedback">
                            {{ $errors->first('other_service_jobs') }}
                        </div>
                    @endif
                    <span
                        class="help-block">{{ trans('cruds.employeeListDetail.fields.other_service_jobs_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="languages">{{ trans('cruds.employeeListDetail.fields.languages') }}</label>
                    <input class="form-control {{ $errors->has('languages') ? 'is-invalid' : '' }}" type="number"
                        name="languages" id="languages" value="{{ old('languages', $employeeListDetail->languages) }}"
                        step="1">
                    @if ($errors->has('languages'))
                        <div class="invalid-feedback">
                            {{ $errors->first('languages') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.employeeListDetail.fields.languages_helper') }}</span>
                </div>
                <div class="form-group">
                    <label
                        for="criminal_prosecutiones">{{ trans('cruds.employeeListDetail.fields.criminal_prosecutiones') }}</label>
                    <input class="form-control {{ $errors->has('criminal_prosecutiones') ? 'is-invalid' : '' }}"
                        type="number" name="criminal_prosecutiones" id="criminal_prosecutiones"
                        value="{{ old('criminal_prosecutiones', $employeeListDetail->criminal_prosecutiones) }}"
                        step="1">
                    @if ($errors->has('criminal_prosecutiones'))
                        <div class="invalid-feedback">
                            {{ $errors->first('criminal_prosecutiones') }}
                        </div>
                    @endif
                    <span
                        class="help-block">{{ trans('cruds.employeeListDetail.fields.criminal_prosecutiones_helper') }}</span>
                </div>
                <div class="form-group">
                    <label
                        for="criminalpro_disciplinaries">{{ trans('cruds.employeeListDetail.fields.criminalpro_disciplinaries') }}</label>
                    <input class="form-control {{ $errors->has('criminalpro_disciplinaries') ? 'is-invalid' : '' }}"
                        type="number" name="criminalpro_disciplinaries" id="criminalpro_disciplinaries"
                        value="{{ old('criminalpro_disciplinaries', $employeeListDetail->criminalpro_disciplinaries) }}"
                        step="1">
                    @if ($errors->has('criminalpro_disciplinaries'))
                        <div class="invalid-feedback">
                            {{ $errors->first('criminalpro_disciplinaries') }}
                        </div>
                    @endif
                    <span
                        class="help-block">{{ trans('cruds.employeeListDetail.fields.criminalpro_disciplinaries_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="acr_monitorings">{{ trans('cruds.employeeListDetail.fields.acr_monitorings') }}</label>
                    <input class="form-control {{ $errors->has('acr_monitorings') ? 'is-invalid' : '' }}" type="number"
                        name="acr_monitorings" id="acr_monitorings"
                        value="{{ old('acr_monitorings', $employeeListDetail->acr_monitorings) }}" step="1">
                    @if ($errors->has('acr_monitorings'))
                        <div class="invalid-feedback">
                            {{ $errors->first('acr_monitorings') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.employeeListDetail.fields.acr_monitorings_helper') }}</span>
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
