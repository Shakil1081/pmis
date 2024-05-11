@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('cruds.employeeListDetail.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-EmployeeListDetail">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.employeeListDetail.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeListDetail.fields.general_information') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeList.fields.fullname_bn') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeListDetail.fields.education_informatione') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeListDetail.fields.professionale') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeListDetail.fields.addressdetailes') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeListDetail.fields.emergence_contactes') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeListDetail.fields.spouse_informatione') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeListDetail.fields.children') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeListDetail.fields.job_historie') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeListDetail.fields.employee_promotion') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeListDetail.fields.leave_records') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeListDetail.fields.service_particular') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeListDetail.fields.trainings') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeListDetail.fields.travel_records') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeListDetail.fields.foreign_travel_personals') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeListDetail.fields.social_ass_pr_attachments') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeListDetail.fields.publications') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeListDetail.fields.awards') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeListDetail.fields.other_service_jobs') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeListDetail.fields.languages') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeListDetail.fields.criminal_prosecutiones') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeListDetail.fields.criminalpro_disciplinaries') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeListDetail.fields.acr_monitorings') }}
                    </th>
                    <th>
                        &nbsp;
                    </th>
                </tr>
            </thead>
        </table>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
  
  let dtOverrideGlobals = {
    buttons: dtButtons,
    processing: true,
    serverSide: true,
    retrieve: true,
    aaSorting: [],
    ajax: "{{ route('admin.employee-list-details.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'general_information_employeeid', name: 'general_information.employeeid' },
{ data: 'general_information.fullname_bn', name: 'general_information.fullname_bn' },
{ data: 'education_informatione', name: 'education_informatione' },
{ data: 'professionale', name: 'professionale' },
{ data: 'addressdetailes', name: 'addressdetailes' },
{ data: 'emergence_contactes', name: 'emergence_contactes' },
{ data: 'spouse_informatione', name: 'spouse_informatione' },
{ data: 'children', name: 'children' },
{ data: 'job_historie', name: 'job_historie' },
{ data: 'employee_promotion', name: 'employee_promotion' },
{ data: 'leave_records', name: 'leave_records' },
{ data: 'service_particular', name: 'service_particular' },
{ data: 'trainings', name: 'trainings' },
{ data: 'travel_records', name: 'travel_records' },
{ data: 'foreign_travel_personals', name: 'foreign_travel_personals' },
{ data: 'social_ass_pr_attachments', name: 'social_ass_pr_attachments' },
{ data: 'publications', name: 'publications' },
{ data: 'awards', name: 'awards' },
{ data: 'other_service_jobs', name: 'other_service_jobs' },
{ data: 'languages', name: 'languages' },
{ data: 'criminal_prosecutiones', name: 'criminal_prosecutiones' },
{ data: 'criminalpro_disciplinaries', name: 'criminalpro_disciplinaries' },
{ data: 'acr_monitorings', name: 'acr_monitorings' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 10,
  };
  let table = $('.datatable-EmployeeListDetail').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
});

</script>
@endsection