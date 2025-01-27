@extends('layouts.main')
@section('title', $t)

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>{{ $t }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('home') }}">{{ __('Dashboard') }}</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('settings') }}">{{ __('Settings') }}</a></div>
                    <div class="breadcrumb-item">{{ $t }}</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">{{ __('All About') }} {{ $t }}</h2>
                <p class="section-lead">
                    {{ __('You can adjust all') }} {{ $t }} {{ __('here') }}
                </p>
                <div id="output-status"></div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h4>{{ __('Jump To') }}</h4>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-pills flex-column">
                                        <li class="nav-item">
                                            <a href="{{ route('setting', 'app-setting') }}"
                                                class="nav-link ">{{ __('App Setting') }}</a>
                                        </li>
                                        <li class="nav-item"><a href="{{ route('setting', 'storage-setting') }}"
                                                class="nav-link ">{{ __('Storage') }}</a></li>
                                        <li class="nav-item"><a href="{{ route('setting', 'chat-setting') }}"
                                                class="nav-link">{{ __('Chat') }}</a></li>
                                        <li class="nav-item"><a href="{{ route('setting', 'social-setting') }}"
                                                class="nav-link">{{ __('Social') }}</a></li>
                                    <li class="nav-item"><a href="{{ route('setting', 'mail-setting') }}"
                                            class="nav-link">{{ __('Email') }}</a></li>
                                    <li class="nav-item"><a href="{{ route('setting', 'general-setting') }}"
                                            class="nav-link">{{ __('General') }}</a></li>
                                        <li class="nav-item"><a href="{{ route('setting', 'captcha-setting') }}"
                                                class="nav-link">{{ __('Captcha') }}</a></li>
                                    <li class="nav-item"><a href="{{ route('setting', 'payment-setting') }}"
                                            class="nav-link active">{{ __('Payment') }}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <form id="setting-form" action="{{ route('settings/stripe-setting/update') }}"
                            enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="card" id="settings-card">
                                <div class="card-header">
                                    <h4> {{ $t }}</h4>
                                </div>
                                @php
                                    // dd(env('RAZORPAYSETTING'));
                                    $paypal_class = 'd-none';
                                    $razor_pay_class = 'd-none';
                                    $stripe_class = 'd-none';
                                    $offline_class = 'd-none';

                                    if (\Auth::user()->type == 'Super Admin') {
                                        if (env('STRIPESETTING') == 'on') {
                                            $stripe_class = 'block';
                                        }
                                        if (env('RAZORPAYSETTING') == 'on') {
                                            $razor_pay_class = 'block';
                                        }
                                        if (env('PAYPALSETTING') == 'on') {
                                            $paypal_class = 'block';
                                        }
                                        if (env('OFFLINESETTING') == 'on') {
                                            $offline_class = 'block';
                                        }
                                    } else {
                                        if (env('STRIPESETTING') == 'on') {
                                            $stripe_class = 'block';
                                        }
                                        if (env('RAZORPAYSETTING') == 'on') {
                                            $razor_pay_class = 'block';
                                        }
                                        if (env('PAYPALSETTING') == 'on') {
                                            $paypal_class = 'block';
                                        }
                                    }
                                @endphp
                                <div class="card-body">

                                    <div class="form-group row">
                                        <div class="col-md-8">
                                            <strong class="d-block">{{ __('Stripe Payment') }}</strong>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="custom-radio col-2 mt-2 float-right">
                                                <input name="paymentsetting[]" class="custom-switch-input paymenttsetting"
                                                    type="checkbox" value="stripe"
                                                    {{ $stripe_class == 'block' ? 'checked' : 'unchecked' }}
                                                    {{-- {{ (Auth::user()->type == 'Admin'? env('PAYMENTSETTING'): env('PAYMENTSETTING') == 'stripe')? 'checked': 'unchecked' }} --}}>
                                                <span class="custom-switch-indicator"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div id="stripe" class="desc  {{ $stripe_class }}">
                                        <div class="card-body">
                                            <div class="">
                                                <div class=" row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label for="name">{{ __('Stripe Key') }}</label>
                                                            <input type="text" name="stripe_key" class="form-control"
                                                                value="{{ env('STRIPE_KEY') }}"
                                                                placeholder="{{ __('Stripe key') }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label for="name">{{ __('Stripe Secret') }}</label>
                                                            <input type="text" name="stripe_secret" class="form-control"
                                                                value="{{ env('STRIPE_SECRET') }}"
                                                                placeholder="{{ __('Stripe Secret') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-8">
                                            <strong class="d-block">{{ __('Razorpay Payment') }}</strong>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="custom-radio col-2 mt-2 float-right">
                                                <input name="paymentsetting[]" class="custom-switch-input paymenttsetting"
                                                    type="checkbox" value="razorpay"
                                                    {{ $razor_pay_class == 'block' ? 'checked' : 'unchecked' }}
                                                    {{-- {{ (Auth::user()->type == 'Admin'? env('PAYMENTSETTING'): env('PAYMENTSETTING') == 'razorpay')? 'checked': 'unchecked' }} --}}>
                                                <span class="custom-switch-indicator"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div id="razorpay" class="desc {{ $razor_pay_class }} ">
                                        {{-- <p class="text-muted"> {{ __('Razorpay Setting') }}</p> --}}
                                        <div class="card-body">
                                            <div class="">
                                                <div class=" row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label for="name">{{ __('Razorpay Key') }}</label>
                                                            <input type="text" name="razorpay_key" class="form-control"
                                                                value="{{ env('RAZORPAY_KEY') }}"
                                                                placeholder="{{ __('Razorpay Key') }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label for="name">{{ __('Razorpay Secret') }}</label>
                                                            <input type="text" name="razorpay_secret" class="form-control"
                                                                value="{{ env('RAZORPAY_SECRET') }}"
                                                                placeholder="{{ __('Razorpay Secret') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- @if (\Auth::user()->type == 'Super Admin') --}}

                                    <div class="form-group row">
                                        <div class="col-md-8">
                                            <strong class="d-block">{{ __('Paypal Payment') }}</strong>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="custom-radio col-2 mt-2 float-right ">
                                                <input name="paymentsetting[]" class="custom-switch-input paymenttsetting"
                                                    type="checkbox" value="paypal"
                                                    {{ $paypal_class == 'block' ? 'checked' : 'unchecked' }}
                                                    {{-- {{ (Auth::user()->type == 'Admin'? env('PAYMENTSETTING'): env('PAYMENTSETTING') == 'paypal')? 'checked': 'unchecked' }} --}}>

                                                <span class="custom-switch-indicator"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div id="paypal" class="desc {{ $paypal_class }} ">
                                        <div class="card-body">
                                            <div class="">
                                                <div class=" row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label for="name">{{ __('Paypal Key') }}</label>
                                                            <input type="text" name="client_id" class="form-control"
                                                                value="{{ env('PAYPAL_SANDBOX_CLIENT_ID') }}"
                                                                placeholder="{{ __('Paypal Key') }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label for="name">{{ __('Paypal Secret') }}</label>
                                                            <input type="text" name="client_secret" class="form-control"
                                                                value="{{ env('PAYPAL_SANDBOX_CLIENT_SECRET') }}"
                                                                placeholder="{{ __('Paypal Secret') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @if (\Auth::user()->type == 'Super Admin')
                                        <div class="form-group row">
                                            <div class="col-md-8">
                                                <strong class="d-block">{{ __('Offline Payment') }}</strong>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="custom-radio col-2 mt-2 float-right ">
                                                    <input name="paymentsetting[]"
                                                        class="custom-switch-input paymenttsetting" type="checkbox"
                                                        value="offline"
                                                        {{ $offline_class == 'block' ? 'checked' : 'unchecked' }}
                                                        {{-- {{ (Auth::user()->type == 'Admin'? env('PAYMENTSETTING'): env('PAYMENTSETTING') == 'paypal')? 'checked': 'unchecked' }} --}}>

                                                    <span class="custom-switch-indicator"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div id="offline" class="desc {{ $offline_class }} ">
                                            <div class="card-body">
                                                <div class="">
                                                    <div class=" row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="name">{{ __('Offline Mode Name') }}</label>
                                                                <input type="text" name="payment_mode"
                                                                    class="form-control"
                                                                    value="{{ env('PAYMENT_MODE') }}"
                                                                    placeholder="{{ __('Payment Mode') }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="name">{{ __('Payment Details') }}</label>
                                                                <textarea name="payment_details"
                                                                    class="form-control"> {{ env('PAYMENT_DETAILS') }}</textarea>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    <div class="card-footer bg-whitesmoke text-md-right">
                                        <button class="btn btn-primary" type="submit"
                                            id="save-btn">{{ __('Save Changes') }}</button>
                                        <a href="{{ route('settings') }}"
                                            class="btn btn-secondary">{{ __('Cancel') }}</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@push('script')
    <script>
        $(document).ready(function() {
            $(".paymenttsetting").trigger("select");
            // paymenttsetting4();
        });

        // function paymenttsetting4(params) {
        //     $(".paymenttsetting").each(function() {
        //         if ($(this).is(':checked')) {
        //             if (test == 'razorpay') {
        //                 $("#razorpay").fadeIn(500);
        //                 $("#razorpay").removeClass('d-none');
        //             } else if (test == 'stripe') {
        //                 $("#stripe").fadeIn(500);
        //                 $("#stripe").removeClass('d-none');
        //             } else if (test == 'paypal') {
        //                 $("#paypal").fadeIn(500);
        //                 $("#paypal").removeClass('d-none');
        //             }
        //         } else {
        //             if (test == 'razorpay') {
        //                 $("#razorpay").fadeOut(500);
        //                 $("#razorpay").addClass('d-none');
        //             } else if (test == 'stripe') {
        //                 $("#stripe").fadeOut(500);
        //                 $("#stripe").addClass('d-none');
        //             } else if (test == 'paypal') {
        //                 $("#paypal").fadeOut(500);
        //                 $("#paypal").addClass('d-none');
        //             }
        //         }
        //     });
        // }


        // $(document).on('change', "input[name$='paymentsetting'], .paymenttsetting", function() {
        $(document).on('change', ".paymenttsetting", function() {

            var test = $(this).val();


            if ($(this).is(':checked')) {

                if (test == 'razorpay') {
                    $("#razorpay").fadeIn(500);
                    $("#razorpay").removeClass('d-none');
                } else if (test == 'stripe') {
                    $("#stripe").fadeIn(500);
                    $("#stripe").removeClass('d-none');
                } else if (test == 'paypal') {
                    $("#paypal").fadeIn(500);
                    $("#paypal").removeClass('d-none');
                } else if (test == 'offline') {
                    $("#offline").fadeIn(500);
                    $("#offline").removeClass('d-none');
                }

            } else {

                if (test == 'razorpay') {
                    $("#razorpay").fadeOut(500);
                    $("#razorpay").addClass('d-none');
                } else if (test == 'stripe') {
                    $("#stripe").fadeOut(500);
                    $("#stripe").addClass('d-none');
                } else if (test == 'paypal') {
                    $("#paypal").fadeOut(500);
                    $("#paypal").addClass('d-none');
                } else if (test == 'offline') {
                    $("#offline").fadeOut(500);
                    $("#offline").addClass('d-none');
                }
            }

        });
    </script>
@endpush
