<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <title><?php echo $tituloPagina; ?></title>
    <!--<link rel="stylesheet" href="css/materialize.min.css">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css" />
    <!--Fonts-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab|Poiret+One|Sacramento|Tauri|Roboto+Mono|Poppins" rel="stylesheet">
    <!-- Estilos propios por defecyo-->
    <link rel="stylesheet" href="<?php echo $path_css; ?>header.css">
    <link rel="stylesheet" href="<?php echo $path_css; ?>footer.css">
    <!---precios.php-->
    <link rel="stylesheet" href="<?php echo $path_css; ?>cuerpo.css">
    <!--index.php-->
    <link rel="stylesheet" href="<?php echo $path_css; ?>index.css">
    <!--tratamientos.php-->
    <link rel="stylesheet" href="<?php echo $path_css; ?>tratamientos.css">
    <!--Login dropdown-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.webui-popover/1.2.1/jquery.webui-popover.min.css">
    <!--Medicos-->
    <link rel="stylesheet" href="<?php echo $path_css; ?>medicos.css">
    <!--Precios-->
    <link rel="stylesheet" href="<?php echo $path_css; ?>precios.css">
    <link rel="stylesheet" href="
                                <?php
                                if (isset($status_page)) {

                                    switch ((string)$status_page) {
                                        case 'signup': {
                                                echo "../css/" . $status_page . ".css";
                                            }
                                    }
                                }
                                ?>
        ">
</head>