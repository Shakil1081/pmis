
<?php $__env->startSection('content'); ?>
    <div class="card p-2">
        <div class="container">
            <div class="row">
                <?php echo $__env->make('admin.commonemployee.commonmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="col-md-8">
                      <form method="POST" action="<?php echo e(route("admin.job-histories.store")); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="level_1"><?php echo e(trans('cruds.jobHistory.fields.level_1')); ?></label>
                <input class="form-control <?php echo e($errors->has('level_1') ? 'is-invalid' : ''); ?>" type="text" name="level_1" id="level_1" value="<?php echo e(old('level_1', '')); ?>">
                <?php if($errors->has('level_1')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('level_1')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.jobHistory.fields.level_1_helper')); ?></span>
            </div>
            <div class="form-group">
                <label for="designation_id"><?php echo e(trans('cruds.jobHistory.fields.designation')); ?></label>
                <select class="form-control select2 <?php echo e($errors->has('designation') ? 'is-invalid' : ''); ?>" name="designation_id" id="designation_id">
                    <?php $__currentLoopData = $designations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>" <?php echo e(old('designation_id') == $id ? 'selected' : ''); ?>><?php echo e($entry); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('designation')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('designation')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.jobHistory.fields.designation_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="joining_date"><?php echo e(trans('cruds.jobHistory.fields.joining_date')); ?></label>
                <input class="form-control date <?php echo e($errors->has('joining_date') ? 'is-invalid' : ''); ?>" type="text" name="joining_date" id="joining_date" value="<?php echo e(old('joining_date')); ?>" required>
                <?php if($errors->has('joining_date')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('joining_date')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.jobHistory.fields.joining_date_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="release_date"><?php echo e(trans('cruds.jobHistory.fields.release_date')); ?></label>
                <input class="form-control date <?php echo e($errors->has('release_date') ? 'is-invalid' : ''); ?>" type="text" name="release_date" id="release_date" value="<?php echo e(old('release_date')); ?>" required>
                <?php if($errors->has('release_date')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('release_date')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.jobHistory.fields.release_date_helper')); ?></span>
            </div>
            <div class="form-group">
                <label for="level_2"><?php echo e(trans('cruds.jobHistory.fields.level_2')); ?></label>
                <input class="form-control <?php echo e($errors->has('level_2') ? 'is-invalid' : ''); ?>" type="text" name="level_2" id="level_2" value="<?php echo e(old('level_2', '')); ?>">
                <?php if($errors->has('level_2')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('level_2')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.jobHistory.fields.level_2_helper')); ?></span>
            </div>
            <div class="form-group">
                <label for="level_3"><?php echo e(trans('cruds.jobHistory.fields.level_3')); ?></label>
                <input class="form-control <?php echo e($errors->has('level_3') ? 'is-invalid' : ''); ?>" type="text" name="level_3" id="level_3" value="<?php echo e(old('level_3', '')); ?>">
                <?php if($errors->has('level_3')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('level_3')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.jobHistory.fields.level_3_helper')); ?></span>
            </div>
            <div class="form-group">
                <label for="level_4"><?php echo e(trans('cruds.jobHistory.fields.level_4')); ?></label>
                <input class="form-control <?php echo e($errors->has('level_4') ? 'is-invalid' : ''); ?>" type="text" name="level_4" id="level_4" value="<?php echo e(old('level_4', '')); ?>">
                <?php if($errors->has('level_4')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('level_4')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.jobHistory.fields.level_4_helper')); ?></span>
            </div>
            <div class="form-group">
                <label for="level_5"><?php echo e(trans('cruds.jobHistory.fields.level_5')); ?></label>
                <input class="form-control <?php echo e($errors->has('level_5') ? 'is-invalid' : ''); ?>" type="text" name="level_5" id="level_5" value="<?php echo e(old('level_5', '')); ?>">
                <?php if($errors->has('level_5')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('level_5')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.jobHistory.fields.level_5_helper')); ?></span>
            </div>
            <div class="form-group">
                <label for="employee_id"><?php echo e(trans('cruds.jobHistory.fields.employee')); ?></label>
                <select class="form-control select2 <?php echo e($errors->has('employee') ? 'is-invalid' : ''); ?>" name="employee_id" id="employee_id">
                    <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>" <?php echo e(old('employee_id') == $id ? 'selected' : ''); ?>><?php echo e($entry); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('employee')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('employee')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.jobHistory.fields.employee_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="grade_id"><?php echo e(trans('cruds.jobHistory.fields.grade')); ?></label>
                <select class="form-control select2 <?php echo e($errors->has('grade') ? 'is-invalid' : ''); ?>" name="grade_id" id="grade_id" required>
                    <?php $__currentLoopData = $grades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>" <?php echo e(old('grade_id') == $id ? 'selected' : ''); ?>><?php echo e($entry); ?></option>
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
                <label for="institutename"><?php echo e(trans('cruds.jobHistory.fields.institutename')); ?></label>
                <input class="form-control <?php echo e($errors->has('institutename') ? 'is-invalid' : ''); ?>" type="text" name="institutename" id="institutename" value="<?php echo e(old('institutename', '')); ?>">
                <?php if($errors->has('institutename')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('institutename')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.jobHistory.fields.institutename_helper')); ?></span>
            </div>
            <div class="form-group">
                <label for="academy_type"><?php echo e(trans('cruds.jobHistory.fields.academy_type')); ?></label>
                <input class="form-control <?php echo e($errors->has('academy_type') ? 'is-invalid' : ''); ?>" type="text" name="academy_type" id="academy_type" value="<?php echo e(old('academy_type', '')); ?>">
                <?php if($errors->has('academy_type')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('academy_type')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.jobHistory.fields.academy_type_helper')); ?></span>
            </div>
            <div class="form-group">
                <label for="acadaylocation"><?php echo e(trans('cruds.jobHistory.fields.acadaylocation')); ?></label>
                <input class="form-control <?php echo e($errors->has('acadaylocation') ? 'is-invalid' : ''); ?>" type="text" name="acadaylocation" id="acadaylocation" value="<?php echo e(old('acadaylocation', '')); ?>">
                <?php if($errors->has('acadaylocation')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('acadaylocation')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.jobHistory.fields.acadaylocation_helper')); ?></span>
            </div>
            <div class="form-group">
                <label for="posting_in_circle"><?php echo e(trans('cruds.jobHistory.fields.posting_in_circle')); ?></label>
                <input class="form-control <?php echo e($errors->has('posting_in_circle') ? 'is-invalid' : ''); ?>" type="text" name="posting_in_circle" id="posting_in_circle" value="<?php echo e(old('posting_in_circle', '')); ?>">
                <?php if($errors->has('posting_in_circle')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('posting_in_circle')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.jobHistory.fields.posting_in_circle_helper')); ?></span>
            </div>
            <div class="form-group">
                <label for="postingindivision"><?php echo e(trans('cruds.jobHistory.fields.postingindivision')); ?></label>
                <input class="form-control <?php echo e($errors->has('postingindivision') ? 'is-invalid' : ''); ?>" type="text" name="postingindivision" id="postingindivision" value="<?php echo e(old('postingindivision', '')); ?>">
                <?php if($errors->has('postingindivision')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('postingindivision')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.jobHistory.fields.postingindivision_helper')); ?></span>
            </div>
            <div class="form-group">
                <label for="posting_in_range"><?php echo e(trans('cruds.jobHistory.fields.posting_in_range')); ?></label>
                <input class="form-control <?php echo e($errors->has('posting_in_range') ? 'is-invalid' : ''); ?>" type="text" name="posting_in_range" id="posting_in_range" value="<?php echo e(old('posting_in_range', '')); ?>">
                <?php if($errors->has('posting_in_range')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('posting_in_range')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.jobHistory.fields.posting_in_range_helper')); ?></span>
            </div>
            <div class="form-group">
                <label for="circle_list_id"><?php echo e(trans('cruds.jobHistory.fields.circle_list')); ?></label>
                <select class="form-control select2 <?php echo e($errors->has('circle_list') ? 'is-invalid' : ''); ?>" name="circle_list_id" id="circle_list_id">
                    <?php $__currentLoopData = $circle_lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>" <?php echo e(old('circle_list_id') == $id ? 'selected' : ''); ?>><?php echo e($entry); ?></option>
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
                <label for="division_list_id"><?php echo e(trans('cruds.jobHistory.fields.division_list')); ?></label>
                <select class="form-control select2 <?php echo e($errors->has('division_list') ? 'is-invalid' : ''); ?>" name="division_list_id" id="division_list_id">
                    <?php $__currentLoopData = $division_lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>" <?php echo e(old('division_list_id') == $id ? 'selected' : ''); ?>><?php echo e($entry); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('division_list')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('division_list')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.jobHistory.fields.division_list_helper')); ?></span>
            </div>
            <div class="form-group">
                <label for="range_list_id"><?php echo e(trans('cruds.jobHistory.fields.range_list')); ?></label>
                <select class="form-control select2 <?php echo e($errors->has('range_list') ? 'is-invalid' : ''); ?>" name="range_list_id" id="range_list_id">
                    <?php $__currentLoopData = $range_lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>" <?php echo e(old('range_list_id') == $id ? 'selected' : ''); ?>><?php echo e($entry); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('range_list')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('range_list')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.jobHistory.fields.range_list_helper')); ?></span>
            </div>
            <div class="form-group">
                <label for="beat_list_id"><?php echo e(trans('cruds.jobHistory.fields.beat_list')); ?></label>
                <select class="form-control select2 <?php echo e($errors->has('beat_list') ? 'is-invalid' : ''); ?>" name="beat_list_id" id="beat_list_id">
                    <?php $__currentLoopData = $beat_lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>" <?php echo e(old('beat_list_id') == $id ? 'selected' : ''); ?>><?php echo e($entry); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('beat_list')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('beat_list')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.jobHistory.fields.beat_list_helper')); ?></span>
            </div>
            <div class="form-group">
                <label class="required" for="office_unit_id"><?php echo e(trans('cruds.jobHistory.fields.office_unit')); ?></label>
                <select class="form-control select2 <?php echo e($errors->has('office_unit') ? 'is-invalid' : ''); ?>" name="office_unit_id" id="office_unit_id" required>
                    <?php $__currentLoopData = $office_units; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>" <?php echo e(old('office_unit_id') == $id ? 'selected' : ''); ?>><?php echo e($entry); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('office_unit')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('office_unit')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.jobHistory.fields.office_unit_helper')); ?></span>
            </div>
            <div class="form-group">
                <label for="go_upload"><?php echo e(trans('cruds.jobHistory.fields.go_upload')); ?></label>
                <div class="needsclick dropzone <?php echo e($errors->has('go_upload') ? 'is-invalid' : ''); ?>" id="go_upload-dropzone">
                </div>
                <?php if($errors->has('go_upload')): ?>
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('go_upload')); ?>

                    </div>
                <?php endif; ?>
                <span class="help-block"><?php echo e(trans('cruds.jobHistory.fields.go_upload_helper')); ?></span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    <?php echo e(trans('global.save')); ?>

                </button>
            </div>
        </form>


                            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('multi-level-dropdown')->html();
} elseif ($_instance->childHasBeenRendered('cTIKjDR')) {
    $componentId = $_instance->getRenderedChildComponentId('cTIKjDR');
    $componentTag = $_instance->getRenderedChildComponentTagName('cTIKjDR');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('cTIKjDR');
} else {
    $response = \Livewire\Livewire::mount('multi-level-dropdown');
    $html = $response->html();
    $_instance->logRenderedChild('cTIKjDR', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
    success: function (file, response) {
      $('form').find('input[name="go_upload"]').remove()
      $('form').append('<input type="hidden" name="go_upload" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="go_upload"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
<?php if(isset($jobHistory) && $jobHistory->go_upload): ?>
      var file = <?php echo json_encode($jobHistory->go_upload); ?>

          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="go_upload" value="' + file.file_name + '">')
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH J:\2024working\pims2024\pmis\resources\views/admin/jobHistories/create.blade.php ENDPATH**/ ?>