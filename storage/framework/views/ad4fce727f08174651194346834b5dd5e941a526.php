<div>
    <div class="row row-cols-3">
        <div class="form-group">
            <label class="required" for="level_1">Office Unit</label>
            <select wire:model="selectedLevel1" class="form-select" name="level_1" id="level_1"
                wire:change="onSelectChange($event.target.value)" required>
                <option value="">Select</option>
                <?php $__currentLoopData = $optionsLevel1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($option->id); ?>">
                        <?php if(app()->getLocale() === 'bn'): ?>
                            <?php echo e($option->name_bn); ?>

                        <?php else: ?>
                            <?php echo e($option->name_en); ?>

                        <?php endif; ?>
                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <?php if($selectedValue == 1): ?>
            <div class="form-group">
                <label for="level_2" class="form-label">Name of Wing/UNit</label>
                <input type="text" class="form-control" name="level_2" id="level_2" aria-describedby="helpId"
                    placeholder="" />
            </div>
        <?php endif; ?>

        <?php if($selectedValue == 2): ?>


            <div class="form-group">
                <label class="required" for="level_2"> Circle list</label>
                <!-- Your second dropdown goes here -->
                <select class="form-select" required>
                    <option>Select</option>
                    <option value="Posting in Office">Circle 1</option>
                    <option value="Division">Circle 2</option>
                </select>
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





            <?php if($selectedValue2 == 'Division'): ?>
                <div class="form-group">
                    <label class="required" for="level_3">Division List</label>
                    <select wire:model="onSelctDivisionmodel" class="form-select select2" name="division" name="level_2"
                        id="level_2" wire:change="onSelctDivision($event.target.value)" required>
                        <option value="">Select </option>
                        <?php $__currentLoopData = $division; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($option->id); ?>"><?php echo e($option->name_bn); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

            <?php endif; ?>
            <?php if($onSelctDivisionmodel && $selectedValue2 == 'Division'): ?>
                <div class="form-group">
                    <label class="required"> Posting in Division</label>
                    <select wire:model="beatSFPCCamp" class="form-select"
                        wire:change="onbeatSFPCCamp($event.target.value)" required>
                        <option>Select</option>
                        <option value="Posting in Office">Posting in Office</option>
                        <option value="Range/SFNTC/Station">Range/SFNTC/Station</option>
                    </select>
                </div>
            <?php endif; ?>



            <?php if($onSelctDivisionmodel && $selectedValue2 == 'Division' && $beatSFPCCamp == 'Range/SFNTC/Station'): ?>
                <div class="form-group">
                    <label class="required" for="level_5"><?php echo e(trans('Range List')); ?></label>
                    <select wire:model="rangeForbeat" wire:change="onbeat($event.target.value)"
                        class="form-select select2" name="level_3" id="level_3" required>
                        <option>Select</option>
                        <?php $__currentLoopData = $range; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($option->id); ?>">
                                <?php if(app()->getLocale() === 'bn'): ?>
                                    <?php echo e($option->name_bn); ?>

                                <?php else: ?>
                                    <?php echo e($option->name_en); ?>

                                <?php endif; ?>
                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            <?php endif; ?>



            <?php if($rangeForbeat): ?>
                <div class="form-group">
                    <label class="required" for="beatSFPCCamp"> Posting in Range </label>
                    <select wire:model="beatlistshow" class="form-select" id="beatSFPCCamp" required>
                        <option>Select</option>
                        <option value="Posting in Office">Posting in Office</option>
                        <option value="beatlistshow">Beat/SFPC/Camp</option>
                    </select>
                </div>
            <?php endif; ?>


            <?php if($beatlistshow == 'beatlistshow'): ?>
                <div class="form-group">
                    <label class="required" for="level_5"><?php echo e(trans('Beat list')); ?></label>
                    <select class="form-select select2" name="level_4" id="level_4">
                        <option value="">Select</option>
                        <?php $__currentLoopData = $beatList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($option->name_bn); ?>">
                                <?php if(app()->getLocale() === 'bn'): ?>
                                    <?php echo e($option->name_bn); ?>

                                <?php else: ?>
                                    <?php echo e($option->name_en); ?>

                                <?php endif; ?>
                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            <?php endif; ?>
        <?php endif; ?>
        <?php if($selectedValue != 1 && $selectedValue != 2 && $selectedValue): ?>
            <div class="form-group">
                <label class="required" for="level_2"> Others</label>
                <!-- Your second dropdown goes here -->
                <select wire:model="institution" class="form-select" wire:change="oninstitution($event.target.value)"
                    required name="level_2" id="level_2">
                    <option>Select</option>
                    <option value="Institution">Institution</option>
                    <option value="Others">Others</option>
                </select>
            </div>
        <?php endif; ?>
        <?php if($institution == 'Institution'): ?>
            <div class="form-group">
                <label class="required" for="level_3"> Institution</label>
                <!-- Your second dropdown goes here -->
                <select wire:model="fsit" class="form-select" wire:change="onfsit($event.target.value)" name="level_3"
                    id="level_3" required>
                    <option>Select</option>
                    <option value="Forest Academy">Forest Academy</option>
                    <option value="SKWC">SKWC</option>
                    <option value="FSTI">FSTI</option>
                </select>
            </div>
        <?php endif; ?>

        <?php if($fsit == 'FSTI'): ?>
            <div class="form-group">
                <label class="required" for="level_4">FSTI</label>
                <!-- Your second dropdown goes here -->
                <select class="form-select" name="level_4" id="level_4" required>
                    <option>Select</option>
                    <option value="Sylhet">Sylhet</option>
                    <option value="Chittagong">Chittagong</option>
                    <option value="Rajshahi">Rajshahi</option>
                </select>
            </div>
        <?php endif; ?>

    </div>
</div>
<?php /**PATH J:\2024working\pims2024\pmis\resources\views/livewire/multi-level-dropdown.blade.php ENDPATH**/ ?>