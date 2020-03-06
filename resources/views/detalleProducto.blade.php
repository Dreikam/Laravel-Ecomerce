@extends('layouts.principal')

@section('contenido')
<div class="container">

<div class="separador">
  <div class="row">
      <div class="col-md-6">
          <div class="product-block product-image">
              <img class=" max-wi" src="/storage/{{$producto->foto}}" alt="Imagen del producto">
          </div>
      </div>
      <div class="col-md-6">
          <div class="product-block">
          <h3>{{$producto->nombre}}</h3><br>

          <div class="product-info panel">
          <p class="detalletexto">Precio: $ {{ number_format($producto->precio,2)}}</p>
          <p class="detalletexto">Metodo de Pago:</p>

         <img src="/img/tarjeta.png" alt="Tarjeta de pago" class="tarj">
          <div class="">
              <img class="iconopago" src="/img/visa.png" alt="Icono de pago">
              <img class="iconopago" src="/img/mastercard.png" alt="Icono de pago">
              <img class="iconopago" src="/img/mercadopago.png" alt="Icono de pago">
          </div> <br>
          <a href="#">Mas informacion de pago</a>
          <h4>Tipo de envio:</h4>
          <select class="btn btn-outline-secondary mara" name="envio">
              <option value="Enviar">Envialo!</option>
              <option value="Elegir">Acordar con el vendedor</option>
          </select>

         @if ($usuario == true)
             @if ($usuario->id == $producto->usuario_id)
                 <a class="btn btn-warning btn-block" href="/editarProducto/{{$producto->id}}">Editar Publicacion</a>
             @else
                 <form class="" action="/compra" method="post">
                     @csrf
                     <input type="hidden" name="productoid" value="{{$producto->id}}">
                     <input type="hidden" name="usuarioid" value="{{$usuario->id}}">

                     <button type="submit" name="button" class="btn btn-warning btn-block" id="compra">Comprar</button>
                 </form>
             @endif
             @else
                 <a href="{{route('login')}}" class="btn btn-warning btn-block">Inicia sesion para comprar</a>
         @endif

          </div>

      </div>
  </div>
  </div>
</div>

<div class="row">
  <div class="product-block col-md-12">
      @if ($producto->descripcion == true)
          <h4>{{$producto->descripcion}}</h4>
          @else
          <h2>EL VENDEDOR NO HA DADO UNA DESCRIPCION</h2>
      @endif
  </div>
  </div>
</div>

@endsection
