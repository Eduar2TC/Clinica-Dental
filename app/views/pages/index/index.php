<?php require_once HEADER ?>
<!--CUERPO -->

<body>
  <main>
    <!--Ofertas-->
    <section class="section grey lighten-4 center">
      <div class="container">
        <!-- Titulo seccion Ofertas -->
        <div class="encabezado-seccion">
          <h4 class="center-align">Ofertas</h4>
          <div class="underline"></div>
        </div>
        <div class="row renglon1 widget-list">

          <div class="col s12 m4 widget">
            <div class="card-panel z-depth-3">
              <div class="icon-block">
                <i class="far fa-surprise fa-3x blue-text deep-blue-text text-darken-2"></i>
                <h5 class="grey-text text-darken-4">¡Primera consulta gratuita!</h5>
                <p class="ligth">Servicio gratuito en tu primera visita, anímate a visitarnos <br><br></p>
              </div>
              <div class="waves">
                <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                  <path fill="#0099ff" fill-opacity="1" d="M0,256L1440,0L1440,320L0,320Z"></path>
                </svg>
              </div>
            </div>
          </div>

          <div class="col s12 m4 widget">
            <div class="card-panel z-depth-3">
              <div class="icon-block">
                <i class="fas fa-child fa-3x blue-text text-darken-3"></i>
                <h5 class="grey-text text-darken-4">Limpieza gratuita en niños</h5>
                <p class="ligth">Si ya eres cliente trae tus hijos y obten la limpieza gratuita de sus dientes</p>
              </div>
              <div class="waves">
                <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                  <path fill="#0099ff" fill-opacity="1" d="M0,0L1440,320L1440,320L0,320Z"></path>
                </svg>
              </div>
            </div>
          </div>

          <div class="col s12 m4 widget">
            <div class="card-panel z-depth-3">
              <div class="icon-block">
                <i class="fas fa-teeth fa-3x blue-text text-darken-3"></i>
                <h5 class="grey-text text-darken-4">15% de descuento en Ortodoncia</h5>
                <p class="ligth">Paga con 15% de descuento al iniciar tu tratamiento (Sólo este mes)</p>
              </div>
              <div class="waves">
                <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                  <path fill="#0099ff" fill-opacity="1" d="M0,256L120,224C240,192,480,128,720,128C960,128,1200,192,1320,224L1440,256L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
                </svg>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section>
    <!--Fin de Ofertas-->
    <!--Ventajas-->
    <section class="section section-ventajas grey lighten-4">
      <div class="background-section">
      </div>
      <div class="container">
        <!--Titulo de la seccion Ventajas -->
        <div class="row">
          <div class="col s12">
            <div class="encabezado-seccion">
              <h4 class="center-align">Ventajas</h4>
              <div class="underline"></div>
            </div>
          </div>
        </div>
        <div class="row valign-wrapper renglon2">
          <div class="col s12 m6">
            <h5 class="headline">Equipo de <span class="blue-text text-darken-1">alta tecnología</span></h5>
            <p class="flow-text tagline">Contamos con lo último en materiales para garantizar el mejor servicio y al mejor
              precio.</p>
          </div>
          <div class="background-col">
          </div>
          <div class="col s12 m6 punchline">
            <img src="<?php echo $data['PATH_IMG']; ?>michael-browning-40733-unsplash.jpg" class="circle responsive-img" alt="" />
          </div>

        </div>

        <div class="row valign-wrapper">

          <div class="col s12 m6 punchline">
            <img src="<?php echo $data['PATH_IMG']; ?>dental-checkup_4460x4460.jpg" class="circle responsive-img" alt="" />
          </div>
          <div class="col s12 m6">
            <h5 class="headline"><span class="blue-text text-darken-1">Tratamientos</span> personalizados</h5>
            <p class="flow-text tagline">Seguimiento y atención personalizada para su mejor comodidad.</p>
          </div>

        </div>

        <div class="row valign-wrapper renglon4">

          <div class="col s12 m6">
            <h5 class="headline">Servicio de <span class="blue-text text-darken-1">Calidad</span></h5>
            <p class="flow-text tagline">Personal especialistas capacitados para darte la mejor atención en cada visita.</p>
          </div>
          <div class="col s12 m6 punchline">
            <img src="<?php echo $data['PATH_IMG']; ?>ani-kolleshi-684082-unsplash.jpg" class="circle responsive-img" alt="" />
          </div>

        </div>

      </div>
    </section>
    <!--Fin de Ventajas-->

    <!--Casos de Usuarios-->
    <section class="section section-testimonial grey lighten-4">

      <div class="container">
        <!--Titulo de la seccion -->
        <div class="row">
          <div class="col s12">
            <div class="encabezado-seccion">
              <h4 class="center-align">Casos</h4>
              <div class="underline"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col s12">

            <div class="carousel carousel-slider carousel-casos center">

              <div class="carousel-item" href="#none!">

                <h2>Peridoncia y Limpieza dental</h2>
                <div class="row">

                  <div class="col s12 m6">
                    <div class="card-panel grey lighten-5 z-depth-1">
                      <div class="row valign-wrapper">
                        <div class="col s3 image-testimonial-container">
                          <img src="<?php echo $data['PATH_IMG']; ?>Tom_Cruise.jpg" alt="Tom-Cruise" class="circle responsive-img">
                          <!-- notice the "circle" class -->
                          <div class="blob-container">
                            <img src="<?php echo $data['PATH_IMG']; ?>blob-3.svg" alt="blob">
                          </div>

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

                  <div class="col s12 m6 hide-on-med-and-down">
                    <div class="card-panel grey lighten-5 z-depth-1">
                      <div class="row valign-wrapper">
                        <div class="col s3 image-testimonial-container">
                          <img src="<?php echo $data['PATH_IMG']; ?>messi.jpg" alt="Messi" class="circle responsive-img">
                          <!-- notice the "circle" class -->
                          <div class="blob-container">
                            <img src="<?php echo $data['PATH_IMG']; ?>blob-3.svg" alt="blob">
                          </div>
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

                <h2>Limpieza y Blanqueamiento</h2>
                <div class="row">

                  <div class="col s12 m6">
                    <div class="card-panel grey lighten-5 z-depth-1">
                      <div class="row valign-wrapper">
                        <div class="col s3 image-testimonial-container">
                          <img src="<?php echo $data['PATH_IMG']; ?>juan-lopez.jpg" alt="" class="circle responsive-img">
                          <!-- notice the "circle" class -->
                          <div class="blob-container">
                            <img src="<?php echo $data['PATH_IMG']; ?>blob-1.svg" alt="blob">
                          </div>
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

                  <div class="col s12 m6 hide-on-med-and-down">
                    <div class="card-panel grey lighten-5 z-depth-1">
                      <div class="row valign-wrapper">
                        <div class="col s3 image-testimonial-container">
                          <img src="<?php echo $data['PATH_IMG']; ?>martha.jpg" alt="" class="circle responsive-img">
                          <!-- notice the "circle" class -->
                          <div class="blob-container">
                            <img src="<?php echo $data['PATH_IMG']; ?>blob-1.svg" alt="blob">
                          </div>
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
                        <div class="col s3 image-testimonial-container">
                          <img src="<?php echo $data['PATH_IMG']; ?>caroline-buckey.jpg" alt="" class="circle responsive-img">
                          <!-- notice the "circle" class -->
                          <div class="blob-container">
                            <img src="<?php echo $data['PATH_IMG']; ?>blob-2.svg" alt="blob">
                          </div>
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

                  <div class="col s12 m6 hide-on-med-and-down">
                    <div class="card-panel grey lighten-5 z-depth-1">
                      <div class="row valign-wrapper">
                        <div class="col s3 image-testimonial-container">
                          <img src="<?php echo $data['PATH_IMG']; ?>Emily_Blunt_Hairstyle.jpg" alt="" class="circle responsive-img">
                          <!-- notice the "circle" class -->
                          <div class="blob-container">
                            <img src="<?php echo $data['PATH_IMG']; ?>blob-2.svg" alt="blob">
                          </div>
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
    <section class="section maps">
      <div class="row">
        <div class="col s12 m12 l12">
          <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d15089.802351366356!2d-98.20489475582863!3d18.999856526418203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sclinicas+odontologicas!5e0!3m2!1ses!2smx!4v1554803997560!5m2!1ses!2smx" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen>
          </iframe>
        </div>
      </div>
    </section>
  </main>
  <div class="svg-wave-container">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 200 1440 320">
      <path fill="#64B5F6 " fill-opacity="1" d="M0,224L1440,288L1440,320L0,320Z"></path>
    </svg>
  </div>
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
              <li><a class="grey-text text-lighten-3" href="main">Inicio</a></li>
              <li><a class="grey-text text-lighten-3" href="<?php echo URL_ROOT ?>/pages/tratamientos" class="link-footer">Tratamientos</a></li>
              <li><a class="grey-text text-lighten-3" href="<?php echo URL_ROOT ?>/pages/sucursales" class="link-footer">Clinicas</a></li>
              <li><a class="grey-text text-lighten-3" href="<?php echo URL_ROOT ?>/pages/promociones" class="link-footer">Promociones</a></li>
              <li><a class="grey-text text-lighten-3" href="<?php echo URL_ROOT ?>/pages/contacto" class="link-footer">Contacto</a></li>
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
        © 2021 Copyright Todos los derechos reservados
        <a class="grey-text text-lighten-4 right" href="#!">Mas links</a>
      </div>
    </div>
  </footer>
  <!--FIN DEL FOOTER-->

  <!--      MODALES - INICIO   -->
  <div id="formulario-cita" class="modal">
    <div class="container">
      <div class="row">
        <h5 class="center-align"><strong>Datos</strong> de la <span class="blue-text text-darken-1">Cita</span></h5>
        <div class="divider"></div>
        <form id="formulario-cita-form" method="POST" action="server/operations/inserta-cita.php">
          <div class="row">
            <div class="input-field col s12 m6 l6">
              <i class="material-icons prefix">account_circle</i>
              <input type="text" id="nombre" name="nombre" class="validate" required>
              <label for="nombre">Nombre</label>
            </div>
            <div class="input-field col s12 m6 l6">
              <i class="material-icons prefix">account_circle</i>
              <input type="text" id="paterno" name="paterno" class="validate" required>
              <label for="paterno">Paterno</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m6 l6">
              <i class="material-icons prefix">account_circle</i>
              <input type="text" id="materno" name="materno" class="validate" required>
              <label for="materno">Materno</label>
            </div>
            <div class="input-field col s12 m6 l6">
              <i class="material-icons prefix">account_circle</i>
              <input type="tel" id="telefonos" pattern='\d{3}[\-]\d{3}[\-]\d{4}' title='Formato de telefono: (Formato: 123-456-7890)' class="validate" name="telefono" required>
              <label for="telefonos" data-error="Telefono Inválido" data-success="Correcto">Telefono</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m6 l6">
              <i class="material-icons prefix">account_circle</i>
              <input type="email" id="email-2" name="email" class="validate" required>
              <label for="email-2" data-error="Correo Inválido" data-success="Correcto">Email</label>
            </div>
            <div class="input-field col s12 l6" required>
              <select class="icons" name="opciones-tratamientos" id="opciones-tratamientos">
                <option value="disabled selected">Selecciona un Tratamiento</option>
                <option value="Ortodoncia" data-icon="<?php echo $data['PATH_IMG']; ?>ortodoncia.svg">Ortodoncia</option>
                <option value="Peridoncia" data-icon="<?php echo $data['PATH_IMG']; ?>peridoncia.svg">Periodoncia</option>
                <option value="Endodoncia" data-icon="<?php echo $data['PATH_IMG']; ?>endodoncia.svg">Endodoncia</option>
                <option value="Cirujía dental" data-icon="<?php echo $data['PATH_IMG']; ?>cirujia.svg">Cirujía Dental</option>
                <option value="Estética dental" data-icon="<?php echo $data['PATH_IMG']; ?>estetica.svg">Estética Dental</option>
              </select>
              <label>Opciones de tratamientos</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 m6 l6">
              <input type="text" class="datepicker" id="fecha" name="fecha" required>
              <label for="fecha">Fecha de la Cita</label>
            </div>
            <div class="input-field col m6 l6">
              <input id="hora" type="text" class="timepicker" name="hora" required>
              <label for="hora">Hora de la Cita</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <textarea id="mensaje" class="materialize-textarea" name="mensaje"></textarea>
              <label for="mensaje">Escribenos un Mensaje</label>
            </div>
          </div>
          <input type="hidden" name="action" value="submit" />
          <div class="center">
            <button class="btn waves-effect waves-light blue z-depth-3" type="submit">Enviar
              <i class="material-icons right">send</i>
            </button>
          </div>
        </form>

      </div>
    </div>
  </div>
  <div class="fixed-action-btn vertical">
    <a class="btn-floating btn-large btn tooltipped  blue-grey darken-4" data-position="left" data-tooltip="Redes sociales">
      <i class="fa fa-globe"></i>
    </a>
    <ul>
      <li><a target="_blank" href="https://www.facebook.com/" class="btn-floating  blue darken-4"><i class="fab fa-facebook-f"></i></a></li>
      <li><a target="_blank" href="https://twitter.com/" class="btn-floating cyan lighten-1"><i class="fab fa-twitter"></i></a></li>
      <li><a class="btn-floating grey darken-3"> <i class="fab fa-github"></i></a></li>
      <li><a target="_blank" href="https://www.linkedin.com/" class="btn-floating blue-grey lighten-1"><i class="fab fa-linkedin"></i></a></li>
    </ul>
  </div>
  <!--Footer-->
  <?php require_once FOOTER; ?>
</body>

</html>