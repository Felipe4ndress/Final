<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body style="background: linear-gradient(to bottom, #fdffcd 0%, #99ffeb 100%);">
    <nav class="navbar navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('Categoria.index') }}">Inicio</a>
        <a class="navbar-brand" href="{{ route('Categoria.index') }}">Agregar imagen</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>


        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Opciones</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="">Mi perfil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('Categoria.login') }}">Cerrar sesiòn</a>
              </li>

            <form class="d-flex mt-3" role="search">
              <input class="form-control me-2" type="search" placeholder="Nombre del artista..." aria-label="Search">
              <button class="btn btn-success" type="submit">Buscar</button>
            </form>
          </div>
        </div>
      </div>
    </nav>
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
    <div class="container-fluid">
        <h3 class="text-center fst-italic fs-1 py-3">Agregar nueva imagen</h3>
    </div>
    <div class="container text-center ">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="{{ route('artista.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <br>
                    <div class="form-group">
                        <input type="file" name="file" id="" accept="image/*">
                    </div>
                    <label for="validationDefaultUsername" class="form-label">Titulo</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="user" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
                    </div>
                    <br>
                     <div class="col-12">
                        <button class="btn btn-primary" type="submit">Agregar</button>
                     </div>
                </form>
                    <br>
                <br>
            <br>
        <br>
        <br>












    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
