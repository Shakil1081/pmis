
<?php $__env->startSection('content'); ?>
    <div class="">
        <div class="container my-3">
            <h4> Add Employee</h4>
            <form method="POST" action="<?php echo e(route('admin.employee-lists.store', ['employee_id' => request()->query('id')])); ?>"
                enctype="multipart/form-data">
                <?php echo csrf_field(); ?>




                <h5 class="text-secondary"> Personel information</h5>
                <div class="card border-secondary border p-4">

                    <div class="row row-cols-3">
                        <div class="form-group">
                            <label class="required"
                                for="fullname_bn"><?php echo e(trans('cruds.employeeList.fields.fullname_bn')); ?></label>
                            <input class="form-control <?php echo e($errors->has('fullname_bn') ? 'is-invalid' : ''); ?>" type="text"
                                name="fullname_bn" id="fullname_bn" value="<?php echo e(old('fullname_bn', '')); ?>" required>
                            <?php if($errors->has('fullname_bn')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('fullname_bn')); ?>

                                </div>
                            <?php endif; ?>
                            <span class="help-block"><?php echo e(trans('cruds.employeeList.fields.fullname_bn_helper')); ?></span>
                        </div>
                        <div class="form-group">
                            <label class="required"
                                for="fullname_en"><?php echo e(trans('cruds.employeeList.fields.fullname_en')); ?></label>
                            <input class="form-control <?php echo e($errors->has('fullname_en') ? 'is-invalid' : ''); ?>" type="text"
                                name="fullname_en" id="fullname_en" value="<?php echo e(old('fullname_en', '')); ?>" required>
                            <?php if($errors->has('fullname_en')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('fullname_en')); ?>

                                </div>
                            <?php endif; ?>
                            <span class="help-block"><?php echo e(trans('cruds.employeeList.fields.fullname_en_helper')); ?></span>
                        </div>
                        <div class="form-group">
                            <label class="required"
                                for="employeeid"><?php echo e(trans('cruds.employeeList.fields.employeeid')); ?></label>
                            <input class="form-control <?php echo e($errors->has('employeeid') ? 'is-invalid' : ''); ?>" type="text"
                                name="employeeid" id="employeeid" value="<?php echo e(old('employeeid', '')); ?>" required>
                            <?php if($errors->has('employeeid')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('employeeid')); ?>

                                </div>
                            <?php endif; ?>
                            <span class="help-block"><?php echo e(trans('cruds.employeeList.fields.employeeid_helper')); ?></span>
                        </div>
                        <div class="form-group">
                            <label for="cadreid"><?php echo e(trans('cruds.employeeList.fields.cadreid')); ?></label>
                            <input class="form-control <?php echo e($errors->has('cadreid') ? 'is-invalid' : ''); ?>" type="text"
                                name="cadreid" id="cadreid" value="<?php echo e(old('cadreid', '')); ?>">
                            <?php if($errors->has('cadreid')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('cadreid')); ?>

                                </div>
                            <?php endif; ?>
                            <span class="help-block"><?php echo e(trans('cruds.employeeList.fields.cadreid_helper')); ?></span>
                        </div>
                        <div class="form-group">
                            <label for="batch_id"><?php echo e(trans('cruds.employeeList.fields.batch')); ?></label>
                            <select class="form-select select2 <?php echo e($errors->has('batch') ? 'is-invalid' : ''); ?>"
                                name="batch_id" id="batch_id">
                                <?php $__currentLoopData = $batches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($id); ?>" <?php echo e(old('batch_id') == $id ? 'selected' : ''); ?>>
                                        <?php echo e($entry); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php if($errors->has('batch')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('batch')); ?>

                                </div>
                            <?php endif; ?>
                            <span class="help-block"><?php echo e(trans('cruds.employeeList.fields.batch_helper')); ?></span>
                        </div>

                        <div class="form-group">
                            <label class="required"
                                for="fname_bn"><?php echo e(trans('cruds.employeeList.fields.fname_bn')); ?></label>
                            <input class="form-control <?php echo e($errors->has('fname_bn') ? 'is-invalid' : ''); ?>" type="text"
                                name="fname_bn" id="fname_bn" value="<?php echo e(old('fname_bn', '')); ?>" required>
                            <?php if($errors->has('fname_bn')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('fname_bn')); ?>

                                </div>
                            <?php endif; ?>
                            <span class="help-block"><?php echo e(trans('cruds.employeeList.fields.fname_bn_helper')); ?></span>
                        </div>
                        <div class="form-group">
                            <label class="required"
                                for="fname_en"><?php echo e(trans('cruds.employeeList.fields.fname_en')); ?></label>
                            <input class="form-control <?php echo e($errors->has('fname_en') ? 'is-invalid' : ''); ?>" type="text"
                                name="fname_en" id="fname_en" value="<?php echo e(old('fname_en', '')); ?>" required>
                            <?php if($errors->has('fname_en')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('fname_en')); ?>

                                </div>
                            <?php endif; ?>
                            <span class="help-block"><?php echo e(trans('cruds.employeeList.fields.fname_en_helper')); ?></span>
                        </div>
                        <div class="form-group">
                            <label class="required"
                                for="mname_bn"><?php echo e(trans('cruds.employeeList.fields.mname_bn')); ?></label>
                            <input class="form-control <?php echo e($errors->has('mname_bn') ? 'is-invalid' : ''); ?>" type="text"
                                name="mname_bn" id="mname_bn" value="<?php echo e(old('mname_bn', '')); ?>" required>
                            <?php if($errors->has('mname_bn')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('mname_bn')); ?>

                                </div>
                            <?php endif; ?>
                            <span class="help-block"><?php echo e(trans('cruds.employeeList.fields.mname_bn_helper')); ?></span>
                        </div>
                        <div class="form-group">
                            <label class="required"
                                for="mname_en"><?php echo e(trans('cruds.employeeList.fields.mname_en')); ?></label>
                            <input class="form-control <?php echo e($errors->has('mname_en') ? 'is-invalid' : ''); ?>" type="text"
                                name="mname_en" id="mname_en" value="<?php echo e(old('mname_en', '')); ?>" required>
                            <?php if($errors->has('mname_en')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('mname_en')); ?>

                                </div>
                            <?php endif; ?>
                            <span class="help-block"><?php echo e(trans('cruds.employeeList.fields.mname_en_helper')); ?></span>
                        </div>
                        <div class="form-group">
                            <label class="required"
                                for="date_of_birth"><?php echo e(trans('cruds.employeeList.fields.date_of_birth')); ?></label>
                            <input
                                class="form-control date___remove <?php echo e($errors->has('date_of_birth') ? 'is-invalid' : ''); ?>"
                                type="date" name="date_of_birth" id="date_of_birth"
                                value="<?php echo e(old('date_of_birth')); ?>" required>
                            <?php if($errors->has('date_of_birth')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('date_of_birth')); ?>

                                </div>
                            <?php endif; ?>
                            <span class="help-block"><?php echo e(trans('cruds.employeeList.fields.date_of_birth_helper')); ?></span>
                        </div>

                        <div class="form-group">
                            <label for="prl_date"><?php echo e(trans('cruds.employeeList.fields.prl_date')); ?></label>
                            <input class="form-control date <?php echo e($errors->has('prl_date') ? 'is-invalid' : ''); ?>"
                                type="text" name="prl_date" id="prl_date" value="<?php echo e(old('prl_date')); ?>" disabled>
                            <?php if($errors->has('prl_date')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('prl_date')); ?>

                                </div>
                            <?php endif; ?>
                            <span class="help-block"><?php echo e(trans('cruds.employeeList.fields.prl_date_helper')); ?></span>
                        </div>
                        <div class="form-group" style="display: none">
                            <label
                                for="birth_certificate_upload"><?php echo e(trans('cruds.employeeList.fields.birth_certificate_upload')); ?></label>
                            <div class="needsclick dropzone <?php echo e($errors->has('birth_certificate_upload') ? 'is-invalid' : ''); ?>"
                                id="birth_certificate_upload-dropzone">
                            </div>
                            <?php if($errors->has('birth_certificate_upload')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('birth_certificate_upload')); ?>

                                </div>
                            <?php endif; ?>
                            <span
                                class="help-block"><?php echo e(trans('cruds.employeeList.fields.birth_certificate_upload_helper')); ?></span>
                        </div>
                    </div>

                </div>
                <h5 class="text-secondary mt-3"> Personel information</h5>
                <div class="card border-secondary border p-4">
                    <div class="row row-cols-3">

                        <div class="form-group">
                            <label for="height"><?php echo e(trans('cruds.employeeList.fields.height')); ?></label>
                            <input class="form-control <?php echo e($errors->has('height') ? 'is-invalid' : ''); ?>" type="text"
                                name="height" id="height" value="<?php echo e(old('height', '')); ?>">
                            <?php if($errors->has('height')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('height')); ?>

                                </div>
                            <?php endif; ?>
                            <span class="help-block"><?php echo e(trans('cruds.employeeList.fields.height_helper')); ?></span>
                        </div>
                        <div class="form-group">
                            <label
                                for="special_identity"><?php echo e(trans('cruds.employeeList.fields.special_identity')); ?></label>
                            <input class="form-control <?php echo e($errors->has('special_identity') ? 'is-invalid' : ''); ?>"
                                type="text" name="special_identity" id="special_identity"
                                value="<?php echo e(old('special_identity', '')); ?>">
                            <?php if($errors->has('special_identity')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('special_identity')); ?>

                                </div>
                            <?php endif; ?>
                            <span
                                class="help-block"><?php echo e(trans('cruds.employeeList.fields.special_identity_helper')); ?></span>
                        </div>
                        <div class="form-group">
                            <label class="required"
                                for="home_district_id"><?php echo e(trans('cruds.employeeList.fields.home_district')); ?></label>
                            <select class="form-control select2 <?php echo e($errors->has('home_district') ? 'is-invalid' : ''); ?>"
                                name="home_district_id" id="home_district_id" required>
                                <?php $__currentLoopData = $home_districts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($id); ?>"
                                        <?php echo e(old('home_district_id') == $id ? 'selected' : ''); ?>>
                                        <?php echo e($entry); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php if($errors->has('home_district')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('home_district')); ?>

                                </div>
                            <?php endif; ?>
                            <span class="help-block"><?php echo e(trans('cruds.employeeList.fields.home_district_helper')); ?></span>
                        </div>
                        <div class="form-group">
                            <label class="required"
                                for="marital_statu_id"><?php echo e(trans('cruds.employeeList.fields.marital_statu')); ?></label>
                            <select class="form-control select2 <?php echo e($errors->has('marital_statu') ? 'is-invalid' : ''); ?>"
                                name="marital_statu_id" id="marital_statu_id" required>
                                <?php $__currentLoopData = $marital_status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($id); ?>"
                                        <?php echo e(old('marital_statu_id') == $id ? 'selected' : ''); ?>>
                                        <?php echo e($entry); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php if($errors->has('marital_statu')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('marital_statu')); ?>

                                </div>
                            <?php endif; ?>
                            <span class="help-block"><?php echo e(trans('cruds.employeeList.fields.marital_statu_helper')); ?></span>
                        </div>
                        <div class="form-group">
                            <label class="required"
                                for="gender_id"><?php echo e(trans('cruds.employeeList.fields.gender')); ?></label>
                            <select class="form-control select2 <?php echo e($errors->has('gender') ? 'is-invalid' : ''); ?>"
                                name="gender_id" id="gender_id" required>
                                <?php $__currentLoopData = $genders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($id); ?>" <?php echo e(old('gender_id') == $id ? 'selected' : ''); ?>>
                                        <?php echo e($entry); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php if($errors->has('gender')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('gender')); ?>

                                </div>
                            <?php endif; ?>
                            <span class="help-block"><?php echo e(trans('cruds.employeeList.fields.gender_helper')); ?></span>
                        </div>
                        <div class="form-group">
                            <label class="required"
                                for="religion_id"><?php echo e(trans('cruds.employeeList.fields.religion')); ?></label>
                            <select class="form-control select2 <?php echo e($errors->has('religion') ? 'is-invalid' : ''); ?>"
                                name="religion_id" id="religion_id" required>
                                <?php $__currentLoopData = $religions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($id); ?>"
                                        <?php echo e(old('religion_id') == $id ? 'selected' : ''); ?>>
                                        <?php echo e($entry); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php if($errors->has('religion')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('religion')); ?>

                                </div>
                            <?php endif; ?>
                            <span class="help-block"><?php echo e(trans('cruds.employeeList.fields.religion_helper')); ?></span>
                        </div>
                        <div class="form-group">
                            <label class="required"
                                for="blood_group_id"><?php echo e(trans('cruds.employeeList.fields.blood_group')); ?></label>
                            <select class="form-control select2 <?php echo e($errors->has('blood_group') ? 'is-invalid' : ''); ?>"
                                name="blood_group_id" id="blood_group_id" required>
                                <?php $__currentLoopData = $blood_groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($id); ?>"
                                        <?php echo e(old('blood_group_id') == $id ? 'selected' : ''); ?>>
                                        <?php echo e($entry); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php if($errors->has('blood_group')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('blood_group')); ?>

                                </div>
                            <?php endif; ?>
                            <span class="help-block"><?php echo e(trans('cruds.employeeList.fields.blood_group_helper')); ?></span>
                        </div>


                        <div class="form-group">
                            <label for="email"><?php echo e(trans('cruds.employeeList.fields.email')); ?></label>
                            <input class="form-control <?php echo e($errors->has('email') ? 'is-invalid' : ''); ?>" type="email"
                                name="email" id="email" value="<?php echo e(old('email')); ?>">
                            <?php if($errors->has('email')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('email')); ?>

                                </div>
                            <?php endif; ?>
                            <span class="help-block"><?php echo e(trans('cruds.employeeList.fields.email_helper')); ?></span>
                        </div>
                        <div class="form-group">
                            <label class="required"
                                for="mobile_number"><?php echo e(trans('cruds.employeeList.fields.mobile_number')); ?></label>
                            <input class="form-control <?php echo e($errors->has('mobile_number') ? 'is-invalid' : ''); ?>"
                                type="text" name="mobile_number" id="mobile_number"
                                value="<?php echo e(old('mobile_number', '')); ?>" required>
                            <?php if($errors->has('mobile_number')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('mobile_number')); ?>

                                </div>
                            <?php endif; ?>
                            <span class="help-block"><?php echo e(trans('cruds.employeeList.fields.mobile_number_helper')); ?></span>
                        </div>

                    </div>
                </div>

                <h5 class="text-secondary mt-3"> Personal</h5>
                <div class="card border-secondary border p-4">
                    <div class="row row-cols-3">

                        <div class="form-group">
                            <label class="required" for="nid"><?php echo e(trans('cruds.employeeList.fields.nid')); ?></label>
                            <input class="form-control <?php echo e($errors->has('nid') ? 'is-invalid' : ''); ?>" type="number"
                                name="nid" id="nid" value="<?php echo e(old('nid', '')); ?>" step="1" required>
                            <?php if($errors->has('nid')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('nid')); ?>

                                </div>
                            <?php endif; ?>
                            <span class="help-block"><?php echo e(trans('cruds.employeeList.fields.nid_helper')); ?></span>
                        </div>
                        <div class="form-group">
                            <label for="nid_upload"><?php echo e(trans('cruds.employeeList.fields.nid_upload')); ?></label>
                            <div class="needsclick dropzone <?php echo e($errors->has('nid_upload') ? 'is-invalid' : ''); ?>"
                                id="nid_upload-dropzone">
                            </div>
                            <?php if($errors->has('nid_upload')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('nid_upload')); ?>

                                </div>
                            <?php endif; ?>
                            <span class="help-block"><?php echo e(trans('cruds.employeeList.fields.nid_upload_helper')); ?></span>
                        </div>



                        <div class="form-group has_passport_group">
                            <label for="has_passport"><?php echo e(trans('cruds.employeeList.fields.has_passport')); ?></label>
                            <select class="form-control" id="has_passport">
                                <option value="no">No</option>
                                <option value="yes">Yes</option>
                            </select>
                        </div>

                        <div class="form-group passport_fields" style="display: none;">
                            <label for="passport"><?php echo e(trans('cruds.employeeList.fields.passport')); ?></label>
                            <input class="form-control <?php echo e($errors->has('passport') ? 'is-invalid' : ''); ?>"
                                type="text" name="passport" id="passport" value="<?php echo e(old('passport', '')); ?>">
                            <?php if($errors->has('passport')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('passport')); ?>

                                </div>
                            <?php endif; ?>
                            <span class="help-block"><?php echo e(trans('cruds.employeeList.fields.passport_helper')); ?></span>
                        </div>

                        <div class="form-group passport_upload" style="display: none;">
                            <label for="passport_upload"><?php echo e(trans('cruds.employeeList.fields.passport_upload')); ?></label>
                            <div class="needsclick dropzone <?php echo e($errors->has('passport_upload') ? 'is-invalid' : ''); ?>"
                                id="passport_upload-dropzone">
                            </div>
                            <?php if($errors->has('passport_upload')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('passport_upload')); ?>

                                </div>
                            <?php endif; ?>
                            <span
                                class="help-block"><?php echo e(trans('cruds.employeeList.fields.passport_upload_helper')); ?></span>
                        </div>


                        <div class="form-group has_license_group">
                            <label for="has_license"><?php echo e(trans('cruds.employeeList.fields.has_license')); ?></label>
                            <select class="form-control" id="has_license">
                                <option value="no">No</option>
                                <option value="yes">Yes</option>
                            </select>
                        </div>

                        <div class="form-group license_fields" style="display: none;">
                            <label class="required"
                                for="license_type_id"><?php echo e(trans('cruds.employeeList.fields.license_type')); ?></label>
                            <select class="form-control select2 <?php echo e($errors->has('license_type') ? 'is-invalid' : ''); ?>"
                                name="license_type_id" id="license_type_id" required>
                                <?php $__currentLoopData = $license_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($id); ?>"
                                        <?php echo e(old('license_type_id') == $id ? 'selected' : ''); ?>><?php echo e($entry); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php if($errors->has('license_type')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('license_type')); ?>

                                </div>
                            <?php endif; ?>
                            <span class="help-block"><?php echo e(trans('cruds.employeeList.fields.license_type_helper')); ?></span>
                        </div>

                        <div class="form-group license_upload" style="display: none;">
                            <label for="license_upload"><?php echo e(trans('cruds.employeeList.fields.license_upload')); ?></label>
                            <div class="needsclick dropzone <?php echo e($errors->has('license_upload') ? 'is-invalid' : ''); ?>"
                                id="license_upload-dropzone">
                            </div>
                            <?php if($errors->has('license_upload')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('license_upload')); ?>

                                </div>
                            <?php endif; ?>
                            <span
                                class="help-block"><?php echo e(trans('cruds.employeeList.fields.license_upload_helper')); ?></span>
                        </div>

                    </div>
                </div>

                <h5 class="text-secondary mt-3"> First joining information</h5>
                <div class="card border-secondary border p-4">
                    <div class="row row-cols-3">
                        <div class="form-group">
                            <label class="required"
                                for="projectrevenue_id"><?php echo e(trans('cruds.employeeList.fields.projectrevenue')); ?></label>
                            <select class="form-select select2 <?php echo e($errors->has('projectrevenue') ? 'is-invalid' : ''); ?>"
                                name="projectrevenue_id" id="projectrevenue_id" required>
                                <?php $__currentLoopData = $projectrevenues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($id); ?>"
                                        <?php echo e(old('projectrevenue_id') == $id ? 'selected' : ''); ?>><?php echo e($entry); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php if($errors->has('projectrevenue')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('projectrevenue')); ?>

                                </div>
                            <?php endif; ?>
                            <span
                                class="help-block"><?php echo e(trans('cruds.employeeList.fields.projectrevenue_helper')); ?></span>
                        </div>


                        <div class="form-group projectlist" style="display:none">
                            <label for="project_id"><?php echo e(trans('cruds.employeeList.fields.project')); ?></label>
                            <select class="form-control select2 <?php echo e($errors->has('project') ? 'is-invalid' : ''); ?>"
                                name="project_id" id="project_id">
                                <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($id); ?>"
                                        <?php echo e(old('project_id') == $id ? 'selected' : ''); ?>><?php echo e($entry); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php if($errors->has('project')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('project')); ?>

                                </div>
                            <?php endif; ?>
                            <span class="help-block"><?php echo e(trans('cruds.employeeList.fields.project_helper')); ?></span>
                        </div>


                        <div class="form-group notgotproject" style="display: none">
                            <label
                                for="departmental_exam_id"><?php echo e(trans('cruds.employeeList.fields.departmental_exam')); ?></label>
                            <select
                                class="form-control select2 <?php echo e($errors->has('departmental_exam') ? 'is-invalid' : ''); ?>"
                                name="departmental_exam_id" id="departmental_exam_id">
                                <?php $__currentLoopData = $departmental_exams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($id); ?>"
                                        <?php echo e(old('departmental_exam_id') == $id ? 'selected' : ''); ?>><?php echo e($entry); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php if($errors->has('departmental_exam')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('departmental_exam')); ?>

                                </div>
                            <?php endif; ?>
                            <span
                                class="help-block"><?php echo e(trans('cruds.employeeList.fields.departmental_exam_helper')); ?></span>
                        </div>
                        <div class="form-group notgotproject" style="display: none">
                            <label
                                for="joiningexaminfo_id"><?php echo e(trans('cruds.employeeList.fields.joiningexaminfo')); ?></label>
                            <select class="form-select <?php echo e($errors->has('joiningexaminfo') ? 'is-invalid' : ''); ?>"
                                name="joiningexaminfo_id" id="joiningexaminfo_id">
                                <?php $__currentLoopData = $joiningexaminfos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($id); ?>"
                                        <?php echo e(old('joiningexaminfo_id') == $id ? 'selected' : ''); ?>><?php echo e($entry); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php if($errors->has('joiningexaminfo')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('joiningexaminfo')); ?>

                                </div>
                            <?php endif; ?>
                            <span
                                class="help-block"><?php echo e(trans('cruds.employeeList.fields.joiningexaminfo_helper')); ?></span>
                        </div>


                        <div class="form-group notgotproject" style="display: none">
                            <label
                                for="certificateupload"><?php echo e(trans('cruds.employeeList.fields.departmental_exam')); ?></label>
                            <select class="form-select" name="certificateupload" id="certificateupload">
                                <option value="NO" <?php echo e(old('certificateupload') == 'NO' ? 'selected' : ''); ?>>NO
                                </option>
                                <option value="Yes" <?php echo e(old('certificateupload') == 'Yes' ? 'selected' : ''); ?>>Yes
                                </option>
                            </select>
                        </div>

                        <div class="form-group certificate_upload" style="display: none;">
                            <label
                                for="certificate_upload"><?php echo e(trans('cruds.employeeList.fields.certificate_upload')); ?></label>
                            <div class="needsclick dropzone <?php echo e($errors->has('certificate_upload') ? 'is-invalid' : ''); ?>"
                                id="certificate_upload-dropzone">
                            </div>
                            <?php if($errors->has('certificate_upload')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('certificate_upload')); ?>

                                </div>
                            <?php endif; ?>
                            <span
                                class="help-block"><?php echo e(trans('cruds.employeeList.fields.certificate_upload_helper')); ?></span>
                        </div>


                        <div class="form-group">
                            <label for="grade_id"><?php echo e(trans('cruds.employeeList.fields.grade')); ?></label>
                            <select class="form-control select2 <?php echo e($errors->has('grade') ? 'is-invalid' : ''); ?>"
                                name="grade_id" id="grade_id">
                                <?php $__currentLoopData = $grades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($id); ?>" <?php echo e(old('grade_id') == $id ? 'selected' : ''); ?>>
                                        <?php echo e($entry); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php if($errors->has('grade')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('grade')); ?>

                                </div>
                            <?php endif; ?>
                            <span class="help-block"><?php echo e(trans('cruds.employeeList.fields.grade_helper')); ?></span>
                        </div>
                        <div class="form-group">
                            <label class="required"
                                for="fjoining_date"><?php echo e(trans('cruds.employeeList.fields.fjoining_date')); ?></label>
                            <input class="form-control date <?php echo e($errors->has('fjoining_date') ? 'is-invalid' : ''); ?>"
                                type="text" name="fjoining_date" id="fjoining_date"
                                value="<?php echo e(old('fjoining_date')); ?>" required>
                            <?php if($errors->has('fjoining_date')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('fjoining_date')); ?>

                                </div>
                            <?php endif; ?>
                            <span class="help-block"><?php echo e(trans('cruds.employeeList.fields.fjoining_date_helper')); ?></span>
                        </div>


                        


                        <div class="form-group project" style="display: none;">
                            <label
                                for="date_of_regularization"><?php echo e(trans('cruds.employeeList.fields.date_of_regularization')); ?></label>
                            <input
                                class="form-control date <?php echo e($errors->has('date_of_regularization') ? 'is-invalid' : ''); ?>"
                                type="text" name="date_of_regularization" id="date_of_regularization"
                                value="<?php echo e(old('date_of_regularization')); ?>">
                            <?php if($errors->has('date_of_regularization')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('date_of_regularization')); ?>

                                </div>
                            <?php endif; ?>
                            <span
                                class="help-block"><?php echo e(trans('cruds.employeeList.fields.date_of_regularization_helper')); ?></span>
                        </div>
                        <div class="form-group project" style="display: none;">
                            <label
                                for="regularization_issue_date"><?php echo e(trans('cruds.employeeList.fields.regularization_issue_date')); ?></label>
                            <input
                                class="form-control date <?php echo e($errors->has('regularization_issue_date') ? 'is-invalid' : ''); ?>"
                                type="text" name="regularization_issue_date" id="regularization_issue_date"
                                value="<?php echo e(old('regularization_issue_date')); ?>">
                            <?php if($errors->has('regularization_issue_date')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('regularization_issue_date')); ?>

                                </div>
                            <?php endif; ?>
                            <span
                                class="help-block"><?php echo e(trans('cruds.employeeList.fields.regularization_issue_date_helper')); ?></span>
                        </div>
                    </div>
                </div>

                <div class="card border-secondary border p-4">
                    <div class="row row-cols-3">
                        <div class="form-group">
                            <label
                                for="first_joining_office_name"><?php echo e(trans('cruds.employeeList.fields.first_joining_office_name')); ?></label>
                            <input
                                class="form-control <?php echo e($errors->has('first_joining_office_name') ? 'is-invalid' : ''); ?>"
                                type="text" name="first_joining_office_name" id="first_joining_office_name"
                                value="<?php echo e(old('first_joining_office_name', '')); ?>">
                            <?php if($errors->has('first_joining_office_name')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('first_joining_office_name')); ?>

                                </div>
                            <?php endif; ?>
                            <span
                                class="help-block"><?php echo e(trans('cruds.employeeList.fields.first_joining_office_name_helper')); ?></span>
                        </div>
                        <div class="form-group">
                            <label
                                for="first_joining_g_o_date"><?php echo e(trans('cruds.employeeList.fields.first_joining_g_o_date')); ?></label>
                            <input
                                class="form-control date <?php echo e($errors->has('first_joining_g_o_date') ? 'is-invalid' : ''); ?>"
                                type="text" name="first_joining_g_o_date" id="first_joining_g_o_date"
                                value="<?php echo e(old('first_joining_g_o_date')); ?>">
                            <?php if($errors->has('first_joining_g_o_date')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('first_joining_g_o_date')); ?>

                                </div>
                            <?php endif; ?>
                            <span
                                class="help-block"><?php echo e(trans('cruds.employeeList.fields.first_joining_g_o_date_helper')); ?></span>
                        </div>
                        <div class="form-group">
                            <label
                                for="first_joining_memo_no"><?php echo e(trans('cruds.employeeList.fields.first_joining_memo_no')); ?></label>
                            <input class="form-control <?php echo e($errors->has('first_joining_memo_no') ? 'is-invalid' : ''); ?>"
                                type="text" name="first_joining_memo_no" id="first_joining_memo_no"
                                value="<?php echo e(old('first_joining_memo_no', '')); ?>">
                            <?php if($errors->has('first_joining_memo_no')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('first_joining_memo_no')); ?>

                                </div>
                            <?php endif; ?>
                            <span
                                class="help-block"><?php echo e(trans('cruds.employeeList.fields.first_joining_memo_no_helper')); ?></span>
                        </div>
                        <div class="form-group">
                            <label
                                for="first_joining_order"><?php echo e(trans('cruds.employeeList.fields.first_joining_order')); ?></label>
                            <div class="needsclick dropzone <?php echo e($errors->has('first_joining_order') ? 'is-invalid' : ''); ?>"
                                id="first_joining_order-dropzone">
                            </div>
                            <?php if($errors->has('first_joining_order')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('first_joining_order')); ?>

                                </div>
                            <?php endif; ?>
                            <span
                                class="help-block"><?php echo e(trans('cruds.employeeList.fields.first_joining_order_helper')); ?></span>
                        </div>
                        <div class="form-group">
                            <label for="fjoining_letter"><?php echo e(trans('cruds.employeeList.fields.fjoining_letter')); ?></label>
                            <div class="needsclick dropzone <?php echo e($errors->has('fjoining_letter') ? 'is-invalid' : ''); ?>"
                                id="fjoining_letter-dropzone">
                            </div>
                            <?php if($errors->has('fjoining_letter')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('fjoining_letter')); ?>

                                </div>
                            <?php endif; ?>
                            <span
                                class="help-block"><?php echo e(trans('cruds.employeeList.fields.fjoining_letter_helper')); ?></span>
                        </div>
                        <div class="form-group">
                            <label for="date_of_gazette"><?php echo e(trans('cruds.employeeList.fields.date_of_gazette')); ?></label>
                            <input class="form-control date <?php echo e($errors->has('date_of_gazette') ? 'is-invalid' : ''); ?>"
                                type="text" name="date_of_gazette" id="date_of_gazette"
                                value="<?php echo e(old('date_of_gazette')); ?>">
                            <?php if($errors->has('date_of_gazette')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('date_of_gazette')); ?>

                                </div>
                            <?php endif; ?>
                            <span
                                class="help-block"><?php echo e(trans('cruds.employeeList.fields.date_of_gazette_helper')); ?></span>
                        </div>
                        <div class="form-group">
                            <label
                                for="date_of_gazette_if_any"><?php echo e(trans('cruds.employeeList.fields.date_of_gazette_if_any')); ?></label>
                            <div class="needsclick dropzone <?php echo e($errors->has('date_of_gazette_if_any') ? 'is-invalid' : ''); ?>"
                                id="date_of_gazette_if_any-dropzone">
                            </div>
                            <?php if($errors->has('date_of_gazette_if_any')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('date_of_gazette_if_any')); ?>

                                </div>
                            <?php endif; ?>
                            <span
                                class="help-block"><?php echo e(trans('cruds.employeeList.fields.date_of_gazette_if_any_helper')); ?></span>
                        </div>

                        <div class="form-group">
                            <label
                                for="regularization_office_orde_go"><?php echo e(trans('cruds.employeeList.fields.regularization_office_orde_go')); ?></label>
                            <div class="needsclick dropzone <?php echo e($errors->has('regularization_office_orde_go') ? 'is-invalid' : ''); ?>"
                                id="regularization_office_orde_go-dropzone">
                            </div>
                            <?php if($errors->has('regularization_office_orde_go')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('regularization_office_orde_go')); ?>

                                </div>
                            <?php endif; ?>
                            <span
                                class="help-block"><?php echo e(trans('cruds.employeeList.fields.regularization_office_orde_go_helper')); ?></span>
                        </div>
                        <div class="form-group">
                            <label
                                for="date_of_con_serviec"><?php echo e(trans('cruds.employeeList.fields.date_of_con_serviec')); ?></label>
                            <input
                                class="form-control date <?php echo e($errors->has('date_of_con_serviec') ? 'is-invalid' : ''); ?>"
                                type="text" name="date_of_con_serviec" id="date_of_con_serviec"
                                value="<?php echo e(old('date_of_con_serviec')); ?>">
                            <?php if($errors->has('date_of_con_serviec')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('date_of_con_serviec')); ?>

                                </div>
                            <?php endif; ?>
                            <span
                                class="help-block"><?php echo e(trans('cruds.employeeList.fields.date_of_con_serviec_helper')); ?></span>
                        </div>
                        <div class="form-group">
                            <label
                                for="confirmation_in_service"><?php echo e(trans('cruds.employeeList.fields.confirmation_in_service')); ?></label>
                            <div class="needsclick dropzone <?php echo e($errors->has('confirmation_in_service') ? 'is-invalid' : ''); ?>"
                                id="confirmation_in_service-dropzone">
                            </div>
                            <?php if($errors->has('confirmation_in_service')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('confirmation_in_service')); ?>

                                </div>
                            <?php endif; ?>
                            <span
                                class="help-block"><?php echo e(trans('cruds.employeeList.fields.confirmation_in_service_helper')); ?></span>
                        </div>
                        

                        <div class="form-group">
                            <label class="required"
                                for="quota_id"><?php echo e(trans('cruds.employeeList.fields.quota')); ?></label>
                            <select class="form-select <?php echo e($errors->has('quota') ? 'is-invalid' : ''); ?>" name="quota_id"
                                id="quota_id">
                                <?php $__currentLoopData = $quotas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($id); ?>" <?php echo e(old('quota_id') == $id ? 'selected' : ''); ?>>
                                        <?php echo e($entry); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <option value="500" <?php echo e(old('quota_id') == 500 ? 'selected' : ''); ?>>Freedom fighter
                                </option>
                            </select>
                            <?php if($errors->has('quota')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('quota')); ?>

                                </div>
                            <?php endif; ?>
                            <span class="help-block"><?php echo e(trans('cruds.employeeList.fields.quota_helper')); ?></span>
                        </div>

                        <div id="freedomfighter_field" style="display: none;">
                            <div class="form-group">
                                <label
                                    for="freedomfighter"><?php echo e(trans('cruds.employeeList.fields.freedomfighter')); ?></label>


                                <select class="form-select <?php echo e($errors->has('freedomfighter') ? 'is-invalid' : ''); ?>"
                                    name="freedomfighter" id="freedomfighter">

                                    <option value="Himself" <?php echo e(old('freedomfighter') == 'Himself' ? 'selected' : ''); ?>>
                                        Himself</option>
                                    <option value="Father" <?php echo e(old('freedomfighter') == 'Father' ? 'selected' : ''); ?>>
                                        Father</option>
                                    <option value="Grandfather"
                                        <?php echo e(old('freedomfighter') == 'Grandfather' ? 'selected' : ''); ?>>Grandfather
                                    </option>
                                </select>


                                <?php if($errors->has('freedomfighter')): ?>
                                    <div class="invalid-feedback">
                                        <?php echo e($errors->first('freedomfighter')); ?>

                                    </div>
                                <?php endif; ?>
                                <span
                                    class="help-block"><?php echo e(trans('cruds.employeeList.fields.freedomfighter_helper')); ?></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label
                                for="electric_signature"><?php echo e(trans('cruds.employeeList.fields.electric_signature')); ?></label>
                            <div class="needsclick dropzone <?php echo e($errors->has('electric_signature') ? 'is-invalid' : ''); ?>"
                                id="electric_signature-dropzone">
                            </div>
                            <?php if($errors->has('electric_signature')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('electric_signature')); ?>

                                </div>
                            <?php endif; ?>
                            <span
                                class="help-block"><?php echo e(trans('cruds.employeeList.fields.electric_signature_helper')); ?></span>
                        </div>
                        <div class="form-group">
                            <label for="employee_photo"><?php echo e(trans('cruds.employeeList.fields.employee_photo')); ?></label>
                            <div class="needsclick dropzone <?php echo e($errors->has('employee_photo') ? 'is-invalid' : ''); ?>"
                                id="employee_photo-dropzone">
                            </div>
                            <?php if($errors->has('employee_photo')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('employee_photo')); ?>

                                </div>
                            <?php endif; ?>
                            <span
                                class="help-block"><?php echo e(trans('cruds.employeeList.fields.employee_photo_helper')); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form-group my-2">
                    <button class="btn btn-lg btn-success w-100 px-5" type="submit">
                        <?php echo e(trans('global.save')); ?>

                    </button>
                </div>
            </form>
        </div>





    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    
    <!-- Include flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <!-- Include flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            flatpickr("#date_of_birth", {
                dateFormat: "d/m/Y",
                onChange: function(selectedDates, dateStr, instance) {
                    const dateOfBirth = selectedDates[0];

                    if (dateOfBirth) {
                        const prlDate = new Date(dateOfBirth);
                        prlDate.setFullYear(prlDate.getFullYear() + 59);
                        prlDate.setDate(prlDate.getDate() - 1); // Last day before turning 59

                        const formattedPrlDate = flatpickr.formatDate(prlDate, "d/m/Y");
                        document.getElementById('prl_date').value = formattedPrlDate;
                    } else {
                        document.getElementById('prl_date').value =
                            ''; // Clear PRL date if date_of_birth is invalid
                    }
                }
            });

            flatpickr("#prl_date", {
                dateFormat: "d/m/Y"
            });

            document.getElementById('employee-form').addEventListener('submit', function() {
                const dateOfBirthInput = document.getElementById('date_of_birth');
                const prlDateInput = document.getElementById('prl_date');

                if (dateOfBirthInput.value) {
                    const dateParts = dateOfBirthInput.value.split('/');
                    dateOfBirthInput.value = `${dateParts[2]}-${dateParts[1]}-${dateParts[0]}`;
                }

                if (prlDateInput.value) {
                    const dateParts = prlDateInput.value.split('/');
                    prlDateInput.value = `${dateParts[2]}-${dateParts[1]}-${dateParts[0]}`;
                }
            });
        });
    </script>


    <script>
        Dropzone.options.birthCertificateUploadDropzone = {
            url: '<?php echo e(route('admin.employee-lists.storeMedia')); ?>',
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
                $('form').find('input[name="birth_certificate_upload"]').remove()
                $('form').append('<input type="hidden" name="birth_certificate_upload" value="' + response.name +
                    '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="birth_certificate_upload"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                <?php if(isset($employeeList) && $employeeList->birth_certificate_upload): ?>
                    var file = <?php echo json_encode($employeeList->birth_certificate_upload); ?>

                    this.options.addedfile.call(this, file)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="birth_certificate_upload" value="' + file
                        .file_name + '">')
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
    <script>
        Dropzone.options.nidUploadDropzone = {
            url: '<?php echo e(route('admin.employee-lists.storeMedia')); ?>',
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
                $('form').find('input[name="nid_upload"]').remove()
                $('form').append('<input type="hidden" name="nid_upload" value="' + response.name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="nid_upload"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                <?php if(isset($employeeList) && $employeeList->nid_upload): ?>
                    var file = <?php echo json_encode($employeeList->nid_upload); ?>

                    this.options.addedfile.call(this, file)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="nid_upload" value="' + file.file_name + '">')
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
    <script>
        Dropzone.options.passportUploadDropzone = {
            url: '<?php echo e(route('admin.employee-lists.storeMedia')); ?>',
            maxFilesize: 1, // MB
            maxFiles: 1,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "<?php echo e(csrf_token()); ?>"
            },
            params: {
                size: 1
            },
            success: function(file, response) {
                $('form').find('input[name="passport_upload"]').remove()
                $('form').append('<input type="hidden" name="passport_upload" value="' + response.name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="passport_upload"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                <?php if(isset($employeeList) && $employeeList->passport_upload): ?>
                    var file = <?php echo json_encode($employeeList->passport_upload); ?>

                    this.options.addedfile.call(this, file)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="passport_upload" value="' + file.file_name + '">')
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
    <script>
        Dropzone.options.licenseUploadDropzone = {
            url: '<?php echo e(route('admin.employee-lists.storeMedia')); ?>',
            maxFilesize: 1, // MB
            maxFiles: 1,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "<?php echo e(csrf_token()); ?>"
            },
            params: {
                size: 1
            },
            success: function(file, response) {
                $('form').find('input[name="license_upload"]').remove()
                $('form').append('<input type="hidden" name="license_upload" value="' + response.name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="license_upload"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                <?php if(isset($employeeList) && $employeeList->license_upload): ?>
                    var file = <?php echo json_encode($employeeList->license_upload); ?>

                    this.options.addedfile.call(this, file)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="license_upload" value="' + file.file_name + '">')
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
    <script>
        Dropzone.options.firstJoiningOrderDropzone = {
            url: '<?php echo e(route('admin.employee-lists.storeMedia')); ?>',
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
                $('form').find('input[name="first_joining_order"]').remove()
                $('form').append('<input type="hidden" name="first_joining_order" value="' + response.name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="first_joining_order"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                <?php if(isset($employeeList) && $employeeList->first_joining_order): ?>
                    var file = <?php echo json_encode($employeeList->first_joining_order); ?>

                    this.options.addedfile.call(this, file)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="first_joining_order" value="' + file.file_name +
                        '">')
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
    <script>
        Dropzone.options.fjoiningLetterDropzone = {
            url: '<?php echo e(route('admin.employee-lists.storeMedia')); ?>',
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
                $('form').find('input[name="fjoining_letter"]').remove()
                $('form').append('<input type="hidden" name="fjoining_letter" value="' + response.name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="fjoining_letter"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                <?php if(isset($employeeList) && $employeeList->fjoining_letter): ?>
                    var file = <?php echo json_encode($employeeList->fjoining_letter); ?>

                    this.options.addedfile.call(this, file)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="fjoining_letter" value="' + file.file_name + '">')
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
    <script>
        Dropzone.options.dateOfGazetteIfAnyDropzone = {
            url: '<?php echo e(route('admin.employee-lists.storeMedia')); ?>',
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
                $('form').find('input[name="date_of_gazette_if_any"]').remove()
                $('form').append('<input type="hidden" name="date_of_gazette_if_any" value="' + response.name +
                    '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="date_of_gazette_if_any"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                <?php if(isset($employeeList) && $employeeList->date_of_gazette_if_any): ?>
                    var file = <?php echo json_encode($employeeList->date_of_gazette_if_any); ?>

                    this.options.addedfile.call(this, file)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="date_of_gazette_if_any" value="' + file.file_name +
                        '">')
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
    <script>
        Dropzone.options.regularizationOfficeOrdeGoDropzone = {
            url: '<?php echo e(route('admin.employee-lists.storeMedia')); ?>',
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
                $('form').find('input[name="regularization_office_orde_go"]').remove()
                $('form').append('<input type="hidden" name="regularization_office_orde_go" value="' + response
                    .name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="regularization_office_orde_go"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                <?php if(isset($employeeList) && $employeeList->regularization_office_orde_go): ?>
                    var file = <?php echo json_encode($employeeList->regularization_office_orde_go); ?>

                    this.options.addedfile.call(this, file)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="regularization_office_orde_go" value="' + file
                        .file_name + '">')
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
    <script>
        Dropzone.options.confirmationInServiceDropzone = {
            url: '<?php echo e(route('admin.employee-lists.storeMedia')); ?>',
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
                $('form').find('input[name="confirmation_in_service"]').remove()
                $('form').append('<input type="hidden" name="confirmation_in_service" value="' + response.name +
                    '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="confirmation_in_service"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                <?php if(isset($employeeList) && $employeeList->confirmation_in_service): ?>
                    var file = <?php echo json_encode($employeeList->confirmation_in_service); ?>

                    this.options.addedfile.call(this, file)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="confirmation_in_service" value="' + file
                        .file_name + '">')
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
    <script>
        Dropzone.options.electricSignatureDropzone = {
            url: '<?php echo e(route('admin.employee-lists.storeMedia')); ?>',
            maxFilesize: 2, // MB
            acceptedFiles: '.jpeg,.jpg,.png,.gif',
            maxFiles: 1,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "<?php echo e(csrf_token()); ?>"
            },
            params: {
                size: 2,
                width: 4096,
                height: 4096
            },
            success: function(file, response) {
                $('form').find('input[name="electric_signature"]').remove()
                $('form').append('<input type="hidden" name="electric_signature" value="' + response.name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="electric_signature"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                <?php if(isset($employeeList) && $employeeList->electric_signature): ?>
                    var file = <?php echo json_encode($employeeList->electric_signature); ?>

                    this.options.addedfile.call(this, file)
                    this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="electric_signature" value="' + file.file_name +
                        '">')
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
    <script>
        Dropzone.options.employeePhotoDropzone = {
            url: '<?php echo e(route('admin.employee-lists.storeMedia')); ?>',
            maxFilesize: 2, // MB
            acceptedFiles: '.jpeg,.jpg,.png,.gif',
            maxFiles: 1,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "<?php echo e(csrf_token()); ?>"
            },
            params: {
                size: 2,
                width: 4096,
                height: 4096
            },
            success: function(file, response) {
                $('form').find('input[name="employee_photo"]').remove()
                $('form').append('<input type="hidden" name="employee_photo" value="' + response.name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="employee_photo"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                <?php if(isset($employeeList) && $employeeList->employee_photo): ?>
                    var file = <?php echo json_encode($employeeList->employee_photo); ?>

                    this.options.addedfile.call(this, file)
                    this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="employee_photo" value="' + file.file_name + '">')
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

    <script>
        document.getElementById('has_license').addEventListener('change', function() {
            var licenseFields = document.getElementById('license_fields');
            if (this.value === 'yes') {
                licenseFields.style.display = 'block';
            } else {
                licenseFields.style.display = 'none';
            }
        });
    </script>

    <script>
        document.getElementById('has_passport').addEventListener('change', function() {
            var passportFields = document.getElementById('passport_fields');
            if (this.value === 'yes') {
                passportFields.style.display = 'block';
            } else {
                passportFields.style.display = 'none';
            }
        });
    </script>

    <script>
        document.getElementById('quota_id').addEventListener('change', function() {
            var freedomfighterField = document.getElementById('freedomfighter_field');
            if (this.value === '500') {
                freedomfighterField.style.display = 'block';
            } else {
                freedomfighterField.style.display = 'none';
            }
        });

        // Trigger change event on page load to handle pre-selected value
        document.getElementById('quota_id').dispatchEvent(new Event('change'));
    </script>
    <script>
        Dropzone.options.certificateUploadDropzone = {
            url: '<?php echo e(route('admin.employee-lists.storeMedia')); ?>',
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
                $('form').find('input[name="certificate_upload"]').remove()
                $('form').append('<input type="hidden" name="certificate_upload" value="' + response.name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="certificate_upload"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                <?php if(isset($employeeList) && $employeeList->certificate_upload): ?>
                    var file = <?php echo json_encode($employeeList->certificate_upload); ?>

                    this.options.addedfile.call(this, file)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="certificate_upload" value="' + file.file_name +
                        '">')
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


    <script>
        $(document).ready(function() {
            function toggleFields() {
                var selectedValue = $('#projectrevenue_id').val();
                if (selectedValue ==
                    '1') { // Replace '1' with the actual value that should trigger the fields to show
                    $('.form-group.projectlist').show();
                    $('.form-group.Project').show();
                    $('.form-group.notgotproject').hide();
                } else {
                    $('.form-group.projectlist').hide();
                    $('.form-group.notgotproject').show();
                    $('.form-group.project').hide();
                }
            }

            // Initialize select2
            //$('.select2').select2();

            // Attach change event listener
            $('#projectrevenue_id').change(function() {
                toggleFields();
            });

            // Initial check in case the dropdown has a preselected value
            // toggleFields();
        });
    </script>


    <script>
        document.getElementById('has_passport').addEventListener('change', function() {
            var passportFields = document.querySelector('.passport_fields');
            var passportUpload = document.querySelector('.passport_upload');
            if (this.value === 'yes') {
                passportFields.style.display = 'block';
                passportUpload.style.display = 'block';
            } else {
                passportFields.style.display = 'none';
                passportUpload.style.display = 'none';
            }
        });

        document.getElementById('has_license').addEventListener('change', function() {
            var licenseFields = document.querySelector('.license_fields');
            var licenseUpload = document.querySelector('.license_upload');
            if (this.value === 'yes') {
                licenseFields.style.display = 'block';
                licenseUpload.style.display = 'block';
            } else {
                licenseFields.style.display = 'none';
                licenseUpload.style.display = 'none';
            }
        });


        document.getElementById('certificateupload').addEventListener('change', function() {
            var certificateUploadFields = document.querySelector('.certificate_upload');
            if (this.value === 'Yes') {
                certificateUploadFields.style.display = 'block';
            } else {
                certificateUploadFields.style.display = 'none';
            }
        });

        // Initial check in case the dropdown has a preselected value
        document.addEventListener('DOMContentLoaded', function() {
            var certificateUploadFields = document.querySelector('.certificate_upload');
            var certificateUploadDropdown = document.getElementById('certificateupload');
            if (certificateUploadDropdown.value === 'Yes') {
                certificateUploadFields.style.display = 'block';
            } else {
                certificateUploadFields.style.display = 'none';
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH J:\2024working\pims2024\pmis\resources\views/admin/employeeLists/create.blade.php ENDPATH**/ ?>