<?php

require('conexion.php');

$id = $_GET['id'];
$hora = $_GET['hora'];
$sala = $_GET['sala'];
$fecha = $_GET['fecha'];

$query = "SELECT * FROM cartelera WHERE nombre='$id'";
$resultado = $mysqli->query($query);
$row = $resultado->fetch_assoc();

$peli = $row['nombre'];

$query1 = "SELECT * FROM funcion WHERE pelicula='$id' AND hora='$hora' AND sala='$sala' AND fecha='$fecha'";
$resultado1 = $mysqli->query($query1);
$row1 = $resultado1->fetch_assoc();

$peli = $row1['pelicula'];
$sala = $row1['sala'];
$hora = $row1['hora'];
$fecha = $row1['fecha'];

$query2 = "SELECT * FROM funciones WHERE pelicula='$peli' AND hora='$hora' AND sala='$sala' AND fecha='$fecha'";
$resultado2 = $mysqli->query($query2);

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
    <script>
        function clearText(field) {
            if (field.defaultValue == field.value) field.value = '';
            else if (field.value == '') field.value = field.defaultValue;
        }

        function sumar() {
            var boletoInput = document.getElementsByName('boleto')[0];
            var precioInput = document.getElementsByName('precio')[0];
            var costoInput = document.getElementsByName('costo')[0];
            
            var cantidad = parseInt(boletoInput.value);
            var costo = parseInt(costoInput.value);

            boletoInput.value = cantidad + 1;
            precioInput.value = (cantidad + 1) * costo;
        }

        function restar() {
            var boletoInput = document.getElementsByName('boleto')[0];
            var precioInput = document.getElementsByName('precio')[0];
            var costoInput = document.getElementsByName('costo')[0];

            var cantidad = parseInt(boletoInput.value);
            var costo = parseInt(costoInput.value);

            if (cantidad > 1) {
                boletoInput.value = cantidad - 1;
                precioInput.value = (cantidad - 1) * costo;
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
                <li><a href="Snacks.php" class="hover:text-gray-300">Snacks</a></li>
                <li><a href="contacto.php" class="hover:text-gray-300">Contacto</a></li>
            </ul>
        </nav>

        <main class="bg-[#070F2B] p-6 rounded-lg shadow-md">
            <form name="ad" method="POST" action="asientos.php" enctype="multipart/form-data">
                <table class="w-full text-white">
                    <tr>
                        <td class="align-top w-1/3">
                            <input type="hidden" name="id" value="<?php echo $id; ?>" />
                            <img src="<?php echo $row['foto']; ?>" alt="<?php echo $row['nombre']; ?>" class="w-full h-auto rounded-lg">
                        </td>
                        <td class="align-top w-1/3 px-6">
                            <div>
                                <h1 class="text-3xl font-bold mb-2"><?php echo $row['nombre']; ?></h1>
                                <p class="mb-2"><strong>Género:</strong> <?php echo $row['genero']; ?></p>
                                <p class="mb-2"><strong>Clasificación:</strong> <?php echo $row['clasificacion']; ?></p>
                                <p class="mb-2"><strong>Duración:</strong> <?php echo $row['duracion']; ?> Min</p>
                                <p class="mb-2"><strong>Precio:</strong> <input id="matraca" size="3" readonly class="bg-transparent border-none text-green-500" type="text" name="costo" value="<?php echo $row['cost']; ?>" /> pesos</p>
                            </div>
                        </td>
                        <td class="align-top w-1/3">
                            <h2 class="text-xl font-semibold mb-4">Boletos a comprar</h2>
                            <input type="hidden" value="<?php echo "$count" ?>" name="cont"/>
                            <div class="flex items-center mb-4">
                                <button type="button" id="bote" onclick="restar()" class="bg-gray-700 text-white px-2 py-1 rounded-l">-</button>
                                <input id="matraca" size="1" class="bg-gray-800 text-orange-500 text-center border-none w-12" type="text" readonly name="boleto" value="1"/>
                                <button type="button" id="bote" onclick="sumar()" class="bg-gray-700 text-white px-2 py-1 rounded-r">+</button>
                            </div>
                            <p class="mb-4">Total: <input id="matraca" size="3" class="bg-transparent border-none text-orange-500" readonly type="text" name="precio" value="<?php echo $row['cost']; ?>" /> pesos</p>

                            <input type="hidden" name="id" value="<?php echo $row1['pelicula']; ?>" />
                            <input type="hidden" name="hora" value="<?php echo $row1['hora']; ?>" />
                            <input type="hidden" name="fecha" value="<?php echo $row1['fecha']; ?>" />
                            <input type="hidden" name="sala" value="<?php echo $row1['sala']; ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-center py-4">
                            <button type="submit" id="AP" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded mr-2">OK</button>
                            <a href="index.php" class="bg-red-600 hover:bg-red-700 text-white py-2 px-4 rounded">Cancelar compra</a>
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
