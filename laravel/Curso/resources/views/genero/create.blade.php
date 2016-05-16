@extends('layouts.admin')
	@section('content')
	@include('alert.alert')

	   @if(Session::has('message'))
       <div class="container">
           <div class="alert alert-success">
              <button type='button' class="close" data-dismiss="alert" aria-label="close">&times;</button>
              <strong> Success! </strong> {{Session::get('message')}}
           </div>

       </div>
    @endif
    
	{!!Form::open(['route'=>'genero.store', 'method'=>'POST'])!!}
	
		@include('genero.form.genero')
		<div class='form-group'>
			 {{Form::submit('Crear', ['class'=>'btn btn-primary'])}}
		</div>
       
		{!!Form::close()!!}
	@endsection

