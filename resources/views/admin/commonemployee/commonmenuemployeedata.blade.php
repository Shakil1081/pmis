<div class="col-md-4 mt-1 border p-1">

    @php
        $id = request()->input('id');
    @endphp


    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        @can('education_informatione_access')
            <a href="{{ route('admin.commonemployeeshow', ['id' => $id]) }}"
                class="nav-link {{ request()->is('admin/show-employee') || request()->is('admin/show-employee/*') ? 'c-active' : '' }}">
                {{ trans('cruds.employeeList.title') }}
            </a>
        @endcan
        @can('education_informatione_access')
            <a href="{{ route('admin.education-informationes.showdata', ['id' => $id]) }}"
                class="nav-link {{ request()->is('admin/education-informationes') || request()->is('admin/education-informationes/*') ? 'c-active' : '' }}">

                {{ trans('cruds.educationInformatione.title') }}
            </a>
        @endcan
        @can('professionale_access')
            <a href="{{ route('admin.professionales.showdata', ['id' => $id]) }}"
                class="nav-link {{ request()->is('admin/professionales') || request()->is('admin/professionales/*') ? 'c-active' : '' }}">
                {{ trans('cruds.professionale.title') }}
            </a>
        @endcan
        @can('addressdetaile_access')
            <a href="{{ route('admin.addressdetailes.showdata', ['id' => $id]) }}"
                class="nav-link {{ request()->is('admin/addressdetailes') || request()->is('admin/addressdetailes/*') ? 'c-active' : '' }}">
                {{ trans('cruds.addressdetaile.title') }}
            </a>
        @endcan
        @can('emergence_contacte_access')
            <a href="{{ route('admin.emergence-contactes.showdata', ['id' => $id]) }}"
                class="nav-link {{ request()->is('admin/emergence-contactes') || request()->is('admin/emergence-contactes/*') ? 'c-active' : '' }}">
                {{ trans('cruds.emergenceContacte.title') }}
            </a>
        @endcan
        @can('spouse_informatione_access')
            <a href="{{ route('admin.spouse-informationes.showdata', ['id' => $id]) }}"
                class="nav-link {{ request()->is('admin/spouse-informationes') || request()->is('admin/spouse-informationes/*') ? 'c-active' : '' }}">
                {{ trans('cruds.spouseInformatione.title') }}
            </a>
        @endcan
        @can('child_access')
            <a href="{{ route('admin.children.showdata', ['id' => $id]) }}"
                class="nav-link {{ request()->is('admin/children') || request()->is('admin/children/*') ? 'c-active' : '' }}">
                {{ trans('cruds.child.title') }}
            </a>
        @endcan
        @can('job_history_access')
            <a href="{{ route('admin.job-histories.showdata', ['id' => $id]) }}"
                class="nav-link {{ request()->is('admin/job-histories') || request()->is('admin/job-histories/*') ? 'c-active' : '' }}">
                {{ trans('cruds.jobHistory.title') }}
            </a>
        @endcan
        @can('employee_promotion_access')
            <a href="{{ route('admin.employee-promotions.showdata', ['id' => $id]) }}"
                class="nav-link {{ request()->is('admin/employee-promotions') || request()->is('admin/employee-promotions/*') ? 'c-active' : '' }}">
                {{ trans('cruds.employeePromotion.title') }}
            </a>
        @endcan

        @can('leave_record_access')
            <a href="{{ route('admin.leave-records.showdata', ['id' => $id]) }}"
                class="nav-link {{ request()->is('admin/leave-records') || request()->is('admin/leave-records/*') ? 'c-active' : '' }}">
                {{ trans('cruds.leaveRecord.title') }}
            </a>
        @endcan
        @can('service_particular_access')
            <a href="{{ route('admin.service-particulars.showdata', ['id' => $id]) }}"
                class="nav-link {{ request()->is('admin/service-particulars') || request()->is('admin/service-particulars/*') ? 'c-active' : '' }}">
                {{ trans('cruds.serviceParticular.title') }}
            </a>
        @endcan
        @can('training_access')
            <a href="{{ route('admin.trainings.showdata', ['id' => $id]) }}"
                class="nav-link {{ request()->is('admin/trainings') || request()->is('admin/trainings/*') ? 'c-active' : '' }}">
                {{ trans('cruds.training.title') }}
            </a>
        @endcan
        @can('travel_record_access')
            <a href="{{ route('admin.travel-records.showdata', ['id' => $id]) }}"
                class="nav-link {{ request()->is('admin/travel-records') || request()->is('admin/travel-records/*') ? 'c-active' : '' }}">
                {{ trans('cruds.travelRecord.title') }}
            </a>
        @endcan
        @can('foreign_travel_personal_access')
            <a href="{{ route('admin.foreign-travel-personals.showdata', ['id' => $id]) }}"
                class="nav-link {{ request()->is('admin/foreign-travel-personals') || request()->is('admin/foreign-travel-personals/*') ? 'c-active' : '' }}">

                {{ trans('cruds.foreignTravelPersonal.title') }}
            </a>
        @endcan
        @can('social_ass_pr_attachment_access')
            <a href="{{ route('admin.social-ass-pr-attachments.showdata', ['id' => $id]) }}"
                class="nav-link {{ request()->is('admin/social-ass-pr-attachments') || request()->is('admin/social-ass-pr-attachments/*') ? 'c-active' : '' }}">

                {{ trans('cruds.socialAssPrAttachment.title') }}
            </a>
        @endcan

        @can('extracurriculam_access')
            <a href="{{ route('admin.extracurriculams.showdata', ['id' => $id]) }}"
                class="nav-link {{ request()->is('admin/extracurriculams') || request()->is('admin/extracurriculams/*') ? 'c-active' : '' }}">
                {{ trans('cruds.extracurriculam.title') }}
            </a>
        @endcan
        @can('publication_access')
            <a href="{{ route('admin.publications.showdata', ['id' => $id]) }}"
                class="nav-link {{ request()->is('admin/publications') || request()->is('admin/publications/*') ? 'c-active' : '' }}">
                {{ trans('cruds.publication.title') }}
            </a>
        @endcan
        @can('award_access')
            <a href="{{ route('admin.awards.showdata', ['id' => $id]) }}"
                class="nav-link {{ request()->is('admin/awards') || request()->is('admin/awards/*') ? 'c-active' : '' }}">
                {{ trans('cruds.award.title') }}
            </a>
        @endcan
        @can('other_service_job_access')
            <a href="{{ route('admin.other-service-jobs.showdata', ['id' => $id]) }}"
                class="nav-link {{ request()->is('admin/other-service-jobs') || request()->is('admin/other-service-jobs/*') ? 'c-active' : '' }}">
                {{ trans('cruds.otherServiceJob.title') }}
            </a>
        @endcan
        @can('language_access')
            <a href="{{ route('admin.languages.showdata', ['id' => $id]) }}"
                class="nav-link {{ request()->is('admin/languages') || request()->is('admin/languages/*') ? 'c-active' : '' }}">
                {{ trans('cruds.language.title') }}
            </a>
        @endcan
        @can('criminal_prosecutione_access')
            <a href="{{ route('admin.criminal-prosecutiones.showdata', ['id' => $id]) }}"
                class="nav-link {{ request()->is('admin/criminal-prosecutiones') || request()->is('admin/criminal-prosecutiones/*') ? 'c-active' : '' }}">

                {{ trans('cruds.criminalProsecutione.title') }}
            </a>
        @endcan
        @can('criminalpro_disciplinary_access')
            <a href="{{ route('admin.criminalpro-disciplinaries.showdata', ['id' => $id]) }}"
                class="nav-link {{ request()->is('admin/criminalpro-disciplinaries') || request()->is('admin/criminalpro-disciplinaries/*') ? 'c-active' : '' }}">

                {{ trans('cruds.criminalproDisciplinary.title') }}
            </a>
        @endcan
        @can('acr_monitoring_access')
            <a href="{{ route('admin.acr-monitorings.showdata', ['id' => $id]) }}"
                class="nav-link {{ request()->is('admin/acr-monitorings') || request()->is('admin/acr-monitorings/*') ? 'c-active' : '' }}">
                {{ trans('cruds.acrMonitoring.title') }}
            </a>
        @endcan
    </div>
</div>
