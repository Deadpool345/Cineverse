<?php

include 'conexion.php'; 

class wish extends conexion {
        
        private $fine; 
	private $user ; 
	private $password;
	private $consulta ;
	private $conexion;
	private $row, $pas1 , $pas2;
        private $penombre, $peapellido, $peusuario, $pepassword, $verificar ; 

	public function wish(){

	$conect = new conexion();
	$this->conexion = $conect -> conectar();
	$conect -> seleccion_db();  

	}

	public  function login($usuario, $pass){
		$this->user = $usuario;
		$this->password= $pass;
		$this->consulta= mysql_query("SELECT usuario , password FROM wisher where usuario = '".$this->user."' and  password = '".$this->password."'", $this->conexion); 
                if($this->row = mysql_fetch_array($this->consulta)){
                    session_start();
                    $this->consulta = mysql_query("SELECT * FROM wisher where usuario = '".$this->user."' ",  $this->conexion);  
                    $this->row = mysql_fetch_array($this->consulta);
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
                }else{
                        echo " usuario o password incorrecto ";

                        
                }
                return $this->consulta ;
	}

        public function registrar($nom, $ape, $use, $pass){
            
            $this->penombre = $nom;
            $this->peapellido = $ape;
            $this->peusuario = $use;
            $this->pepassword = $pass;
            
            $this->verificar = mysql_query("SELECT usuario FROM wisher where usuario = '".$this->peusuario."' " ,  $this->conexion );

            if($this->row = mysql_fetch_array($this->verificar)){
                
                echo "<h1>EL USUARIO QUE ACABA DE INGRESAR YA EXISTE</h1>";  
                
            }else if(!$this->row = mysql_fetch_array($this->verificar)){
            
                mysql_query("INSERT INTO wisher(nombre, apellido, usuario, password) values('$this->penombre', '$this->peapellido', '$this->peusuario' , '$this->pepassword')", $this->conexion );
                
              
                
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
