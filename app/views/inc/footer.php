<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="<?php echo $path_js; ?>jquery.parallaxer.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="<?php echo $path_js; ?>jquery.matchHeight.js" type="text/javascript"></script>
<script src="<?php echo $path_js; ?>validin.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.webui-popover/1.2.1/jquery.webui-popover.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8.8.5/dist/sweetalert2.all.min.js" integrity="sha256-m7hW8Yyirje5pHkEHOZDzM2r8gscxT0nxPDY7rtJwGE=" crossorigin="anonymous"></script>
<script src="http://www.google.com/recaptcha/api.js"></script>
<script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>

<?php
if (isset($status_page)) {

    switch ((string) $status_page) {
        case 'medico': {
                echo '<script src="./js/' . "$status_page.js\"" . '></script>';
                echo "\n";
                echo '<script src = "./js/lib/moment.min.js"> ' . '</script>';
                echo "\n";
                echo '<script src = "./js/fullcalendar.min.js">' . '</script>';
                echo "\n";
                echo '<script src = "./js/gcal.min.js">' . '</script>';
                echo "\n";
                echo '<script src = "./js/locale/es.js">' . '</script>';
            }
    }
}
?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        /*Corrige el error de sidenav*/
        /*var elem = document.querySelector('.sidenav');
        /*var instance = new M.Sidenav(elem);*/
        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav, {});
        //Collapsible
        const colapsible = document.querySelectorAll('.collapsible');
        M.Collapsible.init(colapsible, {
            accordion: false
        });
        //Floating button actions
        const floatActionBtn = document.querySelectorAll('.fixed-action-btn');
        M.FloatingActionButton.init(floatActionBtn, {});
        //Toltip floating button
        const toltip = document.querySelectorAll('.tooltipped', {});
        M.Tooltip.init(toltip, {});
        /* ScrollReveal */
        ScrollReveal().reveal('.widget', {
            interval: 400
        });
        ScrollReveal().reveal('.headline', {
            delay: 500
        });
        ScrollReveal().reveal('.tagline', {
            delay: 1000
        });
        ScrollReveal().reveal('.punchline', {
            delay: 2000
        });
        //Autocomplete
        const aut = document.querySelectorAll('.autocomplete');
        M.Autocomplete.init(aut, {
            data: {
                'Tratamieto': null,
                'Ortodoncia': null,
                'Clinicas': null,
                'Registrarse': null,
                'Login': null
            }
        });

        const carousel_precios = document.querySelectorAll('#carousel-ninios .carousel');
        M.Carousel.init(carousel_precios, {
            indicators:false,
            fullWidth: true
        });

    });
    /*Funciones que se ejecutan despues de cargar todos los componentes de la página */
    $(document).ready(function() {
        /**->Inicio: index.php**/
        $('.collapsible').collapsible();
        //para hacer el efecto  sticky Header
        $('.tarjetaPushpin').pushpin({
            top: 430, //94     ---Inicio
            bottom: 10000, // --Final
            offset: 0
        });

        //Inicializacion del header
        $('.slider').slider({
            full_width: true,
            height: 230, // default - height : 400
            interval: 10000, // default - interval: 6000
            indicators: true
        });
        //Carrusel testimonials
        $('.carousel.carousel-slider').carousel({
            fullWidth: true,
            indicators: false,
            height: 250
        });
        //testimonials plays
        //autoplay();

        //funcion para hacer que el carrusel se mueva de forma automatica
        function autoplay() {
            $('.carousel').carousel('next');
            setTimeout(autoplay, 9000);
        }

        //Inicializa modal
        const modal = document.querySelectorAll('.modal');
        M.Modal.init(modal, {});
        //Fecha de la consulta
        //Inicia date picker
        const datepicker = document.querySelectorAll('.datepicker');
        M.Datepicker.init(datepicker, {
            i18n: {
                cancel: 'Cancelar',
                clear: 'Limpiar',
                done: 'OK',
                close: 'Cerrar',
                default: 'now',
                today: 'Hoy',
                closeOnSelect: false,
                format: 'yyyy-mm-dd',
                selectMonths: true,
                previousMonth: '<',
                nextMonth: '>',
                months: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                monthsShort: ['Ene', 'Feb', 'Mar', 'Ab', 'May', 'Jun', 'Jul', 'Ag', 'Sept', 'Oct', 'Nov', 'Dic'],
                firstDay: true,
                weekdays: ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"],
                weekdaysShort: ["Dom", "Lun", "Mar", "Mie", "Jue", "Vie", "Sab"],
                weekdaysAbbrev: ['L', 'M', 'M', 'J', 'V', 'S', 'D']
            }
        });
        //Hora de la consulta
        const timepicker = document.querySelectorAll('.timepicker');
        M.Timepicker.init(timepicker, {
            i18n: {
                cancel: 'Cancelar',
                done: 'Ok',
                clear: 'Limpiar'
            }
        });
        //Inicializa el selector de opciones de tratamiento
        $('#opciones-tratamientos').formSelect();
        /**->Fin: index.php **/

        /**->Inicio: precios.php**/

        /**->Fin: precios.php**/

        /**->Inicio: tratamientos.php**/
        /*Iniciaizar el parallax del baner dek titulo*/
        $('.parallax').parallax();
        /*Mismo tamaño entre las tarjetas*/
        $('.card-resize-height').matchHeight();
        /**->Fin tratamientos.php**/
        //dezpliega ventana login
        $('#login').webuiPopover({
            url: '#login-form',
            animation: 'pop',
            trigger: 'click'
        });
        /**->Inicio mediocos.php **/
        $('.materialboxed').materialbox();
        /**->Fin medicos.php**/

        /**-> Inicio: sucursañes.php**/

        /**->Fin:sucursales.php**/

        //send ajax
        $('#formulario-login').submit(function(e) {
            var formulario = $('#formulario-login');
            e.preventDefault(); // avoid to execute the actual submit of the form.
            // Call ajax for pass data to other place
            $.ajax({
                type: formulario.attr('method'),
                url: formulario.attr('action'),
                data: {
                    email: $("#email-1").val(),
                    password: $("#password").val(),
                    login: $("#login").val()
                },
                success: function(data) {
                    console.log(data);
                    if (data) {
                        if (data === "¡Bienvenido!") {
                            Swal.fire(
                                data,
                                'Aceptar',
                                'success'
                            ).then(function() {
                                window.location.href = "users/medicos";
                            });
                        } else {
                            Swal.fire({
                                type: 'error',
                                title: 'Oops...',
                                text: 'Error: ' + data,
                                //footer: '<a href="#">Intentarlo otra vez</a>'
                            });
                        }
                    }
                },
                error: function(data) {
                    alert(data);
                    console.log(data);
                    alert("Posting failed.");
                }
            });
            // to prevent refreshing the whole page page
            return false;
        });

        $('#formulario-cita-form').submit(function(eevent) {
            event.preventDefault();
            $.ajax({
                type: $(this).attr('method'),
                url: $(this).attr('action'),
                dataType: 'json',
                data: $("#formulario-cita-form").serialize(),
                success: function(data) {
                    if (data) {
                        if (data[0].request_validation_type === 'success') {
                            Swal.fire(
                                "La cita reservada exitosamente!",
                                'Aceptar',
                                'success'
                            ).then(function() {
                                window.location.reload();
                            });
                        } else {
                            Swal.fire({
                                type: 'error',
                                title: 'Oops...',
                                text: 'Error: ' + 'hay errores en el formulario!',
                                //footer: '<a href="#">Intentarlo otra vez</a>'
                            }).then(
                                function() {
                                    if (data[0].request_validation_type === 'email') { //email
                                        $("#email-2").next("label").attr('data-error', data[0].message_email);
                                        $("#email-2").removeClass("validate valid");
                                        $("#email-2").addClass("validate invalid");
                                    } else if (data[0].request_validation_type === 'tel') { // telefono
                                        $("#telefonos").next('p').remove(); //corrige la duplicación del mensaje de error en los inputs
                                        $("#telefonos").next("label").attr('data-error', data[0].message_telefono);
                                        $("#telefonos").removeClass("validate valid");
                                        $("#telefonos").addClass("validate invalid");
                                        $('#telefonos').after('<p class= "error-input">' + data[0].message_telefono + '</p>');
                                        $("#email-2").next('p').remove(); // Si anteriormente el email fue validado incorrectamente esto remueve el mensaje de error
                                    } else if (data[0].request_validation_type === 'hora') { // hora
                                        $('#hora').after('<p class= "error-input">' + data[0].message_hora + '</p>');
                                    } else if (data[0].request_validation_type === 'fecha') { //fecha
                                        $('#fecha').after('<p class= "error-input">' + data[0].message_fecha + '</p>');
                                    } else if (data[0].request_validation_type === 'tel-email') {
                                        /*$('email-2').removeClass("validate valid");
                                        $('email-2').addClass("validate invalid");*/
                                        $("#email-2").next('p').remove(); //corrige la duplicación del mensaje de error en los inputs
                                        $("#email-2").next("label").attr('data-error', data[0].message_email);
                                        $("#email-2").removeClass("validate valid");
                                        $("#email-2").addClass("validate invalid");
                                        $('#email-2').after('<p class= "error-input">' + data[0].message_email + '</p>');

                                        $("#telefonos").next('p').remove(); //corrige la duplicación del mensaje de error en los inputs
                                        $("#telefonos").next("label").attr('data-error', data[0].message_telefono);
                                        $("#telefonos").removeClass("validate valid");
                                        $("#telefonos").addClass("validate invalid");
                                        $('#telefonos').after('<p class= "error-input">' + data[0].message_telefono + '</p>');

                                        $("#email-2").next("label").attr('data-error', data[0].message_email);
                                        $("#email-2").removeClass("validate valid");
                                        $("#email-2").addClass("validate invalid");

                                    } else if (data[0].request_validation_type === 'email-tel-hora-fecha') { // email - telefono - hora
                                        $("#email-2").next("label").attr('data-error', data[0].message_email);
                                        $("#email-2").removeClass("validate valid");
                                        $("#email-2").addClass("validate invalid");
                                        $("#telefonos").next("label").attr('data-error', data[0].message_telefono);
                                        $("#telefonos").removeClass("validate valid");
                                        $("#telefonos").addClass("validate invalid");
                                        //$('#hora').val('').trigger('change');
                                        $('#hora').after('<p class= "error-input">' + data[0].message_hora + '</p>');
                                        $('#fecha').after('<p class= "error-input">' + data[0].message_fecha + '</p>');
                                    }
                                }
                            );
                        }
                    }

                },
                error: function(data, textStatus, errorThrown) {
                    console.log('message=:' + data + ', text status=:' + textStatus + ', error thrown:=' + errorThrown);
                }
            });
        });

        //Inicializa el selector del formulario de registro de proyectos
        $('select').formSelect();
        //validacion del formulario
        $('#formulario-registro').validin({
            validation_tests: {
                'alpha': {
                    'regex': /[a-zA-Z]*/,
                    'error_message': "This can only contain only letters"
                },
                'alpha_num': {
                    'regex': /[A-Z0-9]*/i,
                    'error_message': "This can only contain letters and numbers"
                },
                'alpha_space': {
                    'regex': /[A-Z ]*/i,
                    'error_message': "This can only contain letters"
                },
                'alpha_dash': {
                    'regex': /[A-Z\.\-_]*/i,
                    'error_message': "This can only contain letters, underscores and hyphens"
                },
                'alpha_num_dash': {
                    'regex': /[A-Z0-9\.\-_]*/i,
                    'error_message': "This can only contain letters, numbers, underscores and hyphens"
                },
                'number': {
                    'regex': /[\d]*/,
                    'error_message': "This needs to be a valid whole number"
                },
                'decimal': {
                    'regex': /(\d*\.?\d*)/,
                    'error_message': "This needs to be a valid number"
                },
                'name': {
                    'regex': /^[\w'\-,.][^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]]{2,}$/,
                    'error_message': "Ingresa un nombre válido"
                },
                'email': {
                    'regex': /[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}/i,
                    'error_message': "Ingresa un email válido"
                },
                'url': {
                    'regex': /(https?|ftp):\/\/[^\s\/$.?#].[^\s]*/i,
                    'error_message': "This needs to be a valid URL"
                },
                'phone': {
                    'regex': /(?=.*?\d{3}( |-|.)?\d{4})((?:\+?(?:1)(?:\1|\s*?))?(?:(?:\d{3}\s*?)|(?:\((?:\d{3})\)\s*?))\1?(?:\d{3})\1?(?:\d{4})(?:\s*?(?:#|(?:ext\.?))(?:\d{1,5}))?)\b/i,
                    'error_message': "Ingresa un telefono válido"
                },
                'zip': {
                    'regex': /\d{5}(?:-?\d{4})?/i,
                    'error_message': "This needs to be a valid zip code"
                },
                'creditcard': {
                    'regex': /(?:4[0-9]{12}(?:[0-9]{3})?|5[1-5][0-9]{14}|6(?:011|5[0-9][0-9])[0-9]{12}|3[47][0-9]{13}|3(?:0[0-5]|[68][0-9])[0-9]{11}|(?:2131|1800|35\d{3})\d{11})/i,
                    'error_message': "This needs to be a valid credit card number"
                },
                'regex': {
                    'regex': /.*/i,
                    'error_message': "This is not a valid value"
                },
                'min': {
                    'regex': /.*/i,
                    'error_message': "This number needs to be at least %i"
                },
                'max': {
                    'regex': /.*/i,
                    'error_message': "This number needs to no more than %i"
                },
                'min_length': {
                    'regex': /.*/i,
                    'error_message': "This needs to be at least %i characters long"
                },
                'max_length': {
                    'regex': /.*/i,
                    'error_message': "This needs to be no more than %i characters long"
                },
                'match': {
                    'regex': /.*/i,
                    'error_message': "Las contraseñas no coinciden"
                },
                'max-min-length': {
                    'regex': /^[a-zA-Z]{2,25}$/,
                    'error_message': "ingresa un nombre mayor a 2 y menor a 25 caracteres"

                },
                'username': {
                    'regex': /^(?=.{4,20}$)(?![_.])(?!.*[_.]{2})[a-zA-Z0-9._]+(?<![_.])$/,
                    'error_message': "Ingresa un usuario minimo 4 carácteres"
                },
                'matricula': {
                    'regex': /^\d{9,9}$/,
                    'error_message': "Ingresa una matricula valida!"
                },
                'contrasenia': {
                    'regex': /^.*(?=.{4,30})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*$/,
                    'error_message': "La contraseña debe tener al menos 4 caracteres de longitud, 1 mayúscula, 1 minúscula y 1 número"
                }
            },
            // delay time in milliseconds
            feedback_delay: 700,
            // default CSS classes
            invalid_input_class: 'invalid',
            error_message_class: "validation_error",

            // default error messages
            form_error_message: "Por favor corrige los errores en el formulario",
            required_fields_initial_error_message: "Por favor llena todos los campos requeridos",
            required_field_error_message: "Este campo es requerido",

            // adjust margins on the validation error messages
            override_input_margins: true,

            onValidateInput: function(validation_info) {
                var tagError = validation_info.input;
                var tagErrorToString = tagError.outerHTML;

                var mensajeError = validation_info.error_message;
                if (mensajeError.length > 0) {
                    if (tagErrorToString.indexOf('email') !== -1) {
                        M.toast({
                            html: 'Error : ' + mensajeError,
                            inDuration: 300,
                            classes: 'rounded'
                        });
                    } else if (tagErrorToString.indexOf('password') !== -1) {
                        M.toast({
                            html: 'Error : ' + mensajeError,
                            inDuration: 300,
                            classes: 'rounded'
                        });
                    }
                }
            }
        });
        //Expandir Search input
        var trig = false;
        $(document).on('click', '.search_expand', function(e) {
            if (trig == false) {
                $('.formSearch').animate({
                    width: '+=100'
                }, 400);
                trig = true;
            }
            //controla la visibilidad de los elementos del nav
            //$('.container .left').addClass('hide');
        });
        //regresa el form a la anchura original
        $(".search_expand").focusout(function() {
            $('.formSearch').animate({
                width: '-=100'
            }, 400);
            trig = false;
            // regresa la visibilidad de los elementos previamente ocultos
            //$('.container .left').removeClass('hide');
        });
    });

    /*Funciones externes no es necesario esperar que la pagina cargue*/
    /**Inicio: index.php**/
    /**Fin: index.php**/

    /*->Inicio: precios.php */
    //funcion para cambiar imagen
    function cambiaRutaImagen(miUrl) {
        $('.change-imagen').attr('src', miUrl);
    }
    /*->fin: precios.php */

    /*->Inicio: tratamientos.php */
    //Operaciones con el dropdown en Tratamientos
    function dropDownExpand(centinela, link_id, collapsible_nro) {
        //let instance = M.Collapsible.getInstance($('.collapsible'));
        let elems = document.querySelectorAll('.collapsible');
        let instances = M.Collapsible.init(elems, {
            accordion: false
        });
        let instance = instances[collapsible_nro];
        if (centinela === false) {
            instance.open(0);
            $('#' + link_id).html('<a class="left-align botonMasInformacion btn-flat waves-effect waves-yellow" id="' + link_id + '">Menos...</a>');
            return true;
        } else if (centinela === true) {
            instance.close(0);
            $('#' + link_id).html('<a class="left-align botonMasInformacion btn-flat waves-effect waves-yellow" id="' + link_id + '">Mas Información...</a>');
            return false;
        }
    }
    let centinela1 = false;
    let centinela2 = false;
    let centinela3 = false;
    let centinela4 = false;
    let centinela5 = false;
    $(".botonMasInformacion").click(function(event) {
        switch (event.target.id) {
            case 'link-expandir-tratamiento-one': {
                centinela1 = dropDownExpand(centinela1, 'link-expandir-tratamiento-one', 0);
                break;
            }
            case 'link-expandir-tratamiento-two': {
                centinela2 = dropDownExpand(centinela2, 'link-expandir-tratamiento-two', 1);
                break;
            }
            case 'link-expandir-tratamiento-tree': {
                centinela3 = dropDownExpand(centinela3, 'link-expandir-tratamiento-tree', 2);
                break;
            }
            case 'link-expandir-tratamiento-four': {
                centinela4 = dropDownExpand(centinela4, 'link-expandir-tratamiento-four', 3);
                break;
            }
            case 'link-expandir-tratamiento-five': {
                centinela5 = dropDownExpand(centinela5, 'link-expandir-tratamiento-five', 4);
                break;
            }
            default: {
                // centinela = false;
                break;
            }
        }

    });
    /* SLIDES OF CARDS */
    // start carrousel
    $('.carousel.carousel-slider').carousel({
        fullWidth: true,
        indicators: false
    });
    // move next carousel
    $('.moveNextCarousel').click(function(e) {
        e.preventDefault();
        e.stopPropagation();
        $('.carousel').carousel('next');
    });

    // move prev carousel
    $('.movePrevCarousel').click(function(e) {
        e.preventDefault();
        e.stopPropagation();
        $('.carousel').carousel('prev');
    });
    /*Fin: tratamientos.php */

    /*Inicio: sucursales.php */
    //funcion para cambiar imagen
    function cambiaRutaImagen(miUrl) {
        $('.change-imagen').attr('src', miUrl);
    }
    /*Fin:sucursales.php */
    //habilities button submit "Necesary outside after load principal page"
    function recaptchaCallback() {
        $('#submitButton').removeAttr('disabled');
    }

    //Activacion y desactivacion del formulario para logearse
    /*function loginShow() {
        var x = document.getElementById("login-form");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }*/
</script>