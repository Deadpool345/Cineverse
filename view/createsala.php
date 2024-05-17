<?php

require('conexion.php');
$query1="SELECT * from salas";
$resultado3=$mysqli->query($query1);
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
    <title>| CREAR SALAS</title>
    <link rel="icon" href="images/icono.png">
    <link rel="preload" href="css/normalize.css" type="text/css">
    <link rel="stylesheet" href="css/normalize.css" type="text/css">
    <link rel="preload" href="css/create_sala.css" type="text/css">
    <link rel="stylesheet" href="css/create_sala.css" type="text/css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script language="javascript" type="text/javascript">
    function clearText(field)
    {
        if (field.defaultValue == field.value) field.value = '';
        else if (field.value == '') field.value = field.defaultValue;
    }
    </script>
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
<br><br>
<center>
<form name"savesala"  onsubmit="return formu(this)" method="POST" action="savesala.php" enctype="multipart/form-data" class="form-register">
<img src="images/logo.png" alt="" height="100px" width="100px" class="logo-form">
    <br>
        <h2 class="title-form">SALAS</h2>
        <br>
        <input type="text" name="nombre" class="controls" placeholder="Nombre de sala"/>
        <br><br>
        <input  type="text" name="capa" class="controls" placeholder="Capacidad de personas" />
        <br>
        <select name="tipo" class="formulario__campos controls">
                                <option value="TIPO DE SALA" selected disabled>ELIGA TIPO DE SALA</option>
								<option value="Convensional">Convencional</option>
								<option value="Vip">Vip</option>
        </select>
        <button class="btn-neon" type="submit" name="guardar">
                    <span id="span1"></span>
                    <span id="span2"></span>
                    <span id="span3"></span>
                    <span id="span4"></span>
                    Registrar
            </button>
    </center>
<br><br>
<center>
<table align="center" width="900" class="functions-table">
<td colspan="6"><center><h1 style="color:orange">Salas vigentes</h1></center></td>

    <div><tr>
        <td><strong style="color:orange">Sala</strong></td>
        <td><strong style="color:orange">Capacidad</strong></td>
        <td><strong style="color:orange">Tipo</strong></td><br><br>
       
        </tr>
    </div>
        <tr>
<?php

 while($row3=$resultado3->fetch_assoc()){?>
        <td >
        
            
        <strong><?php echo $row3['nombre'];?></strong>
            </td>

        <td align="left" valign="top" width="100">
    
    
        <strong><?php echo $row3['capasidad'];?></strong>
    
        </td>

            <td align="left" valign="top">
            
        <strong><?php echo $row3['tipo'];?></strong>
    
        </td>
      

</tr><?php } ?>
</table>
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



