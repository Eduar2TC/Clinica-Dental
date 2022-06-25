<?php
  class Users extends Controller{
      public function __construct(){
          //$this->userModel = $this->model('MainMedico');
      }
      public function register(){
          if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
            $this->userModel = $this->model('MainMedico');
            //Procesamiento del registro de datos
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

          }else{
              //Inicializa los datos como vacios en caso de que no se envien datos
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
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Process form
            $this->userModel = $this->model('MainLogin');
        } else {
            //Inicializa los datos
            $data = [
                'usuario' => '',
                'email' => '',
                'password' => '',
            ];
        }
      }
      public function medicos(){
        $data = [
            'usuario' => '',
            'email' => '',
            'password' => '',
        ];
        //Carga de view
        $this->view('users/medicos', $data);
      }
  }
?>