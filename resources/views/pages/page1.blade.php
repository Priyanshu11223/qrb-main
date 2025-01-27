@extends('layouts.form')
@section('title', __('Fill'))
@section('content')
<div class="section-body">
    <div class="row mx-0 mt-5">
        <div class="col-md-5 mx-auto">
            @if (!empty($form->logo))
                <div class="text-center gallery gallery-md">
                    <img id="app-dark-logo" class="gallery-item float-none"
                        src="{{ asset('storage/app/' . $form->logo) }}" alt="form_logo">
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center w-100">{{ $form->title }}</h4>
                </div>
                <div class="card-body">
                    {{-- {{ Form::model($form, ['route' => ['forms.fill.store', $form->id], 'method' => 'PUT', 'id' => 'fill-form', 'enctype' => 'multipart/form-data']) }} --}}
                    <form action="{{ route('forms.fill.store', $form->id) }}" method="POST"
                        enctype="multipart/form-data" id="fill-form">
                        @method('PUT')
                        @if (session()->has('success'))
                            <div class="text-center gallery" id="success_loader">
                                <img src="{{ asset('assets/images/success.gif') }}" />
                                <br>
                                <br>
                                <h2 class="w-100 ">{{ session()->get('success') }}</h2>
                            </div>
                        @else
                        <!--@foreach ($array as $keys => $rows)-->
                        <!-- @foreach ($rows as $row_key => $row)-->
                        <!--    @if($row->type != '')-->
                        <!--    @if(isset($row->name))-->
                        <!--       $table->mediumText('{{$row->name}}')->nullable();<br>-->
                        <!--       $table->mediumText('RefNumber-{{$row->name}}')->nullable();<br>-->
                        <!--       $table->integer('{{$row->name}}-SA')->nullable();<br>-->
                        <!--       $table->integer('{{$row->name}}-SQ')->nullable();<br>-->
                        <!--    @endif   -->
                        <!--    @endif-->
                        <!--@endforeach-->
                        <!--@endforeach-->
                        
                            @foreach ($array as $keys => $rows)
                                <div class="tab">
                                    <div class="row">
                                        @foreach ($rows as $row_key => $row)
                                            @php
                                                if (isset($row->column)) {
                                                    if ($row->column == 1) {
                                                        $col = 'col-12 step-' . $keys;
                                                    } elseif ($row->column == 2) {
                                                        $col = 'col-6 step-' . $keys;
                                                    } elseif ($row->column == 3) {
                                                        $col = 'col-4 step-' . $keys;
                                                    }
                                                } else {
                                                    $col = 'col-12 step-' . $keys;
                                                }
                                            @endphp
                                            @if ($row->type == 'checkbox-group')
                                                <div class="form-group {{ $col }} ">
                                                    {{ Form::label($row->name, $row->label . ($row->required ? ' *' : ''), ['class' => 'd-block']) }}
                                                    @if (isset($row->description))
                                                        <small class="d-block">{{ $row->description }}</small>
                                                    @endif
                                                    @foreach ($row->values as $key => $options)
                                                        @php
                                                            $attr = ['class' => 'custom-control-input', 'id' => $row->name . '_' . $key];
                                                            $attr['name'] = $row->name . '[]';
                                                            if ($row->required) {
                                                                $attr['required'] = 'required';
                                                                $attr['class'] = $attr['class'] . ' required';
                                                            }
                                                            if ($row->inline) {
                                                                $class = 'form-check form-check-inline col-4 ';
                                                                if ($row->required) {
                                                                    $attr['class'] = 'custom-check-input required';
                                                                } else {
                                                                    $attr['class'] = 'custom-check-input';
                                                                }
                                                                $l_class = 'custom-check-label mb-0 ml-1';
                                                            } else {
                                                                $class = 'custom-control custom-checkbox';
                                                                if ($row->required) {
                                                                    $attr['class'] = 'custom-control-input required';
                                                                } else {
                                                                    $attr['class'] = 'custom-control-input';
                                                                }
                                                                $l_class = 'custom-control-label';
                                                            }
                                                        @endphp
                                                        <div class="{{ $class }}">
                                                            {{ Form::checkbox($row->name,$options->value,isset($options->selected) && $options->selected == 1 ? true : false,$attr) }}
                                                            <label class="{{ $l_class }}"
                                                                for="{{ $row->name . '_' . $key }}">{{ $options->label }}</label>
                                                        </div>
                                                    @endforeach
                                                    @if ($row->required)
                                                        <label class="required-msg" style="color:red"></label>
                                                    @endif
                                                </div>
                                            @elseif($row->type == 'file')
                                                @php
                                                    $attr = [];
                                                    $attr['class'] = 'form-control';
                                                    if (isset($row->multiple)) {
                                                        $attr['multiple'] = 'true';
                                                        $attr['name'] = $row->name . '[]';
                                                    }
                                                    if (isset($row->required) && (!isset($row->value) || empty($row->value))) {
                                                        $attr['required'] = 'required';
                                                        $attr['class'] = $attr['class'] . ' required';
                                                    }
                                                @endphp
                                                <div class="form-group {{ $col }}">
                                                    {{ Form::label($row->name, $row->label) }}@if ($row->required)
                                                        *
                                                    @endif
                                                    {{ Form::file($row->name, $attr) }}
                                                    @if (isset($row->description))
                                                        <small>{{ $row->description }}</small>
                                                    @endif
                                                    <div>
                                                        @if (isset($row->value))
                                                            @if (is_array($row->value))
                                                                <div class="row">
                                                                    @foreach ($row->value as $img)
                                                                        <div class="col-3">
                                                                            <img src="{{ Storage::url($img) }}"
                                                                                class="img-responsive img-thumbnail mb-2">
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                            @elseif($row->type == 'header')
                                                @php
                                                    $class = '';
                                                    if (isset($row->className)) {
                                                        $class = $class . ' ' . $row->className;
                                                    }
                                                @endphp
                                                <div class="{{ $col }}">
                                                    <{{ $row->subtype }} class="{{ $class }}">
                                                        {{ $row->label }}
                                                        </{{ $row->subtype }}>
                                                </div>
                                            @elseif($row->type == 'paragraph')
                                                @php
                                                    $class = '';
                                                    if (isset($row->className)) {
                                                        $class = $class . ' ' . $row->className;
                                                    }
                                                @endphp
                                                <div class="{{ $col }}">
                                                    <{{ $row->subtype }} class="{{ $class }}">
                                                        {{ $row->label }}
                                                        </{{ $row->subtype }}>
                                                </div>
                                            @elseif($row->type == 'radio-group')
                                                <div class="form-group {{ $col }}">
                                                    {{ Form::label($row->name, $row->label . ($row->required ? ' *' : ''), ['class' => 'd-block']) }}
                                                    @if (isset($row->description))
                                                        <small class="d-block">{{ $row->description }}</small>
                                                    @endif
                                                    @foreach ($row->values as $key => $options)
                                                        @php
                                                            // $attr = ['class' => 'custom-control-input', 'id' => $row->name . '_' . $key];
                                                            if ($row->required) {
                                                                $attr['required'] = 'required';
                                                                $attr = ['class' => 'custom-control-input required', 'required' => 'required', 'id' => $row->name . '_' . $key];
                                                            } else {
                                                                $attr = ['class' => 'custom-control-input', 'id' => $row->name . '_' . $key];
                                                            }
                                                            if ($row->inline) {
                                                                $class = 'form-check form-check-inline ';
                                                                if ($row->required) {
                                                                    $attr['class'] = 'custom-check-input required';
                                                                } else {
                                                                    $attr['class'] = 'custom-check-input';
                                                                }
                                                                $l_class = 'custom-check-label mb-0 ml-1';
                                                            } else {
                                                                $class = 'custom-control custom-radio';
                                                                if ($row->required) {
                                                                    $attr['class'] = 'custom-control-input required';
                                                                } else {
                                                                    $attr['class'] = 'custom-control-input';
                                                                }
                                                                $l_class = 'custom-control-label';
                                                            }
                                                        @endphp
                                                        <div class=" {{ $class }}">
                                                            {{ Form::radio($row->name,$options->value,isset($options->selected) && $options->selected ? true : false,$attr) }}
                                                            <label class="{{ $l_class }}"
                                                                for="{{ $row->name . '_' . $key }}">{{ $options->label }}</label>
                                                        </div>
                                                    @endforeach

                                                    @if ($row->required)
                                                        <label class="required-msg" style="color:red"></label>
                                                    @endif
                                                </div>
                                            @elseif($row->type == 'select' || $row->type == 'autocomplete')
                                                <div class="form-group {{ $col }}">
                                                    @php
                                                        $attr = ['class' => 'form-control custom_select w-100', 'id' => $row->name];
                                                        if ($row->required) {
                                                            $attr['required'] = 'required';
                                                            $attr['class'] = $attr['class'] . ' required';
                                                        }
                                                        if (isset($row->multiple) && !empty($row->multiple)) {
                                                            $attr['multiple'] = 'true';
                                                            $attr['name'] = $row->name . '[]';
                                                        }
                                                        if (isset($row->className) && $row->className == 'calculate') {
                                                            $attr['class'] = $attr['class'] . ' ' . $row->className;
                                                        }
                                                        if ($row->label == 'Registration') {
                                                            $attr['class'] = $attr['class'] . ' registration';
                                                        }
                                                        if (isset($row->is_parent) && $row->is_parent == 'true') {
                                                            $attr['class'] = $attr['class'] . ' parent';
                                                            $attr['data-number-of-control'] = isset($row->number_of_control) ? $row->number_of_control : 1;
                                                        }
                                                        $values = [];
                                                        $selected = [];
                                                        foreach ($row->values as $options) {
                                                            $values[$options->value] = $options->label;
                                                            if (isset($options->selected)) {
                                                                $selected[] = $options->value;
                                                            }
                                                        }
                                                    @endphp
                                                    @if (isset($row->is_parent) && $row->is_parent == 'true')
                                                        {{ Form::label($row->name, $row->label) }}@if ($row->required)
                                                            *
                                                        @endif
                                                        <div class="input-group">
                                                            {{ Form::select($row->name, $values, $selected, $attr) }}
                                                            <div class="input-group-append">
                                                                <button type="button"
                                                                    class="btn btn-outline-primary open-photo">{{ __('Add Photo') }}</button>
                                                            </div>
                                                        </div>
                                                    @else
                                                        {{ Form::label($row->name, $row->label) }}@if ($row->required)
                                                            *
                                                        @endif
                                                        {{ Form::select($row->name, $values, $selected, $attr) }}
                                                    @endif
                                                    @if ($row->label == 'Registration')
                                                        <span class="text-warning registration-message"></span>
                                                    @endif
                                                </div>
                                            @elseif($row->type == 'date')
                                                <div class="form-group {{ $col }}">
                                                    @php
                                                        $attr = ['class' => 'form-control'];
                                                        if ($row->required) {
                                                            $attr['required'] = 'required';
                                                            $attr['class'] = $attr['class'] . ' required';
                                                        }
                                                    @endphp
                                                    {{ Form::label($row->name, $row->label) }}@if ($row->required)
                                                        *
                                                    @endif
                                                    {{ Form::date($row->name, isset($row->value) ? $row->value : null, $attr) }}
                                                    @if (isset($row->description))
                                                        <small>{{ $row->description }}</small>
                                                    @endif
                                                </div>
                                            @elseif($row->type == 'hidden')
                                                <div class="form-group {{ $col }}">
                                                    {{ Form::hidden($row->name, isset($row->value) ? $row->value : null) }}
                                                </div>
                                            @elseif($row->type == 'number')
                                                <div class="form-group {{ $col }}">
                                                    @php
                                                        $attr = ['class' => 'form-control'];
                                                        if ($row->required) {
                                                            $attr['required'] = 'required';
                                                            $attr['class'] = $attr['class'] . ' required';
                                                        }
                                                    @endphp
                                                    {{ Form::label($row->name, $row->label) }}
                                                    @if ($row->required)
                                                        *
                                                    @endif
                                                    {{ Form::number($row->name, isset($row->value) ? $row->value : null, $attr) }}
                                                </div>
                                            @elseif($row->type == 'textarea')
                                                <div class="form-group {{ $col }}">
                                                    @php
                                                        $attr = ['class' => 'form-control text-area-height'];
                                                        if ($row->required) {
                                                            $attr['required'] = 'required';
                                                            $attr['class'] = $attr['class'] . ' required';
                                                        }
                                                        if (isset($row->rows)) {
                                                            $attr['rows'] = $row->rows;
                                                        } else {
                                                            $attr['rows'] = '3';
                                                        }

                                                        if ($row->subtype == 'ckeditor') {
                                                            $attr['class'] = $attr['class'] . ' ck_editor';
                                                        }
                                                    @endphp
                                                    {{ Form::label($row->name, $row->label) }}
                                                    {{ Form::textarea($row->name, isset($row->value) ? $row->value : null, $attr) }}
                                                </div>
                                            @elseif($row->type == 'button')
                                                <div class="form-group {{ $col }}">
                                                    {{ Form::button(__($row->label), ['name' => $row->name,'type' => $row->subtype,'class' => $row->className,'id' => $row->name]) }}
                                                </div>
                                            @elseif($row->type == 'text')
                                                <div class="form-group {{ $col }}">
                                                    @php
                                                        $attr = ['class' => 'form-control'];
                                                        if ($row->required) {
                                                            $attr['required'] = 'required';
                                                            $attr['class'] = $attr['class'] . ' required';
                                                        }
                                                        if (isset($row->maxlength)) {
                                                            $attr['max'] = $row->maxlength;
                                                        }
                                                        if (isset($row->placeholder)) {
                                                            $attr['placeholder'] = $row->placeholder;
                                                        }
                                                        $value = isset($row->value) ? $row->value : '';
                                                        if ($row->subtype == 'datetime-local') {
                                                            $row->subtype = 'text';
                                                            $attr['class'] = $attr['class'] . ' date_time';
                                                        }
                                                    @endphp
                                                    {{ Form::label($row->name, $row->label) }}@if ($row->required)
                                                        *
                                                    @endif
                                                    {{ Form::input($row->subtype, $row->name, $value, $attr) }}
                                                    @if (isset($row->description))
                                                        <small>{{ $row->description }}</small>
                                                    @endif
                                                </div>
                                            @elseif($row->type == 'starRating')
                                                <div class="form-group {{ $col }}">
                                                    @php
                                                        $value = isset($row->value) ? $row->value : 0;
                                                        $num_of_star = isset($row->number_of_star) ? $row->number_of_star : 5;
                                                    @endphp
                                                    {{ Form::label($row->name, $row->label) }}@if ($row->required)
                                                        *
                                                    @endif
                                                    <div id="{{ $row->name }}" class="starRating"
                                                        data-value="{{ $value }}"
                                                        data-num_of_star="{{ $num_of_star }}">
                                                    </div>
                                                    <input type="hidden" name="{{ $row->name }}"
                                                        value="{{ $value }}" class="calculate"
                                                        data-star="{{ $num_of_star }}">
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                            @if (!isset($form_value) && $form->payment_status == 1)
                                @if (!isset($form_value) && $form->payment_type == 'stripe')
                                    <div class="strip">
                                        <strong class="d-block">{{ __('Payment') }}
                                            ({{ $form->currency_symbol }}{{ $form->amount }})</strong>
                                        <div id="card-element" class="form-control">
                                            <!-- a Stripe Element will be inserted here. -->
                                        </div>
                                        <span id="card-errors" class="payment-errors"
                                            style="color: red; font-size: 22px; "></span>
                                        <br>
                                    </div>
                                @elseif(!isset($form_value) && $form->payment_type == 'razorpay')
                                    <div class="razorpay">
                                        <p>{{ __('Make Payment') }}</p>
                                        <input type="hidden" name="payment_id" id="payment_id">
                                        <h5>{{ __('Payble Amount') }} : {{ $form->currency_symbol }}
                                            {{ $form->amount }}</h5>
                                    </div>
                                @elseif(!isset($form_value) && $form->payment_type == 'paypal')
                                    <div class="paypal">
                                        <p>{{ __('Make Payment') }}</p>
                                        <input type="hidden" name="payment_id" id="payment_id">
                                        <h5>{{ __('Payble Amount') }} : {{ $form->currency_symbol }}
                                            {{ $form->amount }}</h5>
                                        <div id="paypal-button-container"></div>
                                        <span id="paypal-errors" class="payment-errors"
                                            style="color: red; font-size: 22px; "></span>
                                        <br>

                                    </div>
                                @endif
                            @endif
                            <div class="row">
                                <div class="col cap">
                                    @if (env('CAPTCHASETTING'))
                                        @if (setting('captcha') == 'hcaptcha')
                                            {!! HCaptcha::renderJs() !!}
                                            {!! HCaptcha::display() !!}
                                        @endif
                                        @if (setting('captcha') == 'recaptcha')
                                            {!! NoCaptcha::renderJs() !!}
                                            {!! NoCaptcha::display() !!}
                                        @endif
                                    @endif

                                    <div class="form-actions pb-0 mt-3">
                                        <input type="hidden" name="form_value_id"
                                            value="{{ isset($form_value) ? $form_value->id : '' }}"
                                            id="form_value_id">
                                    </div>
                                </div>
                            </div>
                            <div style="overflow:auto;">
                                <div style="float:right;">
                                    <button type="button" class="btn btn-default" id="prevBtn"
                                        onclick="nextPrev(-1)">{{ __('Previous') }}</button>
                                    <button type="button" class="btn btn-primary" id="nextBtn"
                                        onclick="nextPrev(1)">{{ __('Next') }}</button>
                                          <button type="button" class="btn btn-warning" id="nextBtns"
                                          
                                        onclick="saveandClose(1)">{{ __('Save and Close') }}</button>
                                </div>
                            </div>
                            <!-- Circles which indicates the steps of the form: -->
                            <div style="text-align:center;margin-top:40px;">
                                @foreach ($array as $keys => $rows)
                                <input type="hidden" id="tabbb_{{$keys}}" class="tabn" value="{{$keys}}" />
                                    <span class="step"></span>
                                @endforeach
                            </div>
                        @endif
                        {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@push('style')
    <link href="{{ asset('assets/jqueryform/css/jquery.rateyo.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('vendor/select2/dist/css/select2.min.css') }}">
    <style>
        /* Mark input boxes that gets an error on validation: */
        input.invalid {
            background-color: #ffdddd;
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
@endpush
@push('script')
    <script src="{{ asset('assets/jqueryform/js/jquery.rateyo.min.js') }}"></script>
    <script src="{{ asset('vendor/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script type="text/javascript" src="https://js.stripe.com/v3/"></script>
    <script
        src="https://www.paypal.com/sdk/js?client-id={{ env('PAYPAL_SANDBOX_CLIENT_ID') }}&currency={{ $form->currency_name }}">
    </script>

    <script>
        var stripe, card;
        $(document).ready(function() {
            setTimeout(function() {
                $("#setData").trigger('click');
            }, 30);


            @if ($form->payment_status == 1)
                @if ($form->payment_status == 1)
                    @if ($form->payment_type == 'stripe')
            
                        stripe = Stripe("{{ env('STRIPE_KEY') }}");
            
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
                    @endif

                    @if ($form->payment_type == 'paypal')
                    // alert('gfgg')
                        var amount = '{{ $form->amount }}';
                        var name = '{{ $form->title }}';
                        var currency = '{{ $form->currency_name }}';
                        var form_id = '{{ $form->id }}';
                
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
                    @endif
            
                @endif
            @endif
            var form_value_id = $('#form_value_id').val();

            var SITEURL = '{{ URL::to('') }}';
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });
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

        function submitForm(formData) {
            alert('here');
            formData.append('ajax', true);
            $.ajax({
                type: "POST",
                url: '{{ route('forms.fill.store', $form->id) }}',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    console.log(response, "gty");
                    if (response.is_success) {

                        $('.card-body').html(
                            '<div class="text-center gallery" id="success_loader"><img src="{{ asset('assets/images/success.gif') }}" class="" /><br><br><h2 class="w-100 ">' +
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
                }
            });
        }


        function make_payment() {


            var formData = new FormData($('#fill-form')[0]);
            var form_value_id = $('#form_value_id').val();
            alert(form_value_id)
            if (form_value_id == '') {

                @if ($form->payment_status == 1)
                    @if ($form->payment_type == 'stripe')
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
                
                    @elseif ($form->payment_type == 'razorpay')
                
                
                        var amount = '{{ $form->amount }}';
                        var name = '{{ $form->title }}';
                        var currency = '{{ $form->currency_name }}';
                        var form_id = '{{ $form->id }}';
                
                
                        var data = {
                        "_token": "{{ csrf_token() }}",
                        'price': amount,
                        'name': name,
                        'currency': currency,
                        'form_id': form_id,
                
                
                        }
                        // console.log(data);
                
                
                
                        var options = {
                
                        "key": "{{ env('RAZORPAY_KEY') }}",
                        "amount": (amount * 100),
                        "name": name,
                        'currency': currency,
                        "description": "",
                        "image": '',
                        "handler": function(response) {
                        // $('#payment_id').val(response.razorpay_payment_id);
                        formData.append('payment_id', response.razorpay_payment_id);
                
                        submitForm(formData);
                
                
                
                
                        // var data =
                        '{{ Crypt::encrypt(['payment_id' => ',response.razorpay_payment_id,','plan_id' => 'plan_id','request_user_id' => 'user_id','order_id' => 'order_id','type' => 'razorpay']) }}';
                
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
                
                    @else
                        submitForm(formData);
                    @endif
                @else
                    submitForm(formData);
                @endif
            } else {
                console.log("yah");
                submitForm(formData);
            }
        }

        function cleanInvalid() {
            $(".invalid").each(function(){
                $(this).removeClass('invalid');
            });
        }

        function nextPrev(n) {
            console.log("page1");
            cleanInvalid();
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            
            var tb = document.getElementsByClassName("tabn");
            console.log(tb, "TTTTT");
            return false;
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            $('.tab').hide();
            // x[currentTab].style.display = "none";
// alert(x.length);
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
                @if ($form->payment_type == 'paypal')
                    if($('#payment_id').val() == ''){
                    var errorElement = document.getElementById('paypal-errors');
                    iziToast.error({
                    title: 'Error!',
                    message: "{{ 'Please make payment' }}",
                    position: 'topRight'
                    });
                    $('#nextBtn').removeAttr('disabled');
                        $('#nextBtn').html(' Submit')
                        showTab(n); 

                    return false;
                
                    }
                @endif
                // alert('herhe');
                make_payment();
            }
            
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

function saveandClose(n){
     var x = document.getElementsByClassName("tab");
     if (n == 1 && !validateForm()) return false;
     var formData = new FormData($('#fill-form')[0]);
//      for (var pair of formData.entries()) {
//   // console.log(pair[0]+ ', ' + pair[1]); 
// }
    //  return false;
     var $this = $("#nextBtns");
     var loadingText = '<i class="fa fa-spinner fa-spin"></i> Submiting form';
        if ($("#nextBtns").html() !== loadingText) {
            $this.data('original-text', $("#nextBtns").html());
            $this.html(loadingText);
        }
            
            make_payment();   
           
            
           
}
        function validateForm() {
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
                        $(this).addClass('invalid');
                        $('.required-msg').html('Select any one');
                        valid = false;
                    } else {
                        valid = true;

                    }
                }
                if ($(this).attr('type') == 'checkbox') {

                    if ($('input[name="' + name + '"]:checked').length <= 0) {

                        $(this).addClass('invalid');
                        $('.required-msg').html('Select any one');
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
                        // alert("Attachment Required");
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
                make_payment();

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
            // alert('123');
            CKEDITOR.replace($('.ck_editor').attr('name'), {
                filebrowserUploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}",
                filebrowserUploadMethod: 'form'
            });
        }
    </script>

@endpush
