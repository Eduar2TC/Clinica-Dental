  <?php
    $tituloPagina = "Clinica-Medicos"; //Nombre de la página 
    $path_logo = "img/";
    $path_css = "css/";
    $path_js = "js/";
    $status_page = "medicos";
    require_once("includes/header.php"); // Solicitud del header
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
                              <li>Conectado: Juan López<i class="material-icons left Tiny green-text text-darken-4">radio_button_checked</i></li>
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
                                      <a href="#user"><img class="circle" src="img/profile-doctor02.jpg"></a>
                                      <a href="#name"><span class="white-text name">Juan López</span></a>
                                      <a href="#email"><span class="white-text email">j_lopez@gmail.com</span></a>
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
                          <a href="#user"><img class="circle" src="img/profile-doctor02.jpg"></a>
                          <a href="#name"><span class="white-text name">Juan López</span></a>
                          <a href="#email"><span class="white-text email">j_lopez@gmail.com</span></a>
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