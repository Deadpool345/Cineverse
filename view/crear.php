
<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}else
{
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preload" href="css/crear.css" type="text/css">
    <link rel="stylesheet" href="css/crear.css" type="text/css">
    <link rel="preload" href="css/normalize.css" type="text/css">
    <link rel="preload" href="css/normalize.css" type="text/css">
    <link rel="icon" href="images/icono.png">
    <title>| Crear cuenta</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
     <!--
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="js/slimbox2.js"></script> 
<script type="text/JavaScript" src="funciones.js"></script> -->

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>


</head>
<body>
<!--
<div id="templatemo_body_wrapper">
<div id="templatemo_wrapper">
    <div id="templatemo_header">
        <div id="site_title"  ><h1><img width="150" height="100" src="imag/logo.png"/></h1></div>
        <div class="col_4 right">
            <a href="https://www.facebook.com/templatemo"><img src="images/templatemo_facebook.png" alt="Facebook" /></a>
            <a href="#"><img src="images/templatemo_google.png" alt="Google" /></a>
            <a href="#"><img src="images/templatemo_skype.png" alt="Skype" /></a>
            <a href="#"><img src="images/templatemo_twitter.png" alt="Twitter" /></a><br><br>
           
        

        </div>
    </div><p></p>
    <div id="templatemo_menu"><p></p>
           <ul>
            <ul>
            <li><a href="index.php" >Inicio</a></li>
            <li><a href="horarios.php">Horarios</a></li>
            <li><a href="proxim.php">Prox. Estrenos</a></li>
            <li><a href="Snacks.php">Snacks</a></li>
           
            <li><a href="contacto.php">Contacto</a></li>
        </ul>
        
        </ul>

        
        
    </div>  -->
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <section class="form-register">
            <img src="images/Logo1.webp" width="400px" height="150px" class="logo">
            <div class="card-body">
            <form action ="../controller/crear.php" method ="POST">
            <h2 class="title-form">¡REGISTRATE ADMIN!</h2>
            <input title="Nombre del ADMIN" type="text" class ="form-control controls" name ="nombre" placeholder="Nombre" required> 
            <br>
            <input title="Campo obligatorio" class ="form-control controls" type="text" name ="apellido" placeholder="Apellido" required>
            <br>
            <input title="Campo obligatorio" type ="text" name = "usuario" class ="form-control controls" placeholder ="Nombre de usuario" required>
            <br>
            <input title ="Campo obligatorio" class="form-control controls" type ="password" name ="pass1" placeholder="Contraseña" required>
            <br>
            <input title ="Campo obligatorio" class="form-control controls" type ="password" name ="pass2" placeholder="Verificar Contraseña" required>
              <!--  <input type ="submit" value ="Registrate"  id ="AP"> -->
                <br>
                <br>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <center><button type="submit" class="btn btn-primary btn-neon AP" style="text-decoration:none; text-transform:uppercase">
                                <span id="span1"></span>
			                    <span id="span2"></span>
			                    <span id="span3"></span>
			                    <span id="span4"></span>
                                   REGISTRARME
                                </button></center>
                            </div>
                        </div>
                        
                        <center><p class="regist"><a class="link" href="index.php">Cancelar Registro</a></p></center>
            </form>
            </section>

</div>
</div>
</div>
</div>
</div>


</body>
</html>
