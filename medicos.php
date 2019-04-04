<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <title>Inicio</title>
    <!--<link rel="stylesheet" href="css/materialize.min.css">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css" />
    <link rel="stylesheet" type="text/css" href="css/jquery.parallaxer.min.css">
    <!--Fonts-->
    <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
    crossorigin="anonymous"> -->
    <!--<link rel="stylesheet" href="./fonts/fontawesome/css/all.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab|Poiret+One|Sacramento|Tauri" rel="stylesheet">
    <!-- Estilos propios -->
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/medicos.css">
    <link rel="stylesheet" href="css/footer.css">
</head>

<body>
    <!--INICIO DEL HEADER--->
    <header>
        <div class="row">
            <div id="imagenLogo" class="col s12 m4 offset-m1"><a href="index.php"><img src="img/logo01.png" alt="logo.png"
                        class="responsive-img"></a></div>
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
                                <li><a href="!#"><span class="fa-li"><i class="fas fa-sign-in-alt"></i></span>Login
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
                        <h3>Evaluación sin costo en tu primera cita</h3>
                        <h5 class="light grey-text text-lighten-3">Aplica a niños menores de 15 años</h5>
                        <div class="hide-on-med-and-down">
                            <a href="#" class="btn btn-medium blue darken-1 ">Saber mas...</a>
                        </div>
                    </div>

                </li>
                <li>
                    <img class="responsive-img" src="img/doctor.jpg">

                    <div class="caption left-align">
                        <h3>Médicos capacitados</h3>
                        <h5 class="light grey-text text-lighten-3">Hospitalidad, buena atención de nuestro personal</h5>
                        <div class="hide-on-med-and-down">
                            <a href="#" class="btn btn-medium blue darken-1">Saber mas...</a>
                        </div>
                    </div>

                </li>
                <li>
                    <img class="responsive-img" src="img/ani-kolleshi-640938-unsplash.jpg">

                    <div class="caption right-align">
                        <h3>Gran variedad de servicios.</h3>
                        <h5 class="light grey-text text-lighten-3">Consulta nuestro Catalogo de Servicios</h5>
                        <div class="hide-on-med-and-down">
                            <a href="tratamientos.php#seccion-tratamientos" class="btn btn-medium blue darken-1">Saber
                                mas...</a>
                        </div>
                    </div>

                </li>
                <li>
                    <img class="responsive-img" src="img/yingpis-kalayom-133680-unsplash.jpg">

                    <div class="caption center-align">
                        <h3>Tratamientos a tu medida</h3>
                        <h5 class="light grey-text text-lighten-3">Ortodocia a tus necesidades</h5>
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
        <!--Inicio Medicos-->
        <section class="section-medicos">
            <div class="container">
                <h4>Administración de Citas</h4>
                <div class="row">
                    <div class="col s12 m4">

                        <div class="card-panel blue lighten-5">
                            <div class="row">

                                <div class="col s12">
                                    <img src="img/doctor-1.jpg" alt="" class="circle responsive-img" />
                                </div>
                            </div>
                            <div class="row">
                                <h5 class="center">Doctor : <span class="blue-text">Pedro Rámos</span></h5>
                            </div>
                        </div>

                    </div>
                    <div class="col s12 m8">
                        <h5 class="flow-text center">Seleccione cualquier fecha disponible para poder las Citas
                            pendientes</h5>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12 m4">
                        <div class="collection">
                            <a href="#!" class="collection-item"><b>23-11-18 </b> José Ortiz : ortiz@gmail.com</a>
                            <a href="#!" class="collection-item active"><b> 25-11-18</b>Jonathan Gonzáles :
                                gonzales@gmail.com</a>
                            <a href="#!" class="collection-item"><b>27-11-18 </b> Pedro Moreno: moreno10@gmail.com</a>
                            <a href="#!" class="collection-item"><b>30-11-18 </b> Verónica Cástro: vero-nica@yahoo.com</a>
                            <a href="#!" class="collection-item"><b>01-12-18 </b> Juan Gabriel: juanga-a@yahoo.com</a>
                            <a href="#!" class="collection-item"><b>02-12-18 </b> Pedro López: p_lop@yahoo.com</a>
                            <a href="#!" class="collection-item"><b>03-12-18 </b> Juan Antonio Ortega: ortega@yahoo.com</a>
                            <a href="#!" class="collection-item"><b>06-12-18 </b> María Félix: m_fx@gmail.com</a>
                            <a href="#!" class="collection-item"><b>07-12-18 </b> Donal Trump: mr_donalt@gmail.com</a>
                            <a href="#!" class="collection-item"><b>08-12-18 </b> Lorena Buendía: lbdia@yahoo.com</a>
                            <a href="#!" class="collection-item"><b>08-12-18 </b> Francisco Fonceca:
                                fonseca-3@yahoo.com</a>
                            <a href="#!" class="collection-item"><b>09-12-18 </b> Honorio López Días:
                                lopez-diaz@yahoo.com</a>
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
                <!--Botones-->
                <div class="row">

                </div>

                <div class="row">

                </div>

            </div>
        </section>
        <!--Fin Medicos-->
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

    <!--Fin Modal-->

    <!--<script src="js/jquery.min.js"></script>-->
    <!--<script src="js/materialize.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/jquery.parallaxer.min.js""></script>
  <script src=" https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js">
        </script> <script>
        $("document").ready(function () {
            //Inicializa sidenav
            $(".button-collapse").sideNav();

            //para hacer el efecto  sticky Header
            $('.tarjetaPushpin').pushpin({
                //top: 430, //94     ---Inicio
                top: 430,
                bottom: 10000, // --Final
                offset: 0
            });

            //Inicializacion del header
            $('.slider').slider({
                full_width: true,
                height: 230, // default - height : 400
                interval: 8000, // default - interval: 6000
                indicators: true
            });

            //Inicializa modal
            $('.modal').modal();

            //Inicializa el selector de opciones de tratamiento
            $('#opciones-tratamientos').material_select();

            //Fecha de la consulta

            $('.datepicker').pickadate({
                selectMonths: true,
                selectYears: 15,
                today: 'Hoy',
                clear: 'Limpiar',
                close: 'Ok',
                closeOnSelect: false
            });

            //Hora de la consulta
            $('.timepicker').pickatime({
                default: 'Hoy',
                twelvehour: false, // change to 12 hour AM/PM clock from 24 hour
                donetext: 'OK',
                autoclose: false,
                vibrate: true // vibrate the device when dragging clock hand
            });

            //Inicializacion del Collapsible
            $('.collapsible').collapsible();

            $('.materialboxed').materialbox();


        });
    </script>

</body>

</html>