
<?php

require('conexion.php');

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$saldo=$_POST['saldo'];
$notarjeta=$_POST['notarjeta'];
$digito=$_POST['digito'];





$query="INSERT INTO banco(notarjeta,digito,saldo,nombre,apellido) VALUES ('$notarjeta','$digito','$saldo','$nombre','$apellido')";
$resultado=$mysqli->query($query);



?>

<html>
<head>
<script language="JavaScript" SRC="funciones.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body><label   align="center"><img src="imag/cine.png"/ >
	</label>


<center>


<table id="table" border="5px">
	<tr><td>
<center> <img src="imag/cine.png" width="200px" height="150px"> 
<?php if ($resultado>0) {
echo "<h1>subido correctamente</h1>" ;
}else{
	echo "<h1>Error</h1>";
}


?>
<p></p>
<a href="banco.php"><b style="color:red">Regresar</b></a>


</center>


</table>
</center>

</body>
</html>

