

<?php $__env->startSection('content'); ?>
    <h4> <?php echo e(trans('cruds.employeeList.title_singular')); ?> <?php echo e(trans('global.list')); ?></h4>
    <div class="card mb-1">
        <div class="table-responsive p-3">

            <div class="row justify-content-center align-items-center g-1">
                <div class="col">
                    <div class="position-relative">
                        <input class="form-control px-5" type="search" placeholder="Search Customers">
                        <span
                            class="material-icons-outlined position-absolute translate-middle-y top-50 fs-5 start-0 ms-3">search</span>
                    </div>
                </div>

                <div class="col">
                    <strong>Total Employee: <?php echo e($data['total'] ?? 0); ?></strong>

                </div>
                <div class="col text-end">

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('employee_list_create')): ?>
                        <a class="btn btn-success" href="<?php echo e(route('admin.employee-lists.create')); ?>"> <i class="fa fa-plus"
                                aria-hidden="true"></i>
                            <?php echo e(trans('global.add')); ?> <?php echo e(trans('cruds.employeeList.title_singular')); ?>

                        </a>
                    <?php endif; ?>
                    <button type="button" class="btn btn- btn-success">
                        <i class="fa fa-filter" aria-hidden="true"></i> Filter
                    </button>


                </div>
            </div>
        </div>
    </div>
    <?php $__currentLoopData = $data['allresult']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
            $empID = $result['id'];
        ?>
        <div class="card mb-1">
            <div class="table-responsive p-3">
                <div class="row justify-content-center align-items-center g-1">
                    <div class="col">
                        <div class="d-flex align-items-center gap-3">
                            <div class="customer-pic">
                                <img src="http://127.0.0.1:8000/assets/images/logo1.png" class="rounded-circle"
                                    width="80" height="80" alt="">
                            </div>
                            <div>
                                <p class="customer-name fw-bold mb-0"><?php echo e($result['fullname_bn']); ?></p>
                                <p class="mb-0"><?php echo e($result['employeeid']); ?></p>
                                <p>
                                    


                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <small>Profile progress</small>
                        <div class="progress">
                            <?php
                                $total = 0;
                                $totalvalue = 17;

                                $relationships = [
                                    'batch',
                                    'educations',
                                    'professionales',
                                    'addressdetailes',
                                    'emergencecontactes',
                                    'spouseinformationes',
                                    'childinformationes',
                                    'jobhistories',
                                    'employeepromotions',
                                    'trainings',
                                    'travelRecords',
                                    'foreigntravelpersonals',
                                    'socialassprattachments',
                                    'extracurriculams',
                                    'otherservicejobs',
                                    'languages',
                                    'acrmonitorings',
                                ];
                                // foreach ($relationships as $relationship) {
                                //     if ($result->{$relationship}->count()) {
                                //         $total++;
                                //     }
                                // }

                                foreach ($relationships as $relationship) {
                                    // Use null coalescing operator to provide an empty collection if the relationship is null
                                    $countable = $result->{$relationship} ?? collect();
                                    if ($countable->count()) {
                                        $total++;
                                    }
                                }

                                // Calculate progress percentage
                                $progress = ($total / $totalvalue) * 100;
                            ?>

                            <div class="progress-bar" role="progressbar" style="width:<?php echo e(round($progress)); ?>%;"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo e(round($progress)); ?>%</div>
                        </div>


                    </div>
                    <div class="col text-end">
                        <div class="btn-group">
                            <a href="<?php echo e(route('admin.employeedata', ['id' => $empID])); ?>"
                                class="btn btn-sm btn-outline-success">
                                <?php echo e(trans('global.view')); ?>

                            </a>
                            <a href="<?php echo e(route('admin.commonemployeeshow', ['id' => $empID])); ?>"
                                class="btn btn-sm btn-outline-success">
                                <?php echo e(trans('global.edit')); ?>

                            </a>
                            <a href="<?php echo e(route('admin.employeedata', ['id' => $empID])); ?>"
                                class="btn btn-sm btn-outline-success">
                                <?php echo e(trans('global.print')); ?>

                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    <div class="pagination">
        <?php echo e($data['allresult']->links('pagination::bootstrap-4')); ?>

    </div>

    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH J:\2024working\pims2024\pmis\resources\views/admin/employeeLists/index.blade.php ENDPATH**/ ?>