@extends('layouts.admin')

   @if(Session::has('message'))
       <div class="container">
           <div class="alert alert-success">
              <button type='button' class="close" data-dismiss="alert" aria-label="close">&times;</button>
              <strong>Success!</strong> {{Session::get('message')}}
           </div>

       </div>

    @endif

@section('content')

      <table  class='table'>
      	<thead>
      		<th>Nombre</th>
      		<th>Correo</th>
          <th>Tipo</th>
      		<th>Opciones</th>
      	</thead>
      	@foreach($users as $user) 
      	<tbody>
      		<td>{{$user->name}}</td>
      		<td>{{$user->email}}</td>
          <td>{{$user->type}}</td>
      		<td>
            {{link_to_route('usuario.edit', $title = 'Editar', $parametros = $user->id, $attributes = ['class' => 'btn btn-primary'])}}
          </td>
          <td>
            {{Form::open(['route'=>['usuario.destroy', $user->id], 'method'=>'DELETE'])}}
                 {{Form::submit('Eliminar', ['class'=>'btn btn-warning'])}}
            {{Form::close()}}
          </td>
      	</tbody>
      	@endforeach
      </table>
      {{$users->render()}}

@stop