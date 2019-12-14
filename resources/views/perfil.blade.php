<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
        <link rel="stylesheet" href="/css/navegacion.css">
        <link rel="stylesheet" href="css/estilo.css?uuid=<?php echo uniqid(); ?>">
        <title>Bierful | Perfil</title>
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
        <div style="background-color:white;" class="contenedorPrincipal">
            <div class="fotoPerfil">
                <?php if (Auth::user()->avatar == true): ?>
                    {{Auth::user()->avatar}}
                    <?php else: ?>
                    <img width="250px;" src="/img/sinfoto.png" alt="Sin foto">
                <?php endif; ?>
            </div>
            <div class="informacionPerfil">
                <div class="idUsuario">
                    <p>Id de Usuario:</p>
                    {{Auth::user()->id}}
                </div>
                <div class="nombreUsuario">
                    <p>Nombre:</p>
                    {{Auth::user()->name}}
                </div>
                <div class="apellidoUsuario">
                    <p>Apellido:</p>
                    {{Auth::user()->surname}}
                </div>
                <div class="dniUsuario">
                    <p>Dni:</p>
                    {{Auth::user()->dni}}
                </div>
                <div class="emailUsuario">
                    <p>Email:</p>
                    {{Auth::user()->email}}
                </div>
            </div>
        </div>
    </body>
</html>
