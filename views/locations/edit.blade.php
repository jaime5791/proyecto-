@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                </br></br>
                <div class="panel-heading"><h2>Editar localización</h2></div>
                </br>
                <div class="panel-body">                    
                    {!! Form::model($location, ['route' => ['locations.update', $location->id],
                    'method' => 'PUT']) !!}
                    @csrf
                        <!--incluimos el formulario ya creado -->
                        @include('locations.partials.form')
                        
                    {!! Form::close() !!}

                    {!! Form::model($location, ['route' => ['locations.destroy', $location->id], 'method' => 'DELETE']) !!}
                    {!! Form::submit('Eliminar localidad', array('class' => 'btn btn-sm btn-danger')) !!}
                        
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection