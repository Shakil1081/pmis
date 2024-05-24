<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.create')); ?> <?php echo e(trans('cruds.forestRange.title_singular')); ?>

    </div>

    <div class="card-body">
        <form method="POST" action="<?php echo e(route("admin.forest-ranges.store")); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label class="required" for="forest_state_id"><?php echo e(trans('cruds.forestRange.fields.forest_state')); ?></label>
                <select class="form-control select2 <?php echo e($errors->has('forest_state') ? 'is-invalid' : ''); ?>" name="forest_state_id" id="forest_state_id" required>
                    <?php $__currentLoopData = $forest_states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>" <?php echo e(old('forest_state_id') == $id ? 'selected' : ''); ?>><?php echo e($entry); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('forest_state')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('forest_state')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.forestRange.fields.forest_state_helper')); ?></span>
            </div>
            <div class="form-group">
                <label for="forest_division_bbs_code"><?php echo e(trans('cruds.forestRange.fields.forest_division_bbs_code')); ?></label>
                <input class="form-control <?php echo e($errors->has('forest_division_bbs_code') ? 'is-invalid' : ''); ?>" type="text" name="forest_division_bbs_code" id="forest_division_bbs_code" value="<?php echo e(old('forest_division_bbs_code', '')); ?>">
                <?php if($errors->has('forest_division_bbs_code')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('forest_division_bbs_code')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.forestRange.fields.forest_division_bbs_code_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="status_id"><?php echo e(trans('cruds.forestRange.fields.status')); ?></label>
                <select class="form-control select2 <?php echo e($errors->has('status') ? 'is-invalid' : ''); ?>" name="status_id" id="status_id" required>
                    <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>" <?php echo e(old('status_id') == $id ? 'selected' : ''); ?>><?php echo e($entry); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('status')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('status')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.forestRange.fields.status_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="forest_division_id"><?php echo e(trans('cruds.forestRange.fields.forest_division')); ?></label>
                <select class="form-control select2 <?php echo e($errors->has('forest_division') ? 'is-invalid' : ''); ?>" name="forest_division_id" id="forest_division_id" required>
                    <?php $__currentLoopData = $forest_divisions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>" <?php echo e(old('forest_division_id') == $id ? 'selected' : ''); ?>><?php echo e($entry); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('forest_division')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('forest_division')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.forestRange.fields.forest_division_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="name_bn"><?php echo e(trans('cruds.forestRange.fields.name_bn')); ?></label>
                <input class="form-control <?php echo e($errors->has('name_bn') ? 'is-invalid' : ''); ?>" type="text" name="name_bn" id="name_bn" value="<?php echo e(old('name_bn', '')); ?>" required>
                <?php if($errors->has('name_bn')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('name_bn')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.forestRange.fields.name_bn_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="name_en"><?php echo e(trans('cruds.forestRange.fields.name_en')); ?></label>
                <input class="form-control <?php echo e($errors->has('name_en') ? 'is-invalid' : ''); ?>" type="text" name="name_en" id="name_en" value="<?php echo e(old('name_en', '')); ?>" required>
                <?php if($errors->has('name_en')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('name_en')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.forestRange.fields.name_en_helper')); ?></span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    <?php echo e(trans('global.save')); ?>

                </button>
            </div>
        </form>
    </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH J:\2024working\pims2024\pmis\resources\views/admin/forestRanges/create.blade.php ENDPATH**/ ?>