<?php

namespace Curso\Http\Controllers;

use Illuminate\Http\Request;
use Curso\Http\Requests;
use Curso\Http\Requests\RegisterRequest;
use Session;
use Redirect;
use Curso\User;

class UserRegister extends Controller
{
    public function store(RegisterRequest $request)
	{

     User::create([
        	'name'=>$request['name'],
        	'email'=>$request['email'],
        	'password'=>$request['password'],
        	'type'=>$request['type']
        	]);
        Session::flash('message', 'El usuario fue creado con exito');
        return Redirect::to('/');

        
    }
            
}
