@section('titulo', 'nombrePeli')

@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-sm-4"> 
         <img src="{{$peli['poster']}}" style="height:500px"/> 
        
    </div> 
    
    <div class="col-sm-8"> 
        <h1>{{$peli['title']}}</h1>
        <h2>Año: {{$peli['year']}}</h2>
        <h2>Director: {{$peli['director']}}</h2>
        <br>
        <p><b>Resumen:</b> {{$peli['synopsis']}}</p>
        <br>
        <p><b>Estado:</b> {{$peli['rented']}} <?php if($peli['rented'] == true) {
            echo "Pelicula actualmente alquilada</p>";
        } else {
            echo "Pelicula disponible</p>";
        }
        ?>
       
        <br>

        @if($peli['rented'] == true) 
            <a class="btn btn-danger">Devolver pelicula</a>
        @else 
            <a class="btn btn-success">Alquilar pelicula</a>
         @endif
    

    <a class="btn btn-warning"  href= "{{  url('/catalog/edit/' . $id ) }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001"/>
        </svg>
        Editar pelicula
    </a>

    <a class="btn btn-light" href="/catalog">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
        <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z"/>
        </svg>
        Volver al listado
    </a>
        
    </div> 



</div>

@endsection

