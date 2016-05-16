@extends('layouts.principal')


@section('content')
@include('alert.alert')

 {{Form::open(['route'=>'registerUser.store', 'method'=>'POST'])}} 

 <div class="top-header- span-top">

     		@include('header.header')

   <div class='main-contact'>
     		<h3 class='head'>CREAR USUARIO</h3>
     		<p>SIEMPRE ESTAMOS AQUI PARA AYUDAR</p>
     		<div class='contact-form'>
     			<form>
     				<div class='col-md-8 form-group'>
     					{{Form::label('name', 'Nombre')}}
     					{{Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Nombre'])}}
     				</div>
     				<div class='col-md-8 form-group'>
     					{{Form::label('email', 'Email')}}
     					{{Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'Email'])}}
     				</div>
     				<div class='col-md-8 form-group'>
     					{{Form::label('password', 'Password')}}
     					{{Form::password('password', ['class'=>'form-control', 'placeholder'=>'Password'])}}
     				</div>	
                     <div class='col-md-8 form-group'>
                          <input type='hidden' name='type' value='user' />    
                    </div>
     				<div class='col-md-8 form-group'>
     					{{Form::submit('Registrarse', ['class'=>'btn btn-primary'])}}
     				</div>
                   
     				<div class='clearfix'></div>
     			</form>

     		</div>
    </div>

    {{Form::close()}}

@stop