<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<link rel="stylesheet" href="/css/navegacion.css">
	<link rel="stylesheet" id="estilos" href="/css/estilo.css?uuid=<?php echo uniqid(); ?>">
	<title> @yield('titulo') </title>
</head>
<body>
	<div class="barranav">
	<nav class="navI">

	    <ul>

	        <li><a href="{{route('index')}}"><span class="primero"> <i class="icon icon-home"></i> </span>Inicio</a></li>
	        <li><a href="/Categorias"><span class="segundo"> <i class="icon icon-tags"></i> </span>Categorias</a></li>
	        <li><a href="{{route('FAQ')}}"><span class="tercero"> <i class="icon icon-notification"></i> </span>Preguntas Frecuentes</a></li>
	        <li><a href="{{route('perfil')}}"><span class="cuarto"> <i class="icon icon-profile"></i> </span>Perfil</a></li>
			@if (Auth::user() == true)
				@if (Auth::user()->rol == 2)
					<li><a href="{{route('productos')}}"><span class="quinto"> <i class="icon icon-text"></i> </span>Mis productos</a></li>
				@elseif (Auth::user()->rol == 3)
					<li><a href="{{route('productos')}}"><span class="quinto"> <i class="icon icon-text"></i> </span>Mis productos</a></li>
					<li><a href="/Administradores"><span class="quinto"> <i class="icon icon-user"></i></span>Panel de Administrador</a></li>
				@else
					<li><a href="/agregarProducto"><span class="quinto"> <i class="icon icon-text"></i></span>Agregar un producto </a></li>
				@endif
				@else
				<a class="btn btn-info" href="{{route('login')}}">Iniciar Sesion</a>
			@endif
			@if (Auth::user() == true)
				<form class="" action="{{route('logout')}}" method="post">
					{{csrf_field()}}
					<button class="btn btn-info" type="submit" name="button">Cerrar sesion</button>
				</form>
			@endif
	    </ul>
	</nav>
	</div>

	<div class="mantener">
		@yield('contenido')
	</div>

	<footer>

		<div class="footer">

			<div class="footer-content">
				<div class="footer-section nosotros">
					<h2> <span>Un poco sobre nosotros</span> </h2>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor</p>
				</div>

				<div class="footer-section links">
					<h2> <span>Nuestras Redes</span> </h2>
					<div class="red">
						<img src="/img/facebook.png" width="30px" alt="">
						<a href="#">
							<span>Siguenos en Facebook</span>
						</a>
					</div>

					<div class="red">
						<img src="/img/youtube.png" width="30px" alt="">
						<a href="#">
							<span>No olvides nuestros videos!</span>
						</a>
					</div>

					<div class="red">
						<img src="/img/twitter.png" width="30px" alt="">
						<a href="#">
							<span>No te pierdas nuestras noticias</span>
						</a>
					</div>

					<div class="red">
						<img src="/img/instagram.png" width="30px" alt="">
						<a href="#">
							<span>Siguenos en Instagram</span>
						</a>
					</div>
				</div>

				<div class="footer-section contacto">
					<h2> <span>Contacto</span> </h2>
					<div class="margenes telefono">
						<img src="/img/whatsapp.png" alt="Contacto" width="30px;">
						<span>+54 11 6718 5086 | </span>
						<span>+54 11 5175 5331 | </span>
						<span>+54 11 6859 6037</span>
					</div>

					<div class="margenes mail">
						<img src="/img/carta.png" alt="" width="30px;">
						<span>ProyectoBierful2020@gmail.com</span>
					</div>

					<div class="margenes direccion">
						<img src="/img/casa.png" alt="" width="30px">
						<span>Presidente Peron 4283, San Miguel, Buenos Aires, Argentina</span>
					</div>
				</div>

			</div>

			<div class="footer-bottom">
				<p>© Todos los Derechos Reservados 2020 | Bierful</p>
			</div>

		</div>

	</footer>


	<script type="application/javascript" src="/js/detallefoto.js"></script>	
	<script src="/js/mostrarocultar.js" type="application/javascript"> </script>
	<script src="/js/sweetalert2.js" type="application/javascript"> </script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
