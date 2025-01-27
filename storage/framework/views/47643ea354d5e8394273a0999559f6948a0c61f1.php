<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit-submitted-form')): ?>
    <a href="<?php echo e(route('formvalues.edit', $formValue->id)); ?>" target="_blank" title="<?php echo e(__('Edit Survey')); ?>"
        class="btn btn-info mr-1" data-toggle="tooltip" data-original-title="<?php echo e(__('Edit')); ?>"><i
            class="fas fa-edit mr-0"></i> </a>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('show-submitted-form')): ?>
    <a href="<?php echo e(route('formvalues.show', $formValue->id)); ?>" title="<?php echo e(__('View Survey')); ?>"
        class="btn btn-primary  mr-1" data-toggle="tooltip" data-original-title="<?php echo e(__('View')); ?>"><i
            class="fas fa-eye mr-0"></i> </span></a>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('download-submitted-form')): ?>
    <a href="<?php echo e(route('download.form.values.pdf', $formValue->id)); ?>" title="<?php echo e(__('Download PDF')); ?>"
        class="btn btn-success  mr-1" data-toggle="tooltip" data-original-title="<?php echo e(__('Download')); ?>"><i
            class="fas fa-file-download mr-0"></i></a>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete-submitted-form')): ?>
    <a href="#" class="btn btn-danger delete-action" data-form-id="delete-form-<?php echo e($formValue->id); ?>"><i
            class="fas fa-trash mr-0"></i> </a>
    <?php echo Form::open(['method' => 'DELETE', 'route' => ['formvalues.destroy', $formValue->id], 'id' => 'delete-form-' . $formValue->id]); ?>

    <?php echo Form::close(); ?>

<?php endif; ?>
<?php /**PATH /Volumes/T7/Macs/htdocs/qrb/resources/views/form_value/action.blade.php ENDPATH**/ ?>