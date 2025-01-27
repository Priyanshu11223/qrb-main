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
                                            class="nav-link active">{{ __('Chat') }}</a></li>
                                    <li class="nav-item"><a href="{{ route('setting', 'social-setting') }}"
                                            class="nav-link">{{ __('Social') }}</a></li>
                                    <li class="nav-item"><a href="{{ route('setting', 'mail-setting') }}"
                                            class="nav-link">{{ __('Email') }}</a></li>
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
                        <form id="setting-form" action="{{ route('settings/pusher-setting/update') }}"
                            enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="card" id="settings-card">
                                <div class="card-header">
                                    <h4> {{ __($t) }}</h4>
                                </div>
                                <div class="card-body">
                                    <p class="text-muted"> {{ __('Pusher Setting') }} <a target="_blank"
                                            href="https://pusher.com/" class="m-2">{{ __('Document') }}</a>
                                    </p>
                                    <div class="">
                                        <div class=" row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="name">{{ __('Pusher App ID') }}</label>
                                                    <input type="text" name="pusher_id" class="form-control"
                                                        value="{{ Utility::getsettings('pusher_id') }}"
                                                        placeholder="{{ __('Pusher App ID') }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="name">{{ __('Pusher Key') }}</label>
                                                    <input type="text" name="pusher_key" class="form-control"
                                                        value="{{ Utility::getsettings('pusher_key') }}"
                                                        placeholder="{{ __('Pusher Key') }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="name">{{ __('Pusher Secret') }}</label>
                                                    <input type="text" name="pusher_secret" class="form-control"
                                                        value="{{ Utility::getsettings('pusher_secret') }}"
                                                        placeholder="{{ __('Pusher Secret') }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="name">{{ __('Pusher Cluster') }}</label>
                                                    <input type="text" name="pusher_cluster" class="form-control"
                                                        value="{{ Utility::getsettings('pusher_cluster') }}"
                                                        placeholder="{{ __('Pusher Cluster') }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group row">
                                                    <div class="col-md-8">
                                                        <label for="status_toggle">{{ __('Status') }}</label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="custom-switch mt-2 float-right">
                                                            <input name="pusher_status" class="custom-switch-input"
                                                                type="checkbox"
                                                                {{ Utility::getsettings('pusher_status') ? 'checked' : 'unchecked' }}>
                                                            <span class="custom-switch-indicator"></span>
                                                        </label>
                                                    </div>
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
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
