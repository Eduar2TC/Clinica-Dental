  <?php
    $tituloPagina = "Clinica-Medicos"; //Nombre de la página 
    $path_logo = "img/";
    $path_css = "css/";
    $path_js = "js/";
    $status_page = "medicos";
    require_once("includes/header.php"); // Solicitud del header
    require_once("server/operations/database-conection.php");
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
                      <div class="col s12 m4">
                          <div class="collection">
                              <?php

                                $query2 = "SELECT * FROM `cita` WHERE `medico_idMedico` = '$idMedico'";
                                if ($resultado3 = $conexion->query($query2)) {

                                    while ($fila3 = $resultado3->fetch_assoc()) {
                                        echo "<a href=' #!' class='collection-item'><b>Fecha: </b>{$fila3['fecha']}, <b>{$fila3['nombre']} {$fila3['paterno']}</b></a>";
                                    }
                                } else {
                                    echo "Error: " . $query2 . "<br>" . mysqli_error($conexion);
                                }
                                ?>
                          </div>
                      </div>

                      <div class="col s12 m8">
                          <div class=" lime accent-1">
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
                              <br>
                              <br>
                              <br>
                              <br>
                              <br>
                              <div class="divider"></div>
                              <a class="waves-effect waves-light btn blue white-text">Marcar como atendido</a>
                              <a class="right-align waves-effect waves-light btn red white-text" style="margin-left: 27%;">Cancelar
                                  Cita</a>
                          </div>
                      </div>
                  </div>
              </main>
              <!--FIN DEL CUERPO-->
          </div>

      </div>


      <!--INICIO DEL FOOTER-->

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