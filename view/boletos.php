<?php


require('conexion.php');

$id=$_GET['id'];

$hora=$_GET['hora'];
$sala=$_GET['sala'];
$fecha=$_GET['fecha'];

$query="SELECT * from cartelera where nombre='$id'";
$resultado=$mysqli->query($query);
$row=$resultado->fetch_assoc();

$peli=$row['nombre'];

	 

$query1="SELECT * from funcion where pelicula='$id' And hora='$hora' and 
sala='$sala' and fecha='$fecha'";
$resultado1=$mysqli->query($query1);
$row1=$resultado1->fetch_assoc();

$peli=$row1['pelicula'];
$sala=$row1['sala'];
$hora=$row1['hora'];
$fecha=$row1['fecha'];

$query2="SELECT * from funciones where 
pelicula='$peli' and 
hora='$hora' and 
sala='$sala' and
fecha='$fecha'";
$resultado2=$mysqli->query($query2);




 				
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
            <li><a href="index.php">Inicio</a></li>
            <li><a href="horarios.php">Horarios</a></li>
            <li><a href="proxim.php">Prox. Estrenos</a></li>
         
          
            <li><a href="contacto.php">Contacto</a></li>
        </ul>
        
        
    </div>
    <div id="templatemo_middle">

<form name="ad"    method="POST" action="asientos.php" enctype="multipart/form-data">
	<table id="table" >
	<td  width="150"align="top">
			 	 <input type="hidden" name="id" value="<?php echo $id;?>"/>
			 	<img width="250" height="400" src="<?php echo $row['foto'];?>"></td>
			 	
		<td width="200">
	<b>Titulo:</b>
              <input type="hidden" name="titulo" value="<?php echo $row['nombre'];?>" size="33"/>                   
               <label><?php echo $row['nombre'];?></label> <p></p>
              		<b>Genero:</b>
              
              		<label><?php echo $row['genero'];?></label> <p></p>
              		<b>Clasificacion:</b>
              
              		<label><?php echo $row['clasificacion'];?></label> <p></p>
              			 <b>Duracion:</b>
                  		<label><?php echo $row['duracion'];?></label> <p></p>

                  		<label><b>Precio:</b></label>
                  		<input id="matraca" size="3" readonly="readonly"  style="color:green" type="text" name="costo" value="<?php echo $row['cost']?>"/><b>pesos</b>
</td>
	
	






<td  align="center" >

<?php

 $count=0; while ($row2=$resultado2->fetch_assoc()){  
 			
 				if (empty($row1['disponible'])) {    ?>

 	<input   type="hidden" width="40" name="disp" value="" />
 					<?php  $count++;}
 					  }?>

 
 <label><h2>Boletos a comprar</h2></label><p></p>
 <input type="hidden" value="<?php echo "$count" ?>" name="cont"/>

<input id="bote" type="text"  onclick="restar()" value="-"  readonly="readonly"/> 
<input id="matraca" size="1" style="color:orange" type="text" readonly="readonly" name="boleto"value="1"/>

<input id="bote" type="text" onclick="sumar()" value="+"  readonly="readonly"/><p></p>

<label>Total:</label><input id="matraca" size="3" style="color:orange" readonly="readonly"  type="text" name="precio" value="<?php echo $row['cost']?>"/><label>Pesos</label>


	<p></p>
	
<input type="hidden" name="id" value="<?php echo $row1['pelicula'];?>" />
	<input type="hidden" name="hora" value="<?php echo $row1['hora'];?>"/>
	<input type="hidden" name="fecha" value="<?php echo $row1['fecha'];?>" />
	<input type="hidden" name="sala" value="<?php echo $row1['sala']; ?>" />

		

	<td align="center" colspan="3">
		 <button id="AP"><strong>OK</strong></button>	<p></p>
      <label>Escoje el numero de boletos que </label><p></p>
      <label>compraras y pulsa OK para escojer asientos</label>

	</td>

		</table>
</form>
<table>
	<tr align="right">
		
		<td align="right">
			
			 <a href="index.php"><button id="CP"><strong>Cancelar compra</strong></button></a>
		</td>
	</tr>	
</table>


   
        
        <div class="col_2 right">
         
        </div>    
        
        <div class="clear"></div>
    </div>
    <div id="templatemo_footer">
    <div class="col_2 left">Son las decisiones las que nos hacen ser quienes somos, y siempre podemos optar por hacer lo correcto.
            <a href="#">Cineverse</a> |    <a href="#">Siguenos en Twitter</a> <br> 
            Copyright©  <a href="#">Cineverse</a>
        </div> 
    </div>
</div>
</div>
</body>
</html>