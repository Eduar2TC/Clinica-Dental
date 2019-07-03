  <?php
    $tituloPagina = "Clinica-Medicos"; //Nombre de la página 
    $path_logo = "img/";
    $path_css = "css/";
    $path_js = "js/";
    $status_page = "medicos";
    require_once("includes/header.php"); // Solicitud del header
    require_once("server/operations/database-conection.php");
    require_once("server/operations/crud-conection.php");
    session_start();
    $instanciaConexion = new Conexion;
    $conexion = $instanciaConexion->conectarBD();
    $query = "SELECT * FROM `usuario` WHERE `email` = '{$_SESSION['email']}'";

    if ($resultado = $conexion->query($query)) {

        while ($fila = $resultado->fetch_assoc()) {
            $idUsuario = $fila['idUsuario'];
            $usuario = $fila['usuario'];
            $email = $fila['email'];
            $idMedico = $fila['medico_idMedico'];
        }
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conexion);
    }

    $query2 = "SELECT * FROM `medico` WHERE `idMedico` = '$idMedico'";
    if ($resultado2 = $conexion->query($query2)) {

        while ($fila2 = $resultado2->fetch_assoc()) {
            $nombre = $fila2['nombre'];
            $paterno = $fila2['paterno'];
        }
    } else {
        echo "Error: " . $query2 . "<br>" . mysqli_error($conexion);
    }

    ?>

  <body>
      <!--INICIO DEL HEADER--->
      <header>
          <div class="navbar-fixed">
              <nav>
                  <div class="nav-wrapper blue">
                      <div class="container">

                          <span class="hide-on-med-and-down">
                              <h5 style="display:inline;">Administración de citas</h5>
                          </span>
                          <a href="#" class="brand-logo center"><img src="img/logo01.png" alt="" class="circle responsive-img" /></a>
                          <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>

                          <ul class="right hide-on-med-and-down">
                              <li>Conectado: <?php echo  $nombre; ?><i class="material-icons left Tiny green-text text-darken-4">radio_button_checked</i></li>
                              <!--<li><a href="#">Inicio</a></li>
                            <li><a href="#">item2</a></li>
                            <li><a href="#">item3</a></li>
                            <li><a href="#">item4</a></li>-->
                          </ul>

                          <ul class="side-nav white" id="mobile-menu">
                              <li>
                                  <div class="user-view">
                                      <div class="background">
                                          <img src="img/office.jpg">
                                      </div>
                                      <a href="#user"><img class="circle" src="img/profile-doctor03.jpg"></a>
                                      <a href="#name"><span class="white-text name"><?php echo  $nombre; ?></span></a>
                                      <a href="#email"><span class="white-text email"><?php echo  $_SESSION['email']; ?></span></a>
                                  </div>
                              </li>
                              <li><a class="subheader">Citas</a></li>
                              <li><a class="waves-effect waves-yellow" href="#"><i class="material-icons left">cloud</i><span class="blue-text">Ver Perfil</span></a></li>
                              <li><a class="waves-effect waves-yellow" href="#"><i class="material-icons left">cloud</i><span class="blue-text">Ver Citas</span></a></li>
                              <li><a class="waves-effect waves-yellow " href="#"><i class="material-icons left">cloud</i><span class="blue-text">Imprimir citas</span></a></li>

                              <li>
                                  <div class="divider"></div>
                              </li>
                              <li><a class="subheader">Cuenta</a></li>
                              <li><a class="waves-effect waves-yellow" href="#"><i class="material-icons left">cloud</i><span class="Red-text">Salir</span></a></li>

                          </ul>
                      </div>
                  </div>
              </nav>
          </div>
      </header>
      <!--FIN DEL HEADER-->
      <div class="row">
          <!---SIDENAV-->
          <div class="col s12 m3 l3">
              <ul id="sidenav-navegation" class="side-nav fixed">
                  <li>
                      <div class="user-view">
                          <div class="background">
                              <img src="img/office.jpg">
                          </div>
                          <a href="#user"><img class="circle" src="img/profile-doctor03.jpg"></a>
                          <a href="#name"><span class="white-text name"><?php echo  $nombre . " " . $paterno; ?></span></a>
                          <a href="#email"><span class="white-text email"><?php echo  $_SESSION['email']; ?></span></a>
                      </div>
                  </li>
                  <li><a class="subheader">Citas</a></li>
                  <li><a class="waves-effect waves-yellow" href="#"><i class="material-icons left">cloud</i><span class="blue-text">Ver Perfil</span></a></li>
                  <li><a class="waves-effect waves-yellow" href="#"><i class="material-icons left">cloud</i><span class="blue-text">Ver Citas</span></a></li>
                  <li><a class="waves-effect waves-yellow " href="#"><i class="material-icons left">cloud</i><span class="blue-text">Imprimir citas</span></a></li>

                  <li>
                      <div class="divider"></div>
                  </li>
                  <li><a class="subheader">Cuenta</a></li>
                  <li><a class="waves-effect waves-yellow" href="#"><i class="material-icons left">cloud</i><span class="Red-text">Salir</span></a></li>

              </ul>
          </div>

          <div class="col s12 m9 l9">
              <!--INICIO CUERPO-->
              <main id="main-admin-medico">

                  <div class="row">
                      <div class="col s12 12">
                          <?php
                            //Peticiones CRUD (puede mejorar)
                            $object = new Connection();
                            $query2 = "SELECT * FROM `cita` WHERE `medico_idMedico` = '$idMedico'";
                            $connection = $object->Connect();
                            $result3 = $connection->prepare($query2);
                            $result3->execute();
                            $data = $result3->fetchAll(PDO::FETCH_ASSOC);
                            ?>
                          <!--Contenido del modal tabla-->
                          <a data-target="modal1" id="new" class="waves-effect waves-light btn" modal-trigger href="#modal1"> Nueva cita<li class="material-icons rigth">add</li></a>
                          <br><br>
                          <table id="tableCitas" class="centered">
                              <thead>
                                  <tr>
                                      <th>Id</th>
                                      <th>Nombre</th>
                                      <th>Paterno</th>
                                      <th>Email</th>
                                      <th>Telefono</th>
                                      <th>Tratamiento</th>
                                      <th>Mensaje</th>
                                      <th>Operación</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <?php
                                    foreach ($data as $cita) {
                                    ?>
                                      <tr>
                                          <td id="id"><?php echo $cita['idCita'] ?></td>
                                          <td><?php echo $cita['nombre'] ?></td>
                                          <td><?php echo $cita['paterno'] ?></td>
                                          <td><?php echo $cita['email'] ?></td>
                                          <td><?php echo $cita['telefono'] ?></td>
                                          <td><?php echo $cita['tratamiento'] ?></td>
                                          <td><?php echo $cita['mensaje'] ?></td>
                                          <td style="display:inline-flex"></td>
                                      </tr>
                                  <?php } ?>
                              </tbody>
                          </table>
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
              </main>
              <!--FIN DEL CUERPO-->
          </div>

      </div>
      <!--INICIO DEL FOOTER-->
      <div class="modal" id="modal1">
          <div class="modal-content">
              <div class="container">
                  <form action="" id="formCitas">
                      <input type="text" name="" id="nombre">Nombre
                      <input type="text" id="paterno">Paterno
                      <input type="text" id="materno">Materno
                      <input type="text" id="email">Email
                      <input type="text" id="telefono">Telefono
                      <input type="text" id="tratamiento">Tratamiento
                      <input type="text" id="mensaje">Mensaje
                      <br><br>
                      <button class="btn modal-close waves-effect waves-light" type="submit" name="action">Submit <i class="material-icons right">send</i>
                      </button>
                  </form>
              </div>
          </div>
      </div>
      <footer class="page-footer blue">
          <div class="container">
              <div class="row">
                  <p class="flow-text center">&copy; 2018 Copyright Clínica dental</p>
              </div>
          </div>
          <div class="footer-copyright">
              <div class="container">
                  © 2018 Copyright Todos los derechos reservados
                  <a class="grey-text text-lighten-4 right" href="#!">Mas links</a>
              </div>
          </div>
      </footer>
      <!--FIN DEL FOOTER-->
      <?php require_once("includes/footer.php"); ?>
  </body>

  </html>