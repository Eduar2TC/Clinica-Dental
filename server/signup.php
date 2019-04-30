<?php
$tituloPagina = "Clinica-Signup"; //Nombre de la pági
$path_js = "../js/";
$status_page = "signup";
require_once("../includes/header.php"); // Solicitud del header
require_once("operations/humano.php");
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
                        <a href="#" class="brand-logo center"><img src="../img/logo01.png" alt="" class="circle responsive-img" /></a>
                        <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>

                        <ul class="side-nav white" id="mobile-menu">
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
    <div class="row" id="login-page">
        <div class="col s12 z-depth-6 card-panel">
            <form action="operations/insert-medico.php" method="POST" id="formulario-registro" enctype="multipart/form-data">
                <!--action="operations/insert-medico.php"-->
                <div class="row">
                    <div class="col s12 blue">
                        <h5 class="center">Datos Personales</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="file-field input-field col s12 m12 l12">
                        <div class="btn blue">
                            <span>Seleccionar...</span>
                            <input type="file" id="imagen-perfil" name="image" value="imagen">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>
                    <div class="input-field col s12 m6 l6">
                        <i class="material-icons prefix">account_circle</i>
                        <input class="validate" id="nombre" name="nombre" type="text" validate="name">
                        <label for="nombre" data-error="wrong" data-success="right">Nombre</label>
                    </div>
                    <div class="input-field col s12 m6 l6">
                        <i class="material-icons prefix">phone</i>
                        <input class="validate" id="telefono" name="telefono" type="text" validate="phone">
                        <label for="telefono" data-error="wrong" data-success="right">Telefono</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">text_format</i>
                        <input class="validate" id="paterno" name="paterno" type="text" validate="max-min-length">
                        <label for="paterno" data-error="wrong" data-success="right">Paterno</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">text_format</i>
                        <input class="validate" id="materno" name="materno" type="text" validate="max-min-length">
                        <label for="materno" data-error="wrong" data-success="right">Materno</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">format_list_numbered</i>
                        <input class="validate" id="cedula" name="cedula" type="text" validate="cedula">
                        <label for="cedula" data-error="wrong" data-success="right">Cédula</label>
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
                    <div class="col s12 blue">
                        <h5 class="center">Datos de Acceso</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">person_add</i>
                        <input class="validate" id="usuario-reg" name="usuario" type="text" type="text" validate="username">
                        <label for="usuario-reg" data-error="wrong" data-success="right">Usuario</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">mail_outline</i>
                        <input class="validate" id="email-reg" name="email" type="email" validate="email">
                        <label for="email-reg" data-error="wrong" data-success="right">Email</label>
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
                <div class="row">
                    <div class="col s12 m12 l12  login-text">
                        <p>
                            <input type="checkbox" class="blue" id="acepto-terminos" name="acepto-terminos" value="Si" required />
                            <label for="acepto-terminos">Acepto los terminos</label>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="g-recaptcha" data-sitekey="<?php echo (new HumanRobot)->getPublicKey(); ?>" data-callback="recaptchaCallback"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <button type="submit" id="submitButton" class="btn blue waves-effect waves-light col s12" disabled>
                            Registrarse
                        </button>
                    </div>
                    <div class="input-field col s12">
                        <p class="margin center medium-small sign-up">Ya tengo cuenta <a href="../index.php" id="ya-tengo-cuenta">Login</a></p>
                    </div>
                </div>

            </form>
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
    <?php require_once("../includes/footer.php"); ?>
</body>

</html>