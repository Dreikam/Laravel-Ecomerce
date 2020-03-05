@extends('layouts.principal')

@section('contenido')
<div class="formback">


  <h3 class="centrado">Editar Producto:</h3>

  <form class="" action="/editarProducto" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="text-danger" role="alert">
        @foreach ($errors->all() as $error)
        <li class="text-danger small">{{$error}}</li>
        @endforeach
    </div>
    <input type="hidden" name="id" value="{{$producto->id}}">

    <div class="form-group col-sm-12 col-md-6">
        <label class="control-label" for="nombre">Nombre</label>
        <div class="">
        <input name="nombre" type="text" class="form-control input-md" value="{{$producto->nombre}}">
        </div>
    </div>

         <div class="form-group col-sm-12 col-md-6">
             <label class="control-label" for="precio">Precio</label>
             <div class="">
             <input name="precio" type="number" step="any" class="form-control input-md" value="{{$producto->precio}}">
             </div>
         </div>
    <div class="col-sm-12 col-md-6">
        <div class="row">
                <label for="descripcion">Descripcion</label>
        <textarea class="form-control" name="descripcion" rows="5" placeholder="{{$producto->descripcion}}" cols="20">{{$producto->descripcion}}</textarea>
            </div>


    </div>
    <div class="centrado">
      <label for="foto">Foto:</label>
      <input type="file" name="foto" value="">
    </div>
    <div class="centrado">
      <button type="submit" name="button">Guardar Producto</button>
    </div>
  </form>
</div>
@endsection
