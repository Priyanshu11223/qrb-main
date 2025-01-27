@extends('layouts.app')

@section('content')

    <div class="card card-primary">
        <div class="card-header">
            {{ __('Reset Password') }}
        </div>
        <div class="card-body">


            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="form-group">
                    <label for="email">{{ __('E-Mail Address') }}</label>
                    <input class="form-control {{ __('Email') }}" placeholder="{{ __('E-Mail Address') }}"
                        type="email" name="email" id="email" value="{{ old('email') }}" onfocus>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback d-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                        {{ __('Send Password Reset Link') }}
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
