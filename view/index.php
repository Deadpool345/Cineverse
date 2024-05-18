<?php

require('conexion.php');

$query="SELECT * from cartelera";
$resultado=$mysqli->query($query);

$query3="SELECT * from cartelera";
$resultado3=$mysqli->query($query3);
$row3=$resultado3->fetch_assoc();




$count=0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>| CineVerse</title>
    <link rel="preload" href="css/normalize.css" type="text/css">
    <link rel="stylesheet" href="css/normalize.css" type="text/css">
    <link rel="preload" href="css/welcome.css" type="text/css">
    <link rel="stylesheet" href="css/welcome.css" type="text/css">
    <link rel="icon" href="images/logo.png" type="text/css">
    <link rel="preload" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
    <script src="https://kit.fontawesome.com/5b41b5f095.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- <link href="templatemo_style.css" rel="stylesheet" type="text/css" />
   
<script type="text/javascript" src="js/jquery.min.js"></script>
<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="js/slimbox2.js"></script> -->

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>


</head>
<body class="bg-[#535C91] text-white font-sans">

<main>
  <header>
  <nav class="navbar bg-[#1B1A55] p-4 h-[11rem]">
            <a class="" href="#"><img class="logotipo h-[9rem]" src="images/logo.png" alt="logo"></a>
            <div class="nav-links hidden md:flex bg-[#535C91]">
                <ul class="flex space-x-4">
                    <li class=""><a href="#" class="hover:text-gray-300">Home</a></li>
                    <li><a href="conocenos.php" class="hover:text-gray-300">Nosotros</a></li>
                    <li><a href="cartelera.php" class="hover:text-gray-300">Cartelera</a></li>
                    <li><a href="cartelera.php" class="hover:text-gray-300">Unirme</a></li>
                    <li><a href="contacto.php" class="hover:text-gray-300">Contáctanos</a></li>
                    <li><a href="proxim.php" class="hover:text-gray-300">Estrenos</a></li>
                </ul>
            </div>
            <button class="menu-hamburger md:hidden mt-[2.5rem]">
                <img src="images/menu-btn.png" alt="icono de menu" class="h-6">
            </button>
        </nav>
        <div class="contenedor relative">
            <div class="slider-container active">
                <div class="slide">
                    <div class="content text p-4">
                        <h3 class="text-2xl font-bold">Hola</h3>
                        <p class="mt-2">La mejor opción en entretenimiento ha llegado</p>
                        <a href="cartelera.php" class="btn mt-4 bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">Unirme</a>
                        <video src="video/video1.mp4" class="absolute top-0 left-0 w-full h-full object-cover" muted autoplay loop></video>
                    </div>
                </div>
            </div>
            <!-- Repeat for other slides -->
            <div id="next" class="absolute right-0 top-1/2 transform -translate-y-1/2 text-3xl cursor-pointer" onclick="next()">></div>
            <div id="prev" class="absolute left-0 top-1/2 transform -translate-y-1/2 text-3xl cursor-pointer" onclick="prev()"><</div>
        </div>
  </header>
  <section class="ofertas py-8">
    <h1 class="text-center text-3xl font-bold mb-[.8rem]">CARTELERA</h1>
    <hr class="my-4 border-gray-300">
</section>
<section class="SectionCarrusel py-8">
    <div class="container mx-auto w-full">
        <div class="BotonesCarrusel flex justify-between items-center w-full">
            <button class="pre-btn bg-[#1B1A55]"><img src="images/arrow.png" alt="" >></button>
            <button class="nxt-btn bg-[#1B1A55] ml-[12rem]"><img src="" alt="" >></button>
        </div>
        <div class="SectionCarrusel-Contenedor flex space-x-4 overflow-x-scroll">
            <div class="CartaCarrusel bg-white text-black rounded-lg p-4">
                <div class="CartaImagen flex items-center ">
                    <img src="https://posterspy.com/wp-content/uploads/2022/01/Avatar-The-Way-Of-Water.jpg" class="m-auto block movie-thumb rounded-lg" alt="">
                </div>
                <div class="SectionCarrusel-informacion mt-2">
                    <span class="title text-black font-semibold">Avatar - El Camino del Agua</span>
                </div>
            </div>
            <div class="CartaCarrusel bg-white text-black rounded-lg p-4">
                <div class="CartaImagen flex items-center">
                    <img src="https://mx.web.img2.acsta.net/pictures/22/11/30/02/01/5931433.jpg" class="m-auto block movie-thumb rounded-lg" alt="">
                </div>
                <div class="SectionCarrusel-informacion mt-2">
                    <span class="title text-black font-semibold">Mi Suegra me Odia</span>
                </div>
            </div>
            <div class="CartaCarrusel bg-white text-black rounded-lg p-4">
                <div class="CartaImagen flex items-center">
                    <img src="https://www.multicinema.com.sv/peliculas/MARAVILLOSO-DESASTRE-3.gif" class="m-auto block movie-thumb rounded-lg" alt="">
                </div>
                <div class="SectionCarrusel-informacion mt-2">
                    <span class="title text-black font-semibold">Maravilloso Desastre</span>
                </div>
            </div>
            <div class="CartaCarrusel bg-white text-black rounded-lg p-4">
                <div class="CartaImagen flex items-center">
                    <img src="https://es.web.img3.acsta.net/pictures/23/01/23/16/41/0617610.jpg" class="m-auto block movie-thumb rounded-lg" alt="">
                </div>
                <div class="SectionCarrusel-informacion mt-2">
                    <span class="title text-black font-semibold">Posesion Infernal: El Desastre</span>
                </div>
            </div>
            <div class="CartaCarrusel bg-white text-black rounded-lg p-4">
                <div class="CartaImagen flex items-center">
                    <img src="https://static.cinepolis.com/img/peliculas/41904/1/1/41904.jpg" class="m-auto block movie-thumb rounded-lg" alt="">
                </div>
                <div class="SectionCarrusel-informacion mt-2">
                    <span class="title text-black font-semibold">John Wick 4</span>
                </div>
            </div>
            <div class="CartaCarrusel bg-white text-black rounded-lg p-4">
                <div class="CartaImagen flex items-center">
                    <img src="https://th.bing.com/th/id/OIP.4PzIYDcGhrSYjSx4SLIJFgHaLs?pid=ImgDet&rs=1" class="m-auto block movie-thumb rounded-lg" alt="">
                </div>
                <div class="SectionCarrusel-informacion mt-2">
                    <span class="title text-black font-semibold">Super Mario Bros - La pelicula</span>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ofertas2 py-8">
    <h1 class="text-center text-3xl font-bold mb-[2rem]">ESTRENOS</h1>
    <hr class="my-4 border-gray-300">
</section>
<section class="SectionCarrusel2 py-8">
    <div class="container mx-auto">
        <div class="BotonesCarrusel2 flex justify-between items-center">
            <button class="pre-btn2 bg-[#1B1A55]"><img src="images/arrow.png" alt="" >></button>
            <button class="nxt-btn2 bg-[#1B1A55]"><img src="images/arrow.png" alt="" >></button>
        </div>
        <div class="SectionCarrusel-Contenedor2 flex space-x-4 overflow-x-scroll">
            <div class="CartaCarrusel2 bg-white text-black rounded-lg p-4">
                <div class="CartaImagen flex items-center">
                    <img src="https://www.multicinema.com.sv/peliculas/rapidos-y-furiosos-10.gif" class="m-auto block movie-thumb rounded-lg" alt="">
                </div>
                <div class="SectionCarrusel-informacion2 mt-2">
                    <span class="title text-black font-semibold">Rapidos y Furiosos X</span>
                </div>
            </div>
            <div class="CartaCarrusel2 bg-white text-black rounded-lg p-4">
                <div class="CartaImagen flex items-center">
                    <img src="https://www.multicinema.com.sv/peliculas/guardianes-de-la-galaxia-4.jpg" class="m-auto block movie-thumb rounded-lg" alt="">
                </div>
                <div class="SectionCarrusel-informacion2 mt-2">
                    <span class="title text-black font-semibold">Guardianes de la Galaxia Vol. 3</span>
                </div>
            </div>
            <div class="CartaCarrusel2 bg-white text-black rounded-lg p-4">
                <div class="CartaImagen flex items-center">
                    <img src="https://cinemarkmedia.modyocdn.com/ca/300x400/93033.jpg?version=1682571600000" class="m-auto block movie-thumb rounded-lg" alt="">
                </div>
                <div class="SectionCarrusel-informacion2 mt-2">
                    <span class="title text-black font-semibold">Oso Intoxicado</span>
                </div>
            </div>
            <div class="CartaCarrusel2 bg-white text-black rounded-lg p-4">
                <div class="CartaImagen flex items-center">
                    <img src="https://www.multicinema.com.sv/peliculas/INDIANA-JONES-1.jpg" class="m-auto block movie-thumb rounded-lg" alt="">
                </div>
                <div class="SectionCarrusel-informacion2 mt-2">
                    <span class="title text-black font-semibold">Indiana Jones y el dia del destino</span>
                </div>
            </div>
            <div class="CartaCarrusel2 bg-white text-black rounded-lg p-4">
                <div class="CartaImagen flex items-center">
                    <img src="https://www.multicinema.com.sv/peliculas/la-segunda-enmienda-3.jpg"  class="m-auto block movie-thumb rounded-lg" alt="">
                </div>
                <div class="SectionCarrusel-informacion2 mt-2">
                    <span class="title text-black font-semibold">La Segunda Enmienda 3</span>
                </div>
            </div>
            <div class="CartaCarrusel2 bg-white text-black rounded-lg p-4">
                <div class="CartaImagen flex items-center">
                    <img src="https://www.multicinema.com.sv/peliculas/MISION-IMPOSIBLE-1-1.gif"  class="m-auto block movie-thumb rounded-lg" alt="">
                </div>
                <div class="SectionCarrusel-informacion2 mt-2">
                    <span class="title text-black font-semibold">Mision Imposible - Sentencia Mortal</span>
                </div>
            </div>div>
            <div class="CartaCarrusel2 bg-white text-black rounded-lg p-4">
                <div class="CartaImagen flex items-center">
                    <img src="https://www.multicinema.com.sv/peliculas/spider-man-a-traves-del-spider-verso-1.gif" class="m-auto block movie-thumb rounded-lg" alt="">
                </div>
                <div class="SectionCarrusel-informacion2 mt-2">
                    <span class="title text-black font-semibold">Spider-Man A través del spiderversoI</span>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ofertas2 py-8 mb-[2rem]">
    <h1 class="text-center text-3xl font-bold mb-[2rem]">Testimonios</h1>
    <hr class="my-4 border-gray-300">
</section>
<section class="testimonios py-8">
        <div class="container mx-auto">
            
            <div class="slide-container swiper relative">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper flex">
                        <div class="card swiper-slide bg-white text-black rounded-lg shadow-md p-4 mx-2">
                            <div class="image-content relative">
                                <span class="overlay absolute inset-0 bg-black opacity-25 rounded-lg"></span>
                                <div class="card-image relative z-10 w-24 h-24 mx-auto mt-4">
                                    <img src="images/profiles/profile1.jpg" alt="Rafael Castro" class="card-img rounded-full w-full h-full object-cover" />
                                </div>
                            </div>
                            <div class="card-content text-center mt-4">
                                <h2 class="name text-xl font-semibold">Rafael Castro</h2>
                                <p class="description mt-2">
                                    Ofrece una experiencia de compra satisfactoria y sin complicaciones.
                                </p>
                                <button class="button mt-4 bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">Ver Más</button>
                            </div>
                        </div>
                        <div class="card swiper-slide bg-white text-black rounded-lg shadow-md p-4 mx-2">
                            <div class="image-content relative">
                                <span class="overlay absolute inset-0 bg-black opacity-25 rounded-lg"></span>
                                <div class="card-image relative z-10 w-24 h-24 mx-auto mt-4">
                                    <img src="images/profiles/profile2.jpg" alt="Ana Castro" class="card-img rounded-full w-full h-full object-cover" />
                                </div>
                            </div>
                            <div class="card-content text-center mt-4">
                                <h2 class="name text-xl font-semibold">Ana Castro</h2>
                                <p class="description mt-2">
                                    El sistema es fácil de usar sin tener que hacer fila.
                                </p>
                                <button class="button mt-4 bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">Ver Más</button>
                            </div>
                        </div>
                        <div class="card swiper-slide bg-white text-black rounded-lg shadow-md p-4 mx-2">
                            <div class="image-content relative">
                                <span class="overlay absolute inset-0 bg-black opacity-25 rounded-lg"></span>
                                <div class="card-image relative z-10 w-24 h-24 mx-auto mt-4">
                                    <img src="images/profiles/profile3.jpg" alt="Juan López" class="card-img rounded-full w-full h-full object-cover" />
                                </div>
                            </div>
                            <div class="card-content text-center mt-4">
                                <h2 class="name text-xl font-semibold">Juan López</h2>
                                <p class="description mt-2">
                                    En lugar de hacer filas, puedo comprar de forma rápida.
                                </p>
                                <button class="button mt-4 bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">Ver Más</button>
                            </div>
                        </div>
                        <div class="card swiper-slide bg-white text-black rounded-lg shadow-md p-4 mx-2">
                            <div class="image-content relative">
                                <span class="overlay absolute inset-0 bg-black opacity-25 rounded-lg"></span>
                                <div class="card-image relative z-10 w-24 h-24 mx-auto mt-4">
                                    <img src="images/profiles/profile4.jpg" alt="Marisol Rivera" class="card-img rounded-full w-full h-full object-cover" />
                                </div>
                            </div>
                            <div class="card-content text-center mt-4">
                                <h2 class="name text-xl font-semibold">Marisol Rivera</h2>
                                <p class="description mt-2">
                                    Un servicio nada comparado a la competencia.
                                </p>
                                <button class="button mt-4 bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">Ver Más</button>
                            </div>
                        </div>
                        <div class="card swiper-slide bg-white text-black rounded-lg shadow-md p-4 mx-2">
                            <div class="image-content relative">
                                <span class="overlay absolute inset-0 bg-black opacity-25 rounded-lg"></span>
                                <div class="card-image relative z-10 w-24 h-24 mx-auto mt-4">
                                    <img src="images/profiles/profile5.jpg" alt="Rosa González" class="card-img rounded-full w-full h-full object-cover" />
                                </div>
                            </div>
                            <div class="card-content text-center mt-4">
                                <h2 class="name text-xl font-semibold">Rosa González</h2>
                                <p class="description mt-2">
                                    Proporciona una variedad de películas en función.
                                </p>
                                <button class="button mt-4 bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">Ver Más</button>
                            </div>
                        </div>
                        <div class="card swiper-slide bg-white text-black rounded-lg shadow-md p-4 mx-2">
                            <div class="image-content relative">
                                <span class="overlay absolute inset-0 bg-black opacity-25 rounded-lg"></span>
                                <div class="card-image relative z-10 w-24 h-24 mx-auto mt-4">
                                    <img src="images/profiles/profile6.jpg" alt="José Ramírez" class="card-img rounded-full w-full h-full object-cover" />
                                </div>
                            </div>
                            <div class="card-content text-center mt-4">
                                <h2 class="name text-xl font-semibold">José Ramírez</h2>
                                <p class="description mt-2">
                                    Me evité largas filas y disfruté de mi película favorita.
                                </p>
                                <button class="button mt-4 bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">Ver Más</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next swipper-navBtn text-gray-400 hover:text-white"></div>
                <div class="swiper-button-prev swipper-navBtn text-gray-400 hover:text-white"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
</main>
<footer class="bg-[#1B1A55] text-white py-8">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="sec about-us">
            <h2 class="text-xl font-bold">Sobre Nosotros</h2>
            <p class="mt-4">Cineverse es una empresa dedicada a la reserva de asientos de cine que se preocupa por ofrecer la mejor experiencia posible a sus clientes...</p>
            <ul class="sci flex space-x-4 mt-4">
                <li><a href="#" class="hover:text-gray-300"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#" class="hover:text-gray-300"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#" class="hover:text-gray-300"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        <div class="sec quick-links">
            <h2 class="text-xl font-bold">Enlaces Útiles</h2>
            <ul class="mt-4">
                <li><a href="conocenos.php" class="hover:text-gray-300">Conócenos</a></li>
                <li><a href="#" class="hover:text-gray-300">FAQ</a></li>
                <li><a href="#" class="hover:text-gray-300">Términos y Condiciones</a></li>
            </ul>
        </div>
        <div class="sec contact">
            <h2 class="text-xl font-bold">Contáctanos</h2>
            <ul class="mt-4">
                <li class="flex items-center">
                    <i class="fa-solid fa-location-dot mr-2"></i>
                    <span> Km 1 1/2 Calle a plan del Pino,<br> Ciudadela Don Bosco,<br>Soyapango</span>
                </li>
                <li class="flex items-center mt-4">
                    <i class="fa-solid fa-phone mr-2"></i>
                    <p>+503 2250-3700</p>
                </li>
                <li class="flex items-center mt-4">
                    <i class="fa-solid fa-envelope mr-2"></i>
                    <p>cineverse@gmail.com</p>
                </li>
            </ul>
        </div>
    </div>
</footer>
  <script src="js/menu.js" type="text/javascript"></script>
  <script src="js/slider.js" type="text/javascript"></script>
   <!-- Swiper JS -->
   <script src="js/swiper-bundle.min.js" type="text/javascript"></script>
   <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
   <script src="js/carrousel.js"></script>
   <!-- JavaScript -->
   <script src="js/script.js" text="text/javascript"></script>
</body>
</html>