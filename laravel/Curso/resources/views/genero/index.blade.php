@extends('layouts.admin')


@section('content')

    @if(Session::has('message'))
           
           <div class='container'>
           	  <div class='alert alert-success'>
           	  	<button type='button' class='close' data-dismiss='alert' aria-label='close'>&times;</button>
           	  		<strong> Success!  </strong> {{Session::get('message')}}
           	  </div>
           </div>

    @endif

    <table class='table'>
    	<thead>
    		<th>Genero</th>
    		<th>Opciones</th>
    	</thead>
    	@foreach($genero as $generos)
    	    <tbody>
    		    <td>{{$generos->genero}}</td>
    		    <td>
    		    	{{link_to_route('genero.edit', $title='Editar', $parameters = $generos->id, $attributos=['class'=>'btn btn-primary'])}}
    		    </td>
    		    <td>
    		    	{{Form::open(['route'=>['genero.destroy', $generos->id], 'method'=>'DELETE'])}}
    		    	     {{Form::submit('Eliminar', ['class'=>'btn btn-warning'])}}
    		    	{{Form::close()}}
    		    </td>
    	    </tbody>

    	@endforeach
    </table>
  {{$genero->render()}}
@stop