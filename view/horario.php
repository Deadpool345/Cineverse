<?php

require('conexion.php');

$id = $_GET['id'];

$query = "SELECT * from cartelera where id='$id'";
$resultado = $mysqli->query($query);
$row = $resultado->fetch_assoc();

$peli = $row['nombre'];

$query1 = "SELECT * from funcion where pelicula='$peli'";
$resultado1 = $mysqli->query($query1);

$contador = 0;

?>

<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cine IDDS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#9290C3] text-white">
    <div class="container mx-auto p-4">
        <header class="flex justify-between items-center py-4">
            <div class="flex items-center">
                <img src="imag/logo.png" alt="Cine IDDS Logo" class="w-24 h-auto">
               
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
            <div class="flex flex-col md:flex-row">
                <div class="md:w-1/3 mb-4 md:mb-0">
                    <img src="<?php echo $row['foto']; ?>" alt="<?php echo $row['nombre']; ?>" class="w-full h-auto rounded-lg">
                </div>
                <div class="md:w-2/3 md:ml-6">
                    <h1 class="text-3xl font-bold mb-2"><?php echo $row['nombre']; ?></h1>
                    <div class="mb-4">
                        <p><strong>Género:</strong> <?php echo $row['genero']; ?></p>
                        <p><strong>Clasificación:</strong> <?php echo $row['clasificacion']; ?></p>
                        <p><strong>Duración:</strong> <?php echo $row['duracion']; ?> Min</p>
                    </div>
                    <div class="mb-4">
                        <h3 class="text-xl font-semibold mb-2">Horarios</h3>
                        <?php $count = 0; while ($row1 = $resultado1->fetch_assoc()) { $count++; ?>
                            <p>
                                <strong>El <?php echo $row1['fecha']; ?> a las:</strong>
                                <a href="boletos.php?id=<?php echo $row1['pelicula']; ?>&hora=<?php echo $row1['hora']; ?>&fecha=<?php echo $row1['fecha']; ?>&sala=<?php echo $row1['sala']; ?>" class="bg-blue-600 hover:bg-blue-700 text-white py-1 px-2 rounded ml-2"><?php echo $row1['hora']; ?> horas</a>
                            </p>
                        <?php } if ($count == 0) { ?>
                            <p>No disponibles</p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </main>

        <footer class="mt-6 text-center">
            <p class="mt-4">Son las decisiones las que nos hacen ser quienes somos, y siempre podemos optar por hacer lo correcto. <a href="#" class="underline">#CineIDDS</a> | <a href="#" class="underline">Síguenos en Twitter</a></p>
            <p>Copyright© <a href="#" class="underline">Cine IDDS</a></p>
        </footer>
    </div>
</body>
</html>
