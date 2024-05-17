<?php


require('conexion.php');

$id=$_GET['id'];


$query="SELECT * from cartelera where id='$id'";


$resultado=$mysqli->query($query);
$row=$resultado->fetch_assoc();



?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cine World</title>

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

<table>
        


            
              
           <tr>

               <td  width="150"align="top">
         <input type="hidden" name="id" value="<?php echo $id;?>"/>
        <img width="250" height="420" src="<?php echo $row['foto'];?>">
        </td>
  <td >

              
                  
           <input type="hidden" name="titulo" value="<?php echo $row['nombre'];?>" size="33"/>       
              
                 
                       
</td>
<td  width="800">
      
                   <h1><label style="color:#222;"><?php echo $row['nombre'];?></label> <p></p></h1>
                    
                     <font size="5">
                 <label style="background:#B40404; color:white;"  ><?php echo $row['clasificacion'];?></label> 
                 <label style="background:#222; color:white;"><?php echo $row['duracion'];?> Min</label> 
                 <label style="background:#B404AE; color:white;" ><?php echo $row['genero'];?></label> <p></p>
                </font>

                <video width="500"src="<?php echo $row['trailer'];?>" controls autoplay preload="auto"  >
                </video><p></p>
              
                </td>

                </tr>

                <tr>

                  
                  <td colspan="3">
                    <font size="4">
                      <b>Sipnosis:</b>
               <p align="justify"><label align="justify"><?php echo $row['sipnosis'];?></label></p></font>
                  </td>

         </tr>

 
                      
</table>



</table>
  <tr>

                     <td  colspan="2"  align="right"  >
                      <a href="index.php"><button id="CP"><strong>Volver atras</strong></button></a> 
                     <a  href="horario.php?id= <?php echo $row['id']; ?>titulo= <?php echo $row['nombre']; ?>"><button id="AP">COMPRAR BOLETO</button></a> 
                     <p></p>
                    </td>


              </tr> 


   
        
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