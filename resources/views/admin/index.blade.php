@extends('templates.index')

@section('content')
    <h1 align="center">Panel de Administración</h1>
    <p align="center">
        Acceso Restringido a Usuarios Administradores
    </p>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 align="center">Vehiculos Arrendados</h3>
                </div>
                <div class="card-body">
                    <p align="center">
                        En esta sección podrá visualizar los Vehiculos Arrendados en el sistema.
                    </p>
                    <p align="center">
                        <a href="{{ route('dashboard') }}" class="btn btn-primary">
                            Ver Vehiculos Arrendados
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 align="center">Usuarios</h3>
                </div>
                <div class="card-body">
                    <p align="center">
                        En esta sección podrá visualizar los usuarios registrados en el sistema.
                    </p>
                    <p align="center">
                        <a href="{{ route('dashboard') }}" class="btn btn-primary">
                            Ver Usuarios Registrados
                        </a>
                    </p>
                </div>
            </div>
        </div>
    @endsection
