
<?php
session_start();
if(isset ($_SESSION['id'])) {?>
<?php

require('conexion.php');

$titulo=$_POST['titulo'];
$genero=$_POST['genero'];
$duracion=$_POST['duracion'];
$clasifica=$_POST['clasi'];
$sipnosis=$_POST['sipnosis'];
$costo=$_POST['costo'];
$clasifica=$_POST['clasi'];

$archivoimg=$_FILES['foto']['tmp_name'];
$destinoimg="imag/".$_FILES['foto']['name'];
move_uploaded_file($archivoimg, $destinoimg);



$directorio="media";
$archivo=$_FILES['video']['tmp_name'];
$nombrearchivo=$_FILES['video']['name'];
move_uploaded_file($archivo, $directorio."/".$nombrearchivo);
$ruta=$directorio."/".$nombrearchivo;


$query="INSERT INTO cartelera(nombre,duracion,genero,clasificacion,sipnosis,foto,trailer,cost)
VALUES ('$titulo','$duracion','$genero','$clasifica','$sipnosis','$destinoimg','$ruta','$costo')";
$resultado=$mysqli->query($query);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>| NOTIFICACION</title>
    <script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
<link rel="preload" href="css/normalize.css" type="text/css">
<link rel="stylesheet" href="css/normalize.css" type="text/css">
<link rel="preload" href="css/save_peliculas.css" type="text/css">
<link rel="stylesheet" href="css/save_pelicula.css" type="text/css">
<link rel="icon" href="images/icono.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
<script src="https://kit.fontawesome.com/5b41b5f095.js" crossorigin="anonymous"></script>
</head>
<body>
<main>
  <header>
    <nav class="navbar">
        <div class="nav-links">
          <ul>
             <li class="enlace-resp"><a href="Ges.php">Estrenos</a></li>
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
</main>
<br><br><br>
<center>
<div id="templatemo_main" align="center">


<?php if ($resultado>0) {
echo "<h1>La pelicula introdujo en cartelera</h1>" ;
}else{
echo "<h1>Error al subir $titulo</h1>";
}


?>
<p></p>
<a href="model_pelicula.php"><b style="color:llelow">Regresar</b></a>
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

</html>
<?php
}else{echo "Debes iniciar sesion antes de acceder a esta pagina"; } ?>

