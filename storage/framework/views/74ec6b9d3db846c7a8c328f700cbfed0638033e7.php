
<?php $__env->startSection('title', __('Form')); ?>
<?php $__env->startSection('content'); ?>
    <!-- Content Wrapper. Contains page content -->

    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1><?php echo e(__('Fill Forms')); ?></h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="<?php echo e(route('home')); ?>"><?php echo e(__('Dashboard')); ?></a></div>
                    <div class="breadcrumb-item"><a href="<?php echo e(route('forms.index')); ?>"><?php echo e(__('Form')); ?></a></div>
                    <div class="breadcrumb-item"><?php echo e(__('Fill')); ?></div>
                </div>
            </div>

            <?php echo $__env->make('form.multi_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </section>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('style'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/jqueryform/css/demo.css')); ?>">
    <link href="<?php echo e(asset('assets/jqueryform/css/jquery.rateyo.min.css')); ?>" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo e(asset('vendor/select2/dist/css/select2.min.css')); ?>">
    <style>
        /* Mark input boxes that gets an error on validation: */
        /* input.invalid {background-color: #ffdddd; } */

        .invalid {
            background-color: #ffdddd;
			border: 1px solid #cc0033;
        }

        /* Hide all steps by default: */
        .tab {
            display: none;
        }

        #prevBtn {
            background-color: #bbbbbb;
        }

        /* Make circles that indicate the steps of the form: */
        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }

        .step.active {
            opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
            background-color: #394EEA;
        }

    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script'); ?>
    <script src="<?php echo e(asset('assets/jqueryform/js/jquery.rateyo.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jquery.payment.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/select2/dist/js/select2.full.min.js')); ?>"></script>


    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script
        src="https://www.paypal.com/sdk/js?client-id=<?php echo e(env('PAYPAL_SANDBOX_CLIENT_ID')); ?>&currency=<?php echo e($form->currency_name); ?>">
    </script>
    <script>
        var form_value_id = $('#form_value_id').val();
        //var SITEURL = '<?php echo e(URL::to('')); ?>';
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        ('restrictNumeric');
        $('.cc-number').payment('formatCardNumber');
        $('.cc-exp').payment('formatCardExpiry');
        $('.cc-cvc').payment('formatCardCVC');


        $.fn.toggleInputError = function(erred) {
            this.parent('.form-group').toggleClass('has-error', erred);
            return this;
        };




        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab


        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                $('.cap').show();
                $('.strip').show();
                $('.razorpay').show();
                $('.paypal').show();


                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                $('.cap').hide();
                $('.strip').hide();
                $('.razorpay').hide();
                $('.paypal').hide();


                document.getElementById("nextBtn").innerHTML = "Next";
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }

        function cleanInvalid() {
            $(".invalid").each(function(){
                $(this).removeClass('invalid');
            });
        }

        function nextPrev(n) {
            console.log("fill");
            cleanInvalid();
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) {
                alert("Please fill the form properly");
                return false;
            }
            // Hide the current tab:
            $('.tab').hide();
            // x[currentTab].style.display = "none";

            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            // alert(x.length);
            if (currentTab >= x.length) {
                // ... the form gets submitted:
                var formData = new FormData($('#fill-form')[0]);
                var $this = $("#nextBtn");
                var loadingText = '<i class="fa fa-spinner fa-spin"></i> Submiting form';
                if ($("#nextBtn").html() !== loadingText) {
                    $this.data('original-text', $("#nextBtn").html());
                    $this.html(loadingText);
                }
                <?php if($form->payment_type == 'paypal'): ?>
                    if($('#payment_id').val() == ''){
                    var errorElement = document.getElementById('paypal-errors');
                    iziToast.error({
                    title: 'Error!',
                    message: "<?php echo e('Please make payment'); ?>",
                    position: 'topRight'
                    });
                    $('#nextBtn').removeAttr('disabled');
                        $('#nextBtn').html(' Submit')
                        showTab(n);

                    return false;

                    }
                <?php endif; ?>
                let partialSave = false;
                make_payment(partialSave);
                setLoading(false);
                // $("#fill-form").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
            resetFormDisableElems();
        }

        function validateForm() {
           // $("#fill-form" ).validate();
            var valid = true;
            $('.step-' + currentTab).find('.required').each(function() {
                var name = $(this).attr('name');
                if ($(this).val() == "") {
                    $(this).addClass('invalid');

                    valid = false;
                } else {
                    valid = true;
                }
                if ($(this).attr('type') == 'email') {
                    var emailStr = $(this).val();
                    var regex = /^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i;
                    if (regex.test(emailStr)) {
                        valid = true;
                    } else {
                        $(this).addClass('invalid');
                        valid = false;
                    }
                }

                if ($(this).attr('type') == 'radio') {
                    if ($('input[name="' + name + '"]:checked').length <= 0) {
                        $(this).parent().addClass('invalid');
                       // $('.required-msg').html('Select any one');
                        valid = false;
                    } else {
                        valid = true;

                    }
                }
				
              if ($(this).attr('type') == 'checkbox') {

                    if ($('input[name="' + name + '"]:checked').length <= 0) {

                        $(this).parent().addClass('invalid');
                      //  $('.required-msg').html('Select any one');
                        valid = false;
                    } else {
                        valid = true;

                    }
                }
				
                if ($(this).attr('type') == 'number') {
                    if ($(this).val() == "") {
                        $(this).addClass('invalid');
                        valid = false;
                    } else {
                        valid = true;

                    }
                }
                if ($(this).attr('type') == 'file') {
                    var inp = $(this).attr('name');

                    if (inp.length == 0) {
                        $(this).addClass('invalid');
                        valid = false;
                        alert("Attachment Required");
                        inp.focus();

                    } else {
                        valid = true;

                    }
                }

            });
            // alert(valid);
            if (valid) {
                $('.step-' + currentTab).addClass('finish');
                // document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }




        function make_payment(partialSave) {
            // debugger;
            // alert("sdfsd");
            var formData = new FormData($('#fill-form')[0]);
            if (form_value_id == '') {

                <?php if($form->payment_status == 1): ?>
                    <?php if($form->payment_type == 'stripe'): ?>
                        stripe.createToken(card).then(function(result) {
                        if (result.error) {
                        // Inform the user if there was an error
                        var errorElement = document.getElementById('card-errors');
                        errorElement.textContent = result.error.message;
                        } else {
                        formData.append('stripeToken', result.token.id);
                        }
                        }).then(function(){
                        submitForm(formData);
                        });
                    <?php elseif($form->payment_type == 'razorpay'): ?>
                        var amount = '<?php echo e($form->amount); ?>';
                        var name = '<?php echo e($form->title); ?>';
                        var currency = '<?php echo e($form->currency_name); ?>';
                        var form_id = '<?php echo e($form->id); ?>';


                        var data = {
                        "_token": "<?php echo e(csrf_token()); ?>",
                        'price': amount,
                        'name': name,
                        'currency': currency,
                        'form_id': form_id,

                        }
                        // console.log(data);

                        var options = {
                        "key": "<?php echo e(env('RAZORPAY_KEY')); ?>",
                        "amount": (amount * 100),
                        "name": name,
                        'currency': currency,
                        "description": "",
                        "image": '',
                        "handler": function(response) {
                        console.log(response);
                        // $('#payment_id').val(response.razorpay_payment_id);
                        formData.append('payment_id', response.razorpay_payment_id);

                        submitForm(formData,partialSave);

                        // var data =
                        '<?php echo e(Crypt::encrypt(['payment_id' => ',response.razorpay_payment_id,','plan_id' => 'plan_id','request_user_id' => 'user_id','order_id' => 'order_id','type' => 'razorpay'])); ?>';

                        // window.location.href = SITEURL + '/' + 'pre-payment-success/' + data;
                        },
                        "theme": {
                        "color": "#528FF0"
                        }
                        };
                        // console.log(options);

                        // setLoading(true);
                        var rzp1 = new Razorpay(options);
                        rzp1.open();
                        // e.preventDefault();
                    <?php else: ?>
                        submitForm(formData,partialSave);
                    <?php endif; ?>
                <?php else: ?>
                    submitForm(formData,partialSave);
                <?php endif; ?>
            } else {
                //  debugger;
                
                    submitForm(formData,partialSave);
                
                
            }
        }
        
        function submitFormD(formData) {
            // alert('here FIll Page');
            formData.append('ajax', true);
            $.ajax({
                type: "POST",
                url: '<?php echo e(route('forms.fill.store', $form->id)); ?>',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.is_success) {

                        $('.card-body').html(
                            '<div class="text-center gallery" id="success_loader"><img src="<?php echo e(asset('assets/images/success.gif')); ?>" class="" /><br><br><h2 class="w-100 "> Form Saved Successfully...</h2></div>');
                        $('#nextBtns').removeAttr('disabled');
                        $('#nextBtns').html(' Save Form');
                    } else {
                        iziToast.error({
                            title: 'Error!',
                            message: response.message,
                            position: 'topRight'
                        });
                        $('#nextBtns').removeAttr('disabled');
                        $('#nextBtns').html(' Save Form')
                        showTab(0);
                    }
                },
                error: function(error) {
                    console.log(error);
                }
            });
        }

        $save_as_draft = false;

function saveAsDraftXtra(n){
   
   var x = document.getElementsByClassName("tab");
   console.log("============currentTab===============");
   console.log(currentTab);
   
   if (currentTab == 0 && !validateForm()) {
       alert("Please fill the form properly");
       return false;
   }
   
   $save_as_draft = true;
 
   var formData = new FormData($('#fill-form')[0]);

   var $this = $("#saveAsDraft");
   var loadingText = '<i class="fa fa-spinner fa-spin"></i> Submiting form';
      if ($("#saveAsDraft").html() !== loadingText) {
          $this.data('original-text', $("#saveAsDraft").html());
          $this.html(loadingText);
          $('#saveAsDraft').prop('disabled', true);
      }
          
         let partialSave = true;
         nextPrev(n);
          make_payment(partialSave);   
         
      //    save_next(partialSave,n)
         
}

function saveandClose(n){
   
     var x = document.getElementsByClassName("tab");
     
     if (n == 1 && !validateForm()) {
         alert("Please fill the form properly");
         return false;
     }
     
   
     var formData = new FormData($('#fill-form')[0]);

     var $this = $("#nextBtns");
     var loadingText = '<i class="fa fa-spinner fa-spin"></i> Submiting form';
        if ($("#nextBtns").html() !== loadingText) {
            $this.data('original-text', $("#nextBtns").html());
            $this.html(loadingText);
            $('#nextBtns').prop('disabled', true);
        }
            
           let partialSave = true;
		   nextPrev(n);
            make_payment(partialSave);   
           
        //    save_next(partialSave,n)
           
}


        function submitForm(formData,partialSave) {
            formData.append('ajax', true);
            $.ajax({
                type: "POST",
                url: '<?php echo e(route('forms.fill.store', $form->id)); ?>',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    console.log("====================response====================");
                    console.log(response);
                    console.log("====================partialSave====================");
                    console.log(partialSave);
                    console.log("====================response====================");

                   if (response.is_success && partialSave) {

                        // $('.card-body').html(
                        //     '<div class="text-center gallery" id="success_loader"><img src="<?php echo e(asset('assets/images/success.gif')); ?>" class="" /><br><br><h2 class="w-100 ">Your form is saved partially.</h2></div>');
                        
                        if($save_as_draft) {
                            $('.card-body').html(
                                '<div class="text-center gallery" id="success_loader">' +
                                '<img src="<?php echo e(asset('assets/images/success.gif')); ?>" class="" />' + 
                                '<br><br><h2 class="w-100 ">Successfully saved as draft</h2></div>'
                            );

                            $save_as_draft = false;

                            $('#saveAsDraft').removeAttr('disabled');
                            $('#saveAsDraft').html(' Submit');
                        
                            showTab(0);
                        } else {
                            $('#nextBtns').removeAttr('disabled');
                            $('#nextBtns').html($('#nextBtns').data('original-text'));
                            
                            iziToast.success({
                                title: 'Success!',
                                message: response.message,
                                position: 'topRight'
                            });
                        }

                    } else if(response.is_success && !partialSave){
                       $('.card-body').html(
                            '<div class="text-center gallery" id="success_loader"><img src="<?php echo e(asset('assets/images/success.gif')); ?>" class="" /><br><br><h2 class="w-100 ">' +
                            response.message + '</h2></div>');
                        $('#nextBtn').removeAttr('disabled');
                        $('#nextBtn').html(' Submit');
                    } else {
                        iziToast.error({
                            title: 'Error!',
                            message: response.message,
                            position: 'topRight'
                        });
                        $('#nextBtn').removeAttr('disabled');
                        $('#nextBtn').html(' Submit')
                        showTab(0);
                    }
                },
                error: function(error) {
                    console.log(error);
                    $save_as_draft = false;
                },
                complete: function(x) {
                    $save_as_draft = false;
                }
            });
        }
		
		
		function save_next(partialSave,n){
            // debugger;
            // alert("sdfsd");
            var formData = new FormData($('#fill-form')[0]);
                // debugger;
                
                    submitForm(formData,partialSave);
                	nextPrev(n);
	}
		

        $(document).on("click", "input[type='checkbox']", function() {
            var name = $(this).attr('name');
            checkCheckbox(name);
        });
        $("body input[type='checkbox']").each(function(i, item) {
            var name = $(item).attr('name');
            checkCheckbox(name);
        });

        function checkCheckbox(name) {

            if ($("input[name='" + name + "']:checked").length) {
                $("input[name='" + name + "']").removeAttr('required');
            } else {
                $("input[name='" + name + "']").attr('required', 'required');
            }
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }
    </script>

    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $("#setData").trigger('click');
            }, 30);

        });
        $(function() {
            $(document).on("submit", "#fill-form", function(e) {

                e.preventDefault();
                var $this = $("#nextBtn");
                var loadingText = '<i class="fa fa-spinner fa-spin"></i> Submiting form';
                if ($("#nextBtn").html() !== loadingText) {
                    $this.data('original-text', $("#nextBtn").html());
                    $this.html(loadingText);
                }
                var formData = new FormData($('#fill-form')[0]);


                if (form_value_id == '') {
                    <?php if($form->payment_status == 1): ?>
                        <?php if($form->payment_type == 'stripe'): ?>
                            stripe.createToken(card).then(function(result) {
                            if (result.error) {
                            // Inform the user if there was an error
                            var errorElement = document.getElementById('card-errors');
                            errorElement.textContent = result.error.message;
                            } else {
                            formData.append('stripeToken', result.token.id);
                            }
                            }).then(function(){
                            submitForm(formData);
                            });
                        <?php elseif($form->payment_type == 'razorpay'): ?>
                            var amount = '<?php echo e($form->amount); ?>';
                            var name = '<?php echo e($form->title); ?>';
                            var currency = '<?php echo e($form->currency_name); ?>';
                            var form_id = '<?php echo e($form->id); ?>';


                            var data = {
                            "_token": "<?php echo e(csrf_token()); ?>",
                            'price': amount,
                            'name': name,
                            'currency': currency,
                            'form_id': form_id,


                            }
                            // console.log(data);



                            var options = {
                            "key": "<?php echo e(env('RAZORPAY_KEY')); ?>",
                            "amount": (amount * 100),
                            "name": name,
                            "description": "",
                            "image": '',
                            "handler": function(response) {
                            console.log(response);
                            // $('#payment_id').val(response.razorpay_payment_id);
                            formData.append('payment_id', response.razorpay_payment_id);

                            submitForm(formData);




                            // var data =
                            '<?php echo e(Crypt::encrypt(['payment_id' => ',response.razorpay_payment_id,','plan_id' => 'plan_id','request_user_id' => 'user_id','order_id' => 'order_id','type' => 'razorpay'])); ?>';

                            // window.location.href = SITEURL + '/' + 'pre-payment-success/' + data;
                            },
                            "theme": {
                            "color": "#528FF0"
                            }
                            };
                            // console.log(options);

                            // setLoading(true);
                            var rzp1 = new Razorpay(options);
                            rzp1.open();
                            // e.preventDefault();
                        <?php else: ?>
                            submitForm(formData);
                        <?php endif; ?>
                    <?php else: ?>
                        submitForm(formData);
                    <?php endif; ?>
                } else {
                    submitForm(formData);
                }

            });


        });
    </script>
    <script>
        $(document).ready(function() {
            $(".custom_select").select2();
        })
        var $starRating = $('.starRating');
        if ($starRating.length) {
            $starRating.each(function() {
                var val = $(this).attr('data-value');
                var num_of_star = $(this).attr('data-num_of_star');
                $(this).rateYo({
                    rating: val,
                    halfStar: true,
                    numStars: num_of_star,
                    precision: 2,
                    onSet: function(rating, rateYoInstance) {
                        num_of_star = $(rateYoInstance.node).attr('data-num_of_star');
                        var input = ($(rateYoInstance.node).attr('id'));
                        if (num_of_star == 10) {
                            rating = rating * 2;
                        }
                        $('input[name="' + input + '"]').val(rating);
                    }
                })
            });
        }
        if ($(".ck_editor").length) {
            CKEDITOR.replace($('.ck_editor').attr('name'), {
                filebrowserUploadUrl: "<?php echo e(route('ckeditor.upload', ['_token' => csrf_token()])); ?>",
                filebrowserUploadMethod: 'form'
            });
        }
    </script>
    <?php if($form->payment_status == 1): ?>
        <script>
            var stripe, card;
            $(document).ready(function() {

                <?php if($form->payment_status == 1): ?>
                    <?php if($form->payment_type == 'stripe'): ?>
                        stripe = Stripe('<?php echo e(env('STRIPE_KEY')); ?>');
                        var elements = stripe.elements();
                        var style = {
                        base: {
                        color: '#32325d',
                        lineHeight: '24px',
                        fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                        fontSmoothing: 'antialiased',
                        fontSize: '18px',
                        '::placeholder': {
                        color: '#aab7c4'
                        }
                        },
                        invalid: {
                        color: '#fa755a',
                        iconColor: '#fa755a'
                        }
                        };
                        // Create an instance of the card Element
                        card = elements.create('card', {
                        style: style
                        });
                        // Add an instance of the card Element into the `card-element` <div>
                            card.mount('#card-element');
                            // Handle real-time validation errors from the card Element.
                            card.addEventListener('change', function(event) {
                            var displayError = document.getElementById('card-errors');
                            if (event.error) {
                            displayError.textContent = event.error.message;
                            } else {
                            displayError.textContent = '';
                            }
                            });
                    <?php endif; ?>
                    <?php if($form->payment_type == 'paypal'): ?>
                        var amount = '<?php echo e($form->amount); ?>';
                        var name = '<?php echo e($form->title); ?>';
                        var currency = '<?php echo e($form->currency_name); ?>';
                        var form_id = '<?php echo e($form->id); ?>';

                        paypal.Buttons({

                        // Set up the transaction
                        createOrder: function(data, actions) {
                        return actions.order.create({
                        purchase_units: [{
                        amount: {
                        value: amount
                        }
                        }]
                        });
                        },

                        // Finalize the transaction
                        onApprove: function(data, actions) {
                        return actions.order.capture().then(function(orderData) {
                        // Successful capture! For demo purposes:
                        console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                        var transaction = orderData.purchase_units[0].payments.captures[0];

                        // alert(transaction.id);
                        // alert('Transaction '+ transaction.status + ': ' + transaction.id + '\n\nSee console for all available details');

                        // var formData = new FormData($('#fill-form')[0]);
                        // formData.append('payment_id', transaction.id);

                        $('#payment_id').val(transaction.id);

                        var errorElement = document.getElementById('paypal-errors');
                        errorElement.textContent = '';

                        $('#paypal-button-container').html('')

                        // submitForm(formData);
                        // Replace the above to show a success message within this page, e.g.
                        // const element = document.getElementById('paypal-button-container');
                        // element.innerHTML = '';
                        // element.innerHTML = '<h3>Thank you for your payment!</h3>';
                        // Or go to another URL: actions.redirect('thank_you.html');
                        });
                        }


                        }).render('#paypal-button-container');
                    <?php endif; ?>
                <?php endif; ?>

            });

            
        </script>
        <script type="text/javascript" src="https://js.stripe.com/v3/"></script>

    <?php endif; ?>

    <script>
        $(document).ready(function(){
            resetFormDisableElems();
        });

        function resetFormDisableElems() {
            loadDisable('q2c', $("input[name='q2c']:checked").val());
            loadDisable('q2d', $("input[name='q2d']:checked").val());
            loadDisable('q3a3', $("input[name='q3a3']:checked").val());
            loadDisable('q4a2', $("input[name='q4a2']:checked").val());
            loadDisable('q6a', $("input[name='q6a']:checked").val());
            loadDisable('q7a', $("input[name='q7a']:checked").val());
            loadDisable('q7d', $("input[name='q7d']:checked").val());
            loadDisable('q8a', $("input[name='q8a']:checked").val());
            loadDisable('q9a', $("input[name='q9a']:checked").val());
            loadDisable('q10a', $("input[name='q10a']:checked").val());
            loadDisable('q10b', $("input[name='q10b']:checked").val());
            loadDisable('q10d', $("input[name='q10d']:checked").val());
            loadDisable('q11a', $("input[name='q11a']:checked").val());
            loadDisable('q11b', $("input[name='q11b']:checked").val());
            loadDisable('q11d', $("input[name='q11d']:checked").val());
            loadDisable('q12a', $("input[name='q12a']:checked").val());
            loadDisable('q12c1', $("input[name='q12c1']:checked").val());
            loadDisable('q12c2', $("input[name='q12c2']:checked").val());
            loadDisable('q12c3', $("input[name='q12c3']:checked").val());
            loadDisable('q13a', $("input[name='q13a']:checked").val());
            loadDisable('q14', $("input[name='q14']:checked").val());
            loadDisable('q15a', $("input[name='q15a']:checked").val());
            loadDisable('q15b1', $("input[name='q15b1']:checked").val());
            loadDisable('q15b2', $("input[name='q15b2']:checked").val());
            loadDisable('q15b3', $("input[name='q15b3']:checked").val());
            loadDisable('q16a', $("input[name='q16a']:checked").val());
            loadDisable('q16b', $("input[name='q16b']:checked").val());
            loadDisable('q16c', $("input[name='q16c']:checked").val());
            loadDisable('q16d', $("input[name='q16d']:checked").val());
            loadDisable('q17c', $("input[name='q17c']:checked").val());
            loadDisable('q17d', $("input[name='q17d']:checked").val());
            loadDisable('q17e1', $("input[name='q17e1']:checked").val());
            loadDisable('q17e2', $("input[name='q17e2']:checked").val());
            loadDisable('q17e3', $("input[name='q17e3']:checked").val());
            loadDisable('q17f', $("input[name='q17f']:checked").val());
            loadDisable('q18a', $("input[name='q18a']:checked").val());
            loadDisable('q18b', $("input[name='q18b']:checked").val());
            loadDisable('q18c', $("input[name='q18c']:checked").val());
            loadDisable('q18d', $("input[name='q18d']:checked").val());
            loadDisable('q18e', $("input[name='q18e']:checked").val());
            loadDisable('q19a', $("input[name='q19a']:checked").val());
            loadDisable('q19d', $("input[name='q19d']:checked").val());
            loadDisable('q19e', $("input[name='q19e']:checked").val());
            loadDisable('q19f', $("input[name='q19f']:checked").val());
            loadDisable('q20a', $("input[name='q20a']:checked").val());
            loadDisable('q20b', $("input[name='q20b']:checked").val());
            loadDisable('q21a', $("input[name='q21a']:checked").val());
            loadDisable('q21b', $("input[name='q21b']:checked").val());
            loadDisable('q22d', $("input[name='q22d']:checked").val());
            loadDisable('q25a', $("input[name='q25a']:checked").val());
            loadDisable('q26a', $("input[name='q26a']:checked").val());
            loadDisable('q26e', $("input[name='q26e']:checked").val());
            loadDisable('q27a', $("input[name='q27a']:checked").val());
            loadDisable('q27b', $("input[name='q27b']:checked").val());
            loadDisable('q27c', $("input[name='q27c']:checked").val());
            loadDisable('q28a', $("input[name='q28a']:checked").val());
            loadDisable('q30b', $("input[name='q30b']:checked").val());
            loadDisable('q30c', $("input[name='q30c']:checked").val());
            loadDisable('q31a', $("input[name='q31a']:checked").val());
            loadDisable('q31b', $("input[name='q31b']:checked").val());
            loadDisable('q31c', $("input[name='q31c']:checked").val());
            loadDisable('q32a', $("input[name='q32a']:checked").val());
            loadDisable('q32b', $("input[name='q32b']:checked").val());
            loadDisable('q32c1', $("input[name='q32c1']:checked").val());
            loadDisable('q32c2', $("input[name='q32c2']:checked").val());
            loadDisable('q32c3', $("input[name='q32c3']:checked").val());
            loadDisable('q32c4', $("input[name='q32c4']:checked").val());
            loadDisable('q32d', $("input[name='q32d']:checked").val());
            loadDisable('q32e', $("input[name='q32e']:checked").val());
            loadDisable('q34a', $("input[name='q34a']:checked").val());
            loadDisable('q34c', $("input[name='q34c']:checked").val());
            loadDisable('q35a1', $("input[name='q35a1']:checked").val());
            loadDisable('q35a2', $("input[name='q35a2']:checked").val());
            loadDisable('q35a3', $("input[name='q35a3']:checked").val());
            loadDisable('q35c', $("input[name='q35c']:checked").val());
            loadDisable('q36a', $("input[name='q36a']:checked").val());
            loadDisable('q37a', $("input[name='q37a']:checked").val());
            loadDisable('q39d', $("input[name='q39d']:checked").val());
            loadDisable('q42b', $("input[name='q42b']:checked").val());
            loadDisable('q43a', $("input[name='q43a']:checked").val());
            loadDisable('q43b', $("input[name='q43b']:checked").val());
            loadDisable('q44a', $("input[name='q44a']:checked").val());
            loadDisable('q50', $("input[name='q50']:checked").val());
            loadDisable('q56a', $("input[name='q56a']:checked").val());
            loadDisable('q57c1', $("input[name='q57c1']:checked").val());
            loadDisable('q58a', $("input[name='q58a']:checked").val());
            loadDisable('q59a', $("input[name='q59a']:checked").val());
            loadDisable('q60a1', $("input[name='q60a1']:checked").val());
            loadDisable('q60a2', $("input[name='q60a2']:checked").val());
            loadDisable('q60a3', $("input[name='q60a3']:checked").val());
            loadDisable('q60a4', $("input[name='q60a4']:checked").val());
            loadDisable('q61b1', $("input[name='q61b1']:checked").val());
            loadDisable('q61b2', $("input[name='q61b2']:checked").val());
            loadDisable('q64a', $("input[name='q64a']:checked").val());
            loadDisable('q64b', $("input[name='q64b']:checked").val());
            loadDisable('q64c', $("input[name='q64c']:checked").val());
            loadDisable('q67a', $("input[name='q67a']:checked").val());
            loadDisable('q69a', $("input[name='q69a']:checked").val());
            loadDisable('q71a', $("input[name='q71a']:checked").val());
            loadDisable('q71b', $("input[name='q71b']:checked").val());
            loadDisable('q73a', $("input[name='q73a']:checked").val());
            loadDisable('q74a', $("input[name='q74a']:checked").val());
            loadDisable('q75a', $("input[name='q75a']:checked").val());
            
        }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/T7/Macs/htdocs/qrb/resources/views/form/fill.blade.php ENDPATH**/ ?>