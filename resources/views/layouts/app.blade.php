<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{setting('rtl') == '1'?'rtl':''}}">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title')  </title>
    <link rel="icon" href="{{ setting('favicon_logo') ? Storage::url('uploads/appLogo/app-favicon-logo.png') : '' }}"
        type="image/png">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/izitoast/css/iziToast.min.css ') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/font-awesome.min.css') }}">
    @if (setting('rtl') == '1')
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-rtl.css') }}">
@endif
</head>
<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-4 mx-auto">
                        <div class="login-brand">
                            <img src="{{ Storage::url(setting('app_logo')) ? Storage::url('uploads/appLogo/app-logo.png') : '' }}"
                                alt="logo" class="app-logo">
                        </div>
                        @yield('content')
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- General JS Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/stisla.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/modules/izitoast/js/iziToast.min.js') }}"></script>
    <script src="{{ asset('assets/modules/select2/dist/js/select2.min.js') }}"></script>
    <script>
        @if ( session('failed'))
                    iziToast.error({
            title: 'Error!',
            message: "{{ session('failed') }}",
            position: 'topRight'
          });
        @endif
        @if ( session('errors'))
                    iziToast.error({
            title: 'Error!',
            message: "{{ session('errors') }}",
            position: 'topRight'
          });
            @endif
        @if ( session('successful'))
            iziToast.success({
            title: 'Great',
            message: '{{ session("successful") }}',
            position: 'topRight'
          });
        @endif
        @if ( session('success'))
            iziToast.success({
            title: 'Great',
            message: '{{ session("success") }}',
            position: 'topRight'
          });
        @endif
            @if ( session('warning'))
            iziToast.warning({
            title: 'Ohh!',
            message: '{{ session("warning") }}',
            position: 'topRight'
          });
        @endif
        </script>
        <script>
        @if (session('status'))
            iziToast.success({
            title: 'Great',
            message: '{{ session("status") }}',
            position: 'topRight'
          });
        @endif
        </script>
        <script>
            $(document).on('click','.delete-action', function(){
                var form_id = $(this).attr('data-form-id')
                $.confirm({
                    title: '{{ __('Alert !') }}',
                    content: '{{__('Are You sure ?')}}',
                    buttons: {
                        confirm: function () {
                            $("#"+form_id).submit();
                        },
                        cancel: function () {
                        }
                    }
                });
            });
        </script>
    @stack('script')
    <!-- Page Specific JS File -->
</body>
</html>
