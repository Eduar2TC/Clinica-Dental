<?php
    /*
    *App Core class 
    *Crea URL & Carga Core Controller
    *Formato URL : /controllerName/MethodName/paramsFunction
    */
    class Core{
        protected $currentController = 'Pages';
        protected $currentMethod = 'index';
        protected $params = [];

        public function __construct(){
            //print_r( 'URL : ' .$this->getUrl() );
            $url = $this->getURL();
            /* -CONTROLLER */
            //Checa en controllers para el primer valor
            if( isset( $url[0] ) ){
                //Checa el archivo controller
                if (file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) { //ucwords convierte cada letra inicial de cada palabra a Mayuscula
                    //Si existe el Controller este se setea como controller actual
                    $this->currentController = ucwords($url[0]);
                    //print_r($this->currentController);
                    //Unset 0 index array url (Controller)
                    unset($url[0]);
                }
            }
            //Requiere el controller
            require_once '../app/controllers/' . $this->currentController. '.php';
            //Instanciando el actual controller class
            $this->currentController = new $this->currentController;
            
            /* -METHOD */
            //Checa la segunda parte del URL
            if( isset( $url[1] ) ){
                //Check to see if method exist in actual controller
                //Verifica si existe el metodo en el controller actual
                if( method_exists( $this->currentController, $url[1] ) ){
                    $this->currentMethod = $url[1];
                //Unset element position 1 index del arreglo (Method)
                unset( $url[1] );
                }
            }

            /* -PARARAMS */
            //Get params
            $this->params = !empty( $url ) ? array_values( $url ) : []; //copia los valores del arreglo del $url a $params si este no esta vacio sino params = ''
                                                                        
            call_user_func_array( 
                [ $this->currentController,
                  $this->currentMethod 
                ],
                $this->params
            );
        }
        /*RETURN: CONTROLLER / METHOD / Params */
        public function getURL(){
            if( isset( $_GET['url'] ) ){
                $url = rtrim( $_GET['url'], '/' ); //Elimina caracter / en la URL
                $url = filter_var( $url, FILTER_SANITIZE_URL ); //Elimina caracteres especiales del URL
                $url = explode( '/', $url ); //Convierte el URL a Array limitado por el Slash '/'
                return $url;
            }
        }
    
    
    }
