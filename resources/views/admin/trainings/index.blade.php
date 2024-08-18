@extends('layouts.admin')
@section('content')
@can('training_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.trainings.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.training.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.training.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Training">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.training.fields.employee') }}
                    </th>
                    <th>
                        {{ trans('cruds.training.fields.foreign_travel') }}
                    </th>
                    <th>
                        {{ trans('cruds.travelPurpose.fields.name_en') }}
                    </th>
                    <th>
                        {{ trans('cruds.training.fields.training_type') }}
                    </th>
                    <th>
                        {{ trans('cruds.training.fields.training_name') }}
                    </th>
                    <th>
                        {{ trans('cruds.training.fields.institute_name') }}
                    </th>
                    <th>
                        {{ trans('cruds.training.fields.country') }}
                    </th>
                    <th>
                        {{ trans('cruds.training.fields.start_date') }}
                    </th>
                    <th>
                        {{ trans('cruds.training.fields.end_date') }}
                    </th>
                    <th>
                        {{ trans('cruds.training.fields.grade') }}
                    </th>
                    <th>
                        {{ trans('cruds.training.fields.position') }}
                    </th>
                    <th>
                        {{ trans('cruds.training.fields.location') }}
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
@can('training_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.trainings.massDestroy') }}",
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
    ajax: "{{ route('admin.trainings.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'employee_employeeid', name: 'employee.employeeid' },
{ data: 'foreign_travel_name_bn', name: 'foreign_travel.name_bn' },
{ data: 'foreign_travel.name_en', name: 'foreign_travel.name_en' },
{ data: 'training_type_name_bn', name: 'training_type.name_bn' },
{ data: 'training_name', name: 'training_name' },
{ data: 'institute_name', name: 'institute_name' },
{ data: 'country_name_bn', name: 'country.name_bn' },
{ data: 'start_date', name: 'start_date' },
{ data: 'end_date', name: 'end_date' },
{ data: 'grade', name: 'grade' },
{ data: 'position', name: 'position' },
{ data: 'location', name: 'location' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 10,
  };
  let table = $('.datatable-Training').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
});

</script>
@endsection