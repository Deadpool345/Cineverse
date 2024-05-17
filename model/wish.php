<?php

include 'conexion.php'; 

class Wish extends Conexion {
        
    private $fine; 
    private $user; 
    private $password;
    private $consulta;
    private $conexion;
    private $row, $pas1, $pas2;
    private $penombre, $peapellido, $peusuario, $pepassword, $verificar; 

    public function __construct(){

        $conect = new Conexion();
        $this->conexion = $conect->conectar();
        $conect->seleccion_db();  

    }

    public function login($usuario, $pass){
        $this->user = $usuario;
        $this->password = $pass;
        $this->consulta = $this->conexion->query("SELECT usuario, password FROM wisher where usuario = '".$this->user."' and  password = '".$this->password."'"); 
        if($this->row = $this->consulta->fetch_assoc()){
            session_start();
            $this->consulta = $this->conexion->query("SELECT * FROM wisher where usuario = '".$this->user."' ");  
            $this->row = $this->consulta->fetch_assoc();
            //Id
            $this->id = $this->row['id'];
            $_SESSION['id'] = $this->id;
            $this->ini = 1;
            //Nombre
            $this->id = $this->row['nombre'];
            $_SESSION['name'] = $this->id; 
            //apellido
            $this->id = $this->row['apellido'];
            $_SESSION['apellido'] = $this->id; 
            header("Location: ../view/ges.php");      
        } else {
            echo "Usuario o contraseña incorrectos";
        }
        return $this->consulta;
    }

    public function registrar($nom, $ape, $use, $pass){
        $this->penombre = $nom;
        $this->peapellido = $ape;
        $this->peusuario = $use;
        $this->pepassword = $pass;

        $this->verificar = $this->conexion->query("SELECT usuario FROM wisher where usuario = '".$this->peusuario."' ");

        if($this->row = $this->verificar->fetch_assoc()){
            echo "<h1>EL USUARIO QUE ACABA DE INGRESAR YA EXISTE</h1>";  
        } else {
            $this->conexion->query("INSERT INTO wisher(nombre, apellido, usuario, password) values('$this->penombre', '$this->peapellido', '$this->peusuario' , '$this->pepassword')");
            header("location: ../view/login.php");
        }
    }

    public function verificar($pass1 , $pass2){
        $this->fine = false;
        $this->pas1 = $pass1;
        $this->pas2 = $pass2;

        if($this->pas1 == $this->pas2){
            $this->fine = true ; 
        }

        return $this->fine ; 
    }
}
?>
