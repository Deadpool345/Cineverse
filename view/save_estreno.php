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
        echo "Error: Falta la imagen del estreno.";
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
        echo "Error: Falta el video del estreno.";
        exit();
    }
    
    // Insertar datos en la base de datos
    $query = "INSERT INTO proxestrenos (nombre, duracion, genero, clasificacion, sipnosis, foto, trailer, cost)
              VALUES ('$titulo', '$duracion', '$genero', '$clasifica', '$sipnosis', '$destinoimg', '$ruta', '$costo')";
    $resultado = $mysqli->query($query);
    
    if($resultado) {
        echo "<h1>ACCION SATISFACTORIA</h1>";
    } else {
        echo "<center><h1>Error al subir $titulo</h1></center>";
    }
} else {
    echo "Error: Faltan datos del formulario.";
}
?>
    