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
        $conection = $this->creaConexion();
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

        if ($conection->query($query) == true) {
            $conection->close();
            return true;
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conection);
        }
    }

}
class Main{
    private $cita;
    public function main(){
        if (isset($_POST['submit'])) {
            $this->cita = new Cita($_POST['nombre'], $_POST['paterno'], $_POST['materno'], $_POST['email'], $_POST['telefono'], $_POST['opciones-tratamientos'],  $_POST['fecha'], $_POST['hora'], $_POST['mensaje']);
            if (($this->cita->insertaCita() == true)) {
                echo "cita agregada!";
                printf("redirigiendo...");
                header('Refresh:1 ; url=../../index.php');
            } else {
                echo "algo paso";
            }
        }
    }
}
$contador = 0; 
if($contador < 1){
    $main = new Main();
    $main->main();
    ++$contador;
}
else{
    echo "termino tu turno";
}
?>