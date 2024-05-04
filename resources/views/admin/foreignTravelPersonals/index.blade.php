@extends('layouts.admin')
@section('content')
@can('foreign_travel_personal_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.foreign-travel-personals.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.foreignTravelPersonal.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.foreignTravelPersonal.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-ForeignTravelPersonal">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.foreignTravelPersonal.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.foreignTravelPersonal.fields.title') }}
                    </th>
                    <th>
                        {{ trans('cruds.foreignTravelPersonal.fields.country') }}
                    </th>
                    <th>
                        {{ trans('cruds.foreignTravelPersonal.fields.purpose') }}
                    </th>
                    <th>
                        {{ trans('cruds.foreignTravelPersonal.fields.from_date') }}
                    </th>
                    <th>
                        {{ trans('cruds.foreignTravelPersonal.fields.to_date') }}
                    </th>
                    <th>
                        {{ trans('cruds.foreignTravelPersonal.fields.leave') }}
                    </th>
                    <th>
                        {{ trans('cruds.travelRecord.fields.title') }}
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
@can('foreign_travel_personal_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.foreign-travel-personals.massDestroy') }}",
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
    ajax: "{{ route('admin.foreign-travel-personals.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'title', name: 'title' },
{ data: 'country_name_bn', name: 'country.name_bn' },
{ data: 'purpose_name_bn', name: 'purpose.name_bn' },
{ data: 'from_date', name: 'from_date' },
{ data: 'to_date', name: 'to_date' },
{ data: 'leave_start_date', name: 'leave.start_date' },
{ data: 'leave.title', name: 'leave.title' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  };
  let table = $('.datatable-ForeignTravelPersonal').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
});

</script>
@endsection