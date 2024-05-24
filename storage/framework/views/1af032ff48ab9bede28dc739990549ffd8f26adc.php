
<?php $__env->startSection('content'); ?>
    <div class="card p-2">
        <div class="container">
            <div class="row">
                <?php echo $__env->make('admin.commonemployee.commonmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="col-md-8">
                    <div class="tab-content my-1 border p-2" id="v-pills-tabContent">
                        <h4> <?php echo e(trans('global.create')); ?> <?php echo e(trans('cruds.jobHistory.title_singular')); ?></h4>
                        <form method="POST"
                            action="<?php echo e(route('admin.job-histories.store', ['employee_id' => request()->query('id')])); ?>"
                            enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

                            <div class="row row-cols-2">
                                <div class="form-group">
                                    <label class="required"
                                        for="institute_name"><?php echo e(trans('cruds.jobHistory.fields.institute_name')); ?></label>
                                    <input class="form-control <?php echo e($errors->has('institute_name') ? 'is-invalid' : ''); ?>"
                                        type="text" name="institute_name" id="institute_name"
                                        value="<?php echo e(old('institute_name', '')); ?>" required>
                                    <?php if($errors->has('institute_name')): ?>
                                        <div class="invalid-feedback">
                                            <?php echo e($errors->first('institute_name')); ?>

                                        </div>
                                    <?php endif; ?>
                                    <span
                                        class="help-block"><?php echo e(trans('cruds.jobHistory.fields.institute_name_helper')); ?></span>
                                </div>
                                <div class="form-group">
                                    <label for="job_type_id"><?php echo e(trans('cruds.jobHistory.fields.job_type')); ?></label>
                                    <select class="form-control select2 <?php echo e($errors->has('job_type') ? 'is-invalid' : ''); ?>"
                                        name="job_type_id" id="job_type_id">
                                        <?php $__currentLoopData = $job_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($id); ?>"
                                                <?php echo e(old('job_type_id') == $id ? 'selected' : ''); ?>><?php echo e($entry); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php if($errors->has('job_type')): ?>
                                        <div class="invalid-feedback">
                                            <?php echo e($errors->first('job_type')); ?>

                                        </div>
                                    <?php endif; ?>
                                    <span class="help-block"><?php echo e(trans('cruds.jobHistory.fields.job_type_helper')); ?></span>
                                </div>
                                <div class="form-group">
                                    <label for="designation_id"><?php echo e(trans('cruds.jobHistory.fields.designation')); ?></label>
                                    <select
                                        class="form-control select2 <?php echo e($errors->has('designation') ? 'is-invalid' : ''); ?>"
                                        name="designation_id" id="designation_id" required>
                                        <?php $__currentLoopData = $designations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($id); ?>"
                                                <?php echo e(old('designation_id') == $id ? 'selected' : ''); ?>><?php echo e($entry); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php if($errors->has('designation')): ?>
                                        <div class="invalid-feedback">
                                            <?php echo e($errors->first('designation')); ?>

                                        </div>
                                    <?php endif; ?>
                                    <span
                                        class="help-block"><?php echo e(trans('cruds.jobHistory.fields.designation_helper')); ?></span>
                                </div>
                                <div class="form-group">
                                    <label class="required"
                                        for="grade_id"><?php echo e(trans('cruds.jobHistory.fields.grade')); ?></label>
                                    <select class="form-control select2 <?php echo e($errors->has('grade') ? 'is-invalid' : ''); ?>"
                                        name="grade_id" id="grade_id" required>
                                        <?php $__currentLoopData = $grades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($id); ?>"
                                                <?php echo e(old('grade_id') == $id ? 'selected' : ''); ?>><?php echo e($entry); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php if($errors->has('grade')): ?>
                                        <div class="invalid-feedback">
                                            <?php echo e($errors->first('grade')); ?>

                                        </div>
                                    <?php endif; ?>
                                    <span class="help-block"><?php echo e(trans('cruds.jobHistory.fields.grade_helper')); ?></span>
                                </div>

                                <div class="form-group">
                                    <label class="required"
                                        for="joining_date"><?php echo e(trans('cruds.jobHistory.fields.joining_date')); ?></label>
                                    <input class="form-control date <?php echo e($errors->has('joining_date') ? 'is-invalid' : ''); ?>"
                                        type="text" name="joining_date" id="joining_date"
                                        value="<?php echo e(old('joining_date')); ?>" required>
                                    <?php if($errors->has('joining_date')): ?>
                                        <div class="invalid-feedback">
                                            <?php echo e($errors->first('joining_date')); ?>

                                        </div>
                                    <?php endif; ?>
                                    <span
                                        class="help-block"><?php echo e(trans('cruds.jobHistory.fields.joining_date_helper')); ?></span>
                                </div>
                                <div class="form-group">
                                    <label for="release_date"><?php echo e(trans('cruds.jobHistory.fields.release_date')); ?></label>
                                    <input class="form-control date <?php echo e($errors->has('release_date') ? 'is-invalid' : ''); ?>"
                                        type="text" name="release_date" id="release_date"
                                        value="<?php echo e(old('release_date')); ?>">
                                    <?php if($errors->has('release_date')): ?>
                                        <div class="invalid-feedback">
                                            <?php echo e($errors->first('release_date')); ?>

                                        </div>
                                    <?php endif; ?>
                                    <span
                                        class="help-block"><?php echo e(trans('cruds.jobHistory.fields.release_date_helper')); ?></span>
                                </div>





                                

                                <!-- Add more select elements for additional levels as needed -->






                                

                                

                            </div>


                            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('multi-level-dropdown')->html();
} elseif ($_instance->childHasBeenRendered('pPC67uf')) {
    $componentId = $_instance->getRenderedChildComponentId('pPC67uf');
    $componentTag = $_instance->getRenderedChildComponentTagName('pPC67uf');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('pPC67uf');
} else {
    $response = \Livewire\Livewire::mount('multi-level-dropdown');
    $html = $response->html();
    $_instance->logRenderedChild('pPC67uf', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                            <div class="form-group">
                                <button class="btn btn-danger" type="submit">
                                    <?php echo e(trans('global.save')); ?>

                                </button>
                            </div>
                        </form>

                        
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH J:\2024working\pims2024\pmis\resources\views/admin/jobHistories/create.blade.php ENDPATH**/ ?>