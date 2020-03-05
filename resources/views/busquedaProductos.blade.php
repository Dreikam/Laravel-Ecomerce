@extends('layouts.principal')
@section('titulo')
    Bierful | Buscar
@endsection

@section('contenido')

    <section class="mt-3">

        <div class="container-fluid mt-3">

          <div class="row">
              @foreach ($productos as $producto)
              <div class="col-3 mb-4">
                  <div class="card">
                    <img  src="/storage/{{$producto->foto}}" class="card-img-top" alt="...">

                    <div class="card-body">
                    <h5 class="card-title">{{$producto->nombre}}</h5>
                    <h6>$ {{number_format($producto->precio,2)}}</h6>
                    <a href="/detalleProducto/{{$producto->id}}" class="btn btn-outline-secondary">Ver Producto</a>
                    </div>
                  </div>
                </div>
              @endforeach
          </div>

           </div>
        </section>

{{$productos->links()}}

@endsection
