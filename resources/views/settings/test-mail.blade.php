@extends('layouts.main')
@section('title', __($t))
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>{{ __($t) }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('home') }}">{{ __('Dashboard') }}</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('settings') }}">{{ __('Settings') }}</a>
                    </div>
                    <div class="breadcrumb-item"><a
                            href="{{ route('setting', 'mail-setting') }}">{{ __('Mail setting') }}</a>
                    </div>
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
                                                class="nav-link ">{{ __('Social') }}</a></li>
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
                        {{ Form::open(['route' => ['test.send.mail']]) }}

                        @csrf
                        <div class="card" id="settings-card">
                            <div class="card-header">
                                <h4> {{ __($t) }}</h4>
                            </div>
                            <div class="card-body">
                                <p class="text-muted"> {{ __('Test mail') }}</p>
                                <div class="">
                                    <div class=" row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="email">{{ __('Email') }}</label>
                                                <input type="text" name="email" class="form-control"
                                                    placeholder="{{ __('Enter Email') }} " required>
                                                @error('email')
                                                    <span class="invalid-email" role="alert">
                                                        <strong class="text-danger">{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-whitesmoke text-md-right">
                                <button class="btn btn-primary" type="submit"
                                    id="save-btn">{{ __('Save Changes') }}</button>


                                <a href="{{ route('setting', 'mail-setting') }}"
                                    class="btn btn-secondary">{{ __('Cancel') }}</a>
                            </div>
                            {{ Form::close() }}

                        </div>
                    </div>
                </div>
        </section>
    </div>
@endsection
