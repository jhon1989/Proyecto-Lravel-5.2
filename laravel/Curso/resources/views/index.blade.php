@extends('layouts.principal')


    @if(Session::has('message'))
       <div class='alert alert-success alert-dismissible' role='alert'>
       	<button class='close' type='button' data-dismiss='alert' aria-label='Close'>
       		<span aria-hidden='true'>&times;</span>
       	</button>
       	<strong>Success!!  </strong>  {{Session::get('message')}}
       </div>
    @endif


@section('content')
@include('alert.errors')
@include('alert.alert')
@include('header.header')


<div class="header">
			
				<div class="search v-search">
					{{Form::open()}}
					   @include('search.search')
					{{Form::close()}}
				</div>
				<div class="clearfix"></div>
			
			<div class="header-info">
				<h1>BIG THEATER 6</h1>
				{{Form::open(['route'=>'log.store', 'method'=>'POST'])}}
                     <div class='form-group'>
                     	{{Form::label('email', 'Email')}}
                     	{{Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el amail'])}}
                     </div>
                     <div class='form-group'>
                         {{Form::label('password', 'Password')}}
                         {{Form::password('password', ['class'=>'form-control', 'placeholder'=>'Ingresa a password'])}}
                     </div>
                     <div class='form-group'>
                     	 {{Form::submit('Loguearse', ['class'=>'btn btn-primary'])}} 
                     	 {{link_to('register', $title = 'Registrarse', $attributes=['class'=>'btn btn-success'])}}
                     </div>
                     
				{{Form::close()}}
				<div class='form-group'>
                    {{link_to('password/email', $title = 'Olvidaste tu contraseña?',
                     $attributes = ['class'=>'btn btn-danger'], $secure = null )}}
                </div>
			</div>
		</div>
		<div class="review-slider">
		  <ul id="flexiselDemo1">
               @foreach($movies as $images)
                  <a href=''><li><img src='movies/{{$images->path}}' title='{{$images->name}}' style='width=:150px; height:350px;'></li></a>
               @endforeach
		  </ul>
			
@stop
