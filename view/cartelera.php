<?php
require('conexion.php');

$query = "SELECT * from cartelera";
$resultado = $mysqli->query($query);

$query3 = "SELECT * from cartelera";
$resultado3 = $mysqli->query($query3);
$row3 = $resultado3->fetch_assoc();

$count = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>| Cartelera</title>
    <link rel="icon" href="images/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5b41b5f095.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <script language="javascript" type="text/javascript">
        function clearText(field) {
            if (field.defaultValue == field.value) field.value = '';
            else if (field.value == '') field.value = field.defaultValue;
        }
    </script>
</head>
<body class="bg-[#9290C3] text-gray-800 font-poppins">
    <header class="bg-white shadow-md">
        <?php
          require('components/navbar2.php');
        ?>
    </header>

    <main class="container mx-auto py-8">
        <h1 class="text-center text-3xl font-bold mb-6 text-white">Cartelera</h1>
        <ul class="movie-list grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6  p-[5rem] ">
            <?php while($row = $resultado->fetch_assoc()) { ?>
                <li class="movie-item bg-white shadow-md rounded-lg overflow-hidden ">
                    <a href="pelicula.php?id=<?php echo $row['id']; ?>" class="block">
                        <img class="movie-poster m-auto block h-[30rem] object-cover" src="<?php echo $row['foto']; ?>" alt="<?php echo $row['nombre']; ?>">
                        <span class="movie-name block text-center text-xl font-semibold p-4"><?php echo $row['nombre']; ?></span>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </main>

    <?php
          require('components/footer.php');
        ?>
    <script src="js/menu.js" type="text/javascript"></script>
</body>
</html>
