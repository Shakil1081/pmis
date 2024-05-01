@extends('layouts.admin')
@section('content')
@can('leave_record_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.leave-records.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.leaveRecord.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.leaveRecord.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-LeaveRecord">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.leaveRecord.fields.employee') }}
                        </th>
                        <th>
                            {{ trans('cruds.leaveRecord.fields.start_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.leaveRecord.fields.end_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.leaveRecord.fields.status') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($leaveRecords as $key => $leaveRecord)
                        <tr data-entry-id="{{ $leaveRecord->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $leaveRecord->employee->employeeid ?? '' }}
                            </td>
                            <td>
                                {{ $leaveRecord->start_date ?? '' }}
                            </td>
                            <td>
                                {{ $leaveRecord->end_date ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\LeaveRecord::STATUS_SELECT[$leaveRecord->status] ?? '' }}
                            </td>
                            <td>
                                @can('leave_record_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.leave-records.show', $leaveRecord->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('leave_record_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.leave-records.edit', $leaveRecord->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('leave_record_delete')
                                    <form action="{{ route('admin.leave-records.destroy', $leaveRecord->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('leave_record_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.leave-records.massDestroy') }}",
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
  let table = $('.datatable-LeaveRecord:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection