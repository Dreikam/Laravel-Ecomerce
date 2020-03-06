@extends('layouts.principal')

@section('titulo')
    Bierful | Categoria
@endsection

@section('contenido')

    <table class="table table-striped tablas">
        <thead>
            <th>Nombre</th>
            <th>Productos</th>
        </thead>

        <tbody>
            @foreach ($categorias as $categoria)
                <tr>

                <td> <h3>{{$categoria->name}}</h3></td>
                <td> <a href="/Categorias/{{$categoria->id}}" class="btn btn-outline-secondary">Ver Productos</a></td>

                </tr>
            @endforeach
        </tbody>
    </table>

{{$categorias->links()}}

@endsection
