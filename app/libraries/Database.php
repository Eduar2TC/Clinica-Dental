<?php
/*
    * Clase PDO
    * Conexión a la base de datos
    * Creación de sentencias
    * Retorno de datos en rows y results
*/

class Database {
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    private $controladorDb; //para PDO prepare
    private $sentencia;
    private $error;

    public function __construct(){
        //Origen de datos (Data Source Name -DSN)
        $dsn = 'mysql:host='. $this->host . 
               ';dbname='   . $this->dbname;
        $options = array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        //Creacion Intancia PDO
        try {
            $this->controladorDb = new PDO( $dsn, 
                                            $this->user, 
                                            $this->pass, 
                                            $options 
            );
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }

    //Preparando la sentencia del query
    public function query( $sql ){
        $this->sentencia = $this->controladorDb->prepare( $sql ); //PDO prepare
    }
    //Veinculando  variables
    public function bind( $parametro, $valor, $type = null ){
        if( is_null( $type ) ){
            switch (true) {
                case is_int( $valor ):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool( $valor ):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null( $valor ):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                $type = PDO::PARAM_STR;
            }
        }

        $this->sentencia->bindValue( $parametro,  $valor, $type );
    }

    //Ejecuta la sentencia preparada
    public function execute(){
        return $this->sentencia->execute();
    }
    //Obtiene el resultado como un arreglo de objetos
    public function resultToArrayObj(){
        $this->execute();
        return $this->sentencia->fetchAll( PDO::FETCH_OBJ );
    }
    //Obtiene un solo registro como objeto
    public function resultToSingleRecord(){
        $this->execute();
        return $this->sentencia->fetch( PDO::FETCH_OBJ );
    }
    // Cuenta numero de rows del resultado
    public function rowCount(){
        return $this->sentencia->rowCount();
    }

}