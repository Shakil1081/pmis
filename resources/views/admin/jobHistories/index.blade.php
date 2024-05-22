@extends('layouts.admin')
@section('content')
@can('job_history_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.job-histories.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.jobHistory.title_singular') }}
            </a>
            <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                {{ trans('global.app_csvImport') }}
            </button>
            @include('csvImport.modal', ['model' => 'JobHistory', 'route' => 'admin.job-histories.parseCsvImport'])
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.jobHistory.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-JobHistory">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.jobHistory.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.jobHistory.fields.institute_name') }}
                    </th>
                    <th>
                        {{ trans('cruds.jobHistory.fields.job_type') }}
                    </th>
                    <th>
                        {{ trans('cruds.jobHistory.fields.designation') }}
                    </th>
                    <th>
                        {{ trans('cruds.jobHistory.fields.joining_date') }}
                    </th>
                    <th>
                        {{ trans('cruds.jobHistory.fields.release_date') }}
                    </th>
                    <th>
                        {{ trans('cruds.jobHistory.fields.level_1') }}
                    </th>
                    <th>
                        {{ trans('cruds.jobHistory.fields.level_2') }}
                    </th>
                    <th>
                        {{ trans('cruds.jobHistory.fields.level_3') }}
                    </th>
                    <th>
                        {{ trans('cruds.jobHistory.fields.level_4') }}
                    </th>
                    <th>
                        {{ trans('cruds.jobHistory.fields.level_5') }}
                    </th>
                    <th>
                        {{ trans('cruds.jobHistory.fields.employee') }}
                    </th>
                    <th>
                        {{ trans('cruds.employeeList.fields.fullname_bn') }}
                    </th>
                    <th>
                        {{ trans('cruds.jobHistory.fields.grade') }}
                    </th>
                    <th>
                        {{ trans('cruds.grade.fields.salary_range') }}
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
@can('job_history_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.job-histories.massDestroy') }}",
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
    ajax: "{{ route('admin.job-histories.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'institute_name', name: 'institute_name' },
{ data: 'job_type_name_bn', name: 'job_type.name_bn' },
{ data: 'designation_name_bn', name: 'designation.name_bn' },
{ data: 'joining_date', name: 'joining_date' },
{ data: 'release_date', name: 'release_date' },
{ data: 'level_1', name: 'level_1' },
{ data: 'level_2', name: 'level_2' },
{ data: 'level_3', name: 'level_3' },
{ data: 'level_4', name: 'level_4' },
{ data: 'level_5', name: 'level_5' },
{ data: 'employee_employeeid', name: 'employee.employeeid' },
{ data: 'employee.fullname_bn', name: 'employee.fullname_bn' },
{ data: 'grade_name_bn', name: 'grade.name_bn' },
{ data: 'grade.salary_range', name: 'grade.salary_range' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 10,
  };
  let table = $('.datatable-JobHistory').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
});

</script>
@endsection