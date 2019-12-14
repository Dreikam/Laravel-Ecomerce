<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
	<link rel="stylesheet" href="/css/navegacion.css">
	<link rel="stylesheet" href="css/estilo.css?uuid=<?php echo uniqid(); ?>">
	<title>Bierful</title>
</head>
<body>
	<div class="barranav">
	<nav class="navI">
	    <ul>
	        <li><a href="{{route('index')}}"><span class="primero"> <i class="icon icon-home"></i> </span>Inicio</a></li>
	        <li><a href="#"><span class="segundo"> <i class="icon icon-tags"></i> </span>Categorias</a></li>
	        <li><a href="{{route('FAQ')}}"><span class="tercero"> <i class="icon icon-suitcase"></i> </span>Preguntas Frecuentes</a></li>
	        <li><a href="{{route('perfil')}}"><span class="cuarto"> <i class="icon icon-profile"></i> </span>Perfil</a></li>
			<li><a href="{{route('productos')}}"><span class="quinto"> <i class="icon icon-text"></i> </span>Mis productos</a></li>
			<?php if (Auth::user() == true): ?>
			<form class="" action="{{route('logout')}}" method="post">
				{{csrf_field()}}
				<button type="submit" class="btn btn-outline-success my-2 my-sm-0" name="button">Cerrar sesión</button>
			</form>
			<?php else: ?>
				<li> <a href="{{route('login')}}">Iniciar sesion</a> </li>
			<?php endif; ?>
	    </ul>
	</nav>
	</div>
	@dd(Auth::user())
	exit;
	<div class="contenedor">
		<header class="headerI">
			<img src="img/logo_nav.png" alt="Logo">
			<h2>Mercado de Cerveza Artesanal</h2>


		</header>
		<main class="mainI">
			<form class="" action="" method="post">
				<nav class="nava">
						<input class="form-control mr-sm-2" type="search" placeholder="Buscar un articulo..." aria-label="Search">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
				</nav>
			</form>

			<section class="sectionI productos">
				<figure class="figureI">
					<img src="img/vasos2.png" alt="">
					<figcaption class="figcaptionI">
						<a href="#" data-pushbar-target="pushbar-carrito">
							<span>$$$$</span>
							<span>Comprar</span>
						</a>
					</figcaption>
				</figure>
				<figure class="figureI">
					<img src="img/sillas2.jpg" alt="">
					<figcaption class="figcaptionI">
						<a href="#" data-pushbar-target="pushbar-carrito">
							<span>$$$$</span>
							<span>Comprar</span>
						</a>
					</figcaption>
				</figure>
				<figure class="figureI">
					<img src="img/producto3.jpg" alt="">
					<figcaption class="figcaptionI">
						<a href="#" data-pushbar-target="pushbar-carrito">
							<span>$$$$</span>
							<span>Comprar</span>
						</a>
					</figcaption>
				</figure>
			</section>
		</main>
	</div>
	<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
