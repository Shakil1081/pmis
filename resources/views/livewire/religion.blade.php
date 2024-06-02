<div class="w-100">
    <div class="row row-cols-3 w-100">
        <div class="form-group">
            <label class="required" for="religion_id">{{ trans('cruds.employeeList.fields.religion') }}</label>
            <select wire:model="religionId" wire:change="onreligionId($event.target.value)"
                class="form-select @error('religion_id') is-invalid @enderror" name="religion_id" id="religion_id"
                required>

                @foreach ($religions as $id => $rel)
                    <option value="{{ $id }}" {{ old('religion_id') == $id ? 'selected' : '' }}>
                        {{ $rel }}</option>
                @endforeach
                <option value="Other" {{ old('religion_id') == 'Other' ? 'selected' : '' }}> @if (app()->getLocale() === 'bn')
                        অন্যান্য
                    @else
                        Others
                    @endif</option>
            </select>
            {{-- {{ $religionId }} --}}
        </div>

        @if ($religionId == 'Other')
            <div class="form-group">
                <label for="religion_name_bn"
                    class="form-label required">@if (app()->getLocale() === 'bn')
                        ধর্মের নাম (বাংলা)
                    @else
                        Religion Name Bn
                    @endif</label>
                <input type="text" class="form-control" name="religion_name_bn" id="religion_name_bn" required />
            </div>
            <div class="form-group">
                <label for="religion_name_en"
                    class="form-label required">@if (app()->getLocale() === 'bn')
                        ধর্মের নাম (ইংরেজি)
                    @else
                        Religion Name Eng
                    @endif</label>
                <input type="text" class="form-control" name="religion_name_en" id="religion_name_en" required />
            </div>
        @endif


    </div>
</div>
