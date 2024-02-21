
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


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cine IDDS</title>

<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="js/slimbox2.js"></script> 

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>


</head>
<body>
<div id="templatemo_body_wrapper">
<div id="templatemo_wrapper">
	<div id="templatemo_header">
    	<div id="site_title"  ><h1><img width="150" height="100" src="imag/logo.png"/></h1></div>
        <div class="col_4 right">
        	<a href="https://www.facebook.com/templatemo"><img src="images/templatemo_facebook.png" alt="Facebook" /></a>
            <a href="#"><img src="images/templatemo_google.png" alt="Google" /></a>
            <a href="#"><img src="images/templatemo_skype.png" alt="Skype" /></a>
            <a href="#"><img src="images/templatemo_twitter.png" alt="Twitter" /></a><br><br>
                <p id ="title">Bievenido 
    <?php
    echo $_SESSION['name'] ;
    echo " " ;
    echo $_SESSION['apellido'];
    ?> <a href ="index.php" class = "dos">Cerrar Sesion...</a>
        </div>
    </div><p></p>
    <div id="templatemo_menu"><p></p>
    	   <ul>
            <li><a href="Ges.php">Ag.PROX ESTRE</a></li>
            <li><a href="model_pelicula.php">AGRE PELICULA</a></li>
            <li><a href="createfuncion.php">AGRE FUNCION</a></li>
            <li><a href="model_snacks.php">AGREGAR SNAKS</a></li>
   
            <li><a href="createsala.php">GESTIONAR SALA</a></li>
        </ul>
        
        
    </div>
    <div id="templatemo_middle">
    
    </div>




 <div id="templatemo_main" align="center">
    	
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
    <div id="templatemo_footer">
    <div class="col_2 left">Son las decisiones las que nos hacen ser quienes somos, y siempre podemos optar por hacer lo correcto.
            <a href="#">#CineIDDS</a> |    <a href="#">Siguenos en Twitter</a> <br> 
            Copyright©  <a href="#">Cine IDDS</a>
        </div> 
    </div>
</div>
</div>
</body>
</html>
<?php
}else{echo "Debes iniciar sesion antes de acceder a esta pagina"; } ?>
