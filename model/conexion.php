<?php

class Conexion {
    
    private $db;
    private $usuario;
    private $servidor;
    private $password;
    private $conexion;

    public function __construct(){
        $this->db = "wisher";
        $this->usuario = "root";
        $this->servidor = "localhost";
        $this->password = "";
    }

    public function conectar(){
        $this->conexion = new mysqli($this->servidor, $this->usuario, $this->password, $this->db);
        if ($this->conexion->connect_error) {
            die("Error al conectar con la base de datos: " . $this->conexion->connect_error);
        }
        return $this->conexion;
    }

    public function seleccion_db(){
        if (!$this->conexion) {
            $this->conectar();
        }
        if (!$this->conexion->select_db($this->db)) {
            die("Error al seleccionar la base de datos: " . $this->conexion->error);
        }
    }
}
?>
