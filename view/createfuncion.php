<?php
session_start();
if (isset($_SESSION['id'])) { ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>| CREAR FUNCION</title>
	<link rel="preload" href="css/normalize.css" type="text/css">
	<link rel="stylesheet" href="css/normalize.css" type="text/css">
	<link rel="preload" href="css/create__funcion.css" type="text/css">
    <link rel="stylesheet" href="css/create__funcion.css" type="text/css">
	<link rel="icon" href="images/icono.png">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
    <script src="https://kit.fontawesome.com/5b41b5f095.js" crossorigin="anonymous"></script>
    <script language="javascript" type="text/javascript">
    function clearText(field) {
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
                        <li class="enlace-resp"><a href="#">Estrenos</a></li>
                        <li class="enlace-resp"><a href="model_pelicula.php">Pelicula</a></li>
                        <li class="enlace-resp"><a href="createfuncion.php">Funciones</a></li>
                        <li class="enlace-resp"><a href="createsala.php">Salas</a></li>
                    </ul>
                </div>

                <img src="images/menu-btn.png" alt="icono de menu" class="menu-hamburger">
                <div class="saludo">
                    <center>
                        <p id="title">
                            Bienvenido 
                            <?php echo $_SESSION['name'] . " " . $_SESSION['apellido']; ?>
                        </center>
                        <center><button class="btn-logout" onclick="location.href='index.php'">Cerrar Sesión</button></center>
                    </p>
                </div>
            </nav>
</header>

	<table align="center" class="form-table">
		<form name="createfuncion" onsubmit="return formu(this)" method="POST" action="savefuncion.php" enctype="multipart/form-data">
            <tr>
                <td colspan="7" align="center"><center><h1>Crear funcion</h1></center></td>
            </tr>
            <tr>
                <?php
                require('conexion.php');
                $query = "SELECT * from cartelera";
                $resultado = $mysqli->query($query);
                $query1 = "SELECT * from salas";
                $resultado1 = $mysqli->query($query1);
                $query2 = "SELECT * from cartelera";
                $resultado2 = $mysqli->query($query2);
                $query3 = "SELECT * from funcion";
                $resultado3 = $mysqli->query($query3);
                ?>
                <td align="left" valign="top" height="100">
                    <strong>PELICULA</strong><p></p>
                    <?php while ($row = $resultado->fetch_assoc()) { ?>
                    <input type="radio" style="width:20px;height:20px" name="pelicula" value="<?php echo $row['nombre']; ?>"><?php echo $row['nombre']; ?>
                    <p></p>
                    <?php } ?>
                </td>
                <td align="left" valign="top">
                    <strong>DURACION</strong><p></p>
                    <?php while ($row2 = $resultado2->fetch_assoc()) { ?>
                    <strong><?php echo $row2['duracion']; ?><br><br></strong>
                    <input type="hidden" value="<?php echo $row2['duracion']; ?>" name="duracion">
                    <?php } ?>
                </td>
                <td align="left" valign="top">
                    <strong>SALA</strong><p></p>
                    <?php while ($row1 = $resultado1->fetch_assoc()) { ?>
                    <input type="radio" style="width:20px;height:20px" name="sala" value="<?php echo $row1['nombre']; ?>">
                    <strong><?php echo $row1['nombre']; ?></strong> <p></p>
                    <?php } ?>
                </td>
                <td align="left" valign="top">
                    <strong>HORA</strong><p></p>
                    <input type="time" name="hora" value="8:00"><p></p>
                </td>
                <td align="left" valign="top">
                    <strong>Terminacion</strong><p></p>
                    <input type="time" name="termina" value="23:00"><p></p>
                </td>
                <td align="left" valign="top">
                    <strong>FECHA</strong><p></p>
                    <input type="date" name="fecha" min="2024-05-01" max="2024-12-31">
                </td>
            </tr>
            <tr>
                <td colspan="6">
                    <center><input type="submit" name="guardar" value="Subir">
                    <button type="reset">Cancelar</button></center>
                </td>
            </tr>
        </form>
    </table>
    <table align="center" width="900" class="functions-table">
        <td colspan="6"><center><h1>Funciones Creadas</h1></center></td>
        <tr>
            <td><strong style="color:orange">PELICULA</strong></td>
            <td><strong style="color:orange">SALA</strong></td>
            <td><strong style="color:orange">DURACION</strong></td>
            <td><strong style="color:orange">HORA</strong></td>
            <td><strong style="color:orange">TERMINA</strong></td>
            <td><strong style="color:orange">FECHA</strong></td>
        </tr>
        <?php while ($row3 = $resultado3->fetch_assoc()) { ?>
        <tr>
            <td><strong><?php echo $row3['pelicula']; ?></strong></td>
            <td align="left" valign="top" width="100"><strong><?php echo $row3['sala']; ?></strong></td>
            <td align="left" valign="top"><strong><?php echo $row3['duracion']; ?></strong></td>
            <td align="left" valign="top"><strong><?php echo $row3['hora']; ?></strong></td>
            <td align="left" valign="top"><strong><?php echo $row3['termina']; ?></strong></td>
            <td><strong><?php echo $row3['fecha']; ?></strong></td>
        </tr>
        <?php } ?>
    </table>
    <br><br><br><br>
    <footer>
        <div class="container">
            <div class="sec about-us">
                <h2>Sobre Nosotros</h2>
                <p>Cineverse es una empresa dedicada a la reserva de asientos de cine que se preocupa por ofrecer la mejor experiencia posible a sus clientes...</p>
                <ul class="sci">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
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
                        <span><i class="fa-solid fa-location-dot"></i></span>
                        <span> Km 1 1/2 Calle a plan del Pino,
                            <br> Ciudadela Don Bosco,
                            <br>Soyapango</span>
                    </li>
                    <li>
                        <span><i class="fa-solid fa-phone"></i></span>
                        <p><a href="tel:2525-2525"> +503 2525-2525<br></a></p>
                    </li>
                    <li>
                        <span><i class="fa-solid fa-envelope"></i></span>
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
} else {
    echo "Debes iniciar sesion antes de acceder a esta pagina";
}
?>
