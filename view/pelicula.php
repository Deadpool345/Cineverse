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
    <div class="container mx-auto ">
        <?php
          require('components/navbar2.php');
        ?>

        <main class="mt-[2rem] p-6 rounded-lg  mb-[3rem]">
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

        <?php
          require('components/footer.php');
        ?>
    </div>
</body>

</html>
