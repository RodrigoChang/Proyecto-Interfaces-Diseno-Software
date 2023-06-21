@extends('templates.index')

@section('content')
    <h1 align="center">Registro General de Formularios</h1>

    <div class="card">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#Id</th>
                    <th scope="col">RUT</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido Paterno</th>
                    <th scope="col">Apellido Materno</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Fecha Creación</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($formularios as $form)
                    <tr>
                        <th scope="row">{{ $form->id }}</th>
                        <td>{{ $form->user_dni }}</td>
                        <td>{{ $form->user_name }}</td>
                        <td>{{ $form->apellidopaterno }}</td>
                        <td>{{ $form->apellidomaterno }}</td>
                        <td>{{ $form->user_address }}</td>
                        <td>{{ $form->created_at }}</td>
                        <td>
                            <a href="{{ route('admin.formdata.edit', $form->id) }}" class="btn btn-primary">Editar</a>
                            <form action="{{ route('admin.formdata.destroy', $form->id) }}" method="POST"
                                class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
