@extends('layout.master')

@section('title')
Dashboard
@stop

@section('menu')
    <li class="active"><a href="/">Inicio</a></li>
    <li><a href="#">Buscar</a></li>
    <li><a href="/contact">Contactanos</a></li>
@stop

@section('content')

<h1>Bienes de Costa Rica</h1>
@foreach($real_states as $result)
    <div class="container col-md-6">
        <div class="row">
            <div class="col-md-8">
                <img src="/img/sinImagen.jpg" width="244" height="163">
            </div>
            <div class="container col-md-4">
                <p>Nombre: {{$result->name}}</p>
                <p>Descripción:{{$result->description}}</p>
            </div>
        </div>        
</div>
<br>
@endforeach
@stop