<?php


require('conexion.php');


$pelicula=$_POST['pelicula'];
$hora=$_POST['hora'];
$termina=$_POST['termina'];
$sala=$_POST['sala'];
$fecha=$_POST['fecha'];
$boleto=$_POST['sol'];
$total=$_POST['total'];


$query1="SELECT * from cartelera where nombre='$pelicula'";
$resultado1=$mysqli->query($query1);
$row1=$resultado1->fetch_assoc();


 $folio= rand(5, 1000000); 

//-------------------------------------------------------------------


$arr_use = $_POST["checkid"];
// for($i=0; $i<count($arr_use); $i++)
// {
//    if($arr_use[$i] == "Y"){
//        unset($arr_use[$i + 1]);
//    }
// }
// $new_array = array_values($arr_use);


$compactad=serialize($arr_use);
            
$compactada=urlencode($compactad);





// $aReys = $new_array;
//-------------------------------------------------------------------
 // for( $contador=0; $contador< count($new_array); $contador++ ) {

 //       $query="Update funciones Set disponible='Ok' where pelicula='$pelicula' and 
 //       		hora='$hora' and 
	// 		sala='$sala' and
	// 		fecha='$fecha'and
	// 		asientos=$aRays[$contador]";

	// 		$resultado=$mysqli->query($query);

 //         echo " ".$aRays[$contador]."<br/>";
 //     }

// $folio= rand(5, 1000000);

?>







<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cine World</title>

<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="js/slimbox2.js"></script> 
<script type="text/JavaScript" src="funciones.js"></script> 

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
    	<div id="site_title"  ><h1><img width="150" height="100" src="images/Logo1.webp"/></h1></div>
        <div class="col_4 right">
        	<a href="https://www.facebook.com/templatemo"><img src="images/templatemo_facebook.png" alt="Facebook" /></a>
            <a href="#"><img src="images/templatemo_google.png" alt="Google" /></a>
            <a href="#"><img src="images/templatemo_skype.png" alt="Skype" /></a>
            <a href="#"><img src="images/templatemo_twitter.png" alt="Twitter" /></a>
        </div>
    </div>
    <div id="templatemo_menu">
    	   <ul>
            <li><a href="index.php" >Inicio</a></li>
            <li><a href="horarios.php">Horarios</a></li>
            <li><a href="proxim.php">Prox. Estrenos</a></li>
            <li><a href="Snacks.php">Snaks</a></li>
            <li><a href="contacto.php">Contacto</a></li>
        </ul>

        
        
    </div>
    <div id="templatemo_middle" align="center">

<form name="form" method="POST" onsubmit="return validar()" action="fullbuy.php?arr=<?php echo $compactada;?>" enctype="multipart/form-data"/>
 	<table   style="border-radius: 10px; width: 1000px;" >
 	<tr> 



		
		<input type="hidden" value="<?php  echo $boleto; ?>" name="boleto"/>
		<input type="hidden" value="<?php  echo $total; ?>" name="total"/>
		<input type="hidden" value="<?php  echo $pelicula; ?>" name="pelicula"/>
		<input type="hidden" value="<?php  echo $fecha; ?>" name="fecha"/>
		<input type="hidden" value="<?php  echo $sala; ?>" name="sala"/>
		<input type="hidden" value="<?php  echo $hora; ?>" name="hora"/>
		<input type="hidden" value="<?php  echo $termina; ?>" name="termina"/>
		<input type="hidden" value="<?php echo $folio; ?>" name="folio"/>


<td  width="180">

	<img width="250" height="440" name="imagen"height="200" src="<?php echo $row1['foto']; ?>">

</td>
<td width="250">
		<br>
	<b style="color:white;"><h3><?php echo "$pelicula"; ?></h3></b><p></p>
	<label style="color:#fbcf4c;">Fecha: </label><b style="color:white;"><?php echo "$fecha"; ?></b><p></p>
	<label style="color:#fbcf4c;">Sala: </label><b style="color:white;"><?php echo "$sala"; ?></b><p></p>
	<label style="color:#fbcf4c;">Hora: </label><b style="color:white;"><?php echo "$hora"; ?></b><p></p>
	<label style="color:#fbcf4c;">No.asientos: </label><b style="color:white;"><?php echo "$boleto"; ?></b><p></p>
	


</td>


	
		<td 	 width="400" align="center" >
<img src="imag/tarjetas.png" ><p></p>
<h2><labe style="color:#fbcf4c;"l>Total a pagar: </label><b style="color:red"><?php echo "$","$total",".00"; ?></b> </h2>
<b style="color:white;">No.tarjeta:</b><input type="text" placeholder="16 digitos" name="notarjeta" onkeypress="solonumeros()" maxlength="16" size="16" />
  <b style="color:white;">Digitos:</b><input type="text" placeholder="3 digitos" name="digito" onkeypress="solonumeros()" maxlength="3" size="3" /><p></p>

<button id="AP" type="submit"><strong>PAGAR</strong></button><p></p>
		<button id="CP"type="reset">Borrar</button>

	<?php  
		// $trj= $_POST['notarjeta'];
		// $dig=$_POST['digito'];

		// $query2="SELECT * FROM banco WHERE notarjeta=$trj and digito=$dig " ;
		// $resultado2=$mysqli->query($query2);
		
		// echo "$trj","$dig";


		?>

	</td>
	
	

 	</tr>

 	<tr>

 		<td align="center" height="100" colspan="5">
		
	
		


	</td>

 		
 	</tr>

</table>
	</form>
<div>
	
	<a href="index.php"><button id="CP"><strong>Cancelar compra</strong></button></a>
</div>
   
        
      
        
        <div class="clear"></div>
    </div>
    <div id="templatemo_footer">
    <div class="col_2 left">Son las decisiones las que nos hacen ser quienes somos, y siempre podemos optar por hacer lo correcto.
            <a href="#">Cineverse</a> |    <a href="#">Siguenos en Twitter</a> <br> 
            Copyright©  <a href="#">CineVERSE</a>
        </div> 
    </div>
</div>
</div>
</body>
</html>

		<?php
// if ($resultado>0) {
// echo "<h1>Query correcta</h1>" ;
// }else{
// 	echo "<h1>Error en Query</h1>";
// }


?>