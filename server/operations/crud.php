<?php 
include_once 'crud-conection.php';
$connection = Connection::Connect();

$nombre = (isset($_POST['nombre'])) ? $_POST['nombre']:'';
$paterno = (isset($_POST['paterno'])) ? $_POST['paterno'] : '';
$materno = (isset($_POST['materno'])) ? $_POST['materno'] : '';
$email = (isset($_POST['email'])) ? $_POST['email'] : '';
$telefono = (isset($_POST['telefono'])) ? $_POST['telefono'] : '';
$tratamiento = (isset($_POST['tratamiento'])) ? $_POST['tratamiento'] : '';
$fecha = (isset($_POST['fecha'])) ? $_POST['fecha'] : '';
$hora = (isset($_POST['hora'])) ? $_POST['hora'] : '';
$mensaje = (isset($_POST['mensaje'])) ? $_POST['mensaje'] : '';
$opcionOperacion = (isset($_POST['opcionOperacion'])) ? $_POST['opcionOperacion'] : '';
$id =(isset($_POST['id'])) ? $_POST['id'] : '';
$data ='';
switch($opcionOperacion){
    case 1: {
            $query = "INSERT INTO cita(nombre, 
                                paterno, 
                                materno, 
                                email, 
                                telefono, 
                                tratamiento, 
                                fecha, 
                                hora, 
                                mensaje,
                                medico_idMedico)    /*Gestionar el identificador del medico logeado*/ 
                        VALUES ('$nombre',
                                '$paterno',
                                '$materno',
                                '$email',
                                '$telefono',
                                '$tratamiento',
                                '$fecha',
                                '$hora',
                                '$mensaje',
                                '2')";          /*Para pruebas el id del medico es 2 */
                try{
                    $resultado = $connection->prepare($query);
                    $resultado->execute();            
                }
            catch(Exception $e){
                $GLOBALS['data'] = $e->getMessage();
            }
            //cambiar a la variable de instancia de la peticion principal
            $query = "SELECT idCita, 
                             nombre, 
                             paterno
                             materno,
                             email,
                             telefono,
                             tratamiento,
                             fecha,
                             hora,
                             mensaje FROM cita ORDER BY idCita DESC LIMIT 1";
            $resultado = $connection->prepare($query);
            $resultado->execute();
            $GLOBALS['data'] = $resultado->fetchAll(PDO::FETCH_ASSOC);
            break;
            
    }
    case 2: {
            $query = "UPDATE cita
                        SET nombre =?,
                            paterno =?,
                            materno =?,
                            email = ?,
                            telefono =?,
                            tratamiento =?,
                            fecha =?,
                            hora =?,
                            mensaje =?
                        WHERE idCita =?";
            $resultado = $connection->prepare($query);

            try {
                $resultado->execute([
                    $nombre,
                    $paterno,
                    $materno,
                    $email,
                    $telefono,
                    $tratamiento,
                    $fecha,
                    $hora,
                    $mensaje,
                    $id
                ]);

                if($resultado){
                    //cambiar a la variable de instancia de la peticion principal
                    $query = "SELECT idCita, 
                             nombre, 
                             paterno
                             materno,
                             email,
                             telefono,
                             tratamiento,
                             fecha,
                             hora,
                             mensaje FROM cita WHERE idCita = '$id'";
                    $resultado = $connection->prepare($query);
                    $resultado->execute();
                    $GLOBALS['data'] = $resultado->fetchAll(PDO::FETCH_ASSOC);
   
                }
                else{
                    echo "algo paso shit";
                }
            } catch (Exception $e) {
                echo $e->getMessage();
            }
            break;
    }
    case 3:{
            $query = "SELECT idCita, 
                             nombre, 
                             paterno
                             materno,
                             email,
                             telefono,
                             tratamiento,
                             fecha,
                             hora,
                             mensaje FROM cita WHERE id = '$id'";
            $resultado = $connection->prepare($query);
            $resultado->execute();
            $data = $resultado->fetchAll(PDO::FETCH_ASSOC);

            $query = "DELETE  FROM cita WHERE idCita = '$id'";
            $resultado = $connection->prepare($query);
            $resultado->execute();
            //print json_encode($data, JSON_UNESCAPED_UNICODE);
        break;
    }
}
print json_encode($data, JSON_UNESCAPED_UNICODE);
$connection=null;
?>