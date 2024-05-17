<?php


require('conexion.php');


$pelicula=$_POST['pelicula'];
$hora=$_POST['hora'];
$termina=$_POST['termina'];
$sala=$_POST['sala'];
$fecha=$_POST['fecha'];
$boleto=$_POST['sol'];
$total=$_POST['total'];


$query1="SELECT * from cartelera where nombre='$pelicula'";
$resultado1=$mysqli->query($query1);
$row1=$resultado1->fetch_assoc();


 $folio= rand(5, 1000000); 

//-------------------------------------------------------------------


$arr_use = $_POST["checkid"];
// for($i=0; $i<count($arr_use); $i++)
// {
//    if($arr_use[$i] == "Y"){
//        unset($arr_use[$i + 1]);
//    }
// }
// $new_array = array_values($arr_use);


$compactad=serialize($arr_use);
            
$compactada=urlencode($compactad);





// $aReys = $new_array;
//-------------------------------------------------------------------
 // for( $contador=0; $contador< count($new_array); $contador++ ) {

 //       $query="Update funciones Set disponible='Ok' where pelicula='$pelicula' and 
 //       		hora='$hora' and 
	// 		sala='$sala' and
	// 		fecha='$fecha'and
	// 		asientos=$aRays[$contador]";

	// 		$resultado=$mysqli->query($query);

 //         echo " ".$aRays[$contador]."<br/>";
 //     }

// $folio= rand(5, 1000000);

?>







<!DOCTYPE HTML>
<html>
<head>
<script src="https://cdn.tailwindcss.com"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cine World</title>



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
<body class="bg-[#9290C3] text-white">
<div id="templatemo_body_wrapper " class="mx-auto p-20">
<header class="flex justify-between items-center py-4">
            <div class="flex items-center">
                <img src="imag/logo.png" alt="Cine World Logo" class="w-24 h-auto">
                
            </div>
            <div class="flex space-x-4">
                <a href="https://www.facebook.com/templatemo" class="hover:opacity-75"><img src="images/templatemo_facebook.png" alt="Facebook" class="w-8 h-8"></a>
                <a href="#" class="hover:opacity-75"><img src="images/templatemo_google.png" alt="Google" class="w-8 h-8"></a>
                <a href="#" class="hover:opacity-75"><img src="images/templatemo_skype.png" alt="Skype" class="w-8 h-8"></a>
                <a href="#" class="hover:opacity-75"><img src="images/templatemo_twitter.png" alt="Twitter" class="w-8 h-8"></a>
            </div>
        </header>

        <nav class="bg-gray-800 text-white py-2 px-4 rounded mb-6">
            <ul class="flex space-x-4 justify-center">
                <li><a href="index.php" class="hover:text-gray-300">Inicio</a></li>
                <li><a href="horarios.php" class="hover:text-gray-300">Horarios</a></li>
                <li><a href="proxim.php" class="hover:text-gray-300">Prox. Estrenos</a></li>
                <li><a href="Snacks.php" class="hover:text-gray-300">Snacks</a></li>
                <li><a href="contacto.php" class="hover:text-gray-300">Contacto</a></li>
            </ul>
        </nav>

		<main class="bg-[#1B1A55] p-6 rounded-lg shadow-md">

<form name="form" method="POST" onsubmit="return validar()" action="fullbuy.php?arr=<?php echo $compactada;?>" enctype="multipart/form-data"/>
 	<table   style="border-radius: 10px; width: 1000px;" >
 	<tr> 



		
		<input type="hidden" value="<?php  echo $boleto; ?>" name="boleto"/>
		<input type="hidden" value="<?php  echo $total; ?>" name="total"/>
		<input type="hidden" value="<?php  echo $pelicula; ?>" name="pelicula"/>
		<input type="hidden" value="<?php  echo $fecha; ?>" name="fecha"/>
		<input type="hidden" value="<?php  echo $sala; ?>" name="sala"/>
		<input type="hidden" value="<?php  echo $hora; ?>" name="hora"/>
		<input type="hidden" value="<?php  echo $termina; ?>" name="termina"/>
		<input type="hidden" value="<?php echo $folio; ?>" name="folio"/>


<td  width="180">

	<img width="250" height="440" name="imagen"height="200" src="<?php echo $row1['foto']; ?>">

</td>
<td width="250" class="p-10">
		<br>
	<b class="text-2xl text-[#fbcf4c]"><h3><?php echo "$pelicula"; ?></h3></b><p></p>
	<label  class="text-xl text-[#fbcf4c]">Fecha: </label><b class="text-xl"><?php echo "$fecha"; ?></b><p></p>
	<label  class="text-xl text-[#fbcf4c]">Sala: </label><b class="text-xl"><?php echo "$sala"; ?></b><p></p>
	<label class="text-xl text-[#fbcf4c]">Hora: </label><b class="text-xl"><?php echo "$hora"; ?></b><p></p>
	<label  class="text-xl text-[#fbcf4c]">No.asientos: </label><b class="text-xl"><?php echo "$boleto"; ?></b><p></p>
	


</td>


	
		<td 	 width="400" align="center" >
<img src="imag/tarjetas.png" ><p></p>
<h2><labe class="text-green-700 text-xl">Total a pagar: </label><b style="color:red"><?php echo "$","$total",".00"; ?></b> </h2>
<div class="mb-4">
                <label class="block text-[#9290C3] text-sm font-bold mb-2" for="notarjeta">No. tarjeta:</label>
                <input type="text" id="notarjeta" name="notarjeta" placeholder="16 dígitos" onkeypress="solonumeros(event)" maxlength="16" size="16" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
            </div>
			<div class="mb-4">
                <label class="block text-[#9290C3] text-sm font-bold mb-2" for="digito">Dígitos:</label>
                <input type="text" id="digito" name="digito" placeholder="3 dígitos" onkeypress="solonumeros(event)" maxlength="3" size="3" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
            </div>


<button id="AP" type="submit" class="bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded"><strong>PAGAR</strong></button><p></p>
		<button class="bg-gray-600 hover:bg-gray-700 text-white py-2 px-4 rounded mt-5"  id="CP"type="reset">Borrar</button>

	<?php  
		// $trj= $_POST['notarjeta'];
		// $dig=$_POST['digito'];

		// $query2="SELECT * FROM banco WHERE notarjeta=$trj and digito=$dig " ;
		// $resultado2=$mysqli->query($query2);
		
		// echo "$trj","$dig";


		?>

	</td>
	
	

 	</tr>

 	<tr>

 		<td align="center" height="100" colspan="5">
		
	
		


	</td>

 		
 	</tr>

</table>
	</form>
<div>
	
	<a href="index.php"class="bg-red-600 hover:bg-red-700 text-white py-2 px-4 rounded "><button id="CP" ><strong>Cancelar compra</strong></button></a>
</div>
   
        
      
        
        <div class="clear"></div>
</main>
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
// if ($resultado>0) {
// echo "<h1>Query correcta</h1>" ;
// }else{
// 	echo "<h1>Error en Query</h1>";
// }


?>