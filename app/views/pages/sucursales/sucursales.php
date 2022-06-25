<?php
$tituloPagina = "Clinica-Sucursales"; //Nombre de la página 
$path_img = URL_ROOT . '/public/img/';
$path_css = URL_ROOT . 'public/css/';
$path_js = URL_ROOT . 'public/js/';
$status_page = 'sucursales';
?>
<?php require_once HEADER; ?>
<!--CUERPO-->
<body>
    <main>
        <!--Inicio Sucursales-->
        <section class="section section-sucursales grey lighten-4">
            <div class="container">
                <div class="row">
                    <div class="col s12 m4">

                        <ul class="collapsible" data-collapsible="accordion">

                            <li onclick="cambiaRutaImagen('<?php echo $path_img ?>localizacion1.jpg')">
                                <div class="collapsible-header">
                                    <i class="material-icons red-text text-accent-4">place</i>
                                    Las Margaritas
                                </div>
                                <div class="collapsible-body"><span>¡Visitanos ahora!</span>
                                    <div class="divider"></div><em class="blue-text text-darken-2">
                                        Av. Las margaritas 1207, Bugambilias.</em>
                                </div>
                            </li>
                            <li onclick="cambiaRutaImagen('<?php echo $path_img ?>localizacion2.jpg')">
                                <div class="collapsible-header"><i class="material-icons red-text text-accent-4">place</i>San
                                    Manuel</div>
                                <div class="collapsible-body"><span>¡Visitanos ahora!</span>
                                    <div class="divider"></div><em class="blue-text text-darken-2">Circumbalación
                                        907, Col. San Baltazar</em>
                                </div>
                            </li>
                            <li onclick="cambiaRutaImagen('<?php echo $path_img ?>localizacion3.jpg')">
                                <div class="collapsible-header"><i class="material-icons red-text text-accent-4">place</i>Centro</div>
                                <div class="collapsible-body"><span>¡Visitanos ahora!</span>
                                    <div class="divider"></div><em class="blue-text text-darken-2">Reforma
                                        204, Centro.</em>
                                </div>
                            </li>
                        </ul>

                    </div>
                    <div class="col s12 m8 hoverable">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d15089.802351366356!2d-98.20489475582863!3d18.999856526418203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sclinicas+odontologicas!5e0!3m2!1ses!2smx!4v1542971908587" width="100%" height="250px" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12 m4 center-align">
                        <img src="<?php echo $path_img ?>localizacion1.jpg" alt="" class="circle responsive-img change-imagen" style="height:200px" />
                    </div>
                    <div class="col s12 m8">
                        <div>
                            <div class="card-panel blue accent-3 hoverable">
                                <p class="white-text" id="parrafo"><i class="far fa-question-circle fa-1x"></i><span>&nbspLocalice
                                        la
                                        clinica mas cercana lo atenderemos con gusto. Puede reservar con
                                        anticipación para una atención eficiente.</span></p>
                                <p class="white-text" id="parrafo"><i class="far fa-question-circle fa-1x"></i><span>&nbspPara
                                        mayor
                                        información escribanos o llamenos al numero <span class="lime-text text-lime-accent-1" style="font-size: 24px;">2228-530-500</span></span></p>
                                <p class="white-text" id="parrafo"><i class="far fa-question-circle fa-1x"></i><span>&nbspPuede
                                        cancelar
                                        cuando quiera (únicamente a los 2 días de anticipación).</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Fin Sucursales-->
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
                            <li><a class="grey-text text-lighten-3" href="main">Inicio</a></li>
                            <li><a class="grey-text text-lighten-3" href="tratamientos" class="link-footer">Tratamientos</a></li>
                            <li><a class="grey-text text-lighten-3" href="sucursales" class="link-footer">Clinicas</a></li>
                            <li><a class="grey-text text-lighten-3" href="promociones" class="link-footer">Promociones</a></li>
                            <li><a class="grey-text text-lighten-3" href="contacto" class="link-footer">Contacto</a></li>
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

                    <div class="input-field col 12 l6">
                        <input id="hora" type="text" class="timepicker" name="hora" required>
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
    <?php
    require_once FOOTER;
    ?>
</body>

</html>