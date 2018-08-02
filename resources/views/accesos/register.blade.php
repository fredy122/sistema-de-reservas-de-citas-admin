@extends('panel.dashboard')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-title">
                <h4 class="text-danger">Agregar Usuario</h4>
            </div>
                <div class="card-body">
                    <div class="basic-elements">
                    <form method="POST" action="/save">

                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group {{ $errors->has('Nombre') ? 'has-error' : ''}}">
                                    <p class="text-muted">Nombre</p>
                                    <input type="text" class="form-control input-focus" placeholder="Ingresa su Nombre" name="Nombre">
                                    {!! $errors->first('Nombre', '<span class="help-block">:message</span>') !!}
                                </div>
                                <div class="form-group {{ $errors->has('Apellido') ? 'has-error' : ''}} ">
                                    <p class="text-muted">Apellidos</p>
                                    <input type="text" class="form-control input-focus" placeholder="Ingresa su Apellidos" name="Apellido">
                                    {!! $errors->first('Apellido', '<span class="help-block">:message</span>') !!}
                                </div>
                                <div class="form-group {{ $errors->has('Dni') ? 'has-error' : ''}}">
                                    <p class="text-muted">Dni</p>
                                    <input type="text" class="form-control input-focus" placeholder="Ingresa su DNI" name="Dni">
                                    {!! $errors->first('Dni', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <p class="text-muted">Celular</p>
                                    <input type="text" class="form-control input-focus" placeholder="Ingresa su Celular" name="Celular">
                                </div>
                                <div class="form-group {{ $errors->has('Email') ? 'has-error' : ''}}">
                                    <p class="text-muted">Email</p>
                                    <input class="form-control input-focus" placeholder="Ingresa su Email"
                                    type="email"  name="Email">
                                    {!! $errors->first('Email', '<span class="help-block">:message</span>') !!}
                                </div>
                                <div class="form-group {{ $errors->has('Contraseña') ? 'has-error' : ''}}">
                                    <p class="text-muted">Contraseña</p>
                                    <input class="form-control input-focus" placeholder="Ingresa su Contraseña" type="password" name="Contraseña">
                                    {!! $errors->first('Contraseña', '<span class="help-block">:message</span>') !!}
                                </div>
                                    <button type="submit" class="btn btn-dark btn-outline btn-rounded m-b-10 m-l-5" value="Guardar">Guardar</button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
        </div>
    </div>
    @stop