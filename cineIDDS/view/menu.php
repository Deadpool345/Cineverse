<?php
session_start();
if(isset ($_SESSION['id'])) {
?><a href ="login.php" class = "dos">Cerrar Sesion...</a>
<HTML>
<HEAD>
<TITLE>INICIO</TITLE>
<meta charset = "UTF-8"> 
<LINK REL = "stylesheet" type = "text/css" href = "css/menu.css" > 
<LINK REL = "stylesheet" type = "text/css" href = "css/add_wish.css" > 
</HEAD>
<body>
    <p id ="title">Bievenido Soñador
    <?php
    echo $_SESSION['name'] ;
    echo " " ;
    echo $_SESSION['apellido'];
    ?>
    </p>
<header><div class = "contenedor" id = "uno"> 
			<a href = "add_wish.php">
			<img class = "icon" src="image/agregar.png">
			<p class = "parrafo">Agregar Deseo</p>
		</a>
		</div>
		<div class = "contenedor" id = "dos"> 
			<a href = "drop.php">
			<img class = "icon"  src = "image/eliminar.png" >
			<p class = "parrafo">Eliminar Deseo</p>
		</a>
		</div>
		<div class = "contenedor" id = "tres"> 
			<a href = "edit_wish.php">
			<img class = "icon" src="image/edit.png">
			<p class = "parrafo">Editar Deseo</p>
			</a>
		</div>
		<div class = "contenedor" id = "cuatro"> 
			<a href = "wish_list.php">
			<img class = "icon" src="image/consult.png">
			<p class = "parrafo">Consultar Deseo</p>
			</a>
		</div>
</header>
</body>
</HTML>
<?php
}else{echo "Debes iniciar sesion antes de acceder a esta pagina"; } ?>