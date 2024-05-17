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
<link rel="icon" href="images/logo.png">
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
<div class="container ">
    <div id="templatemo_wrapper">
        <?php
            require('components/navbar2.php');
        ?>
        <div id="templatemo_middle" class="text-center py-8 mb-[3rem]">
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
        <?php
            require('components/footer.php');
        ?>
    </div>
</div>
</body>
</html>
