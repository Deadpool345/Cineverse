
<?php

require('conexion.php');

$nombre=$_POST['nombre'];
$capa=$_POST['capa'];
$tipo=$_POST['tipo'];



$query="INSERT INTO salas(nombre,capasidad,tipo)
VALUES ('$nombre','$capa','$tipo')";
$resultado=$mysqli->query($query);



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
    <link rel="preload" href="css/normalize.css" type="text/css">
    <link rel="stylesheet" href="css/normalize.css" type="text/css">
    <link rel="preload" href="css/save_sala.css" type="text/css">
    <link rel="stylesheet" href="css/save_sala.css" type="text/css">
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
        <a class="logo" href="#"><img class="logotipo" src="images/Logo1.webp" alt="logo"></a>
        <div class="nav-links">
          <ul>
             <li class="enlace-resp"><a href="#">Estrenos</a></li>
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
<br><br>
<center>
<div id="templatemo_main" align="center">
<?php if ($resultado>0) {
echo "<h1>La pelicula introdujo en cartelera</h1>" ;
}else{
echo "<h1>Error al subir $titulo</h1>";
}


?>
<p></p>
<a href="createsala.php"><b>Regresar</b></a>
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
  <script src="js/menu.js" type="text/javascript"></script>
</body>
</body>
</html><?php
}else{echo "Debes iniciar sesion antes de acceder a esta pagina"; } ?>




