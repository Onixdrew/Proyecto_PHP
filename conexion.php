<?php
class Conexion{
    private $host;
    private $user;
    private $pwd;
    private $bd;
    private $conn;

function __construct($hostaux,$useraux,$pwdaux,$bd){
    $this->host=$hostaux;
    $this->user=$useraux;
    $this->pwd=$pwdaux;
    $this->bd=$bd;
    
}

public function Conectar(){
    try{
        $this->conn = new PDO ("mysql:host={$this->host};dbname={$this->bd};charset=utf8mb4;", $this->user, $this->pwd);
        return $this->conn;
        
    }
    catch (PDOException $e){
        echo 'error de conexion:' . $e->getMessage();
        

    }

}
}
?>