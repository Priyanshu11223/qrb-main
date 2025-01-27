
@extends('layouts.app')
@section('title', 'Register')
@section('content')

    <div class="card card-primary">
        <div class="card-header">
            <h4>{{ __('Register') }}</h4>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group mb-3">
                    <div class="input-group input-group-merge input-group-alternative">

                        <input id="name" type="text" placeholder="{{ __('Name') }}"
                            class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"
                            required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group mb-3">
                    <div class="input-group input-group-merge input-group-alternative">

                        <input id="email" type="email" placeholder="{{ __('Email') }}"
                            class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email">
                    </div>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative">

                        <input id="password" type="password" placeholder="{{ __('Password') }}"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="new-password">
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative">

                        <input id="password-confirm" type="password" placeholder="{{ __('Confirm Password') }}"
                            class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative">
                        {!! Form::select('role', $roles, null, ['class' => 'form-control custom_select ']) !!}
                    </div>
                </div>

                <div class="custom-control custom-control-alternative custom-checkbox">
                    <input class="custom-control-input" name="terms" value="agree" id=" customCheckLogin" type="checkbox">
                    <label class="custom-control-label" for=" customCheckLogin">
                        <span class="text-muted">{{ __('I agree to the') }} <a
                                href="#">{{ __('Terms') }}</a></span>
                    </label>
                </div>




                <div class="text-center">
                    <button type="submit" class="btn btn-primary my-4">{{ __('Register') }}</button>
                </div>
            </form>
        </div>
    </div>
    <div class="mt-5 text-muted text-center">
        <a href="{{ url('/') }}">{{ __('I already have an account') }}</a>
    </div>
    <div class="simple-footer">
        &copy; {{ date('Y') }} <a href="#" class="font-weight-bold ml-1"
            target="_blank">{{ config('app.name') }}</a>
    </div>
@endsection
@push('script')
    <script>
        $(document).ready(function() {
            $(".custom_select").select2();
        })
    </script>
@endpush
