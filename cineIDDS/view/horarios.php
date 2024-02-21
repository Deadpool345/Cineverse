<?php

require('conexion.php');

$query="SELECT * from cartelera";
$resultado=$mysqli->query($query);








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
            <a href="#"><img src="images/templatemo_twitter.png" alt="Twitter" /></a><br><br>
         
                  
        </div>
    </div>
    <div id="templatemo_menu">
      <ul>
            <li><a href="index.php" >Inicio</a></li>
            <li><a href="horarios.php"class="selected">Horarios</a></li>
            <li><a href="proxim.php">Prox. Estrenos</a></li>
            <li><a href="Snacks.php">Snacks</a></li>
           
            <li><a href="contacto.php">Contacto</a></li>
        </ul>
        
       
    </div>
<table align="center" width="1000" >
 <center><h2 style="color:orange">Horarios</h2></center>  
      

     <tr >       <?php while($row=$resultado->fetch_assoc() ){$count++;?>
        
          
              <td width="50" align="right" ><a  href="pelicula.php?id= <?php echo $row['id']; ?>">
              <img width="50" height="100" name="imagen"src="<?php echo $row['foto'];?>"></a>

               </td>
<td width="200"  >

<a  href="pelicula.php?id= <?php echo $row['id']; ?>"><strong ><b style="color:orange"><?php echo $row['nombre'];?></b></strong><p></p> </a>

          <?php $peli=$row['nombre'];
                  $query1="SELECT * from funcion where pelicula='$peli'";
                  $resultado1=$mysqli->query($query1);

           while($row1=$resultado1->fetch_assoc() ){  ?>

                <label><strong><?php echo $row1['fecha'];?></strong></label>

      <a href="boletos.php?id=<?php echo $row1['pelicula'];?>&hora=<?php echo $row1['hora'];?>&
      fecha=<?php echo $row1['fecha'];?>&sala=<?php echo $row1['sala']; ?>">
  <button ><strong><?php echo $row1['hora'];?></strong></button></a> <br>



<?php } 
        ?>     </td> 
      <?php if ($count<3) {  }else{?>
      </tr> 
        

        <?php   $count=0;}?>
                    
    <?php }?>
   </table>

        
                

  

       
      
          <div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
          </div>

           
           
      
    <div id="templatemo_footer">
  <div class="col_2 left">Son las decisiones las que nos hacen ser quienes somos, y siempre podemos optar por hacer lo correcto.
          <a href="#">#CineVerse</a> |    <a href="#">Siguenos en Twitter</a> <br> 
            Copyright©  <a href="#">CineVerse</a>
        </div>  
    </div>
</div>
</div>
</body>
</html>