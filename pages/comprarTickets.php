<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../styles.css" />
    <title>Segundo Integrador final</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <div class="d-flex align-items-center">
            <a href="#"
              ><img class="logo" src="../imgs/codoacodo.png" alt="logo"
            /></a>
            <a class="navbar-brand" href="../index.php">Conf Bs As</a>
          </div>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="collapse navbar-collapse justify-content-end"
            id="navbarNav"
          >
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link activo" href="../index.php#conferencia"
                  >La conferencia</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../index.php#oradoresId"
                  >Los oradores</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../index.php#lugarYFecha"
                  >El lugar y la fecha</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../index.php#convertiteEnOrador"
                  >Conviertete en orador</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link tickets">Comprar tickets</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <div class="container">
        <div class="row comprar-tickets">
          <div class="card box-1 col-sm-12 col-md-4">
            <div class="card-body">
              <h4 class="card-title">Estudiante</h4>
              <h5 class="card-subtitle mb-2 text-muted">Tienen un descuento</h5>
              <p class="card-text">80%</p>
              <p class="documentacion">*presentar documentación</p>
            </div>
          </div>
          <div class="card box-2 col-sm-12 col-md-4">
            <div class="card-body">
              <h4 class="card-title">Trainee</h4>
              <h5 class="card-subtitle mb-2 text-muted">Tienen un descuento</h5>
              <p class="card-text">50%</p>
              <p class="documentacion">*presentar documentación</p>
            </div>
          </div>
          <div class="card box-3 col-sm-12 col-md-4">
            <div class="card-body">
              <h4 class="card-title">Junior</h4>
              <h5 class="card-subtitle mb-2 text-muted">Tienen un descuento</h5>
              <p class="card-text">15%</p>
              <p class="documentacion">*presentar documentación</p>
            </div>
          </div>
        </div>

        <div class="formulario-tickets container">
          <p class="text-center venta">VENTA</p>
          <p class="valor-ticket text-center">VALOR DE TICKET $200</p>
          <div class="row g-3">
            <div class="col-6">
              <label for="nombre" class="form-label"></label>
              <input
                type="text"
                class="form-control"
                id="nombre"
                placeholder="Nombre"
                aria-label="Nombre"
              />
            </div>
            <div class="col-6">
              <label for="apellido" class="form-label"></label>
              <input
                type="text"
                class="form-control"
                id="apellido"
                placeholder="Apellido"
                aria-label="Apellido"
              />
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <label for="correo" class="form-label"></label>
              <input
                type="email"
                class="form-control"
                id="correo"
                placeholder="Correo"
                aria-label="Correo"
              />
            </div>
          </div>

          <div class="row g-3">
            <div class="col-6">
              <label for="cantidad" class="form-label pt-3">Cantidad</label>
              <input
                type="text"
                class="form-control"
                id="cantidad"
                placeholder="Cantidad"
                aria-label="Cantidad"
              />
            </div>
            <div class="col-6">
              <label for="categoria" class="form-label pt-3">Categoria</label>
              <select class="form-select" id="categoria">
                <option value="" disabled selected>Select-option</option>
                <option value="estudiante">Estudiante</option>
                <option value="trainee">Trainee</option>
                <option value="junior">Junior</option>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="col-12 my-3 pb-3">
              <label for="total" class="form-label"></label>
              <div class="total" id="total">Total a pagar: $</div>
            </div>
          </div>

          <div class="row pb-2">
            <div class="col-6">
              <button class="btn enviar" id="borrar">Borrar</button>
            </div>
            <div class="col-6">
              <button class="btn enviar" id="resumen">Resumen</button>
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer>
      <!-- Footer -->
      <div class="container-fluid">
        <div class="row">
          <div class="footer">
            <ul>
              <li>
                Preguntas <br />
                Frecuentes
              </li>
              <li>Contáctanos</li>
              <li>Prensa</li>
              <li>Conferencias</li>
              <li>
                Términos y <br />
                condiciones
              </li>
              <li>Privacidad</li>
              <li>Estudiantes</li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <script src="../app.js"></script>
  </body>
</html>
