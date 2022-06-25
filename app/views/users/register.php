<?php
$tituloPagina = "Clinica-Signup"; //Nombre de la pági
$status_page = "signup";
$path_img = URL_ROOT . '/public/img/';
$path_css = URL_ROOT . '/public/css/';
$path_js = URL_ROOT . '/public/js/';
$status_page = "register";
require_once(APP_ROOT . '/helpers/humano.php'); //get operations for google humans verifications
require_once HEAD;
?>

<body>
    <!--INICIO DEL HEADER--->
    <header>
        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper blue">
                    <div class="container">

                        <span class="hide-on-med-and-down">
                            <h5 style="display:inline;">Registro de Usuarios</h5>
                        </span>
                        <a href="#" class="brand-logo center"><img src="<?php $path_img ?>logo01.png" alt="" class="circle responsive-img" /></a>
                        <a href="#" data-target="mobile-menu" class="sidenav-trigger"><i class="material-icons">menu</i></a>

                        <ul class="sidenav white" id="mobile-menu">
                            <li><a class="subheader">Acción</a></li>
                            <li><a class="waves-effect waves-yellow" href="#"><i class="material-icons left">cloud</i><span class="blue-text">Visitar pagina Principal</span></a></li>
                            <div class="divider"></div>
                            </li>
                            <li><a class="subheader">Contacto</a></li>
                            <li><a class="waves-effect waves-yellow" href="#"><i class="material-icons left">cloud</i><span class="blue-text">Enviar email</span></a></li>

                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--FIN DEL HEADER-->

    <!---REGISTER MEDICO--->
    <div class="row" id="login-page-test">
        <div class="col s12 l4 offset-l4">
            <div class="card blue">
                <div class="card-action white-text center-align">
                    <h4>Registro de Usuarios</h4>
                </div>
            </div>
            <div class="card-content">
                <form action="<?php echo URL_ROOT ?>/users/register" method="POST" id="formulario-registro" enctype="multipart/form-data">
                    <!--action="operations/insert-medico.php"-->
                    <div class="row">
                        <div class="col s12 blue subtitulo">
                            <h5 class="center">Datos Personales</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="file-field input-field col s12 m12 l12">
                            <div class="btn blue">
                                <span>Seleccionar imagen...</span>
                                <input type="file" id="imagen-perfil" name="image" value="imagen">
                                <i class="material-icons left">save</i>
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Cargar archivo de perfil">
                            </div>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">account_circle</i>
                            <input class="validate" id="nombre" name="nombre" type="text" validate="name">
                            <label for="nombre" data-error="¡Error!" data-success="¡Correcto!">Nombre</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">phone</i>
                            <input class="validate" id="telefono" name="telefono" type="text" validate="phone">
                            <label for="telefono" data-error="¡Error!" data-success="¡Correcto!">Telefono</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">text_format</i>
                            <input class="validate" id="paterno" name="paterno" type="text" validate="max-min-length">
                            <label for="paterno" data-error="¡Error!" data-success="¡Correcto!">Paterno</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">text_format</i>
                            <input class="validate" id="materno" name="materno" type="text" validate="max-min-length">
                            <label for="materno" data-error="¡Error!" data-success="¡Correcto!">Materno</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">format_list_numbered</i>
                            <input class="validate" id="cedula" name="cedula" type="text" validate="cedula">
                            <label for="cedula" data-error="¡Error!" data-success="¡Correcto!">Cédula</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m6 l6">
                            <select name="id-sucursal" class="validate" required>
                                <option value="" disabled selected>Selecciona Sucursal</option>
                                <option value="1">San Manuel</option>
                                <option value="2">Centro</option>
                                <option value="3">Las margaritas</option>
                            </select>
                            <label>Lugar de Trabajo</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <select name="especialidad" class="validate" required>
                                <option value="" disabled selected>Selecciona una Especialidad</option>
                                <option value="ortodoncia">Ortodoncia</option>
                                <option value="peridoncia">Peridoncia</option>
                                <option value="endodoncia">Endodoncia</option>
                                <option value="cirugia-dental">Cirugía Dental</option>
                                <option value="Estetica-dental">Estética Dental</option>
                            </select>
                            <label>Especialidad</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 blue subtitulo">
                            <h5 class="center">Datos de Acceso</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">person_add</i>
                            <input class="validate" id="usuario-reg" name="usuario" type="text" type="text" validate="username">
                            <label for="usuario-reg" data-error="¡Error!" data-success="¡Correcto!">Usuario</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">mail_outline</i>
                            <input class="validate" id="email-reg" name="email" type="email" validate="email">
                            <label for="email-reg" data-error="¡Error!" data-success="¡Correcto!">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">lock_outline</i>
                            <input id="password-reg" name="password" type="password" class="must_match" validate="contrasenia">
                            <label for="password-reg">Contraseña</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <i class="material-icons prefix">lock_outline</i>
                            <input id="re-password-reg" type="password" validate="match:.must_match">
                            <label for="re-password-reg">Confirmar contraseña</label>
                        </div>
                    </div>
                    <div class="row rowCastroso">
                        <div class="col s12 m6 l6 login-text">
                            <p>
                                <label>
                                    <input type="checkbox" class="blue" id="acepto-terminos" name="acepto-terminos" value="Si" required />
                                    <span>Acepto los terminos</span>
                                </label>
                            </p>
                        </div>
                        <div class="col s12 m6 l6">
                            <div class="g-recaptcha" data-sitekey="<?php echo (new HumanRobot)->getPublicKey(); ?>" data-callback="recaptchaCallback" style="transform:scale(0.65);-webkit-transform:scale(0.65);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 center-align">
                            <button type="submit" id="submitButton" class="btn blue waves-effect waves-light" disabled>
                                Registrarse
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 ya-tengo-cuenta">
                            <p class="margin center medium-small sign-up">Ya tengo cuenta <a href="../index.php" id="ya-tengo-cuenta">Login</a></p>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!--INICIO DEL FOOTER-->
    <footer class="page-footer blue">
        <div class="container">
            <div class="row">
                <p class="flow-text center">&copy; 2021 Copyright Clínica dental</p>
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