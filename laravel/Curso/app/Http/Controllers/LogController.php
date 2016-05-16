<?php

namespace Curso\Http\Controllers;

use Auth;
use Session;
use Redirect;
use Curso\Http\Requests;
use Curso\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LogController extends Controller
{
	public function store(LoginRequest $request)
	{
         if(Auth::attempt(['email' => $request['email'], 'password'=> $request['password']]))
         {
         	return Redirect::to('admin');
         }
         else
         {
            Session::flash('message-error', 'Usuario o contraseña incorrectos');
            return Redirect::to('/');
         }
	}

   public function logout()
   {
      Auth::logout();
      return Redirect('/');
   }
    
}
