<div class="col-md-3 mt-1 border p-1">

    @php
        $id = request()->input('id');
    @endphp


    <div class="nav flex-column nav-pills position-fixed" id="v-pills-tab" role="tablist" aria-orientation="vertical"
        style=" top: 102px;">

        <a href="#General" class="nav-link">
            {{ trans('cruds.employeeList.title') }}
        </a>


        <a href="#Education" class="nav-link">

            {{ trans('cruds.educationInformatione.title') }}
        </a>

        <a href="#Professionales" class="nav-link">
            {{ trans('cruds.professionale.title') }}
        </a>

        <a href="#addressdetaile" class="nav-link">
            {{ trans('cruds.addressdetaile.title') }}
        </a>

        <a href="#emergenceContacte" class="nav-link">
            {{ trans('cruds.emergenceContacte.title') }}
        </a>

        <a href="#spouseInformatione" class="nav-link">
            {{ trans('cruds.spouseInformatione.title') }}
        </a>

        <a href="#child" class="nav-link">
            {{ trans('cruds.child.title') }}
        </a>

        <a href="#jobHistory" class="nav-link">
            {{ trans('cruds.jobHistory.title') }}
        </a>

        <a href="#employeePromotion" class="nav-link">
            {{ trans('cruds.employeePromotion.title') }}
        </a>

        <a href="#leaveRecord" class="nav-link">
            {{ trans('cruds.leaveRecord.title') }}
        </a>

        {{-- <a href="#serviceParticular" class="nav-link">
            {{ trans('cruds.serviceParticular.title') }}
        </a> --}}

        <a href="#training" class="nav-link">
            {{ trans('cruds.training.title') }}
        </a>

        <a href="#travelRecords" class="nav-link">
            {{ trans('cruds.travelRecord.title') }}
        </a>

        <a href="#foreignTravelPersonal" class="nav-link">

            {{ trans('cruds.foreignTravelPersonal.title') }}
        </a>
        {{-- <a href="#socialAssPrAttachment" class="nav-link">
            {{ trans('cruds.socialAssPrAttachment.title') }}
        </a> --}}
        <a href="#extracurriculam" class="nav-link">
            {{ trans('cruds.extracurriculam.title') }}
        </a>
        <a href="#publication" class="nav-link">
            {{ trans('cruds.publication.title') }}
        </a>
        <a href="#awards" class="nav-link">
            {{ trans('cruds.award.title') }}
        </a>
        <a href="#otherServiceJob" class="nav-link">
            {{ trans('cruds.otherServiceJob.title') }}
        </a>
        <a href="#languages" class="nav-link">
            {{ trans('cruds.language.title') }}
        </a>
        <a href="#criminalProsecutione" class="nav-link">
            {{ trans('cruds.criminalProsecutione.title') }}
        </a>
        <a href="#criminalproDisciplinary" class="nav-link">
            {{ trans('cruds.criminalproDisciplinary.title') }}
        </a>
        <a href="#acrMonitoring" class="nav-link">
            {{ trans('cruds.acrMonitoring.title') }}
        </a>

    </div>
</div>
