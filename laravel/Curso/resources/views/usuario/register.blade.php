@extends('layouts.principal')


@section('content')
      {{Form:open}} 
          {{Form::label('name', 'Nombre')}}
      {{Form::close}}

@stop