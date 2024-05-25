<div>
    <div class="row row-cols-3">

        <div class="form-group">
            <label class="required"
                for="joiningexaminfo_id">{{ trans('cruds.employeeList.fields.joiningexaminfo') }}</label>
            <select wire:model="joininginfo" class="form-select" name="joiningexaminfo_id" id="joiningexaminfo_id"
                wire:change="onSelectChange($event.target.value)" required>
                <option value="">Select</option>
                @foreach ($joininginfoData as $option)
                    <option value="{{ $option->id }}">
                        @if (app()->getLocale() === 'bn')
                            {{ $option->project_revenue_bn }}
                        @else
                            {{ $option->project_revenue_en }}
                        @endif
                    </option>
                @endforeach
            </select>
        </div>

        @if ($joininginfo && $joininginfo != 2)
            <div class="form-group projectlist">
                <label for="project_id">{{ trans('cruds.employeeList.fields.project') }}</label>
                <select class="form-control select2 {{ $errors->has('project') ? 'is-invalid' : '' }}" name="project_id"
                    id="project_id">
                    @foreach ($projects as $option)
                        <option value="{{ $option->id }}">
                            @if (app()->getLocale() === 'bn')
                                {{ $option->name_bn }}
                            @else
                                {{ $option->name_en }}
                            @endif
                        </option>
                    @endforeach
                </select>
                @if ($errors->has('project'))
                    <div class="invalid-feedback">
                        {{ $errors->first('project') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.project_helper') }}</span>
            </div>
        @endif

        @if ($joininginfo == 2)
            <div class="form-group">
                <label class="required" for="projectrevenue_id">Revenue Type</label>
                <select wire:model="revenueType" class="form-select" name="projectrevenue_id" id="projectrevenue_id"
                    wire:change="onSelectrevenueType($event.target.value)" required>

                    <option>Select</option>
                    @foreach ($projectRevenueall as $option)
                        <option value="{{ $option->id }}">
                            @if (app()->getLocale() === 'bn')
                                {{ $option->name_bn }}
                            @else
                                {{ $option->name_en }}
                            @endif
                        </option>
                    @endforeach

                    {{-- <option value="Cader">Cader</option>
                    <option value="non-Cader">non-Cader</option>
                    <option value="Other">Other</option> --}}
                </select>
            </div>
        @endif


        @if ($projectRevenueExam)
            <div class="form-group">
                <label class="required" for="departmental_exam_id">non-Cader Exam</label>
                <select wire:model="departmentalOrDepartmental" class="form-select" name="departmental_exam_id"
                    id="departmental_exam_id" wire:change="onSelectdepartmentalOrDepartmental($event.target.value)"
                    required>
                    <option>Select</option>
                    @foreach ($projectRevenueExam as $option)
                        <option value="{{ $option->id }}">
                            @if (app()->getLocale() === 'bn')
                                {{ $option->exam_name_bn }}
                            @else
                                {{ $option->exam_name_en }}
                            @endif
                        </option>
                    @endforeach


                    {{-- <option value="Yes">Departmental Exam</option>
                    <option value="Senior Scale Exam">Senior Scale Exam</option> --}}
                </select>
            </div>
        @endif

        @if ($departmentalOrDepartmental)
            <div class="form-group">
                <label class="required" for="level_1">Exam Pass</label>
                <select wire:model="exampass" class="form-select" name="level_1" id="level_1"
                    wire:change="onSelectexampass($event.target.value)" required>

                    <option>Select</option>
                    <option value="No">No</option>
                    <option value="Yes">Yes</option>
                </select>
            </div>
        @endif
        @if ($exampass == 'Yes')
            <div class="form-group">

                <div class="mb-3">
                    <label for="certificate_upload"
                        class="form-label">{{ trans('cruds.employeeList.fields.certificate_upload') }}</label>
                    <input type="file" class="form-control" id="certificate_upload" name="certificate_upload">
                </div>


                {{-- <div class="needsclick dropzone {{ $errors->has('certificate_upload') ? 'is-invalid' : '' }}"
                    id="certificate_upload-dropzone">
                </div> --}}
                @if ($errors->has('certificate_upload'))
                    <div class="invalid-feedback">
                        {{ $errors->first('certificate_upload') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.certificate_upload_helper') }}</span>
            </div>
        @endif





        <div class="form-group{{ $joininginfo !== null && $joininginfo != 2 ? '' : ' d-none' }}">

            <label for="date_of_regularization">{{ trans('cruds.employeeList.fields.date_of_regularization') }}</label>
            <input class="form-control date {{ $errors->has('date_of_regularization') ? 'is-invalid' : '' }}"
                type="text" name="date_of_regularization" id="date_of_regularization"
                value="{{ old('date_of_regularization') }}">
            @if ($errors->has('date_of_regularization'))
                <div class="invalid-feedback">
                    {{ $errors->first('date_of_regularization') }}
                </div>
            @endif
            <span class="help-block">{{ trans('cruds.employeeList.fields.date_of_regularization_helper') }}</span>
        </div>
        <div class="form-group{{ $joininginfo !== null && $joininginfo != 2 ? '' : ' d-none' }}">
            <label
                for="regularization_issue_date">{{ trans('cruds.employeeList.fields.regularization_issue_date') }}</label>
            <input class="form-control date {{ $errors->has('regularization_issue_date') ? 'is-invalid' : '' }}"
                type="text" name="regularization_issue_date" id="regularization_issue_date"
                value="{{ old('regularization_issue_date') }}">
            @if ($errors->has('regularization_issue_date'))
                <div class="invalid-feedback">
                    {{ $errors->first('regularization_issue_date') }}
                </div>
            @endif
            <span class="help-block">{{ trans('cruds.employeeList.fields.regularization_issue_date_helper') }}</span>
        </div>


        <div class="form-group">
            <label for="grade_id">{{ trans('cruds.employeeList.fields.grade') }}</label>
            <select class="form-control select2 {{ $errors->has('grade') ? 'is-invalid' : '' }}" name="grade_id"
                id="grade_id">
                @foreach ($grades as $id => $entry)
                    <option value="{{ $id }}" {{ old('grade_id') == $id ? 'selected' : '' }}>
                        {{ $entry }}</option>
                @endforeach
            </select>
            @if ($errors->has('grade'))
                <div class="invalid-feedback">
                    {{ $errors->first('grade') }}
                </div>
            @endif
            <span class="help-block">{{ trans('cruds.employeeList.fields.grade_helper') }}</span>
        </div>
        <div class="form-group">
            <label class="required" for="fjoining_date">{{ trans('cruds.employeeList.fields.fjoining_date') }}</label>
            <input class="form-control date {{ $errors->has('fjoining_date') ? 'is-invalid' : '' }}" type="text"
                name="fjoining_date" id="fjoining_date" value="{{ old('fjoining_date') }}" required>
            @if ($errors->has('fjoining_date'))
                <div class="invalid-feedback">
                    {{ $errors->first('fjoining_date') }}
                </div>
            @endif
            <span class="help-block">{{ trans('cruds.employeeList.fields.fjoining_date_helper') }}</span>
        </div>
    </div>
</div>
