@extends('layout/template')
@section('title', '?')

@section('contenido')


<br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container text-center" id="Alumnos">
        <div class="row ">
            <div class="card">
                <br>
                <div class="card-header center-text">
                    <H3> Cuentas </H3>
                </div>
                <table class="table table-bordered col-auto">
                        <thead>
                            <th>Id</th>
                            <th>User</th>
                            {{-- <th>password</th>
                        --}}<th>Nombre</th>
                            <th>Apellido</th>
                            {{-- <th>perfil_id</th> --}}
                            <th>Opciones</th>
                        </thead>
                        <tbody>
                            @foreach ($cuentas as $cuenta)
                                <tr>
                                    <td>{{$cuenta->id}}</td>
                                    <td>{{$cuenta->user}}</td>
                                    {{-- <td>{{$cuenta->password}}</td> --}}
                                    <td>{{$cuenta->nombre}}</td>
                                    <td>{{$cuenta->apellido}}</td>
                                    {{-- <td>{{$cuenta->perfil_id}}</td> --}}
                                    <td>
                                        <a href="{{ route('Categoria.edit', $cuenta->id) }}">Editar</a>
                                        <form action="{{ route('Categoria.destroy', $cuenta->id) }}" method="POST">
                                            @csrf
                                            @method('delete')


                                            <input type="submit" value="Eliminar">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                </table>
                    <!-- <td>
                        <a href="" class="btn btn-sm btn-danger pb-0" data-bs-toggle="tooltip" data-bs-title="Borrar cuenta">
                            <span class="material-icons">Borrar</span>
                        /a> -->
        </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</main>

