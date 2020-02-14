<?php
    class Conexion{
        private $host;
        private $username;
        private $password;
        private $dabaBase;

    function __construct(){
       $this->host=  "localhost";//"sql202.epizy.com";
        $this->username = "root";//"epiz_24846798";
        $this->password = "ACM1PT";//"2c0j3wbh";
        $this->dataBase = "clinica_dental";//"epiz_24846798_clinica_dental";
    }
        public function conectarBD(){
            $conexion = new mysqli($this->host, $this->username, $this->password, $this->dataBase);

            /* verificar la conexión */
            if ($conexion->connect_errno) {
                printf("Falla de la conexión : %s\n", $conexion->connect_error);
                exit();
            } else {
                return $conexion;
                /* liberar la serie de resultados */
                //$conexion->free();
                /* cerrar la conexión */
                //$conexion->close();
            }
        }
    }
?>