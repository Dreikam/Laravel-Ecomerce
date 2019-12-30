<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Administrador | Crear Categoria</title>
  </head>
  <body>

    <form class="" action="/Administradores/nuevaCategoria" method="post">
      @csrf
      <ul>
      @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
      </ul>

      <div class="form-group">
        <label for="name">Nombre:</label>
        <input type="text" name="name" class="form-control" value="">
      </div>

      <div class="form-group">
        <button class="btn btn-primary" type="submit" name="button">Agregar Categoria</button>
      </div>

    </form>

  </body>
</html>
