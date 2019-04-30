<?php
    class Conexion{
        private $host;
        private $username;
        private $password;
        private $dabaBase;

    function __construct(){

        $this->host=  "localhost"; //"sql213.epizy.com";
        $this->username = "root"; //"epiz_23039482"; 
        $this->password =  "ACM1PT";//"st62bgrk";
        $this->dataBase =  "clinica_dental";//"epiz_23039482_clinica_dental"; //"clinica_dental";
    }
        public function conectarBD(){
            $conexion = new mysqli($this->host, $this->username, $this->password, $this->dataBase);

            /* verificar la conexión */
            if (mysqli_connect_errno()) {
                printf("Falla de la conexión : %s\n", $mysqli->connect_error);
                exit();
            } else {
                return $conexion;
                /* liberar la serie de resultados */
                $resultado->free();
                /* cerrar la conexión */
                $mysqli->close();
            }
        }
    }
?>