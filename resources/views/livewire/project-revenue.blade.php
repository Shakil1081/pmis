<div>
    <div class="form-group">
        <label class="required" for="level_1">Office Unit</label>
        <select wire:model="selectedLevel1" class="form-select" name="level_1" id="level_1"
            wire:change="onSelectChange($event.target.value)" required>
            <option value="">Select</option>
            @foreach ($joininginfo as $option)
                <option value="{{ $option->id }}">
                    @if (app()->getLocale() === 'bn')
                        {{ $option->name_bn }}
                    @else
                        {{ $option->name_en }}
                    @endif
                </option>
            @endforeach
        </select>

        {{ $joininginfo }}
    </div>
</div>
