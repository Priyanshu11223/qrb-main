<?php $__env->startSection('title', 'Submitted Forms'); ?>
<?php $__env->startSection('content'); ?>
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1><?php echo e(__('Submitted Forms of ' . ' ' . $forms_details->title)); ?></h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="<?php echo e(route('home')); ?>"><?php echo e(__('Dashboard')); ?></a></div>
                    <div class="breadcrumb-item"><?php echo e(__('Submitted Forms')); ?></div>
                </div>
            </div>
            <?php if(!empty($forms_details->logo)): ?>
            <div class="text-center gallery gallery-md">
                <img id="app-dark-logo" class="gallery-item float-none"
                    src="<?php echo e(asset('storage/app/' . $forms_details->logo)); ?>" alt="form_logo">
            </div>
        <?php endif; ?>
        <h2 class="text-center"><?php echo e($forms_details->title); ?></h2>
            <div class="section-body filter">
                <div class="row">
                    <div class="col-md-12 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage-submitted-form')): ?>
                                    <div class="text-right">
                                        <input type="text"
                                            class="form-control form-control-sm w-auto d-inline custom_padding form-control-light"
                                            id="duration1" name="duration" value="<?php echo e(__('Select Date Range')); ?>" />
                                        <input type="hidden" name="start_date1" id="start_date1" />
                                        <input type="hidden" name="due_date1" id="end_date1" />
                                        <input type="hidden" name="form_id" id="form_id" value="<?php echo e($forms_details->id); ?>">
                                        <button class="btn btn-primary btn-lg ml-2" id="filter"><?php echo e(__('Filter')); ?></button>
                                    </div>
                                <?php endif; ?>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive py-4">
                                            <?php echo e($dataTable->table(['width' => '100%'])); ?>

                                            <?php echo Form::open(['route' => ['mass.export.csv'], 'method' => 'post', 'id' => 'mass_export']); ?>

                                            <?php echo e(Form::hidden('form_id', $forms_details->id)); ?>

                                            <?php echo e(Form::hidden('start_date')); ?>

                                            <?php echo e(Form::hidden('end_date')); ?>

                                            <?php echo Form::close(); ?>

                                            <?php echo Form::open(['route' => ['mass.export.xlsx'], 'method' => 'post', 'id' => 'mass_export_xlsx']); ?>

                                            <?php echo e(Form::hidden('form_id', $forms_details->id)); ?>

                                            <?php echo e(Form::hidden('start_date')); ?>

                                            <?php echo e(Form::hidden('end_date')); ?>

                                            <?php echo Form::close(); ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-md-12" id="chart_div">
                                <style>
                                    .pie-chart {
                                        width: 100%;
                                        height: 400px;
                                        margin: 0 auto;
                                        float: right;
                                    }

                                    .text-center {
                                        text-align: center;
                                    }

                                    @media (max-width: 991px) {
                                        .pie-chart {
                                            width: 100%;
                                        }
                                    }

                                </style>
                                <script src="<?php echo e(asset('assets/js/loader.js')); ?>"></script>
                                <script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
                               
                                <div class="row">
                                    <?php ($key = 1); ?>
                                    <?php $__currentLoopData = $chartData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-lg-6  mb-3">
                                            <?php if($chart['chart_type'] == 'bar'): ?>
                                                <div id="chartDiv-<?php echo e($key); ?>" class="pie-chart"></div>
                                            <?php endif; ?>
                                            <?php if($chart['chart_type'] == 'pie'): ?>
                                                <div id="chartDive-<?php echo e($key); ?>" class="pie-chart"></div>
                                            <?php endif; ?>

                                        </div>
                                        <script type="text/javascript">
                                            function drawChart<?php echo e($key); ?>() {
                                                var data = new google.visualization.DataTable();
                                                data.addColumn('string', 'Pizza');
                                                data.addColumn('number', 'Populartiy');
                                                data.addRows([
                                                    <?php $__currentLoopData = $chart['options']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label => $count): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        ['<?php echo e($label); ?>', <?php echo e($count); ?>],
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                ]);
                                                var options = {
                                                    title: "<?php echo e($chart['label']); ?>",
                                                    sliceVisibilityThreshold: .0,
                                                };
                                                <?php if($chart['chart_type'] == 'bar'): ?>
                                                    var chart = new google.visualization.ColumnChart(document.getElementById('chartDiv-<?php echo e($key); ?>'));
                                                    chart.draw(data, options);
                                                <?php endif; ?>
                                                <?php if($chart['chart_type'] == 'pie'): ?>
                                                    var chart = new google.visualization.PieChart(document.getElementById('chartDive-<?php echo e($key); ?>'));
                                                    chart.draw(data, options);
                                                <?php endif; ?>
                                            }
                                        </script>
                                        <?php ($key++); ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <script>
                                    window.onload = function() {
                                        google.load("visualization", "1.1", {
                                            packages: ["corechart"],
                                            callback: 'drawAllChart'
                                        });
                                    };

                                    function drawAllChart() {
                                        <?php ($key = 1); ?>
                                        <?php $__currentLoopData = $chartData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            drawChart<?php echo e($key); ?>();
                                            <?php ($key++); ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('style'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendor/daterangepicker/daterangepicker.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('vendor/select2/dist/css/select2.min.css')); ?>">
    <?php echo $__env->make('layouts.includes.datatable_css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('script'); ?>
    <script type="text/javascript" src="<?php echo e(asset('vendor/daterangepicker/daterangepicker.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/select2/dist/js/select2.full.min.js')); ?>"></script>
    <?php echo $__env->make('layouts.includes.datatable_js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script>
        $(document).ready(function() {
            $('.custom_select').select2();

            $(document).on("click", "#filter", function() {
                getData();
            });
            $(document).on("click", ".buttons-csv", function() {
                $("#mass_export input[name='start_date']").val($("#start_date1").val());
                $("#mass_export input[name='end_date']").val($("#end_date1").val());
                $("#mass_export").submit();
            })
            $(document).on("click", ".buttons-excel", function() {
                $("#mass_export_xlsx input[name='start_date']").val($("#start_date1").val());
                $("#mass_export_xlsx input[name='end_date']").val($("#end_date1").val());
                $("#mass_export_xlsx").submit();
            })
            window.LaravelDataTables = null;

            function getData() {
                if (window.LaravelDataTables == null) {
                    window.LaravelDataTables = $("#forms-table").DataTable({
                        "serverSide": true,
                        "processing": true,
                        "ajax": {
                            "url": "<?php echo e(route('formvalues.index')); ?>",
                            "type": "GET",
                            "data": function(data) {
                                for (var i = 0, len = data.columns.length; i < len; i++) {
                                    if (!data.columns[i].search.value) delete data.columns[i].search;
                                    if (data.columns[i].searchable === true) delete data.columns[i]
                                        .searchable;
                                    if (data.columns[i].orderable === true) delete data.columns[i]
                                        .orderable;
                                    if (data.columns[i].data === data.columns[i].name) delete data
                                        .columns[i]
                                        .name;
                                }
                                delete data.search.regex;
                                data.form = $("#form_id").val();
                                data.start_date = $("#start_date1").val();
                                data.end_date = $("#end_date1").val();
                            }
                        },
                        "columns": [{
                                "name": "id",
                                "data": "DT_RowIndex",
                                "title": "<?php echo e(__('No')); ?>",
                                "orderable": true,
                                "searchable": true
                            }, {
                                "data": "title",
                                "name": "forms.title",
                                "title": "<?php echo e(__('Title')); ?>",
                                "orderable": true,
                                "searchable": true
                            }, {
                                "data": "user",
                                "name": "user",
                                "title": "<?php echo e(__('User')); ?>",
                                "orderable": true,
                                "searchable": true
                            },
                            {
                                "data": "amount",
                                "name": "amount",
                                "title": "<?php echo e(__('Amount')); ?>",
                                "orderable": true,
                                "searchable": true
                            },
                            {
                                "data": "transaction_id",
                                "name": "transaction_id",
                                "title": "<?php echo e(__('Transaction ID')); ?>",
                                "orderable": true,
                                "searchable": true
                            },
                            {
                                "data": "payment_type",
                                "name": "payment_type",
                                "title": "<?php echo e(__('Payment Type')); ?>",
                                "orderable": true,
                                "searchable": true
                            },
                            {
                                "data": "created_at",
                                "name": "created_at",
                                "title": "<?php echo e(__('Created At')); ?>",
                                "orderable": true,
                                "searchable": true
                            }, {
                                "data": "action",
                                "name": "action",
                                "title": "<?php echo e(__('Action')); ?>",
                                "orderable": false,
                                "searchable": false,
                                "className": "text-right"
                            }
                        ],
                        "dom": "Bfrtip",
                        "order": [
                            [3, "desc"]
                        ],
                        "language": {
                            "paginate": {
                                "next": "<i class=\"fas fa-angle-right\"><\/i>",
                                "previous": "<i class=\"fas fa-angle-left\"><\/i>"
                            }
                        },
                        "language": {
                            "buttons": {
                                "export": "<?php echo e(__('Export')); ?>",
                                "print": "<?php echo e(__('Print')); ?>",
                                "reset": "<?php echo e(__('Reset')); ?>",
                                "reload": "<?php echo e(__('Reload')); ?>",
                                "excel": "<?php echo e(__('Excel')); ?>",
                                "csv": "<?php echo e(__('CSV')); ?>",
                                "pageLength": "<?php echo e(__('Show %d rows')); ?>"
                            }
                        },
                        "dom": "\n<'row'<'col-sm-12'><'col-sm-9 'B><'col-sm-3'f>>\n<'row'<'col-sm-12'tr>>\n<'row mt-3'<'col-sm-5'i><'col-sm-7'p>>\n",
                        "buttons": [{
                            "extend": "export",
                            "className": "btn btn-primary btn-sm no-corner mass_export",
                        }, {
                            "extend": "print",
                            "className": "btn btn-primary btn-sm no-corner"
                        }, {
                            "extend": "reset",
                            "className": "btn btn-primary btn-sm no-corner"
                        }, {
                            "extend": "reload",
                            "className": "btn btn-primary btn-sm no-corner"
                        }, {
                            "extend": "pageLength",
                            "className": "btn btn-danger btn-sm no-corner"
                        }],
                        "scrollX": true
                    });
                } else {
                    window.LaravelDataTables.ajax.reload();
                }
            }
            getData();
            $(function() {
                function cb(start, end) {
                    $("#duration1").val(start.format('MMM D, YY hh:mm A') + ' - ' + end.format(
                        'MMM D, YY hh:mm A'));
                    $('input[name="start_date1"]').val(start.format('YYYY-MM-DD HH:mm:ss'));
                    $('input[name="due_date1"]').val(end.format('YYYY-MM-DD HH:mm:ss'));
                }
                $('#duration1').daterangepicker({
                    timePicker: true,
                    autoUpdateInput: false,
                    locale: {
                        format: 'MMM D, YY hh:mm A',
                        applyLabel: "<?php echo e(__('Apply')); ?>",
                        cancelLabel: "<?php echo e(__('Cancel')); ?>",
                        fromLabel: "<?php echo e(__('From')); ?>",
                        toLabel: "<?php echo e(__('To')); ?>",
                        daysOfWeek: [
                            "<?php echo e(__('Sun')); ?>",
                            "<?php echo e(__('Mon')); ?>",
                            "<?php echo e(__('Tue')); ?>",
                            "<?php echo e(__('Wed')); ?>",
                            "<?php echo e(__('Thu')); ?>",
                            "<?php echo e(__('Fri')); ?>",
                            "<?php echo e(__('Sat')); ?>"
                        ],
                        monthNames: [
                            "<?php echo e(__('January')); ?>",
                            "<?php echo e(__('February')); ?>",
                            "<?php echo e(__('March')); ?>",
                            "<?php echo e(__('April')); ?>",
                            "<?php echo e(__('May')); ?>",
                            "<?php echo e(__('June')); ?>",
                            "<?php echo e(__('July')); ?>",
                            "<?php echo e(__('August')); ?>",
                            "<?php echo e(__('September')); ?>",
                            "<?php echo e(__('October')); ?>",
                            "<?php echo e(__('November')); ?>",
                            "<?php echo e(__('December')); ?>"
                        ],
                    }
                }, cb);
            });
        });
        
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/T7/Macs/htdocs/qrb/resources/views/form_value/view_submited_form.blade.php ENDPATH**/ ?>