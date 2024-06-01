<div class="w-100">
    <div class="row row-cols-3 w-100">
        <div class="form-group">
            <label class="required" for="religion_id">{{ trans('cruds.employeeList.fields.religion') }}</label>
            <select wire:model="religionId" wire:change="onreligionId($event.target.value)"
                class="form-select @error('religion_id') is-invalid @enderror" name="religion_id" id="religion_id"
                required>
                <option value="">{{ trans('global.pleaseSelect') }}</option>
                @foreach ($religions as $id => $rel)
                    <option value="{{ $id }}" {{ old('religion_id') == $id ? 'selected' : '' }}>
                        {{ $rel }}</option>
                @endforeach
                <option value="Other" {{ old('religion_id') == 'Other' ? 'selected' : '' }}> Other`s</option>
            </select>
            {{-- {{ $religionId }} --}}
        </div>

        @if ($religionId == 'Other')
            <div class="form-group">
                <label for="religion_name_bn"
                    class="form-label required">{{ trans('cruds.religion.fields.name_bn') }}</label>
                <input type="text" class="form-control" name="religion_name_bn" id="religion_name_bn" required />
            </div>
            <div class="form-group">
                <label for="religion_name_en"
                    class="form-label required">{{ trans('cruds.religion.fields.name_en') }}</label>
                <input type="text" class="form-control" name="religion_name_en" id="religion_name_en" required />
            </div>
        @endif


    </div>
</div>
