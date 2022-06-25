<?php
include_once("database-conection.php");
class Medico
{
    private $imagenPerfil;
    private $nombre;
    private $paterno;
    private $materno;
    private $telefono;
    private $especialidad;
    private $cedulaProfesional;
    private $sucursal;
    /**Get numeric in post data (1,2,3) */

    public function __construct($imagenPerfil, $nombre, $paterno, $materno, $telefono, $especialidad, $cedulaProfesional, $sucursal)
    {
        $this->imagenPerfil = $imagenPerfil;
        $this->nombre = $nombre;
        $this->paterno = $paterno;
        $this->materno = $materno;
        $this->telefono = $telefono;
        $this->especialidad = $especialidad;
        $this->cedulaProfesional = $cedulaProfesional;
        $this->sucursal = $sucursal;
    }

    public function getLastInsertKey()
    { //innecesario
        $conection = $this->createConectionDb();
        $numberLastKeyQuery = "SELECT idUsuario FROM usuario ORDER BY IdUsuario DESC LIMIT 1";
        if ($number = $conection->query($numberLastKeyQuery) == true) {
            return $number;
            $conection->close();
        } else {
            echo "Error: " . $numberLastKeyQuery . "<br>" . mysqli_error($conection);
        }
    }
    public function createConectionDb()
    {
        $conection_instance = new Conexion;
        $conexion = $conection_instance->conectarBD();
        return $conexion;
    }
    public function InsertarDatos()
    {
        $conection = $this->createConectionDb();
        $query = "INSERT INTO `medico`(
                                        `imagenPerfil`,
                                        `nombre`, 
                                        `paterno`,
                                        `materno`,
                                        `telefono`,
                                        `especialidad`,
                                        `cedulaProfesional`,
                                        `sucursal_idSucursal`
                  )
                  VALUES(
                      '$this->imagenPerfil', 
                      '$this->nombre', 
                      '$this->paterno',
                      '$this->materno',
                      '$this->telefono',
                      '$this->especialidad',
                      '$this->cedulaProfesional',
                      '$this->sucursal'
                      )";

        if ($conection->query($query) == true) {
            $conection->close();
            return true;
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conection);
        }
    }
    public function getIdMedico($nombreUsuario)
    {

        $conection = $this->createConectionDb();
        $query = "SELECT idMedico FROM `medico` WHERE `nombre` = '$nombreUsuario'";
        //$query2 = "SELECT * from medico med INNER JOIN usuario user ON med.idMedico = user.medico_idMedico";
        if ($resultado = $conection->query($query)) {

            while ($fila = $resultado->fetch_assoc()) {
                $idMedico = $fila['idMedico'];
                return $idMedico;
            }
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conection);
        }
    }
}

class Usuario
{
    private $email;
    private $usuario;
    private $password;
    private $fk_Medico; //Get Foreing key Alumno on insert new Usuario

    public function __construct($email, $usuario, $password, $idMedico)
    {
        $this->email = $email;
        $this->usuario = $usuario;
        $this->password = $this->passwordHash($password);
        $this->fk_Medico = $idMedico;   //Initiaice from Foreing key alumno
    }
    public function passwordHash($password)
    {
        $hash = password_hash($password, PASSWORD_BCRYPT, ['cost' => 10]);
        return $hash;
    }
    public function createConectionDb()
    {
        $conection_instance = new Conexion;
        $conexion = $conection_instance->conectarBD();
        return $conexion;
    }
    public function InsertarDatos()
    {
        $conexion = $this->createConectionDb();
        $query = "INSERT INTO `usuario`(
                                        `email`,
                                        `usuario`, 
                                        `password`,
                                        `medico_IdMedico`
                  )
                  VALUES(
                      '$this->email', 
                      '$this->usuario', 
                      '$this->password',
                      '$this->fk_Medico'
                      )";

        if ($conexion->query($query) == true) {
            $conexion->close();
            return true;
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conexion);
        }
    }
}

class Main
{
    private $medico;
    private $usuario;

    public function main()
    {
        // if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['acepto-terminos']) && $_POST['acepto-terminos'] == "Si" && isset($_FILES['image'])) {
            //imagen 
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if ($check !== false) {
                $image = $_FILES['image']['tmp_name'];
                $imgContent = addslashes(file_get_contents($image));
            }

            $this->medico = new Medico($imgContent, $_POST['nombre'], $_POST['paterno'], $_POST['materno'], $_POST['telefono'], $_POST['especialidad'],  $_POST['cedula'],  $_POST['id-sucursal']);
            $fk_medico = $this->medico->getIdMedico($_POST['nombre']);

            $this->usuario = new Usuario($_POST['usuario'], $_POST['email'], $_POST['password'], $fk_medico);

            if ($this->medico->InsertarDatos() == true && $this->usuario->InsertarDatos() == true) {
                echo "Agregado exitosamente";
                printf("redirigiendo...");
                header('Refresh:1 ; url=../signup.php');
            } else {
                echo "Error al intentar agregar nuevo usuario";
            }
        } else {
            echo "No es posible el registro";
        }
    }
    // }
}

//(new Main)->main();
