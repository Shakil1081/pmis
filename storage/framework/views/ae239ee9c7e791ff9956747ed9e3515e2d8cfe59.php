<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.create')); ?> <?php echo e(trans('cruds.officeUnit.title_singular')); ?>

    </div>

    <div class="card-body">
        <form method="POST" action="<?php echo e(route("admin.office-units.store")); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label class="required" for="name_bn"><?php echo e(trans('cruds.officeUnit.fields.name_bn')); ?></label>
                <input class="form-control <?php echo e($errors->has('name_bn') ? 'is-invalid' : ''); ?>" type="text" name="name_bn" id="name_bn" value="<?php echo e(old('name_bn', '')); ?>" required>
                <?php if($errors->has('name_bn')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('name_bn')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.officeUnit.fields.name_bn_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="name_en"><?php echo e(trans('cruds.officeUnit.fields.name_en')); ?></label>
                <input class="form-control <?php echo e($errors->has('name_en') ? 'is-invalid' : ''); ?>" type="text" name="name_en" id="name_en" value="<?php echo e(old('name_en', '')); ?>" required>
                <?php if($errors->has('name_en')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('name_en')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.officeUnit.fields.name_en_helper')); ?></span>
            </div>
            <div class="form-group">
                <label for="code"><?php echo e(trans('cruds.officeUnit.fields.code')); ?></label>
                <input class="form-control <?php echo e($errors->has('code') ? 'is-invalid' : ''); ?>" type="text" name="code" id="code" value="<?php echo e(old('code', '')); ?>">
                <?php if($errors->has('code')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('code')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.officeUnit.fields.code_helper')); ?></span>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH J:\2024working\pims2024\pmis\resources\views/admin/officeUnits/create.blade.php ENDPATH**/ ?>