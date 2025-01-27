@extends('layouts.main')
@section('title', 'Module')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>{{ __('Create Modules') }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('home') }}">{{ __('Dashboard') }}</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('module.create') }}">{{ __('Module') }}</a></div>
                    <div class="breadcrumb-item">{{ __('Create') }}</div>
                </div>
            </div>
            <div class="section-body">
                <form class="form-horizontal" method="POST" action="{{ route('module.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-xl-12 order-xl-1">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="heading-small text-muted mb-4">{{ __('Create Module') }}</h6>
                                    <div class="pl-lg-4">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="name">{{ __('Name of Module') }}</label>
                                                    <input type="text" name="name" class="form-control" id="password"
                                                        placeholder="{{ __('Name of Module') }}">
                                                    @if ($errors->has('module'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('module') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label for="name">{{ __('Permission') }}</label>
                                                </div>
                                                <div class="form-group">

                                                    <div class="custom-control custom-checkbox custom-control-inline">
                                                        <input type="checkbox" name="permissions[]"
                                                            class="custom-control-input" id="managepermission" value="M">
                                                        <label class="custom-control-label" for="managepermission">
                                                            {{ __('Manage') }}
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox custom-control-inline ">
                                                        <input type="checkbox" name="permissions[]"
                                                            class="custom-control-input" id="createpermission" value="C">
                                                        <label class="custom-control-label" for="createpermission">
                                                            {{ __('Create') }}
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox custom-control-inline">
                                                        <input type="checkbox" name="permissions[]"
                                                            class="custom-control-input" id="editpermission" value="E">
                                                        <label class="custom-control-label" for="editpermission">
                                                            {{ __('Edit') }}
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox custom-control-inline">
                                                        <input type="checkbox" name="permissions[]"
                                                            class="custom-control-input" id="deletepermission" value="D">
                                                        <label class="custom-control-label" for="deletepermission">
                                                            {{ __('Delete') }}
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox custom-control-inline">
                                                        <input type="checkbox" name="permissions[]"
                                                            class="custom-control-input" id="showpermission" value="S">
                                                        <label class="custom-control-label" for="showpermission">
                                                            {{ __('Show') }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" mt-4 ">
                                        <button type="submit"
                                            class="btn btn-primary col-md-2 float-right ">{{ __('Create Module') }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
