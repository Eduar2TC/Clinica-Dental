<?php
require_once("database-conection.php");
class Cita{

    private $nombre;
    private $paterno;
    private $materno;
    private $email;
    private $telefono;
    private $tratamiento;
    private $fecha;
    private $hora;
    private $mensaje;
    private $conexion;

    public function __construct($nombre, $paterno, $materno, $email, $telefono, $tratamiento, $fecha, $hora, $mensaje){
        $this->nombre = $nombre;
        $this->paterno = $paterno;
        $this->materno = $materno;
        $this->email =$email;
        $this->telefono = $telefono;
        $this->tratamiento = $tratamiento;
        $this->fecha = $fecha;
        $this->hora = $hora;
        $this->mensaje = $mensaje;
        
    }

    public function creaConexion(){
        $instanciaBD = new Conexion;
        return $instanciaBD->conectarBD();
    }
    public function insertaCita(){
        $conexion = $this->creaConexion();
        $query = "INSERT INTO `cita`(
                                        `nombre`, 
                                        `paterno`,
                                        `materno`,
                                        `email`,
                                        `telefono`,
                                        `tratamiento`,
                                        `fecha`,
                                        `hora`,
                                        `mensaje`,
                                        `medico_idMedico`
                  )
                  VALUES( 
                      '$this->nombre', 
                      '$this->paterno',
                      '$this->materno',
                      '$this->email',
                      '$this->telefono',
                      '$this->tratamiento',
                      '$this->fecha',
                      '$this->hora',
                      '$this->mensaje',
                      '2'
                      )";

        if ($conexion->query($query) === TRUE) {
            $conexion->close();
            return TRUE;
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($this->conexion);
            $conexion->close();
            return FALSE;
        }
    }

}

class Main{
    private static $cita;
    private function __construct()
    {
        // Your "heavy" initialization stuff here
    }
    public static function main(){  //Cambiar!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
        //if (isset($_POST['submit']) && !empty($_POST['submit'])) {

            self::$cita = new Cita($_POST['nombre'], 
                                $_POST['paterno'], 
                                $_POST['materno'], 
                                $_POST['email'], 
                                $_POST['telefono'], 
                                $_POST['opciones-tratamientos'],  
                                $_POST['fecha'], 
                                $_POST['hora'], 
                                $_POST['mensaje']);
            if (self::$cita->insertaCita() === TRUE) {
                echo "cita agregada!";
                //printf("redirigiendo...");
                //header('Refresh:1 ; url=../../index.php');
           
            } else {
                echo "algo paso";
            }
        //}
       // else{
          //  echo "datos no enviados";
        //}
    }
}

    //$main = new Main;
    Main::main();  //Unica manera de hace funcionar sin caer en la duplicidad de los registros insertados

?>