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
                        {{ trans('cruds.employeeList.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeList.fields.employeeid') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeList.fields.height') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeList.fields.special_identity') }}
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
                        {{ trans('cruds.employeeList.fields.nid_upload') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeList.fields.passport') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeList.fields.passport_upload') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeList.fields.license_type') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeList.fields.license_upload') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeList.fields.email') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeList.fields.mobile_number') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeList.fields.fjoining_date') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeList.fields.project_name') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeList.fields.fjoiningofficename') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeList.fields.office_orderno') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeList.fields.fjoining_letter') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeList.fields.office_order') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeList.fields.date_of_con_serviec') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeList.fields.quota') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeList.fields.employee_photo') }}
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
{ data: 'id', name: 'id' },
{ data: 'employeeid', name: 'employeeid' },
{ data: 'height', name: 'height' },
{ data: 'special_identity', name: 'special_identity' },
{ data: 'home_district_name_bn', name: 'home_district.name_bn' },
{ data: 'marital_statu_name', name: 'marital_statu.name' },
{ data: 'gender_name_bn', name: 'gender.name_bn' },
{ data: 'religion_name_bn', name: 'religion.name_bn' },
{ data: 'blood_group_name_bn', name: 'blood_group.name_bn' },
{ data: 'nid', name: 'nid' },
{ data: 'nid_upload', name: 'nid_upload', sortable: false, searchable: false },
{ data: 'passport', name: 'passport' },
{ data: 'passport_upload', name: 'passport_upload', sortable: false, searchable: false },
{ data: 'license_type_name_bn', name: 'license_type.name_bn' },
{ data: 'license_upload', name: 'license_upload', sortable: false, searchable: false },
{ data: 'email', name: 'email' },
{ data: 'mobile_number', name: 'mobile_number' },
{ data: 'fjoining_date', name: 'fjoining_date' },
{ data: 'project_name', name: 'project_name' },
{ data: 'fjoiningofficename', name: 'fjoiningofficename' },
{ data: 'office_orderno', name: 'office_orderno', sortable: false, searchable: false },
{ data: 'fjoining_letter', name: 'fjoining_letter', sortable: false, searchable: false },
{ data: 'office_order', name: 'office_order', sortable: false, searchable: false },
{ data: 'date_of_con_serviec', name: 'date_of_con_serviec' },
{ data: 'quota_name_bn', name: 'quota.name_bn' },
{ data: 'employee_photo', name: 'employee_photo', sortable: false, searchable: false },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 20, 'desc' ]],
    pageLength: 10,
  };
  let table = $('.datatable-EmployeeList').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
});

</script>
@endsection