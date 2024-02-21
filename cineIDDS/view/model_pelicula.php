<?php
session_start();
if(isset ($_SESSION['id'])) {?>

<?php

require('conexion.php');

$query="SELECT * from cartelera";
$resultado=$mysqli->query($query);

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
            <li><a href="model_pelicula.php" class="selected">AGRE PELICULA</a></li>
            <li><a href="createfuncion.php">AGRE FUNCION</a></li>
            <li><a href="model_snacks.php">AGREGAR SNAKS</a></li>
   
            <li><a href="createsala.php">GESTIONAR SALA</a></li>
        </ul>

        
        
    </div>
    <div id="templatemo_middle" align="center">
    <table id="table"  ><td>
	
		
<form name"subirpelicula"  onsubmit="return formu(this)" method="POST" action="save_pelicula.php" enctype="multipart/form-data">
<tr>
<td colspan="2"><center><h1>Agregar pelicula</h1></center></td>
</tr>
		<tr>
	<td > 
		<b>Titulo:</b><input type="text" name="titulo" size="33"  onkeypress="soloLetras()"  onfocus="if (this.value == 'Escriba un titulo') {this.value='', this.style.border = '',this.style.color =''}"/><p></p>
		<b>Genero:</b>   <input  type="text" name="genero" size="33" onkeypress="soloLetras()" /><p></p>
	    <b>Duracion:</b><input maxlength="3" type="text" name="duracion" size="1" onkeypress="solonumeros()"><label> Minutos</label><p></p>

        <b>Casificacion:</b>    <select maxlength="1"  name="clasi" >
								<option value="A">A</option>
								<option value="B">B</option>
								<option value="C">C</option>
								<option value="C">D</option>
	               </select><p></p>

	    <b>Costo:</b><input type="text" name="costo" onkeypress="solonumeros()" maxlength="3"size="3"/><label> Pesos</label><p></p>
	    <b>Imagen:</b> <input type="file" name="foto"/><p></p>
	    <b>Trailer:</b> <input type="file" name="video"/><p></p>

    </td>
	



					<td > 	  	
					<b>Sipnosis</b><p></p>	
					<textarea  type="text" name="sipnosis" size="25" cols="50" rows="10"></textarea><p></p>

					<center><input type="submit" name="guardar" value="Subir" />

					<button Type="reset">Cancelar</button></center>
					</td><br>
		

</form>

</td>
   <table   > 

<center><h1 style="color:orange">EN CARTELERA</h1></center>

    <tr  ><?php $count=0; while($row=$resultado->fetch_assoc() ){ $count++;?>
        <td width="170" align="center">     
                    
                            

<img width="150" name="imagen"height="200" src="<?php echo $row['foto'];?>"><p></p> 
<strong ><b style="color:gray"><?php echo $row['nombre'];?></b></strong><p></p> 

                    
                            
            <?php   if ($count<5 ) { 


                }else{?></td></tr>  
                

                <?php   $count=0;}?>
                                        
        <?php }?>




          <br>

        

    </table>



        
        <div class="clear">
        	
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