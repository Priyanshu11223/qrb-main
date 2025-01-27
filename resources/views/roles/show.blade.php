@extends('layouts.main')
@section('title', 'Permission')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>{{ __('Roles Permissions') }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('home') }}">{{ __('Dashboard') }}</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('roles.index') }}">{{ __('Roles') }}</a></div>
                    <div class="breadcrumb-item active" aria-current="page">@yield('title')</div>
                </div>
            </div>
            <div class="section-body">
                @can('role-create')
                    <h2 class="section-title"><a href="#" class="btn btn-primary" id="add_user">{{ __('Add Role') }}</a></h2>
                @endcan
                <div class="row">
                    <div class="col-md-12 mx-auto">
                        <form class="form-horizontal" method="POST" action="{{ route('roles_permit', $role->id) }}">
                            @csrf
                            <div class="card">
                                <div class="card-header">
                                    {{ __('All Permissions') }}
                                </div>
                                <div class="card-body">
                                    <table class="table table-flush permission-table">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>{{ __('Module') }}</th>
                                                <th>{{ __('Permissions') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($allmodules as $row)
                                                <tr>
                                                    <td> {{ __(ucfirst($row)) }}</td>
                                                    <td>
                                                        <div class="row">
                                                            <?php
                                                            $default_permissions = ['manage', 'create', 'edit', 'delete', 'view', 'impersonate', 'fill', 'design', 'show','download','duplicate'];
                                                            ?>
                                                            @foreach ($default_permissions as $permission)
                                                                @if (in_array($permission . '-' . $row, $allpermissions))
                                                                    @php($key = array_search($permission . '-' . $row, $allpermissions))
                                                                    <div class="col-3 custom-control custom-checkbox">
                                                                        {{ Form::checkbox('permissions[]', $key, in_array($permission . '-' . $row, $permissions), ['class' => 'custom-control-input', 'id' => 'permission_' . $key]) }}
                                                                        {{ Form::label('permission_' . $key, ucfirst($permission), ['class' => 'custom-control-label']) }}
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                    </table>
                                    <div class="col-sm-12 mx-auto">
                                        <button type="submit"
                                            class="btn btn-primary float-right">{{ __('Update Permission') }}</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
