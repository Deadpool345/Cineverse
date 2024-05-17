<?php

require('conexion.php');

$id = $_POST['id'];
$hora = $_POST['hora'];
$sala = $_POST['sala'];
$fecha = $_POST['fecha'];
$boleto = $_POST['boleto'];
$total = $_POST['precio'];

$query = "SELECT * from funcion where pelicula='$id' And hora='$hora' and sala='$sala' and fecha='$fecha'";
$resultado = $mysqli->query($query);
$row = $resultado->fetch_assoc();

$peli = $row['pelicula'];
$sala = $row['sala'];
$horas = $row['hora'];
$termina = $row['termina'];
$fecha = $row['fecha'];

$query1 = "SELECT * from funciones where pelicula='$peli' and hora='$hora' and sala='$sala' and fecha='$fecha'";
$resultado1 = $mysqli->query($query1);

$query2 = "SELECT * from cartelera where nombre='$id'";
$resultado2 = $mysqli->query($query2);
$row2 = $resultado2->fetch_assoc();

?>

<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cine IDDS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" />
    <script src="js/slimbox2.js"></script>
    <script src="funciones.js"></script>
    <script language="javascript" type="text/javascript">
        function clearText(field) {
            if (field.defaultValue == field.value) field.value = '';
            else if (field.value == '') field.value = field.defaultValue;
        }

        function limitar(name) {
            var checkboxes = document.getElementsByName('checkid[]');
            var selected = 0;
            for (var i = 0; i < checkboxes.length; i++) {
                if (checkboxes[i].checked) {
                    selected++;
                }
            }
            if (selected > <?php echo $boleto; ?>) {
                alert("Solo puedes seleccionar hasta <?php echo $boleto; ?> asientos.");
                for (var i = 0; i < checkboxes.length; i++) {
                    if (checkboxes[i].name === name && checkboxes[i].checked) {
                        checkboxes[i].checked = false;
                        break;
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-[#9290C3] text-white">
    <div class="container mx-auto p-4">
        <header class="flex justify-between items-center py-4">
            <div class="flex items-center">
                <img src="imag/logo.png" alt="Cine IDDS Logo" class="w-24 h-auto">
                <h1 class="text-2xl font-bold ml-4">Cine IDDS</h1>
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
                <li><a href="Snacks.php" class="hover:text-gray-300">Snack</a></li>
                <li><a href="contacto.php" class="hover:text-gray-300">Contacto</a></li>
            </ul>
        </nav>

        <main class="bg-[#070F2B] p-6 rounded-lg shadow-md">
            <form name="ad" method="POST" onsubmit="return limit()" action="pago.php" enctype="multipart/form-data">
                <input type="hidden" value="<?php echo $boleto; ?>" name="sol" />
                <input type="hidden" value="<?php echo $total; ?>" name="total" />
                <input type="hidden" value="<?php echo $id; ?>" name="pelicula" />
                <input type="hidden" value="<?php echo $fecha; ?>" name="fecha" />
                <input type="hidden" value="<?php echo $sala; ?>" name="sala" />
                <input type="hidden" value="<?php echo $hora; ?>" name="hora" />
                <input type="hidden" value="<?php echo $termina; ?>" name="termina" />

                <table class="w-full text-white">
                    <tr>
                        <td colspan="4">
                            <img src="<?php echo $row2['foto']; ?>" alt="<?php echo $row2['nombre']; ?>" class="w-full h-auto rounded-lg">
                        </td>
                        <td colspan="6" class="pl-6">
                            <h2 class="text-3xl font-bold"><?php echo $peli; ?></h2>
                            <p><span class="text-yellow-500">Fecha:</span> <?php echo $fecha; ?></p>
                            <p><span class="text-yellow-500">Sala:</span> <?php echo $sala; ?></p>
                            <p><span class="text-yellow-500">Hora:</span> <?php echo $hora; ?></p>
                        </td>
                        <td colspan="15" class="text-right">
                            <div class="flex space-x-2 items-center">
                                <img src="imag/seat_0.png" class="w-6 h-6"><span>Vacio</span>
                                <img src="imag/seat_1.png" class="w-6 h-6"><span>Ocupado</span>
                                <img src="imag/seat_5.png" class="w-6 h-6"><span>Seleccionado</span>
                            </div>
                            <h2 class="text-xl font-semibold mt-4"><span class="text-yellow-500">Escoje <?php echo $boleto; ?> asientos</span></h2>
                        </td>
                    </tr>
                    <tr>
                        <?php $count = 0; while ($row1 = $resultado1->fetch_assoc()) { ?>
                            <?php if ($count < 25) { $count++; ?>
                                <?php if (empty($row1['disponible'])) { ?>
                                    <td class="text-center p-2">
                                        <input id="check_<?php echo $count; ?>" value="<?php echo $row1['asientos']; ?>" type="checkbox" onchange="limitar(this.name);" name="checkid[]" class="mr-2">
                                        <span class="text-yellow-500"><?php echo $row1['asientos']; ?></span>
                                    </td>
                                <?php } else { ?>
                                    <td class="text-center p-2">
                                        <img src="imag/seat_1.png" class="inline-block w-6 h-6" alt="Ocupado">
                                        <span class="text-red-500"><?php echo $row1['asientos']; ?></span>
                                    </td>
                                <?php } ?>
                            <?php } else { $count = 0; ?>
                                </tr><tr>
                            <?php } ?>
                        <?php } ?>
                    </tr>
                    <tr>
                        <td colspan="25" class="text-center py-4">
                            <button type="submit" id="AP" class="bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded">HACER PAGO</button>
							
                            <img src="imag/screen.png" class="w-full mt-4" alt="Screen">
                        </td>
						
                    </tr>
					


                </table>
            </form>
        </main>

        <footer class="mt-6 text-center">
            <p class="mt-4">Son las decisiones las que nos hacen ser quienes somos, y siempre podemos optar por hacer lo correcto. <a href="#" class="underline">#CineIDDS</a> | <a href="#" class="underline">Síguenos en Twitter</a></p>
            <p>Copyright© <a href="#" class="underline">Cine IDDS</a></p>
        </footer>
    </div>
</body>
</html>
