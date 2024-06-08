@extends('layouts.plantilla')

@section('section1')
	<h3>Esta es la seccion de "content" -----------------------------------</h3>
	<h1>CONTACT1</h1>
	<span>Mi nombre es 
		@if ($name == 'JC')
			<h3>{{$name}}</h3>, y mi edad es de <h3>{{$edad}}</h3></span>
		@else 
			<h3>Anónimo</h3></span>
		@endif	
@endsection

@section('section2')
	<h3>Esta es la primera seccion ----------------------------------------</h3>
@endsection

