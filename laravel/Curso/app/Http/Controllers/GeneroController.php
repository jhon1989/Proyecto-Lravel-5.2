<?php

namespace Curso\Http\Controllers;

use Curso\Http\Requests\RequestGenero;
use Illuminate\Http\Request;
use Curso\Http\Requests;
use Session;
use Redirect;
use Curso\Genero;

class GeneroController extends Controller
{
    public function create()
    {
    	return view('genero.create');
    }

    public function store(RequestGenero $request)
    {
    	\Curso\Genero::create([
            'genero' => $request['genero'],
            ]);
        Session::flash('message', 'Operacion exitosa');
        return redirect('/genero/create');
    }

    public function index()
    {
        $genero = Genero::paginate(7);
        return view('genero.index', compact('genero'));
    }

    public function edit($id)
    {
        $genero = Genero::find($id);
        return view('genero.edit', ['genero'=>$genero]);
    }

    public function update($id, Request $request)
    {
        $genero = Genero::find($id);
        $genero->fill($request->all());
        $genero->save();

        Session::flash('message', 'Operacion exitosa');
        return redirect('/genero');
    }

    public function destroy($id)
    {
        $genero = Genero::find($id);
        $genero->delete();
        Session::flash('message', 'Operacion exitosa');
        return Redirect::to('/genero');
    }

    public function show($id)
    {
    }

}