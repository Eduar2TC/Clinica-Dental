  <?php
    $tituloPagina = "Clinica-Tratamientos"; //Nombre de la página 
    $PATH_IMG = URL_ROOT . '/public/img/';
    $PATH_CSS = URL_ROOT . '/public/css/';
    $PATH_JS = URL_ROOT . '/public/js/';
    $status_page = "tratamientos";
    ?>
  <?php require_once HEADER; ?>
  <!--CUERPO-->
  <body>
      <!-- ESTADO DE LA NAVEGACIÓN -->
      <div class="row navegacion-estado grey lighten-4">
          <div class="container">
              <nav>
                  <div class="nav-wrapper  light-blue lighten-2">
                      <div class="col s12">
                          <a href="#!" class="breadcrumb">Inicio</a>
                          <a href="#!" class="breadcrumb">Tratamientos</a>
                      </div>
                  </div>
              </nav>
          </div>
      </div>
      <!--INICIO CUERPO-->
      <main>
          <!--Tratamietos-->
          <div class="row grey lighten-4">
              <div class="container">
                  <div class="parallax-container center valign-wrapper">
                      <div class="parallax">
                          <img class="responsive-img" src="<?php echo $data['PATH_IMG'] ?>doctores.png">
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
                      <div class="col s12 m4 carousel-medical">
                          <!-- inicio Slides of cards -->
                          <div class="carousel carousel-slider" data-indicators="true">
                              <div class="carousel-fixed-item center middle-indicator">
                                  <div class="left">
                                      <a href="Previo" class="movePrevCarousel middle-indicator-text waves-effect waves-light content-indicator"><i class="material-icons left  middle-indicator-text">chevron_left</i></a>
                                  </div>

                                  <div class="right">
                                      <a href="Siguiente" class=" moveNextCarousel middle-indicator-text waves-effect waves-light content-indicator"><i class="material-icons right middle-indicator-text">chevron_right</i></a>
                                  </div>
                              </div>
                              <div class="carousel-item" href="#one!">
                                  <div class="card card-resize-height">
                                      <div class="card-image">
                                          <img src="<?php echo $data['PATH_IMG']; ?>rainier-ridao-cscGEQgrhMY-unsplash.jpg">
                                          <span class="card-title">Ortodoncista</span>
                                          <div class="fixed-action-btn horizontal click-to-toggle">
                                              <a class="btn-floating red">
                                                  <i class="material-icons">menu</i>
                                              </a>
                                              <ul>
                                                  <li><a class="btn-floating btn-small red"><i class="material-icons">insert_chart</i></a></li>
                                                  <li><a class="btn-floating btn-small yellow darken-1"><i class="material-icons">format_quote</i></a></li>
                                                  <li><a class="btn-floating btn-small green"><i class="material-icons">publish</i></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="card-content">
                                          <p id="saludo">¡Hola mi nombre es Julia!"</p>
                                          <p class="center">
                                              <span>
                                                  <i class="material-icons yellow-text text-accent-4">star</i>
                                                  <i class="material-icons yellow-text text-accent-4">star</i>
                                                  <i class="material-icons yellow-text text-accent-4">star</i>
                                                  <i class="material-icons yellow-text text-accent-4">star</i>
                                                  <i class="material-icons yellow-text text-accent-4">star_border</i>
                                                  <span class="rating">(10)</span>
                                              </span>
                                          </p>
                                      </div>
                                  </div>
                              </div>
                              <div class="carousel-item" href="#two!">
                                  <div class="card card-resize-height">
                                      <div class="card-image">
                                          <img src="<?php echo $data['PATH_IMG']; ?>rainier-ridao-cscGEQgrhMY-unsplash.jpg">
                                          <span class="card-title">Ortodoncista</span>
                                          <a href="#servicio1" class="btn-floating halfway-fab waves-effect waves-light blue modal-trigger"><i class="material-icons">add</i></a>
                                          <a href="#servicio1" class="btn-floating halfway-fab waves-effect waves-light blue modal-trigger"><i class="material-icons">date_range</i></a>
                                      </div>
                                      <div class="card-content">
                                          <p id="saludo">¡Hola mi nombre es Julia!"</p>
                                      </div>
                                  </div>
                              </div>
                              <div class="carousel-item" href="#three!">
                                  <div class="card card-resize-height">
                                      <div class="card-image">
                                          <img src="<?php echo $data['PATH_IMG']; ?>rainier-ridao-cscGEQgrhMY-unsplash.jpg">
                                          <span class="card-title">Ortodoncista</span>
                                          <a href="#servicio1" class="btn-floating halfway-fab waves-effect waves-light blue modal-trigger"><i class="material-icons">add</i></a>
                                          <a href="#servicio1" class="btn-floating halfway-fab waves-effect waves-light blue modal-trigger"><i class="material-icons">date_range</i></a>
                                      </div>
                                      <div class="card-content">
                                          <p id="saludo">¡Hola mi nombre es Julia!"</p>
                                      </div>
                                  </div>
                              </div>
                              <div class="carousel-item" href="#four!">
                                  <div class="card card-resize-height">
                                      <div class="card-image">
                                          <img src="<?php echo $data['PATH_IMG']; ?>rainier-ridao-cscGEQgrhMY-unsplash.jpg">
                                          <span class="card-title">Ortodoncista</span>
                                          <a href="#servicio1" class="btn-floating halfway-fab waves-effect waves-light blue modal-trigger"><i class="material-icons">add</i></a>
                                          <a href="#servicio1" class="btn-floating halfway-fab waves-effect waves-light blue modal-trigger"><i class="material-icons">date_range</i></a>
                                      </div>
                                      <div class="card-content">
                                          <p id="saludo">¡Hola mi nombre es Julia!"</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- fin Slides of cards -->
                      </div>
                      <div class="col s12 m8 ortodoncia">
                          <div class="card-panel hoverable blue darken-3 card-resize-height ">
                              <h5 class="white-text">Ortodoncia</h5>
                              <span class="white-text valign-wrapper" id="parrafo">
                                  <i class="material-icons quotes">format_quote</i>La ortodoncia es la especialidad odontológica que se especializa en el
                                  tratamiento
                                  de las alteraciones del desarrollo dental​, trabajando entorno a tres áreas, el
                                  diagnóstico​, la prevención y el tratamiento​, para corregir la posición de los
                                  dientes y mandíbula​.
                                  <div id="boton-dentro-del-parrafo">
                                      <a class="left-align botonMasInformacion btn-flat waves-effect waves-yellow" id="link-expandir-tratamiento-one">Mas
                                          informacion...</a>
                                  </div>
                              </span>
                              <div class="card-action right-align">
                                  <a href="#formulario-cita" class="waves-effect waves-light btn blue modal-trigger">Reservar
                                      cita</a>
                              </div>
                              <div class="boton-fijo">
                                  <!--                                   <a href="#formulario-cita" class="waves-effect waves-light btn blue modal-trigger">Reservar
                                      cita</a> -->
                                  <div class="fixed-action-btn horizontal click-to-toggle">
                                      <a class="btn-floating pulse red">
                                          <i class="material-icons">menu</i>
                                      </a>
                                      <ul>
                                          <li><a class="btn-floating btn-small pulse blue accent-1 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Agendar a Calendario"><i class="material-icons">today</i></a></li>
                                          <li><a class="btn-floating btn-small pulse light-blue lighten-5 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Llamar"><i class="material-icons light-blue-text text-darken-4">call</i></a></li>
                                          <li><a class="btn-floating btn-small green tooltipped" data-position="bottom" data-delay="50" data-tooltip="Medicos"><i class='fas fa-user-md'></i></a></li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <ul class="collapsible colapsoTratamiento" id="colapso-tratamiento-one">
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
                                      <i class="material-icons quotes">format_quote</i>
                                  </div>
                                  <div class="col s12 right-align">
                                      <div class="chip chip-autor">
                                          <img src="<?php echo $data['PATH_IMG']; ?>rainier-ridao-720108-unsplash.jpg" alt="Contact Person">
                                          Dra. Julia
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>
                  </ul>
                  <div class="row renglon-ajustar">
                      <div class="col s12 m8 col-one peridoncia">
                          <div class="card-panel hoverable blue darken-3 card-resize-height">
                              <div class="card-content">
                                  <h5 class="card-title white-text">Peridoncia</h5>
                                  <p class="white-text valign-wrapper" id="parrafo">
                                      La falta de higiene bucal puede provocar enfermedades.
                                      En nuestra Clínica
                                      ratamos y
                                      solucionamos estos problemas para mantener la salud de sus dientes. No descuide
                                      su
                                      sonrisa y venga a visitarnos, podemos ayudarle.
                                  <div id="boton-dentro-del-parrafo">
                                      <a class="left-align botonMasInformacion btn-flat waves-effect waves-yellow" id="link-expandir-tratamiento-two">Mas
                                          informacion...</a>
                                  </div>
                                  </p>
                              </div>
                              <div class="card-action right-align">
                                  <a href="#formulario-cita" class="waves-effect waves-light btn blue modal-trigger">Reservar
                                      cita</a>
                              </div>
                          </div>
                      </div>
                      <div class="col s12 m4 col-two">
                          <div class="card card-resize-height">
                              <div class="card-image">
                                  <img src="<?php echo $data['PATH_IMG']; ?>dentist-in-office_4460x4460.jpg">
                                  <span class="card-title">Peridontista</span>
                                  <a href="#servicio2" class="btn-floating halfway-fab waves-effect waves-light blue modal-trigger"><i class="material-icons">add</i></a>
                              </div>
                              <div class="card-content">
                                  <p id="saludo">"Que tal. Soy el dr. Francisco"</p>
                              </div>
                          </div>
                      </div>
                  </div>
                  <ul class="collapsible colapsoTratamiento" id="colapso-tratamiento-two">
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
                                  <img class="circle" src="<?php echo $data['PATH_IMG']; ?>woman-doctor-with-gloves_4460x4460.jpg">
                                  <span class="card-title">Endodoncista</span>
                                  <a href="#servicio1" class="btn-floating halfway-fab waves-effect waves-light blue modal-trigger"><i class="material-icons">add</i></a>
                              </div>
                              <div class="card-content">
                                  <p id="saludo">"Hola, soy la Dr. Maria"</p>
                              </div>
                          </div>
                      </div>
                      <div class="col s12 m8 endodoncia">
                          <div class="card-panel hoverable blue darken-3 card-resize-height">
                              <h5 class="white-text">Endodoncia</h5>
                              <span class="white-text valign-wrapper" id="parrafo">
                                  La endodoncia es la solución inmediata y definitiva ante las molestias
                                  dolorosas provocadas por la afectación del nervio. Acuda a cualquier clínica
                                  dental Dentimex y no pierda su pieza dental. Conservará la apariencia de su
                                  dentadura mientras que el dolor desaparece por completo.
                                  <div id="boton-dentro-del-parrafo">
                                      <a class="left-align botonMasInformacion btn-flat waves-effect waves-yellow" id="link-expandir-tratamiento-tree">Mas
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
                  <ul class="collapsible colapsoTratamiento" id="colapso-tratamiento-tree">
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
                      <div class="col s12 m8 col-one estetica-dental">
                          <div class="card-panel hoverable blue darken-3 card-resize-height">
                              <div class="card-content">
                                  <h5 class="card-title white-text">Estetica Dental</h5>
                                  <p class="white-text valign-wrapper" id="parrafo">
                                      La endodoncia es la solución inmediata y definitiva ante las molestias
                                      dolorosas provocadas por la afectación del nervio. Acuda a cualquier
                                      clínica
                                      dental Dentimex y no pierda su pieza dental. Conservará la apariencia de su
                                      dentadura mientras que el dolor desaparece por completo.
                                  <div id="boton-dentro-del-parrafo">
                                      <a class="left-align botonMasInformacion btn-flat waves-effect waves-yellow" id="link-expandir-tratamiento-four">Mas
                                          informacion...</a>
                                  </div>
                                  </p>
                              </div>
                              <div class="card-action right-align">
                                  <a href="#formulario-cita" class="waves-effect waves-light btn blue modal-trigger">Reservar
                                      cita</a>
                              </div>
                          </div>
                      </div>
                      <div class="col s12 m4 col-two">
                          <div class="card card-resize-height">
                              <div class="card-image">
                                  <img class="circle" src="<?php echo $data['PATH_IMG']; ?>female-dentist-at-work_4460x4460.jpg">
                                  <span class="card-title">Especialista en Etética Dental</span>
                                  <a href="#servicio1" class="btn-floating halfway-fab waves-effect waves-light blue modal-trigger"><i class="material-icons">add</i></a>
                              </div>
                              <div class="card-content">
                                  <p id="saludo">"Hola soy Carme. Un placer ayudarle"</p>
                              </div>
                          </div>
                      </div>
                  </div>
                  <ul class="collapsible colapsoTratamiento" id="colapso-tratamiento-four">
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
                      <div class="col s12 m4 cirujia">
                          <div class="card card-resize-height">
                              <div class="card-image">
                                  <img src="<?php echo $data['PATH_IMG']; ?>doctor-1.jpg">
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
                                      <a class="left-align botonMasInformacion btn-flat waves-effect waves-yellow" id="link-expandir-tratamiento-five">Mas
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
                  <ul class="collapsible colapsoTratamiento" id="colapso-tratamiento-five">
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
          <!--Paginacion -->
          <div class="section paginacion-llamar grey lighten-4">
              <div class="container">
                  <div class="center">
                      <ul class="pagination">
                          <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                          <li class="active"><a href="#!">1</a></li>
                          <li class="waves-effect"><a href="#!">2</a></li>
                          <li class="waves-effect"><a href="#!">3</a></li>
                          <li class="waves-effect"><a href="#!">4</a></li>
                          <li class="waves-effect"><a href="#!">5</a></li>
                          <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
                      </ul>
                  </div>
              </div>
          </div>
          <!---Anuncio llamar-->
          <div class="section section-llamar grey lighten-4">
              <div class="container">
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
                              <li><a class="grey-text text-lighten-3" href="<?php echo URL_ROOT ?>">Inicio</a></li>
                              <li><a class="grey-text text-lighten-3" href="<?php echo URL_ROOT ?>/pages/tratamientos" class="link-footer">Tratamientos</a></li>
                              <li><a class="grey-text text-lighten-3" href="<?php echo URL_ROOT ?>/pages/sucursales" class="link-footer">Clinicas</a></li>
                              <li><a class="grey-text text-lighten-3" href="<?php echo URL_ROOT ?>/pages/promociones" class="link-footer">Promociones</a></li>
                              <li><a class="grey-text text-lighten-3" href="<?php echo URL_ROOT ?>/pages/contacto" class="link-footer">Contacto</a></li>
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
                  © 20xx Copyright Todos los derechos reservados
                  <a class="grey-text text-lighten-4 right" href="#!">Mas links</a>
              </div>
          </div>
      </footer>
      <!--FIN DEL FOOTER-->
      <!--                    ->  MODALES   <-               -->
      <div id="servicio1" class="modal modal-fixed-footer">
          <div class="modal-content">
              <div class="center">
                  <h3>Detalles</h3>
              </div>
              <div class="col s12 m8 offset-m2 l6 offset-l3">
                  <div class="card-panel grey lighten-5 z-depth-1">
                      <div class="row valign-warapper equal">
                          <div class="col s12 m4 imagen-mas-datos blue lighten-5 hoverable">
                              <div class="row profile-header"></div>
                              <div class="image-profile center">
                                  <img src="<?php echo $data['PATH_IMG']; ?>rainier-ridao-720108-unsplash.jpg" alt="" class="circle responsive-img" />
                              </div>
                              <div class="datos-personales center">
                                  <ul>
                                      <li>
                                          <p class="nombre-medico">Nombre: <span>Julia</span> García</p>
                                      </li>
                                      <li>
                                          <p class="especialidad">Especialidad: <span>Ortodoncia</span></p>
                                      </li>
                                      <li>
                                          <p class="formacion">Formación: <span>BUAP</span></p>
                                      </li>
                                  </ul>
                              </div>
                              <div class="center redes-sociales">
                                  <a href="#"><i class="fa fa-at"></i></a>
                                  <a href="#"><i class="fa fa-phone"></i></a>
                                  <a href="#"><i class="fab fa-linkedin-in"></i></a>
                              </div>
                          </div>
                          <div class="col skills s12 m8">
                              <div class="row valign-warapper equal">
                                  <div class="col s12 m6">
                                      <div class="card blue lighten-5 hoverable">
                                          <div class="card-content">
                                              <div class="card-title educacion">
                                                  <span>Educación</span>
                                              </div>
                                              <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam praesentium laudantium iusto sint vel quisquam, facilis accusantium numquam neque explicabo rerum perferendis dolorum porro, reiciendis ab quibusdam, error voluptatibus architecto!</p>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col s12 m6">
                                      <div class="card blue lighten-5 hoverable">
                                          <div class="card-content">
                                              <div class="card-title experiencia"><span class="flow-text">Experiencia laboral</span></div>
                                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam praesentium laudantium iusto sint vel quisquam, facilis accusantium numquam neque explicabo rerum perferendis dolorum porro, reiciendis ab quibusdam, error voluptatibus architecto!</p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col s12">
                                      <div class="card blue lighten-5 hoverable">
                                          <div class="card-content">
                                              <div class="card-title vision"><span class="flow-text">Visión</span></div>
                                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam praesentium laudantium iusto sint vel quisquam, facilis accusantium numquam neque explicabo rerum perferendis dolorum porro, reiciendis ab quibusdam, error voluptatibus architecto!</p>
                                          </div>
                                      </div>
                                      <!--<div class="col s12 offset-m4">
                                      <h5>Contacto</h5>
                                      <ul>
                                          <li>
                                              <p>E-mail: <span>julia@gmail.com</span></p>
                                          </li>
                                          <li>
                                              <p>Telefono: <span>2219089809</span></p>
                                          </li>
                                          <li>
                                              <p>Linkedin: <span>julia-garcia-2390</span></p>
                                          </li>
                                      </ul>
                                  </div>-->
                                  </div>

                              </div>
                          </div>
                      </div>
                  </div>
                  <!--<div class="modal-footer">
                  <a href="#!" class="modal-close waves-effect waves-green btn-flat">Correcto</a>
              </div>-->
              </div>

              <div id="servicio2" class="modal modal-fixed-footer">
                  <div class="modal-content">
                      <h5 class="center">Hola, mi nombre es Pedro Ramos, especialista en Peridoncia </h5>
                      <img src="<?php echo $data['PATH_IMG']; ?>Periodoncia.jpg" alt="" class="responsive-img" />
                      <span class="flow-text">Ven y te atendemos si sufres de Gengivitis, Placa y problemas derivados de ésta.</span>
                  </div>
                  <div class="modal-footer">
                      <a href="#!" class="modal-close waves-effect waves-blue btn-flat">Bien</a>
                  </div>
              </div>
              <!--Modal Formulario-citas  (Esto se repite en varios archivos modificar)-->
              <div id="formulario-cita" class="modal">
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
                                  <input type="tel" id="telefonos" pattern='\d{3}[\-]\d{3}[\-]\d{4}' title='Formato de telefono: (Formato: 123-456-7890)' class="validate" name="telefono" required>
                                  <label for="telefono">Telefono</label>
                              </div>

                              <div class="input-field col s12 l6" required>
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
                                  <input type="text" class="datepicker" id="fecha" name="fecha" required>
                                  <label for="fecha">Fecha de la Cita</label>
                              </div>

                              <div class="input-field col 12 l6">
                                  <input type="text" id="hora" class="timepicker" name="hora" required>
                                  <label for="hora">Hora de la Cita</label>
                              </div>

                              <div class="input-field col s12">
                                  <textarea id="mensaje" class="materialize-textarea" name="mensaje"></textarea>
                                  <label for="mensaje">Escribenos un Mensaje</label>
                              </div>
                              <div class="center">
                                  <button class="btn waves-effect waves-light blue" type="submit" name="submit" value="submit">Enviar
                                      <i class="material-icons right">send</i>
                                  </button>
                              </div>
                              <!-- <input type="submit" class="btn waves-effect waves-light" name="submit" value="submit" /> -->
                          </form>

                      </div>
                  </div>
              </div>
              <!--Fin Modal-->
              <!--Footer-->
<?php require_once FOOTER;?>
  </body>

  </html>