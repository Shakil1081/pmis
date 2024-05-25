<div>
    <div class="row row-cols-2">
        <div class="form-group">
            <label class="required" for="level_1">Office Unit</label>
            <select wire:model="selectedLevel1" class="form-select" name="level_1" id="level_1"
                wire:change="onSelectChange($event.target.value)" required>
                <option value="">Select</option>
                @foreach ($optionsLevel1 as $option)
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

        @if ($selectedValue == 1)
            <div class="form-group">
                <label for="level_2" class="form-label">Name of Wing/UNit</label>
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
                <label class="required" for="level_2"> Posting in Circle</label>
                <!-- Your second dropdown goes here -->
                <select wire:model="selectedLevel2" class="form-select"
                    wire:change="onSelectChangel2($event.target.value)" required>
                    <option>Select</option>
                    <option value="Posting in Office">Posting in Office</option>
                    <option value="Division">Division</option>
                </select>
            </div>





            @if ($selectedValue2 == 'Division')
                <div class="form-group">
                    <label class="required" for="level_3">Division List</label>
                    <select wire:model="onSelctDivisionmodel" class="form-select select2" name="division" name="level_2"
                        id="level_2" wire:change="onSelctDivision($event.target.value)" required>
                        <option value="">Select </option>
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
                    <label class="required"> Posting in Division</label>
                    <select wire:model="beatSFPCCamp" class="form-select"
                        wire:change="onbeatSFPCCamp($event.target.value)" name="postingindivision"
                        id="postingindivision" required>
                        <option>Select</option>
                        <option value="Posting in Office">Posting in Office</option>
                        <option value="Range/SFNTC/Station">Range/SFNTC/Station</option>
                    </select>
                </div>
            @endif



            @if ($onSelctDivisionmodel && $selectedValue2 == 'Division' && $beatSFPCCamp == 'Range/SFNTC/Station')
                <div class="form-group">
                    <label class="required" for="posting_in_range">{{ trans('Range List') }}</label>
                    <select wire:model="rangeForbeat" wire:change="onbeat($event.target.value)"
                        class="form-select select2" name="posting_in_range" id="posting_in_range" required>
                        <option>Select</option>
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
                    <label class="required" for="posting_in_range"> Posting in Range </label>
                    <select wire:model="beatlistshow" class="form-select" name="posting_in_range"
                        id="posting_in_range"required>
                        <option>Select</option>
                        <option value="Posting in Office">Posting in Office</option>
                        <option value="beatlistshow">Beat/SFPC/Camp</option>
                    </select>
                </div>
            @endif


            @if ($beatlistshow == 'beatlistshow')
                <div class="form-group">
                    <label class="required" for="beat_list_id">{{ trans('Beat list') }}</label>
                    <select class="form-select select2" name="beat_list_id" id="beat_list_id">
                        <option value="">Select</option>
                        @foreach ($beatList as $option)
                            <option value="{{ $option->name_bn }}">
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
                <label class="required" for="level_2"> Others</label>
                <!-- Your second dropdown goes here -->
                <select wire:model="institution" class="form-select" wire:change="oninstitution($event.target.value)"
                    name="institutename" id="institutename" required>
                    <option>Select</option>
                    <option value="Institution">Institution</option>
                    <option value="Others">Others</option>
                </select>
            </div>
        @endif
        @if ($institution == 'Institution')
            <div class="form-group">
                <label class="required" for="academy_type"> Institution</label>
                <!-- Your second dropdown goes here -->
                <select wire:model="fsit" class="form-select" wire:change="onfsit($event.target.value)"
                    name="academy_type" id="academy_type" required>
                    <option>Select</option>
                    <option value="Forest Academy">Forest Academy</option>
                    <option value="SKWC">SKWC</option>
                    <option value="FSTI">FSTI</option>
                </select>
            </div>
        @endif

        @if ($fsit == 'FSTI')
            <div class="form-group">
                <label class="required" for="posting_in_circle">FSTI</label>

                <select class="form-select" name="posting_in_circle" id="posting_in_circle" required>
                    <option>Select</option>
                    <option value="Sylhet">Sylhet</option>
                    <option value="Chittagong">Chittagong</option>
                    <option value="Rajshahi">Rajshahi</option>
                </select>
            </div>
        @endif

    </div>
</div>
