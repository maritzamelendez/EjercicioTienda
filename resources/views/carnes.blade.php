@extends('plantilla')

@section('titulo', 'Carnes')

@section ('seccion')
<h1>Carnes</h1>

<ul>
	@foreach($carne as $item) 
	<li>{{ $item['title'] }}</li>
	@endforeach
</ul>
@endsection