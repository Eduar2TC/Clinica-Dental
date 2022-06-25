<!DOCTYPE html>
<html>
<!-- Inicio del Head -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="<?php echo $data['PATH_IMG']; ?>favicon.png" />
    <title><?php echo $data['TITLE']; ?></title>
    <!--Materializecss-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--Fonts-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab|Poiret+One|Sacramento|Tauri|Roboto+Mono|Poppins" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!-- Estilos propios por defecto-->
    <link rel="stylesheet" href="<?php echo $data['PATH_CSS'] ?>header.css">
    <!--index.php-->
    <link rel="stylesheet" href="<?php echo $data['PATH_CSS'] ?>index.css">
    <!---cuerpo index.php-->
    <link rel="stylesheet" href="<?php echo $data['PATH_CSS'] ?>cuerpo.css">
    <!---cuerpo footer.php-->
    <link rel="stylesheet" href="<?php echo $data['PATH_CSS'] ?>footer.css">
    <!--fontawesome animations-->
    <link rel="stylesheet" href="<?php echo $data['PATH_CSS'] ?>font-awesome-animation.min.css">

    <!--Login dropdown-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.webui-popover/1.2.1/jquery.webui-popover.min.css">
    <!--Tables.net -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

    <?php
    if (isset($data['TITLE'])) {

        switch( (string)$data['TITLE'] ) {
            case 'Clinica Dental - Registro': {
                    echo "<!--register-->";
                    echo "\n";
                    echo '<link rel="stylesheet"' . 'href="' . $data['PATH_CSS'] . 'register.css">';
                }
            case 'Clinica Dental - Medicos': {
                    echo "<!--medicos-->";
                    echo "\n";
                    echo "<link rel='stylesheet' href='css/fullcalendar.min.css' />";
                    echo "\n";
                    echo "<link rel='stylesheet' media='print'  href='css/fullcalendar.print.min.css' />";
                    echo "\n";
                    echo '<link rel="stylesheet"' . 'href="' . $data['PATH_CSS'] . 'medicos.css">';
                }
            case 'Clinica Dental - Tratamientos': {
                    echo "<!--tratamientos-->";
                    echo "\n";
                    echo '<link rel="stylesheet"' . 'href="' . $data['PATH_CSS'] . 'tratamientos.css">';
                    echo "\n";
                }

            case 'Clinica Dental - Precios': {
                    echo "<!--precios-->";
                    echo "\n";
                    echo '<link rel="stylesheet"' . 'href="' . $data['PATH_CSS'] . 'precios.css">';
                    echo "\n";
                }
            case 'Clinica Dental - 404': {
                    echo "<!--error_404-->";
                    echo "\n";
                    echo '<link rel="stylesheet"' . 'href="' . $data['PATH_CSS'] . 'error_404.css">';
                    echo "\n";
                }
        }
    }
    ?>
</head>
<?php echo "\n"; ?>