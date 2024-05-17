<?php
require('conexion.php');

$id = $_GET['id'];
$query = "SELECT * FROM cartelera WHERE id='$id'";
$resultado = $mysqli->query($query);
$row = $resultado->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineVerse</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#9290C3] text-white">
    <div class="container mx-auto p-4">
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
            <div class="flex flex-col md:flex-row">
                <div class="md:w-1/3 mb-4 md:mb-0">
                    <img src="<?php echo $row['foto']; ?>" alt="<?php echo $row['nombre']; ?>" class="w-full h-auto rounded-lg">
                </div>
                <div class="md:w-2/3 md:ml-6">
                    <h1 class="text-3xl font-bold mb-2"><?php echo $row['nombre']; ?></h1>
                    <div class="flex space-x-2 mb-4">
                        <span class="bg-red-600 px-2 py-1 rounded"><?php echo $row['clasificacion']; ?></span>
                        <span class="bg-gray-700 px-2 py-1 rounded"><?php echo $row['duracion']; ?> Min</span>
                        <span class="bg-purple-600 px-2 py-1 rounded"><?php echo $row['genero']; ?></span>
                    </div>
                    <video width="500" src="<?php echo $row['trailer']; ?>" controls autoplay preload="auto" class="rounded-lg mb-4"></video>
                    <div>
                        <h2 class="text-xl font-semibold mb-2">Sinopsis:</h2>
                        <p><?php echo $row['sipnosis']; ?></p>
                    </div>
                    <div class="mt-5">
                        <a href="index.php" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded mr-2">Volver atrás</a>
                        <a href="horario.php?id=<?php echo $row['id']; ?>&titulo=<?php echo $row['nombre']; ?>" class="bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded">Comprar Boleto</a>
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
