<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check($viewGate)): ?>
    <a class="btn btn-sm btn-success px-2" href="<?php echo e(route('admin.' . $crudRoutePart . '.show', $row->id)); ?>">
        <?php echo e(trans('global.view')); ?>

    </a>
<?php endif; ?>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check($editGate)): ?>
    <a class="btn btn-sm btn-warning px-2" href="<?php echo e(route('admin.' . $crudRoutePart . '.edit', $row->id)); ?>">
        <?php echo e(trans('global.edit')); ?>

    </a>
<?php endif; ?>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check($deleteGate)): ?>
    <form action="<?php echo e(route('admin.' . $crudRoutePart . '.destroy', $row->id)); ?>" method="POST"
        onsubmit="return confirm('<?php echo e(trans('global.areYouSure')); ?>');" style="display: inline-block;">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        <input type="submit" class="btn btn-sm btn-danger px-2" value="<?php echo e(trans('global.delete')); ?>">
    </form>
<?php endif; ?>
<?php /**PATH J:\2024working\pims2024\pmis\resources\views/partials/datatablesActions.blade.php ENDPATH**/ ?>