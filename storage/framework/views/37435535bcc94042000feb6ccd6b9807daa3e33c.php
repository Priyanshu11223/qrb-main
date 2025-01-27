<?php $__env->startSection('content'); ?>
    <div class="main-content">
        <section class="section">
            <div class="row">
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage-user')): ?>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="card card-statistic-2">
                            <div class="card-icon shadow-primary bg-primary">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4><?php echo e(__('Total User')); ?></h4>
                                </div>
                                <div class="card-body">
                                    <?php echo e($user); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage-form')): ?>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="card card-statistic-2">
                            <div class="card-icon shadow-primary bg-primary">
                                <i class="far fa-file-alt"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4><?php echo e(__('Total Form')); ?></h4>
                                </div>
                                <div class="card-body">
                                    <?php echo e($form); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage-submitted-form')): ?>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="card card-statistic-2">
                            <div class="card-icon shadow-primary bg-primary">
                                <i class="fab fa-wpforms"></i>

                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4><?php echo e(__('Total Submited Form')); ?></h4>
                                </div>
                                <div class="card-body">
                                    <?php echo e($submitted_form); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="card">
                        <div class="card-header">
                            
                            <h4><?php echo e(__('Form')); ?></h4>
                        </div>
                        <div class="card-body">
                            <?php
                                $hashids = new Hashids('', 20);
                                $id = $hashids->encodeHex(2);
                            ?>
                            <?php if($editFormURL): ?>
                                <a href="<?php echo e($editFormURL); ?>" class="btn btn-primary">Complete your form</a>
                            <?php else: ?> 
                                <a href="<?php echo e(route('forms.survey', $id)); ?>" class="btn btn-primary">Start</a>
                            <?php endif; ?>
                           
                            
                            
                            <!--<canvas id="myChart" height="100"></canvas>-->
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script src="<?php echo e(asset('assets/js/page/index-0.js')); ?>"></script>

    <script>
        $(document).ready(function() {
            getChartData('myChart');
        })

        function getChartData(type) {

            $.ajax({
                url: "<?php echo e(route('get.chart.data')); ?>",
                type: 'POST',
                data: {
                    type: type,
                    _token: $('meta[name="csrf-token"]').attr('content')
                },

                success: function(result) {
                    myChart.data.labels = result.lable;
                    myChart.data.datasets[0].data = result.value;
                    myChart.update()
                },
                error: function(data) {
                    console.log(data.responseJSON);
                }

            });
        }
    </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/T7/Macs/htdocs/qrb/resources/views/dashboard/home.blade.php ENDPATH**/ ?>