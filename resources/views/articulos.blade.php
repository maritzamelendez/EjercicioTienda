@extends('plantilla')

@section('titulo', 'Artículos')

@section ('seccion')
<h1>Artículos</h1>

<ul>
	@foreach($articulo as $item) 
	<li>{{ $item['title'] }}</li>
	@endforeach
</ul>
@endsection