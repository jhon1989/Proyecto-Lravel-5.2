<?php

namespace Curso\Http\Controllers;

use Illuminate\Http\Request;
use Curso\Http\Requests;
use Curso\Http\Requests\UserCreateRequest;
use Curso\Http\Requests\UserUpdateRequest;
use Session;
use Redirect;
use Curso\User;

class UsuarioController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
    $this->middleware('auth', ['only', 'create', 'edit']);
  }
     
    public function index()
    {
        $users = \Curso\User::paginate(2);
        return view('usuario.index', compact('users'));
    }

    public function create()
    {
         return view('usuario.create');
    }

    public function store(UserCreateRequest $request)
    {
         \Curso\User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => $request['password'],
            'type'=>$request['select'],
            ]);

         return redirect('/usuario')->with('message', 'El usuario se creo correctamente');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
       $user = User::find($id);
       return view('usuario.edit', ['user'=>$user]);
    }

    public function update($id, UserUpdateRequest $request)
    {
       $user = User::find($id);
       $user->fill($request->all());
      if($user->save())
      {
         Session::flash('message', 'Usuario editado corretcamente');
         return Redirect::to('/usuario');
      }
      else
      {
         
      }
      
    }

    public function destroy($id)
    {
       $user = User::find($id);
       $user->delete();
       Session::flash('message', 'Usuario eliminado');
       return Redirect::to('/usuario');
    }
}
