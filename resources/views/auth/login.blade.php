@extends('layouts.app')
@section('title', 'Login')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h4>{{ __('Login') }}</h4>
        </div>
        <div class="card-body">
            <form method="POST" class="needs-validation" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="email">{{ __('E-Mail Address') }}</label>
                    <input class="form-control {{ __('Email') }}" placeholder="{{ __('E-Mail Address') }}" type="email"
                        name="email" id="email" value="{{ old('email') }}" onfocus>
                </div>
                <div class="form-group">
                    <div class="d-block">
                        <label for="password" class="control-label">{{ __('Password') }}</label>
                        <div class="float-right">
                            <a href="{{ route('password.request') }}" class="text-small">
                                {{ __('Forgot Password ?') }}
                            </a>
                        </div>
                    </div>
                    <input type="password" placeholder="{{ __('Password') }}" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" name="remember" value="{{ old('remember') }}"
                            id="customCheckLogin" type="checkbox">
                        <label class="custom-control-label" for="customCheckLogin">{{ __('Remember me') }}</label>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary my-4">{{ __('Sign In') }}</button>
                </div>
            </form>
            <div class="scl_btn ">
                <div class="col">
                    @if (env('GOOGLESETTING') == 'on')
                    <a href="{{ url('/redirect/google') }}" class="google btnn">
                        <i class="fa fa-google fa-fw"></i> Login with Google
                    </a>
                    @endif
                    @if (env('FACEBOOKSETTING') == 'on')
                    <a href="{{ url('/redirect/facebook') }}" class="fb btnn">
                        <i class="fa fa-facebook fa-fw"></i> Login with Facebook
                    </a>
                    @endif
                    @if (env('GITHUBSETTING') == 'on')
                    <a href="{{ url('/redirect/github') }}" class="github btnn">
                        <i class="fa fa-github fa-fw"></i> Login with Github
                    </a>
                    @endif
                    @if (env('LINKEDINSETTING') == 'on')
                    <a href="{{ url('/redirect/linkedin') }}" class="linkedin btnn">
                        <i class="fa fa-linkedin fa-fw"></i> Login with LinkedIn
                    </a>
                    @endif
                </div>
            </div>
            {{-- <div class="flex items-center justify-end mt-4">
                <a href="{{ url('/redirect/google') }}">
                    <img src="{{ asset('assets/img/logingoogle.png') }}" style="margin-left: 3em;">
                </a>
            </div>
            <div class="flex items-center justify-end mt-4">
                <a href="{{ url('/redirect/facebook') }}">
                    <img class="login_icon" src="{{ asset('assets/img/loginfb.png') }}">
                </a>
            </div>
            <div class="flex items-center justify-end mt-4">
                <a href="{{ url('/redirect/github') }}">
                    <img class="login_icon" src="{{ asset('assets/img/logingithub.png') }}">
                </a>
            </div>
            <div class="flex items-center justify-end mt-4">
                <a href="{{ url('/redirect/linkedin') }}">
                    <img class="login_icon" src="{{ asset('assets/img/loginlinkdin.png') }}">
                </a>
            </div> --}}
        </div>
    </div>
    {{-- <div class="mt-5 text-muted text-center">
        {{ __('Dont have an account?') }} <a href="{{ route('register') }}">{{ __('Create new account') }}</a>
    </div> --}}
    <div class="simple-footer">
        &copy; {{ date('Y') }} <a href="#" class="font-weight-bold ml-1"
            target="_blank">{{ config('app.name') }}</a>
    </div>
@endsection
