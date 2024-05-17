<?php

require ('conexion.php');

$query = "SELECT * from proxestrenos";
$resultado = $mysqli->query($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>| ESTRENOS</title>
    <link rel="icon" href="images/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
    <script src="https://kit.fontawesome.com/5b41b5f095.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .bg-primary {
            background-color: #9290C3;
        }

        .bg-secondary {
            background-color: #1B1A55;
        }

        .text-highlight {
            color: #535C91;
        }

        .text-primary {
            color: #070F2B;
        }
    </style>
    <script language="javascript" type="text/javascript">
        function clearText(field) {
            if (field.defaultValue == field.value) field.value = '';
            else if (field.value == '') field.value = field.defaultValue;
        }
    </script>
</head>

<body class="bg-primary text-primary font-sans">
    <?php
    require ('components/navbar2.php');
    ?>

    <main class="container mx-auto py-8">
        <div class="text-center">
            <h1 class="text-4xl font-bold mb-4">ESTRENOS</h1>
            <hr class="border-t-2 border-highlight w-24 mx-auto mb-8">
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 p-[2rem]">
            <?php
            $count = 0;
            while ($row = $resultado->fetch_assoc()) {
                if ($count < 3) {
                    ?>
                    <div class="text-center">
                        <a href="peliculas.php?id=<?php echo $row['id']; ?>">
                            <div
                                class="movie-poster bg-gray-200 flex items-center justify-center overflow-hidden rounded-lg mb-4">
                                <img class="w-full h-[35rem] object-cover" src="<?php echo $row['foto']; ?>"
                                    alt="<?php echo $row['nombre']; ?>">
                            </div>
                            <p class="text-[#1B1A55] font-bold"><?php echo $row['nombre']; ?></p>
                        </a>
                    </div>
                    <?php
                    $count++;
                } else {
                    break;
                }
            } ?>
        </div>
    </main>

    <?php
    require ('components/navbar2.php');
    ?>

    <script src="js/menu.js" type="text/javascript"></script>
</body>

</html>