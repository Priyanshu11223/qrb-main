<?php
use App\Models\Form;
$users = \Auth::user();
$currantLang = $users->currentLanguage();
$languages = Utility::languages();
$role_id = $users->roles->first()->id;
if (Auth::user()->type=='Admin') {
 $forms=Form::all();
}else{
    $forms =  Form::select(['forms.*'])
    ->leftJoin('users', 'users.id', 'forms.created_by')
    ->whereIn('forms.id', function ($query) use ($role_id) {
        $query->select('form_id')->from('user_forms')->where('role_id', $role_id);
    })->get();
}
?>
<div class="main-sidebar ">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <?php if(setting('app_logo')): ?>
                <img src="<?php echo e(Storage::url(setting('app_logo')) ? Storage::url('uploads/appLogo/app-logo.png') : ''); ?>"
                    alt="logo" class="app-logo" width="60px">
            <?php else: ?>
                <a href="<?php echo e(route('home')); ?>"><?php echo e(config('app.name')); ?></a>
            <?php endif; ?>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <?php if(setting('app_small_logo')): ?>
                <img src="<?php echo e(Storage::url(setting('app_small_logo')) ? Storage::url('uploads/appLogo/app-small-logo.png') : ''); ?>"
                    alt="logo" height="30px" width="30px">
            <?php else: ?>
                <a href="<?php echo e(route('home')); ?>"><?php echo e(__('PL')); ?></a>
            <?php endif; ?>
        </div>
        <ul class="sidebar-menu">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('home')); ?>">
                    <i class="fas fa-fire text-primary"></i>
                    <span class="nav-link-text"><?php echo e(__('Dashboard')); ?></span>
                </a>
            </li>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage-user')): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('users.index')); ?>">
                        <i class="fas fa-users text-primary"></i>
                        <span class="nav-link-text"><?php echo e(__('Users')); ?></span>
                    </a>
                </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage-role')): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('roles.index')); ?>">
                        <i class="fas fa-key text-primary"></i>
                        <span class="nav-link-text"><?php echo e(__('Roles')); ?></span>
                    </a>
                </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage-setting')): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('settings')); ?>">
                        <i class="fas fa-cog text-primary"></i>
                        <span class="nav-link-text"><?php echo e(__('Application Settings')); ?></span>
                    </a>
                </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage-form')): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('forms.index')); ?>">
                        <i class="fas fa-book text-primary"></i>
                        <span class="nav-link-text"><?php echo e(__('Forms')); ?></span>
                    </a>
                </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage-submitted-form')): ?>
                <li class="nav-item dropdown  ">
                    <a class="nav-link  has-dropdown" href="#">
                        <i class="fas fa-list text-primary"></i>
                        <span class="nav-link-text"><?php echo e(__('Submitted Forms')); ?></span>
                    </a>
                    <ul class="dropdown-menu <?php echo e((Request::route()->getName() == 'view.form.values') ? 'd-block' : ''); ?>">
                        <?php $__currentLoopData = $forms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $form): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a class="nav-link <?php echo e((Request::route()->getName() == 'view.form.values') ? 'show' : ''); ?>" href="<?php echo e(route('view.form.values', $form->id)); ?>"><?php echo e($form->title); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </li>
            <?php endif; ?>

           

        </ul>
    </aside>
</div>
<?php /**PATH /Volumes/T7/Macs/htdocs/qrb/resources/views/layouts/sidebar.blade.php ENDPATH**/ ?>