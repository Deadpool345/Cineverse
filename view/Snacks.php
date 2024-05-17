<?php

require('conexion.php');

$query="SELECT * from Snacks";
$resultado=$mysqli->query($query);

$count=0;

?><!DOCTYPE HTML>
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
    	<div id="site_title"  ><h1><img width="150" height="100" src="imag/logo.png"/></h1></div>
        <div class="col_4 right">
        	<a href="https://www.facebook.com/templatemo"><img src="images/templatemo_facebook.png" alt="Facebook" /></a>
            <a href="#"><img src="images/templatemo_google.png" alt="Google" /></a>
            <a href="#"><img src="images/templatemo_skype.png" alt="Skype" /></a>
            <a href="#"><img src="images/templatemo_twitter.png" alt="Twitter" /></a><br><br>
         
            
        </div>
    </div>
    <div id="templatemo_menu">
    	   <ul>
            <li><a href="index.php" >Inicio</a></li>
            <li><a href="horarios.php">Horarios</a></li>
            <li><a href="proxim.php">Prox. Estrenos</a></li>
            <li><a href="Snacks.php" class="selected">Snaks</a></li>
   
            <li><a href="contacto.php">Contacto</a></li>
        </ul>

        
        
    </div>
    <div id="templatemo_middle" align="center">
    <table>
    	<div>
    		<h1>Ahora en taquilla</h1>
    	</div>
    		
    		<?php while($row=$resultado->fetch_assoc() ){
				if ($count<4) { $count++ ?>
					<td width="200" align="center">
							

				<a  href=".php?id= <?php echo $row['id']; ?>"><img width="150" name="imagen"height="200" src="<?php echo $row['foto'];?>"><p></p></a> 
				<a  href=".php?id= <?php echo $row['id']; ?>"><strong ><b style="color:gray"><?php echo $row['nombre'];?></b></strong><p></p> </a>
														<strong ><b style="color:gray">$<?php echo $row['costo'];?>.00</b></strong><p></p> </a>

					
						</td>	
			<?php	}else{?>	
				<tr></tr>

				<?php   $count=0;}?>
										
		<?php }?>
      
    
    </table>
        
        <div class="clear"></div>
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