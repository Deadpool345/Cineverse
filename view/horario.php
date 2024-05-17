<?php


require('conexion.php');

$id=$_GET['id'];


$query="SELECT * from cartelera where id='$id'";
$resultado=$mysqli->query($query);
$row=$resultado->fetch_assoc();

$peli=$row['nombre'];
	 

$query1="SELECT * from funcion where pelicula='$peli'";
$resultado1=$mysqli->query($query1);


$contador=0;

?>

<!DOCTYPE HTML>
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
            <li><a href="index.php">Inicio</a></li>
            <li><a href="horarios.php">Horarios</a></li>
            <li><a href="proxim.php">Prox. Estrenos</a></li>
           <li><a href="contacto.php">Contacto</a></li>
        </ul>
        
        
    </div>
    <div id="templatemo_middle">

<table id="table" >
	<td  width="150"align="right">
			
			 	<img width="250" height="400" src="<?php echo $row['foto'];?>"></td>
			 	
		<td width="300">
	<b>Titulo:</b>
                                 
               <label><?php echo $row['nombre'];?></label> <p></p>
              		<b>Genero:</b>
              
              		<label><?php echo $row['genero'];?></label> <p></p>
              		<b>Clasificacion:</b>
              
              		<label><?php echo $row['clasificacion'];?></label> <p></p>
               <b>Duracion:</b>
                  		<label><?php echo $row['duracion'];?></label> 
</td>
	
	






<td  align="center" width="300">
		<label ><h3>HORARIOS</h3></label><p></p>
	<?php $count=0; while($row1=$resultado1->fetch_assoc() ){ $count++; ?>

	<label>El <strong><?php echo $row1['fecha'];?> a las:</strong></label>

<a href="boletos.php?id=<?php echo $row1['pelicula'];?>&hora=<?php echo $row1['hora'];?>&fecha=<?php echo $row1['fecha'];?>&sala=<?php echo $row1['sala']; ?>">
	<button id="AP"><strong><?php echo $row1['hora'];?> horas</strong></button></a> 
	<p></p>


<?php } if ($count>0) {
  
}else{?>

				<label ><h5>No disponibles</h5></label><p></p>
	 <?php } ?>
</td>	
		


<tr>
	<td align="right" colspan="3">
		

			<a href="index.php"><button id="CP"><strong>Cancelar</strong></button></a> 
	</td>

</tr>


	
		


	</table>


   
        
        <div class="col_2 right">
         
        </div>    
        
        <div class="clear"></div>
    </div>
    <div id="templatemo_footer">
    <div class="col_2 left">Son las decisiones las que nos hacen ser quienes somos, y siempre podemos optar por hacer lo correcto.
            <a href="#">CINEVERSE</a> |    <a href="#">Siguenos en Twitter</a> <br> 
            Copyright©  <a href="#">CineVERSE</a>
        </div> 
    </div>
</div>
</div>
</body>
</html>