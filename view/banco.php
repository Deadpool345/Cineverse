

    <?php


require('conexion.php');
$query="SELECT * from banco";
$resultado=$mysqli->query($query);






?>
<!DOCTYPE HTML>
<html>
<head>
<script language="JavaScript" SRC="funciones.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body><label   align="center"><img src="imag/cine.png"/ >
	</label>


<center>



	<h2 id="menu" align="center" >
		
		<label style="color:white">RENTVEL BANC</label>
		
	</h2>
	<hr id="linea" width="90%">
<form name="banco"    method="POST" action="savebanco.php" enctype="multipart/form-data">
	<table id="table" border="5px">
	<td align="center">
		<b>Nombre:</b><input type="text" name="nombre" size="33"  onkeypress="soloLetras()"  onfocus="if (this.value == 'Escriba un titulo') {this.value='', this.style.border = '',this.style.color =''}"/><p></p>
		<b>Apellido:</b><input type="text" name="apellido" size="33"  onkeypress="soloLetras()"  onfocus="if (this.value == 'Escriba un titulo') {this.value='', this.style.border = '',this.style.color =''}"/><p></p>
	   
	    <b>Cantidad:</b><input type="text" name="saldo" onkeypress="solonumeros()" /><p></p>
	    <b>No.tarjeta:</b><input type="text" name="notarjeta" maxlength="16" onkeypress="solonumeros()"  /><p></p>
	    <b>Digito:</b><input type="text" name="digito" maxlength="3" onkeypress="solonumeros()" /><p></p>

	
		<button id="AP" type="submit"><strong>Enviar</strong></button><p></p>
		<button id="CP"type="reset">Reset</button>

	</td>
	</table>
	</form>


<table align="center" width="700">
<td colspan="6"><center><h1 style="color:red">Cuentas Bancarias</h1></center></td>

	<div><tr>
		<td><strong style="color:blue">NOMBRE</strong></td>
		<td><strong style="color:blue">APELLIDO</strong></td>
		<td><strong style="color:blue">NOTARJETA</strong></td>
		<td><strong style="color:blue">DIGITO</strong></td>
		<td><strong style="color:blue">SALDO</strong></td>
		</tr>
	</div>
		<tr>
<?php while($row=$resultado->fetch_assoc() ){?>
		<td >
		
			
		<strong><?php echo $row['nombre'];?></strong><hr>
			</td>

		<td align="left" valign="top">
	
	
		<strong><?php echo $row['apellido'];?></strong><hr>
	
		</td>

			<td align="left" valign="top">
			
		<strong><?php echo $row['notarjeta'];?></strong><hr>
	
		</td>
		<td align="left" valign="top">
		
	
		<strong><?php echo $row['digito'];?></strong><hr>
	
		</td>

		<td >
	
	
		<strong><?php echo $row['saldo'];?></strong><hr>
	
			
		</td>


		

</tr><?php } ?>
</center>

</body>
</html>

