<?php $__env->startSection('title', 'Login'); ?>
<?php $__env->startSection('content'); ?>
    <div class="card card-primary">
        <div class="card-header">
            <h4><?php echo e(__('Login')); ?></h4>
        </div>
        <div class="card-body">
            <form method="POST" class="needs-validation" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="email"><?php echo e(__('E-Mail Address')); ?></label>
                    <input class="form-control <?php echo e(__('Email')); ?>" placeholder="<?php echo e(__('E-Mail Address')); ?>" type="email"
                        name="email" id="email" value="<?php echo e(old('email')); ?>" onfocus>
                </div>
                <div class="form-group">
                    <div class="d-block">
                        <label for="password" class="control-label"><?php echo e(__('Password')); ?></label>
                        <div class="float-right">
                            <a href="<?php echo e(route('password.request')); ?>" class="text-small">
                                <?php echo e(__('Forgot Password ?')); ?>

                            </a>
                        </div>
                    </div>
                    <input type="password" placeholder="<?php echo e(__('Password')); ?>" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" name="remember" value="<?php echo e(old('remember')); ?>"
                            id="customCheckLogin" type="checkbox">
                        <label class="custom-control-label" for="customCheckLogin"><?php echo e(__('Remember me')); ?></label>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary my-4"><?php echo e(__('Sign In')); ?></button>
                </div>
            </form>
            <div class="scl_btn ">
                <div class="col">
                    <?php if(env('GOOGLESETTING') == 'on'): ?>
                    <a href="<?php echo e(url('/redirect/google')); ?>" class="google btnn">
                        <i class="fa fa-google fa-fw"></i> Login with Google
                    </a>
                    <?php endif; ?>
                    <?php if(env('FACEBOOKSETTING') == 'on'): ?>
                    <a href="<?php echo e(url('/redirect/facebook')); ?>" class="fb btnn">
                        <i class="fa fa-facebook fa-fw"></i> Login with Facebook
                    </a>
                    <?php endif; ?>
                    <?php if(env('GITHUBSETTING') == 'on'): ?>
                    <a href="<?php echo e(url('/redirect/github')); ?>" class="github btnn">
                        <i class="fa fa-github fa-fw"></i> Login with Github
                    </a>
                    <?php endif; ?>
                    <?php if(env('LINKEDINSETTING') == 'on'): ?>
                    <a href="<?php echo e(url('/redirect/linkedin')); ?>" class="linkedin btnn">
                        <i class="fa fa-linkedin fa-fw"></i> Login with LinkedIn
                    </a>
                    <?php endif; ?>
                </div>
            </div>
            
        </div>
    </div>
    
    <div class="simple-footer">
        &copy; <?php echo e(date('Y')); ?> <a href="#" class="font-weight-bold ml-1"
            target="_blank"><?php echo e(config('app.name')); ?></a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/T7/Macs/htdocs/qrb/resources/views/auth/login.blade.php ENDPATH**/ ?>