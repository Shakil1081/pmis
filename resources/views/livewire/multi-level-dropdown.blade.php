<div>
    <div class="row row-cols-2">

        <div class="form-group">
            <label class="required" for="office_unit_id">{{ trans('cruds.jobHistory.fields.office_unit') }}</label>
            <select wire:model="selectedLevel1" wire:change="onSelectChange($event.target.value)"
                class="form-select {{ $errors->has('office_unit') ? 'is-invalid' : '' }}" name="office_unit_id"
                id="office_unit_id" required>
                <option>{{ trans('global.pleaseSelect') }}</option>
                @foreach ($optionsLevel1 as $option)
                    <option value="{{ $option->id }}" {{ old('office_unit_id') == $option->id ? 'selected' : '' }}>

                        @if (app()->getLocale() === 'bn')
                            {{ $option->name_bn }}
                        @else
                            {{ $option->name_en }}
                        @endif
                    </option>
                @endforeach
            </select>
            @if ($errors->has('office_unit'))
                <div class="invalid-feedback">
                    {{ $errors->first('office_unit') }}
                </div>
            @endif
            <span class="help-block">{{ trans('cruds.jobHistory.fields.office_unit_helper') }}</span>
        </div>


        @if ($selectedValue == 1)
            <div class="form-group">
                <label for="level_2" class="form-label">{{ trans('global.nameWingunit') }}</label>
                <input type="text" class="form-control" name="level_2" id="level_2" aria-describedby="helpId"
                    placeholder="" />
            </div>
        @endif

        @if ($selectedValue == 2)


            <div class="form-group">
                <label for="circle_list_id">{{ trans('cruds.jobHistory.fields.circle_list') }}</label>
                <select wire:model="circlelistid" wire:change="onSelectcirclelistid($event.target.value)"
                    class="form-control select2 {{ $errors->has('circle_list') ? 'is-invalid' : '' }}"
                    name="circle_list_id" id="circle_list_id">
                    <option>{{ trans('global.pleaseSelect') }}</option>
                    @foreach ($circle_lists as $option)
                        <option value="{{ $option->id }}">
                            @if (app()->getLocale() === 'bn')
                                {{ $option->name_bn }}
                            @else
                                {{ $option->name_en }}
                            @endif
                        </option>
                    @endforeach
                </select>

                @if ($errors->has('circle_list'))
                    <div class="invalid-feedback">
                        {{ $errors->first('circle_list') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.jobHistory.fields.circle_list_helper') }}</span>
            </div>


            <div class="form-group">
                <label class="required" for="level_2">{{ trans('global.postingCircle') }}</label>
                <!-- Your second dropdown goes here -->
                <select wire:model="selectedLevel2" class="form-select"
                    wire:change="onSelectChangel2($event.target.value)" required>
                    <option>{{ trans('global.pleaseSelect') }}</option>
                    <option value="Posting in Office">{{ trans('global.postingOffice') }}</option>
                    <option value="Division">{{ trans('global.division') }}</option>
                </select>
            </div>



            @if ($selectedValue2 == 'Division')
                <div class="form-group">
                    <label class="required" for="level_3">{{ trans('global.divisionList') }}</label>
                    <select wire:model="onSelctDivisionmodel" class="form-select select2" name="division" name="level_2"
                        id="level_2" wire:change="onSelctDivision($event.target.value)" required>
                        <option>{{ trans('global.pleaseSelect') }}</option>
                        @foreach ($division as $option)
                            <option value="{{ $option->id }}">
                                @if (app()->getLocale() === 'bn')
                                    {{ $option->name_bn }}
                                @else
                                    {{ $option->name_en }}
                                @endif
                        @endforeach
                    </select>
                </div>

            @endif
            @if ($onSelctDivisionmodel && $selectedValue2 == 'Division')
                <div class="form-group">
                    <label class="required"> {{ trans('global.postingDivision') }}</label>
                    <select wire:model="beatSFPCCamp" class="form-select"
                        wire:change="onbeatSFPCCamp($event.target.value)" name="postingindivision"
                        id="postingindivision" required>
                        <option>{{ trans('global.pleaseSelect') }}</option>
                        <option value="Posting in Office">{{ trans('global.postingOffice') }}</option>
                        <option value="Range/SFNTC/Station">{{ trans('global.rangeSFPCStation') }}</option>
                    </select>
                </div>
            @endif



            @if ($onSelctDivisionmodel && $selectedValue2 == 'Division' && $beatSFPCCamp == 'Range/SFNTC/Station')
                <div class="form-group">
                    <label class="required" for="posting_in_range">{{ trans('Range List') }}</label>
                    <select wire:model="rangeForbeat" wire:change="onbeat($event.target.value)"
                        class="form-select select2" name="posting_in_range" id="posting_in_range" required>
                        <option>{{ trans('global.pleaseSelect') }}</option>
                        @foreach ($range as $option)
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
            @endif



            @if ($rangeForbeat)
                <div class="form-group">
                    <label class="required" for="posting_in_range">{{ trans('global.postinginRange') }}</label>
                    <select wire:model="beatlistshow" class="form-select" name="posting_in_range"
                        id="posting_in_range"required>
                        <option>{{ trans('global.pleaseSelect') }}</option>
                        <option value="Posting in Office">{{ trans('global.postingOffice') }}</option>
                        <option value="Beat/SFNTC/Camp">{{ trans('global.beatSFNTCCamp') }}</option>
                    </select>
                </div>
            @endif


            @if ($beatlistshow == 'Beat/SFNTC/Camp')
                <div class="form-group">
                    <label class="required" for="beat_list_id">{{ trans('Beat list') }}</label>
                    <select class="form-select select2" name="beat_list_id" id="beat_list_id">
                        <option>{{ trans('global.pleaseSelect') }}</option>
                        @foreach ($beatList as $option)
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
            @endif
        @endif
        @if ($selectedValue != 1 && $selectedValue != 2 && $selectedValue)
            <div class="form-group">
                <label class="required" for="level_2"> {{ trans('global.others') }}</label>
                <!-- Your second dropdown goes here -->
                <select wire:model="institution" class="form-select" wire:change="oninstitution($event.target.value)"
                    name="institutename" id="institutename" required>
                    <option>{{ trans('global.pleaseSelect') }}</option>
                    <option value="Institution">{{ trans('global.institution') }}</option>
                    <option value="Others">{{ trans('global.others') }}</option>
                </select>
            </div>
        @endif
        @if ($institution == 'Institution')
            <div class="form-group">
                <label class="required" for="academy_type"> {{ trans('global.institution') }}</label>
                <!-- Your second dropdown goes here -->
                <select wire:model="fsit" class="form-select" wire:change="onfsit($event.target.value)"
                    name="academy_type" id="academy_type" required>
                    <option>{{ trans('global.pleaseSelect') }}</option>
                    <option value="Forest Academy">{{ trans('global.forestAcademy') }}</option>
                    <option value="SKWC">{{ trans('global.skec') }}</option>
                    <option value="FSTI">{{ trans('global.fsti') }}</option>
                </select>
            </div>
        @endif

        @if ($fsit == 'FSTI')
            <div class="form-group">
                <label class="required" for="posting_in_circle">{{ trans('global.fsti') }}</label>

                <select class="form-select" name="posting_in_circle" id="posting_in_circle" required>
                    <option>{{ trans('global.pleaseSelect') }}</option>
                    <option value="Sylhet">{{ trans('global.Sylhet') }}</option>
                    <option value="Chittagong">{{ trans('global.Chittagong') }}</option>
                    <option value="Rajshahi">{{ trans('global.Rajshahi') }}</option>
                </select>
            </div>
        @endif

    </div>
</div>
