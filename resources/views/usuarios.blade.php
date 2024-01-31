@extends('layouts.app')
@section('content')
<section class="content">
    <div  class="container mt-5">
        <div class="row justify-content-center">
            <div  class="col-md-8">
                <h1><strong>USUARIOS</strong></h1>
                <div class="linea-div" style="border: 1px solid orange;margin: 20px 0;"></div>
                <form action="">
                    <div class="form-group">
                        <label for="nombreCompleto">Nombre Completo</label>
                        <input type="text" class="form-control" id="nombreCompleto" placeholder="Ingrese su nombre completo">
                    </div>
                     <div class="form-group">
                        <label for="perfil">Perfil</label>
                        <input type="text" class="form-control" id="perfil" placeholder="Ingrese su perfil">
                    </div>
                    <div class="form-group">
                        <label for="usuario">Usuario</label>
                        <input type="text" class="form-control" id="usuario" placeholder="Ingrese su usuario">
                    </div>
                    <div class="form-group">
                        <label for="contrasena">Contraseña</label>
                        <input type="password" class="form-control" id="contrasena" placeholder="Ingrese su contraseña">
                    </div>
                    <div class="form-group">
                        <label for="area">Área</label>
                        <select class="form-control" name="area" id="">
                            <option value="Agregar area">Agregar area</option>
                            <option value="area1">area1</option>
                            <option value="area2">area2</option>
                        </select>
                    </div>
                     <div class="form-group">
                        <label>Permisos de Grupo</label>
                        <div class="row">
                        <div class="col-md-6">
                            <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="permiso1">
                            <label class="form-check-label" for="permiso1">Permiso 1</label>
                            </div>
                            <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="permiso2">
                            <label class="form-check-label" for="permiso2">Permiso 2</label>
                            </div>
                            <!-- Puedes agregar más permisos según sea necesario -->
                        </div>
                        <div class="col-md-6">
                            <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="permiso3">
                            <label class="form-check-label" for="permiso3">Permiso 3</label>
                            </div>
                            <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="permiso4">
                            <label class="form-check-label" for="permiso4">Permiso 4</label>
                            </div>
                            <!-- Puedes agregar más permisos según sea necesario -->
                        </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
