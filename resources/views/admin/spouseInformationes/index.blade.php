@extends('layouts.admin')
@section('content')
@can('spouse_informatione_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.spouse-informationes.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.spouseInformatione.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.spouseInformatione.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-SpouseInformatione">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.spouseInformatione.fields.name_bn') }}
                    </th>
                    <th>
                        {{ trans('cruds.spouseInformatione.fields.name_en') }}
                    </th>
                    <th>
                        {{ trans('cruds.spouseInformatione.fields.nid_upload') }}
                    </th>
                    <th>
                        {{ trans('cruds.spouseInformatione.fields.date_of_birth') }}
                    </th>
                    <th>
                        {{ trans('cruds.spouseInformatione.fields.occupation') }}
                    </th>
                    <th>
                        {{ trans('cruds.spouseInformatione.fields.office_address') }}
                    </th>
                    <th>
                        {{ trans('cruds.spouseInformatione.fields.phone_number') }}
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
@can('spouse_informatione_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.spouse-informationes.massDestroy') }}",
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
    ajax: "{{ route('admin.spouse-informationes.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'name_bn', name: 'name_bn' },
{ data: 'name_en', name: 'name_en' },
{ data: 'nid_upload', name: 'nid_upload', sortable: false, searchable: false },
{ data: 'date_of_birth', name: 'date_of_birth' },
{ data: 'occupation', name: 'occupation' },
{ data: 'office_address', name: 'office_address' },
{ data: 'phone_number', name: 'phone_number' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 10,
  };
  let table = $('.datatable-SpouseInformatione').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
});

</script>
@endsection