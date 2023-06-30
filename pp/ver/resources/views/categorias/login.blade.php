@extends('layout/template')
@section('title', 'Login')

@section('contenido')

<br>
    <div class="container-fluid"><br>
        <br>
        <br>

		<h3 class="text-center fst-italic fs-1 py-3">Iniciar sesion</h3>
	</div>
    <div class="container text-center ">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form>
                    <br>
                    <div class="form-floating">
                        <input type="User" class="form-control" id="floatingUser" placeholder="User" required>
                        <label for="floatingUser">User</label>
                    </div>
                    <br>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                        <label for="floatingPassword">Password</label>
                    </div>
                    <br>
                    <!-- <div class="form-center">
                        <input class="form-check-input" type="checkbox" value="" id="profesor">
                        <label class="form-check-label" for="profesor">
                            Profesor
                        </label>
                    </div>
                    <div class="form-center">
                        <input class="form-check-input" type="checkbox" value="" id="artista" checked>
                        <label class="form-check-label" for="artista">
                            Artista
                        </label>
                    </div> -->
                    <br>
                    {{-- <button type="submit"  href="{{ route('Categoria.home') }}" class="btn btn-primary">Ingresar</button> --}}
                    <a href="{{-- {{ route('Categoria.show') }} --}}" type=submit class="btn btn-primary">Ingresar</a>
                    <br>
                </form>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
