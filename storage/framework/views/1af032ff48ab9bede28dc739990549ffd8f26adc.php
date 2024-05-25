
<?php $__env->startSection('content'); ?>
    <div class="card p-2">
        <div class="container">
            <div class="row">
                <?php echo $__env->make('admin.commonemployee.commonmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="col-md-8">
                    <div class="tab-content my-1 border p-2" id="v-pills-tabContent">

                        <h4> <?php echo e(trans('global.create')); ?> <?php echo e(trans('cruds.jobHistory.title_singular')); ?> </h4>
                        <form method="POST" action="<?php echo e(route('admin.job-histories.store')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('multi-level-dropdown')->html();
} elseif ($_instance->childHasBeenRendered('yfPsvdj')) {
    $componentId = $_instance->getRenderedChildComponentId('yfPsvdj');
    $componentTag = $_instance->getRenderedChildComponentTagName('yfPsvdj');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('yfPsvdj');
} else {
    $response = \Livewire\Livewire::mount('multi-level-dropdown');
    $html = $response->html();
    $_instance->logRenderedChild('yfPsvdj', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                            <div class="row row-cols-2 mt-3">

                                <div class="form-group">
                                    <label class="required"
                                        for="designation_id"><?php echo e(trans('cruds.jobHistory.fields.designation')); ?></label>
                                    <select
                                        class="form-control select2 <?php echo e($errors->has('designation') ? 'is-invalid' : ''); ?>"
                                        name="designation_id" id="designation_id">
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
                                    <label class="required"
                                        for="release_date"><?php echo e(trans('cruds.jobHistory.fields.release_date')); ?></label>
                                    <input class="form-control date <?php echo e($errors->has('release_date') ? 'is-invalid' : ''); ?>"
                                        type="text" name="release_date" id="release_date"
                                        value="<?php echo e(old('release_date')); ?>" required>
                                    <?php if($errors->has('release_date')): ?>
                                        <div class="invalid-feedback">
                                            <?php echo e($errors->first('release_date')); ?>

                                        </div>
                                    <?php endif; ?>
                                    <span
                                        class="help-block"><?php echo e(trans('cruds.jobHistory.fields.release_date_helper')); ?></span>
                                </div>
                                
                                <div class="form-group">
                                    <label class="required"
                                        for="go_upload"><?php echo e(trans('cruds.jobHistory.fields.go_upload')); ?></label>
                                    <div class="needsclick dropzone <?php echo e($errors->has('go_upload') ? 'is-invalid' : ''); ?>"
                                        id="go_upload-dropzone">
                                    </div>
                                    <?php if($errors->has('go_upload')): ?>
                                        <div class="invalid-feedback">
                                            <?php echo e($errors->first('go_upload')); ?>

                                        </div>
                                    <?php endif; ?>
                                    <span class="help-block"><?php echo e(trans('cruds.jobHistory.fields.go_upload_helper')); ?></span>
                                </div>
                            </div>
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

<?php $__env->startSection('scripts'); ?>
    <script>
        Dropzone.options.goUploadDropzone = {
            url: '<?php echo e(route('admin.job-histories.storeMedia')); ?>',
            maxFilesize: 2, // MB
            maxFiles: 1,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "<?php echo e(csrf_token()); ?>"
            },
            params: {
                size: 2
            },
            success: function(file, response) {
                $('form').find('input[name="go_upload"]').remove()
                $('form').append('<input type="hidden" name="go_upload" value="' + response.name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="go_upload"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                <?php if(isset($jobHistory) && $jobHistory->go_upload): ?>
                    var file = <?php echo json_encode($jobHistory->go_upload); ?>

                    this.options.addedfile.call(this, file)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="go_upload" value="' + file.file_name + '">')
                    this.options.maxFiles = this.options.maxFiles - 1
                <?php endif; ?>
            },
            error: function(file, response) {
                if ($.type(response) === 'string') {
                    var message = response //dropzone sends it's own error messages in string
                } else {
                    var message = response.errors.file
                }
                file.previewElement.classList.add('dz-error')
                _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
                _results = []
                for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                    node = _ref[_i]
                    _results.push(node.textContent = message)
                }

                return _results
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH J:\2024working\pims2024\pmis\resources\views/admin/jobHistories/create.blade.php ENDPATH**/ ?>