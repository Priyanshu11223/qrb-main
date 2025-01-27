@php
$lang = \App\Facades\UtilityFacades::getValByName('default_language');
@endphp
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
                                            class="nav-link">{{ __('Email') }}</a></li>
                                    <li class="nav-item"><a href="{{ route('setting', 'general-setting') }}"
                                            class="nav-link active">{{ __('General') }}</a></li>
                                        <li class="nav-item"><a href="{{ route('setting', 'captcha-setting') }}"
                                                class="nav-link">{{ __('Captcha') }}</a></li>
                                    <li class="nav-item"><a href="{{ route('setting', 'payment-setting') }}"
                                            class="nav-link ">{{ __('Payment') }}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <form id="setting-form" action="{{ route('settings/auth-settings/update') }}"
                            enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="card" id="settings-card">
                                <div class="card-header">
                                    <h4> {{ __($t) }}</h4>
                                </div>
                                <div class="card-body">
                                    <div class="">
                                        <div class=" row">
                                            <div class="col-lg-12">
                                                <div class="form-group row">
                                                    <div class="col-md-8">
                                                        <strong
                                                            class="d-block">{{ __('Two Factor Authentication') }}</strong>
                                                        {{ !Utility::getsettings('2fa') ? __('Activate') : __('Deactivate') }}
                                                        {{ __('Two factor authentication for application.') }}
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="custom-switch mt-2 float-right">
                                                            <input name="two_factor_auth" class="custom-switch-input"
                                                                type="checkbox"
                                                                {{ Utility::getsettings('2fa') ? 'checked' : 'unchecked' }}>
                                                            <span class="custom-switch-indicator"></span>
                                                        </label>
                                                    </div>
                                                    @if (!extension_loaded('imagick'))
                                                        <small>
                                                            {{ __('Note: for 2FA your server must have Imagick.') }} <a
                                                                href="https://www.php.net/manual/en/book.imagick.php"
                                                                target="_new">{{ __('Imagick Document') }}</a>
                                                        </small>
                                                    @endif
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-8">
                                                        <strong class="d-block">{{ __('RTL Setting') }}</strong>
                                                        {{ Utility::getsettings('rtl') == '0' ? __('Activate') : __('Deactivate') }}
                                                        {{ __('RTL setting for application.') }}
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="custom-switch mt-2 float-right">
                                                            <input name="rtl_setting" class="custom-switch-input"
                                                                type="checkbox"
                                                                {{ Utility::getsettings('rtl') == '1' ? 'checked' : 'unchecked' }}>
                                                            <span class="custom-switch-indicator"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group row">
                                                        <label for="name">{{ __('Default Language') }}</label>
                                                        <select name="default_language" id="default_language"
                                                            class="form-control select2">
                                                            @foreach (\App\Facades\UtilityFacades::languages() as $language)
                                                                <option @if ($lang == $language) selected @endif
                                                                    value="{{ $language }}">
                                                                    {{ Str::upper($language) }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                @hasrole('Super Admin')
                                                    <div class="col-lg-12">
                                                        <div class="form-group row">
                                                            <label for="name">{{ __('Gtag Tracking ID') }} <a
                                                                    href="https://support.google.com/analytics/answer/1008080?hl=en#zippy=%2Cin-this-article"
                                                                    class="m-2"
                                                                    target="_blank">{{ __('Document') }}</a></label>
                                                            <input type="text" name="gtag" class="form-control"
                                                                value="{{ Utility::getsettings('gtag') }}"
                                                                placeholder="{{ __(' Enter Gtag Tracking ID') }}">
                                                        </div>
                                                    </div>
                                                @endhasrole
                                                @if (\Auth::user()->type == 'Super Admin')
                                                    <div class="form-group">
                                                        <label for="name">{{ __('Approved Domain Request') }}</label>
                                                        <select name="approve_type" class="form-control">
                                                            <option value="Manually"
                                                                {{ Utility::getsettings('approve_type') == __('Manually') ? 'selected' : '' }}>
                                                                {{ __('Manually') }}</option>
                                                            <option value="Auto"
                                                                {{ Utility::getsettings('approve_type') == __('Auto') ? 'selected' : '' }}>
                                                                {{ __('Auto') }}</option>
                                                        </select>
                                                    </div>
                                                @endif
                                                @if (\Auth::user()->type == 'Super Admin')
                                                    <div class="form-group">
                                                        <label for="name">{{ __('Currency Name') }}</label>
                                                        <input type="text" name="currency" class="form-control"
                                                            value="{{ env('CURRENCY') }}" required
                                                            placeholder="{{ __('Currency name') }}">
                                                        <p>{{ __('The name of currency is to be taken frome this document.') }}
                                                            <a href="https://stripe.com/docs/currencies"
                                                                class="m-2"
                                                                target="_blank">{{ __('Document') }}</a>
                                                        </p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="name">{{ __('Currency Symbol') }}</label>
                                                        <input type="text" name="currency_symbol" class="form-control"
                                                            value="{{ env('CURRENCY_SYMBOL') }}" required
                                                            placeholder="{{ __('Currency Symbol') }}">
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-whitesmoke text-md-right">
                                    <button class="btn btn-primary" type="submit"
                                        id="save-btn">{{ __('Save Changes') }}</button>
                                    <a href="{{ route('settings') }}" class="btn btn-secondary">{{ __('Cancel') }}</a>
                                </div>
                        </form>
                    </div>
                </div>
        </section>
    </div>
@endsection
