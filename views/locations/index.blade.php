@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
               
               </br></br>
                <div class="panel-heading"><h2>Localizaciones usuarios</h2></div>
                </br>
                <a href="{{ route('locations.create') }}" class="btn btn-primary btn-sm">Crear o editar tu localización</a>
                </br></br>
                <div class="panel-body">
                    <table class="table table-striped table-hover">
                    	<thead>
                    		<tr>
                                <th>Nombre</th>
                    			<th>Localidad</th>
                                
                    			
                    		</tr>
                    	</thead>
                    	<tbody>
                    		@foreach ($locations as $location)
                    		<tr>
                                
                                <td>{{ $location->profile->user->name}}</td>
                    			<td>{{ $location->localidad}}</td>
                    			
                    			

                    		</tr>
                    		@endforeach
                    	</tbody>

                    	
                    </table>

                    <!-- Paginacion -->
                    {{ $locations ->render()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

