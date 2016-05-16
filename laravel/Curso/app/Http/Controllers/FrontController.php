<?php

namespace Curso\Http\Controllers;

use Illuminate\Http\Request;
use Curso\Http\Requests;
use Curso\Movie;

class FrontController extends Controller
{
public function __construct()
    {
         $this->middleware('auth', ['only'=> 'admin']);
    }

    public function index()
    {
        $movies = Movie::Movies();
    	return view('index', compact('movies'));
    }

    public function register()
    {
        return view('register');
    }

    public function contacto()
    {
    	return view('contacto');
    }

    public function reviews()
    {
        $movies = Movie::Movies();
    	return view('reviews', compact('movies'));
    }

    public  function admin()
    {
        return view('layouts.admin');
    }

    
}
