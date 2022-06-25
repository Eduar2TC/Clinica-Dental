<?php
    //X define('ABSOLUTE_INDEX_URL', 'http://localhost/Clinica-Dental/'); // absolute path
    //App Root
    define( 'APP_ROOT', dirname( dirname( __FILE__ ) ) );
    //URL Root
    define( 'URL_ROOT', 'http://localhost/Clinica-Dental' );
    //Nombre Sitio
    define( 'SITE_NAME', 'Clinica_Dental' );
    //DB Params
    define( 'DB_HOST', 'localhost' );
    define( 'DB_NAME', 'clinica_dental' );
    define( 'DB_USER', 'root' );
    define( 'DB_PASS', 'ACM1PT' );
    //Http
    define('SOLICITUD_HTTP', 'http://' . $_SERVER['HTTP_HOST'] . '/Clinica-Dental/');
    define('CHARSET', 'utf8mb4');
    define('HEAD',   APP_ROOT . '/views/inc/head.php'); //HEADER
    define('HEADER', APP_ROOT.'/views/inc/header.php'); //HEADER
    define('FOOTER', APP_ROOT.'/views/inc/footer.php'); //FOOTER
    //define('PATH_CSS', 'public/css/'); //Path absolute
     
?>