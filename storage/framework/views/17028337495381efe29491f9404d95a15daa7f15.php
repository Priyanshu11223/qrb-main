<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" dir="<?php echo e(setting('rtl') == '1' ? 'rtl' : ''); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e(config('app.name', 'Form Builder')); ?></title>
    <link rel="icon" href="<?php echo e(setting('favicon_logo') ? Storage::url('uploads/appLogo/app-favicon-logo.png') : ''); ?>"
        type="image/png">

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="<?php echo e(asset('assets/modules/bootstrap/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/modules/fontawesome/css/all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/modules/bootstrap-social/bootstrap-social.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <?php if(setting('rtl') == '1'): ?>
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap-rtl.css')); ?>">
    <?php endif; ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/components.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/modules/jqvmap/dist/jqvmap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('plugins/croppie/css/croppie.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('plugins/datepicker/css/bootstrap-datepicker.standalone.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('plugins/datatable/css/datatables.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('plugins/summernote/dist/summernote-bs4.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/modules/izitoast/css/iziToast.min.css ')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/modules/select2/dist/css/select2.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/jquery-confirm.min.css')); ?>">
    <?php echo $__env->yieldPushContent('style'); ?>
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <?php echo $__env->make('include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->yieldContent('content'); ?>
            <footer class="main-footer">
                <div class="footer-left">
                    &copy; <?php echo e(date('Y')); ?> <a href="#" class="font-weight-bold ml-1"
                        target="_blank"><?php echo e(config('app.name')); ?></a>
                </div>
                <div class="footer-right"></div>
            </footer>
            <div class="modal fade" role="dialog" id="common_modal">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/tag.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/modules/tooltip.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/modules/popper.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/modules/bootstrap/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/modules/nicescroll/jquery.nicescroll.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/modules/moment.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/stisla.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/modules/jquery.sparkline.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/modules/chart.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/summernote/dist/summernote-bs4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/modules/chocolat/dist/js/jquery.chocolat.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/modules/jquery-ui/jquery-ui.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/modules/izitoast/js/iziToast.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/croppie/js/croppie.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/datepicker/js/bootstrap-datepicker.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/datatable/js/datatables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/modules/select2/dist/js/select2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jquery-confirm.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/scripts.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/sweetalert/js/sweetalert.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/modules/ckeditor/ckeditor.js')); ?>"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <?php if(!empty(setting('gtag'))): ?>

        <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo e(setting('gtag')); ?>"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', '<?php echo e(setting('gtag')); ?>');
        </script>
    <?php endif; ?>
    <?php echo $__env->make('layouts.includes.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldPushContent('script'); ?>
</body>

</html>
<?php /**PATH /Volumes/T7/Macs/htdocs/qrb/resources/views/layouts/main.blade.php ENDPATH**/ ?>