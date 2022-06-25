  <?php
    $tituloPagina = "Clinica-Medicos"; //Nombre de la página 
    $path_logo = URL_ROOT . "/public/img/";
    $path_css = URL_ROOT . "/public/css/";
    $path_js = URL_ROOT . "/public/js/";
    $status_page = "medico";
    require_once HEAD; // Solicitud del header
    require_once(APP_ROOT . '/models/operations/database-conection.php');
    require_once(APP_ROOT . '/models/operations/crud-conection.php');
    session_start();
    $instanciaConexion = new Conexion;
    $conexion = $instanciaConexion->conectarBD();

    $query = "SELECT * FROM `medico` 
              INNER JOIN usuario 
              on medico.usuario_IdUsuario = usuario.idUsuario 
              WHERE `email` = '{$_SESSION['email']}'";
    if ($resultado = $conexion->query($query)) {

        while ($row = $resultado->fetch_assoc()) {
            $idUsuario = $row['idUsuario'];
            $usuario = $row['usuario'];
            $email = $row['email'];
            $idMedico = $row['idMedico'];
            $nombre = $row['nombre'];
            $paterno = $row['paterno'];
        }
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conexion);
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
                          <a href="#" class="brand-logo center"><img src="<?php echo URL_ROOT . '/public/'; ?>img/logo01.png" alt="" class="circle responsive-img" /></a>
                          <a href="#" data-target="mobile-menu" class="sidenav-trigger"><i class="material-icons">menu</i></a>

                          <ul class="right hide-on-med-and-down">
                              <li>Conectado: <?php echo  $nombre; ?><i class="material-icons left Tiny green-text text-darken-4">radio_button_checked</i></li>
                              <!--<li><a href="#">Inicio</a></li>
                            <li><a href="#">item2</a></li>
                            <li><a href="#">item3</a></li>
                            <li><a href="#">item4</a></li>-->
                          </ul>

                          <ul class="sidenav white" id="mobile-menu">
                              <li>
                                  <div class="user-view">
                                      <div class="background">
                                          <img src="<?php echo URL_ROOT . '/public/img/'; ?>office.jpg">
                                      </div>
                                      <a href="#user"><img class="circle" src="<?php echo URL_ROOT . '/public/img/'; ?>profile-doctor03.jpg"></a>
                                      <a href="#name"><span class="white-text name"><?php echo  $nombre; ?></span></a>
                                      <a href="#email"><span class="white-text email"><?php echo  $_SESSION['email']; ?></span></a>
                                  </div>
                              </li>
                              <li><a class="subheader">Citas</a></li>
                              <li><a class="waves-effect waves-yellow" href="#"><i class="material-icons left">person</i><span class="blue-text">Ver Perfil</span></a></li>
                              <li class="ver-calendario"><a class="waves-effect waves-yellow" href="#"><i class="material-icons left">av_timer</i><span class="blue-text">Ver Calendario</span></a></li>
                              <li class="ver-citas"><a class="waves-effect waves-yellow" href="#"><i class="material-icons left">assignment</i><span class="blue-text">Ver Citas</span></a></li>
                              <li><a data-target="modal1" id="new" class="waves-effect waves-yellow modal-trigger" href="#formulario-cita"><i class="material-icons md-24 left">add</i><span class="blue-text">Añadir Cita</span></a></li>
                              <li><a class="waves-effect waves-yellow " href="#"><i class="material-icons left">local_printshop</i><span class="blue-text">Imprimir citas</span></a></li>

                              <li>
                                  <div class="divider"></div>
                              </li>
                              <li><a class="subheader">Cuenta</a></li>
                              <li><a class="waves-effect waves-yellow" href="#"><i class="material-icons left">directions_walk</i><span class="Red-text">Salir</span></a></li>

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
                              <img src="<?php echo URL_ROOT . '/public/img/'; ?>office.jpg">
                          </div>
                          <a href="#user"><img class="circle" src="<?php echo URL_ROOT . '/public/img/'; ?>profile-doctor03.jpg"></a>
                          <a href="#name"><span class="white-text name"><?php echo  $nombre . " " . $paterno; ?></span></a>
                          <a href="#email"><span class="white-text email"><?php echo  $_SESSION['email']; ?></span></a>
                      </div>
                  </li>
                  <li><a class="subheader">Citas</a></li>
                  <li><a class="waves-effect waves-yellow" href="#"><i class="material-icons md-24 left">person</i><span class="blue-text">Ver Perfil</span></a></li>
                  <li class="ver-calendario"><a class="waves-effect waves-yellow" href="#"><i class="material-icons md-24 left">av_timer</i><span class="blue-text">Ver Calendario</span></a></li>
                  <li class="ver-citas"><a class="waves-effect waves-yellow" href="#"><i class="material-icons md-24 left">assignment</i><span class="blue-text">Ver Citas</span></a></li>
                  <li><a data-target="modal1" id="new" class="waves-effect waves-yellow modal-trigger" href="#formulario-cita"><i class="material-icons md-24 left">add</i><span class="blue-text">Añadir Cita</span></a></li>
                  <li><a class="waves-effect waves-yellow " href="#"><i class="material-icons md-24 left">local_printshop</i><span class="blue-text">Imprimir citas</span></a></li>

                  <li>
                      <div class="divider"></div>
                  </li>
                  <li><a class="subheader">Cuenta</a></li>
                  <li><a class="waves-effect waves-yellow" href="#"><i class="material-icons md-24 left red-text">directions_walk</i><span class="Red-text">Salir</span></a></li>

              </ul>
          </div>
          <!--initialization of data -->
          <?php
            /* Get data from medico */
            $contador = 0;
            $cita = '';
            $idMedico = $GLOBALS['idMedico'];
            $object = new Connection();
            $query2 = "SELECT * FROM `cita` WHERE `medico_idMedico` = '$idMedico'";
            $connection = $object->Connect();
            $result3 = $connection->prepare($query2);
            $result3->execute();
            $data = $result3->fetchAll(PDO::FETCH_ASSOC);
            ?>

          <?php
            function initializa()
            {
            ?>
              <?php
                //$contador = 0;  // id row counter
                foreach ($GLOBALS['data'] as $GLOBALS['cita']) {
                ?>
                  <tr>
                      <td id=" id"><?php echo $GLOBALS['cita']['idCita'] ?></td>
                      <td><?php echo $GLOBALS['cita']['nombre'] ?></td>
                      <td><?php echo $GLOBALS['cita']['paterno'] ?></td>
                      <td><?php echo $GLOBALS['cita']['materno'] ?></td>
                      <!--New-->
                      <td><?php echo $GLOBALS['cita']['email'] ?></td>
                      <td><?php echo $GLOBALS['cita']['telefono'] ?></td>
                      <td><?php echo $GLOBALS['cita']['tratamiento'] ?></td>
                      <td><?php echo $GLOBALS['cita']['fecha'] ?></td>
                      <!--New-->
                      <td><?php echo $GLOBALS['cita']['hora'] ?></td>
                      <!--New-->
                      <td><?php echo $GLOBALS['cita']['mensaje'] ?></td>
                      <!--Columna Operacion -->
                      <?php operacion(); //parametro array cita con  los datos de la bd
                        ?>
                  <?php
                    $GLOBALS['contador']++;
                }
                    ?>
                  </tr>
              <?php
            }
                ?>
              <!--Funcion  de recarga de la columna operacion -->
              <?php
                function operacion()
                {
                    echo '<td' . ' id' . '=' . '"operacion_' . $GLOBALS['contador'] . '"';
                    echo ' estado= "' . $GLOBALS['cita']['estado'] . '"' . 'style="display:inline-flex">';
                    if ($GLOBALS['cita']['estado'] === "0") {
                        echo "<button class='btnMark btn-floating orange waves-effect-light' type='submit' name='actionMark'>
                                                                <i class='material-icons right'>alarm</i>
                                                            </button>";
                    } else if ($GLOBALS['cita']['estado'] === "1") {
                        echo "<button class='btnMark btn-floating green waves-effect-light' type='submit' name='actionMark'>
                                                                <i class='material-icons right'>done</i>
                                                            </button>";
                    }
                    echo '<!--Actualizar-->
                                                <a href="#formulario-cita-container"
                                                    data-target="modal1"
                                                    class="btnEdit modal-trigger btn-floating yellow darken-2 waves-effect waves light"+
                                                    type="submit"
                                                    name="actionUpdate">
                                                    <i class="material-icons right">mode_edit</i>
                                                </a>
                                            <!--Elimnar--> 
                                                <button class="btnDelete btn-floating red waves-effect waves-light" type = "submit" name="actionDelete">
                                                    <i class="material-icons right">delete</i>
                                                </button>
                                          </td>';
                }
                ?>

              <div class="col s12 m9 l9">
                  <!--INICIO CUERPO PRINCIPAL DONDE SE MUESTRAN LOS DATOS-->
                  <main id="main-admin-medico">

                      <div class="row">

                          <div class="col s12">
                              <?php
                                /*
                            //Peticiones CRUD (puede mejorar)
                            $object = new Connection();
                            $query2 = "SELECT * FROM `cita` WHERE `medico_idMedico` = '$idMedico'";
                            $connection = $object->Connect();
                            $result3 = $connection->prepare($query2);
                            $result3->execute();
                            $data = $result3->fetchAll(PDO::FETCH_ASSOC);*/
                                ?>
                              <!--Contenido del modal tabla-->
                              <!--Jalando los datos desde la base de datos--->
                              <table id="tableCitas" class="centered">
                                  <thead>
                                      <tr>
                                          <th>Id</th>
                                          <th>Nombre</th>
                                          <th>Paterno</th>
                                          <th>Materno</th>
                                          <!--New -->
                                          <th>Email</th>
                                          <th class="newWidthPhone">Telefono</th>
                                          <th>Tratamiento</th>
                                          <th class="newWidthDate">Fecha</th>
                                          <th>Hora</th>
                                          <th class="newWidthCellMensaje">Mensaje</th>
                                          <th>Operación</th>
                                      </tr>
                                  </thead>
                                  <tbody id="bodies">
                                      <!--Inicializa la carga con los datos de la tabla-->
                                      <?php
                                        initializa();
                                        ?>
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
                      </div>
                  </main>
                  <!--FIN DEL CUERPO-->
              </div>

      </div>
      <!--INICIO DEL FOOTER-->
      <!--<div class="modal" id="modal1">
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
      </div> -->
      <!--MODAL -->
      <!--Nueva cita -->
      <div id="formulario-cita" class="modal" style=" max-height: 100%;">
          <div class="container">
              <div class="row">
                  <h5 class="center-align">Llene los <span class="blue-text text-darken-1">Datos de la Cita</span></h5>
                  <form id="formulario-cita-form-new" method="POST">
                      <div class="input-field col s12 l6">
                          <input type="text" id="nombre" class="validate" name="nombre" required>
                          <label for="nombre">Nombre</label>
                      </div>
                      <div class="input-field col s12 l6">
                          <input type="text" id="paterno" class="validate" name="paterno" required>
                          <label for="paterno">Paterno</label>
                      </div>
                      <div class="input-field col s12 l6">
                          <input type="text" id="materno" class="validate" name="materno" required>
                          <label for="materno">Materno</label>
                      </div>
                      <div class="input-field col s12 l6">
                          <input type="email" id="email-2" class="validate" name="email" required>
                          <label for="email-2" data-error="Correo Inválido" data-success="Correcto">Email</label>
                      </div>

                      <div class="input-field col s12 l6">
                          <input type="tel" pattern='\d{3}[\-]\d{3}[\-]\d{4}' title='Formato de telefono: (Formato: 123-456-7890)' id="telefono" class="validate" name="telefono" required>
                          <label for="telefono">Telefono</label>
                      </div>

                      <div class="input-field col s12 l6" required>
                          <select name="opciones-tratamientos" id="opciones-tratamientos">
                              <option value="disabled selected">Selecciona un Tratamiento</option>
                              <option value="Ortodoncia">Ortodoncia</option>
                              <option value="Peridoncia">Periodoncia</option>
                              <option value="Endodoncia">Endodoncia</option>
                              <option value="Cirujía dental">Cirujía Dental</option>
                              <option value="Estética dental">Estética Dental</option>
                          </select>
                          <label>Opciones de tratamientos</label>
                      </div>

                      <div class="input-field col 12 l6">
                          <input type="text" class="datepicker" id="fecha" name="fecha" required>
                          <label for="fecha">Fecha de la Cita</label>
                      </div>

                      <div class="input-field col 12 l6">
                          <input type="text" class="timepicker" id="hora" name="hora" required>
                          <label for="hora">Hora de la Cita</label>
                      </div>

                      <div class="input-field col s12">
                          <textarea id="mensaje" class="materialize-textarea" name="mensaje"></textarea>
                          <label for="mensaje">Escribenos un Mensaje</label>
                      </div>
                      <input type="hidden" name="action" value="submit" />
                      <button class="btn modal-close btn waves-effect waves-light blue" type="submit">Enviar
                          <i class="material-icons right">send</i>
                      </button>
                      <!-- <input type="submit" class="btn waves-effect waves-light" name="submit" value="submit" /> -->
                  </form>

              </div>
          </div>
      </div>
      <!--MODAL -->
      <!--modificar / Actualizar cita -->
      <div id="formulario-cita-container" class="modal" style=" max-height: 100%;">
          <div class="container">
              <div class="row">
                  <h5 class="center-align">Llene los <span class="blue-text text-darken-1">Datos de la Cita</span></h5>
                  <form id="formulario-cita-form-update" method="POST" action="server/operations/crud.php">
                      <div class="input-field col s12 l6">
                          <input type="text" id="nombre" class="validate" name="nombre" required>
                          <label for="nombre">Nombre</label>
                      </div>
                      <div class="input-field col s12 l6">
                          <input type="text" id="paterno" class="validate" name="paterno" required>
                          <label for="paterno">Paterno</label>
                      </div>
                      <div class="input-field col s12 l6">
                          <input type="text" id="materno" class="validate" name="materno" required>
                          <label for="materno">Materno</label>
                      </div>
                      <div class="input-field col s12 l6">
                          <input type="email" id="email-2" class="validate" name="email" required>
                          <label for="email-2" data-error="Correo Inválido" data-success="Correcto">Email</label>
                      </div>

                      <div class="input-field col s12 l6">
                          <input type="tel" pattern='\d{3}[\-]\d{3}[\-]\d{4}' title='Formato de telefono: (Formato: 123-456-7890)' id="telefono" class="validate" name="telefono" required>
                          <label for="telefono">Telefono</label>
                      </div>

                      <div class="input-field col s12 l6" required>
                          <select name="opciones-tratamientos" id="opciones-tratamientos-update">
                              <option value="disabled selected">Selecciona un Tratamiento</option>
                              <option value="Ortodoncia">Ortodoncia</option>
                              <option value="Peridoncia">Periodoncia</option>
                              <option value="Endodoncia">Endodoncia</option>
                              <option value="Cirujía dental">Cirujía Dental</option>
                              <option value="Estética dental">Estética Dental</option>
                          </select>
                          <label>Opciones de tratamientos</label>
                      </div>

                      <div class="input-field col 12 l6">
                          <input type="text" class="datepicker" id="fecha" name="fecha" required>
                          <label for="fecha">Fecha de la Cita</label>
                      </div>

                      <div class="input-field col 12 l6">
                          <input type="text" class="timepicker" id="hora" name="hora" required>
                          <label for="hora">Hora de la Cita</label>
                      </div>

                      <div class="input-field col s12">
                          <textarea id="mensaje" class="materialize-textarea" name="mensaje"></textarea>
                          <label for="mensaje">Escribenos un Mensaje</label>
                      </div>
                      <input type="hidden" name="action" value="submit" />
                      <button class="btn waves-effect waves-light blue" type="submit">Enviar
                          <i class="material-icons right">send</i>
                      </button>
                      <!-- <input type="submit" class="btn waves-effect waves-light" name="submit" value="submit" /> -->
                  </form>

              </div>
          </div>
      </div>
      <!--- FOOTER -->
      <footer class="page-footer blue">
          <div class="container">
              <div class="row">
                  <p class="flow-text center">&copy; 2018 Copyright Clínica dental</p>
              </div>
          </div>
          <div class="footer-copyright">
              <div class="container">
                  © 2021 Copyright Todos los derechos reservados
                  <a class="grey-text text-lighten-4 right" href="#!">Mas links</a>
              </div>
          </div>
      </footer>
      <!--FIN DEL FOOTER-->
      <?php require_once FOOTER ?>
  </body>

  </html>