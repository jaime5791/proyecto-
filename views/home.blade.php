@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    Ya eres miembro de AmigoSurf   ¿quieres completar o editar tu perfil?  
                    </br></br>
                    <a href="{{ route('profiles.create') }}" class="btn btn-primary btn-sm">Completar o editar yu perfil</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
