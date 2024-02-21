<?php
session_start();
if(isset ($_SESSION['id'])) {?>
<!DOCTYPE HTML>
<html>
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
            <li><a href="createfuncion.php" class="selected">AGRE FUNCION</a></li>
            <li><a href="model_snacks.php">AGREGAR SNAKS</a></li>
   
            <li><a href="createsala.php">GESTIONAR SALA</a></li>
        </ul>
        
        
    </div>
   
    

    <table    ><td>
	<table  align="center" >
		
<form name"createfuncion"  onsubmit="return formu(this)" method="POST" action="savefuncion.php" enctype="multipart/form-data">
<tr>
<td colspan="7" align="center"><center><h1>Crear funcion</h1></center></td>
</tr>
		<tr>

    <?php


require('conexion.php');
$query="SELECT * from cartelera";
$resultado=$mysqli->query($query);


$query1="SELECT * from salas";
$resultado1=$mysqli->query($query1);

$query2="SELECT * from cartelera";
$resultado2=$mysqli->query($query2);

$query3="SELECT * from funcion";
$resultado3=$mysqli->query($query3);



?>

		
	<td   align="left" valign="top" height="100">
	<strong style="color:orange">PELICULA</strong><p></p>
		<?php while($row=$resultado->fetch_assoc() ){?>				
<input type="radio" style="width:20px;height:20px" name="pelicula" value="<?php echo $row['nombre'];?>" ><strong><?php echo $row['nombre'];?></strong>
<p></p>	


<?php } ?>
	</td>
	


	<td align="left" valign="top" >
	<strong style="color:orange">DURACION</strong><p></p>
<?php while($row2=$resultado2->fetch_assoc() ){?>	
<strong><?php echo $row2['duracion'];?><br><br></strong>
<input type="hidden" value="<?php echo $row2['duracion'];?>" name="duracion">



<?php } ?>


</td>
		<td>
			
		
	<td  align="left" valign="top">
	<strong style="color:orange">SALA</strong><p></p>
		<?php while($row1=$resultado1->fetch_assoc() ){?>				
<input type="radio" style="width:20px;height:20px" name="sala" value="<?php echo $row1['nombre'];?>" >
<strong><?php echo $row1['nombre'];?></strong> <p></p>
<?php } ?>

		</td>



		<td align="left" valign="top">
			<strong style="color:orange">HORA</strong><p></p>
			<input type="time" name="hora" value="11:00"  ><p></p>
	


		</td>
		<td align="left" valign="top">
					<strong style="color:orange">Terminacion</strong><p></p>
			<input type="time" name="termina" value="11:00"  ><p></p>


		</td>
				
				</td>
		<td align="left" valign="top">
			<strong style="color:orange">FECHA</strong><p></p>
			<input type="date" name="fecha"> 


		</td>
	              
	              


		</tr>
		<tr>
			
			 	<td colspan="6" > 	  	
					

					<center><input type="submit" name="guardar" value="Subir" />

					<button Type="reset">Cancelar</button></center>
					</td>

		</tr>
		

</form>

</td>
<table  align="center" width="900">
<td colspan="6"><center><h1 style="color:red">Funciones Creadas</h1></center></td>

	<div><tr>
		<td><strong style="color:orange">PELICULA</strong></td>
		<td><strong style="color:orange">SALA</strong></td>
		<td><strong style="color:orange">DURACION</strong></td>
		<td><strong style="color:orange">HORA</strong></td>
		<td><strong style="color:orange">TERMINA</strong></td>
		<td><strong style="color:orange">FECHA</strong></td>
		</tr>
	</div>
		<tr>
<?php while($row3=$resultado3->fetch_assoc() ){?>
		<td >
		
			
		<strong><?php echo $row3['pelicula'];?></strong>
			</td>

		<td align="left" valign="top" width="100">
	
	
		<strong><?php echo $row3['sala'];?></strong>
	
		</td>

			<td align="left" valign="top">
			
		<strong><?php echo $row3['duracion'];?></strong>
	
		</td>
		<td align="left" valign="top">
		
	
		<strong><?php echo $row3['hora'];?></strong>
	
		</td>
		<td align="left" valign="top">
		
	
		<strong><?php echo $row3['termina'];?></strong>
	
		</td>

		<td >
	
	
		<strong><?php echo $row3['fecha'];?></strong>
	
			
		</td>

</tr><?php } ?>
</table>
   





    	
        
<div>
	
	<br><br><br><br>
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