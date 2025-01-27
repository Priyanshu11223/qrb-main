@extends('layouts.main')
@section('title', 'Permission')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>{{ __('Permission List') }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('home') }}">{{ __('Dashboard') }}</a></div>
                    <div class="breadcrumb-item">{{ __('Permissions') }}</div>
                </div>
            </div>
            <div class="section-body">
                @can('role-create')
                    <h2 class="section-title"><a href="#" class="btn btn-primary" id="add_user">{{ __('Add Role') }}</a></h2>
                @endcan
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive py-4">
                                            {{ $dataTable->table(['width' => '100%']) }}
                                        </div>
                                    </div>
                                </div>
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
            $('.add_permission').on('click', function() {
                var modal = $('#common_modal');
                $.ajax({
                    type: "GET",
                    url: '{{ route('permission.create') }}',
                    data: {},
                    success: function(response) {
                        modal.find('.modal-title').html('{{ __('Add permission') }}');
                        modal.find('.modal-body').html(response.html);
                        modal.modal('show');
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            });
            $('body').on('click', '.edit_permission', function() {
                var action = $(this).data('action');
                var modal = $('#common_modal');
                $.get(action, function(response) {
                    modal.find('.modal-title').html('{{ __('Edit permission') }}');
                    modal.find('.modal-body').html(response.html);
                    modal.modal('show');
                })
            });
        });
    </script>
@endpush
