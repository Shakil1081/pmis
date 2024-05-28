<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

    <div class="c-sidebar-brand-2 d-md-down-none">
        <a class="c-sidebar-brand-full h4" href="#" style="text-decoration: none">
            <div class="row g-4 d-flex align-items-center" style="
            background: white;
        ">
                <div class="col-md-4 d-flex justify-content-center p-1">
                    <img src="<?php echo e(asset('assets/images/logo1.png')); ?>" height="50" alt="Logo" />
                </div>
                <div class="col-md-8 d-flex">
                    <small class="text-dark"><?php echo e(trans('panel.site_title')); ?></small>
                </div>
            </div>


        </a>
    </div>

    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a href="<?php echo e(route('admin.home')); ?>" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                </i>
                <?php echo e(trans('global.dashboard')); ?>

            </a>
        </li>
        
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_management_access')): ?>
            <li
                class="c-sidebar-nav-dropdown <?php echo e(request()->is('admin/permissions*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/roles*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/users*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/audit-logs*') ? 'c-show' : ''); ?>">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    <?php echo e(trans('cruds.userManagement.title')); ?>

                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permission_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.permissions.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-unlock-alt c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.permission.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.roles.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/roles') || request()->is('admin/roles/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.role.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.users.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/users') || request()->is('admin/users/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-user c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.user.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('audit_log_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.audit-logs.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/audit-logs') || request()->is('admin/audit-logs/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-file-alt c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.auditLog.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </li>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('configuration_access')): ?>
            <li
                class="c-sidebar-nav-dropdown <?php echo e(request()->is('admin/countries*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/divisions*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/districts*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/upazilas*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/maritalstatuses*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/genders*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/religions*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/blood-groups*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/quota*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/language-proficiencies*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/language-lists*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/statuses*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/freedom-fighte-relations*') ? 'c-show' : ''); ?>">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-tasks c-sidebar-nav-icon">

                    </i>
                    <?php echo e(trans('cruds.configuration.title')); ?>

                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('country_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.countries.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/countries') || request()->is('admin/countries/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-globe c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.country.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('division_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.divisions.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/divisions') || request()->is('admin/divisions/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-globe-africa c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.division.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('district_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.districts.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/districts') || request()->is('admin/districts/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-globe-americas c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.district.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('upazila_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.upazilas.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/upazilas') || request()->is('admin/upazilas/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-globe-africa c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.upazila.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('maritalstatus_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.maritalstatuses.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/maritalstatuses') || request()->is('admin/maritalstatuses/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-male c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.maritalstatus.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('gender_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.genders.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/genders') || request()->is('admin/genders/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.gender.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('religion_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.religions.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/religions') || request()->is('admin/religions/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-align-justify c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.religion.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('blood_group_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.blood-groups.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/blood-groups') || request()->is('admin/blood-groups/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-money-check c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.bloodGroup.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('quotum_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.quota.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/quota') || request()->is('admin/quota/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-hand-spock c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.quotum.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('language_proficiency_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.language-proficiencies.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/language-proficiencies') || request()->is('admin/language-proficiencies/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.languageProficiency.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('language_list_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.language-lists.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/language-lists') || request()->is('admin/language-lists/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.languageList.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('status_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.statuses.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/statuses') || request()->is('admin/statuses/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.status.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('freedom_fighte_relation_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.freedom-fighte-relations.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/freedom-fighte-relations') || request()->is('admin/freedom-fighte-relations/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.freedomFighteRelation.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </li>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('office_config_access')): ?>
            <li
                class="c-sidebar-nav-dropdown <?php echo e(request()->is('admin/office-units*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/designations*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/leave-categories*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/leave-types*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/training-types*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/travel-purposes*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/license-types*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/grades*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/traveltypes*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/batches*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/joininginfos*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/project-revenuelones*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/project-revenue-exams*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/years*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/projects*') ? 'c-show' : ''); ?>">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-building c-sidebar-nav-icon">

                    </i>
                    <?php echo e(trans('cruds.officeConfig.title')); ?>

                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('office_unit_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.office-units.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/office-units') || request()->is('admin/office-units/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.officeUnit.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('designation_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.designations.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/designations') || request()->is('admin/designations/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.designation.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('leave_category_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.leave-categories.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/leave-categories') || request()->is('admin/leave-categories/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.leaveCategory.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('leave_type_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.leave-types.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/leave-types') || request()->is('admin/leave-types/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.leaveType.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('training_type_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.training-types.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/training-types') || request()->is('admin/training-types/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.trainingType.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('travel_purpose_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.travel-purposes.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/travel-purposes') || request()->is('admin/travel-purposes/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.travelPurpose.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('license_type_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.license-types.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/license-types') || request()->is('admin/license-types/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.licenseType.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('grade_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.grades.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/grades') || request()->is('admin/grades/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.grade.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('traveltype_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.traveltypes.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/traveltypes') || request()->is('admin/traveltypes/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.traveltype.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('batch_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.batches.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/batches') || request()->is('admin/batches/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.batch.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('joininginfo_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.joininginfos.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/joininginfos') || request()->is('admin/joininginfos/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.joininginfo.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('project_revenuelone_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.project-revenuelones.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/project-revenuelones') || request()->is('admin/project-revenuelones/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.projectRevenuelone.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('project_revenue_exam_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.project-revenue-exams.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/project-revenue-exams') || request()->is('admin/project-revenue-exams/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.projectRevenueExam.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('project_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.projects.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/projects') || request()->is('admin/projects/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.project.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </li>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('job_configuration_access')): ?>
            <li
                class="c-sidebar-nav-dropdown <?php echo e(request()->is('admin/job-types*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/forest-states*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/forest-divisions*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/forest-ranges*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/forest-beats*') ? 'c-show' : ''); ?>">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    <?php echo e(trans('cruds.jobConfiguration.title')); ?>

                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('job_type_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.job-types.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/job-types') || request()->is('admin/job-types/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.jobType.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('forest_state_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.forest-states.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/forest-states') || request()->is('admin/forest-states/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.forestState.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('forest_division_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.forest-divisions.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/forest-divisions') || request()->is('admin/forest-divisions/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.forestDivision.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('forest_range_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.forest-ranges.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/forest-ranges') || request()->is('admin/forest-ranges/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.forestRange.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('forest_beat_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.forest-beats.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/forest-beats') || request()->is('admin/forest-beats/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.forestBeat.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </li>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edu_config_access')): ?>
            <li
                class="c-sidebar-nav-dropdown <?php echo e(request()->is('admin/examinations*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/exam-degrees*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/exam-boards*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/result-groups*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/results*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/achievementschools-universities*') ? 'c-show' : ''); ?>">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-book c-sidebar-nav-icon">

                    </i>
                    <?php echo e(trans('cruds.eduConfig.title')); ?>

                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('examination_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.examinations.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/examinations') || request()->is('admin/examinations/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.examination.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('exam_degree_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.exam-degrees.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/exam-degrees') || request()->is('admin/exam-degrees/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.examDegree.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('exam_board_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.exam-boards.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/exam-boards') || request()->is('admin/exam-boards/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.examBoard.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('result_group_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.result-groups.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/result-groups') || request()->is('admin/result-groups/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.resultGroup.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('result_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.results.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/results') || request()->is('admin/results/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.result.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('achievementschools_university_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.achievementschools-universities.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/achievementschools-universities') || request()->is('admin/achievementschools-universities/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.achievementschoolsUniversity.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </li>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('employee_detail_access')): ?>
            <li
                class="c-sidebar-nav-dropdown <?php echo e(request()->is('admin/employee-lists*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/education-informationes*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/professionales*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/addressdetailes*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/emergence-contactes*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/spouse-informationes*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/children*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/job-histories*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/employee-promotions*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/leave-records*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/service-particulars*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/trainings*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/travel-records*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/foreign-travel-personals*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/social-ass-pr-attachments*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/extracurriculams*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/publications*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/awards*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/other-service-jobs*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/languages*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/criminal-prosecutiones*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/criminalpro-disciplinaries*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/acr-monitorings*') ? 'c-show' : ''); ?>">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-id-card-alt c-sidebar-nav-icon">

                    </i>
                    <?php echo e(trans('cruds.employeeDetail.title')); ?>

                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('employee_list_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.dfo')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/dfo') || request()->is('admin/dfo/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.employeeList.dfo')); ?>

                            </a>
                        </li>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.employee-lists.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/employee-lists') || request()->is('admin/employee-lists/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.employeeList.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('education_informatione_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.education-informationes.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/education-informationes') || request()->is('admin/education-informationes/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.educationInformatione.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('professionale_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.professionales.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/professionales') || request()->is('admin/professionales/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.professionale.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('addressdetaile_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.addressdetailes.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/addressdetailes') || request()->is('admin/addressdetailes/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.addressdetaile.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('emergence_contacte_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.emergence-contactes.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/emergence-contactes') || request()->is('admin/emergence-contactes/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.emergenceContacte.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('spouse_informatione_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.spouse-informationes.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/spouse-informationes') || request()->is('admin/spouse-informationes/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.spouseInformatione.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('child_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.children.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/children') || request()->is('admin/children/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.child.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('job_history_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.job-histories.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/job-histories') || request()->is('admin/job-histories/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.jobHistory.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('employee_promotion_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.employee-promotions.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/employee-promotions') || request()->is('admin/employee-promotions/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.employeePromotion.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('leave_record_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.leave-records.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/leave-records') || request()->is('admin/leave-records/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.leaveRecord.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('training_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.trainings.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/trainings') || request()->is('admin/trainings/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.training.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('travel_record_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.travel-records.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/travel-records') || request()->is('admin/travel-records/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.travelRecord.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('foreign_travel_personal_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.foreign-travel-personals.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/foreign-travel-personals') || request()->is('admin/foreign-travel-personals/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.foreignTravelPersonal.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('extracurriculam_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.extracurriculams.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/extracurriculams') || request()->is('admin/extracurriculams/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.extracurriculam.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('publication_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.publications.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/publications') || request()->is('admin/publications/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.publication.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('award_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.awards.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/awards') || request()->is('admin/awards/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.award.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('other_service_job_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.other-service-jobs.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/other-service-jobs') || request()->is('admin/other-service-jobs/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.otherServiceJob.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('language_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.languages.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/languages') || request()->is('admin/languages/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.language.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('criminal_prosecutione_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.criminal-prosecutiones.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/criminal-prosecutiones') || request()->is('admin/criminal-prosecutiones/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.criminalProsecutione.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('criminalpro_disciplinary_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.criminalpro-disciplinaries.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/criminalpro-disciplinaries') || request()->is('admin/criminalpro-disciplinaries/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.criminalproDisciplinary.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('acr_monitoring_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.acr-monitorings.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/acr-monitorings') || request()->is('admin/acr-monitorings/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.acrMonitoring.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </li>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('faq_management_access')): ?>
            <li
                class="c-sidebar-nav-dropdown <?php echo e(request()->is('admin/faq-categories*') ? 'c-show' : ''); ?> <?php echo e(request()->is('admin/faq-questions*') ? 'c-show' : ''); ?>">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-question c-sidebar-nav-icon">

                    </i>
                    <?php echo e(trans('cruds.faqManagement.title')); ?>

                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('faq_category_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.faq-categories.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/faq-categories') || request()->is('admin/faq-categories/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.faqCategory.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('faq_question_access')): ?>
                        <li class="c-sidebar-nav-item">
                            <a href="<?php echo e(route('admin.faq-questions.index')); ?>"
                                class="c-sidebar-nav-link <?php echo e(request()->is('admin/faq-questions') || request()->is('admin/faq-questions/*') ? 'c-active' : ''); ?>">
                                <i class="fa-fw fas fa-question c-sidebar-nav-icon">

                                </i>
                                <?php echo e(trans('cruds.faqQuestion.title')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </li>
        <?php endif; ?>
        <?php if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))): ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('profile_password_edit')): ?>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link <?php echo e(request()->is('profile/password') || request()->is('profile/password/*') ? 'c-active' : ''); ?>"
                        href="<?php echo e(route('profile.password.edit')); ?>">
                        <i class="fa-fw fas fa-key c-sidebar-nav-icon">
                        </i>
                        <?php echo e(trans('global.change_password')); ?>

                    </a>
                </li>
            <?php endif; ?>
        <?php endif; ?>
        <li class="c-sidebar-nav-item">
            <a href="#" class="c-sidebar-nav-link"
                onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">

                </i>
                <?php echo e(trans('global.logout')); ?>

            </a>
        </li>
    </ul>


</div>
<?php /**PATH J:\2024working\pims2024\pmis\resources\views/partials/menu.blade.php ENDPATH**/ ?>