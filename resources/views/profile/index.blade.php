@extends('layouts.main')
@section('title', 'Profile')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>{{ __('Profile') }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('home') }}">{{ __('Dashboard') }}</a></div>
                    <div class="breadcrumb-item">{{ __('Profile') }}</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="row">
                                    <div id="avatar-holder" class="col-md-12">
                                        <img id="avatar-img" class="img profile-user-img img-responsive img-circle avtar"
                                            src="{{ $user->avatar ? Storage::url($user->avatar) : asset('uploads/avatar/avatar.png') }}"
                                            alt="User profile picture">
                                        <h5 class="mt-3 mb-0"><b>{{ $user->name }}</b></h5>
                                        <p>{{ $user->email }}</p>
                                        <span class="mt-3 mb-0 d-block">
                                            <p>
                                                <b>{{__('Role')}}:</b>
                                                {{ $role ? $role->name : 'Role Not Set' }}
                                            </p>
                                        </span>
                                        <span class="mt-0 d-block">
                                            <p><b>{{__('Joined')}}:</b>
                                                {{ $user->created_at }}
                                            </p>
                                        </span>
                                        <label class="btn btn-primary btn-lg d-block mx-auto mt-5 col-sm-12 mb-0"
                                            for="avatarCrop">
                                            {{ __('Update Avatar') }}
                                            <input type="file" class="d-none" id="avatarCrop">
                                        </label>
                                    </div>
                                    <div id="avatar-updater" class="col-xs-12 d-none">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="image-preview"></div>
                                            </div>
                                            <div class="col-md-12">
                                                <input type="text" name="avatar-url" class="d-none"
                                                    value="{{ route('update-avatar', Auth::user()->id) }}">
                                                <button type="button" id="rotate-image"
                                                    class="btn btn-info col-sm-12 mb-1">{{ __('Rotate Image') }}</button>
                                                <button type="button" id="crop_image"
                                                    class="btn btn-primary col-sm-12">{{ __('Crop Image') }}</button>
                                                <button type="button" id="avatar-cancel-btn" name="button"
                                                    class="btn btn-primary col-sm-12 mt-1">{{ __('Cancel') }}</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item shadow mb-3 mr-2">
                                        <a class="nav-link active" id="account-details-tab" data-toggle="tab"
                                            href="#account-details" role="tab" aria-controls="account-details"
                                            aria-selected="false">{{ __('Account Details') }}</a>
                                    </li>
                                    <li class="nav-item shadow mb-3 mr-2">
                                        <a class="nav-link" id="login-details-tab" data-toggle="tab"
                                            href="#login-details" role="tab" aria-controls="login-details"
                                            aria-selected="false">{{ __('Login Details') }}</a>
                                    </li>
                                    @if (extension_loaded('imagick') && setting('2fa')) 

                                        <li class="nav-item shadow mb-3 mr-2">
                                            <a class="nav-link" id="tfa-settings-tab" data-toggle="tab"
                                                href="#tfa-settings" role="tab" aria-controls="tfa-settings"
                                                aria-selected="false">{{ __('Two Factor Auth') }}</a>
                                        </li>
                                    @endif
                                </ul>
                                <div class="tab-content mt-3 mx-0">
                                    <div class="tab-pane active" id="account-details" role="tabpanel"
                                        aria-labelledby="account-details-tab">
                                        <form class="form-horizontal" method="POST"
                                            action="{{ route('profile.update', $user->id) }}">
                                            @csrf
                                            @method('put')
                                            <div class="row form-group">
                                                <div class="col-md-6 mt-1">
                                                    <div><label class="label-block">{{ __('Role') }}</label></div>
                                                    <input type="text" name="role"
                                                        value="{{ $role ? $role->name : 'Role Not Set' }}"
                                                        class="form-control" disabled>
                                                </div>
                                                <div class="col-md-6 mt-1">
                                                    <div><label class="label-block">{{ __('Status') }}</label></div>
                                                    <select class="form-control" name="status" disabled>
                                                        <option value="active"
                                                            {{ $user->status == 'active' ? 'SELECTED' : '' }}>
                                                            {{ $user->status }}</option>
                                                        <option value="active"
                                                            {{ $user->status == 'banned' ? 'SELECTED' : '' }}>
                                                            {{ $user->status }}</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 mb-1 mt-2">
                                                    <div><label class="label-block">{{ __('Full Name') }}</label>
                                                    </div>
                                                    <input type="text" name="fullname" value="{{ $user->name }}"
                                                        class="form-control">
                                                    @if ($errors->has('fullname'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('fullname') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="col-md-6 mt-1">
                                                    <div><label class="label-block">{{ __('Phone') }}</label></div>
                                                    <input type="text" name="phone" value="{{ $user->phone }}"
                                                        class="form-control" placeholder={{__('Phone')}}>
                                                    @if ($errors->has('phone'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('phone') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="col-md-6 mt-1">
                                                    <label for="mobile">{{ __('Country') }}</label>
                                                    <select name="country" class="form-control form-control-inline-block">
                                                        @foreach ($countries as $key => $country)
                                                            <option value="{{ $country }}"
                                                                {{ $user->country == $country ? 'selected' : '' }}>
                                                                {{ $country }}</option>
                                                        @endforeach
                                                        @if ($errors->has('country'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('country') }}</strong>
                                                            </span>
                                                        @endif
                                                    </select>
                                                </div>
                                                <div class="col-sm-6 mt-1">
                                                    <label for="address"
                                                        class="control-label">{{ __('Address') }}</label>
                                                    <input type="text" name="address" class="form-control"
                                                        value="{{ $user->address }}" id="address" placeholder={{__('Address')}}>
                                                    @if ($errors->has('address'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('address') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-12 text-left">
                                                <button type="submit"
                                                    class="btn btn-primary col-sm-2">{{ __('Update Account') }}</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="login-details" role="tabpanel"
                                        aria-labelledby="login-details-tab">
                                        <form class="form-horizontal" method="POST"
                                            action="{{ route('update-login', $user->id) }}">
                                            @csrf
                                            <div class="row form-group">
                                                <div class="col-md-12">
                                                    <div><label class="label-block">{{ __('Email') }}</label></div>
                                                    <input type="text" name="email" value="{{ $user->email }}"
                                                        class="form-control">
                                                    @if ($errors->has('email'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="col-md-6 my-1">
                                                    <div><label class="label-block">{{ __('Password') }}</label>
                                                    </div>
                                                    <input type="password" name="password" value=""
                                                        placeholder="{{ __('Leave blank if you dont want to change') }}"
                                                        class="form-control" autocomplete="off">
                                                    @if ($errors->has('password'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="col-md-6 my-1">
                                                    <div><label
                                                            class="label-block">{{ __('Confirm Password') }}</label>
                                                    </div>
                                                    <input type="password" name="password_confirmation" value=""
                                                        placeholder="{{ __('Leave blank if you dont want to change') }}"
                                                        class="form-control" autocomplete="off">
                                                    @if ($errors->has('password_confirmation'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-12 text-left">
                                                <button type="submit"
                                                    class="btn btn-primary col-sm-2">{{ __('Update Login') }}</button>
                                            </div>
                                        </form>
                                    </div>
                                    @if (extension_loaded('imagick') && setting('2fa')) 

                                        <div class="tab-pane" id="tfa-settings" role="tabpanel"
                                            aria-labelledby="tfa-settings-tab">
                                            <!--Google Two Factor Authentication card-->
                                            <div class="col-md-12">
                                                @include('layouts.includes.alerts')
                                                {{-- {{ dd(auth()->user()->google2fa) }} --}}
                                                @if (empty(auth()->user()->loginSecurity))
                                                    <!--=============Generate QRCode for Google 2FA Authentication=============-->
                                                    <div class="row p-0">
                                                        <div class="col-md-12">
                                                            <p>{{ __('To activate Two factor Authentication Generate QRCode') }}
                                                            </p>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <form class="" action="
                                                                {{ route('generate2faSecret') }}" method="post">
                                                                @csrf
                                                                <button
                                                                    class="btn btn-primary col-md-6">{{ __('Activate 2FA') }}</button>
                                                                <a class="btn btn-secondary col-md-5" data-toggle="collapse"
                                                                    href="#collapseExample" role="button"
                                                                    aria-expanded="false"
                                                                    aria-controls="collapseExample">{{ __('Setup Instruction') }}</a>
                                                            </form>
                                                        </div>
                                                        <div class="col-md-12 mt-3 collapse" id="collapseExample">
                                                            <hr>
                                                            <h3 class="">{{ __('Two Factor Authentication(2FA) Setup Instruction') }}</h3>
                                                        <hr>
                                                        <div class="
                                                                mt-4">
                                                                <h4>{{ __('Below is a step by step instruction on setting up Two Factor Authentication') }}
                                                                </h4>
                                                                <p><label>{{ __('Step 1') }}:</label>
                                                                    {{ __('Download') }}
                                                                    <strong>{{ __('Google Authenticator App') }}</strong>
                                                                    {{ __('Application for Andriod or iOS') }}
                                                                </p>
                                                                <p class="text-center">
                                                                    <a href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2&hl=en"
                                                                        target="_blank"
                                                                        class="btn btn-success">{{ __('Download for Andriod') }}<i
                                                                            class="fa fa-android fa-2x ml-2"></i></a>
                                                                    <a href="https://apps.apple.com/us/app/google-authenticator/id388497605"
                                                                        target="_blank"
                                                                        class="btn btn-dark ml-2">{{ __('Download for iPhones') }}<i
                                                                            class="fa fa-apple fa-2x ml-2"></i></a>
                                                                </p>
                                                                <p><label>{{ __('Step 2') }}:</label>
                                                                    {{ __('Click on Generate Secret Key on the platform to generate a QRCode') }}
                                                                </p>
                                                                <p><label>{{ __('Step 3') }}:</label>
                                                                    {{ __('Open the') }}
                                                                    <strong>{{ __('Google Authenticator App') }}</strong>
                                                                    {{ __('and clcik on') }}
                                                                    <strong>{{ __('Begin') }}</strong>
                                                                    {{ __('on the mobile app') }}
                                                                </p>
                                                                <p><label>{{ __('Step 4') }}:</label>
                                                                    {{ __('After which click on') }}
                                                                    <strong>{{ __('Scan a QRcode') }}</strong>
                                                                </p>
                                                                <p><label>{{ __('Step 5') }}:</label>
                                                                    {{ __('Then scan the barcode on the platform') }}</p>
                                                                <p><label>{{ __('Step 6') }}:</label>
                                                                    {{ __('Enter the verification code generated on the platform and Enable 2FA') }}
                                                                </p>
                                                                <hr>
                                                                <p><label>{{ __('Note') }}:</label>
                                                                    {{ __('To disable 2FA enter code from the Google Authenticator App and account password to disable 2FA') }}
                                                                </p>
                                                        </div>
                                                    </div>
                                            </div>
                                            <!--=============Generate QRCode for Google 2FA Authentication=============-->
                                        @elseif(!auth()->user()->loginSecurity->google2fa_enable)
                                            <!--=============Enable Google 2FA Authentication=============-->
                                            <form class="form-horizontal" method="POST"
                                                action="{{ route('enable2fa') }}">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <p><strong>{{ __('Scan the QRCode with') }}
                                                                <dfn>{{ __('Google Authenticator App') }}</dfn>
                                                                {{ __('Enter the generated code below') }}</strong>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-12"><img src="{{ $google2fa_url }}" />
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p>{{ __('To enable 2-Factor Authentication verify QRCode') }}
                                                        </p>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <label for="address"
                                                            class="control-label">{{ __('Verification code') }}</label>
                                                        <input type="password" name="secret" class="form-control"
                                                            id="code" placeholder="{{ __('Verification code') }}">
                                                        @if ($errors->has('verify-code'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('verify-code') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-12 text-left">
                                                    <button type="submit"
                                                        class="btn btn-primary col-sm-2">{{ __('Enable 2FA') }}</button>
                                                </div>
                                            </form>
                                            <!--=============Enable Google 2FA Authentication=============-->
                                        @elseif(auth()->user()->loginSecurity->google2fa_enable)
                                            <!--=============Disable Google 2FA Authentication=============-->
                                            <form class="form-horizontal" method="POST"
                                                action="{{ route('disable2fa') }}">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-12"><img src="{{ $google2fa_url }}" />
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p>{{ __('To disable 2-Factor Authentication verify QRCode') }}
                                                        </p>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <label for="address"
                                                            class="control-label">{{ __('Current Password') }}</label>
                                                        <input id="password" type="password"
                                                            placeholder="{{ __('Current Password') }}"
                                                            class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                            name="current-password" required>
                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $error('password') }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12 text-left">
                                                    <button type="submit"
                                                        class="btn btn-danger col-sm-2">{{ __('Disable 2FA') }}</button>
                                                </div>
                                            </form>
                                            <!--=============Disable Google 2FA Authentication=============-->
                                    @endif
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
@push('script')
    <script src="{{ asset('assets/js/custom.js') }}"></script>
@endpush
