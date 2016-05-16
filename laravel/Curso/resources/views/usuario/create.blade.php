@extends('layouts.admin')


@section('content')
       
      @include('alert.alert')
     
      
         {{Form::open(['route'=>'usuario.store', 'method'=>'POST'])}}

             @include('usuario.form.formUser')

             {{Form::submit('Crear', ['class'=>'btn btn-primary', 'data-toggle'=>'tooltip', 'data-placement'=>'top', 'title'=>'Crear'])}}
           
         {{Form::close()}}

@stop