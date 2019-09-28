<?php
include_once( "operations/database-conection.php");

class Login{
    private $email;
    private $password;

    public function __construct($email, $password){
        $this->email = $email;
        $this->password = $password;
    }
    public function creaConexionBd () {
    return $conexion = (new Conexion)->conectarBD();
    }

    public function getUser(){
        return $this->email;
    }
    public function getPass(){
        return $this->password;
    }

    public function searchUser($email, $password){
        $conection = $this->creaConexionBd();
        $query = "SELECT * FROM `usuario` WHERE `email` = '$this->email'";
        if ($result = $conection->query($query)) {
            $fila = $result->fetch_assoc();
            //name encontrado and password correct
            if($result->num_rows == 1 && password_verify($password, $fila['password'])){
                $conection->close();
                return true;
            }
            else{
                return false;
            }
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conection);
            return false;
        }
    }

}

class Main{

    public function __construct()
    {

    }
    public function creaConexionBd(){
        return $conexion = (new Conexion)->conectarBD();
    }

    public function main(){
        //Funcion que recibe los datos de acceso
        $conexion = $this->creaConexionBd(); // creacion de la conexion a la bd

                $email = mysqli_real_escape_string($conexion, $_POST['email']);
                $password = mysqli_real_escape_string($conexion, $_POST['password']);
                $newUser = new Login($email, $password);
                
                if($newUser->searchUser($email, $password) === TRUE){  //Shittttttttttttttttttttttttt
                   echo '¡Bienvenido!';
                   session_start();
                   $_SESSION['login'] = 'success';
                   $_SESSION['email'] = $email;
                   header('Refresh:1 ; url=../../medicos.php');
                }
                else{
                    echo "usuario o contraseña inválida";
                    header('Refresh:1 ; url=../index.php');
                }
    }
}
if (!empty($_POST)) {

    if (isset($_POST['login'])) {
        $main = new Main();
        $main->main();
    } else {
        echo "Datos no enviados";
    }
}
?>