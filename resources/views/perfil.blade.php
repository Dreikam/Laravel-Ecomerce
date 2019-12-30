@extends('layouts.principal')

@section('contenido')

        <div style="background-color:white;" class="contenedorPrincipal">
            <div class="fotoPerfil">
                <?php if (Auth::user()->avatar == true): ?>
                    {{Auth::user()->avatar}}
                    <?php else: ?>
                    <img width="250px;" src="/img/sinfoto.png" alt="Sin foto">
                <?php endif; ?>
            </div>
            <div class="informacionPerfil">
                <div role="tabpanel">

                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#seccion1" aria-controls="seccion1" data-toggle="tab" role="tab">seccion #1</a></li>
                        <li role="presentation"><a href="#seccion2" aria-controls="seccion2" data-toggle="tab" role="tab">seccion #2</a></li>
                        <li role="presentation"><a href="#seccion3" aria-controls="seccion3" data-toggle="tab" role="tab">seccion #3</a></li>
                    </ul>

                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="seccion1">
                            <form action="/cuenta/ {{Auth::user()->id}} " method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-4">
                                        @if (Auth::user()->profile==null)
                                        <div class="d-flex justify-content-center">
                                        <a class="mt-5" href="" data-toggle="modal" data-target="#avatar">agregar imagen de perfil</a>
                                        </div>
                                        @else
                                        <div class="text-center">
                                        <a class="mt-2" href="" data-toggle="modal" data-target="#avatar"><img class="img-fluid" src="storage/images/avatar/{{Auth::user()->profile}}" alt="">
                                       </a>
                                        </div>
                                        @endif


                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-8">
                                        <div class="row">
                                            <div class="col-sm-12 col-lg-6">
                                                <label class="col-form-label-sm" for="">Nombre:</label>
                                                <input class="form-control" type="text" value="{{Auth::user()->name}}" name="nombre">
                                                @if ($errors->nombre)
                                                <p class="text-danger small">{{$errors->first('nombre')}}</p>
                                                @endif
                                            </div>
                                            <div class="col-sm-12 col-lg-6">
                                                <label class="col-form-label-sm" for="">Apellido:</label>
                                                <input class="form-control" type="text" value="{{Auth::user()->surname}}" name="apellido">
                                                @if ($errors->apellido)
                                                <p class="text-danger small">{{$errors->first('apellido')}}</p>
                                                @endif
                                            </div>
                                            <div class="col-6">
                                                <label class="col-form-label-sm" for="">Fecha de nacimiento:</label>
                                                <input class="form-control" type="date" value="{{Auth::user()->birth}}" name="fecha">
                                                @if ($errors->fecha)
                                                <p class="text-danger small">{{$errors->first('fecha')}}</p>
                                                @endif
                                            </div>
                                            <div class="col-6">
                                                <label class="col-form-label-sm" for="">Género:</label>
                                                <select class="form-control" name="genero" >
                                                <option value="{{Auth::user()->gender}}">{{Auth::user()->gender}}</option>
                                                <option value="masculino">masculino</option>
                                                <option value="femenino">femenino</option>
                                                <option value="sin especificar">sin especificar</option>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="row d-flex justify-content-center mt-3">

                                        <a href="{{'/home'}}"><button class="btn btn-secondary m-2" type="button">Cerrar </button></a>
                                        <button class="btn btn-primary m-2" type="submit">Aceptar</button>
                                        @if (session('mensaje'))
                                        <alert class="alert alert-success m-1">{{session('mensaje')}}</alert>
                                        @endif
                                        </div>
                                        </div>
                                        <div class="row">

                                    </div>

                                </div>
                            </form>
                        </div>

                        <div role="tabpanel" class="tab-pane" id="seccion2">
                            <form action="/cuenta/ {{Auth::user()->id}}" method="POST">
                                @csrf
                                @method('PUT')


                                        <div class="row">
                                            <div class="col-12">
                                                <label class="col-form-label-sm" for="">Domicilio:</label>
                                                <input class="form-control" type="text" value="{{Auth::user()->home}}" name="domicilio">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                <label class="col-form-label-sm" for="">Telefono:</label>
                                                <input class="form-control" type="text" value="{{Auth::user()->phone}}" name="telefono">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                <label class="col-form-label-sm" for="">Celular:</label>
                                                <input class="form-control" type="text" value="{{Auth::user()->mobile}}" name="celular">
                                            </div>

                                        </div>
                                        <div class="row d-flex justify-content-center mt-3">
                                            <button class="btn btn-secondary m-2" type="button">Cancelar</button>
                                            <button class="btn btn-primary m-2" type="submit">Aceptar</button>
                                        </div>



                            </form>
                        </div>

                        <div role="tabpanel" class="tab-pane" id="seccion3">
                            <h3>seccion 3</h3>
                        </div>
                    </div>

                </div>


                </div>

            </div>





        @endsection
