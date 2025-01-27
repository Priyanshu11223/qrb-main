@extends('layouts.main')
@section('title', __($t))
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>{{ __($t) }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('home') }}">{{ __('Dashboard') }}</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('settings') }}">{{ __('Settings') }}</a></div>
                    <div class="breadcrumb-item">{{ __($t) }}</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">{{ __('All About') }} {{ __($t) }}</h2>
                <p class="section-lead">
                    {{ __('You can adjust all') }} {{ __($t) }} {{ __('here') }}
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
                                                class="nav-link active">{{ __('Captcha') }}</a></li>
                                    <li class="nav-item"><a href="{{ route('setting', 'payment-setting') }}"
                                            class="nav-link ">{{ __('Payment') }}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <form id="setting-form" action="{{ route('settings/captcha-setting/update') }}"
                            enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="card" id="settings-card">
                                <div class="card-header">
                                    <h4> {{ __($t) }}</h4>
                                    <label class="custom-switch mt-2 float-right">
                                        <input name="captchasetting" class="custom-switch-input" type="checkbox" value="1"
                                            {{ Utility::getsettings('captchasetting') ? 'checked' : 'unchecked' }}>
                                        <span class="custom-switch-indicator"></span>
                                    </label>
                                </div>
                                <div class="card-body {{ Utility::getsettings('captchasetting') != 0 ? 'block' : 'd-none' }}"
                                    id="captcha_setting">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="status_toggle">{{ __('Google Captcha') }}</label>
                                            <label class="custom-radio col-3 mt-2 ">
                                                <input name="captcha" class="custom-switch-input" type="radio"
                                                    value="recaptcha" checked
                                                    {{ Utility::getsettings('captcha') == 'recaptcha' ? 'checked' : 'unchecked' }}>
                                                <span class="custom-switch-indicator"></span>
                                            </label>
                                            <label for="status_toggle">{{ __('hcaptcha setting') }}</label>
                                            <label class="custom-radio col-3 mt-2 ">
                                                <input name="captcha" class="custom-switch-input" type="radio"
                                                    value="hcaptcha"
                                                    {{ Utility::getsettings('captcha') == 'hcaptcha' ? 'checked' : 'unchecked' }}>
                                                <span class="custom-switch-indicator"></span>
                                            </label>
                                        </div>
                                    </div>

                                    <div id="recaptcha"
                                        class="desc {{ Utility::getsettings('captcha') != 'hcaptcha' ? 'block' : 'd-none' }}">
                                        <p class="text-muted"> {{ __('Recaptcha Setting') }}<a class="m-2"
                                                target="_blank"
                                                href="https://www.google.com/recaptcha/admin">{{ __('Document') }}</a>

                                        <div class=" row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="name">{{ __('Recaptcha Key') }}</label>
                                                    <input type="text" name="recaptcha_key" class="form-control"
                                                        value="{{ Utility::getsettings('recaptcha_key') }}"
                                                        placeholder="{{ __('Recaptcha Key') }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="name">{{ __('Recaptcha Secret') }}</label>
                                                    <input type="text" name="recaptcha_secret" class="form-control"
                                                        value="{{ Utility::getsettings('recaptcha_secret') }}"
                                                        placeholder="{{ __('Recaptcha Secret') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="hcaptcha"
                                        class="desc {{ Utility::getsettings('captcha') == 'hcaptcha' ? 'block' : 'd-none' }}">
                                        <p class="text-muted"> {{ __('Hcaptcha Setting') }} <a class="m-2"
                                                target="_blank"
                                                href="https://docs.hcaptcha.com/switch">{{ __('Document') }}</a></p>
                                        <div class=" row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="name">{{ __('Hcaptcha Key') }}</label>
                                                    <input type="text" name="hcaptcha_key" class="form-control"
                                                        value="{{ Utility::getsettings('hcaptcha_key') }}"
                                                        placeholder="{{ __('Hcaptcha Key') }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="name">{{ __('Hcaptcha Secret') }}</label>
                                                    <input type="text" name="hcaptcha_secret" class="form-control"
                                                        value="{{ Utility::getsettings('hcaptcha_secret') }}"
                                                        placeholder="{{ __('Hcaptcha Secret') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-whitesmoke text-md-right">
                                    <button class="btn btn-primary" type="submit"
                                        id="save-btn">{{ __('Save Changes') }}</button>
                                    <a href="{{ route('settings') }}" class="btn btn-secondary">{{ __('Cancel') }}</a>
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
        $(document).on('click', "input[name$='captchasetting']", function() {
            if (this.checked) {
                $('#captcha_setting').fadeIn(500);

                $("#captcha_setting").removeClass('d-none');
                $("#captcha_setting").addClass('d-block');
            } else {
                $('#captcha_setting').fadeOut(500);

                $("#captcha_setting").removeClass('d-block');
                $("#captcha_setting").addClass('d-none');

            }


        })
        $(document).on('click', "input[name$='captcha']", function() {
            var test = $(this).val();

            if (test == 'hcaptcha') {
                $("#hcaptcha").fadeIn(500);

                $("#hcaptcha").removeClass('d-none');
                $("#recaptcha").addClass('d-none');

            } else {
                $("#recaptcha").fadeIn(500);

                $("#recaptcha").removeClass('d-none');
                $("#hcaptcha").addClass('d-none');

            }
        });
    </script>
@endpush
