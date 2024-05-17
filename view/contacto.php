<?php

require('conexion.php');

$query="SELECT * from proxestrenos";
$resultado=$mysqli->query($query);

$count=0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>| Contáctanos</title>
    <link rel="icon" href="images/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5b41b5f095.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .bg-primary { background-color: #9290C3; }
        .bg-secondary { background-color: #1B1A55; }
        .text-highlight { color: #535C91; }
        .text-primary { color: #070F2B; }
    </style>
</head>
<body class="bg-primary text-primary font-sans">
        <?php
            require('components/navbar2.php');
        ?>

    <section class="contenido container mx-auto px-[8rem] mb-[5rem]">
    <article class="text-center">
        <h1 class="text-4xl font-bold text-center mt-[3rem] mb-4">Contáctanos</h1>
        <hr class="linea-blanca w-24 mx-auto mb-8">
        <div class="bg-secondary p-8 rounded-lg text-white">
            <form id="contact-form" class="w-full max-w-lg mx-auto">
                <div class="mb-4">
                    <label class="block text-sm font-semibold mb-2" for="full-name">Nombre Completo:</label>
                    <input class="w-full bg-white rounded-md p-2" type="text" id="full-name" required>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-semibold mb-2" for="email">Correo electrónico:</label>
                    <input class="w-full bg-white rounded-md p-2" type="email" id="email" required>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-semibold mb-2" for="subject">Asunto:</label>
                    <input class="w-full bg-white rounded-md p-2" type="text" id="subject" required>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-semibold mb-2" for="message">Mensaje:</label>
                    <textarea class="w-full bg-white rounded-md p-2" id="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="bg-white text-purple-600 py-2 px-4 rounded-md">Enviar</button>
            </form>
        </div>
    </article>
    </section>



    <?php
        require('components/footer.php');
    ?>
    <script src="js/menu.js" type="text/javascript"></script>
</body>
</html>
