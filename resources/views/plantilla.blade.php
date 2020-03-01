<!DOCTYPE html>
<html>
<head>
	<title>@yield('titulo')</title>

</head>
<body>
	<div class="container">
		<a href="{{ route('home') }}" class="btn-btn">Home</a>
		<a href="{{ route('articulos') }}" class="btn-btn">Artículos</a>
		<a href="{{ route('carnes') }}" class="btn-btn">Carnes</a>
		<a href="{{ route('cereales') }}" class="btn-btn">Cereales</a>
		<a href="{{ route('frutas') }}" class="btn-btn">Frutas</a>
		<a href="{{ route('lacteos') }}" class="btn-btn">Lácteos</a>
		
	</div>

	<div>
		@yield('seccion')
	</div>
	
</body>
</html>