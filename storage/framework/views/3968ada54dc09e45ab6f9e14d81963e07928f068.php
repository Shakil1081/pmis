<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.create')); ?> <?php echo e(trans('cruds.joininginfo.title_singular')); ?>

    </div>

    <div class="card-body">
        <form method="POST" action="<?php echo e(route("admin.joininginfos.store")); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label class="required" for="project_revenue_bn"><?php echo e(trans('cruds.joininginfo.fields.project_revenue_bn')); ?></label>
                <input class="form-control <?php echo e($errors->has('project_revenue_bn') ? 'is-invalid' : ''); ?>" type="text" name="project_revenue_bn" id="project_revenue_bn" value="<?php echo e(old('project_revenue_bn', '')); ?>" required>
                <?php if($errors->has('project_revenue_bn')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('project_revenue_bn')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.joininginfo.fields.project_revenue_bn_helper')); ?></span>
            </div>
            <div class="form-group">
                <label for="project_revenue_en"><?php echo e(trans('cruds.joininginfo.fields.project_revenue_en')); ?></label>
                <input class="form-control <?php echo e($errors->has('project_revenue_en') ? 'is-invalid' : ''); ?>" type="text" name="project_revenue_en" id="project_revenue_en" value="<?php echo e(old('project_revenue_en', 'na')); ?>">
                <?php if($errors->has('project_revenue_en')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('project_revenue_en')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.joininginfo.fields.project_revenue_en_helper')); ?></span>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH J:\2024working\pims2024\pmis\resources\views/admin/joininginfos/create.blade.php ENDPATH**/ ?>