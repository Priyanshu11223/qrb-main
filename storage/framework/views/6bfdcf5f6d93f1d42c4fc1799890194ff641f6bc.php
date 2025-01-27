<?php
$users = \Auth::user();
$currantLang = $users->currentLanguage();
$languages = Utility::languages();
// $profile = asset(Storage::url('uploads/avatar/'));
?>
<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline ">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
        </ul>
    </form>
    <ul class="navbar-nav navbar-right">
       
        <li class="dropdown"><a href="#" data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <?php if(empty(Auth::user()->avatar)): ?>
                    <img alt="image" src="<?php echo e(asset('assets/img/avatar/avatar-1.png')); ?>" class="rounded-circle mr-1">
                <?php else: ?>
                    <img alt="image" src="<?php echo e(Storage::url(Auth::user()->avatar)); ?>" class="rounded-circle mr-1">
                <?php endif; ?>
                <div class="d-sm-none d-lg-inline-block"><?php echo e(Auth::user()->name); ?></div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="<?php echo e(route('profile.index', Auth::user()->id)); ?>" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> <?php echo e(__('Profile')); ?>

                </a>
                <div class="dropdown-divider"></div>
                <a href="<?php echo e(route('logout')); ?>"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                    class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i>
                    <?php echo e(__('Logout')); ?>

                </a>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                    <?php echo csrf_field(); ?>
                </form>
            </div>
        </li>
    </ul>
</nav>
<?php /**PATH /Volumes/T7/Macs/htdocs/qrb/resources/views/include/header.blade.php ENDPATH**/ ?>