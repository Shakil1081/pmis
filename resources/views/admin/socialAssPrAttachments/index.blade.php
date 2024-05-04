@extends('layouts.admin')
@section('content')
@can('social_ass_pr_attachment_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.social-ass-pr-attachments.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.socialAssPrAttachment.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.socialAssPrAttachment.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-SocialAssPrAttachment">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.socialAssPrAttachment.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.socialAssPrAttachment.fields.degree_membership_organization') }}
                    </th>
                    <th>
                        {{ trans('cruds.socialAssPrAttachment.fields.description') }}
                    </th>
                    <th>
                        {{ trans('cruds.socialAssPrAttachment.fields.certificate_achievement') }}
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
    ajax: "{{ route('admin.social-ass-pr-attachments.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'degree_membership_organization', name: 'degree_membership_organization' },
{ data: 'description', name: 'description' },
{ data: 'certificate_achievement', name: 'certificate_achievement' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  };
  let table = $('.datatable-SocialAssPrAttachment').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
});

</script>
@endsection