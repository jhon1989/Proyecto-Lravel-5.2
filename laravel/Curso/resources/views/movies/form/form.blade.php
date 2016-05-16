<div class='form-group'>
	{{Form::label('name', 'Nombre')}}
	{{Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Nombre'])}}
</div>
<div class='form-group'>
	{{Form::label('elenco', 'Elenco')}}
	{{Form::text('cast', null, ['class'=>'form-control', 'placeholder'=>'Elenco'])}}
</div> 
<div class='form-group'>
	{{Form::label('direccion', 'Direccion')}}
	{{Form::text('direction', null, ['class'=>'form-control', 'placeholder'=>'direccion'])}}
</div>
<div class='form-group'>
	{{Form::label('duracion', 'Duraccion')}}
	{{Form::text('duration', null, ['class'=>'form-control', 'placeholder'=>'Duracion'])}}
</div>
<div class='form-group'>
	{{Form::label('poster', 'Poster')}}
	{{Form::file('path')}}
</div>
<div class='form-group'>
	{{Form::label('genero', 'Genero')}}
	{{Form::select('genero_id', $generos)}}
</div>