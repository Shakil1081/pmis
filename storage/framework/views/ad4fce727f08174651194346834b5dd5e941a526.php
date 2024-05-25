<div>
    <div class="row row-cols-2">
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
                <label for="circle_list_id"><?php echo e(trans('cruds.jobHistory.fields.circle_list')); ?></label>
                <select wire:model="circlelistid" wire:change="onSelectcirclelistid($event.target.value)"
                    class="form-control select2 <?php echo e($errors->has('circle_list') ? 'is-invalid' : ''); ?>"
                    name="circle_list_id" id="circle_list_id">
                    <?php $__currentLoopData = $circle_lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($option->id); ?>">
                            <?php if(app()->getLocale() === 'bn'): ?>
                                <?php echo e($option->name_bn); ?>

                            <?php else: ?>
                                <?php echo e($option->name_en); ?>

                            <?php endif; ?>
                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>

                <?php if($errors->has('circle_list')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('circle_list')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.jobHistory.fields.circle_list_helper')); ?></span>
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
                            <option value="<?php echo e($option->id); ?>">
                                <?php if(app()->getLocale() === 'bn'): ?>
                                    <?php echo e($option->name_bn); ?>

                                <?php else: ?>
                                    <?php echo e($option->name_en); ?>

                                <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

            <?php endif; ?>
            <?php if($onSelctDivisionmodel && $selectedValue2 == 'Division'): ?>
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
            <?php endif; ?>



            <?php if($onSelctDivisionmodel && $selectedValue2 == 'Division' && $beatSFPCCamp == 'Range/SFNTC/Station'): ?>
                <div class="form-group">
                    <label class="required" for="posting_in_range"><?php echo e(trans('Range List')); ?></label>
                    <select wire:model="rangeForbeat" wire:change="onbeat($event.target.value)"
                        class="form-select select2" name="posting_in_range" id="posting_in_range" required>
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
                    <label class="required" for="posting_in_range"> Posting in Range </label>
                    <select wire:model="beatlistshow" class="form-select" name="posting_in_range"
                        id="posting_in_range"required>
                        <option>Select</option>
                        <option value="Posting in Office">Posting in Office</option>
                        <option value="beatlistshow">Beat/SFPC/Camp</option>
                    </select>
                </div>
            <?php endif; ?>


            <?php if($beatlistshow == 'beatlistshow'): ?>
                <div class="form-group">
                    <label class="required" for="beat_list_id"><?php echo e(trans('Beat list')); ?></label>
                    <select class="form-select select2" name="beat_list_id" id="beat_list_id">
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
                    name="institutename" id="institutename" required>
                    <option>Select</option>
                    <option value="Institution">Institution</option>
                    <option value="Others">Others</option>
                </select>
            </div>
        <?php endif; ?>
        <?php if($institution == 'Institution'): ?>
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
        <?php endif; ?>

        <?php if($fsit == 'FSTI'): ?>
            <div class="form-group">
                <label class="required" for="posting_in_circle">FSTI</label>

                <select class="form-select" name="posting_in_circle" id="posting_in_circle" required>
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