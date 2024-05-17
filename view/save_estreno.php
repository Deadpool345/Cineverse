<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');

        :root {
            --color1: #070F2B;
            --color2: #1B1A55;
            --color3: #535C91;
            --color4: #9290C3;
            --blanco: #ffffff;
            --transparente-gris: rgba(255, 255, 255, 0.20);
            --fuente: 'Poppins', sans-serif;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            list-style: none;
            font-family: var(--fuente);
            outline: none;
        }

        body {
            background-color: var(--color1);
            color: var(--blanco);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        .message {
            margin: 20px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px var(--color4);
        }

        .message.success {
            background-color: var(--color3);
        }

        .message.error {
            background-color: var(--color2);
        }

        .button-container {
            margin-top: 20px;
        }

        .btn {
            padding: 10px 20px;
            border-radius: 5px;
            text-align: center;
            text-transform: uppercase;
            font-weight: bold;
            transition: background-color 0.2s ease-in-out;
        }

        .btn-regresar {
            background-color: var(--color3);
            color: var(--blanco);
            text-decoration: none;
        }

        .btn-regresar:hover {
            background-color: var(--color2);
        }
    </style>
</head>
<body>
<?php
require('conexion.php');

// Comprobar si los datos del formulario se enviaron correctamente
if(isset($_POST['titulo'], $_POST['genero'], $_POST['duracion'], $_POST['clasi'], $_POST['sipnosis'], $_POST['costo'], $_FILES['foto'], $_FILES['video'])) {
    $titulo = $_POST['titulo'];
    $genero = $_POST['genero'];
    $duracion = $_POST['duracion'];
    $clasifica = $_POST['clasi'];
    $sipnosis = $_POST['sipnosis'];
    $costo = $_POST['costo'];
    
    // Manejo de archivos de imagen
    if(isset($_FILES['foto']['tmp_name'], $_FILES['foto']['name'])) {
        $archivoimg = $_FILES['foto']['tmp_name'];
        $destinoimg = "imag/" . $_FILES['foto']['name'];
        move_uploaded_file($archivoimg, $destinoimg);
    } else {
        echo "<div class='message error'>Error: Falta la imagen del estreno.</div>";
        exit();
    }
    
    // Manejo de archivos de video
    if(isset($_FILES['video']['tmp_name'], $_FILES['video']['name'])) {
        $directorio = "media";
        $archivo = $_FILES['video']['tmp_name'];
        $nombrearchivo = $_FILES['video']['name'];
        move_uploaded_file($archivo, $directorio . "/" . $nombrearchivo);
        $ruta = $directorio . "/" . $nombrearchivo;
    } else {
        echo "<div class='message error'>Error: Falta el video del estreno.</div>";
        exit();
    }
    
    // Insertar datos en la base de datos
    $query = "INSERT INTO proxestrenos (nombre, duracion, genero, clasificacion, sipnosis, foto, trailer, cost)
              VALUES ('$titulo', '$duracion', '$genero', '$clasifica', '$sipnosis', '$destinoimg', '$ruta', '$costo')";
    $resultado = $mysqli->query($query);
    
    if($resultado) {
        echo "<div class='message success'><h1>ACCION SATISFACTORIA</h1></div>";
    } else {
        echo "<div class='message error'><center><h1>Error al subir $titulo</h1></center></div>";
    }
} else {
    echo "<div class='message error'>Error: Faltan datos del formulario.</div>";
}
?>
<div class="button-container">
    <a href="javascript:history.back()" class="btn btn-regresar">Regresar</a>
</div>
</body>
</html>
