@extends('layouts.principal')

 @if(Session::has('message'))
     <div class='alert alert-success alert-dismissible' role='alert'>
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
               <span aria-hidden='true'>&times;</span>
          </button>
          <strong>Success!! </strong>{{Session::get('message')}}
     </div>
 @endif

@section('content')
    
     <div class="contact-content">

     	@include('header.header')

     	<div class='main-contact'>
     		<h3 class='head'>CONTACTO</h3>
     		<p>SIEMPRE ESTAMOS AQUI PARA AYUDAR</p>
     		<div class='contact-form'>
     			{{Form::open(['route'=>'emails.store', 'method'=>'POST'])}}
     				<div class='col-md-6 contact-left'>
     					{{Form::text('name', null, ['placeholder'=>'Nombre'])}}
                              {{Form::text('email', null, ['placeholder'=>'Email'])}}
                              {{Form::submit('Enviar')}}
     				</div>
     				<div class='col-md-6 contact-right'>
     					{{Form::textarea('mensaje', null, ['placeholder'=>''])}}

     				</div>

     				<div class='clearfix'></div>

     			{{Form::close()}}

     		</div>
     	</div>


     </div>

@stop