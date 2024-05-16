@extends('layouts.admin')
@section('content')
    <div class="card p-2">
        <div class="container">
            <div class="row">
                @include('admin.commonemployee.commonmenu')
                <div class="col-md-8">
                    <div class="tab-content my-1 border p-2" id="v-pills-tabContent">
                        <h4> {{ trans('global.create') }} {{ trans('cruds.jobHistory.title_singular') }}</h4>
                        <form method="POST"
                            action="{{ route('admin.job-histories.store', ['employee_id' => request()->query('id')]) }}"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="row row-cols-2">
                                <div class="form-group">
                                    <label class="required"
                                        for="institute_name">{{ trans('cruds.jobHistory.fields.institute_name') }}</label>
                                    <input class="form-control {{ $errors->has('institute_name') ? 'is-invalid' : '' }}"
                                        type="text" name="institute_name" id="institute_name"
                                        value="{{ old('institute_name', '') }}" required>
                                    @if ($errors->has('institute_name'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('institute_name') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.jobHistory.fields.institute_name_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="job_type_id">{{ trans('cruds.jobHistory.fields.job_type') }}</label>
                                    <select class="form-control select2 {{ $errors->has('job_type') ? 'is-invalid' : '' }}"
                                        name="job_type_id" id="job_type_id">
                                        @foreach ($job_types as $id => $entry)
                                            <option value="{{ $id }}"
                                                {{ old('job_type_id') == $id ? 'selected' : '' }}>{{ $entry }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('job_type'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('job_type') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.jobHistory.fields.job_type_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="designation_id">{{ trans('cruds.jobHistory.fields.designation') }}</label>
                                    <select
                                        class="form-control select2 {{ $errors->has('designation') ? 'is-invalid' : '' }}"
                                        name="designation_id" id="designation_id" required>
                                        @foreach ($designations as $id => $entry)
                                            <option value="{{ $id }}"
                                                {{ old('designation_id') == $id ? 'selected' : '' }}>{{ $entry }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('designation'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('designation') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.jobHistory.fields.designation_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label class="required"
                                        for="grade_id">{{ trans('cruds.jobHistory.fields.grade') }}</label>
                                    <select class="form-control select2 {{ $errors->has('grade') ? 'is-invalid' : '' }}"
                                        name="grade_id" id="grade_id" required>
                                        @foreach ($grades as $id => $entry)
                                            <option value="{{ $id }}"
                                                {{ old('grade_id') == $id ? 'selected' : '' }}>{{ $entry }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('grade'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('grade') }}
                                        </div>
                                    @endif
                                    <span class="help-block">{{ trans('cruds.jobHistory.fields.grade_helper') }}</span>
                                </div>

                                <div class="form-group">
                                    <label class="required"
                                        for="joining_date">{{ trans('cruds.jobHistory.fields.joining_date') }}</label>
                                    <input class="form-control date {{ $errors->has('joining_date') ? 'is-invalid' : '' }}"
                                        type="text" name="joining_date" id="joining_date"
                                        value="{{ old('joining_date') }}" required>
                                    @if ($errors->has('joining_date'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('joining_date') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.jobHistory.fields.joining_date_helper') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="release_date">{{ trans('cruds.jobHistory.fields.release_date') }}</label>
                                    <input class="form-control date {{ $errors->has('release_date') ? 'is-invalid' : '' }}"
                                        type="text" name="release_date" id="release_date"
                                        value="{{ old('release_date') }}">
                                    @if ($errors->has('release_date'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('release_date') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.jobHistory.fields.release_date_helper') }}</span>
                                </div>





                                <div class="form-group">
                                    <label for="level_1">{{ trans('cruds.jobHistory.fields.office_unit') }}</label>
                                    <select class="form-control" name="level_1" id="level_1">
                                        <option value="">Select Office</option>
                                        <option value="Head Office">Head Office</option>
                                        <option value="Circle">Circle</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="level_2">{{ trans('cruds.jobHistory.fields.office_unit') }}</label>
                                    <select class="form-control" name="level_2" id="level_2" disabled>
                                        <option value="">Select Unit</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="level_3">{{ trans('cruds.jobHistory.fields.office_unit') }}</label>
                                    <select class="form-control" name="level_3" id="level_3" disabled>
                                        <option value="">Select Subunit</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="level_4">{{ trans('cruds.jobHistory.fields.office_unit') }}</label>
                                    <select class="form-control" name="level_4" id="level_4" disabled>
                                        <option value="">Select Sub-Subunit</option>
                                    </select>
                                </div>

                                <!-- Add more select elements for additional levels as needed -->

                                <div class="form-group" id="inputFieldContainer" style="display: none;">
                                    <label
                                        for="head_office_input">{{ trans('cruds.jobHistory.fields.head_office_input') }}</label>
                                    <input class="form-control" type="text" name="head_office_input"
                                        id="head_office_input">
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


@section('scripts')
    @parent
    <!-- Add more select elements for additional levels as needed -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const level1Select = document.getElementById('level_1');
            const level2Select = document.getElementById('level_2');
            const level3Select = document.getElementById('level_3');
            const level4Select = document.getElementById('level_4');

            level1Select.addEventListener('change', function() {
                level2Select.innerHTML = '<option value="">Select Unit</option>';
                level3Select.innerHTML = '<option value="">Select Subunit</option>';
                level4Select.innerHTML = '<option value="">Select Sub-Subunit</option>';
                level2Select.disabled = true;
                level3Select.disabled = true;
                level4Select.disabled = true;
                if (this.value === 'Head Office') {
                    inputFieldContainer.style.display = 'block';
                } else {
                    inputFieldContainer.style.display = 'none';
                }

                if (this.value === 'Circle') {
                    level2Select.disabled = false;
                    level2Select.required = true;
                    level2Select.innerHTML = `
                        <option value="">Select Unit</option>
                        <option value="Posting in Office">Posting in Office</option>
                        <option value="Division">Division</option>
                    `;
                }

                if (this.value === 'Others') {
                    level2Select.disabled = false;
                    level2Select.required = true;
                    level2Select.innerHTML = `
                        <option value="">Select Unit</option>
                        <option value="Institution">Institution</option>
                        <option value="Others">Others</option>
                    `;
                }
            });

            level2Select.addEventListener('change', function() {
                level3Select.innerHTML = '<option value="">Select Subunit</option>';
                level4Select.innerHTML = '<option value="">Select Sub-Subunit</option>';
                level3Select.disabled = true;
                level4Select.disabled = true;

                if (this.value === 'Division') {
                    level3Select.disabled = false;
                    level3Select.required = true;
                    level3Select.innerHTML = `
                        <option value="">Select Subunit</option>
                        <option value="Posting in Office">Posting in Office</option>
                        <option value="Range/SFNTC/Station">Range/SFNTC/Station</option>
                    `;
                }
                if (this.value === 'Institution') {
                    level3Select.disabled = false;
                    level3Select.required = true;
                    level3Select.innerHTML = `
                        <option value="">Select Subunit</option>
                        <option value="Forest Academy">Forest Academy</option>
                        <option value="SKWC">SKWC</option>
                        <option value="FISTT">FISTT</option>
                    `;
                }
            });

            level3Select.addEventListener('change', function() {
                level4Select.innerHTML = '<option value="">Select Sub-Subunit</option>';
                level4Select.disabled = true;

                if (this.value === 'Range/SFNTC/Station') {
                    level4Select.disabled = false;
                    level4Select.required = true;
                    level4Select.innerHTML = `
                        <option value="">Select</option>
                        <option value="Beat/SFPC/Camp">Beat/SFPC/Camp</option>
                        <option value="Posting in Office">Posting in Office</option>
                    `;
                }

                if (this.value === 'FISTT') {
                    level4Select.disabled = false;
                    level4Select.required = true;
                    level4Select.innerHTML = `
                        <option value="">Select FISTT</option>
                        <option value="Sylhet">Sylhet</option>
                        <option value="Chittagong">Chittagong</option>
                        <option value="Rajshahi">Rajshahi</option>
                    `;
                }
            });
        });
    </script>
@endsection
