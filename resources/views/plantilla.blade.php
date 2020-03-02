<!DOCTYPE html>
<html>
<head>
	<title>@yield('titulo')</title>

</head>
<body>
	<div class="container">
		<a href="{{ route('home') }}" class="btn-btn">Home</a>
		<a href="/articulos" class="btn-btn">Artículos</a>
		<a href="/carnes" class="btn-btn">Carnes</a>
		<a href="/cereales" class="btn-btn">Cereales</a>
		<a href="/frutas" class="btn-btn">Frutas</a>
		<a href="/lacteos" class="btn-btn">Lácteos</a>
		
	</div>

	<div>
		@yield('seccion')
	</div>
	
</body>
</html>