@extends('layouts.app')

@section('content')
  <h3>Tu Producto Elegido:</h3>

  <h4>{{$producto->nombre}}</h4>
  <img src="/storage/{{$producto->foto}}" alt="">
  <p>$ {{$producto->precio}}</p>
  <p>{{$producto->descripcion}}</p>
  <p> <a href="#">Agregar al Carrito</a> </p>
@endsection
