@extends('plantilla')

@section('titulo', 'Lácteos')

@section ('seccion')
<h1>Lácteos</h1>

<ul>
	@foreach($lacteo as $item) 
	<li>{{ $item['title'] }}</li>
	@endforeach
</ul>
@endsection