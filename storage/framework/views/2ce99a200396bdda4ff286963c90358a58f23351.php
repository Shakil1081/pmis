<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.create')); ?> <?php echo e(trans('cruds.projectRevenuelone.title_singular')); ?>

    </div>

    <div class="card-body">
        <form method="POST" action="<?php echo e(route("admin.project-revenuelones.store")); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label class="required" for="project_revenue_id"><?php echo e(trans('cruds.projectRevenuelone.fields.project_revenue')); ?></label>
                <select class="form-control select2 <?php echo e($errors->has('project_revenue') ? 'is-invalid' : ''); ?>" name="project_revenue_id" id="project_revenue_id" required>
                    <?php $__currentLoopData = $project_revenues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>" <?php echo e(old('project_revenue_id') == $id ? 'selected' : ''); ?>><?php echo e($entry); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('project_revenue')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('project_revenue')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.projectRevenuelone.fields.project_revenue_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="name_bn"><?php echo e(trans('cruds.projectRevenuelone.fields.name_bn')); ?></label>
                <input class="form-control <?php echo e($errors->has('name_bn') ? 'is-invalid' : ''); ?>" type="text" name="name_bn" id="name_bn" value="<?php echo e(old('name_bn', '')); ?>" required>
                <?php if($errors->has('name_bn')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('name_bn')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.projectRevenuelone.fields.name_bn_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="name_en"><?php echo e(trans('cruds.projectRevenuelone.fields.name_en')); ?></label>
                <input class="form-control <?php echo e($errors->has('name_en') ? 'is-invalid' : ''); ?>" type="text" name="name_en" id="name_en" value="<?php echo e(old('name_en', '')); ?>" required>
                <?php if($errors->has('name_en')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('name_en')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.projectRevenuelone.fields.name_en_helper')); ?></span>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH J:\2024working\pims2024\pmis\resources\views/admin/projectRevenuelones/create.blade.php ENDPATH**/ ?>