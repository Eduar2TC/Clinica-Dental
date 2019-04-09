  <?php
    $nombrePagina = "Clinica-Precios"; //Nombre de la página 
    require_once("includes/header.php") // Solicitud del header
    ?>

  <body>
      <!--INICIO DEL HEADER--->
      <header>
          <div class="row">
              <div id="imagenLogo" class="col s12 m4 offset-m1"><a href="index.php"><img src="img/logo01.png" alt="logo.png" class="responsive-img"></a></div>
              <!--No tocar-->
              <div class="col s12 m4"></div>

              <div class="col s12 m4 offset-m3">
                  <div class="row">
                      <div id="links-superiores">
                          <ul class="left hide-on-small-and-down">
                              <li><a class="link" href="nosotros.php">Nosotros</a></li>
                              <li><a class="link" href="empleo.php">Empleo</a></li>
                              <li><a class="link" href="contacto.php">Contacto</a></li>
                              <li><a class="link" href="ayuda.php">Ayuda</a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="row" style="margin-bottom: 0px; /*Quita espacio entre el div del logo*/">
                      <div class="left hide-on-med-and-down">
                          <a href="tel:2228530500"><i class="material-icons" style="font-size: 25px;">phone</i><span id="telefono">Telefono:
                                  2228530500</span></a>
                      </div>
                  </div>
              </div>
          </div>
          <!--Menu de navegación principal-->
          <div class="row" id="navegacionPrincipal">
              <div class="navbar">
                  <nav class="tarjetaPushpin">

                      <div class="nav-wrapper blue lighten-2">
                          <div class="container">
                              <div class="nav-wrapper">

                                  <a href="index.php" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>
                                  <ul class="hide-on-small-and-down">
                                      <li><a href="tratamientos.php">Tratamientos</a></li>
                                      <li><a href="precios.php">Precios</a></li>
                                      <li><a href="sucursales.php">Clínicas</a></li>
                                      <li><a href="#formulario-cita" class=" blue-text waves-effect waves-yellow blue lighten-5 btn modal-trigger"><span>Reservar
                                                  Cita</span></a>
                                      </li>
                                  </ul>
                              </div>

                              <ul class="right hide-on-med-and-down fa-ul">
                                  <li><a href="medicos.php"><span class="fa-li"><i class="fas fa-sign-in-alt"></i></span>Login
                                          médico</a></li>
                                  <!--<li><a href="index.php"><i class="fas fa-sign-in-alt" style=" vertical-align: middle;"></i>Login
                    médico</a></li> -->
                              </ul>
                          </div>
                  </nav>
              </div>

              <!--Menu de navegacion Mobil -->
              <ul class="side-nav" id="mobile-menu">
                  <li><a href="index.php" class="blue-text">Inicio</a></li>
                  <li><a href="tratamientos.php" class="blue-text">Tratamientos</a></li>
                  <li><a href="precios.php" class="blue-text">Precios</a></li>
                  <li><a href="clinicas.php" class="blue-text">Clínicas</a></li>
                  <li><a href="#formulario-cita" class="blue-text waves-effect waves-yellow  blue lighten-5 btn modal-trigger">Reservar
                          Cita</a></li>
                  <li><a href="index.php" class="blue-text"><i class="fas fa-sign-in-alt"></i>Login médico</a></li>
              </ul>

          </div>

          <!--Inicio del Slider-->
          <div class="slider">
              <ul class="slides">
                  <li>
                      <img class="responsive-img" src="img/dentista.jpg">

                      <div class="caption center-align">
                          <h3 class="blue-text accent-4">Evaluación sin costo en tu primera cita</h3>
                          <h5 class="light blue-text text-lighten-3">Aplica a niños menores de 15 años</h5>
                          <div class="hide-on-med-and-down">
                              <a href="#" class="btn btn-medium blue darken-1 ">Saber mas...</a>
                          </div>
                      </div>

                  </li>
                  <li>
                      <img class="responsive-img" src="img/doctor.jpg">

                      <div class="caption left-align">
                          <h3 class="blue-text accent-4">Médicos capacitados</h3>
                          <h5 class="light blue-text text-lighten-3">Hospitalidad, buena atención de nuestro personal</h5>
                          <div class="hide-on-med-and-down">
                              <a href="#" class="btn btn-medium blue darken-1">Saber mas...</a>
                          </div>
                      </div>

                  </li>
                  <li>
                      <img class="responsive-img" src="img/ani-kolleshi-640938-unsplash.jpg">

                      <div class="caption right-align">
                          <h3 class="blue-text accent-4">Gran variedad de servicios.</h3>
                          <h5 class="light blue-text text-lighten-3">Consulta nuestro Catalogo de Servicios</h5>
                          <div class="hide-on-med-and-down">
                              <a href="tratamientos.php#seccion-tratamientos" class="btn btn-medium blue darken-1">Saber
                                  mas...</a>
                          </div>
                      </div>

                  </li>
                  <li>
                      <img class="responsive-img" src="img/yingpis-kalayom-133680-unsplash.jpg">

                      <div class="caption center-align">
                          <h3 class="blue-text accent-4">Tratamientos a tu medida</h3>
                          <h5 class="light blue-text text-lighten-3">Ortodocia a tus necesidades</h5>
                          <div class="hide-on-med-and-down">
                              <a href="#" class="btn btn-medium blue darken-1">Saber mas...</a>
                          </div>
                      </div>

                  </li>
              </ul>
          </div>
          <!--Fin del Slider-->
      </header>
      <!--FIN DEL HEADER-->
      <!--INICIO CUERPO-->
      <main>
          <!--Inicio Precios-->
          <section class="section-precios">

              <div class="container">
                  <div class="row">
                      <div class="col s12">
                          <div class="center">
                              <h4>Los mejores precios para tu bolsillo</h4>
                          </div>
                      </div>
                  </div>

                  <div class="row grey darken-2">
                      <div class="col s12" style=" height: 400px; background-color: cadetblue;">

                          <div class="row">
                              <div class="col s12" style="height: 200px; background-color:darkorange;">

                              </div>
                          </div>

                      </div>

                  </div>
                  <div class="row">
                  </div>
                  <div class="row">
                  </div>
                  <div class="row">
                  </div>

              </div>

          </section>

          <!--Fin Precios-->
      </main>
      <!--FIN DEL CUERPO-->


      <!--INICIO DEL FOOTER-->
      <footer class="page-footer blue lighten-2">
          <div class="container">
              <div class="row">
                  <div class="col s12 m9 l3">
                      <h5 class="white-text">Navegación</h5>
                      <!--<p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p> -->
                      <div>
                          <ul id="idListaLinksFooter">
                              <li><a class="grey-text text-lighten-3" href="index.php">Inicio</a></li>
                              <li><a class="grey-text text-lighten-3" href="tratamientos.php" class="link-footer">Tratamientos</a></li>
                              <li><a class="grey-text text-lighten-3" href="sucursales.php" class="link-footer">Clinicas</a></li>
                              <li><a class="grey-text text-lighten-3" href="promociones.php" class="link-footer">Promociones</a></li>
                              <li><a class="grey-text text-lighten-3" href="contacto.php" class="link-footer">Contacto</a></li>
                          </ul>
                          </ul>
                      </div>
                  </div>
                  <div class="col s12 m3 l4 offset-l5">
                      <h5 class="white-text">Redes sociales</h5>
                      <p class="grey-text text-lighten-4">Siguenos en nuestras <b>Redes Sociales</b></p>
                      <div id="social">
                          <a href="http://www.facebook.com"><i class="fab fa-facebook fa-3x"></i></a>
                          <a href="http://www.twitter.com"><i class="fab fa-twitter-square fa-3x"></i></a>
                          <a href="http://www.instagram.com"><i class="fab fa-instagram fa-3x"></i></a>
                      </div>
                  </div>
              </div>
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
      <!--                    ->  INICIO MODALES   <-               -->
      <!--                    ->  fIN MODALES   <-               -->

      <!--Modal Formulario-citas-->
      <div id="formulario-cita" class="modal" style=" max-height: 100%;">
          <div class="container">
              <div class="row">
                  <h5 class="center-align">Llene los <span class="blue-text text-darken-1">Datos de la Cita</span></h5>
                  <form>
                      <div class="input-field col s12 l6">
                          <input type="text" id="nombre" class="validate">
                          <label for="nombre">Nombre</label>
                      </div>
                      <div class="input-field col s12 l6">
                          <input type="text" id="paterno" class="validate">
                          <label for="paterno">Paterno</label>
                      </div>
                      <div class="input-field col s12 l6">
                          <input type="text" id="paterno" class="validate">
                          <label for="materno">Materno</label>
                      </div>
                      <div class="input-field col s12 l6">
                          <input type="email" id="email" class="validate">
                          <label for="email" data-error="Correo Inválido" data-success="Correcto">Email</label>
                      </div>

                      <div class="input-field col s12 l6">
                          <input type="tel" pattern='\d{3}[\-]\d{3}[\-]\d{4}' title='Formato de telefono: (Formato: 123-456-7890)' id="telefono" class="validate">
                          <label for="telefono">Telefono</label>
                      </div>

                      <div class="input-field col s12 l6">
                          <select name="opciones-tratamientos" id="opciones-tratamientos">
                              <option value="disabled selected">Selecciona un Tratamiento</option>
                              <option value="1">Ortodoncia</option>
                              <option value="2">Periodoncia</option>
                              <option value="3">Endodoncia</option>
                              <option value="4">Cirujía Dental</option>
                              <option value="5">Estética Dental</option>
                          </select>
                          <label>Opciones de tratamientos</label>
                      </div>

                      <div class="input-field col 12 l6">
                          <input type="text" class="datepicker" id="fecha">
                          <label for="fecha">Fecha de la Cita</label>
                      </div>

                      <div class="input-field col 12 l6" id="hora">
                          <input type="text" class="timepicker">
                          <label for="hora">Hora de la Cita</label>
                      </div>

                      <div class="input-field col s12">
                          <textarea id="mensaje" class="materialize-textarea"></textarea>
                          <label for="mensaje">Escribenos un Mensaje</label>
                      </div>

                      <button class="btn waves-effect waves-light blue" type="submit" name="action">Enviar
                          <i class="material-icons right">send</i>
                      </button>
                  </form>

              </div>
          </div>
      </div>

      <!--Fin Modal-->
      <!--Footer-->
      <?php require_once("includes/footer.php"); ?>
  </body>

  </html>