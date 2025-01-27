@extends('layouts.main')
@section('title', 'Users')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>{{ __('Users List') }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('home') }}">{{ __('Dashboard') }}</a></div>
                    <div class="breadcrumb-item">{{ __('Users') }}</div>
                </div>
            </div>
            <div class="section-body">
                @can('user-create')
                    <h2 class="section-title"><a href="#" class="btn btn-primary" id="add_user">{{ __('Add User') }}</a></h2>
                @endcan
                <div class="row ">
                    <div class="col-12">
                        <div class="card p-3">
                            <div class="table-responsive py-4">
                                {{ $dataTable->table(['width' => '100%']) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@push('style')
    @include('layouts.includes.datatable_css')
@endpush
@push('script')
    @include('layouts.includes.datatable_js')
    {{ $dataTable->scripts() }}
    <script>
        $(function() {
            $('body').on('click', '.add_user', function() {
                var modal = $('#common_modal');
                $.ajax({
                    type: "GET",
                    url: '{{ route('users.create') }}',
                    data: {},
                    success: function(response) {
                        modal.find('.modal-title').html('{{ __('Add User') }}');
                        modal.find('.modal-body').html(response.html);
                        if (jQuery().select2) {
                            $(".roles").select2({
                                dropdownParent: $('#common_modal')
                            });
                        }
                        modal.modal('show');
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            });
            $('body').on('click', '#edit-user', function() {
                var action = $(this).data('action');
                var modal = $('#common_modal');
                $.get(action, function(response) {
                    modal.find('.modal-title').html('{{ __('Edit User') }}');
                    modal.find('.modal-body').html(response.html);
                    modal.modal('show');
                })
            });
        });
    </script>
@endpush
