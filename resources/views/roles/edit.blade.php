@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
{!! Form::model($role, ['route' => ['roles.update', $role->id], 'method' => 'Put', 'enctype' => 'multipart/form-data']) !!}
<div class="row">
<div class="form-group col-6 ">
    {{ Form::label('name', __('First Name'))}}
    <div class="input-group  ">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fas fa-user"></i>
        </div>
      </div>
      {{ Form::text('name', null, ['class' => 'form-control','placeholder' => __('Enter First Name')]) }}
    </div>
  </div>
</div>
  <div class="btn-flt">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Close') }}</button>
        <button type="sub" class="btn btn-primary">{{ __('Save changes') }}</button>
  </div>
{!! Form::close() !!}
