<?php $__env->startSection('content'); ?>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('project_revenue_exam_create')): ?>
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="<?php echo e(route('admin.project-revenue-exams.create')); ?>">
                <?php echo e(trans('global.add')); ?> <?php echo e(trans('cruds.projectRevenueExam.title_singular')); ?>

            </a>
        </div>
    </div>
<?php endif; ?>
<div class="card">
    <div class="card-header">
        <?php echo e(trans('cruds.projectRevenueExam.title_singular')); ?> <?php echo e(trans('global.list')); ?>

    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-ProjectRevenueExam">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        <?php echo e(trans('cruds.projectRevenueExam.fields.id')); ?>

                    </th>
                    <th>
                        <?php echo e(trans('cruds.projectRevenueExam.fields.exam')); ?>

                    </th>
                    <th>
                        <?php echo e(trans('cruds.projectRevenueExam.fields.exam_name_bn')); ?>

                    </th>
                    <th>
                        <?php echo e(trans('cruds.projectRevenueExam.fields.exam_name_en')); ?>

                    </th>
                    <th>
                        <?php echo e(trans('cruds.projectRevenueExam.fields.upload')); ?>

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
  
  let dtOverrideGlobals = {
    buttons: dtButtons,
    processing: true,
    serverSide: true,
    retrieve: true,
    aaSorting: [],
    ajax: "<?php echo e(route('admin.project-revenue-exams.index')); ?>",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'exam_name_bn', name: 'exam.name_bn' },
{ data: 'exam_name_bn', name: 'exam_name_bn' },
{ data: 'exam_name_en', name: 'exam_name_en' },
{ data: 'upload', name: 'upload', sortable: false, searchable: false },
{ data: 'actions', name: '<?php echo e(trans('global.actions')); ?>' }
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH J:\2024working\pims2024\pmis\resources\views/admin/projectRevenueExams/index.blade.php ENDPATH**/ ?>