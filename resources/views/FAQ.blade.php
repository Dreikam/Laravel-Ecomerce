<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
    <link rel="stylesheet" href="/css/estilo.css">
    <link rel="stylesheet" href="/css/navegacion.css">
    <meta charset="utf-8">
    <title>Bierful | Preguntas Frecuentes</title>

  </head>

  <body>
      <div class="barranav">
      <nav class="navI">
          <ul>
              <li><a href="{{route('index')}}"><span class="primero"> <i class="icon icon-home"></i> </span>Inicio</a></li>
              <li><a href="#"><span class="segundo"> <i class="icon icon-tags"></i> </span>Categorias</a></li>
              <li><a href="{{route('FAQ')}}"><span class="tercero"> <i class="icon icon-suitcase"></i> </span>Preguntas Frecuentes</a></li>
              <li><a href="{{route('perfil')}}"><span class="cuarto"> <i class="icon icon-profile"></i> </span>Perfil</a></li>
              <li><a href="{{route('agregarProducto')}}"><span class="quinto"> <i class="icon icon-text"></i> </span>Agregar Producto</a></li>
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
    <article class="cajaa">
      <text align= "center"><h1>Preguntas Frecuentes</h1>
    <img class="logo" src="/img/copita.jpg" alt="Logito">
</article>
<article class="cajab">



    <span>Aqui se encuentra toda la informacion de la pagina</span>
    <text align= "left"><ul type="circle">
<ul>
      <li>¿Lorem ipsum?</li>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <li>¿Lorem ipsum?</li>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <li>¿Lorem ipsum?</li>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <li>¿Lorem ipsum?</li>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <li>¿Lorem ipsum?</li>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <li>¿Lorem ipsum?</li>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <li>¿Lorem ipsum?</li>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <li>¿Lorem ipsum?</li>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </ul>
</article>
<div class= "cajac">

    <a href="{{route('index')}}">Volver Al inicio</a>
    <footer>


      <span>Copyright (c) 2019 Copyright Holder All Rights Reserved.</span>


    </footer>
</div>
</body>
</html>
