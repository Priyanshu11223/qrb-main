@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
{!! Form::open(['route' => 'users.store', 'method' => 'Post', 'enctype' => 'multipart/form-data']) !!}
<div class="row">
    <div class="form-group col-6 ">
        {{ Form::label('name', __('Name')) }}
        <div class="input-group ">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-user"></i>
                </div>
            </div>
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => __('Enter Name')]) !!}
        </div>
    </div>
    <div class="form-group col-6">
        {{ Form::label('email', __('Email')) }}
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-envelope"></i>
                </div>
            </div>
            {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => __('Enter Email Address')]) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="form-group col-6 ">
        {{ Form::label('password', __('Password')) }}
        <div class="input-group ">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-lock"></i>
                </div>
            </div>
            {!! Form::password('password', ['class' => 'form-control', 'placeholder' => __('Enter  Password')]) !!}
        </div>
    </div>
    <div class="form-group col-6 ">
        {{ Form::label('confirm-password', __('Confirm Password')) }}
        <div class="input-group ">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-lock"></i>
                </div>
            </div>
            {{ Form::password('confirm-password', ['class' => 'form-control', 'placeholder' => _('Enter Confirm Password')]) }}
        </div>
    </div>
</div>
<div class="row">
    <div class="form-group col-6">
        {{ Form::label('roles', __('Role')) }}
        <div class="input-group ">

            {!! Form::select('roles', $roles, null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<div class="btn-flt">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Close') }}</button>
    <button type="sub" class="btn btn-primary">{{ __('Save') }}</button>
</div>
{!! Form::close() !!}
