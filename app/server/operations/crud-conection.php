<?php
class Connection{
    public static function Connect(){
    define('server', 'localhost'/*'sql202.epizy.com'*/);
    define('db_name', 'clinica_dental'/*'epiz_24846798_clinica_dental'*/);
    define('user', 'root'/*'epiz_24846798'*/);
    define('password', 'ACM1PT'/*'2c0j3wbh'*/);
        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
        try{
            $connection = new PDO(
                "mysql:host=".server."; dbname=".db_name,user,password, $options
            );
            return $connection;
        }
        catch(Exception $e){
            die("Connection error: ". $e->getMessage());
        }
    }
}
?>