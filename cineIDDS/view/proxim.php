<?php

require('conexion.php');

$query="SELECT * from proxestrenos";
$resultado=$mysqli->query($query);





?>


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
         
                
        </div>
    </div>
    <div id="templatemo_menu">
    	<ul>
            <li><a href="index.php" >Inicio</a></li>
            <li><a href="horarios.php">Horarios</a></li>
            <li><a href="proxim.php"class="selected">Prox. Estrenos</a></li>
            <li><a href="Snacks.php">Snacks</a></li>
           
            <li><a href="contacto.php">Contacto</a></li>
        </ul>
        
        
    </div>
    <div >
    <table>    <?php $count=0; while($row1=$resultado->fetch_assoc() ){ if ($count<5) {  $count++;?>
					<td width="200"  align="center">
							

<a  href="peliculas.php?id= <?php echo $row1['id']; ?>"><img width="150" 
name="imagen"height="200" src="<?php echo $row1['foto'];?>"><p></p></a> 
<a  href="peliculas.php?id= <?php echo $row1['id']; ?>"><strong ><b style="color:gray"><?php echo $row1['nombre'];?></b></strong><p></p> </a>

					
						</td>	
			
										
		<?php } else{


            $count=0;?> </tr>  
                

                <?php   }

                 } ?>
    </div>


        
           
        

    </table>

       
     
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