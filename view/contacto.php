<?php

require('conexion.php');

$query="SELECT * from proxestrenos";
$resultado=$mysqli->query($query);



$count=0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>| Contáctanos</title>
    <link rel="preload" href="css/normalize.css" type="text/css">
    <link rel="stylesheet" href="css/normalize.css" type="text/css">
    <link rel="preload" href="css/contact.css" type="text/css">
    <link rel="stylesheet" href="css/contact.css" type="text/css">
    <link rel="icon" href="images/icono.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5b41b5f095.js" crossorigin="anonymous"></script>
<!-- <link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="js/slimbox2.js"></script>  -->

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
        <a class="logo" href="/"><img class="logotipo" src="images/Logo1.webp" alt="logo"></a>
            <div class="nav-links">
                <ul>
                   <li class="enlace-resp"><a href="/">Home</a></li>
                   <li class="enlace-resp"><a href="conocenos.php">Nosotros</a></li>
                   <li class="enlace-resp"><a href="#">Cartelera</a></li>
                   <li class="enlace-resp"><a href="#">Unirme</a></li>
                   <li class="active"><a href="#">Contáctanos</a></li>
                </ul>
              </div>
              <img src="images/menu-btn.png" alt="icono de menu" class="menu-hamburger">
        </nav>
    </header>
   </main>
   <section class="titulo">
    <article>
    <h1>Contáctanos</h1>
    <hr class="linea-blanca">
    </article>
  </section>
<br>
<section class="contenido">
    <article>
      <br><br>
      <p>Puedes contactarnos por medio de nuestros canales de comunicación que disponemos.</p>
  <br><br><br>
      <p>Si posees una duda puede dirigirte a la sección de preguntas frecuentes.</p>
  <br><br><br>
    </article>
  </section>
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
                <li><a href="#">Conócenos</a></li>
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