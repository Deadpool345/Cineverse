<?php

require('conexion.php');

$query="SELECT * from cartelera";
$resultado=$mysqli->query($query);

$query3="SELECT * from cartelera";
$resultado3=$mysqli->query($query3);
$row3=$resultado3->fetch_assoc();




$count=0;

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
            <a href="#"><img src="images/templatemo_twitter.png" alt="Twitter" /></a><p></p><br>
         
                    <a href ="login.php" >
                       <!--  iniciar sesion -->
                    </a>
                
        </div>
        

    </div>
    <div></div>
    <div id="templatemo_menu">
    	<ul>
            <li><a href="index.php" class="selected">Inicio</a></li>
            <li><a href="horarios.php">Horarios</a></li>
            <li><a href="proxim.php">Prox. Estrenos</a></li>
            <li><a href="Snacks.php">Snacks</a></li>
           
            <li><a href="contacto.php">Contacto</a></li>
        </ul>
        
        
    </div>
    
         <div>
         	

         </div>

        
        		
           <table align="right" >
          <tr> <td width="200"  >
        	    	
        	<h2>Bienvenidos</h2>
            <img class="img_border img_nom" width="400" height="200" src="imag/festival-cine.jpg" alt="image" />
            <p><em>Cinema World, una experiencia inolvidable...</em></p>

            <p align="justify">Un buen vino es como una buena película: dura un instante y te deja en la boca un sabor a gloria; es nuevo en cada sorbo y , como ocurre con las películas, nace y renace en cada saboreador.</a>.</p>
            </td></tr>

            		<tr><td align="center"  width="400" ><h2 style="color:orange"><a  href="horarios.php">Horarios</a></h2></td> </tr>
      
<tr>
            <?php while($row3=$resultado3->fetch_assoc() ){
       ?>
         
<td width="200"  >

<a  href="pelicula.php?id= <?php echo $row3['id']; ?>"><strong ><b style="color:orange"><?php echo $row3['nombre'];?></b></strong><p></p> </a>

          <?php $peli=$row3['nombre'];
                  $query1="SELECT * from funcion where pelicula='$peli'";
                  $resultado1=$mysqli->query($query1);

          while($row1=$resultado1->fetch_assoc() ){  ?>

          

                <label><strong><?php echo $row1['fecha'];?></strong></label>

      <a href="boletos.php?id=<?php echo $row1['pelicula'];?>&hora=<?php echo $row1['hora'];?>&
      fecha=<?php echo $row1['fecha'];?>&sala=<?php echo $row1['sala']; ?>">
  <button ><strong><?php echo $row1['hora'];?></strong></button></a> <br>




<?php } 
        ?>     
      </td></tr> 
        

       
                    
    <?php }?>
  
 

        
    <table   > 



    <tr  ><?php $count=0; while($row=$resultado->fetch_assoc() ){ $count++;?>
		<td width="170" align="center">	    
					
							

<a  href="pelicula.php?id= <?php echo $row['id']; ?>"><img width="150" name="imagen"height="200" src="<?php echo $row['foto'];?>"><p></p></a> 
<a  href="pelicula.php?id= <?php echo $row['id']; ?>"><strong ><b style="color:gray"><?php echo $row['nombre'];?></b></strong><p></p> </a>

					
							
			<?php	if ($count<3 ) { 


			 	}else{?></td></tr>	
				

				<?php   $count=0;}?>
										
		<?php }?>




          <br>

        

    </table>
  
        	  
        <br>
        <br>
        <br>
        <br>
        <br>  
    
        <br>
        <br>
        <br>
        <br>
        <br>



        </table>
       












        
        <br>
        <br>
        <br>
        <br>
        <br>
      


    <div id="templatemo_footer">



    	<div class="col_2 left">Son las decisiones las que nos hacen ser quienes somos, y siempre podemos optar por hacer lo correcto.
        	<a href="#">#Cineverse</a> |    <a href="#">Siguenos en Twitter</a> <br> 
            Copyright©  <a href="#">CineVerse</a>
        </div>	
 
    </div>
</div>
</div>
</body>
</html>