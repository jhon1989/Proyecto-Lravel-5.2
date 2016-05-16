<?php

namespace Curso\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use Redirect;
use Curso\Http\Requests;

class MailController extends Controller
{
    public function store(Request $request)
    {
    	Mail::send('emails.contact', $request->all(), function($msj){
            $msj->subject('correo de contacto');
            $msj->to('janeroski12@hotmail.com');
    	});

    	Session::flash('message', 'El correo fue enviado correctamente');
    	return Redirect::to('/contacto');
    }
}
