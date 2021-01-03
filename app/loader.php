<?php
//Carga de la configuracion
require_once 'config/config.php';
//Carga de librerias
require_once 'libraries/Core.php';
require_once 'libraries/Controller.php';
require_once 'libraries/Database.php';

/*Carga automática de Core Libraries
spl_autoload_register(function ($className) {
    require_once 'libraries/' . $className . '.php';
});*/
