<div class="col-md-4 mt-1 border p-1">

    <?php
        $id = request()->input('id');
    ?>


    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('education_informatione_access')): ?>
            <a href="<?php echo e(route('admin.commonemployeeshow', ['id' => $id])); ?>"
                class="nav-link <?php echo e(request()->is('admin/show-employee') || request()->is('admin/show-employee/*') ? 'c-active' : ''); ?>">
                <?php echo e(trans('cruds.employeeList.title')); ?>

            </a>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('education_informatione_access')): ?>
            <a href="<?php echo e(route('admin.education-informationes.create', ['id' => $id])); ?>"
                class="nav-link <?php echo e(request()->is('admin/education-informationes') || request()->is('admin/education-informationes/*') ? 'c-active' : ''); ?>">

                <?php echo e(trans('cruds.educationInformatione.title')); ?>

            </a>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('professionale_access')): ?>
            <a href="<?php echo e(route('admin.professionales.create', ['id' => $id])); ?>"
                class="nav-link <?php echo e(request()->is('admin/professionales') || request()->is('admin/professionales/*') ? 'c-active' : ''); ?>">
                <?php echo e(trans('cruds.professionale.title')); ?>

            </a>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('addressdetaile_access')): ?>
            <a href="<?php echo e(route('admin.addressdetailes.create', ['id' => $id])); ?>"
                class="nav-link <?php echo e(request()->is('admin/addressdetailes') || request()->is('admin/addressdetailes/*') ? 'c-active' : ''); ?>">
                <?php echo e(trans('cruds.addressdetaile.title')); ?>

            </a>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('emergence_contacte_access')): ?>
            <a href="<?php echo e(route('admin.emergence-contactes.create', ['id' => $id])); ?>"
                class="nav-link <?php echo e(request()->is('admin/emergence-contactes') || request()->is('admin/emergence-contactes/*') ? 'c-active' : ''); ?>">
                <?php echo e(trans('cruds.emergenceContacte.title')); ?>

            </a>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('spouse_informatione_access')): ?>
            <a href="<?php echo e(route('admin.spouse-informationes.create', ['id' => $id])); ?>"
                class="nav-link <?php echo e(request()->is('admin/spouse-informationes') || request()->is('admin/spouse-informationes/*') ? 'c-active' : ''); ?>">
                <?php echo e(trans('cruds.spouseInformatione.title')); ?>

            </a>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('child_access')): ?>
            <a href="<?php echo e(route('admin.children.create', ['id' => $id])); ?>"
                class="nav-link <?php echo e(request()->is('admin/children') || request()->is('admin/children/*') ? 'c-active' : ''); ?>">
                <?php echo e(trans('cruds.child.title')); ?>

            </a>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('job_history_access')): ?>
            <a href="<?php echo e(route('admin.job-histories.create', ['id' => $id])); ?>"
                class="nav-link <?php echo e(request()->is('admin/job-histories') || request()->is('admin/job-histories/*') ? 'c-active' : ''); ?>">
                <?php echo e(trans('cruds.jobHistory.title')); ?>

            </a>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('employee_promotion_access')): ?>
            <a href="<?php echo e(route('admin.employee-promotions.create', ['id' => $id])); ?>"
                class="nav-link <?php echo e(request()->is('admin/employee-promotions') || request()->is('admin/employee-promotions/*') ? 'c-active' : ''); ?>">
                <?php echo e(trans('cruds.employeePromotion.title')); ?>

            </a>
        <?php endif; ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('leave_record_access')): ?>
            <a href="<?php echo e(route('admin.leave-records.create', ['id' => $id])); ?>"
                class="nav-link <?php echo e(request()->is('admin/leave-records') || request()->is('admin/leave-records/*') ? 'c-active' : ''); ?>">
                <?php echo e(trans('cruds.leaveRecord.title')); ?>

            </a>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('service_particular_access')): ?>
            <a href="<?php echo e(route('admin.service-particulars.create', ['id' => $id])); ?>"
                class="nav-link <?php echo e(request()->is('admin/service-particulars') || request()->is('admin/service-particulars/*') ? 'c-active' : ''); ?>">
                <?php echo e(trans('cruds.serviceParticular.title')); ?>

            </a>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('training_access')): ?>
            <a href="<?php echo e(route('admin.trainings.create', ['id' => $id])); ?>"
                class="nav-link <?php echo e(request()->is('admin/trainings') || request()->is('admin/trainings/*') ? 'c-active' : ''); ?>">
                <?php echo e(trans('cruds.training.title')); ?>

            </a>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('travel_record_access')): ?>
            <a href="<?php echo e(route('admin.travel-records.create', ['id' => $id])); ?>"
                class="nav-link <?php echo e(request()->is('admin/travel-records') || request()->is('admin/travel-records/*') ? 'c-active' : ''); ?>">
                <?php echo e(trans('cruds.travelRecord.title')); ?>

            </a>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('foreign_travel_personal_access')): ?>
            <a href="<?php echo e(route('admin.foreign-travel-personals.create', ['id' => $id])); ?>"
                class="nav-link <?php echo e(request()->is('admin/foreign-travel-personals') || request()->is('admin/foreign-travel-personals/*') ? 'c-active' : ''); ?>">

                <?php echo e(trans('cruds.foreignTravelPersonal.title')); ?>

            </a>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('social_ass_pr_attachment_access')): ?>
            <a href="<?php echo e(route('admin.social-ass-pr-attachments.create', ['id' => $id])); ?>"
                class="nav-link <?php echo e(request()->is('admin/social-ass-pr-attachments') || request()->is('admin/social-ass-pr-attachments/*') ? 'c-active' : ''); ?>">

                <?php echo e(trans('cruds.socialAssPrAttachment.title')); ?>

            </a>
        <?php endif; ?>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('extracurriculam_access')): ?>
            <a href="<?php echo e(route('admin.extracurriculams.create', ['id' => $id])); ?>"
                class="nav-link <?php echo e(request()->is('admin/extracurriculams') || request()->is('admin/extracurriculams/*') ? 'c-active' : ''); ?>">
                <?php echo e(trans('cruds.extracurriculam.title')); ?>

            </a>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('publication_access')): ?>
            <a href="<?php echo e(route('admin.publications.create', ['id' => $id])); ?>"
                class="nav-link <?php echo e(request()->is('admin/publications') || request()->is('admin/publications/*') ? 'c-active' : ''); ?>">
                <?php echo e(trans('cruds.publication.title')); ?>

            </a>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('award_access')): ?>
            <a href="<?php echo e(route('admin.awards.create', ['id' => $id])); ?>"
                class="nav-link <?php echo e(request()->is('admin/awards') || request()->is('admin/awards/*') ? 'c-active' : ''); ?>">
                <?php echo e(trans('cruds.award.title')); ?>

            </a>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('other_service_job_access')): ?>
            <a href="<?php echo e(route('admin.other-service-jobs.create', ['id' => $id])); ?>"
                class="nav-link <?php echo e(request()->is('admin/other-service-jobs') || request()->is('admin/other-service-jobs/*') ? 'c-active' : ''); ?>">
                <?php echo e(trans('cruds.otherServiceJob.title')); ?>

            </a>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('language_access')): ?>
            <a href="<?php echo e(route('admin.languages.create', ['id' => $id])); ?>"
                class="nav-link <?php echo e(request()->is('admin/languages') || request()->is('admin/languages/*') ? 'c-active' : ''); ?>">
                <?php echo e(trans('cruds.language.title')); ?>

            </a>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('criminal_prosecutione_access')): ?>
            <a href="<?php echo e(route('admin.criminal-prosecutiones.create', ['id' => $id])); ?>"
                class="nav-link <?php echo e(request()->is('admin/criminal-prosecutiones') || request()->is('admin/criminal-prosecutiones/*') ? 'c-active' : ''); ?>">

                <?php echo e(trans('cruds.criminalProsecutione.title')); ?>

            </a>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('criminalpro_disciplinary_access')): ?>
            <a href="<?php echo e(route('admin.criminalpro-disciplinaries.create', ['id' => $id])); ?>"
                class="nav-link <?php echo e(request()->is('admin/criminalpro-disciplinaries') || request()->is('admin/criminalpro-disciplinaries/*') ? 'c-active' : ''); ?>">

                <?php echo e(trans('cruds.criminalproDisciplinary.title')); ?>

            </a>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('acr_monitoring_access')): ?>
            <a href="<?php echo e(route('admin.acr-monitorings.create', ['id' => $id])); ?>"
                class="nav-link <?php echo e(request()->is('admin/acr-monitorings') || request()->is('admin/acr-monitorings/*') ? 'c-active' : ''); ?>">
                <?php echo e(trans('cruds.acrMonitoring.title')); ?>

            </a>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH J:\2024working\pims2024\pmis\resources\views/admin/commonemployee/commonmenu.blade.php ENDPATH**/ ?>