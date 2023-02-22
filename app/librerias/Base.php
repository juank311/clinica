<?php
//clase para conectarse a la base de datos y ejecutar consultas 
class Base
{
    private $host = DB_HOST;
    private $user_db = DB_USUARIO;
    private $password = DB_PASSWORD;
    private $db = DB_NAME;

    private $conn;
    private $stmt;
    private $error;


    public function __construct()
    {
        //configurar conexion
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db;
        $opciones = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        #crear una instancia de PDO
        try {
            //configuracion de la instancia PDO
            $this->conn = new PDO($dsn, $this->user_db, $this->password, $opciones);
            $this->conn->exec('set names utf8');
        } catch (PDOException $e) {
            //Si hay error en la conexión mostrarlo
            $this->error =  $e->getMessage();
            echo $this->error;
        }
    }
}
