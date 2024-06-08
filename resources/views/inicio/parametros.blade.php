@extends('layouts.plantilla')

@section('section1')
	<h3>Esta es la seccion de "content" -----------------------------------</h3>
	<h1>PARAMETROS</h1>
	<span>Nombre: {{$datos['nombre']}}</span><br>
	<span>Telefono: {{$datos['telefono']}}</span><br>
	<span>Email: {{$datos['email']}}</span><br>		
@endsection

@section('section2')
	<h3>Esta es la primera seccion ----------------------------------------</h3>
@endsection

