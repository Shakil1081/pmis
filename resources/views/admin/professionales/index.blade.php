@extends('layouts.admin')
@section('content')
@can('professionale_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.professionales.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.professionale.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.professionale.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Professionale">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.professionale.fields.employee') }}
                        </th>
                        <th>
                            {{ trans('cruds.employeeList.fields.fullname_bn') }}
                        </th>
                        <th>
                            {{ trans('cruds.professionale.fields.qualification_title') }}
                        </th>
                        <th>
                            {{ trans('cruds.professionale.fields.institution') }}
                        </th>
                        <th>
                            {{ trans('cruds.professionale.fields.from_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.professionale.fields.to_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.professionale.fields.passing_year') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($professionales as $key => $professionale)
                        <tr data-entry-id="{{ $professionale->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $professionale->employee->employeeid ?? '' }}
                            </td>
                            <td>
                                {{ $professionale->employee->fullname_bn ?? '' }}
                            </td>
                            <td>
                                {{ $professionale->qualification_title ?? '' }}
                            </td>
                            <td>
                                {{ $professionale->institution ?? '' }}
                            </td>
                            <td>
                                {{ $professionale->from_date ?? '' }}
                            </td>
                            <td>
                                {{ $professionale->to_date ?? '' }}
                            </td>
                            <td>
                                {{ $professionale->passing_year ?? '' }}
                            </td>
                            <td>
                                @can('professionale_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.professionales.show', $professionale->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('professionale_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.professionales.edit', $professionale->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('professionale_delete')
                                    <form action="{{ route('admin.professionales.destroy', $professionale->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('professionale_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.professionales.massDestroy') }}",
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
    order: [[ 3, 'desc' ]],
    pageLength: 10,
  });
  let table = $('.datatable-Professionale:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection