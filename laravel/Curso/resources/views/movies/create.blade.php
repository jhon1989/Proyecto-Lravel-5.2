@extends('layouts.admin')

@section('content')
    {{Form::open(['route'=>'movie.store', 'method'=>'POST', 'files'=>'true'])}}
          @include('movies.form.form')

          {{Form::submit('Crear', ['class'=>'btn btn-primary'])}}
     {{Form::close()}}     

@stop