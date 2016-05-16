@extends('layouts.admin')

@if(Session::has('message'))
        <div class='alert alert-success alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
             <strong>Succes!! </strong> {{Session::get('message')}}
        </div>
    @endif

@section('content')
    
    <table class='table'>
    	<thead>
    			<th>Nombre</th>
    			<th>Genero</th>
    			<th>Direccion</th>
    			<th>Caratulas</th>
    			<th>Operaciones</th>
    	</thead>
    @foreach($movies as $movie)	
    	<tbody>
    		<td>{{$movie->name}}</td>
    		<td>{{$movie->genero}}</td>
    		<td>{{$movie->direction}}</td>
    		<td>
    			<img src='movies/{{$movie->path}}' alt='Imagen' style='width:100px; height:120px;'/>
    		</td>
    		<td>
                {{link_to_route('movie.edit', $title='Editar', $parameters=$movie->id, $attributes=['class'=>'btn btn-primary'])}}
            </td>
            <td>
                {{Form::open(['route'=>['movie.destroy', $movie->id], 'method'=>'DELETE'])}}
                   {{Form::submit('Eliminar', ['class'=>'btn btn-warning'])}}
                {{Form::close()}}
            </td>
    	</tbody>
    @endforeach	
    </table> 
     
     
@stop