@can('edit-permission')
<a class="btn  btn-info edit_permission" href="javascript:void(0)" id="edit-permission" data-action="permission/{{$permission->id}}/edit"><i class="fa fa-edit"></i></a>
@endcan
@can('delete-permission')
<a href="#" class="btn btn-danger delete-action" data-form-id="delete-form-{{$permission->id}}"><i class="fas fa-trash mr-0"></i> </a>
{!! Form::open(['method' => 'DELETE', 'route' => ['permission.destroy', $permission->id],'id'=>'delete-form-'.$permission->id]) !!}
{!! Form::close() !!}
@endcan
