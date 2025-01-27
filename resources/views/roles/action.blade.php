@can('edit-role')
<a class="btn  btn-info " href="{{ route('roles.show',$role->id)}}" id="edit-role" data-action="roles/{{$role->id}}/edit"><i class="fa fa-key"></i></a>
@endcan
@can('edit-role')
<a class="btn  btn-info edit_role" href="javascript:void(0)" id="edit-role" data-action="roles/{{$role->id}}/edit"><i class="fa fa-edit"></i></a>
@endcan
@can('delete-role')
<a href="#" class="btn btn-danger delete-action" data-form-id="delete-form-{{$role->id}}"><i class="fas fa-trash mr-0"></i> </a>
{!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id],'id'=>'delete-form-'.$role->id]) !!}
{!! Form::close() !!}
@endcan
