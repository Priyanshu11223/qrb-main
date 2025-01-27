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
    message: "<?php echo e(session('errors')->first()); ?>",
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
<?php /**PATH /Volumes/T7/Macs/htdocs/qrb/resources/views/layouts/includes/alerts.blade.php ENDPATH**/ ?>