@extends('layouts.admin')

@section('content')
   @if(Session::has('message'))
      <div class='container'>
      	<div class='alert alert-succes'>
      		<button type='button' class='close' data-dismiss='alert' aria-label='close'>&times;</button>
      		<strong>Succes! </strong> {{Session::get('message')}}
      	</div>
      </div>
   @endif

    {{Form::model($genero, ['route'=>['genero.update', $genero->id], 'method'=>'PUT'])}}

         <div class='form-group'>
         	{{Form::label('genero', 'Genero')}}
         	{{Form::text('genero',null, ['class'=>'form-control'])}}
         </div>
         <div class='form-group'>
         	{{Form::submit('Actualizar', ['class'=>'btn btn-primary'])}}
         </div>
     
    {{Form::close()}}

@stop