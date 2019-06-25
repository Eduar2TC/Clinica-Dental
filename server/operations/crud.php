<?php 
include_once 'crud-conection.php';

$object = new Connection();
$connection->$object->Connect();

$nombre = (isset($_POST['nombre'])) ? $_POST['nombre']:'';
$paterno = (isset($_POST['paterno'])) ? $_POST['paterno'] : '';
$materno = (isset($_POST['materno'])) ? $_POST['materno'] : '';
$email = (isset($_POST['email'])) ? $_POST['email'] : '';
$telefono = (isset($_POST['telefono'])) ? $_POST['telefono'] : '';
$tratamiento = (isset($_POST['tratamiento'])) ? $_POST['tratamiento'] : '';
$fecha = (isset($_POST['fecha'])) ? $_POST['fecha'] : '';
$hora = (isset($_POST['hora'])) ? $_POST['hora'] : '';
$mensaje = (isset($_POST['mensaje'])) ? $_POST['mensaje'] : '';
$opcionOperacion = (isset($_POST['opcionoperacion'])) ? $_POST['opcionoperacion'] : '';
$id =(isset($_POST['id'])) ? $_POST['id'] : '';
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
                                mensaje) 
                        VALUES ('$nombre',
                                '$paterno',
                                '$materno',
                                '$email',
                                '$telefono',
                                '$tratamiento',
                                '$fecha',
                                '$hora',
                                '$mensaje')";
            $resultado = $connection->prepare($query);
            $resultado->execute();
            
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
                             mensaje FROM citas ORDER BY idCita ASC LIMIT 1";
            $resultado = $connection->prepare($query);
            $resultado->execute();
            $data = $resultado->fetchAll(PDO::FETCH_ASSOC);        
        break;
    }
    case 2: { 
        $query = "UPDATE clinica 
                    SET nombre = '$nombre'
                        paterno = '$paterno',
                        materno = '$materno',
                        email = '$email',
                        telefono = '$telefono',
                        tratamiento = '$tratamiento',
                        fecha = '$fecha',
                        hora = '$hora',
                        mensaje = '$mensaje' WHERE idCita = '$id'";
        $resultado = $connection->prepare($query);
        $resultado->execute();

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
                             mensaje FROM citas WHERE id = '$id'";
            $resultado = $connection->prepare($query);
            $resultado->execute();
            $data = $resultado->fetchAll(PDO::FETCH_ASSOC); 
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
                             mensaje FROM citas WHERE id = '$id'";
            $resultado = $connection->prepare($query);
            $resultado->execute();
            $data = $resultado->fetchAll(PDO::FETCH_ASSOC);

            $query = "DELETE  FROM citas WHERE id = '$id'";
            $resultado = $connection->prepare($query);
            $resultado->execute();
        brek;
    }
}
print json_encode($data, JSON_UNESCAPED_UNICODE);
$connection=null;
?>