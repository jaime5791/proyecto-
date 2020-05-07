@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            </br></br>
                <div class="panel-heading">
                <h2>Roles</h2>
                
                @can('roles.create')
                <a href="{{ route('roles.create') }}"
                 class="btn btn-sm btn-primary pull-right">
                 Crear roles para usuarios
                </a>  

                @endcan
                </br></br>
            	</div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                    	<thead>
                    		<tr>
                    			<th width="10px">ID</th>
                    			<th>Rol</th>
                                <th>Descripción</th>
                    			<th colspan="3">&nbsp;</th>
                    		</tr>
                    	</thead>
                    	<tbody>
                    		@foreach ($roles as $role)
                    		<tr>
                    			<td>{{ $role->id}}</td>
                    			<td>{{ $role->name}}</td>
                                <td>{{ $role->description}}</td>
                    			<td width="10px">
                    				@can('roles.show')
                    				<a href=" {{ route('roles.show', $role->id) }}"
                    				class="btn btn-sm btn-default">
                    					Ver
                    				</a>
                    				@endcan
                    			</td>

                    			<td width="10px">
                    				@can('roles.edit')
                    				<a href=" {{ route('roles.edit', $role->id) }}"
                    				class="btn btn-sm btn-default">
                    					Editar
                    				</a>
                    				@endcan
                    			</td>

                    			<td width="10px">
                    				@can('roles.destroy')
                    				<form action="{{ route('roles.destroy', $role->id) }}" method="post">
									@method('DELETE')
									@csrf
									<button class="btn btn-danger btn-sm">Eliminar</button>
									</form>
                    				@endcan
                    			</td>

                    		</tr>
                    		@endforeach
                    	</tbody>

                    	
                    </table>

                    <!-- Paginacion -->
                    {{ $roles ->render()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

