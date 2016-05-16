@extends('layouts.admin')

@section('content')
       
       
       {{Form::model($movie, ['route'=>['movie.update', $movie->id], 'method'=>'PUT', 'files'=>'true'])}}

          @include('movies.form.form')

          {{Form::submit('Actualizar', ['class'=>'btn btn-primary'])}}
             
       {{Form::close()}}     
      
@stop