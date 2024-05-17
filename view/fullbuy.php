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
<script src="https://cdn.tailwindcss.com"></script>
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
<body class="bg-[#9290C3]">
    <div class="min-h-screen flex flex-col items-center justify-center">
        <div class="bg-[#1B1A55] rounded-lg shadow-lg p-8">
            <div class="text-center mb-8">
                <img src="imag/logo.png" alt="Cine World Logo" class="w-36 h-24 mx-auto">
              
            </div>

            <div class="text-center mb-8">
                <?php 
                if ($row1 > 0 && $total < $tot) {
                    for ($i = 0; $i < count($arr_use); $i++) {
                        if ($arr_use[$i] == "Y") {
                            unset($arr_use[$i + 1]);
                        }
                    }

                    $new_array = array_values($arr_use);
                    $aRays = $new_array;

                    for ($contador = 0; $contador < count($new_array); $contador++) {
                        $query = "UPDATE funciones SET disponible='Ok' WHERE pelicula='$pelicula' AND hora='$hora' AND sala='$sala' AND fecha='$fecha' AND asientos=$aRays[$contador]";
                        $resultado = $mysqli->query($query);

                        $query1 = "UPDATE funciones SET recervo='$nomb $apell' WHERE pelicula='$pelicula' AND hora='$hora' AND sala='$sala' AND fecha='$fecha' AND asientos=$aRays[$contador]";
                        $resultado1 = $mysqli->query($query1);

                        $query2 = "UPDATE funciones SET fechcompra='$hoy' WHERE pelicula='$pelicula' AND hora='$hora' AND sala='$sala' AND fecha='$fecha' AND asientos=$aRays[$contador]";
                        $resultado2 = $mysqli->query($query2);
                    }

                    echo "<div class='text-center '>";
                    echo "<h2 class='text-2xl text-yellow-400'>Compra efectuada</h2><br>";
                    echo "<h3 class='text-xl'>Reservada a nombre de: $nomb $apell</h3><br>";

                    echo "<a href='recibo.php?folio=$folio&nombre=$nomb&apellido=$apell&hora=$hora&fecha=$fecha&termina=$termina&hoy=$hoy' class='inline-block bg-blue-500 text-white py-2 px-4 rounded'>Imprimir recibo</a>";
                    echo "</div>";

                    $count = 0;
                    echo "<div class='p-10 '>";
                    for ($contador = 0; $contador < count($new_array); $contador++) {
                        echo "<div class='bg-auto  bg-center bg-no-repeat' style='background-image: url(imag/boletii.png);'>";
                        echo "<div class='p-40  ' >";
                        echo "<h3 class='text-black text-base font-bold'>$pelicula</h3>";
                        echo "<p class='text-black text-base font-bold'>Sala: $sala</p>";
                        echo "<p class='text-black text-base font-bold'>Hora: $hora</p>";
                        echo "<p class='text-black text-base font-bold'>Fecha: $fecha</p>";
                        echo "<p class='text-black text-base font-bold'>Asiento No: $aRays[$contador]</p>";
                        echo "<p class='text-red-900 text-base font-bold'>No.folio: $folio</p>";
                        echo "<p class='text-black text-base font-bold'>$hoy</p>";
                        echo "</div>";
                        echo "</div>";
                    }
                    echo "</div>";
                } else {
                    echo "<div class='text-center'>";
                    echo "<h2 class='text-2xl text-red-500'>Datos incorrectos, verifiquelos</h2>";
                    echo "<input type='button' class='bg-red-500 text-white py-2 px-4 rounded' value='Volver atrás' onClick='history.go(-1);'>";
                    echo "</div>";
                }

                if ($row1 > 0 && $total > $tot) {
                    echo "<div class='text-center text-red-500'>";
                    echo "Verifique su saldo<br>";
                    echo "</div>";
                }
                ?>
            </div>

            <div class="text-center mt-8">
                <h2 class="text-xl">Atte. CineVerse</h2>
                <img src="imag/logo.png" alt="Cine World Logo" class="w-36 h-24 mx-auto">
            </div>
        </div>
    </div>

    <div class="text-center text-white mt-8">
        Son las decisiones las que nos hacen ser quienes somos, y siempre podemos optar por hacer lo correcto.
        <a href="#" class="text-blue-400">#CineIDDS</a> | <a href="#" class="text-blue-400">Síguenos en Twitter</a> <br> 
        Copyright© <a href="#" class="text-blue-400">Cine IDDS</a>
    </div>
</body>
</html>
<?php 
       
 ?>