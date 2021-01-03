<?php
/*
    *Controlador Base
    *Carga models y views
*/
class Controller{
    //Carga modelo
    public function model($model){
        //Requiere el archivo model
        require_once '../app/models/' . $model . '.php';
        //Instancia del modelo
        return new $model();
    }

    //Carga view
    public function view($view, $data = [] /* <- data for this view */){
        //Checando el archivo view
        if (file_exists('../app/views/' . $view . '.php')) {
            require_once('../app/views/' . $view . '.php');
        } else {
            //El archivo view no existe
            die('View not exists');
        }
    }
}
