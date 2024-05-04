@extends('layouts.admin')
@section('content')
@can('other_service_job_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.other-service-jobs.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.otherServiceJob.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.otherServiceJob.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-OtherServiceJob">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.otherServiceJob.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.otherServiceJob.fields.employer') }}
                        </th>
                        <th>
                            {{ trans('cruds.otherServiceJob.fields.address') }}
                        </th>
                        <th>
                            {{ trans('cruds.otherServiceJob.fields.service_type') }}
                        </th>
                        <th>
                            {{ trans('cruds.otherServiceJob.fields.position') }}
                        </th>
                        <th>
                            {{ trans('cruds.otherServiceJob.fields.from') }}
                        </th>
                        <th>
                            {{ trans('cruds.otherServiceJob.fields.to') }}
                        </th>
                        <th>
                            {{ trans('cruds.otherServiceJob.fields.employee') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($otherServiceJobs as $key => $otherServiceJob)
                        <tr data-entry-id="{{ $otherServiceJob->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $otherServiceJob->id ?? '' }}
                            </td>
                            <td>
                                {{ $otherServiceJob->employer ?? '' }}
                            </td>
                            <td>
                                {{ $otherServiceJob->address ?? '' }}
                            </td>
                            <td>
                                {{ $otherServiceJob->service_type ?? '' }}
                            </td>
                            <td>
                                {{ $otherServiceJob->position ?? '' }}
                            </td>
                            <td>
                                {{ $otherServiceJob->from ?? '' }}
                            </td>
                            <td>
                                {{ $otherServiceJob->to ?? '' }}
                            </td>
                            <td>
                                {{ $otherServiceJob->employee->employeeid ?? '' }}
                            </td>
                            <td>
                                @can('other_service_job_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.other-service-jobs.show', $otherServiceJob->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('other_service_job_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.other-service-jobs.edit', $otherServiceJob->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('other_service_job_delete')
                                    <form action="{{ route('admin.other-service-jobs.destroy', $otherServiceJob->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('other_service_job_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.other-service-jobs.massDestroy') }}",
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
    pageLength: 100,
  });
  let table = $('.datatable-OtherServiceJob:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection