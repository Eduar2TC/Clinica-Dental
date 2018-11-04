<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/png" href="img/favicon.png" />
  <title>Inicio</title>
  <link rel="stylesheet" href="css/materialize.min.css">
  <!-- Estilos propios -->
  <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
  <!--Header--->
  <!--Intento 1
  <div>

      <div  class="row">
        <div class="col s12 m4"><img src="img/logo01.png" alt="" class="responsive-img"/></div>

        <div class="col s12 m4 offset-m4">
          <a href="Nosotros.php">Nosotros</a>
          <a href="Emplero.php">Empleo</a>
          <a href="Contacto.php">Contacto</a>
          <a href="Ayuda.php">Ayuda</a>
        </div>  
      </div>
      
      <div class="row">
        <div class="col s12 m4 offset-m8">
            <div >Telefono : 1234567890</div>
          </div>
      </div>
  </div>
  -->
  <div>
    <div class="row blue lighten-4">
      <div class="col s12 m4"><img src="img/logo01.png" alt="" class="responsive-img"/></div>
      <div class="col s12 m4"></div>
      <div class="col s12 m4">
        <div class="row teal lighten-2">
        <a href="Nosotros.php">Nosotros</a>
            <a href="Emplero.php">Empleo</a>
            <a href="Contacto.php">Contacto</a>
            <a href="Ayuda.php">Ayuda</a>
        </div>
        <div class="row blue">
          Telefono : 1234567891011
        </div>
      </div>
    </div>    
  </div>


    <!--<nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">Logo</a>
      <ul class="right hide-on-med-and-down">
        <li><a class="waves-effect waves-light btn">Button</a></li>
        <li><a class="waves-effect waves-light btn">Button <i class="material-icons right">cloud</i></a></li>
        <li><a class="waves-effect waves-light btn-large">Large Button</a></li>
      </ul>
    </div>
  </nav> -->

  <div class="container">

  </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/materialize.min.js"></script>

  <script>
    $("document").ready(function () {
      $('.slider').slider();
    });
  </script>
</body>

</html>