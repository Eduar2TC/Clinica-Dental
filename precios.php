<?php
$tituloPagina = "Clinica-Precios"; //Nombre de la página 
$path_logo = "img/";
$path_css = "css/";
$path_js = "js/";
$status_page = "precios";
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
                <li><a href="#formulario-cita" class="blue-text waves-effect waves-yellow  blue lighten-5 btn modal-trigger">Reservar
                        Cita</a></li>
                <li><a href="index.php" class="blue-text"><i class="fas fa-sign-in-alt"></i>Login médico</a></li>
            </ul>

        </div>

        <!--Inicio del Slider-->
        <div class="slider">
            <ul class="slides z-depth-1">
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
        <!--Titulo de la pagina o seccion "Precios" -->
        <div class="row grey lighten-4">
            <div class="container">
                <div class="col s12 m12 l12 blue white-text darken-4 center seccion-titulo">
                    <h4>Precios</h4>
                    <span>La mejor opción en precio calidad en Tratamientos</span>
                </div>
            </div>
        </div>
        <!--Inicio Precios-->
        <section class="section section-precios">
            <!--Tarjetas de precios-->
            <div class="row container" id="contenedor-precios">
                <!---Precios Adultos-->
                <div class="col s12 m6 l6" id="columna-adultos">
                    <div class="blue accent-4 card-panel">
                        <h4 class="center white-text titulo-precios">
                            Adultos
                        </h4>
                        <div class="divider"></div>
                        <div class="row">
                            <div class="col s9 m9 l9">
                                <div class="left-align tipo-tratamiento-adulto">
                                    <span class="white-text">Limpieza Dental</span>
                                </div>
                            </div>
                            <div class="col s3 m3 l3">
                                <div class="center white tipo-tratamiento-precio-adulto">
                                    <span class="blue-text blue-text-accent-4">$1,800.50</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s9 m9 l9">
                                <div class="left-align tipo-tratamiento-adulto">
                                    <span class="white-text">Resinas desde </span>
                                </div>
                            </div>
                            <div class="col s3 m3 l3 ">
                                <div class="center white tipo-tratamiento-precio-adulto">
                                    <span class="blue-text blue-text-accent-4">$1,800.50</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s9 m9 l9">
                                <div class="left-align tipo-tratamiento-adulto">
                                    <span class="white-text">Brakets desde</span>
                                </div>
                            </div>
                            <div class="col s3 m3 l3 ">
                                <div class="center white tipo-tratamiento-precio-adulto">
                                    <span class="blue-text blue-text-accent-4">$1,800.50</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s9 m9 l9">
                                <div class="left-align tipo-tratamiento-adulto">
                                    <span class="white-text">Limpieza Dental</span>
                                </div>
                            </div>
                            <div class="col s3 m3 l3 ">
                                <div class="center white tipo-tratamiento-precio-adulto">
                                    <span class="blue-text blue-text-accent-4">$1,800.50</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s9 m9 l9">
                                <div class="left-align tipo-tratamiento-adulto">
                                    <span class="white-text">Extracción dental (terceros molares)</span>
                                </div>
                            </div>
                            <div class="col s3 m3 l3 ">
                                <div class="center white tipo-tratamiento-precio-adulto">
                                    <span class="blue-text blue-text-accent-4">$1,800.50</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s9 m9 l9">
                                <div class="left-align tipo-tratamiento-adulto">
                                    <span class="white-text">Endodoncia</span>
                                </div>
                            </div>
                            <div class="col s3 m3 l3 ">
                                <div class="center white tipo-tratamiento-precio-adulto">
                                    <span class="blue-text blue-text-accent-4">$1,800.50</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s9 m9 l9">
                                <div class="left-align tipo-tratamiento-adulto">
                                    <span class="white-text">Periodoncia</span>
                                </div>
                            </div>
                            <div class="col s3 m3 l3 ">
                                <div class="center white tipo-tratamiento-precio-adulto">
                                    <span class="blue-text blue-text-accent-4">$1,800.50</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s9 m9 l9">
                                <div class="left-align tipo-tratamiento-adulto">
                                    <span class="white-text">Coronas desde </span>
                                </div>
                            </div>
                            <div class="col s3 m3 l3 ">
                                <div class="center white tipo-tratamiento-precio-adulto">
                                    <span class="blue-text blue-text-accent-4">$1,800.50</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s9 m9 l9">
                                <div class="left-align tipo-tratamiento-adulto">
                                    <span class="white-text">Carillas desde </span>
                                </div>
                            </div>
                            <div class="col s3 m3 l3 ">
                                <div class="center white tipo-tratamiento-precio-adulto">
                                    <span class="blue-text blue-text-accent-4">$1,800.50</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s9 m9 l9">
                                <div class="left-align tipo-tratamiento-adulto">
                                    <span class="white-text">Implantes desde </span>
                                </div>
                            </div>
                            <div class="col s3 m3 l3 ">
                                <div class="center white tipo-tratamiento-precio-adulto">
                                    <span class="blue-text blue-text-accent-4">$1,800.50</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Precios Niños-->
                <div class="col s12 m6 l6">
                    <!--renglon1-->
                    <div class="row">
                        <div class="card-panel yellow lighten-5">
                            <!--Catalogo de precios niños-->
                            <div class="row">
                                <div class="col s12">
                                    <h4 class="center blue-text blue-text-accent-4 titulo-precios">
                                        Adolescentes y niños
                                    </h4>
                                    <div class="divider blue-text blue-text-accent-4"></div>
                                    <div class="row">
                                        <div class="col s9 m9 l9">
                                            <div class="left-align tipo-tratamiento-ninio-1">
                                                <span class="blue-text">Limpieza Dental</span>
                                            </div>
                                        </div>
                                        <div class="col s3 m3 l3 ">
                                            <div class="center lime accent-3 tipo-tratamiento-precio-ninio-1">
                                                <span class="white-text">$1,800.50</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s9 m9 l9">
                                            <div class="left-align tipo-tratamiento-ninio-2">
                                                <span class="blue-text">Sellador</span>
                                            </div>
                                        </div>
                                        <div class="col s3 m3 l3 ">
                                            <div class="center deep-orange tipo-tratamiento-precio-ninio-2">
                                                <span class="white-text">$1,500.50</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s9 m9 l9">
                                            <div class="left-align tipo-tratamiento-ninio-3">
                                                <span class="blue-text">Resina infaltil</span>
                                            </div>
                                        </div>
                                        <div class="col s3 m3 l3 ">
                                            <div class="center purple accent-4 tipo-tratamiento-precio-ninio-3">
                                                <span class="white-text">$1,200.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s9 m9 l9 ">
                                            <div class="left-align tipo-tratamiento-ninio-4">
                                                <span class="blue-text">Extracción infantil</span>
                                            </div>
                                        </div>
                                        <div class="col s3 m3 l3 ">
                                            <div class="center cyan tipo-tratamiento-precio-ninio-4">
                                                <span class="white-text">$1,500.50</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--renglon2-->
                    <!--Casos de personas con imagenes-->
                    <div class="row" id="carousel-ninios">
                        <div class="center">
                            <h5>Galería</h5>
                        </div>
                        <div class="col s12 m12 l12">
                            <div class="carousel carousel-slider">
                                <div class="carousel-fixed-item center">
                                    <a class="btn btn-small waves-effect blue grey-text text-lighten-5">Ver mas...</a>
                                </div>
                                <a class="carousel-item" href="#two!"><img src="img/ninio01.jpg"></a>
                                <a class="carousel-item" href="#two!"><img src="img/ninio02.jpg"></a>
                                <a class="carousel-item" href="#three!"><img src="img/ninio03.jpg"></a>
                                <a class="carousel-item" href="#four!"><img src="img/ninio04.jpg"></a>
                                <a class="carousel-item" href="#four!"><img src="img/ninio05.jpg"></a </div> </div> </div> </div> </div> </section> <!--Fin Precios-->
                                <!--Anuncio--->
                                <div class="section section-anuncio">
                                    <div class="container">
                                        <div class="row card-panel back-imagen">
                                            <!--Mensaje anuncio-->
                                            <div class="col s12 m10 l10">
                                                <div class="row">
                                                    <div class="col s12">
                                                        <div class="left-align">
                                                            <h5 class="center white-text">Contactanos</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--boton anuncio-->
                                            <div class="col s12 m10 l10 ">
                                                <div class="row">
                                                    <div class="col s12 m10 l10">
                                                        <div class="center">
                                                            <span class="blue-text text-darken-4">Contamos con todas las especialidades en un mismo lugar y tres socursales en esl estado de Puebla.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col s12 center">
                                                        <a class="waves-effect waves-light btn blue"><i class="material-icons right white-text">contact_mail</i>Reservar cita</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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

                    <div class="input-field col 12 l6" id="hora">
                        <input type="text" class="timepicker" name="hora" required>
                        <label for="hora">Hora de la Cita</label>
                    </div>

                    <div class="input-field col s12">
                        <textarea id="mensaje" class="materialize-textarea" name="mensaje"></textarea>
                        <label for="mensaje">Escribenos un Mensaje</label>
                    </div>

                    <button class="btn waves-effect waves-light blue" type="submit" name="submit" value="submit">Enviar
                        <i class="material-icons right">send</i>
                    </button>
                    <!-- <input type="submit" class="btn waves-effect waves-light" name="submit" value="submit" /> -->
                </form>

            </div>
        </div>
    </div>

    <!--Fin Modal-->
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