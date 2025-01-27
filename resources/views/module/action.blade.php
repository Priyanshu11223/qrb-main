@can('edit-module')
<a class="btn  btn-info edit_module" href="{{ route('module.edit', $module->id) }}" id="edit-module" data-action="module/{{$module->id}}/edit"><i class="fa fa-edit"></i></a>
@endcan
@can('delete-module')
<a href="#" class="btn btn-danger delete-action" data-form-id="delete-form-{{$module->id}}"><i class="fas fa-trash mr-0"></i> </a>
{!! Form::open(['method' => 'DELETE', 'route' => ['module.destroy', $module->id],'id'=>'delete-form-'.$module->id]) !!}
{!! Form::close() !!}
@endcan


