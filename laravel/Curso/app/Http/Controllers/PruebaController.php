<?php namespace Curso\Http\Controllers;

class PruebaController extends Controller {

	/**
	* show the application welcome screen to the user
	*
	*@return Response
	*/
	public function index(){
		return "Hola desde Controller";
	}

	public function getNombre($nombre){
		return "Hola mi nombre es:" . $nombre;
	}
}

