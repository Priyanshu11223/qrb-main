@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
{!! Form::open(['route' => 'permission.store', 'method' => 'Post', 'enctype' => 'multipart/form-data']) !!}
<div class="row">
    <div class="form-group col-6 ">
        {{ Form::label('name', __('Name')) }}
        <div class="input-group ">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-user"></i>
                </div>
            </div>
            {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control']) !!}
        </div>
    </div>
</div>
<div class="btn-flt">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Close') }}</button>
    <button type="sub" class="btn btn-primary">{{ __('Save') }}</button>
</div>
{!! Form::close() !!}
