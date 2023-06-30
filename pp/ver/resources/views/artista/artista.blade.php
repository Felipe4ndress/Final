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
        <a class="navbar-brand" href="{{ route('artista.create') }}">Agregar imagen</a>

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

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Estado de la obra</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Esta obra se encuentra
              (Baneada/No baneada)
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

            </div>
          </div>
        </div>
    </div>
    <div class="modal fade 2" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog2">
          <div class="modal-content2">
            <div class="modal-header2">
              <h2 class="modal-title fs-5" id="exampleModalLabel2">Estado de la obra</h2>
              <button type="button" class="btn-close" data-bs-dismiss="modal2" aria-label="Close"></button>
            </div>
            <div class="modal-body2">
              Esta obra se encuentra
              (Baneada/No baneada)
            </div>
            <div class="modal-footer2">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal2">Cerrar</button>

            </div>
          </div>
        </div>
    </div>
    <br>
    <br>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Estado de la foto</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Esta foto se encuentra (baneada/no baneada)
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

            </div>
          </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row">
          <div class="col">
            <div class="row row-cols-1 row-cols-md-2 g-4">
              <div class="col">
                <div class="card border-light mb-3">
                  <img src="..." class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Nombre del artista</h5>
                    <p class="card-text">Descripcion de la foto / Nombre de la foto</p>
                    <a class="btn btn-primary" href="#" role="button">Eliminar</a>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Baneado
                        </button>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal2" data-bs-target="#exampleModal2">
                                Editar
                            </button>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card border-light mb-3">
                  <img src="..." class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">Descripcion de la foto / Nombre de la foto</p>
                    <a class="btn btn-primary" href="#" role="button">Eliminar</a>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Baneado
                        </button>
                        <a class="btn btn-primary" href="#" role="button">Editar</a>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>
      </div>












    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
