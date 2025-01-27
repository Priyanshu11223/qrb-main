@extends('layouts.main')
@section('title', 'Module')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>{{ __('Edit Module') }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('home') }}">{{ __('Dashboard') }}</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('module.create') }}">{{ __('Module') }}</a></div>
                    <div class="breadcrumb-item">{{ __('Edit') }}</div>
                </div>
            </div>
            <div class="section-body">
                <form class="form-horizontal" method="POST" action="{{ route('module.update', $module->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-xl-12 order-xl-1">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="heading-small text-muted mb-4">{{ __('Edit Module') }}</h6>
                                    <div class="pl-lg-4">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="name">{{ __('Name of Module') }}</label>
                                                    <input type="text" value="{{ $module->name }}" name="name"
                                                        class="form-control" id="password"
                                                        placeholder="{{ __('Name of Module') }}">
                                                    @if ($errors->has('module'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('module') }}</strong>
                                                        </span>
                                                    @endif
                                                    <input type="hidden" value="{{ $module->name }}" name="old_name"
                                                        class="form-control" id="password">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" mt-4 ">
                                        <button type="submit"
                                            class="btn btn-primary col-md-2 float-right ">{{ __('Update Module') }}</button>
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
