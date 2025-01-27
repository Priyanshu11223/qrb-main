<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{setting('rtl') == '1'?'rtl':''}}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ setting('favicon_logo') ? Storage::url('uploads/appLogo/app-favicon-logo.png') : '' }}" type="image/png">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $form->title }}</title>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">

    <script src="{{ asset('plugins/sweetalert/js/sweetalert.min.js') }}"></script>

    @if (setting('rtl') == '1')
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-rtl.css') }}">
@endif

    <link rel="stylesheet" href="{{ asset('assets/modules/izitoast/css/iziToast.min.css ') }}">

    @stack('style')

</head>

<body>
    <div id="app">
        <div class="main-wrapper ">

            @yield('content')


        </div>
    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/stisla.js') }}"></script>

    <!-- JS Libraies -->
    <script src="{{ asset('assets/modules/izitoast/js/iziToast.min.js') }}"></script>
    <script src="{{ asset('assets/modules/ckeditor/ckeditor.js') }}"></script>

    @include('layouts.includes.alerts')
    @stack('script')


</body>

</html>
