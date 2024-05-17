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
    <link rel="icon" href="images/icono.png">
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
    <main>
        <header>
            <nav class="navbar bg-secondary">
                <a class="logo" href="/"><img class="logotipo h-16" src="images/Logo1.webp" alt="logo"></a>
                <div class="nav-links">
                    <ul>
                        <li class="enlace-resp"><a class="hover:text-highlight" href="/">Home</a></li>
                        <li class="enlace-resp"><a class="hover:text-highlight" href="conocenos.php">Nosotros</a></li>
                        <li class="enlace-resp"><a class="hover:text-highlight" href="#">Cartelera</a></li>
                        <li class="enlace-resp"><a class="hover:text-highlight" href="#">Unirme</a></li>
                        <li class="active"><a class="hover:text-highlight" href="#">Contáctanos</a></li>
                    </ul>
                </div>
                <img src="images/menu-btn.png" alt="icono de menu" class="menu-hamburger">
            </nav>
        </header>
    </main>

    <section class="contenido container mx-auto px-[8rem] mb-10">
    <article class="text-center">
        <h1 class="text-4xl font-bold text-center mt-8 mb-4">Contáctanos</h1>
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



    <footer class="bg-secondary text-white py-8">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <h2 class="text-lg font-bold mb-4">Sobre Nosotros</h2>
                <p>Cineverse es una empresa dedicada a la reserva de asientos de cine que se preocupa por ofrecer la mejor experiencia posible a sus clientes...</p>
                <ul class="flex space-x-4 mt-4">
                    <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div>
                <h2 class="text-lg font-bold mb-4">Enlaces Útiles</h2>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-highlight">Conócenos</a></li>
                    <li><a href="#" class="hover:text-highlight">FAQ</a></li>
                    <li><a href="#" class="hover:text-highlight">Términos y Condiciones</a></li>
                </ul>
            </div>
            <div>
                <h2 class="text-lg font-bold mb-4">Contáctanos</h2>
                <ul class="space-y-4">
                    <li class="flex items-center space-x-2">
                        <i class="fa-solid fa-location-dot"></i>
                        <span> Km 1 1/2 Calle a plan del Pino,<br> Ciudadela Don Bosco,<br>Soyapango</span>
                    </li>
                    <li class="flex items-center space-x-2">
                        <i class="fa-solid fa-phone"></i>
                        <p><a href="tel:2525-2525"> +503 2525-2525</a></p>
                    </li>
                    <li class="flex items-center space-x-2">
                        <i class="fa-solid fa-envelope"></i>
                        <p><a href="mailto:cine.versesv@gmail.com"> cine.versesv@gmail.com</a></p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="text-center mt-8">
            <p>&copy; 2023 CineVerse. Derechos Reservados</p>
        </div>
    </footer>
    <script src="js/menu.js" type="text/javascript"></script>
</body>
</html>
