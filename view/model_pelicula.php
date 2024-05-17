<?php
session_start();
if(isset ($_SESSION['id'])) {?>

<?php

require('conexion.php');

$query="SELECT * from cartelera";
$resultado=$mysqli->query($query);

?>


<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> | Agregar Pelicula</title>
<link rel="preload" href="css/normalize.css" type="text/css">
<link rel="stylesheet" href="css/normalize.css" type="text/css">
<link rel="preload" href="css/model_pelicula.css" type="text/css">
<link rel="stylesheet" href="css/model_pelicula.css" type="text/css">
<link rel="icon" href="images/icono.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
<script src="https://kit.fontawesome.com/5b41b5f095.js" crossorigin="anonymous"></script>
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
</main>
<center>
<form name"subirpelicula"  onsubmit="return formu(this)" method="POST" action="save_pelicula.php" enctype="multipart/form-data" class="form-register">
<img src="images/Logo1.webp" width="350px" height="145px" class="logo">
    <br>
        <h2 class="title-form">CARTELERA</h2>
        <input type="text" name="titulo" placeholder="Titulo">
        <select name="genero" class="formulario__campos controls">
        <option value="GENERO" disabled selected>GENERO</option>
               <option value="ACCION">ACCION</option>
               <option value="AVENTURA">AVENTURA</option>
               <option value="COMEDIA">COMEDIA</option>
               <option value="CIENCIA-FICCION">CIENCIA-FICCION</option>
               <option value="MIEDO">MIEDO</option>
               <option value="FAMILIAR">FAMILIAR</option>
        </select>
        <input type="text" name="duracion" size="1" onkeypress="solonumeros()" required class="controls">
        <select name="clasi" class="formulario__campos controls">
          <option value="CLASIFICACION" disabled selected>CLASIFICACION</option>
		  <option value="A">A</option>
		  <option value="B">B</option>
		  <option value="C">C</option>
		  <option value="C">D</option>
	    </select>
        <br>
        <br>
        <input type="text" name="costo" id="costo" class="controls" placeholder="Costo"/><label> USD</label><p></p>
        <textarea name="sipnosis" class="formulario__campos controls" placeholder="Sinopsis"></textarea>
        <br>
                <div class="imagen">
                    <label for="imagen"><i class="fa-solid fa-file-image"></i>Agregar imagen</label>
                    <input id="imagen" type="file" name="foto" required accept=".png,.jpg,.jpeg" class="controls">
                    <br>
                    <h4 id="nombre-a"></h4>
                    <script src="js/agregar.js"></script>
                </div>
                <br>
                <div class="trailers">
                    <label for="trailer"><i class="fa-solid fa-file-video"></i>Agregar video</label>
                    <input id="trailer" type="file" name="video" required accept=".mp4" class="controls">
                    <br>
                    <h4 id="nombre-v"></h4>
                    <script src="js/video.js"></script>
                </div>
                <button class="btn-neon" type="submit">
                    <span id="span1"></span>
                    <span id="span2"></span>
                    <span id="span3"></span>
                    <span id="span4"></span>
                    Registrar
            </button>
       
            <br>
</form>
        </center>
        <br><br><br>
<center>
   <table> 

<center><h1 style="color:orange">EN CARTELERA</h1></center>

    <tr  ><?php $count=0; while($row=$resultado->fetch_assoc() ){ $count++;?>
        <td width="170" align="center">     
                    
                            

<img width="150" name="imagen"height="200" src="<?php echo $row['foto'];?>"><p></p> 
<strong ><b style="color:gray"><?php echo $row['nombre'];?></b></strong><p></p> 

                    
                            
            <?php   if ($count<5 ) { 


                }else{?></td></tr>  
                

                <?php   $count=0;}?>
                                        
        <?php }?>




          <br>

        

    </table>



        
        <div class="clear">
        	
        	<br>
        	<br>
        	<br>
        </div>
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
}else{echo "Debes iniciar sesion antes de acceder a esta pagina";}?>