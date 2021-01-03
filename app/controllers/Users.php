<?php
  class Users extends Controller{
      public function __construct(){
          
      }
      public function register(){
          if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
              //Process form
          }else{
              //Inicializa los datos
              $data = [
                  'nombre' => '',
                  'telefono' => '',
                  'paterno' => '',
                  'materno' => '',
                  'cedula' => '',
                  'sucursal' => '',
                  'especialidad' => '',
                  'usuario' => '',
                  'email' => '',
                  'password' => '',
                  'confirm_password' => ''

              ];
              //Carga de view
              $this-> view('users/register', $data);
          }
      }
      public function login(){

      }
  }
?>