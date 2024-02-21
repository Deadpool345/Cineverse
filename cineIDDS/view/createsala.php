<?php

require('conexion.php');
$query1="SELECT * from salas";
$resultado3=$mysqli->query($query1);
?>

<?php
session_start();
if(isset ($_SESSION['id'])) {?>
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
            <li><a href="model_pelicula.php" >AGRE PELICULA</a></li>
            <li><a href="createfuncion.php">AGRE FUNCION</a></li>
            <li><a href="model_snacks.php">AGREGAR SNAKS</a></li>
   
            <li><a href="createsala.php"class="selected">GESTIONAR SALA</a></li>
        </ul>

        
        
    </div>
    <div id="templatemo_middle" align="center">
 <table id="table" width="1000" ><td>
	<table align="center" width="800" height="300" >
		
<form name"savesala"  onsubmit="return formu(this)" method="POST" action="savesala.php" enctype="multipart/form-data">
<tr>
<td colspan="2"><center><h1>Agregar Sala</h1></center></td>
</tr>
		<tr>
	<td > 
	<img width="250" height="300" src="imag/sala1.jpg">
		
	    
    </td>
	<td align="right">
		<b>Nombre:</b> <input type="text" name="nombre" size="33"  onkeypress="soloLetras()"  onfocus="if (this.value == 'Escriba un titulo') {this.value='', this.style.border = '',this.style.color =''}"/><p></p>
		<b>Capasidad:</b>   <input  type="text" name="capa" size="33" onkeypress="soloLetras()" /><p></p>
		 <b>Tipo de sala:</b>    <select maxlength="1"  name="tipo" >
								<option value="Convensional">Convensional</option>
								<option value="Vip">Vip</option>
								
	               </select><p></p>
	               
	              

	</td>
		</tr>
		<tr>
			
			 	<td colspan="2"> 	  	
					

					<center><input type="submit" name="guardar" value="Subir" />

					<button Type="reset">Cancelar</button></center>
					</td>

		</tr>
		

</form>

</td>
<table  align="center" width="500">
<td colspan="6"><center><h1 style="color:orange">Salas vigentes</h1></center></td>

    <div><tr>
        <td><strong style="color:orange">Sala</strong></td>
        <td><strong style="color:orange">Capasidad</strong></td>
        <td><strong style="color:orange">Tipo</strong></td><br><br>
       
        </tr>
    </div>
        <tr>
<?php

 while($row3=$resultado3->fetch_assoc()){?>
        <td >
        
            
        <strong><?php echo $row3['nombre'];?></strong>
            </td>

        <td align="left" valign="top" width="100">
    
    
        <strong><?php echo $row3['capasidad'];?></strong>
    
        </td>

            <td align="left" valign="top">
            
        <strong><?php echo $row3['tipo'];?></strong>
    
        </td>
      

</tr><?php } ?>
</table>



        
        <div class="clear">
        	
        	<br>
        	<br>
        	<br><br>
        	<br>
        	<br>
        	<br>
        	
        </div>
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



