<div class='form-group'>
	{{Form::label('name', 'Nombre')}}
	{{Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el nombre'])}}
</div>
<div class='form-group'>
	{{Form::label('email', 'Email')}}
	{{Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el email'])}}
</div>
<div class='form-group'>
	{{Form::label('password', 'Password')}}
	{{Form::password('password', ['class'=>'form-control', 'placeholder'=>'Ingrese la password'])}}
</div>
<div class='form-group'>
	{{Form::label('type', 'Tipo')}}
	{{Form::select('select',['admin'=>'Admin', 'user'=>'Usuario'], 'user')}}
</div>