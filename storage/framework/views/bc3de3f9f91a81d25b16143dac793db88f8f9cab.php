<?php $__env->startSection('content'); ?>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('project_revenuelone_create')): ?>
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="<?php echo e(route('admin.project-revenuelones.create')); ?>">
                <?php echo e(trans('global.add')); ?> <?php echo e(trans('cruds.projectRevenuelone.title_singular')); ?>

            </a>
        </div>
    </div>
<?php endif; ?>
<div class="card">
    <div class="card-header">
        <?php echo e(trans('cruds.projectRevenuelone.title_singular')); ?> <?php echo e(trans('global.list')); ?>

    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-ProjectRevenuelone">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        <?php echo e(trans('cruds.projectRevenuelone.fields.id')); ?>

                    </th>
                    <th>
                        <?php echo e(trans('cruds.projectRevenuelone.fields.project_revenue')); ?>

                    </th>
                    <th>
                        <?php echo e(trans('cruds.projectRevenuelone.fields.name_bn')); ?>

                    </th>
                    <th>
                        <?php echo e(trans('cruds.projectRevenuelone.fields.name_en')); ?>

                    </th>
                    <th>
                        &nbsp;
                    </th>
                </tr>
            </thead>
        </table>
    </div>
</div>



<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('scripts'); ?>
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('project_revenuelone_delete')): ?>
  let deleteButtonTrans = '<?php echo e(trans('global.datatables.delete')); ?>';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "<?php echo e(route('admin.project-revenuelones.massDestroy')); ?>",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).data(), function (entry) {
          return entry.id
      });

      if (ids.length === 0) {
        alert('<?php echo e(trans('global.datatables.zero_selected')); ?>')

        return
      }

      if (confirm('<?php echo e(trans('global.areYouSure')); ?>')) {
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
<?php endif; ?>

  let dtOverrideGlobals = {
    buttons: dtButtons,
    processing: true,
    serverSide: true,
    retrieve: true,
    aaSorting: [],
    ajax: "<?php echo e(route('admin.project-revenuelones.index')); ?>",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'project_revenue_project_revenue_bn', name: 'project_revenue.project_revenue_bn' },
{ data: 'name_bn', name: 'name_bn' },
{ data: 'name_en', name: 'name_en' },
{ data: 'actions', name: '<?php echo e(trans('global.actions')); ?>' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  };
  let table = $('.datatable-ProjectRevenuelone').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
});

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH J:\2024working\pims2024\pmis\resources\views/admin/projectRevenuelones/index.blade.php ENDPATH**/ ?>