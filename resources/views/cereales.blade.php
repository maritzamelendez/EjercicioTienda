@extends('plantilla')

@section('titulo', 'Cereales')

@section ('seccion')
<h1>Cereales</h1>

<ul>
	@foreach($cereal as $item) 
	<li>{{ $item['title'] }}</li>
	@endforeach
</ul>
@endsection