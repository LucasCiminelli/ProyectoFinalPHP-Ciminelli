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
    <link rel="stylesheet" href="styles.css" />
    <title>Proyecto final</title>
  </head>
  <body>
    <!-- Header / Navbar -->
    <header>
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <div class="d-flex align-items-center">
            <a href="#"
              ><img class="logo" src="./imgs/codoacodo.png" alt="logo"
            /></a>
            <a class="navbar-brand" href="#">Conf Bs As</a>
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
                <a class="nav-link activo" href="#conferencia"
                  >La conferencia</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#oradoresId">Los oradores</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#lugarYFecha">El lugar y la fecha</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#convertiteEnOrador"
                  >Conviertete en orador</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link tickets" href="./pages/comprarTickets.php"
                  >Comprar tickets</a
                >
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <!-- Primera sección -->
      <div class="inicio-img text-white" id="#conferencia">
        <div class="container">
          <div class="row d-flex justify-content-end align-items-end">
            <div class="contenido-principal">
              <h2>Conf Bs As</h2>
              <p>
                Bs As llega por primera vez a Argentina. UN evento para
                compartir con nuestra comunidad el conocimiento y experiencia de
                los expertos que están creando el futuro de Internet. Ven a
                conocer a miembros del evento, a otros estudiantes de Codo a
                Codo y los oradores de primer nivel que tenemos para ti. Te
                esperamos!
              </p>
              <div>
                <button type="button" class="btn ser-orador">
                  Queiro ser orador
                </button>
                <a href="./pages/comprarTickets.php"><button type="button" class="btn comprar-ticket">
                  Comprar tickets
                </button></a>
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Segunda sección -->
      <div class="oradores" id="oradoresId">
        <p class="text-center oradores-title">
          CONOCE A LOS <br /><span>ORADORES</span>
        </p>
        <div class="row oradores-cards">
          <div class="col-xs-12 col-md-4 col-lg-4 col-xl-4 card1">
            <img src="./imgs/steve.jpg" alt="Jobs" />
            <p class="py-0 my-0">
              <span class="js">Javascript</span>
              <span class="react">React</span>
            </p>
            <h5>Steve Jobs</h5>
            <p class="card-parrafo">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt
              eveniet quia expedita maxime, facilis ex debitis error quisquam,
              iure architecto dolores eius officia sunt cumque quasi voluptates
              ad fugiat! Culpa!
            </p>
          </div>
          <div class="col-xs-12 col-md-4 col-lg-4 col-xl-4 card1">
            <img src="./imgs/bill.jpg" alt="Gates" />
            <p class="py-0 my-0">
              <span class="js">Javascript</span>
              <span class="react">React</span>
            </p>
            <h5>Bill Gates</h5>
            <p class="card-parrafo">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt
              eveniet quia expedita maxime, facilis ex debitis error quisquam,
              iure architecto dolores eius officia sunt cumque quasi voluptates
              ad fugiat! Culpa!
            </p>
          </div>
          <div class="col-xs-12 col-md-4 col-lg-4 col-xl-4 card1">
            <img src="./imgs/ada.jpeg" alt="ada" />
            <p class="py-0 my-0">
              <span class="negocios">Negocios</span>
              <span class="startups">Startups</span>
            </p>
            <h5>Ada Lovelace</h5>
            <p class="card-parrafo">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt
              eveniet quia expedita maxime, facilis ex debitis error quisquam,
              iure architecto dolores eius officia sunt cumque quasi voluptates
              ad fugiat! Culpa!
            </p>
          </div>
        </div>
        <a href="./pages/oradores.php">
            <button type="button" class="btn btn-warning mt-3">
                Ver todos los oradores
            </button>
        </a>
      </div>
      <!-- Tercera sección -->
      <div class="tercer-seccion container-fluid px-0 mx-0" id="lugarYFecha">
        <div class="row px-0 mx-0">
          <div
            class="col-xs-12 col-md-6 col-lg-6 col-xl-6 px-0 mx-0 honolulu"
          ></div>
          <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6 octubre">
            <h4>Bs As - Octubre</h4>
            <p>
              Buenos aires es la provincia y localidad más grande del estado de
              Argentina, en los Estados Unidos. Honolulu es la más sureña de
              entre las principales ciudades estadounidenses. Aunque el nombre
              de Honolulu se refiere al área urbana en la costa sureste de la
              isla de Oahu, la ciudad y el conudado de Honolulu han formado una
              ciudad condado consolidada que cubre toda la ciudad
              (aproximadamente 600km2 de superficie).
            </p>
            <button class="btn">Conocé más</button>
          </div>
        </div>
      </div>
      <div class="contacto" id="convertiteEnOrador">
            <p class="text-center oradores-title mt-4">
                CONVIÉRTETE EN UN <br /><span>ORADOR</span>
            </p>
            <p class="contacto-parrafo">
                Anótate como orador para dar una
                <span class="charla">charla ignite</span>. Cuéntanos de qué quieres
                hablar!
            </p>
            <form action="" method="POST" id="miFormulario">
                <div class="formulario container">
                    <div class="row g-3">
                        <div class="col-sm-6 col-md-12">
              
                            <label for="nombre" class="form-label"></label>
                            <input
                                type="text"
                                class="form-control"
                                id="nombre"
                                placeholder="Nombre"
                                aria-label="Nombre"
                                name="nombre"
                            />
                        </div>
                        <div class="col-sm-6 col-md-12">
                            <label for="apellido" class="form-label"></label>
                            <input
                                type="text"
                                class="form-control"
                                id="apellido"
                                placeholder="Apellido"
                                aria-label="Apellido"
                                name="apellido"
                             />
                        </div>
                        <div class="col-sm-6 col-md-12">
                            <label for="mail" class="form-label"></label>
                            <input
                                type="text"
                                class="form-control"
                                id="mail"
                                placeholder="Mail"
                                aria-label="Mail"
                                name="mail"
                            />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                             <label for="comments" class="form-label"></label>

                            <textarea
                                class="form-control"
                                placeholder="Sobre qué quieres hablar?"
                                aria-label="Sobre que quieres hablar?"
                                id="tema"
                                name="tema"
                                style="height: 100px"
                            ></textarea>

                            <p class="contacto-renglon">
                                Recuerda incluir un titulo para tu charla
                            </p>
                            <button type="submit" class="btn enviar" id="btnSubmit">Enviar</button>
              
                         </div>
                    </div>
                </div>
            </form>
            <?php
                


                $server = "localhost";
                $user = "id21697330_root";
                $password = "Superasd123.";
                $db = "id21697330_integrador_cac";
                
                $conexion = mysqli_connect($server, $user, $password, $db);
                
                
                
                if($conexion->connect_errno){
                    die("Conexion fallida" . $conexion->connect_errno);
                } 
                
                if(isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["mail"]) && isset($_POST["tema"])){
                    $nombre = $_POST["nombre"];
                    $apellido = $_POST["apellido"];
                    $mail = $_POST["mail"];
                    $tema = $_POST["tema"];

                    $sql = "INSERT INTO oradores (nombre, apellido, mail, tema) 
                                        VALUES ('$nombre', '$apellido', '$mail', '$tema')";

                    if (mysqli_query($conexion, $sql)) {
                        echo "<div><h6>Registro insertado correctamente!!</h6></div>" . $sql;
                    } else {
                        echo "Error al insertar el registro: " . mysqli_error($conexion);
                    }
                }
                
                
                


            ?>
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
    <!-- Script Bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <script src="app.js"></script>
  </body>
</html>
