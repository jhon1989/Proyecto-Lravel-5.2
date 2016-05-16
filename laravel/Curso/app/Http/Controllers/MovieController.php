<?php

namespace Curso\Http\Controllers;

use Illuminate\Http\Request;
use Curso\Http\Requests;
use Curso\Movie;
use Curso\Genero;
use Redirect;
use Session;

class MovieController extends Controller
{
    /**
    * Display a listing of the resource
    *
    * @return Response
    */
    public function index()
    {
        $movies = Movie::Movies();
    	return view('movies.index', compact('movies'));
    }

    /**
    * Show the for creating a new resource
    *
    * @return Response
    */
    public function create()
    {
        $generos = Genero::lists('genero', 'id');
        return view('movies.create', compact('generos'));
    }

    /**
    *  Storeg a newly created resource in storeg
    *
    * @return Reponse
    */
    public function store(Request $request)
    {
        Movie::create($request->all());
        Session::flash('message', 'La pelicula se creo correctamente');
    	return Redirect::to('/movie');
    }

    /**
    *
    * Dcisplay the spacified resource
    * @param int $id
    * @Return Reponse
    */
    public function show($id)
    {
    	return 'metod sow ';
    }

    /**
    * Show de form for edditing specified resource.
    *
    * @param int $id
    * @return Response
    */
    public function edit($id)
    {
        $movie = Movie::find($id);
        $generos = Genero::lists('genero', 'id');
    	return view('movies.edit', ['movie'=>$movie, 'generos'=>$generos]);
    }

    /**
    * Update the specified resource in storage;
    *
    * @param int $id
    * @return Reponse
    */
    public function update($id, Request $request)
    {

        $movie = Movie::find($id);
         \Storage::delete($movie->path);
        $movie->fill($request->all());
        if($movie->save())
        {
           
            Session::flash('message', 'Pelicula actualizada correctamente');
            return Redirect::to('/movie');
        }
        
    }

    /**
    * Remove the specifiedf resource from storega
    *
    * @param $id
    * @return Response
    */
    public function destroy($id)
    {
         $movie = Movie::find($id);
         $movie->delete();
         \Storage::delete($movie->path);
    	  return Redirect::to('/');
    }
    


}
