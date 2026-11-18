@section('titulo', 'Editar pelicula ' . $pelicula['title'])

@extends('layouts.master')

@section('content')
<div class="row" style="margin-top:40px">
   <div class="offset-md-3 col-md-6">
      <div class="card">
         <div class="card-header text-center">
            Modificar pel·lícula
         </div>
         
         <div class="card-body" style="padding:30px">
            <form action="{{ route('catalog.update', ["id" => $id]) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
               <label for="title">Título</label>
               <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $pelicula['title']) }}" required>
            </div>

            <div class="form-group">
                <label for="year">Año</label>
                <input type="text" name="year" id="year" class="form-control" value="{{ old('year', $pelicula['year']) }}" required>
            </div>

            <div class="form-group">
                <label for="director">Director</label>
                <input type="text" name="director" id="director" class="form-control" value="{{ old('director', $pelicula['director']) }}" required>
            </div>

            <div class="form-group">
                <label for="poster">Poster</label>
                <input type="text" name="poster" id="poster" class="form-control" value="{{ old('poster', $pelicula['poster']) }}" required>
            </div>

            <div class="form-group">
               <label for="synopsis">Resumen</label>
               <textarea name="synopsis" id="synopsis" class="form-control" rows="3" required>{{ old('synopsis', $pelicula['synopsis']) }}</textarea>
            </div>

            <div class="form-group text-center">
               <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                Modificar pel·lícula
               </button>
            </div>


            </form>
         </div>
      </div>
   </div>
</div>
@endsection
