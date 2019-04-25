  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="js/jquery.parallaxer.min.js"></script>
  <script src=" https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <script src="js/jquery.matchHeight.js" type="text/javascript"></script>
  <script src="https://cdn.jsdelivr.net/jquery.webui-popover/1.2.1/jquery.webui-popover.min.js"></script>
  <script>
      /*Funciones que se ejecutan despues de cargar todos los componentes de ka página */
      $("document").ready(function() {
          /**->Inicio: index.php**/
          //Inicializa sidennav
          $(".button-collapse").sideNav();

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
          //Carrusel
          $('.carousel.carousel-slider').carousel({
              fullWidth: true
          });
          autoplay();


          //ScrollFire
          const options = [{
                  selector: '.renglon1',
                  offset: 50,
                  callback: function(el) {
                      Materialize.fadeInImage($(el));
                  }
              },
              {
                  selector: '.renglon2',
                  offset: 450,
                  callback: function(el) {
                      Materialize.fadeInImage($(el));
                  }
              },
              {
                  selector: '.renglon3',
                  offset: 500,
                  callback: function(el) {
                      Materialize.fadeInImage($(el));
                  }
              },
              {
                  selector: '.renglon4',
                  offset: 500,
                  callback: function(el) {
                      Materialize.fadeInImage($(el));
                  }
              },
              {
                  selector: '.renglon5',
                  offset: 600,
                  callback: function(el) {
                      Materialize.fadeInImage($(el));
                  }
              }
          ];

          Materialize.scrollFire(options);
          //funcion para hacer que el carrusel se mueva de forma automatica
          function autoplay() {
              $('.carousel').carousel('next');
              setTimeout(autoplay, 9000);
          }

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
          /**->Fin: index.php **/

          /**->Inicio: precios.php**/
          //Inicializacion del Collapsible
          $('.collapsible').collapsible();
          /**->Fin: precios.php**/

          /**->Inicio: tratamientos.php**/
          /*Iniciaizar el parallax del baner dek titulo*/
          $('.parallax').parallax();
          /*Mismo tamaño entre las tarjetas*/
          $('.card-resize-height').matchHeight();
          //dezpliega ventana login
          $('#login').webuiPopover({
              url: '#login-form'
          });
          /**->Fin tratamientos.php**/

          /**->Inicio mediocos.php **/
          $('.materialboxed').materialbox();
          /**->Fin medicos.php**/

          /**-> Inicio: sucursañes.php**/

          /**->Fin:sucursales.php**/
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
      function dropDownExpand(centinela, selectorIdMasMenos, selectorIdColapso) {

          if (centinela === false) {
              //personalizar loca cambios de las clases
              $("#" + selectorIdColapso + " .collapsible-header").addClass("active");
              $("#" + selectorIdColapso).collapsible({
                  accordion: true
              });
              $('#' + selectorIdMasMenos).html('<a class="left-align botonMasInformacion btn-flat waves-effect waves-yellow" id="' + selectorIdMasMenos + '">Menos...</a>');
              return true;
          } else if (centinela === true) {
              $("#" + selectorIdColapso + " .collapsible-header").removeClass(function() {
                  return "active";
              });
              $("#" + selectorIdColapso).collapsible({
                  accordion: true
              });
              $('#' + selectorIdMasMenos).html('<a class="left-align botonMasInformacion btn-flat waves-effect waves-yellow" id="' + selectorIdMasMenos + '">Mas información...</a>');
              return false;
          }
      }
      var centinela1 = false; //Global para que funcione
      var centinela2 = false;
      var centinela3 = false;
      var centinela4 = false;
      var centinela5 = false;
      $(".botonMasInformacion").click(function(event) {
          switch (event.target.id) {
              case 'expandir-tratamiento-one':
                  {
                      centinela1 = dropDownExpand(centinela1, 'expandir-tratamiento-one', $("#colapso-tratamiento-one.colapsoTratamiento").attr('id'));
                      break;
                  }
              case 'expandir-tratamiento-two':
                  {
                      centinela2 = dropDownExpand(centinela2, 'expandir-tratamiento-two', $("#colapso-tratamiento-two.colapsoTratamiento").attr('id'));
                      break;
                  }
              case 'expandir-tratamiento-tree':
                  {
                      centinela3 = dropDownExpand(centinela3, 'expandir-tratamiento-tree', $("#colapso-tratamiento-tree.colapsoTratamiento").attr('id'));
                      break;
                  }
              case 'expandir-tratamiento-for':
                  {
                      centinela4 = dropDownExpand(centinela4, 'expandir-tratamiento-for', $("#colapso-tratamiento-for.colapsoTratamiento").attr('id'));
                      break;
                  }
              case 'expandir-tratamiento-five':
                  {
                      centinela5 = dropDownExpand(centinela5, 'expandir-tratamiento-five', $("#colapso-tratamiento-five.colapsoTratamiento").attr('id'));
                      break;
                  }
              default:
                  {
                      // centinela = false;
                      break;
                  }
          }
      });
      /*Fin: tratamientos.php */

      /*Inicio: sucursales.php */
      //funcion para cambiar imagen
      function cambiaRutaImagen(miUrl) {
          $('.change-imagen').attr('src', miUrl);
      }
      /*Fin:sucursales.php */
  </script>