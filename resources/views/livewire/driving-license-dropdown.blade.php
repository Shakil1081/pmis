<div>
    <div class="form-group">
        <label for="has_driving_license">{{ __('Do you have a driving license?') }}</label>
        <select wire:model="hasDrivingLicense" wire:change="onhasDrivingLicense($event.target.value)" class="form-control"
            name="has_driving_license" id="has_driving_license">
            <option value="">{{ __('Select Yes or No') }}</option>
            <option value="yes">{{ __('Yes') }}</option>
            <option value="no">{{ __('No') }}</option>
        </select>
    </div>

    @if ($hasDrivingLicense === 'yes')
        <div class="form-group">
            <label for="driving_license">{{ __('Driving License Type') }}</label>
            <select wire:model="selectedLicense" wire:change="onselectedLicense($event.target.value)"
                class="form-control" name="driving_license" id="driving_license">
                <option value="">{{ __('Select License Type') }}</option>
                @foreach ($licenses as $option)
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

        @if ($selectedLicense)
            <div class="form-group license_upload">
                <label for="license_upload">{{ trans('cruds.employeeList.fields.license_upload') }}</label>
                <div class="needsclick dropzone {{ $errors->has('license_upload') ? 'is-invalid' : '' }}"
                    id="license_upload-dropzone">
                </div>
                @if ($errors->has('license_upload'))
                    <div class="invalid-feedback">
                        {{ $errors->first('license_upload') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.employeeList.fields.license_upload_helper') }}</span>
            </div>
        @endif
    @endif
</div>
