@extends('layouts.admin')
@section('content')
@can('project_revenue_exam_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.project-revenue-exams.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.projectRevenueExam.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.projectRevenueExam.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-ProjectRevenueExam">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.projectRevenueExam.fields.exam') }}
                    </th>
                    <th>
                        {{ trans('cruds.projectRevenuelone.fields.name_en') }}
                    </th>
                    <th>
                        {{ trans('cruds.projectRevenueExam.fields.exam_name_bn') }}
                    </th>
                    <th>
                        {{ trans('cruds.projectRevenueExam.fields.exam_name_en') }}
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
  
  let dtOverrideGlobals = {
    buttons: dtButtons,
    processing: true,
    serverSide: true,
    retrieve: true,
    aaSorting: [],
    ajax: "{{ route('admin.project-revenue-exams.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'exam_name_bn', name: 'exam.name_bn' },
{ data: 'exam.name_en', name: 'exam.name_en' },
{ data: 'exam_name_bn', name: 'exam_name_bn' },
{ data: 'exam_name_en', name: 'exam_name_en' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  };
  let table = $('.datatable-ProjectRevenueExam').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
});

</script>
@endsection