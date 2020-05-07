@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                </br></br>
                <div class="panel-heading">
                <h2>Playa</h2>
                
                @can('playas.create')
                <a href="{{ route('playas.create') }}"
                 class="btn btn-sm btn-primary pull-right">
                 Crear un nuevo Spot
                </a> 
                </br></br>

                @endcan

            	</div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                    	<thead>
                    		<tr>
                    			<th width="10px">ID</th>
                    			<th>Nombre</th>
                                <th>Fondo</th>
                                <th>Nº picos</th>
                                <th>Mejor marea</th>
                                <th>Tamaño medio en metros</th>
                    			<th colspan="3">&nbsp;</th>
                    		</tr>
                    	</thead>
                    	<tbody>
                    		@foreach ($playas as $playa)
                    		<tr>
                    			<td>{{ $playa->id}}</td>
                    			<td>{{ $playa->nombre}}</td>
                                <td>{{ $playa->fondo}}</td>
                                <td>{{ $playa->picos}}</td>
                                <td>{{ $playa->mejor_marea}}</td>
                                <td>{{ $playa->oleaje_medio}}</td>
                    			<td width="10px">
                    				@can('playas.show')
                    				<a href=" {{ route('playas.show', $playa->id) }}"
                    				class="btn btn-sm btn-default">
                    					Ver
                    				</a>
                    				@endcan
                    			</td>

                    			<td width="10px">
                    				@can('playas.edit')
                    				<a href=" {{ route('playas.edit', $playa->id) }}"
                    				class="btn btn-sm btn-default">
                    					Editar
                    				</a>
                    				@endcan
                    			</td>

                    			<td width="10px">
                    				@can('playas.destroy')
                    				<form action="{{ route('playas.destroy', $playa->id) }}" method="post">
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
                    {{ $playas ->render()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

