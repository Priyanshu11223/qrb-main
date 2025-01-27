<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" dir="<?php echo e(setting('rtl') == '1'?'rtl':''); ?>">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?php echo $__env->yieldContent('title'); ?>  </title>
    <link rel="icon" href="<?php echo e(setting('favicon_logo') ? Storage::url('uploads/appLogo/app-favicon-logo.png') : ''); ?>"
        type="image/png">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/all.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/components.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/modules/izitoast/css/iziToast.min.css ')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/modules/select2/dist/css/select2.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/modules/fontawesome/css/all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('plugins/fontawesome/css/font-awesome.min.css')); ?>">
    <?php if(setting('rtl') == '1'): ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap-rtl.css')); ?>">
<?php endif; ?>
</head>
<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-4 mx-auto">
                        <div class="login-brand">
                            <img src="<?php echo e(Storage::url(setting('app_logo')) ? Storage::url('uploads/appLogo/app-logo.png') : ''); ?>"
                                alt="logo" class="app-logo">
                        </div>
                        <?php echo $__env->yieldContent('content'); ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- General JS Scripts -->
    <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jquery.nicescroll.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/moment.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/stisla.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/scripts.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/modules/izitoast/js/iziToast.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/modules/select2/dist/js/select2.min.js')); ?>"></script>
    <script>
        <?php if( session('failed')): ?>
                    iziToast.error({
            title: 'Error!',
            message: "<?php echo e(session('failed')); ?>",
            position: 'topRight'
          });
        <?php endif; ?>
        <?php if( session('errors')): ?>
                    iziToast.error({
            title: 'Error!',
            message: "<?php echo e(session('errors')); ?>",
            position: 'topRight'
          });
            <?php endif; ?>
        <?php if( session('successful')): ?>
            iziToast.success({
            title: 'Great',
            message: '<?php echo e(session("successful")); ?>',
            position: 'topRight'
          });
        <?php endif; ?>
        <?php if( session('success')): ?>
            iziToast.success({
            title: 'Great',
            message: '<?php echo e(session("success")); ?>',
            position: 'topRight'
          });
        <?php endif; ?>
            <?php if( session('warning')): ?>
            iziToast.warning({
            title: 'Ohh!',
            message: '<?php echo e(session("warning")); ?>',
            position: 'topRight'
          });
        <?php endif; ?>
        </script>
        <script>
        <?php if(session('status')): ?>
            iziToast.success({
            title: 'Great',
            message: '<?php echo e(session("status")); ?>',
            position: 'topRight'
          });
        <?php endif; ?>
        </script>
        <script>
            $(document).on('click','.delete-action', function(){
                var form_id = $(this).attr('data-form-id')
                $.confirm({
                    title: '<?php echo e(__('Alert !')); ?>',
                    content: '<?php echo e(__('Are You sure ?')); ?>',
                    buttons: {
                        confirm: function () {
                            $("#"+form_id).submit();
                        },
                        cancel: function () {
                        }
                    }
                });
            });
        </script>
    <?php echo $__env->yieldPushContent('script'); ?>
    <!-- Page Specific JS File -->
</body>
</html>
<?php /**PATH /Volumes/T7/Macs/htdocs/qrb/resources/views/layouts/app.blade.php ENDPATH**/ ?>