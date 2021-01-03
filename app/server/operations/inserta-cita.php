<?php
require_once("database-conection.php");  //standar conection
require_once("crud-conection.php");      //conection PDO
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
        $this->hora = date("h:i:s", strtotime($hora));  //hora is rounded to last hour
        $this->mensaje = $mensaje;
        $this->conexion = $this->creaConexion();
    }

    public function creaConexion(){
        $instanciaBD = new Conexion;
        return $instanciaBD->conectarBD();
    }
    public function getConexion(){
        return $this->conexion;
    }
    public function getDataCita(){
        $data = [
            'nombre' => $this->nombre,
            'paterno' => $this->paterno,
            'materno' => $this->materno,
            'email' => $this->email,
            'telefono' => $this->telefono,
            'tratamiento' => $this->tratamiento,
            'fecha' => $this->fecha,
            'hora' => $this->hora,
            'mensaje' =>$this->mensaje

        ];
        return $data;
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
                                        trim('$this->nombre'), 
                                        trim('$this->paterno'),
                                        trim('$this->materno'),
                                        trim('$this->email'),
                                        trim('$this->telefono'),
                                        trim('$this->tratamiento'),
                                        trim('$this->fecha'),
                                        trim('$this->hora'),
                                        '$this->mensaje',
                                        '2'   /*doctor*/
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
//Clase form validate data inout form
class Validator{
    private $objectCitaArray;  //arreglo que almacena los datos del objeto
    private $connectionPDO;
    function __construct(Cita $objCita){
        $this->objectCitaArray = $objCita->getDataCita();  //el objeto retorna todos sus atributos como un arreglo
        $objtConnection = new Connection();  //PDO connection
        $this->connectionPDO = $objtConnection->Connect();
    }
    public function validateData(){  //object to be able to access the attributes to be validated
        //Search coincidence in enail or phone numbrr

        /*---Telefono y email ya existen--*/
        $query = "SELECT idCita, 
                         nombre, 
                         paterno,
                         materno,
                         email,
                         telefono,
                         tratamiento,
                         fecha,
                         hora,
                         mensaje 
                    FROM cita
                        WHERE 
                           (email = '{$this->objectCitaArray['email']}') AND 
                           (telefono = '{$this->objectCitaArray['telefono']}') AND
                           (hora = '{$this->objectCitaArray['hora']}') AND
                           ( '{$this->objectCitaArray['fecha']}' NOT BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 1 MONTH) ) /* ONLY IF FECHA SENDED NO EXIST IN RANGE */
                        OR (email = '{$this->objectCitaArray['email']}')  /* ONLY EMAIL COINCIDENCES DROP IN DATABASE */
                        OR (telefono = '{$this->objectCitaArray['telefono']}') /* ONLY TELEFONO COINCIDENCES IN DATABASE */
                        OR (hora = '{$this->objectCitaArray['hora']}')
                        OR ( '{$this->objectCitaArray['fecha']}' NOT BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 1 MONTH) )";
        $resultado = $this->connectionPDO->prepare($query);
        $resultado->execute();
        $num_rows = $resultado->rowCount(); //number of rows results
        $dataArray = $resultado->fetchAll(PDO::FETCH_ASSOC); // drop data on associative array
        //var_dump($dataArray);
        if($num_rows >= 1){
            if( (in_array($this->objectCitaArray['telefono'], $dataArray[0]) == TRUE) && 
                 (in_array($this->objectCitaArray['email'], $dataArray[0], TRUE) == TRUE) && 
                 (in_array($this->objectCitaArray['hora'], $dataArray[0], TRUE) == TRUE) &&
                 (in_array($this->objectCitaArray['fecha'], $dataArray[0], TRUE) == TRUE)
            ){                                                                          //the telefono and email and hora exist
                $data[] = [
                    'request_validation_type' => 'email-tel-hora-fecha',
                    'message_email' => 'Error: El email ya existe',
                    'message_telefono' => 'Error: El telefono ya existe',
                    'message_hora' => 'Error: La hora de la cita ya esta reservada!',
                    'message_fecha' => 'Error: Fecha inválida!'
                ];
                print json_encode($data, JSON_UNESCAPED_UNICODE);
                return FALSE;  
            }
            else if( (in_array($this->objectCitaArray['telefono'], $dataArray[0]) == TRUE) &&
                    (in_array($this->objectCitaArray['email'], $dataArray[0]) == TRUE)){
                        $data[] = [
                            'request_validation_type' => 'tel-email',
                            'message_email' => 'Error: El email ya existe',
                            'message_telefono' => 'Error: El telefono ya existe'
                        ];
                print json_encode($data, JSON_UNESCAPED_UNICODE);
                return FALSE; 
            }
            else if(in_array($this->objectCitaArray['telefono'], $dataArray[0]) == TRUE){ //the telefono exist
                $data[] = [
                    'request_validation_type' => 'tel',
                    'message_telefono' => 'Error: El telefono ya existe'
                ];
                print json_encode($data, JSON_UNESCAPED_UNICODE);
                return FALSE; 
            } else if (in_array($this->objectCitaArray['email'], $dataArray[0]) == TRUE) { //the email exist
                $data[] = [
                    'request_validation_type' => 'email',
                    'message_email' => 'Error: El e-mail ya existe'
                ];
                print json_encode($data, JSON_UNESCAPED_UNICODE);
                return FALSE;
            } else if (in_array($this->objectCitaArray['hora'], $dataArray[0]) == TRUE) { //the email exist
                $data[] = [
                    'request_validation_type' => 'hora',
                    'message_hora' => 'Error: Hora de a cita ocupada'
                ];
                print json_encode($data, JSON_UNESCAPED_UNICODE);
                return FALSE;
            }
            else if(in_array($this->objectCitaArray['fecha'], $dataArray[0]) == TRUE){
                $data[] = [
                    'request_validation_type' => 'fecha',
                    'message_fecha' => 'Error: Fecha de la cita inválida'
                ];
                print json_encode($data, JSON_UNESCAPED_UNICODE);
                return FALSE;
            }
        }
        else {
            return TRUE; //The email and telefono no exist
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
            self::$cita = new Cita(
                                $_POST['nombre'], 
                                $_POST['paterno'], 
                                $_POST['materno'], 
                                $_POST['email'], 
                                $_POST['telefono'], 
                                $_POST['opciones-tratamientos'],  
                                $_POST['fecha'],
            date("h:00:00", strtotime($_POST['hora'])), 
                                $_POST['mensaje']);
        $validator = new Validator(self::$cita);
            if ($validator->validateData() === TRUE && self::$cita->insertaCita() === TRUE) {
            $data[] = [
                'request_validation_type' => 'success'
            ];
            print json_encode($data, JSON_UNESCAPED_UNICODE);
            } else {
               //echo "Error algo paso :v";
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