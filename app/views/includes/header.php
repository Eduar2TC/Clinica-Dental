<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="<?php echo URL_ROOT ?>/public/img/favicon.png" />
    <title><?php echo $tituloPagina; ?></title>
    <!--<link rel="stylesheet" href="css/materialize.min.css">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css" />
    <!--Fonts-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab|Poiret+One|Sacramento|Tauri|Roboto+Mono|Poppins" rel="stylesheet">
    <!-- Estilos propios por defecto-->
    <link rel="stylesheet" href="<?php echo URL_ROOT ?>/public/css/header.css">
    <!--index.php-->
    <link rel="stylesheet" href="<?php echo URL_ROOT ?>/public/css/index.css">
    <!---cuerpo index.php-->
    <link rel="stylesheet" href="<?php echo URL_ROOT ?>/public/css/cuerpo.css">

    <!--Login dropdown-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.webui-popover/1.2.1/jquery.webui-popover.min.css">
    <!--Tables.net -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

    <?php
    if (isset($status_page)) {

        switch ((string)$status_page) {
            case 'register': {
                    echo "<!--register-->";
                    echo "\n";
                    echo '<link rel="stylesheet"'. 'href="' . $path_css . 'register.css">';
                }
            case 'medico': {
                    echo "<!--medicos-->";
                    echo "\n";
                    //Calendary
                    //echo '<link rel="stylesheet href='.'"https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.1/fullcalendar.min.css"';
                    echo "<link rel='stylesheet' href='css/fullcalendar.min.css' />";
                    echo "\n";
                    echo "<link rel='stylesheet' media='print'  href='css/fullcalendar.print.min.css' />";
                }
            case 'tratamientos': {
                    echo "<!--tratamientos-->";
                    echo "\n";
                    echo '<link rel="stylesheet"' . 'href="' . $path_css . 'tratamientos.css">';
                    echo "\n";
                }
            case 'medicos': {
                    echo "<!--medicos-->";
                    echo "\n";
                    echo '<link rel="stylesheet"' . 'href="' . $path_css . 'medicos.css">';
                    echo "\n";
                }
            case 'precios': {
                    echo "<!--precios-->";
                    echo "\n";
                    echo '<link rel="stylesheet"' . 'href="' . $path_css . 'precios.css">';
                    echo "\n";
                }
            case 'error_404': {
                    echo "<!--error_404-->";
                    echo "\n";
                    echo '<link rel="stylesheet"' . 'href="' . $path_css . 'error_404.css">';
                    echo "\n";
                }
        }
    }
    ?>
</head>