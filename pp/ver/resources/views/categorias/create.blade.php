@extends('layout/template')
@section('title', 'registrar')

@section('contenido')
<main>
<br>
<br>
<br>
<br>
<br>
<div class="container-fluid">
    <h3 class="text-center fst-italic fs-1 py-3">Registrar nuevo usuario</h3>
</div>
<div class="container text-center ">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form action="{{ route('Categoria.store') }}" method="POST">
                @csrf
                <br>
                <div class="col-md-auto">
                    <label for="validationDefaultUsername" class="form-label">Usuario</label>
                    <div class="input-group">
                        <span class="input-group-text" id="inputGroupPrepend2">@</span>
                        <input type="text" class="form-control" name="user" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
                    </div>
                </div>
                <br>
                <form method="post" action="#" class="row g-3">
                    <div class="col-md-auto">
                        <label for="letras" class="form-label">Nombre</label>
                        <input type="text" class="form-control"  name="nombre" required="">
                    </div>
                    <div class="col-md-auto">
                        <label for="validationServer02" class="form-label">Apellido</label>
                        <input type="text" class="form-control " name="apellido" value="" required>
                    </div>
                    <br>
                    <div class="col-auto">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" value="" placeholder="" required="">
                    </div>
                    <br>
{{-- ##añadir horas del error43s22 --}}

                    <div class="col-auto">
                        <div class="form-check">
                            <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
                            <label class="form-check-label" for="invalidCheck3">
                                Acepto los términos y condiciones.
                            </label>
                            <div id="validedCheck" class="invalid-feedback">
                                He leido los terminos y condiciones.
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Registrar</button>
                    </div>
            </form>
                <br>
            <br>
        <br>
    <br>
    <br>
</main>
