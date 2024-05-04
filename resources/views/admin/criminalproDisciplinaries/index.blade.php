@extends('layouts.admin')
@section('content')
@can('criminalpro_disciplinary_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.criminalpro-disciplinaries.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.criminalproDisciplinary.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.criminalproDisciplinary.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-CriminalproDisciplinary">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.criminalproDisciplinary.fields.criminalprosecutione') }}
                    </th>
                    <th>
                        {{ trans('cruds.criminalproDisciplinary.fields.judgement_type') }}
                    </th>
                    <th>
                        {{ trans('cruds.criminalproDisciplinary.fields.government_order_no') }}
                    </th>
                    <th>
                        {{ trans('cruds.criminalproDisciplinary.fields.order_upload_file') }}
                    </th>
                    <th>
                        {{ trans('cruds.criminalproDisciplinary.fields.remarks') }}
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
@can('criminalpro_disciplinary_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.criminalpro-disciplinaries.massDestroy') }}",
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
    ajax: "{{ route('admin.criminalpro-disciplinaries.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'criminalprosecutione_natureof_offence', name: 'criminalprosecutione.natureof_offence' },
{ data: 'judgement_type', name: 'judgement_type' },
{ data: 'government_order_no', name: 'government_order_no' },
{ data: 'order_upload_file', name: 'order_upload_file', sortable: false, searchable: false },
{ data: 'remarks', name: 'remarks' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 3, 'desc' ]],
    pageLength: 10,
  };
  let table = $('.datatable-CriminalproDisciplinary').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
});

</script>
@endsection