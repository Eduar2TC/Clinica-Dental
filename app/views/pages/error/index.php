<!DOCTYPE html>
<html lang="es">
<?php
$tituloPagina = "Clinica-Error"; //Nombre de la página 
$path_css = "public/css/";
$status_page = "error_404";
require_once HEADER;
?>

<body>
    <div class="container-error  blue-grey lighten-4">
        <div class="error valign-wrapper row">
            <div class="center hoverable col card s10 pull-s1 m6 pull-m3 l4 pull-l4 lighten-5">
                <h2>Error 404</h2>
                <div class="card-action center">
                    <a class="btn green waves-effect waves-light pulse" onclick="location.href='main';">INICIO</a>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
require_once FOOTER;
?>

</html>