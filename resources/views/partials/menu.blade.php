<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

    <div class="c-sidebar-brand d-md-down-none">
        <a class="c-sidebar-brand-full h4" href="#">
            {{ trans('panel.site_title') }}
        </a>
    </div>

    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a href="{{ route("admin.home") }}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                </i>
                {{ trans('global.dashboard') }}
            </a>
        </li>
        @can('site_setting_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.site-settings.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/site-settings") || request()->is("admin/site-settings/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.siteSetting.title') }}
                </a>
            </li>
        @endcan
        @can('user_management_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/permissions*") ? "c-show" : "" }} {{ request()->is("admin/roles*") ? "c-show" : "" }} {{ request()->is("admin/users*") ? "c-show" : "" }} {{ request()->is("admin/audit-logs*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.userManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('permission_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.permissions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-unlock-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.permission.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('role_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.roles.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.role.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('user_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.users.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-user c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.user.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('audit_log_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.audit-logs.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/audit-logs") || request()->is("admin/audit-logs/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-file-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.auditLog.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('configuration_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/countries*") ? "c-show" : "" }} {{ request()->is("admin/divisions*") ? "c-show" : "" }} {{ request()->is("admin/districts*") ? "c-show" : "" }} {{ request()->is("admin/upazilas*") ? "c-show" : "" }} {{ request()->is("admin/maritalstatuses*") ? "c-show" : "" }} {{ request()->is("admin/genders*") ? "c-show" : "" }} {{ request()->is("admin/religions*") ? "c-show" : "" }} {{ request()->is("admin/blood-groups*") ? "c-show" : "" }} {{ request()->is("admin/quota*") ? "c-show" : "" }} {{ request()->is("admin/language-proficiencies*") ? "c-show" : "" }} {{ request()->is("admin/language-lists*") ? "c-show" : "" }} {{ request()->is("admin/statuses*") ? "c-show" : "" }} {{ request()->is("admin/freedom-fighte-relations*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-tasks c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.configuration.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('country_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.countries.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/countries") || request()->is("admin/countries/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-globe c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.country.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('division_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.divisions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/divisions") || request()->is("admin/divisions/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-globe-africa c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.division.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('district_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.districts.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/districts") || request()->is("admin/districts/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-globe-americas c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.district.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('upazila_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.upazilas.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/upazilas") || request()->is("admin/upazilas/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-globe-africa c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.upazila.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('maritalstatus_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.maritalstatuses.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/maritalstatuses") || request()->is("admin/maritalstatuses/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-male c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.maritalstatus.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('gender_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.genders.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/genders") || request()->is("admin/genders/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.gender.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('religion_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.religions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/religions") || request()->is("admin/religions/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-align-justify c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.religion.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('blood_group_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.blood-groups.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/blood-groups") || request()->is("admin/blood-groups/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-money-check c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.bloodGroup.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('quotum_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.quota.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/quota") || request()->is("admin/quota/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-hand-spock c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.quotum.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('language_proficiency_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.language-proficiencies.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/language-proficiencies") || request()->is("admin/language-proficiencies/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.languageProficiency.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('language_list_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.language-lists.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/language-lists") || request()->is("admin/language-lists/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.languageList.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('status_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.statuses.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/statuses") || request()->is("admin/statuses/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.status.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('freedom_fighte_relation_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.freedom-fighte-relations.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/freedom-fighte-relations") || request()->is("admin/freedom-fighte-relations/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.freedomFighteRelation.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('office_config_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/office-units*") ? "c-show" : "" }} {{ request()->is("admin/designations*") ? "c-show" : "" }} {{ request()->is("admin/leave-categories*") ? "c-show" : "" }} {{ request()->is("admin/leave-types*") ? "c-show" : "" }} {{ request()->is("admin/training-types*") ? "c-show" : "" }} {{ request()->is("admin/travel-purposes*") ? "c-show" : "" }} {{ request()->is("admin/license-types*") ? "c-show" : "" }} {{ request()->is("admin/job-types*") ? "c-show" : "" }} {{ request()->is("admin/grades*") ? "c-show" : "" }} {{ request()->is("admin/traveltypes*") ? "c-show" : "" }} {{ request()->is("admin/batches*") ? "c-show" : "" }} {{ request()->is("admin/joininginfos*") ? "c-show" : "" }} {{ request()->is("admin/project-revenuelones*") ? "c-show" : "" }} {{ request()->is("admin/project-revenue-exams*") ? "c-show" : "" }} {{ request()->is("admin/years*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-building c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.officeConfig.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('office_unit_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.office-units.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/office-units") || request()->is("admin/office-units/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.officeUnit.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('designation_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.designations.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/designations") || request()->is("admin/designations/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.designation.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('leave_category_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.leave-categories.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/leave-categories") || request()->is("admin/leave-categories/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.leaveCategory.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('leave_type_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.leave-types.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/leave-types") || request()->is("admin/leave-types/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.leaveType.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('training_type_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.training-types.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/training-types") || request()->is("admin/training-types/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.trainingType.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('travel_purpose_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.travel-purposes.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/travel-purposes") || request()->is("admin/travel-purposes/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.travelPurpose.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('license_type_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.license-types.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/license-types") || request()->is("admin/license-types/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.licenseType.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('job_type_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.job-types.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/job-types") || request()->is("admin/job-types/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.jobType.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('grade_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.grades.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/grades") || request()->is("admin/grades/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.grade.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('traveltype_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.traveltypes.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/traveltypes") || request()->is("admin/traveltypes/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.traveltype.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('batch_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.batches.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/batches") || request()->is("admin/batches/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.batch.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('joininginfo_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.joininginfos.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/joininginfos") || request()->is("admin/joininginfos/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.joininginfo.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('project_revenuelone_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.project-revenuelones.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/project-revenuelones") || request()->is("admin/project-revenuelones/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.projectRevenuelone.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('project_revenue_exam_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.project-revenue-exams.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/project-revenue-exams") || request()->is("admin/project-revenue-exams/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.projectRevenueExam.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('year_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.years.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/years") || request()->is("admin/years/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.year.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('edu_config_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/examinations*") ? "c-show" : "" }} {{ request()->is("admin/exam-boards*") ? "c-show" : "" }} {{ request()->is("admin/achievementschools-universities*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-book c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.eduConfig.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('examination_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.examinations.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/examinations") || request()->is("admin/examinations/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.examination.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('exam_board_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.exam-boards.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/exam-boards") || request()->is("admin/exam-boards/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.examBoard.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('achievementschools_university_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.achievementschools-universities.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/achievementschools-universities") || request()->is("admin/achievementschools-universities/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.achievementschoolsUniversity.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('employee_detail_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/employee-lists*") ? "c-show" : "" }} {{ request()->is("admin/education-informationes*") ? "c-show" : "" }} {{ request()->is("admin/professionales*") ? "c-show" : "" }} {{ request()->is("admin/addressdetailes*") ? "c-show" : "" }} {{ request()->is("admin/emergence-contactes*") ? "c-show" : "" }} {{ request()->is("admin/spouse-informationes*") ? "c-show" : "" }} {{ request()->is("admin/children*") ? "c-show" : "" }} {{ request()->is("admin/job-histories*") ? "c-show" : "" }} {{ request()->is("admin/employee-promotions*") ? "c-show" : "" }} {{ request()->is("admin/leave-records*") ? "c-show" : "" }} {{ request()->is("admin/service-particulars*") ? "c-show" : "" }} {{ request()->is("admin/trainings*") ? "c-show" : "" }} {{ request()->is("admin/travel-records*") ? "c-show" : "" }} {{ request()->is("admin/foreign-travel-personals*") ? "c-show" : "" }} {{ request()->is("admin/social-ass-pr-attachments*") ? "c-show" : "" }} {{ request()->is("admin/extracurriculams*") ? "c-show" : "" }} {{ request()->is("admin/publications*") ? "c-show" : "" }} {{ request()->is("admin/awards*") ? "c-show" : "" }} {{ request()->is("admin/other-service-jobs*") ? "c-show" : "" }} {{ request()->is("admin/languages*") ? "c-show" : "" }} {{ request()->is("admin/criminal-prosecutiones*") ? "c-show" : "" }} {{ request()->is("admin/criminalpro-disciplinaries*") ? "c-show" : "" }} {{ request()->is("admin/acr-monitorings*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-id-card-alt c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.employeeDetail.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('employee_list_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.employee-lists.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/employee-lists") || request()->is("admin/employee-lists/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.employeeList.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('education_informatione_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.education-informationes.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/education-informationes") || request()->is("admin/education-informationes/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.educationInformatione.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('professionale_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.professionales.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/professionales") || request()->is("admin/professionales/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.professionale.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('addressdetaile_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.addressdetailes.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/addressdetailes") || request()->is("admin/addressdetailes/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.addressdetaile.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('emergence_contacte_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.emergence-contactes.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/emergence-contactes") || request()->is("admin/emergence-contactes/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.emergenceContacte.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('spouse_informatione_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.spouse-informationes.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/spouse-informationes") || request()->is("admin/spouse-informationes/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.spouseInformatione.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('child_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.children.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/children") || request()->is("admin/children/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.child.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('job_history_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.job-histories.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/job-histories") || request()->is("admin/job-histories/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.jobHistory.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('employee_promotion_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.employee-promotions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/employee-promotions") || request()->is("admin/employee-promotions/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.employeePromotion.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('leave_record_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.leave-records.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/leave-records") || request()->is("admin/leave-records/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.leaveRecord.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('service_particular_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.service-particulars.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/service-particulars") || request()->is("admin/service-particulars/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.serviceParticular.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('training_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.trainings.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/trainings") || request()->is("admin/trainings/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.training.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('travel_record_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.travel-records.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/travel-records") || request()->is("admin/travel-records/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.travelRecord.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('foreign_travel_personal_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.foreign-travel-personals.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/foreign-travel-personals") || request()->is("admin/foreign-travel-personals/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.foreignTravelPersonal.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('social_ass_pr_attachment_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.social-ass-pr-attachments.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/social-ass-pr-attachments") || request()->is("admin/social-ass-pr-attachments/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.socialAssPrAttachment.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('extracurriculam_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.extracurriculams.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/extracurriculams") || request()->is("admin/extracurriculams/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.extracurriculam.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('publication_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.publications.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/publications") || request()->is("admin/publications/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.publication.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('award_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.awards.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/awards") || request()->is("admin/awards/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.award.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('other_service_job_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.other-service-jobs.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/other-service-jobs") || request()->is("admin/other-service-jobs/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.otherServiceJob.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('language_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.languages.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/languages") || request()->is("admin/languages/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.language.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('criminal_prosecutione_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.criminal-prosecutiones.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/criminal-prosecutiones") || request()->is("admin/criminal-prosecutiones/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.criminalProsecutione.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('criminalpro_disciplinary_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.criminalpro-disciplinaries.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/criminalpro-disciplinaries") || request()->is("admin/criminalpro-disciplinaries/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.criminalproDisciplinary.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('acr_monitoring_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.acr-monitorings.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/acr-monitorings") || request()->is("admin/acr-monitorings/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-angle-right c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.acrMonitoring.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('faq_management_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/faq-categories*") ? "c-show" : "" }} {{ request()->is("admin/faq-questions*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-question c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.faqManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('faq_category_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.faq-categories.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/faq-categories") || request()->is("admin/faq-categories/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.faqCategory.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('faq_question_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.faq-questions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/faq-questions") || request()->is("admin/faq-questions/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-question c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.faqQuestion.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
            @can('profile_password_edit')
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'c-active' : '' }}" href="{{ route('profile.password.edit') }}">
                        <i class="fa-fw fas fa-key c-sidebar-nav-icon">
                        </i>
                        {{ trans('global.change_password') }}
                    </a>
                </li>
            @endcan
        @endif
        <li class="c-sidebar-nav-item">
            <a href="#" class="c-sidebar-nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">

                </i>
                {{ trans('global.logout') }}
            </a>
        </li>
    </ul>

</div>