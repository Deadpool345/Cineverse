<?php


require('conexion.php');



$pelicula=$_POST['pelicula'];
$hora=$_POST['hora'];
$termina=$_POST['termina'];
$sala=$_POST['sala'];
$fecha=$_POST['fecha'];
$boleto=$_POST['boleto'];
$total=$_POST['total'];
$folio=$_POST['folio'];


$notarjeta=$_POST['notarjeta'];
$digitos=$_POST['digito'];

$arr_ = $_GET["arr"];
$arr_use = unserialize($arr_);

$hoy = date("d/m/Y");



$query1="SELECT * from banco where notarjeta='$notarjeta' AND digito='$digitos'";
$resultado1=$mysqli->query($query1);
$row1=$resultado1->fetch_assoc();

$tot=$row1['saldo'];
$nomb=$row1['nombre'];
$apell=$row1['apellido'];

 


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
            
            <li><a href="contacto.php">Contacto</a></li>
        </ul>
        
        
    </div>
 <page> <table align="center">



  <?php 
        if ($row1>0 & $total < $tot) {

            for($i=0; $i<count($arr_use); $i++)
                  {
                     if($arr_use[$i] == "Y"){
                         unset($arr_use[$i + 1]);
                     }
                              }

            $new_array = array_values($arr_use);

            $aRays=$new_array;
 
        for( $contador=0; $contador< count($new_array); $contador++ ) {

                 $query="UPDATE funciones Set disponible='Ok' where pelicula='$pelicula' and 
                    hora='$hora' and 
                sala='$sala' and 
                fecha='$fecha'and
                asientos=$aRays[$contador]";
                $resultado=$mysqli->query($query);

                $query1="UPDATE funciones Set recervo='$nomb $apell' where pelicula='$pelicula' and 
                    hora='$hora' and 
                sala='$sala' and 
                fecha='$fecha'and
                asientos=$aRays[$contador]";
                $resultado1=$mysqli->query($query1);

                $query2="UPDATE funciones Set fechcompra='$hoy' where pelicula='$pelicula' and 
                    hora='$hora' and 
                sala='$sala' and 
                fecha='$fecha'and
                asientos=$aRays[$contador]";
                $resultado2=$mysqli->query($query2);

                  
               

                   
               }

                 
               ?>

              

               <div  align="center" >
          
           <?php  echo "<label ><h1 style=color:#FFFF00>","Compra efectuada","<br></h1></label>","<br>";

                  



        
           echo "<label ><h2>","Recervada a nombre de: $nomb $apell","<br></h2></label>","<br>";?>

             <td  align="center">

        <a href="recibo.php?folio=<?php echo $_POST['folio']; ?>&nombre=<?php echo $row1['nombre']; ?>&apellido=<?php echo $row1['apellido']; ?>&hora=<?php echo $_POST['hora']; ?>&fecha=<?php echo $_POST['fecha']; ?>&termina=<?php echo $_POST['termina']; ?>&hoy=<?php echo date("d/m/Y");
 ?>"><button id="AP">impimir recibo</button></a>

         
      </td>

        </div>

      <?php $count=0; 

          for ($contador=0; $contador< count($new_array); $contador++) { ?>
             <tr>           
           <?php  if ($count<3) { $count++; ?> 

                 <td align="center" style=" background-image:url(imag/boletii.png);
                  background-repeat:no-repeat;background-size:400px 400px;" width="400" height="400" >
                    
                <h2 style="color:white">
                 <?php  
                     echo "<br>"; echo "<br>";echo "<br>";
                  echo "","</h2>","<br>"; ?>
                    <h3 style="color:black"><b>
                  <?php 
                  echo "$pelicula","<br>";
                 echo "Sala: ","$sala","<br>";
                   echo "Hora: ","$hora","<br>";
                   echo "Fecha: ","$fecha","<br>";
                     
                     echo "Asiento No: ","$aRays[$contador]","<br></h3>";

                     echo "<br>";
                      echo "<br>";  
                     
                    
                      echo "<h3><b style=color:black>","No.folio: ","</b><b style=color:red>","$folio","</b></h3>";
                      echo "<h3><b style=color:black>","$hoy","</b></h3><br>";
                     ?>

                     <br>
             
                  </td>
       
           <?php }else{?>
            
            
              </tr>
            <tr></tr>
              
          <?php $count=0; }


          }  ?><tr>
           <td  align="center">

        <a href="recibo.php?folio=<?php echo $_POST['folio']; ?>&nombre=<?php echo $row1['nombre']; ?>&apellido=<?php echo $row1['apellido']; ?>&hora=<?php echo $_POST['hora']; ?>&fecha=<?php echo $_POST['fecha']; ?>&termina=<?php echo $_POST['termina']; ?>&hoy=<?php echo date("d/m/Y");
 ?>"><button id="AP">impimir recibo</button></a>

         
      </td></tr><br><br>

             
        <?php }
        else{ ?> <td  align="center">
        <label ><h1 style="color:red">
        <?php  echo "Datos incorrectos","<br>","verifiquelos";?></h1> 
        <input type='button' id="CP" value='Volver atras' onClick='history.go(-1);'>
           </label><br>
           <br>
        
        <?php 
          
          

      }
if ($row1>0 AND $total>$tot) {
           echo "Verifique su saldo","<br>";?>

          
         <?php }


    ?>

   </td><tr></tr>
        
      
        
        <td  align="center">
          
        <?php  echo "<h2>","Atte. ","</h2>";?>
<img width="250" height="100" src="images/Logo1.webp"/>

        </td>
    </table></page>
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
<?php 
       
 ?>