@extends('layouts.admin')
@section('content')
@can('addressdetaile_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.addressdetailes.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.addressdetaile.title_singular') }}
            </a>
            <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                {{ trans('global.app_csvImport') }}
            </button>
            @include('csvImport.modal', ['model' => 'Addressdetaile', 'route' => 'admin.addressdetailes.parseCsvImport'])
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.addressdetaile.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Addressdetaile">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.addressdetaile.fields.employee') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeList.fields.fullname_bn') }}
                    </th>
                    <th>
                        {{ trans('cruds.addressdetaile.fields.address_type') }}
                    </th>
                    <th>
                        {{ trans('cruds.addressdetaile.fields.flat_house') }}
                    </th>
                    <th>
                        {{ trans('cruds.addressdetaile.fields.post_office') }}
                    </th>
                    <th>
                        {{ trans('cruds.addressdetaile.fields.post_code') }}
                    </th>
                    <th>
                        {{ trans('cruds.addressdetaile.fields.thana_upazila') }}
                    </th>
                    <th>
                        {{ trans('cruds.addressdetaile.fields.phone_number') }}
                    </th>
                    <th>
                        {{ trans('cruds.addressdetaile.fields.status') }}
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
@can('addressdetaile_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.addressdetailes.massDestroy') }}",
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
    ajax: "{{ route('admin.addressdetailes.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'employee_employeeid', name: 'employee.employeeid' },
{ data: 'employee.fullname_bn', name: 'employee.fullname_bn' },
{ data: 'address_type', name: 'address_type' },
{ data: 'flat_house', name: 'flat_house' },
{ data: 'post_office', name: 'post_office' },
{ data: 'post_code', name: 'post_code' },
{ data: 'thana_upazila_name_bn', name: 'thana_upazila.name_bn' },
{ data: 'phone_number', name: 'phone_number' },
{ data: 'status', name: 'status' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 10,
  };
  let table = $('.datatable-Addressdetaile').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
});

</script>
@endsection