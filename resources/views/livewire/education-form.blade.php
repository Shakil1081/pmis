<div>
    <div class="row row-cols-2">
        <div class="form-group">
            <label for="circle_list_id">{{ trans('Level of Education') }}</label>
            <select wire:model="levelofEducation" wire:change="onlevelofEducation($event.target.value)"
                class="form-select {{ $errors->has('circle_list') ? 'is-invalid' : '' }}" name="circle_list_id"
                id="circle_list_id">
                <option value="">Select</option>
                @foreach ($examinations as $option)
                    <option value="{{ $option->id }}">
                        @if (app()->getLocale() === 'bn')
                            {{ $option->name_bn }}
                        @else
                            {{ $option->name_en }}
                        @endif
                    </option>
                @endforeach
            </select>
        </div>

        @if ($levelofEducation)
            <div class="form-group">
                <label class="required"
                    for="name_of_exam_id">{{ trans('cruds.educationInformatione.fields.name_of_exam') }}</label>
                <select wire:model="nameOfExam" wire:change="onnameOfExam($event.target.value)"
                    class="form-select {{ $errors->has('name_of_exam') ? 'is-invalid' : '' }}" name="name_of_exam_id"
                    id="name_of_exam_id" required>
                    <option value="">Select</option>
                    @foreach ($name_of_exams as $option)
                        <option value="{{ $option->id }}">
                            @if (app()->getLocale() === 'bn')
                                {{ $option->name_bn }}
                            @else
                                {{ $option->name_en }}
                            @endif
                        </option>
                    @endforeach
                </select>
                @if ($errors->has('name_of_exam'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name_of_exam') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.educationInformatione.fields.name_of_exam_helper') }}</span>
            </div>

        @endif
        <div class="form-group">
            <label class="required"
                for="school_university_name">{{ trans('cruds.educationInformatione.fields.school_university_name') }}</label>
            <input class="form-control {{ $errors->has('school_university_name') ? 'is-invalid' : '' }}" type="text"
                name="school_university_name" id="school_university_name"
                value="{{ old('school_university_name', '') }}" required>
            @if ($errors->has('school_university_name'))
                <div class="invalid-feedback">
                    {{ $errors->first('school_university_name') }}
                </div>
            @endif
            <span
                class="help-block">{{ trans('cruds.educationInformatione.fields.school_university_name_helper') }}</span>
        </div>

        @if ($exambordlist)
            <div class="form-group">
                <label class="required"
                    for="exam_board_id">{{ trans('cruds.educationInformatione.fields.exam_board') }}</label>
                <select class="form-select select2 {{ $errors->has('exam_board') ? 'is-invalid' : '' }}"
                    name="exam_board_id" id="exam_board_id" required>
                    <option value="">Select</option>
                    @foreach ($exambordlist as $option)
                        <option value="{{ $option->id }}">
                            @if (app()->getLocale() === 'bn')
                                {{ $option->name_bn }}
                            @else
                                {{ $option->name_en }}
                            @endif
                        </option>
                    @endforeach
                </select>
                @if ($errors->has('exam_board'))
                    <div class="invalid-feedback">
                        {{ $errors->first('exam_board') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.educationInformatione.fields.exam_board_helper') }}</span>
            </div>
        @endif
        @if ($resultGroup)
            <div class="form-group">
                <label class="required">Gread/Class/Division</label>
                <select wire:model="result" wire:change="onresult($event.target.value)" class="form-select" required>
                    <option value="">Select</option>
                    @foreach ($resultGroup as $option)
                        <option value="{{ $option->id }}">
                            @if (app()->getLocale() === 'bn')
                                {{ $option->name_bn }}
                            @else
                                {{ $option->name_en }}
                            @endif
                        </option>
                    @endforeach
                </select>
                @if ($errors->has('exam_board'))
                    <div class="invalid-feedback">
                        {{ $errors->first('exam_board') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.educationInformatione.fields.exam_board_helper') }}</span>
            </div>
        @endif

        @if (empty($resultlist) || count($resultlist) === 0)
            @if ($resultGroup)
                <div class="mb-3">
                    <label for="" class="form-label">CGPA </label>
                    <input type="text" class="form-control" name="result_id" id="" aria-describedby="helpId"
                        placeholder="" />
                    <small id="helpId" class="form-text text-muted">Help text</small>
                </div>
            @endif
        @else
            <div class="form-group">
                <label class="required"
                    for="result_id">{{ trans('cruds.educationInformatione.fields.result') }}</label>
                <select class="form-select select2 {{ $errors->has('result') ? 'is-invalid' : '' }}" name="result_id"
                    id="result_id" required>
                    <option value="">Select</option>
                    @foreach ($resultlist as $option)
                        <option value="{{ $option->id }}">
                            @if (app()->getLocale() === 'bn')
                                {{ $option->name_bn }}
                            @else
                                {{ $option->name_en }}
                            @endif
                        </option>
                    @endforeach
                </select>
                @if ($errors->has('result'))
                    <div class="invalid-feedback">
                        {{ $errors->first('result') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.educationInformatione.fields.result_helper') }}</span>
            </div>
        @endif



        <div class="form-group">
            <label
                for="concentration_major_group">{{ trans('cruds.educationInformatione.fields.concentration_major_group') }}</label>
            <input class="form-control {{ $errors->has('concentration_major_group') ? 'is-invalid' : '' }}"
                type="text" name="concentration_major_group" id="concentration_major_group"
                value="{{ old('concentration_major_group', '') }}">
            @if ($errors->has('concentration_major_group'))
                <div class="invalid-feedback">
                    {{ $errors->first('concentration_major_group') }}
                </div>
            @endif
            <span
                class="help-block">{{ trans('cruds.educationInformatione.fields.concentration_major_group_helper') }}</span>
        </div>




    </div>

</div>