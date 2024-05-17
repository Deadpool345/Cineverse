<?php

require('conexion.php');

$query="SELECT * from cartelera";
$resultado=$mysqli->query($query);

$count=0;

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>| Agregar Pelicula</title>
  <link rel="preload" href="css/normalize.css" type="text/css">
  <link rel="stylesheet" href="css/normalize.css" type="text/css">
  <link rel="preload" href="css/horario.css" type="text/css">
  <link rel="stylesheet" href="css/horario.css" type="text/css">
  <link rel="icon" href="images/icono.png" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
  <script src="https://kit.fontawesome.com/5b41b5f095.js" crossorigin="anonymous"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .bg-primary { background-color: #9290C3; }
    .bg-secondary { background-color: #1B1A55; }
    .text-highlight { color: #535C91; }
    .text-primary { color: #070F2B; }
  </style>
  <script language="javascript" type="text/javascript">
  function clearText(field) {
      if (field.defaultValue == field.value) field.value = '';
      else if (field.value == '') field.value = field.defaultValue;
  }
  </script>
</head>
<body class="bg-primary text-primary font-sans">
  <header class="bg-secondary text-white">
    <nav class="container mx-auto flex justify-between items-center py-4">
      <a class="text-2xl font-bold" href="#"><img class="h-16" src="images/Logo1.webp" alt="logo"></a>
      <ul class="flex space-x-6">
        <li><a class="hover:text-highlight" href="#">Home</a></li>
        <li><a class="hover:text-highlight" href="conocenos.php">Nosotros</a></li>
        <li><a class="hover:text-highlight" href="cartelera.php">Cartelera</a></li>
        <li><a class="hover:text-highlight" href="#">Unirme</a></li>
        <li><a class="hover:text-highlight" href="contacto.php">Contáctanos</a></li>
        <li><a class="hover:text-highlight" href="proxim.php">Estrenos</a></li>
      </ul>
      <img src="images/menu-btn.png" alt="icono de menu" class="h-8 w-8 cursor-pointer md:hidden">
    </nav>
  </header>

  <main class="container mx-auto py-8">
    <div class="text-center">
      <h1 class="text-4xl font-bold mb-4">Horarios</h1>
      <hr class="border-t-2 border-highlight w-24 mx-auto mb-8">
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
      <?php while($row = $resultado->fetch_assoc()) { ?>
        <div class="text-center">
          <a href="pelicula.php?id=<?php echo $row['id']; ?>">
            <img class="w-full h-[30rem] object-contain rounded-lg mb-4" src="<?php echo $row['foto']; ?>" alt="<?php echo $row['nombre']; ?>">
            <p class="text-[#1B1A55] font-bold"><?php echo $row['nombre']; ?></p>
          </a>
        </div>
      <?php } ?>
    </div>
  </main>

  <footer class="bg-secondary text-white py-8">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
      <div>
        <h2 class="text-lg font-bold mb-4">Sobre Nosotros</h2>
        <p>Cineverse es una empresa dedicada a la reserva de asientos de cine que se preocupa por ofrecer la mejor experiencia posible a sus clientes...</p>
        <ul class="flex space-x-4 mt-4">
          <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        </ul>
      </div>
      <div>
        <h2 class="text-lg font-bold mb-4">Enlaces Útiles</h2>
        <ul class="space-y-2">
          <li><a href="conocenos.php" class="hover:text-highlight">Conócenos</a></li>
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
