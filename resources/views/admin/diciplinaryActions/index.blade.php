@extends('layouts.admin')
@section('content')
@can('diciplinary_action_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.diciplinary-actions.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.diciplinaryAction.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.diciplinaryAction.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-DiciplinaryAction">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.diciplinaryAction.fields.govt_order_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.diciplinaryAction.fields.govt_order_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.diciplinaryAction.fields.diciplinary_action') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($diciplinaryActions as $key => $diciplinaryAction)
                        <tr data-entry-id="{{ $diciplinaryAction->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $diciplinaryAction->govt_order_no ?? '' }}
                            </td>
                            <td>
                                {{ $diciplinaryAction->govt_order_date ?? '' }}
                            </td>
                            <td>
                                {{ $diciplinaryAction->diciplinary_action->judgement_type ?? '' }}
                            </td>
                            <td>
                                @can('diciplinary_action_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.diciplinary-actions.show', $diciplinaryAction->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('diciplinary_action_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.diciplinary-actions.edit', $diciplinaryAction->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('diciplinary_action_delete')
                                    <form action="{{ route('admin.diciplinary-actions.destroy', $diciplinaryAction->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('diciplinary_action_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.diciplinary-actions.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
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

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 10,
  });
  let table = $('.datatable-DiciplinaryAction:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection