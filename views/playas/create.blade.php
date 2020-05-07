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
                    {{ Form::open(['route' => 'playas.store']) }}
                    @csrf

                        @include('playas.partials.form')
                        
                    {{ Form::close() }}

                    <!-- VALIDACION campos requqeridos -->
                    @if(count($errors)>0)
                     <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>  
                    </div>  
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection