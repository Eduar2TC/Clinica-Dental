<?php
require_once("server/operations/crud-conection.php");

class DataManage{
    private $data = array(); //almacena los datos de las fechas de las citas
    private $conection; //conexion a bd
    function __construct(){
        $conectObject = new Connection();
        $this->conection = $conectObject->Connect();
        $this->setData();
    }
    public function getData(){
        return json_encode($this->data);
    }

    public function setData(){
        $query = "SELECT * FROM cita ORDER BY idCita";
        $statement = $this->conection->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        foreach($result as $i){
            $fecha = $i['fecha'];
            $originalTime = $i['hora'];
            $timeStamp = strtotime($i['hora']) + 60 * 60; //update value time + 1 hour
            $timeMoreOneHour = date('H:i', $timeStamp);  //format to new time
            $combineDate1 = date('Y-m-d H:i:s', strtotime("$fecha $originalTime"));
            $combineDate2 = date('Y-m-d H:i:s', strtotime("$fecha $timeMoreOneHour"));

            $this->data[] = array(
                'id'    =>      $i['idCita'],
                'title' =>   $i['nombre']." ".$i["paterno"]." ".$i["materno"],
                'start' => $combineDate1,
                'end' => $combineDate2,
            );
        }
    }
}
$data = new DataManage();
echo $data->getData();
?>