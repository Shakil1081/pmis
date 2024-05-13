@extends('layouts.admin')
@section('content')
@can('employee_list_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.employee-lists.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.employeeList.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.employeeList.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-EmployeeList">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.employeeList.fields.employeeid') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeList.fields.batch') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeList.fields.home_district') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeList.fields.marital_statu') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeList.fields.gender') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeList.fields.religion') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeList.fields.blood_group') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeList.fields.nid') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeList.fields.license_type') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeList.fields.email') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeList.fields.mobile_number') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeList.fields.joiningexaminfo') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeList.fields.grade') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeList.fields.fjoining_date') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeList.fields.first_joining_office_name') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeList.fields.first_joining_g_o_date') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeList.fields.first_joining_memo_no') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeList.fields.first_joining_order') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeList.fields.fjoining_letter') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeList.fields.date_of_gazette') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeList.fields.date_of_gazette_if_any') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeList.fields.date_of_regularization') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeList.fields.regularization_issue_date') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeList.fields.regularization_office_orde_go') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeList.fields.date_of_con_serviec') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeList.fields.confirmation_in_service') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeList.fields.quota') }}
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
@can('employee_list_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.employee-lists.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).data(), function (entry) {
          return entry.id
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  let dtOverrideGlobals = {
    buttons: dtButtons,
    processing: true,
    serverSide: true,
    retrieve: true,
    aaSorting: [],
    ajax: "{{ route('admin.employee-lists.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'employeeid', name: 'employeeid' },
{ data: 'batch_batch_bn', name: 'batch.batch_bn' },
{ data: 'home_district_name_bn', name: 'home_district.name_bn' },
{ data: 'marital_statu_name', name: 'marital_statu.name' },
{ data: 'gender_name_bn', name: 'gender.name_bn' },
{ data: 'religion_name_bn', name: 'religion.name_bn' },
{ data: 'blood_group_name_bn', name: 'blood_group.name_bn' },
{ data: 'nid', name: 'nid' },
{ data: 'license_type_name_bn', name: 'license_type.name_bn' },
{ data: 'email', name: 'email' },
{ data: 'mobile_number', name: 'mobile_number' },
{ data: 'joiningexaminfo_exam_name_bn', name: 'joiningexaminfo.exam_name_bn' },
{ data: 'grade_name_bn', name: 'grade.name_bn' },
{ data: 'fjoining_date', name: 'fjoining_date' },
{ data: 'first_joining_office_name', name: 'first_joining_office_name' },
{ data: 'first_joining_g_o_date', name: 'first_joining_g_o_date' },
{ data: 'first_joining_memo_no', name: 'first_joining_memo_no' },
{ data: 'first_joining_order', name: 'first_joining_order', sortable: false, searchable: false },
{ data: 'fjoining_letter', name: 'fjoining_letter', sortable: false, searchable: false },
{ data: 'date_of_gazette', name: 'date_of_gazette' },
{ data: 'date_of_gazette_if_any', name: 'date_of_gazette_if_any', sortable: false, searchable: false },
{ data: 'date_of_regularization', name: 'date_of_regularization' },
{ data: 'regularization_issue_date', name: 'regularization_issue_date' },
{ data: 'regularization_office_orde_go', name: 'regularization_office_orde_go', sortable: false, searchable: false },
{ data: 'date_of_con_serviec', name: 'date_of_con_serviec' },
{ data: 'confirmation_in_service', name: 'confirmation_in_service', sortable: false, searchable: false },
{ data: 'quota_name_bn', name: 'quota.name_bn' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 25,
  };
  let table = $('.datatable-EmployeeList').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
});

</script>
@endsection