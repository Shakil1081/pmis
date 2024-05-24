<?php $__env->startSection('content'); ?>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('job_history_create')): ?>
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="<?php echo e(route('admin.job-histories.create')); ?>">
                <?php echo e(trans('global.add')); ?> <?php echo e(trans('cruds.jobHistory.title_singular')); ?>

            </a>
            <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                <?php echo e(trans('global.app_csvImport')); ?>

            </button>
            <?php echo $__env->make('csvImport.modal', ['model' => 'JobHistory', 'route' => 'admin.job-histories.parseCsvImport'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
<?php endif; ?>
<div class="card">
    <div class="card-header">
        <?php echo e(trans('cruds.jobHistory.title_singular')); ?> <?php echo e(trans('global.list')); ?>

    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-JobHistory">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        <?php echo e(trans('cruds.jobHistory.fields.id')); ?>

                    </th>
                    <th>
                        <?php echo e(trans('cruds.jobHistory.fields.institute_name')); ?>

                    </th>
                    <th>
                        <?php echo e(trans('cruds.jobHistory.fields.job_type')); ?>

                    </th>
                    <th>
                        <?php echo e(trans('cruds.jobHistory.fields.designation')); ?>

                    </th>
                    <th>
                        <?php echo e(trans('cruds.jobHistory.fields.joining_date')); ?>

                    </th>
                    <th>
                        <?php echo e(trans('cruds.jobHistory.fields.release_date')); ?>

                    </th>
                    <th>
                        <?php echo e(trans('cruds.jobHistory.fields.level_1')); ?>

                    </th>
                    <th>
                        <?php echo e(trans('cruds.jobHistory.fields.level_2')); ?>

                    </th>
                    <th>
                        <?php echo e(trans('cruds.jobHistory.fields.level_3')); ?>

                    </th>
                    <th>
                        <?php echo e(trans('cruds.jobHistory.fields.level_4')); ?>

                    </th>
                    <th>
                        <?php echo e(trans('cruds.jobHistory.fields.level_5')); ?>

                    </th>
                    <th>
                        <?php echo e(trans('cruds.jobHistory.fields.employee')); ?>

                    </th>
                    <th>
                        <?php echo e(trans('cruds.employeeList.fields.fullname_bn')); ?>

                    </th>
                    <th>
                        <?php echo e(trans('cruds.jobHistory.fields.grade')); ?>

                    </th>
                    <th>
                        <?php echo e(trans('cruds.grade.fields.salary_range')); ?>

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
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('job_history_delete')): ?>
  let deleteButtonTrans = '<?php echo e(trans('global.datatables.delete')); ?>';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "<?php echo e(route('admin.job-histories.massDestroy')); ?>",
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
    ajax: "<?php echo e(route('admin.job-histories.index')); ?>",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'institute_name', name: 'institute_name' },
{ data: 'job_type_name_bn', name: 'job_type.name_bn' },
{ data: 'designation_name_bn', name: 'designation.name_bn' },
{ data: 'joining_date', name: 'joining_date' },
{ data: 'release_date', name: 'release_date' },
{ data: 'level_1', name: 'level_1' },
{ data: 'level_2', name: 'level_2' },
{ data: 'level_3', name: 'level_3' },
{ data: 'level_4', name: 'level_4' },
{ data: 'level_5', name: 'level_5' },
{ data: 'employee_employeeid', name: 'employee.employeeid' },
{ data: 'employee.fullname_bn', name: 'employee.fullname_bn' },
{ data: 'grade_name_bn', name: 'grade.name_bn' },
{ data: 'grade.salary_range', name: 'grade.salary_range' },
{ data: 'actions', name: '<?php echo e(trans('global.actions')); ?>' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 10,
  };
  let table = $('.datatable-JobHistory').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
});

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH J:\2024working\pims2024\pmis\resources\views/admin/jobHistories/index.blade.php ENDPATH**/ ?>