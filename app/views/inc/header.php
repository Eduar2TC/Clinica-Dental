<?php require_once HEAD; ?>
<!--Fin del Head -->
<!--Inicio del Header -->
<header>
    <div class="row">
        <div class="container">
            <div class="col s12 m12 l6 valign-wrapper">
                <div class="col s4 m4 l4 logo-img-container">
                    <div class="logo">
                        <a href="<?php echo URL_ROOT; ?>">
                            <img class="responsive-img" src="<?php echo $data['PATH_IMG']; ?>/logo/logo01.svg" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col s8 m8 l8">
                    <div class="titulo">
                        <h1>Clínica dental</h1>
                    </div>
                    <span class="eslogan">"Por su sonrisa, por su salud"</span>
                </div>
            </div>
            <div class="col s6 m6 l6 hide-on-med-and-down">
                <div class="col s4 m4 l4">
                </div>
                <div class="col s8 m8 l8">
                    <div class="row">
                        <div id="links-superiores">
                            <ul class="right">
                                <li><a class="link" href="<?php echo URL_ROOT ?>/pages/nosotros">Nosotros</a></li>
                                <li><a class="link" href="<?php echo URL_ROOT ?>/pages/empleo">Empleo</a></li>
                                <li><a class="link" href="<?php echo URL_ROOT ?>/pages/contacto">Contacto</a></li>
                                <li><a class="link" href="<?php echo URL_ROOT ?>/pages/ayuda">Ayuda</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="right valign-wrapper">
                            <a href="tel:2228530500"><i class="fas fa-phone-alt faa-vertical animated faa-slow"></i><span id="telefono">Telefono: 2228530500</span></a>
                        </div>
                    </div>
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
                            <a href="#" data-target="mobile-menu" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                            <ul class="left hide-on-small-and-down">
                                <li><a href="<?php echo URL_ROOT ?>/pages/tratamientos">Tratamientos</a></li>
                                <li><a href="<?php echo URL_ROOT ?>/pages/precios">Precios</a></li>
                                <li><a href="<?php echo URL_ROOT ?>/pages/sucursales">Clínicas</a></li>
                                <li><a href="<?php echo URL_ROOT ?>/pages/blog">Blog</a></li>
                                <li><a href="#formulario-cita" class=" blue-text waves-effect waves-yellow blue lighten-5 btn modal-trigger"><span id="boton-registro">Reservar
                                            Cita</span></a>
                                </li>
                            </ul>
                            <ul class="right hide-on-med-and-down fa-ul">
                                <!--Search box -->
                                <li class="search-box">
                                    <nav>
                                        <div class="nav-wrapper">
                                            <form method='post' action="#" class='formSearch'>
                                                <div class="input-field">
                                                    <input type="search" class="autocomplete search_expand" required>
                                                    <label class="label-icon" for="search">
                                                        <i class="material-icons">search</i>
                                                    </label>
                                                    <i class="close material-icons">close</i>
                                                </div>
                                            </form>
                                        </div>
                                    </nav>
                                </li>
                                <li><a id="login" href="#"><span class="fa-li"><i class="fas fa-sign-in-alt"></i></span>Acceso</a></li>
                            </ul>
                        </div>
                    </div>
            </nav>
            <!--Menu de navegacion Mobil -->
            <ul id="mobile-menu" class="sidenav">
                <li class="search-box">
                    <nav>
                        <div class="nav-wrapper">
                            <form method=' post' action="#">
                                <div class="input-field">
                                    <input id="search" type="search" required>
                                    <label class="label-icon" for="search">
                                        <i class="material-icons">search</i>
                                    </label>
                                    <i class="close material-icons">close</i>
                                </div>
                            </form>
                        </div>
                    </nav>
                </li>
                <li><a href="main" class="blue-text">Inicio</a></li>
                <li><a href="<?php echo URL_ROOT ?>/pages/tratamientos" class="blue-text">Tratamientos</a></li>
                <li><a href="<?php echo URL_ROOT ?>/pages/precios" class="blue-text">Precios</a></li>
                <li><a href="<?php echo URL_ROOT ?>/pages/sucursales" class="blue-text">Clínicas</a></li>
                <li><a href="<?php echo URL_ROOT ?>/pages/blog" class="blue-text">Blog</a></li>
                <li><a href="#formulario-cita" class=" blue-text waves-effect waves-yellow blue lighten-5 btn modal-trigger"><span id="boton-registro">Reservar Cita</span></a>
                </li>
                <li><a id="login" href="<?php echo URL_ROOT ?>/users/login"><span class="fa-li"><i class="fas fa-sign-in-alt"></i></span>Acceso</a></li>
            </ul>
        </div>
        <!--Formulario para logearse -->
        <div id="login-form" class="webui-popover-content">
            <form id="formulario-login" method="POST" action="users/login">
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">mail_outline</i>
                        <input id="email-1" type="email" class="validate" required>
                        <label for="email-1" data-error="Ingresa un email válido" data-success="Correcto">e-mail</label>
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
                        <p>
                            <label>
                                <input type="checkbox" id="remember-me" name="recordarme" value="Si" required />
                                <span>Recordarme</span>
                            </label>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m12 l12">
                    </div>
                    <div class="row">
                        <div class="input-field col s12 center">
                            <button id="login" type="submit" name="login" value="accesando" class="waves-effect waves-light btn blue">Acceder
                                <i class="fas fa-sign-in-alt left"></i>
                        </div>
                    </div>
                    <div class="row contrasenia-olvidada">
                        <div class="input-field col s12 m6 l6">
                            <p class="margin center-align medium-small"><a href="<?php echo URL_ROOT . '/users/recuperar' ?>">¿Olvidaste tu contraseña?</a></p>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <p class="margin center-align medium-small"><a href="<?php echo URL_ROOT . '/users/register' ?>">Registrarse</a></p>
                        </div>
                    </div>

            </form>
        </div>

    </div>

    <!--Inicio del Slider-->
    <div class="slider">
        <ul class="slides z-depth-1">
            <li>
                <img class="responsive-img" src="<?php echo $data['PATH_IMG']; ?>dentista.jpg">

                <div class="caption left-align">
                    <h3 class="blue-text text-lighten-5">Evaluación sin costo en tu primera cita</h3>
                    <h5 class="light-blue-text text-lighten-4">Aplica a niños menores de 15 años</h5>
                    <div class="hide-on-med-and-down">
                        <a href="#" class="btn btn-medium blue darken-1 ">Saber mas</a>
                    </div>
                </div>

            </li>
            <li>
                <img class="responsive-img" src="<?php echo $data['PATH_IMG']; ?>doctor.jpg">

                <div class="caption right-align">
                    <h3 class="blue-text text-lighten-5">Médicos capacitados</h3>
                    <h5 class="light-blue-text text-lighten-4">Hospitalidad, buena atención de nuestro personal</h5>
                    <div class="hide-on-med-and-down">
                        <a href="#" class="btn btn-medium blue darken-1">Saber mas</a>
                    </div>
                </div>

            </li>
            <li>
                <img class="responsive-img" src="<?php echo $data['PATH_IMG']; ?>ani-kolleshi-640938-unsplash.jpg">

                <div class="caption left-align">
                    <h3 class="blue-text text-lighten-5">Gran variedad de servicios</h3>
                    <h5 class="light-blue-text text-lighten-4">Consulta nuestro Catalogo de Servicios</h5>
                    <div class="hide-on-med-and-down">
                        <a href="tratamientos#seccion-tratamientos" class="btn btn-medium blue darken-1">Saber
                            mas...</a>
                    </div>
                </div>

            </li>
            <li>
                <img class="responsive-img" src="<?php echo $data['PATH_IMG']; ?>yingpis-kalayom-133680-unsplash.jpg">

                <div class="caption center-align">
                    <h3 class="blue-text text-lighten-5">Tratamientos a tu medida</h3>
                    <h5 class="light-blue-text text-lighten-4">Ortodocia a tus necesidades</h5>
                    <div class="hide-on-med-and-down">
                        <a href="#" class="btn btn-medium blue darken-1">Saber mas</a>
                    </div>
                </div>

            </li>
        </ul>
    </div>
    <!--Fin del Slider-->
</header>
<!--Fin del Header -->