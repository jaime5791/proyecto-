@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            </br></br>
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Playa</h2></div>
                </br>

                <div class="panel-body">                                        
                    <p><strong>Nombre: </strong> {{ $playa->nombre }}</p>
                    <p><strong>Tipo de fondo: </strong> {{ $playa->fondo }}</p>
                    <p><strong>Nº de picos: </strong> {{ $playa->picos }}</p>
                    <p><strong>Mejor marea: </strong> {{ $playa->mejor_marea }}</p>
                    <p><strong>Tamaño medio en metros : </strong> {{ $playa->oleaje_medio }}</p>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection

