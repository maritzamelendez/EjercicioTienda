@extends('plantilla')

@section('titulo', 'Frutas')

@section ('seccion')
<h1>Frutas</h1>

<ul>
	@foreach($fruta as $item) 
	<li>{{ $item['title'] }}</li>
	@endforeach
</ul>
@endsection