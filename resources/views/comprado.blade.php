@extends('layouts.otros')

@section('titulo')
    Bierful | Comprado
@endsection

@section('seccion')
    @if (Auth::user() == true)
        @if (Auth::user()->id == $usuario->id)
            <div class="body-extends">
                <div class="white">

                <img src="/img/ok.png" width="300px" alt="Perfecto">

                <span>Tu compra se ha completado con exito!</span>
                <span>Pronto recibiras un mensaje del vendedor</span>

                <a href="/detalleProducto/{{$producto->id}}">Volver Al producto</a>
                </div>
            </div>
            @else
                <div class="body-extends">
                    <div class="white">
                    <img src="/img/error.png" alt="Error" width="300px">

                    <span>Hubo un error en la solicitud</span>

                    <a href="/home" class="btn btn-outline-secondary">Volver al Inicio</a>
                    </div>
                </div>
        @endif
        @else
            <div class="body-extends">
                <div class="white">
                    <img src="/img/error.png" alt="Error" width="300px">

                    <span>Hubo un error en la solicitud</span>

                    <a href="/home" class="btn btn-outline-secondary">Volver al Inicio</a>
                </div>
            </div>
    @endif
@endsection
