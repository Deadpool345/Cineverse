<?php


require('conexion.php');

$id=$_POST['id'];
$hora=$_POST['hora'];
$sala=$_POST['sala'];
$fecha=$_POST['fecha'];
$boleto=$_POST['boleto'];
$total=$_POST['precio'];


$query="SELECT * from funcion where pelicula='$id' And hora='$hora' and 
sala='$sala' and fecha='$fecha'";

$resultado=$mysqli->query($query);
$row=$resultado->fetch_assoc();

$peli=$row['pelicula'];
$sala=$row['sala'];
$horas=$row['hora'];
$termina=$row['termina'];
$fecha=$row['fecha'];



$query1="SELECT * from funciones where 
pelicula='$peli' and 
hora='$hora' and 
sala='$sala' and
fecha='$fecha'";
$resultado1=$mysqli->query($query1);


$query2="SELECT * from cartelera where nombre='$id'";
$resultado2=$mysqli->query($query2);
$row2=$resultado2->fetch_assoc();



?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cine IDDS</title>

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
            <li><a href="Snacks.php">Snack</a></li>
           <li><a href="contacto.php">Contacto</a></li>
        </ul>
        
        
    </div>
    <div id="templatemo_middle" align="center">

 <form name="ad"  method="POST" onsubmit="return limit()" action="pago.php" enctype="multipart/form-data"/>




	
		<input type="hidden" value="<?php  echo $boleto; ?>" name="sol"/>

		<input type="hidden" value="<?php  echo $total; ?>" name="total"/>
		<input type="hidden" value="<?php  echo $id; ?>" name="pelicula"/>
		<input type="hidden" value="<?php  echo $fecha; ?>" name="fecha"/>
		<input type="hidden" value="<?php  echo $sala; ?>" name="sala"/>
		<input type="hidden" value="<?php  echo $hora; ?>" name="hora"/>
		<input type="hidden" value="<?php  echo $termina; ?>" name="termina"/>


<table align="center" >



 	<tr>
 	<td colspan="4">
 		

	
	<img width="150" height="200" name="imagen" src="<?php echo $row2['foto']; ?>"><p></p>


 	</td>
 	<td colspan="6">
 			<b style="color:white;"><?php echo "$peli"; ?></b><p></p>
	<label style="color:#fbcf4c;">Fecha: </label><b style="color:white;"><?php echo "$fecha"; ?></b><p></p>
	<label style="color:#fbcf4c;">Sala: </label><b style="color:white;"><?php echo "$sala"; ?></b><p></p>
	<label style="color:#fbcf4c;">Hora: </label><b style="color:white;"><?php echo "$hora"; ?></b><p></p>
 	</td>
 		
 		<td   colspan="15" >
		
		<img src="imag/seat_0.png"><label style="color:white;"> Vacio</label>
		
		<img src="imag/seat_1.png"><label style="color:white;"> Ocupado</label>
		
		<img src="imag/seat_5.png"><label style="color:white;"> Selecionado</label><br><p></p><p>

<strong><h1><label style="color:#fbcf4c">Escoje <?php  echo $boleto; ?> asientos</label></h1></strong>
		

	</td><br>
 	</tr>

    <?php  $count=0; while ($row1=$resultado1->fetch_assoc()){ ?> 
 			<?php if ($count<25) { $count++;?>

 	<?php if (empty($row1['disponible'])) { ?>
 	<td align="center" >
<input id="check_01" value="<?php echo $row1['asientos'];?>" type="checkbox" onchange="limitar(this.name);" name="checkid[]" />
<label style="color:#fbcf4c" ><?php echo $row1['asientos'];?></label></td>
 	
 	<?php }else{?>

<td align="center" >
<label style=color:red >'''''''</label>
<img  width="30"  src="imag/seat_1.png"  name="imagen"  >
<label style=color:red ><?php echo $row1['asientos'];?></label></img>

</td>
	<?php } ?>
 	<?php }else{  ?>
 				

 		<tr></tr>



    <?php $count=0;	} ?>


    <?php 	}?>
		


					
 			<tr>
 				<td align="center" colspan="25"><p></p><br><br>
 				<input id="AP" type="submit" value="HACER PAGO"/><p></p>
 					<img width="1000" height="50" src="imag/screen.png">
 				</td>
 			</tr>
	</table>
	 </form>		
 







<table>
	<br><br>
	<tr>
			<td>
				
<a href="boletos.php?id=<?php echo $row['pelicula'];?>&hora=<?php 
echo $row['hora'];?>&fecha=<?php echo $row['fecha'];?>&sala=<?php echo 
$row['sala']; ?>"><button id="CP">VOLVER ATRAS</button></a>

<a href="index.php"><button id="CP"><strong>CANCELAR COMPRA</strong></button></a>
		



			</td>


	</tr>
	 

</table>

   
        
      
        
        <div class="clear"></div>
    </div>
    <div id="templatemo_footer">
     <div class="col_2 left">Son las decisiones las que nos hacen ser quienes somos, y siempre podemos optar por hacer lo correcto.
            <a href="#">CineVerse</a> |    <a href="#">Siguenos en Twitter</a> <br> 
            Copyright©  <a href="#">CineVerse</a>
        </div> 
    </div>
</div>
</div>
</body>
</html>