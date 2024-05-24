<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.create')); ?> <?php echo e(trans('cruds.projectRevenueExam.title_singular')); ?>

    </div>

    <div class="card-body">
        <form method="POST" action="<?php echo e(route("admin.project-revenue-exams.store")); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label class="required" for="exam_id"><?php echo e(trans('cruds.projectRevenueExam.fields.exam')); ?></label>
                <select class="form-control select2 <?php echo e($errors->has('exam') ? 'is-invalid' : ''); ?>" name="exam_id" id="exam_id" required>
                    <?php $__currentLoopData = $exams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>" <?php echo e(old('exam_id') == $id ? 'selected' : ''); ?>><?php echo e($entry); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('exam')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('exam')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.projectRevenueExam.fields.exam_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="exam_name_bn"><?php echo e(trans('cruds.projectRevenueExam.fields.exam_name_bn')); ?></label>
                <input class="form-control <?php echo e($errors->has('exam_name_bn') ? 'is-invalid' : ''); ?>" type="text" name="exam_name_bn" id="exam_name_bn" value="<?php echo e(old('exam_name_bn', '')); ?>" required>
                <?php if($errors->has('exam_name_bn')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('exam_name_bn')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.projectRevenueExam.fields.exam_name_bn_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="exam_name_en"><?php echo e(trans('cruds.projectRevenueExam.fields.exam_name_en')); ?></label>
                <input class="form-control <?php echo e($errors->has('exam_name_en') ? 'is-invalid' : ''); ?>" type="text" name="exam_name_en" id="exam_name_en" value="<?php echo e(old('exam_name_en', '')); ?>" required>
                <?php if($errors->has('exam_name_en')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('exam_name_en')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.projectRevenueExam.fields.exam_name_en_helper')); ?></span>
            </div>
            <div class="form-group">
                <label for="upload"><?php echo e(trans('cruds.projectRevenueExam.fields.upload')); ?></label>
                <div class="needsclick dropzone <?php echo e($errors->has('upload') ? 'is-invalid' : ''); ?>" id="upload-dropzone">
                </div>
                <?php if($errors->has('upload')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('upload')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.projectRevenueExam.fields.upload_helper')); ?></span>
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

<?php $__env->startSection('scripts'); ?>
<script>
    Dropzone.options.uploadDropzone = {
    url: '<?php echo e(route('admin.project-revenue-exams.storeMedia')); ?>',
    maxFilesize: 2, // MB
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "<?php echo e(csrf_token()); ?>"
    },
    params: {
      size: 2
    },
    success: function (file, response) {
      $('form').find('input[name="upload"]').remove()
      $('form').append('<input type="hidden" name="upload" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="upload"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
<?php if(isset($projectRevenueExam) && $projectRevenueExam->upload): ?>
      var file = <?php echo json_encode($projectRevenueExam->upload); ?>

          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="upload" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
<?php endif; ?>
    },
     error: function (file, response) {
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH J:\2024working\pims2024\pmis\resources\views/admin/projectRevenueExams/create.blade.php ENDPATH**/ ?>