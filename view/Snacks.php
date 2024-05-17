<?php

require('conexion.php');

$query="SELECT * from Snacks";
$resultado=$mysqli->query($query);

$count=0;

?>
<!DOCTYPE HTML>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cine IDDS</title>

<script src="https://cdn.tailwindcss.com"></script>
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
<style>
  .bg-primary { background-color: #9290C3; }
  .bg-secondary { background-color: #1B1A55; }
  .text-highlight { color: #535C91; }
  .text-primary { color: #070F2B; }
</style>
</head>
<body class="bg-primary text-primary font-sans">
<div class="container mx-auto px-4">
    <div id="templatemo_wrapper">
        <div id="templatemo_header" class="flex justify-between items-center py-4">
            <div id="site_title" class="flex items-center">
                <h1 class="text-3xl font-bold text-highlight"><img width="150" height="100" src="imag/logo.png" alt="Cine IDDS Logo"/></h1>
            </div>
            <div class="flex space-x-4">
                <a href="https://www.facebook.com/templatemo"><img src="images/templatemo_facebook.png" alt="Facebook" class="w-8 h-8"/></a>
                <a href="#"><img src="images/templatemo_google.png" alt="Google" class="w-8 h-8"/></a>
                <a href="#"><img src="images/templatemo_skype.png" alt="Skype" class="w-8 h-8"/></a>
                <a href="#"><img src="images/templatemo_twitter.png" alt="Twitter" class="w-8 h-8"/></a>
            </div>
        </div>
        <div id="templatemo_menu" class="bg-secondary py-2">
            <ul class="flex space-x-4 justify-center text-highlight">
                <li><a href="index.php" class="hover:text-white">Inicio</a></li>
                <li><a href="horarios.php" class="hover:text-white">Horarios</a></li>
                <li><a href="proxim.php" class="hover:text-white">Prox. Estrenos</a></li>
                <li><a href="Snacks.php" class="hover:text-white selected">Snacks</a></li>
                <li><a href="contacto.php" class="hover:text-white">Contacto</a></li>
            </ul>
        </div>
        <div id="templatemo_middle" class="text-center py-8">
            <h1 class="text-4xl font-bold text-primary mb-8">Elige tu combo preferido</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php while($row=$resultado->fetch_assoc() ){
                    if ($count < 3) { $count++; ?>
                        <div class="text-center">
                            <a href=".php?id=<?php echo $row['id']; ?>">
                                <img class="w-36 h-48 mx-auto mb-4" src="<?php echo $row['foto'];?>" alt="<?php echo $row['nombre'];?>">
                                <p class="text-primary font-bold"><?php echo $row['nombre'];?></p>
                                <p class="text-primary font-bold">$<?php echo $row['costo'];?>.00</p>
                            </a>
                        </div>
                    <?php } else { $count = 0; } ?>
                <?php } ?>
            </div>
        </div>
        <div id="templatemo_footer" class="bg-secondary text-center py-4 text-sm text-highlight">
            <p>Son las decisiones las que nos hacen ser quienes somos, y siempre podemos optar por hacer lo correcto.</p>
            <p><a href="#" class="text-primary">#CineIDDS</a> | <a href="#" class="text-primary">Síguenos en Twitter</a></p>
            <p>&copy; 2024 <a href="#" class="text-primary">Cine IDDS</a></p>
        </div>
    </div>
</div>
</body>
</html>
