@extends('layouts.plantilla')

@section('section1')
	<span>Bienvenido a la vista index de la carpeta crud</span>
	<ul>
		<li><a href="{{route('enlace')}}">pagina 2 (vista link.blade</a></li>
		<li><a href="{{route('tercera')}}">pagina 3 (redireccionada a vista contac1.blade</a></li>
	</ul>	
@endsection	