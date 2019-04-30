<?php
require_once("database-conection.php");
class InsertaData{

    public function insertaMedico($rutaImagen, $nombre, $paterno, $materno, $especialidad, $cedula, $sucursal){
        $path = $rutaImagen; //'img/profile-doctor01.png';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64Image = 'data:image/' . $type . ';base64,' . base64_encode($data);

        $instancia = new Conexion();
        $conexion=$instancia->conectarBD();

        $query = "INSERT INTO `medico`(
                                        `imagenPerfil`,
                                        `nombre`, 
                                        `paterno`,
                                        `materno`,
                                        `especialidad`,
                                        `cedulaProfesional`,
                                        `sucursal_idSucursal`
                  )
                  VALUES(
                      '$rutaImagen', 
                      '$nombre', 
                      '$paterno',
                      '$materno',
                      '$especialidad',
                      '$cedula',
                      '$sucursal')";

        if ($conexion->query($query) == true) {
            $conexion->close();
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conexion);
        }
    }

    public function insertaUsuarioMedico($usuario, $email, $password, $fk_medico){
        $passwordHash = password_hash($password, PASSWORD_BCRYPT, ['cost' => 10]);
        $instancia = new Conexion();
        $conexion = $instancia->conectarBD();
        $query = "INSERT INTO `usuario`(
                                        `usuario`,
                                        `email`, 
                                        `password`,
                                        `medico_IdMedico`
                  )
                  VALUES(
                      '$usuario', 
                      '$email', 
                      '$passwordHash',
                      $fk_medico
                      )";

        if ($conexion->query($query) == true) {
            $conexion->close();
  
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conexion);
        }
    }

    public function insertaSucursal($nombre, $telefono, $direccion, $colonia){
        $instancia = new Conexion();
        $conexion = $instancia->conectarBD();

        $query = "INSERT INTO `sucursal`(
                                        `nombre`,
                                        `telefono`, 
                                        `direccion`,
                                        `colonia`
                  )
                  VALUES( 
                      '$nombre', 
                      '$telefono',
                      '$direccion',
                      '$colonia'
                      )";

        if ($conexion->query($query) == true) {
            $conexion->close();
  
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conexion);
        }
        
    }

    public function insertaCita($nombre, $paterno, $materno, $email, $telefono, $fecha, $hora, $mensaje, $fkMedico){

    }
}

$insertaData = new InsertaData();

//$insertaData->insertaMedico(NULL, "Hugo", "Fajardo", "Maldonado", "Cirujano dental", "7038794", 1);
//$insertaData->insertaUsuarioMedico("medico01", "medico01@gmail.com", "12345", 1);
//$insertaData->insertaUsuarioMedico("medico02", "medico02@gmail.com", "12345", 2);
//$insertaData->insertaUsuarioMedico("medico03", "medico03@gmail.com", "12345", 3);
//$insertaData->insertaUsuarioMedico("medico04", "medico04@gmail.com", "12345", 4);
//$insertaData->insertaUsuarioMedico("medico05", "medico05@gmail.com", "12345", 5);
//$insertaData->insertaSucursal("Sucursal San Manuel", "2221234567", "Circumvalación 1280", "San Manuel", 4);
//$insertaData->insertaSucursal("Sucursal Centro", "2221234550", "Reforma 106", "Centro", 5);
//$insertaData->insertaSucursal("Sucursal San Manuel", "2221234567", "Circumvalación 1280", "San Manuel");
//$insertaData->insertaSucursal("Sucursal Las Margaritas", "2228530500", "Las Margaritas 101", "Bugambilias", 4);
//$insertaData->insertaSucursal("Sucursal Las Margaritas", "2228530500", "Las Margaritas 101", "Bugambilias", 5);

//(1)
//$insertaData->insertaSucursal("Sucursal San Manuel", "2221234567", "Circunvalación 1280", "San Manuel");
//$insertaData->insertaSucursal("Sucursal Centro", "2221234550", "Reforma 106", "Centro");
//$insertaData->insertaSucursal("Sucursal Las Margaritas", "2228530500", "Las Margaritas 101", "Bugambilias");
//(2)
//$insertaData->insertaMedico(NULL, "Hugo", "Fajardo", "2221345678","Maldonado", "Ortodoncia", "1038791", 1);
//$insertaData->insertaMedico(NULL, "Lisa", "Montiel", "Ortega", "Peridoncia", "2038792", 2);
//$insertaData->insertaMedico(NULL, "Manuel", "Pérez", "Ortíz", "Endodoncia", "3038793", 3);
//$insertaData->insertaMedico(NULL, "Pedro", "García", "De la Cruz", "Cirujia Dental", "4038794", 1);
//$insertaData->insertaMedico(NULL, "Ricardo", "Gonzáles", "Palencia", "Estetica dental", "5038795", 2);

//$insertaData->insertaUsuarioMedico("medico01", "medico01@gmail.com", "12345", 1);

?>