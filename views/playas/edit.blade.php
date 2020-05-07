@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                </br></br>
                <div class="panel-heading"><h2>Playa</h2></div>
                </br>
                <div class="panel-body">                    
                    {!! Form::model($playa, ['route' => ['playas.update', $playa->id],
                    'method' => 'PUT']) !!}
                    @csrf
                        <!--incluimos el formulario ya creado -->
                        @include('playas.partials.form')
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection