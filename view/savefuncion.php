
<?php

require('conexion.php');



$pelicula=$_POST['pelicula'];
$sala=$_POST['sala'];
$hora=$_POST['hora'];
$termina=$_POST['termina'];
$fecha=$_POST['fecha'];

$query4="SELECT * from cartelera where nombre='$pelicula'";
$resultado4=$mysqli->query($query4);
$row4=$resultado4->fetch_assoc();
$duracion=$row4['duracion'];

$query1="SELECT * from salas where nombre='$sala'";
$resultado1=$mysqli->query($query1);
$row1=$resultado1->fetch_assoc();

$capasidad=$row1['capasidad'];
$count=1;

while ($count <= $capasidad) {
 		$query="INSERT INTO funciones(pelicula,sala,hora,termina,asientos,fecha)
VALUES ('$pelicula','$sala','$hora','$termina','$count','$fecha')";
$count++;
$resultado=$mysqli->query($query);
 } 

$query3="INSERT INTO funcion(pelicula,sala,hora,termina,duracion,fecha)
VALUES ('$pelicula','$sala','$hora','$termina','$duracion','$fecha')";
$resultado3=$mysqli->query($query3);



?>
<?php
session_start();
if(isset ($_SESSION['id'])) {?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>| NOTIFICACION</title>
    <link rel="icon" href="images/icono.png">
    <link rel="preload" href="css/save_funcion.css" type="text/css">
    <link rel="stylesheet" href="css/save_funcion.css" type="text/css">
    <link rel="preload" href="css/normalize.css" type="text/css">
    <link rel="stylesheet" href="css/normalize.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
    <script src="https://kit.fontawesome.com/5b41b5f095.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script language="javascript" type="text/javascript">
    function clearText(field)
    {
        if (field.defaultValue == field.value) field.value = '';
        else if (field.value == '') field.value = field.defaultValue;
    }
    </script>
</head>
<body>
<main>
  <header>
    <nav class="navbar">
        <div class="nav-links">
          <ul>
             <li class="enlace-resp"><a href="ges.php">Estrenos</a></li>
             <li class="enlace-resp"><a href="model_pelicula.php">Pelicula</a></li>
             <li class="enlace-resp"><a href="createfuncion.php">Funciones</a></li>
             <li class="enlace-resp"><a href="createsala.php">Salas</a></li>
          </ul>
        </div>
        
        <img src="images/menu-btn.png" alt="icono de menu" class="menu-hamburger">
        <div class="saludo">
       <center> <p id="title">
    Bienvenido 
    <?php
        echo $_SESSION['name'] . " " . $_SESSION['apellido'];
    ?></center>
    <center><button class="btn-logout" onclick="location.href='index.php'">Cerrar Sesión</button></center>
</p> 
    </div>
      </nav>
</header>
<br><br><br>
<center>
<div id="templatemo_main" align="center" style="color:white;">
    	
        <?php if ($resultado AND $resultado3>0) {
        echo "<h1>Funcion creada correctamente</h1>" ;
        }else{
            echo "<h1>Error,verifique el codigo</h1>";
        }
        
        
        ?>
        <p></p>
        <a href="createfuncion.php"><b style="color:red">Regresar</b></a>
        <br>
        <br>
        <br><br><br><br><br><br><br><br><br><br><br><br>
          
        
               
             
            </div>
</center>
<footer>
    <div class="container">
        <div class="sec about-us">
            <h2>Sobre Nosotros</h2>
            <p>Cineverse es una empresa dedicada a la reserva de asientos de cine que se preocupa por ofrecer la mejor experiencia posible a sus clientes...</p>
            <ul class="sci">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>
                </a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </li>
             </ul>
        </div>
        <div class="sec quick-links">
            <h2>Enlaces Utiles</h2>
            <ul>
                <li><a href="conocenos.php">Conócenos</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Terminos y Condiciones</a></li>
            </ul>
        </div>
        <div class="sec contact">
            <h2>Contáctanos</h2>
            <ul class="info">
                <li>
                    <span><i class="fa-solid fa-location-dot"></i>
                    </span>
                    <span> Km 1 1/2 Calle a plan del Pino,
                        <br> Ciudadela Don Bosco,
                        <br>Soyapango</span>
                </li>
                <li>
                    <span><i class="fa-solid fa-phone"></i>
                    </span>
                    <p><a href="tel:2525-2525"> +503 2525-2525<br></a></p>
                </li>
                <li>
                    <span><i class="fa-solid fa-envelope"></i>
                    </span>
                    <p><a href="mailto:cine.versesv@gmail.com"> cine.versesv@gmail.com</a></p>
                </li>
            </ul>
        </div>
    </div>
  </footer>
  <div class="copyrightText">
    <p>Copyright © 2023 CineVerse. Derechos Reservados</p>
  </div>
</body>
</html>
<?php
}else{echo "Debes iniciar sesion antes de acceder a esta pagina"; } ?>
