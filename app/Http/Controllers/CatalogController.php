<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    // ATRIBUTS DE CLASSE



    public function index()
    {
        //return view('catalog.index', ["arrayPeliculas" => $this->arrayPeliculas]);
        $peliculas = Pelicula::all();
        return view('catalog.index', ["arrayPeliculas" => $peliculas]);
    }

    public function create()
    {
        return view('catalog.create');
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'title' => 'required',
            'year' => 'required',
            'director' => 'required',
            'poster' => 'required',
            'synopsis' => 'required',
        ]);
            $pelicula = new Pelicula;

            //$pelicula->title=>$request->title;
            //$pelicula->year=>$request->year;
            //$pelicula->director=>$request->director;
            //$pelicula->poster=>$request->poster;
            //$pelicula->synopsis=>$request->synopsis;
            //'rented'=>false;
           // $pelicula->save();


        $pelicula = [
            'title' => $request->title,
            'year' => $request->year,
            'director' => $request->director,
            'poster' => $request->poster,
            'synopsis' => $request->synopsis,
            'rented' => false
        ];
        // return redirect()->route('catalog.new', ['pelicula', $request->all()]);
        return view('catalog.new')->with('pelicula', $request->all());
    }

    //public function new()
    //{
    //$pelicula = session('pelicula');
    //return view('catalog.new', compact('pelicula'));
    //}

    public function show($id)
    {

        $pelicula = Pelicula::findOrFail($id);
        return view('catalog.show', ["peli" => $pelicula, "id" => $id]);
    }

    public function edit($id)
    {
        //$peliculas = $this->arrayPeliculas;
        //$pelicula = $peliculas[$id];
        //$peliculas = Pelicula::all();
        $pelicula = Pelicula::findOrFail($id);
        return view('catalog.edit', ['pelicula' => $pelicula, "id" => $id]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'year' => 'required',
            'director' => 'required',
            'poster' => 'required',
            'synopsis' => 'required'
        ]);

        $pelicula = Pelicula::findOrFail($id);
        //return view('catalog.edit', ['pelicula' => $pelicula, "id" => $id]);
        //$pelicula = $this->arrayPeliculas[$id]; 
        $pelicula->title = $request->title;
        $pelicula->year = $request->year;
        $pelicula->director = $request->director;
        $pelicula->poster = $request->poster;
        $pelicula->synopsis = $request->synopsis;
        return view('catalog.update')->with('pelicula', $request->all());
    }
}
