@extends('layouts.principal')

@section('contenido')

        <div style="background-color:white;" class="contenedorPrincipal">
            <div class="fotoPerfil">
                @if ($user->avatar == true)
                    <img src="/storage/{{$user->avatar}}" alt="">
                    @else
                    <img src="/img/sinfoto.png" alt="Sin foto">
                @endif
            </div>
            <div class="informacionPerfil">
                <div role="tabpanel">

                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#seccion1" aria-controls="seccion1" data-toggle="tab" role="tab">Datos del Usuario</a></li>
                        <li role="presentation"><a href="#seccion2" aria-controls="seccion2" data-toggle="tab" role="tab">Datos de Contacto</a></li>
                        <li role="presentation"><a href="#seccion3" aria-controls="seccion3" data-toggle="tab" role="tab">Historial de Compra</a></li>
                    </ul>

                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="seccion1">
                            <form action="/profile/datosUsuario" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="id" value="{{$user->id}}">
                                <div class="row">
                                    <label for="avatar">Foto de perfil:</label>
                                    <div class="">
                                        <div id="divFileUpload">
                                          <input id="file-upload" type="file" accept="image/*" name="avatar">
                                        </div>
                                      <div id="divInputLoad">
                                            <div id="file-preview-zone">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-8">
                                        <div class="row">
                                            <div class="col-sm-12 col-lg-6">
                                                <label class="col-form-label-sm" for="name">Nombre:</label>
                                                <input class="form-control" type="text" value="{{$user->name}}" name="name">
                                                @if ($errors->name)
                                                <p class="text-danger small">{{$errors->first('name')}}</p>
                                                @endif
                                            </div>
                                            <div class="col-sm-12 col-lg-6">
                                                <label class="col-form-label-sm" for="surname">Apellido:</label>
                                                <input class="form-control" type="text" value="{{$user->surname}}" name="surname">
                                                @if ($errors->surname)
                                                <p class="text-danger small">{{$errors->first('surname')}}</p>
                                                @endif
                                            </div>
                                            <div class="col-sm-12 col-lg-6">
                                                <label class="col-form-label-sm" for="email">Email:</label>
                                                <input class="form-control" type="text" value="{{$user->email}}" name="email">
                                                @if ($errors->email)
                                                <p class="text-danger small">{{$errors->first('email')}}</p>
                                                @endif
                                            </div>
                                            <div class="col-sm-12 col-lg-6">
                                                <label class="col-form-label-sm" for="password">Contraseña:</label>
                                                <input id="password" class="form-control" type="password" value="{{$desencriptado}}" name="password">
                                                <input type="button" id="b1" class="btn btn-outline-secondary" value="Mostrar contraseña" onclick="mostrar()">
                                                <input type="hidden" id="b2" class="btn btn-outline-secondary" value="Ocultar contraseña" onclick="ocultar()">
                                                @if ($errors->password)
                                                <p class="text-danger small">{{$errors->first('password')}}</p>
                                                @endif
                                            </div>

                                        </div>
                                        <div class="row d-flex justify-content-center mt-3 botones">

                                        <a href="{{'/home'}}"><button class="btn btn-secondary m-2" type="button">Cerrar </button></a>
                                        <button class="btn btn-primary m-2" type="submit">Aceptar</button>
                                        </div>
                                        </div>
                                        <div class="row">

                                    </div>

                                </div>
                            </form>
                        </div>

                        <div role="tabpanel" class="tab-pane" id="seccion2">
                            <form action="/profile/datosContacto" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="id" value="{{$user->id}}">

                                        <div class="row">
                                            <div class="col-11">
                                                <label class="col-form-label-sm" for="domicilio">Domicilio:</label>
                                                <input class="form-control" type="text" value="{{$user->domicilio}}" name="domicilio">
                                            </div>
                                            <div class="col-sm-12 col-md-4 col-lg-4">
                                                <label class="col-form-label-sm" for="telefono">Telefono:</label>
                                                <input class="form-control" type="text" value="{{$user->telefono}}" name="telefono">
                                            </div>
                                            <div class="col-sm-12 col-md-4 col-lg-4">
                                                <label class="col-form-label-sm" for="celular">Celular:</label>
                                                <input class="form-control" type="text" value="{{$user->celular}}" name="celular">
                                            </div>

                                        </div>
                                        <div class="row d-flex justify-content-center mt-3">
                                            <button class="btn btn-secondary m-2" type="button">Cancelar</button>
                                            <button class="btn btn-primary m-2" type="submit">Aceptar</button>
                                        </div>



                            </form>
                        </div>

                        <div role="tabpanel" class="tab-pane" id="seccion3">

                            @if ($user->compraUser == true)
                                <table class="table table-striped">
                                    <thead>
                                        <th>Foto del producto</th>
                                        <th>Nombre del producto</th>
                                        <th>Precio</th>
                                        <th>Accion</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($user->compraUser as $producto)
                                            <tr>
                                                <td class="tdfoto"> <img src="/storage/{{$producto->foto}}" alt=""> </td>
                                                <td>{{$producto->nombre}}</td>
                                                <td>{{number_format($producto->precio,2)}}</td>
                                                <td><a href="/detalleProducto/{{$producto->id}}" class="btn btn-outline-secondary">Ver Producto</a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @else
                                    <h3>Aun no has comprado nada</h3>
                            @endif
                        </div>


                    </div>

                </div>


                </div>

            </div>





        @endsection
