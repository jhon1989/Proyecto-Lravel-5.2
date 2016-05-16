@extends('layouts.admin')


@section('content')
    
    @include('alert.alert')
     
     {{Form::model($user, ['route'=> ['usuario.update', $user->id], 'method'=>'PUT'])}}

        @include('usuario.form.formUser')
        
        <div class='form-group'>
             {{Form::submit('Actualizar', ['class'=>'btn btn-primary', 'data-toggle'=>'tooltip', 'data-placement'=>'top', 'title'=>'Actualizar'])}}
        </div>     

     {{Form::close()}}

@stop
