@extends('layouts.app')
@section('content')
<section class="content">
    <div  class="container mt-5">
        <div class="row justify-content-center">
            <div  class="col-md-8">
                <h1>PERMISOS</h1>
                <form action="">
                    <div class="form-group">
                        <label for="nombreCompleto">Nombre:</label>
                        <input type="text" class="form-control" id="nombreCompleto" placeholder="nombre">
                    </div>
                     <div class="form-group">
                        <label for="perfil">Descripción:</label>
                        <input type="text" class="form-control" id="perfil" placeholder="descripcion del permiso de area">
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
