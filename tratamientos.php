  <?php
    $tituloPagina = "Clinica-Tratamientos"; //Nombre de la página 
    $path_logo = "img/";
    $path_css = "css/";
    $path_js = "js/";
    $status_page = "tratamientos";
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
                          <div class="input-field col s12">
                              <button id="login" type="submit" name="login" value="accesando" class=" col s12 btn waves-effect waves-light btn-small blue right">Acceder
                                  <i class="fas fa-sign-in-alt"></i>
                          </div>
                      </div>
                      <div class="row contrasenia-olvidada">
                          <div class="input-field col s12 m12 l12">
                              <p class="margin center-align medium-small"><a href="#">¿Contraseña olvidada?</a></p>
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
      <!--INICIO CUERPO-->
      <main>
          <!--Tratamietos-->
          <div class="row grey lighten-4">
              <div class="container">
                  <div class="parallax-container center valign-wrapper">
                      <div class="parallax">
                          <img class="responsive-img" src="img/chair-1920.jpg">
                          <div class="container">
                              <div class="row">
                                  <div class="col s12">
                                      <h1 class="center blue-text text-darken-4">Tratamientos</h1>
                                      <span class="blue-text text-darken-3">Conoce los tratamientos que ofrecemos</span>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <section class="section section-tratamientos grey lighten-4" id="seccion-tratamientos">
              <div class="container">

                  <div class="row">
                      <div class="col s12 m4">
                          <div class="card card-resize-height">
                              <div class="card-image">
                                  <img src="img/rainier-ridao-720108-unsplash.jpg">
                                  <span class="card-title">Ortodoncista</span>
                                  <a href="#servicio1" class="btn-floating halfway-fab waves-effect waves-light blue modal-trigger"><i class="material-icons">add</i></a>
                              </div>
                              <div class="card-content">
                                  <p id="saludo">¡Hola mi nombre es Julia!"</p>
                              </div>
                          </div>
                      </div>
                      <div class="col s12 m8">
                          <div class="card-panel hoverable blue darken-3 card-resize-height">
                              <h5 class="white-text">Ortodoncia</h5>
                              <span class="white-text valign-wrapper" id="parrafo">
                                  La ortodoncia es la especialidad odontológica que se especializa en el
                                  tratamiento
                                  de las alteraciones del desarrollo dental​, trabajando entorno a tres áreas, el
                                  diagnóstico​, la prevención y el tratamiento​, para corregir la posición de los
                                  dientes y mandíbula​.
                                  <div id="boton-dentro-del-parrafo">
                                      <a class="left-align botonMasInformacion btn-flat waves-effect waves-yellow" id="expandir-tratamiento-one">Mas
                                          informacion...</a>
                                  </div>
                              </span>
                              <div class="right-align">
                                  <a href="#formulario-cita" class="waves-effect waves-light btn blue modal-trigger">Reservar
                                      cita</a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <ul class="collapsible colapsoTratamiento" id="colapso-tratamiento-one" data-collapsible="accordion">
                      <li>
                          <div class="collapsible-header" style="display: none;">
                          </div>
                          <div class="collapsible-body">
                              <div class="row">
                                  <div class="col m6 s12 l4">
                                      <h5>¿Qué es la ortodoncia?</h5>
                                  </div>
                                  <div class="col m6 s12 l8">
                                      El tratamiento de ortodoncia no se utiliza únicamente por motivos estéticos sino que también repercute en la salud bucodental​, los dientes encimados y chuecos son más propensos a sufrir caries y enfermedades de las encías debido a que son más difíciles de limpiar.

                                      Gracias a la ortodoncia tendrá una sonrisa perfecta y envidiable​, además de mejorar su salud bucodental.

                                      En Dentimex podemos ofrecerle desde la solución tradicional de ortodoncia metálica básica hasta los últimos tratamientos de ortodoncia estética, con la que apenas nadie percibirá que la lleva.
                                  </div>

                              </div>
                              <div class="row">
                                  <div class="col m6 s12 l4">
                                      <h5>Brackets metálicos​</h5>
                                  </div>
                                  <div class="col m6 s12 l8">
                                      <br>
                                      Los brackets metálicos son la opción de tratamiento más rápido y eficaz​, aunque no el más estético. Este tipo de ortodoncia ha sido la más aplicada durante años debido a su bajo costo en comparación con otras técnicas​, además, los brackets metálicos, también conocidos como brackets fijos, son los más utilizados debido a su versatilidad.
                                  </div>

                              </div>
                              <div class="row">
                                  <div class="col m6 s12 l4">
                                      <h5>Brackets de Zafiro</h5>
                                  </div>
                                  <div class="col m6 s12 l8">
                                      <br>
                                      Los brackets de zafiro ofrecen óptimos resultados, ya que no solo son totalmente transparentes sino que además proporcionan los mismos beneficios que los brackets tradicionales.

                                      Si buscas un tratamiento de ortodoncia con un acabado natural y discreto, los brackets de zafiro son tu mejor opción, ya que al estar elaborados con zafiro monocristalino puro, son prácticamente invisibles y ayudan a mantener su dentadura impecable.
                                  </div>

                              </div>
                          </div>
                      </li>
                  </ul>
                  <div class="row renglon-ajustar">
                      <div class="col s12 m8 col-one">
                          <div class="card-panel hoverable blue darken-3 card-resize-height">
                              <h5 class="white-text">Peridoncia</h5>

                              <span class="white-text valign-wrapper" id="parrafo">
                                  La falta de higiene bucal puede provocar enfermedades.
                                  En nuestra Clínica
                                  ratamos y
                                  solucionamos estos problemas para mantener la salud de sus dientes. No descuide
                                  su
                                  sonrisa y venga a visitarnos, podemos ayudarle.
                                  <div id="boton-dentro-del-parrafo">
                                      <a class="left-align botonMasInformacion btn-flat waves-effect waves-yellow" id="expandir-tratamiento-two">Mas
                                          informacion...</a>
                                  </div>
                              </span>
                              <div class="right-align">
                                  <a href="#formulario-cita" class="waves-effect waves-light btn blue modal-trigger">Reservar
                                      cita</a>
                              </div>
                          </div>
                      </div>
                      <div class="col s12 m4 col-two">
                          <div class="card card-resize-height">
                              <div class="card-image">
                                  <img src="img/dentist-in-office_4460x4460.jpg">
                                  <span class="card-title">Peridontista</span>
                                  <a href="#servicio2" class="btn-floating halfway-fab waves-effect waves-light blue modal-trigger"><i class="material-icons">add</i></a>
                              </div>
                              <div class="card-content">
                                  <p id="saludo">"Que tal. Soy el dr. Francisco"</p>
                              </div>
                          </div>
                      </div>
                  </div>
                  <ul class="collapsible colapsoTratamiento" id="colapso-tratamiento-two" data-collapsible="accordion">
                      <li>
                          <div class="collapsible-header" style="display: none;">
                          </div>
                          <div class="collapsible-body">
                              <div class="row">
                                  <div class="col m6 s12">
                                      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id at beatae voluptatum laboriosam
                                      molestias quam provident ex, aperiam quos dolore repudiandae distinctio, quidem dolor? Perferendis
                                      earum sint accusantium cumque esse!
                                  </div>
                                  <div class="col m6 s12">
                                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, dolore, odio quaerat odit nemo
                                      quidem inventore id ad placeat nulla explicabo expedita iure? Cumque at ullam nobis beatae
                                      necessitatibus nemo!
                                  </div>
                              </div>
                          </div>
                      </li>
                  </ul>
                  <div class="row">
                      <div class="col s12 m4">
                          <div class="card card-resize-height">
                              <div class="card-image">
                                  <img class="circle" src="img/woman-doctor-with-gloves_4460x4460.jpg">
                                  <span class="card-title">Endodoncista</span>
                                  <a href="#servicio1" class="btn-floating halfway-fab waves-effect waves-light blue modal-trigger"><i class="material-icons">add</i></a>
                              </div>
                              <div class="card-content">
                                  <p id="saludo">"Hola, soy la Dr. Maria"</p>
                              </div>
                          </div>
                      </div>
                      <div class="col s12 m8">
                          <div class="card-panel hoverable blue darken-3 card-resize-height">
                              <h5 class="white-text">Endodoncia</h5>
                              <span class="white-text valign-wrapper" id="parrafo">
                                  La endodoncia es la solución inmediata y definitiva ante las molestias
                                  dolorosas provocadas por la afectación del nervio. Acuda a cualquier clínica
                                  dental Dentimex y no pierda su pieza dental. Conservará la apariencia de su
                                  dentadura mientras que el dolor desaparece por completo.
                                  <div id="boton-dentro-del-parrafo">
                                      <a class="left-align botonMasInformacion btn-flat waves-effect waves-yellow" id="expandir-tratamiento-tree">Mas
                                          informacion...</a>
                                  </div>
                              </span>

                              <div class="right-align">
                                  <a href="#formulario-cita" class="waves-effect waves-light btn blue modal-trigger">Reservar
                                      cita</a>
                              </div>
                          </div>
                      </div>

                  </div>
                  <ul class="collapsible colapsoTratamiento" id="colapso-tratamiento-tree" data-collapsible="accordion">
                      <li>
                          <div class="collapsible-header" style="display: none;">
                          </div>
                          <div class="collapsible-body">
                              <div class="row">
                                  <div class="col m6 s12">
                                      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id at beatae voluptatum laboriosam molestias quam provident ex, aperiam quos dolore repudiandae distinctio, quidem dolor? Perferendis earum sint accusantium cumque esse!
                                  </div>
                                  <div class="col m6 s12">
                                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, dolore, odio quaerat odit nemo quidem inventore id ad placeat nulla explicabo expedita iure? Cumque at ullam nobis beatae necessitatibus nemo!
                                  </div>
                              </div>
                          </div>
                      </li>
                  </ul>
                  <div class="row renglon-ajustar">
                      <div class="col s12 m8 col-one">
                          <div class="card-panel hoverable blue darken-3 card-resize-height">
                              <h5 class="white-text">Estetica Dental</h5>
                              <span class="white-text valign-wrapper" id="parrafo">
                                  La endodoncia es la solución inmediata y definitiva ante las molestias
                                  dolorosas provocadas por la afectación del nervio. Acuda a cualquier
                                  clínica
                                  dental Dentimex y no pierda su pieza dental. Conservará la apariencia de su
                                  dentadura mientras que el dolor desaparece por completo.
                                  <div id="boton-dentro-del-parrafo">
                                      <a class="left-align botonMasInformacion btn-flat waves-effect waves-yellow" id="expandir-tratamiento-for">Mas
                                          informacion...</a>
                                  </div>
                              </span>
                              <div class="right-align">
                                  <a href="#formulario-cita" class="waves-effect waves-light btn blue modal-trigger">Reservar
                                      cita</a>
                              </div>
                          </div>
                      </div>
                      <div class="col s12 m4 col-two">
                          <div class="card card-resize-height">
                              <div class="card-image">
                                  <img class="circle" src="img/female-dentist-at-work_4460x4460.jpg">
                                  <span class="card-title">Especialista en Etética Dental</span>
                                  <a href="#servicio1" class="btn-floating halfway-fab waves-effect waves-light blue modal-trigger"><i class="material-icons">add</i></a>
                              </div>
                              <div class="card-content">
                                  <p id="saludo">"Hola soy Carme. Un placer ayudarle"</p>
                              </div>
                          </div>
                      </div>
                  </div>
                  <ul class="collapsible colapsoTratamiento" id="colapso-tratamiento-for" data-collapsible="accordion">
                      <li>
                          <div class="collapsible-header" style="display: none;">
                          </div>
                          <div class="collapsible-body">
                              <div class="row">
                                  <div class="col m6 s12">
                                      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id at beatae voluptatum laboriosam
                                      molestias quam provident ex, aperiam quos dolore repudiandae distinctio, quidem dolor? Perferendis
                                      earum sint accusantium cumque esse!
                                  </div>
                                  <div class="col m6 s12">
                                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, dolore, odio quaerat odit nemo
                                      quidem inventore id ad placeat nulla explicabo expedita iure? Cumque at ullam nobis beatae
                                      necessitatibus nemo!
                                  </div>
                              </div>
                          </div>
                      </li>
                  </ul>
                  <div class="row">
                      <div class="col s12 m4">
                          <div class="card card-resize-height">
                              <div class="card-image">
                                  <img src="img/doctor-1.jpg">
                                  <span class="card-title">Cirujano Dental</span>
                                  <a href="#servicio2" class="btn-floating halfway-fab waves-effect waves-light blue modal-trigger"><i class="material-icons">add</i></a>
                              </div>
                              <div class="card-content">
                                  <p id="saludo">"Hola, soy Pedro Ramos"</p>
                              </div>
                          </div>
                      </div>
                      <div class="col s12 m8">
                          <div class="card-panel hoverable blue darken-3 card-resize-height">
                              <h5 class="white-text">Cirujía Dental</h5>

                              <span class="white-text valign-wrapper" id="parrafo">
                                  Implante dental, es un producto sanitario destinado a ser el sustituto
                                  artificial de la raíz de un diente perdido. Habitualmente tiene forma
                                  roscada y
                                  está fabricado con materiales biocompatibles que no producen reacción de
                                  rechazo y permiten su unión al hueso. La superficie del implante puede
                                  presentar diferentes texturas y recubrimientos, utilizadas habitualmente
                                  para
                                  aumentar su adhesión al hueso (osteointegración si es de titanio y
                                  biointegración si se trata de un material cerámico).
                                  <div id="boton-dentro-del-parrafo">
                                      <a class="left-align botonMasInformacion btn-flat waves-effect waves-yellow" id="expandir-tratamiento-five">Mas
                                          informacion...</a>
                                  </div>
                              </span>

                              <div class="right-align">
                                  <a href="#formulario-cita" class="waves-effect waves-light btn blue modal-trigger">Reservar
                                      cita</a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <ul class="collapsible colapsoTratamiento" id="colapso-tratamiento-five" data-collapsible="accordion">
                      <li>
                          <div class="collapsible-header" style="display: none;">
                          </div>
                          <div class="collapsible-body">
                              <div class="row">
                                  <div class="col m6 s12">
                                      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id at beatae voluptatum laboriosam
                                      molestias quam provident ex, aperiam quos dolore repudiandae distinctio, quidem dolor? Perferendis
                                      earum sint accusantium cumque esse!
                                  </div>
                                  <div class="col m6 s12">
                                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, dolore, odio quaerat odit nemo
                                      quidem inventore id ad placeat nulla explicabo expedita iure? Cumque at ullam nobis beatae
                                      necessitatibus nemo!
                                  </div>
                              </div>
                          </div>
                      </li>
                  </ul>

              </div>
          </section>
          <!--Fin tratamientos-->
          <!---Anuncio llamar-->
          <div class="section section-llamar grey lighten-4">
              <div class="container blue accent-1">
                  <div class="row">
                      <div class="col s12 m12 l12 center">
                          <h5 class="white-text text-darken-4">Tu salud dental es lo más importante para nosotros.
                              Contamos con dentistas para adultos y niños en nuestras sucursales</h5>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col s12 m12 l12 center" id="boton-llamada">
                          <a href="tel:2228530500" class="white waves-effect waves-yellow btn"><span class="blue-text text-darken-4">Llamar</span></a>
                      </div>
                  </div>
              </div>
          </div>
      </main>
      <!--FIN DEL CUERPO-->

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
      <!--                    ->  MODALES   <-               -->
      <div id="servicio1" class="modal modal-fixed-footer">
          <div class="modal-content">
              <h5 class="center">Hola, mi nombre es Julia y soy especialista en Ortodoncia </h5>
              <img src="img/rainier-ridao-720108-unsplash.jpg" alt="" class="responsive-img" />
              <span class="flow-text">Soy especialista en Ortodocia, agenda tu cita para poder llevar a cabo un
                  pre-análisis. Y Obtener la
                  valoración de tu condición médica para así poder planear tu tratamiento.</span>
          </div>
          <div class="modal-footer">
              <a href="#!" class="modal-close waves-effect waves-blue btn-flat">Bien</a>
          </div>
      </div>

      <div id="servicio2" class="modal modal-fixed-footer">
          <div class="modal-content">
              <h5 class="center">Hola, mi nombre es Pedro Ramos, especialista en Peridoncia </h5>
              <img src="img/Periodoncia.jpg" alt="" class="responsive-img" />
              <span class="flow-text">Ven y te atendemos si sufres de Gengivitis, Placa y problemas derivados de ésta.</span>
          </div>
          <div class="modal-footer">
              <a href="#!" class="modal-close waves-effect waves-blue btn-flat">Bien</a>
          </div>
      </div>
      <!--Modal Formulario-citas-->
      <div id="formulario-cita" class="modal" style=" max-height: 100%;">
          <div class="container">
              <div class="row">
                  <h5 class="center-align">Llene los <span class="blue-text text-darken-1">Datos de la Cita</span></h5>
                  <form method="POST" action="server/operations/inserta-cita.php">
                      <div class="input-field col s12 l6">
                          <input type="text" id="nombre" class="validate" name="nombre">
                          <label for="nombre">Nombre</label>
                      </div>
                      <div class="input-field col s12 l6">
                          <input type="text" id="paterno" class="validate" name="paterno">
                          <label for="paterno">Paterno</label>
                      </div>
                      <div class="input-field col s12 l6">
                          <input type="text" id="materno" class="validate" name="materno">
                          <label for="materno">Materno</label>
                      </div>
                      <div class="input-field col s12 l6">
                          <input type="email" id="email-2" class="validate" name="email">
                          <label for="email" data-error="Correo Inválido" data-success="Correcto">Email</label>
                      </div>

                      <div class="input-field col s12 l6">
                          <input type="tel" pattern='\d{3}[\-]\d{3}[\-]\d{4}' title='Formato de telefono: (Formato: 123-456-7890)' id="telefono" class="validate" name="telefono">
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
                          <input type="text" class="datepicker" id="fecha" name="fecha">
                          <label for="fecha">Fecha de la Cita</label>
                      </div>

                      <div class="input-field col 12 l6" id="hora">
                          <input type="text" class="timepicker" name="hora">
                          <label for="hora">Hora de la Cita</label>
                      </div>

                      <div class="input-field col s12">
                          <textarea id="mensaje" class="materialize-textarea" name="mensaje"></textarea>
                          <label for="mensaje">Escribenos un Mensaje</label>
                      </div>

                      <button class="btn waves-effect waves-light blue" type="submit" name="submit" value="submit">Enviar
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