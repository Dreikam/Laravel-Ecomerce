@extends('layouts.principal')

@section('contenido')


@if ($productoCategoria->isNotEmpty())
    <section class="mt-3">

        <div class="container-fluid mt-3">

          <div class="row">
              @foreach ($productoCategoria as $producto)
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

{{$productoCategoria->links()}}
@else
        <section class="mt-3 white">

            <div class="container-fluid mt-3">

                <div class="row">

                    <div class="col-3 mb-4">
                        <h1>Esta categoria aun no tiene un producto. Se el primero!</h1>
                        <a href="/agregarProducto" class="btn btn-outline-secondary">Agregar Producto</a>
                    </div>
                </div>
            </div>
        </section>

@endif

@endsection
