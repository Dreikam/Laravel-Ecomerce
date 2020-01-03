@extends('layouts.principal')

@section('contenido')


          @foreach ($productos as $producto)
              <img class="productoFotos" src="/storage/{{$producto->foto}}" alt="">
              <li> <a href="/detalleProducto/{{$producto->id}}" class="productosNombre">{{$producto->nombre}}</a> </li>
          @endforeach

@endsection
