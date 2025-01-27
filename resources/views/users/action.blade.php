@can('edit-user')
<a class="btn  btn-info" href="javascript:void(0)" id="edit-user" data-action="users/{{$user->id}}/edit"><i class="fa fa-edit"></i></a>
@endcan
@can('delete-user')
<a href="#" class="btn btn-danger delete-action" data-form-id="delete-form-{{$user->id}}"><i class="fas fa-trash mr-0"></i> </a>
{!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id],'id'=>'delete-form-'.$user->id]) !!}
{!! Form::close() !!}
@endcan
