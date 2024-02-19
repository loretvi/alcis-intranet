@extends('layouts.app')
@section('content')
<section class="content">
<div class="container">
    <div class="row">
        <div class="col-4">
            <div class="card text-center">
                <div class="card-body">
                    <h4 class="card-title">Añadir Archivo</h4>
                    <button type="button" class="btn btn-primary">Crear</button>
                    <button type="button" class="btn btn-primary">Subir</button>
                </div>
            </div>
        </div>
    </div>
        <div class="row">
            <div class="col-4">
                <div class="card text-center">
                            <div class="card-body">
                                <h4 class="card-title">Selecciona los permisos:</h4>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        Selecciona el permiso:
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">Permiso nivel 1</a></li>
                                        <li><a class="dropdown-item" href="#">Permiso nivel 2</a></li>
                                        <li><a class="dropdown-item" href="#">Permiso nivel 3</a></li>
                                        <li><a class="dropdown-item" href="#">Permiso nivel 4</a></li>
                                    </ul>
                                </div>
                            </div>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-4">
            <div class="card text-center">
                <div class="card-body">
                    <h4 class="card-title">Fecha de expiración:</h4>
                    <div class="reservation-box">
                    <div class="top">
                        <div class="static">
                        <div class="input-container" id="date-picker-container">
                            <label for="date-from">check-in</label>
                            <input type="date" id="date-checkin" class="date-field" name"date-from">
                        </div>
                        </div>
                        <div class="flex">
                        <div class="input-container" id="date-picker-container">
                            <label for="date-from">check-out</label>
                            <input type="date" id="date-checkout" class="date-field" name"">
                        </div>
                        
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

@endsection

