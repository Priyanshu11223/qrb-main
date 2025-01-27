<?php $__env->startComponent('mail::message'); ?>
# <?php echo e($form_value->Form->title); ?>

<?php
$array = json_decode($form_value->json);
?>
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/fontawesome/css/all.min.css')); ?>">
<div class="section-body">
<div class="row">
<div class="card col-md-6 mx-auto">
<div class="card-body">
<?php if(!empty($form_value->Form->logo)): ?>
<div class="text-center">
<img id="app-dark-logo" class="img img-responsive my-5 w-30 justify-content-center text-center"
src="<?php echo e(asset('storage/app/' . $form_value->Form->logo)); ?>" alt="form_logo">
</div>
<?php endif; ?>
<table class="table table-bordered" style="width: 100%">
<?php $__currentLoopData = $array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row_key => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if($row->type == 'checkbox-group'): ?>
<tr>
<td><?php echo e(Form::label($row->name, $row->label)); ?><?php if($row->required): ?> * <?php endif; ?>
</td>
<td>
<ul>
<?php $__currentLoopData = $row->values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $options): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if(isset($options->selected)): ?>
<li>
<label><?php echo e($options->label); ?></label>
</li>
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
</td>
</tr>
<?php elseif($row->type == 'file'): ?>
<tr>
<td><?php echo e(Form::label($row->name, $row->label)); ?><?php if($row->required): ?> * <?php endif; ?>
</td>
<td>
<?php if(isset($row->value)): ?>
<?php if(isset($row->multiple)): ?>
<div class="row">
<?php $__currentLoopData = $row->value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-6">
<img src="<?php echo e(asset('storage/app/' . $img)); ?>"
class="img-responsive img-thumbnail mb-2">
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php else: ?>
<div class="row">
<div class="col-6">
<img src="<?php echo e(asset('storage/app/' . $row->value)); ?>"
class="img-responsive img-thumbnail mb-2">
</div>
</div>
<?php endif; ?>
<?php endif; ?>
</td>
</tr>
<?php elseif($row->type == 'header'): ?>
<tr>
<td colspan="2">
<<?php echo e($row->subtype); ?>><?php echo e($row->label); ?></<?php echo e($row->subtype); ?>>
</td>
</tr>
<?php elseif($row->type == 'paragraph'): ?>
<tr>
<td colspan="2">
<<?php echo e($row->subtype); ?>><?php echo e($row->label); ?></<?php echo e($row->subtype); ?>>
</td>
</tr>
<?php elseif($row->type == 'radio-group'): ?>
<tr>
<td><?php echo e(Form::label($row->name, $row->label)); ?><?php if($row->required): ?> * <?php endif; ?> </td>
<td>
<?php $__currentLoopData = $row->values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $options): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if(isset($options->selected)): ?>
<?php echo e($options->label); ?>

<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</td>
</tr>
<?php elseif($row->type == 'select'): ?>
<tr>
<td><?php echo e(Form::label($row->name, $row->label)); ?><?php if($row->required): ?> * <?php endif; ?></td>
<td>
<?php $__currentLoopData = $row->values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $options): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if(isset($options->selected)): ?>
<?php echo e($options->label); ?>

<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</td>
</tr>
<?php elseif($row->type == 'autocomplete'): ?>
<tr>
<td><?php echo e(Form::label($row->name, $row->label)); ?><?php if($row->required): ?> * <?php endif; ?> </td>
<td>
<?php $__currentLoopData = $row->values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $options): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if(isset($options->selected)): ?>
<?php echo e($options->label); ?>

<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</td>
</tr>
<?php elseif($row->type == 'text'): ?>
<tr>
<td><?php echo e(Form::label($row->name, $row->label)); ?><?php if($row->required): ?> * <?php endif; ?> </td>
<td><?php echo e(isset($row->value) ? $row->value : ''); ?></td>
</tr>
<?php elseif($row->type == 'date'): ?>
<tr>
<td><?php echo e(Form::label($row->name, $row->label)); ?><?php if($row->required): ?> * <?php endif; ?> </td>
<td><?php echo e(isset($row->value) ? date('d-m-Y', strtotime($row->value)) : ''); ?></td>
</tr>
<?php elseif($row->type == 'textarea'): ?>
<tr>
<td><?php echo e(Form::label($row->name, $row->label)); ?><?php if($row->required): ?> * <?php endif; ?> </td>
<td><?php echo e(isset($row->value) ? $row->value : ''); ?></td>
</tr>
<?php elseif($row->type == 'starRating'): ?>
<tr>
<?php
$attr = ['class' => 'form-control'];
if ($row->required) {
$attr['required'] = 'required';
}
$value = isset($row->value) ? $row->value : 0;
$no_of_star = isset($row->number_of_star) ? $row->number_of_star : 5;
?>
<td> <?php echo e(Form::label($row->name, $row->label)); ?><?php if($row->required): ?> * <?php endif; ?> </td>
<td>
<div id="<?php echo e($row->name); ?>" class="starRating"
data-value="<?php echo e($value); ?>" data-no_of_star="<?php echo e($no_of_star); ?>">
</div>
<?php for($x = 0; $x < $no_of_star; $x++): ?>
<?php if(floor($value) - $x >= 1): ?>
<img class="email_star" src="<?php echo e(asset('assets/images/star.png')); ?>"
width="25px">
<?php elseif( $value-$x > 0 ): ?>
<img class="email_star"
src="<?php echo e(asset('assets/images/half-star.png')); ?>" width="25px">
<?php else: ?>
<img class="email_star"
src="<?php echo e(asset('assets/images/black-star.png')); ?>" width="25px">
<?php endif; ?>
<?php endfor; ?>
<input type="hidden" name="<?php echo e($row->name); ?>" value="<?php echo e($value); ?>">
</td>
</tr>
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</div>
</div>
</div>
</div>
Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH /Volumes/T7/Macs/htdocs/qrb/resources/views/emails/form_submit.blade.php ENDPATH**/ ?>