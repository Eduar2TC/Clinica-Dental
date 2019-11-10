<?php
$tituloPagina = "Clínica Principal"; //Nombre de la pági
$path_logo = "img/";
$path_css = "css/";
$path_js = "js/";
$status_page = "inicio";
require_once("includes/header.php"); // Solicitud del header
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
                  <li><a href="#formulario-cita" class=" blue-text waves-effect waves-yellow blue lighten-5 btn modal-trigger"><span id="boton-registro">Reservar
                        Cita</span></a>
                  </li>
                </ul>
              </div>

              <ul class="right hide-on-med-and-down fa-ul">
                <li><a id="login" href="#"><span class="fa-li"><i class="fas fa-sign-in-alt"></i></span>Acceso</a></li>
                <!--<li><a href="index.php"><i class="fas fa-sign-in-alt" style=" vertical-align: middle;"></i>Login
                    médico</a></li> -->
              </ul>
            </div>
        </nav>
      </div>
      <!--Formulario para logearse -->
      <div id="login-form" class="webui-popover-content">
        <form id="formulario-login" method="POST" action="server/login.php">
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">mail_outline</i>
              <input class="validate" id="email-1" type="email" name="email" required>
              <label for="email" data-error="Ingresa un email válido" data-success="Correcto">Email</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">lock_outline</i>
              <input class="validate" id="password" type="password" name="password" required>
              <label for="password">Contraseña</label>
            </div>
          </div>
          <div class="row">
            <div class="col s12 m12 l12">
              <input type="checkbox" id="remember-me" name="recordarme" value="Si" required>
              <label for="remember-me">Recordarme</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 center">
              <button id="login" type="submit" name="login" value="accesando" class="waves-effect waves-light btn blue">Acceder
                <i class="fas fa-sign-in-alt left"></i>
            </div>
          </div>
          <div class="row contrasenia-olvidada">
            <div class="input-field col s12 m6 l6">
              <p class="margin center-align medium-small"><a href="#">¿Olvidaste tu contraseña?</a></p>
            </div>
            <div class="input-field col s12 m6 l6">
              <p class="margin center-align medium-small"><a href="#">Registrarse</a></p>
            </div>
          </div>

        </form>
      </div>

      <!--Menu de navegacion Mobil -->
      <ul class="side-nav" id="mobile-menu">
        <li><a href="index.php" class="blue-text">Inicio</a></li>
        <li><a href="tratamientos.php" class="blue-text">Tratamientos</a></li>
        <li><a href="precios.php" class="blue-text">Precios</a></li>
        <li><a href="sucursales.php" class="blue-text">Clínicas</a></li>
        <li><a href="#formulario-cita" class=" blue-text waves-effect waves-yellow blue lighten-5 btn modal-trigger"><span id="boton-registro">Reservar Cita</span></a>
        </li>
        <li><a id="login" href="#"><span class="fa-li"><i class="fas fa-sign-in-alt"></i></span>Acceso</a></li>
      </ul>

    </div>

    <!--Inicio del Slider-->
    <div class="slider">
      <ul class="slides z-depth-1">
        <li>
          <img class="responsive-img" src="img/dentista.jpg">

          <div class="caption center-align">
            <h3 class="blue-text accent-4">Evaluación sin costo en tu primera cita</h3>
            <h5 class="blue-text text-darken-4">Aplica a niños menores de 15 años</h5>
            <div class="hide-on-med-and-down">
              <a href="#" class="btn btn-medium blue darken-1 ">Saber mas...</a>
            </div>
          </div>

        </li>
        <li>
          <img class="responsive-img" src="img/doctor.jpg">

          <div class="caption left-align">
            <h3 class="blue-text accent-4">Médicos capacitados</h3>
            <h5 class="blue-text text-darken-4">Hospitalidad, buena atención de nuestro personal</h5>
            <div class="hide-on-med-and-down">
              <a href="#" class="btn btn-medium blue darken-1">Saber mas...</a>
            </div>
          </div>

        </li>
        <li>
          <img class="responsive-img" src="img/ani-kolleshi-640938-unsplash.jpg">

          <div class="caption right-align">
            <h3 class="blue-text accent-4">Gran variedad de servicios.</h3>
            <h5 class="blue-text text-darken-4">Consulta nuestro Catalogo de Servicios</h5>
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
            <h5 class="blue-text text-darken-4">Ortodocia a tus necesidades</h5>
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

  <!--CUERPO-->
  <main>
    <!--Ofertas-->
    <section class="section grey lighten-4 center ">
      <div class="container">

        <div class="row renglon1">

          <div class="col s12 m4">
            <div class="card-panel z-depth-3">
              <div class="icon-block">

                <i class="far fa-surprise fa-3x blue-text deep-blue-text text-darken-2"></i>
                <h5 class="grey-text text-darken-4">¡Primera consulta gratuita!</h5>
                <p class="ligth">Servicio gratuito en tu primera visita, anímate a visitarnos <br><br></p>

              </div>
            </div>
          </div>

          <div class="col s12 m4">
            <div class="card-panel z-depth-3">
              <div class="icon-block">

                <i class="fas fa-child fa-3x blue-text text-darken-3"></i>
                <h5 class="grey-text text-darken-4">Limpieza gratuita en niños</h5>
                <p class="ligth">Si ya eres cliente trae tus hijos y obten la limpieza gratuita de sus dientes</p>

              </div>
            </div>
          </div>

          <div class="col s12 m4">
            <div class="card-panel z-depth-3">
              <div class="icon-block">

                <i class="fas fa-teeth fa-3x blue-text text-darken-3"></i>
                <h5 class="grey-text text-darken-4">15% de descuento en Ortodoncia</h5>
                <p class="ligth">Paga con 15% de descuento al iniciar tu tratamiento (Sólo este mes)</p>

              </div>
            </div>
          </div>

        </div>

      </div>

    </section>
    <!--Fin de Ofertas-->
    <!--Titulo de la seccion -->
    <div class="row grey lighten-4">
      <div class="container">
        <div class="col s12 m12 l12 blue white-text darken-4 center seccion-titulo">
          <h4>
            Ventajas
          </h4>
          <span>Algunas de las ventajas que adquieres al tomar tratamiento con nosotros</span>
        </div>
      </div>
    </div>
    <!--Ventajas-->
    <section class="section section-ventajas grey lighten-4">
      <div class="container">
        <div class="row renglon2">
          <div class="col s12 m6">
            <h5>Equipo de <span class="blue-text text-darken-1">alta tecnología</span></h5>
            <p class="flow-text">Contamos con lo último en materiales para garantizar el mejor servicio y al mejor
              precio.</p>
          </div>
          <div class="col s12 m6">
            <img src="img/michael-browning-40733-unsplash.jpg" class="circle responsive-img" alt="" />
          </div>

        </div>

        <div class="row renglon3">

          <div class="col s12 m6" id="col1">
            <img src="img/dental-checkup_4460x4460.jpg" alt="" class="circle responsive-img" />
          </div>
          <div class="col s12 m6" id="col2">
            <h5><span class="blue-text text-darken-1">Tratamientos</span> personalizados</h5>
            <p class="flow-text">Seguiminto y atención personalizada para su mejor comodidad.</p>
          </div>

        </div>

        <div class="row renglon4">

          <div class="col s12 m6">
            <h5>Servicio de <span class="blue-text text-darken-1">Calidad</span></h5>
            <p class="flow-text">Personal especialistas capacitados para darte la mejor atención en cada visita.</p>
          </div>
          <div class="col s12 m6">
            <img src="img/ani-kolleshi-684082-unsplash.jpg" class="circle responsive-img" alt="" />
          </div>

        </div>

      </div>
    </section>
    <!--Fin de Ventajas-->

    <!--Casos de Usuarios-->
    <!--Titulo de la seccion -->
    <div class="row grey lighten-4">
      <div class="container">
        <div class="col s12 m12 l12 blue white-text darken-4 center seccion-titulo">
          <h4>
            Casos
          </h4>
          <span>Opiniones de nuestros Clientes</span>
        </div>
      </div>
    </div>
    <section class="section-testimonial grey lighten-4">

      <div class="container">
        <div class="row">
          <div class="col s12">

            <div class="carousel carousel-slider center">

              <div class="carousel-item" href="#none!">

                <h2>Peridoncia y Limpieza dental</h2>
                <div class="row">

                  <div class="col s12 m6">
                    <div class="card-panel grey lighten-5 z-depth-1">
                      <div class="row valign-wrapper">
                        <div class="col s3">
                          <img src="img/Tom_Cruise.jpg" alt="" class="circle responsive-img">
                          <!-- notice the "circle" class -->
                        </div>
                        <div class="col s10">
                          <span class="card-title">Paciente de <span class="blue-text text-darken-1">
                              Peridoncia</span>
                            <p class="black-text flow-text">
                              "Cuidar mis dientes es muy importante para mi. Ésta clinica no la cambio por nada"
                              <em><b>Tom Crouse</b></em>
                            </p>
                            <div class="carousel-fixed-item center hide-on-small-and-down">
                              <a href="#" class="btn grey">Leer mas</a>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col s12 m6">
                    <div class="card-panel grey lighten-5 z-depth-1">
                      <div class="row valign-wrapper">
                        <div class="col s3">
                          <img src="img/messi.jpg" alt="" class="circle responsive-img">
                          <!-- notice the "circle" class -->
                        </div>
                        <div class="col s10">
                          <span class="card-title">Paciente de <span class="blue-text text-darken-1">Limpieza Dental</span>
                            <p class="black-text">
                              "Soy muy cuidadoso con mi imagen, y los médicos de ésta clinica me garantizan lucir
                              excelente"
                              <em><b>Messi</b></em>
                            </p>
                            <div class="carousel-fixed-item center hide-on-small-and-down">
                              <a href="#" class="btn grey">Leer mas</a>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>


              </div>
              <div class=" carousel-item" href="#none!">

                <h2>Limpieza y Blanqueamiento dental</h2>
                <div class="row">

                  <div class="col s12 m6">
                    <div class="card-panel grey lighten-5 z-depth-1">
                      <div class="row valign-wrapper">
                        <div class="col s3">
                          <img src="img/juan-lopez.jpg" alt="" class="circle responsive-img">
                          <!-- notice the "circle" class -->
                        </div>
                        <div class="col s10">
                          <span class="card-title">Paciente de <span class="blue-text text-darken-1">Limpieza
                              Dental</span>
                            <p class="black-text flow-text">
                              "Un servicio excelente, con calidad humana y respeto"
                              <em><b>Juan López</b></em>
                            </p>
                            <div class="carousel-fixed-item left hide-on-small-and-down">
                              <a href="#" class="btn grey">Leer mas</a>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col s12 m6">
                    <div class="card-panel grey lighten-5 z-depth-1">
                      <div class="row valign-wrapper">
                        <div class="col s3">
                          <img src="img/martha.jpg" alt="" class="circle responsive-img">
                          <!-- notice the "circle" class -->
                        </div>
                        <div class="col s10">
                          <span class="card-title">Paciente de <span class="blue-text text-darken-1">
                              Blanqueamiento Dental</span>
                            <p class="black-text">
                              "Siempre dan ganas de volver a ésta clínica, el servicio es excelente."
                              <em><b>Martha Higareda</b></em>
                            </p>
                            <div class="carousel-fixed-item center hide-on-small-and-down">
                              <a href="#" class="btn grey">Leer mas</a>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>


              </div>
              <div class="carousel-item" href="#none!">

                <h2>Ortodocia</h2>
                <div class="row">

                  <div class="col s12 m6">
                    <div class="card-panel grey lighten-5 z-depth-1">
                      <div class="row valign-wrapper">
                        <div class="col s3">
                          <img src="img/caroline-buckey.jpg" alt="" class="circle responsive-img">
                          <!-- notice the "circle" class -->
                        </div>
                        <div class="col s10">
                          <span class="card-title">Paciente de <span class="blue-text text-darken-1">Ortodoncia</span></span>
                          <p class="black-text flow-text">
                            "Confianza y seguridad en el cuidado de mi sonrisa"
                            <em><b>Caroline Buckey</b></em>
                          </p>
                          <div class="carousel-fixed-item center hide-on-small-and-down">
                            <a href="#" class="btn grey">Leer mas</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col s12 m6">
                    <div class="card-panel grey lighten-5 z-depth-1">
                      <div class="row valign-wrapper">
                        <div class="col s3">
                          <img src="img/Emily_Blunt_Hairstyle.jpg" alt="" class="circle responsive-img">
                          <!-- notice the "circle" class -->
                        </div>
                        <div class="col s10">
                          <span class="card-title">Paciente de <span class="blue-text text-darken-1">Ortodoncia</span></span>
                          <p class="black-text">
                            "Muy buen servicio. Siempre traigo a mis hijos a ésta clínica."
                            <em><b>Emily Blunt</b></em>
                          </p>
                          <div class="carousel-fixed-item center hide-on-small-and-down">
                            <a href="#" class="btn grey">Leer mas</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>


              </div>

            </div>
          </div>
        </div>
      </div>

    </section>
    <!--Fin de casos de Usuarios-->

    <!--Mapa de localización-->
    <section>
      <div class="row">
        <div class="col s12 m12 l12">
          <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d15089.802351366356!2d-98.20489475582863!3d18.999856526418203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sclinicas+odontologicas!5e0!3m2!1ses!2smx!4v1554803997560!5m2!1ses!2smx" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </section>
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

  <!--      MODALES - INICIO  (Esto se repite en varios archivos modificar) -->
  <div id="formulario-cita" class="modal" style=" max-height: 100%;">
    <div class="container">
      <div class="row">
        <h5 class="center-align">Llene los <span class="blue-text text-darken-1">Datos de la Cita</span></h5>
        <form id="formulario-cita-form" method="POST" action="server/operations/inserta-cita.php">
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
            <label for="email" data-error="Correo Inválido" data-success="Correcto">Email</label>
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
            <input id="hora" type="text" class="timepicker" name="hora" required>
            <label for="hora">Hora de la Cita</label>
          </div>

          <div class="input-field col s12">
            <textarea id="mensaje" class="materialize-textarea" name="mensaje"></textarea>
            <label for="mensaje">Escribenos un Mensaje</label>
          </div>
          <input type="hidden" name="action" value="submit" />
          <div class="center">
            <button class="btn waves-effect waves-light blue" type="submit">Enviar
              <i class="material-icons right">send</i>
            </button>
          </div>
          <!-- <input type="submit" class="btn waves-effect waves-light" name="submit" value="submit" /> -->
        </form>

      </div>
    </div>
  </div>
  <!--Inicio Chat integrado-->
  <script type="text/javascript">
    function add_chatinline() {
      var hccid = 89387459;
      var nt = document.createElement("script");
      nt.async = true;
      nt.src = "https://www.mylivechat.com/chatinline.aspx?hccid=" + hccid;
      var ct = document.getElementsByTagName("script")[0];
      ct.parentNode.insertBefore(nt, ct);
    }
    add_chatinline();
  </script>
  <!--fin del Chat integrado-->
  <!--Footer-->
  <?php require_once("includes/footer.php"); ?>
</body>

</html>