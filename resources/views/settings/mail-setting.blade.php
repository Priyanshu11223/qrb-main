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
                                                class="nav-link">{{ __('Storage') }}</a></li>
                                        <li class="nav-item"><a href="{{ route('setting', 'chat-setting') }}"
                                                class="nav-link">{{ __('Chat') }}</a></li>
                                        <li class="nav-item"><a href="{{ route('setting', 'social-setting') }}"
                                                class="nav-link">{{ __('Social') }}</a></li>
                                    <li class="nav-item"><a href="{{ route('setting', 'mail-setting') }}"
                                            class="nav-link active">{{ __('Email') }}</a></li>
                                    <li class="nav-item"><a href="{{ route('setting', 'general-setting') }}"
                                            class="nav-link">{{ __('General') }}</a></li>
                                        <li class="nav-item"><a href="{{ route('setting', 'captcha-setting') }}"
                                                class="nav-link">{{ __('Captcha') }}</a></li>
                                    <li class="nav-item"><a href="{{ route('setting', 'payment-setting') }}"
                                            class="nav-link ">{{ __('Payment') }}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <form id="setting-form" action="{{ route('settings/email-setting/update') }}"
                            enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="card" id="settings-card">
                                <div class="card-header">
                                    <h4> {{ __($t) }}</h4>
                                </div>
                                <div class="card-body">
                                    <p class="text-muted"> {{ __('Email Setting') }}</p>
                                    <div class="">
                                        <div class=" row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="name">{{ __('Mail Mailer') }}</label>
                                                    <input type="text" name="mail_mailer" class="form-control"
                                                        value="{{ Utility::getsettings('mail_mailer') }}"
                                                        placeholder="{{ __('Mail Mailer') }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="name">{{ __('Mail Host') }}</label>
                                                    <input type="text" name="mail_host" class="form-control"
                                                        value="{{ Utility::getsettings('mail_host') }}"
                                                        placeholder="{{ __('Mail Host') }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="name">{{ __('Mail Port') }}</label>
                                                    <input type="text" name="mail_port" class="form-control"
                                                        value="{{ Utility::getsettings('mail_port') }}"
                                                        placeholder="{{ __('Mail Port') }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="name">{{ __('Mail Username') }}</label>
                                                    <input type="email" name="mail_username" class="form-control"
                                                        value="{{ Utility::getsettings('mail_username') }}"
                                                        placeholder="{{ __('Mail Username') }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="name">{{ __('Mail Password') }}</label>
                                                    <input type="password" name="mail_password" class="form-control"
                                                        value="{{ Utility::getsettings('mail_password') }}"
                                                        placeholder="{{ __('Mail Password') }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="name">{{ __('Mail Encryption') }}</label>
                                                    <input type="text" name="mail_encryption" class="form-control"
                                                        value="{{ Utility::getsettings('mail_encryption') }}"
                                                        placeholder="{{ __('Mail Encryption') }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="name">{{ __('Mail From Address') }}</label>
                                                    <input type="text" name="mail_from_address" class="form-control"
                                                        value="{{ Utility::getsettings('mail_from_address') }}"
                                                        placeholder="{{ __('Mail From Address') }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="name">{{ __('Mail From Name') }}</label>
                                                    <input type="text" name="mail_from_name" class="form-control"
                                                        value="{{ Utility::getsettings('mail_from_name') }}"
                                                        placeholder="{{ __('Mail From Name') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-whitesmoke text-md-right">
                                    <button class="btn btn-primary" type="submit"
                                        id="save-btn">{{ __('Save Changes') }}</button>
                                    <a class="btn  btn-info" href="{{ route('setting', 'test-mail') }}">
                                        {{ __('Send Test Mail') }}</a>

                                    <a href="{{ route('settings') }}" class="btn btn-secondary">{{ __('Cancel') }}</a>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
