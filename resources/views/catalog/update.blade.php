@section('titulo', 'Update')

@extends('layouts.master')

@section('content')

@if ($pelicula)

    <div class="row">
    <div class="col-sm-4"> 
         <img src="{{ $pelicula['poster'] }}" style="height:300px">
        
    </div> 

    <div class="col-sm-8">
        <h1>{{ $pelicula['title'] }}</h1>
        <h2><b>Año:</b> {{ $pelicula['year'] }}</h2>
        <h2><b>Director:</b> {{ $pelicula['director'] }}</h2>
        <br>
        <p><b>Resumen:</b> {{ $pelicula['synopsis'] }}</p>
        </div> 
    </div>
@endif

@endsection