<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrador</title>
</head>
<body>
@foreach ($prods as $prod)
<p>{{$prod->nombre}}</p>
<img src="/storage/{{$prod->foto}}" alt="">
@endforeach

</body>
</html>
