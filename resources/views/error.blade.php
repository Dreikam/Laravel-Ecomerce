@extends('layouts.otros')

@section('titulo')
    Bierful | Error
@endsection

@section('seccion')
    <div class="body-extends">
        <img src="/img/error.png" alt="Error" width="300px">

        <span>Hubo un error en la solicitud</span>

        <a href="/home" class="btn btn-outline-secondary">Volver al Inicio</a>
    </div>
@endsection
